<?php 

include "connection.php"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="stylen.css">
    <script src="js/jquery-3.6.0.min.js" defer></script>
    <script src="js/password.js" defer></script>
    <script src="js/movies.js" defer></script>
    <script src="bootstrap/js/bootstrap.min.js" defer></script>
    <script src="https://google.com/recaptcha/api.js" async defer></script>
    <title>Netfish</title>
</head>
<body>
    <header>
        <nav>
            <div class="image1">
                <a href="index.php"><img src="image/NETFISH_LogoWebsite.jpg" style="height: 100px;"></a>
            </div>
            <ul>
                <li><a href="">Video's</a></li>
                <li><a href="">Beheer</a></li>
                <li><a href="login.php">Inloggen</a></li> 
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1 class='page-title uppercase'><span class='text-red'>R</span>eset wachtwoord</h1>
            <br>
            <form name="passwordReset" action="" method="post">
                <div class="form-group">
                    <div class="form-label">
                        <label for="email" class="form-label">Emailadres</label>
                    </div>
                    <div class="form-input"> 
                        <input type="email" name="email" class="form-control" placeholder="someone@example.com" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label"> 
                        <label for="password" class="form-label">Wachtwoord</label>
                    </div>
                    <div class="form-input"> 
                        <input type="password" name="password" class="form-control" placeholder="Password" id='password' value='' required>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <div class="form-input"> 
                        <input type="checkbox" onclick="showPassword()">Show Password
                    </div>
                </div> -->
                <div class="form-group">
                    <div class="form-label"> 
                        <label for="password" class="form-label">Herhaal wachtwoord</label>
                    </div>
                    <div class="form-input"> 
                        <input type="password" name="password_confirm" class="form-control" placeholder="Confirm Password" required>
                    </div>
                </div>    
                <div class="form-group">
                    <button type="submit" class="btn btn-dark uppercase" name="submit">Reset wachtwoord</button>   
                </div>
                
            </form>
        </div>
    </main>
</body>
</html>

<?php if (isset($_POST['submit'])) {
    if (isset($_GET['token']) && isset($_GET['timestamp'])) {
        // Get the token and timestamp from the URL
        $token = $_GET['token'];
        $timestamp1 = $_GET['timestamp'];
        //check email is valid with token
        $email = htmlspecialchars($_POST['email']);
        // Set the password in the hashed password
        $password = htmlspecialchars($_POST['password']);
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        try {
            // Checks for the token with the email
            $sql = 'SELECT * FROM user where email = ? AND token = ?';
            $stmt = $conn->prepare($sql);
            $stmt->execute([$email, $token]);
            $stmt = $stmt->fetch(PDO::FETCH_ASSOC);
            //check if the token is valid
            if ($stmt) {
                // Creates a second timestamp to get the difference between the first and second timestamp
                $timestamp2 = new DateTime('now');
                $timestamp2 = $timestamp2->getTimestamp();
                //if the token is valid and the email is valid, reset the password and the timestamp difference is less than 12 hours update password
                if ($timestamp2 - $timestamp1 < 43200) {
                    $query = 'UPDATE user SET password = ? WHERE email = ?';
                    $stmt = $conn->prepare($query);
                    $stmt->execute([$passwordHash, $email]);
                    if ($stmt) {
                        echo "<script>alert('Password has been successfully resetted.');
                            location.href='./index.php?page=login';</script>";
                    }
                } else {
                    echo "<script>alert('Link isn't valid anymore.');
                            location.href='./index.php';</script>";
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>
