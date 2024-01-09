<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylen.css" type="text/css">
    <title>Netfish</title>
</head>
<body>
    <header>
        
        <nav>
            <div class="image1">
                <a href="index.php"><img src="image/NETFISH_LogoWebsite.jpg" style="height: 100px;"></a>
            </div>
            <ul>
                <li><a href="videos.php">Video's</a></li>
                <li><a href="beheer.php">Beheer</a></li>
                <li><a href="login.php">Inloggen</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Wachtwoord vergeten?</h1>
        <form class="form1" method="post" action="login.php">
            <div class="form-group">
                <div class="form-label">
                    <label>Nieuw wachtwoord:</label>
                </div>
                <div class="form-input"> 
                    <input type="text" name="nieuw-wachtwoord" size="25" maxlength="25" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label">    
                    <label>Herhaal wachtwoord:</label>
                </div>
                <div class="form-input">    
                    <input type="password" name="wachtwoord" autocomplete="off" id="confirm_password" size="25" maxlength="25" required>
                </div>
            </div>
            <button type="submit" value="Opslaan">Opslaan</button>
            <button type="submit" value="annuleren"><a href="login.php">Annuleren</a></button>
        </form>
        
    </main>
    <footer>

    </footer>
</body>
</html>