<?php

    include 'connection.php';

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">

    <title>De Veerpoort</title>
</head>
<body>
    <header>
        <div class="header1">
            <div class="image1">
                <img src="afbeelding/logo3.png" style="width: 100px;">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Homepage</a></li><!-- niet aanwezig -->
                    <li><a class="active" href="bestelmenu.php">Bestelmenu</a></li>
                    <li><a href="contact.php">Contact</a></li><!-- niet aanwezig -->
                    <li style="width: 50px">
                        <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                            </svg>
                        </span>
                        </div>
                    </li>
                    <li style="width: 200px">
                        <a href="//contact.html" title="Contact opnemen met De Veerpoort" class="button black">
                            <span class="button-contact">Contact opnemen</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <aside class="winkelmandje">
            <h1>Bestelling</h1>
            <div class="navbar">
                <!-- hier zie je wat je bestelt en op de knop kan je naar checkout om nog te checken en dan afrekenen -->
                <!-- checkout pagina niet aanwezig -->
                <p>Broodje Doner</p>
                <p>Frikandel</p>
                <p>Fanta</p>
            </div>
            <button class="rekening">Rekening</button>
        </aside>
        <!-- je kan heen en weer om te kiezen welke categorie je wilt -->
        <div class="sticky">
            <div class="carousel-container">
                <div class="carousel-wrapper">
                <div class="carousel-slide"><button class="tablink" onclick="openPage('Patat', this, 'lightgray') "id="defaultOpen">Patat</button></div>
                <div class="carousel-slide"><button class="tablink" onclick="openPage('Snacks', this, 'lightgray')">Snacks</button></div>
                <div class="carousel-slide"><button class="tablink" onclick="openPage('Broodjes', this, 'lightgray')">Broodjes</button></div>
                <div class="carousel-slide"><button class="tablink" onclick="openPage('Drinken', this, 'lightgray')">Drinken</button></div>
                <div class="tab"></div>
            </div>
            </div>
        </div>
        <!-- bij elke tab komt er een lijst met wat je kan kiezen -->
        <div id="Patat" class="tabcontent">
            <h3>Patat</h3>
            <div class="productnaam">
                <div class="product">
                    <img src="image/kleinepatat.jpg">
                    <div class="productcolumn">
                        <div class="naamenprijs">
                            <h2>Kleine Patat € 1,50</h2>
                        </div>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>
                <div class="product">
                    <img src="image/mediumpatat.jpg">
                    <div class="productcolumn">
                        <div class="naamenprijs">
                            <h2>Medium Patat € 4,00</h2>
                        </div>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>
                <div class="product">
                    <img src="image/familiepatat.jpg">
                    <div class="productcolumn">
                        <div class="naamenprijs">
                            <h2>Familie Patat € 7,50</h2>
                        </div>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>
            </div>
        </div>

        <div id="Snacks" class="tabcontent">
            <h3>Snacks</h3>
            <div class="productnaam">
                <div class="product">
                    <img src="image/kroket.jpg">
                    <div class="productcolumn">
                        <div class="naamenprijs">
                            <h2>Kroket € 2,50</h2>
                        </div>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>
                <div class="product">
                    <img src="image/frikandel.jpg">
                    <div class="productcolumn">
                        <div class="naamenprijs">
                            <h2>Frikandel € 2,70</h2>
                        </div>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>
                <div class="product">
                    <img src="image/loempia.jpg">
                    <div class="productcolumn">
                        <div class="naamenprijs">
                            <h2>Loempia € 2,40</h2>
                        </div>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>
                <div class="product">
                    <img src="image/kipnugget.jpg">
                    <div class="productcolumn">
                        <div class="naamenprijs">
                            <h2>Kipnugget € 1,90</h2>
                        </div>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>
                <div class="product">
                    <img src="image/mexicano.jpg">
                    <div class="productcolumn">
                        <div class="naamenprijs">
                            <h2>Mexicano € 3,10</h2>
                        </div>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>
            </div>
        </div>

        <div id="Broodjes" class="tabcontent">
            <h3>Broodjes</h3>
            <div class="productnaam">
                <div class="product">
                    <img src="image/broodjebacon.jpg">
                    <div class="productcolumn">
                        <div class="naamenprijs">
                            <h2>Broodje Bacon € 3,50</h2>
                        </div>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>
                <div class="product">
                    <img src="image/broodjekaas.jpg">
                    <div class="productcolumn">
                        <div class="naamenprijs">
                            <h2>Broodje Kaas € 1,90</h2>
                        </div>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>
                <div class="product">
                    <img src="image/broodjedoner.jpg">
                    <div class="productcolumn">
                        <div class="naamenprijs">
                            <h2>Broodje Doner € 3,50</h2>
                        </div>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>
                <div class="product">
                    <img src="image/broodjehamburger.jpg">
                    <div class="productcolumn">
                        <div class="naamenprijs">
                            <h2>Broodje Hamburger € 3,50</h2>
                        </div>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>
                <div class="product">
                    <img src="image/broodjeshoarma.jpg">
                    <div class="productcolumn">
                        <div class="naamenprijs">
                            <h2>Broodje Shoarma € 3,50</h2>
                        </div>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>
            </div>
        </div>

        <div id="Drinken" class="tabcontent">
            <h3>Drinken</h3>
            <div class="productnaam">
                <div class="product">
                    <img src="image/7-up.png">
                    <div class="productcolumn">
                        <div class="naamenprijs">
                            <h2>7up € 3,00</h2>
                        </div>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>
                <div class="product">
                    <img src="image/cola (2).png">
                    <div class="productcolumn">
                        <div class="naamenprijs">
                            <h2>Cola € 3,00</h2>
                        </div>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>
                <div class="product">
                    <img src="image/cola light.png">
                    <div class="productcolumn">
                        <div class="naamenprijs">
                            <h2>Cola light € 2,50</h2>
                        </div>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>
                <div class="product">
                    <img src="image/fanta (3).png">
                    <div class="productcolumn">
                        <div class="naamenprijs">
                            <h2>Sinas € 3,00</h2>
                        </div>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="image1">
            <img src="afbeelding/logo.png" style="width: 100px;">
        </div>
        <address>
            <h5>Openingstijden</h5>
            <h4 style="text-align: left;">ma tot vr van 8:00 tot 17:00<br>
                za van 9:00 tot 16:00<br>
                zo gesloten</h4>
        </address>
        <address>
            <h5>De Veerpoort</h5>
            <h4 style="text-align: left;">Buiten de Veerpoort 1a<br>
                2781 CC Schoonhoven<br>
                0182 38 27 01<br>
                info@veerpoort.nl</h4>
        </address>
    </footer>
    <!--<script src="script.js"></script>-->
<!--In javascript-document wilt het niet werken. Tot nu toe werkt de script wel als het hier in staat.-->
    <script>
        function openPage(pageName,elmnt,color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
</body>
</html>