<?php
    include 'samenvoegen.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Soprano's Pizza</title>
</head>
<body>
    <header>
        <div class="image4">
            <div class="image1">
                <img src="image/logo soprano.png" style="width: 100px;">
            </div>
            <div class="image5">    
                <img src="image/logo tekst soprano.2.png" style="width: 600px;">
            </div>    
            <div class="winkelwagen">
                <a href="winkelwagen.html"><img src="image/winkelwagen (2).png" style="width: 125px; height: 100px;"></a>
            </div>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Homepage</a></li>
            <li><a href="menukaart.php">Menukaart</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="over-ons.html">Over ons</a></li>
        </ul>
    </nav>
    <main>
        <h1>Contact en service</h1>
        <div class="contact">
    
            <div class="gegevens">
            <h2>Pizzaria</h2>
            <h6>Soprano's Pizza<br>
                Ziendeweg 4<br>
                2471 PZ Zwammerdam</h6>
            
            <h2>Openingstijden</h2>
            <h6>ma tot vr van 8:00 tot 17:00<br>
                za van 9:00 tot 16:00<br>
                zo gesloten</h6>

            <h2>Contact</h2>
            <h6>Telnr 0172 - 582 659<br>
                info@sopranospizza.nl</h6>
            </div>
            <div class="service">
                <h2>Klantenservice</h2>
            
                <p>Voor u vragen kunt u hieronder een formulier invullen:</p>
            
                <form action="winkelwagen.html" class="service-contact" method="post">
                    <section class="naam1">
                        <label for="naam">Naam</label>            
                        <input type="text" name="naam" id="naam">
                    </section>
                    
                    <section class="e-mail1">
                        <label for="e-mail">E-mailadres</label>            
                        <input type="text" name="e-mail" id="e-mail">
                    </section>

                    <section class="telefoonnummer1">
                        <label for="telefoonnummer">Telefoonnummer</label>
                        <input type="text" name="telefoonnummer" id="telefoonnummer">
                    </section>
                    
                    <section class="opties1">
                        <span>Ik heb een vraag over</span>
                        <select name="opties" id="opties">
                            <option selected="selected" value=""></option>
                            <option value="Bestelling">Bestelling</option>
                            <option value="Nieuwe ideeen">Nieuwe ideeën</option>
                            <option value="Werken bij ons">Werken bij ons</option>
                            <option value="Overig">Overig</option>
                        </select>
                    </section>
                    
                    <section class="extra-info1">
                        <label for="extra">Bericht of opmerking</label>
                        <textarea id="extra" name="extra" rows="5" cols="40"></textarea>
                    </section>
                    
                    <section class="verzenden1">
                        <button type="submit" name="submit">Verzenden</button>
                    </section>
                </form>
            </div>
        </div>
    </main>
    

    <footer>
        <address>
            <h5>Pizzaria</h5>
            <h4 style="text-align: left;">Soprano's Pizza<br>
                Ziendeweg 4<br>
                2471 PZ Zwammerdam</h4>
        </address>
        <address>
            <h5>Openingstijden</h5>
            <h4 style="text-align: left;">ma tot vr van 8:00 tot 17:00<br>
                za van 9:00 tot 16:00<br>
                zo gesloten</h4>
        </address>
    </footer>
</body>
</html>