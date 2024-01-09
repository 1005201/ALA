<?php

    include 'samenvoegen.php';

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
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
        <aside class="winkelmandje">
            <h1>Bestelling</h1>
            <div class="navbar">
                <!-- voor presentatie nog ver aan werken -->
                <p>Margherita</p>
                <p>Quattro formaggio</p>
                <p>Milkshake vanille</p>
            </div>
            <button class="rekening">Rekening</button>
        </aside>
        <h1>Pizza</h1>
        <div class="pizzanaam">
            <div class="pizza">
                <img src="image/pizza margherita.png">
                <div class="productcolumn">
                    <div class="naamenprijs">
                        <h2>Margherita</h2><h2>€ 9,50</h2>
                    </div>
                    <h4>Pomodoro, verse mozzarella, basilicum, Grana Padano</h4>
                    <br>
                    <div class="keuze">
                        <select name="opties" id="opties">
                            <option value=" ">Kies een formaat</option>
                            <option value="medium">medium pizza (25 cm)</option> 
                            <option value="large">large pizza (35 cm)</option>
                            <option value="calzone">calzone (opgevouwen pizza)</option>
                        </select>
                        <button class="bestellen">Bestellen</button>
                    </div>
                </div>    
            </div>
            
            <div class="pizza">
                <div class="productcolumn">
                    <div class="naamenprijs">
                        <h2>Quattro formaggio</h2><h2>€ 10,00</h2>
                    </div>
                    <h4>Extra vierge olijfolie, gerookte mozzarella, <br>verse mozzarella, gorgonzola, Grana Padano, basilicum</h4>
                    <br>
                    <div class="keuze">
                        <select name="opties" id="opties">
                            <option value=" ">Kies een formaat</option>
                            <option value="medium">medium pizza (25 cm)</option> 
                            <option value="large">large pizza (35 cm)</option>
                            <option value="calzone">calzone (opgevouwen pizza)</option>
                        </select>
                        <button class="bestellen">Bestellen</button>
                    </div>
                </div>
                <img src="image/pizza Quattro formaggio.png">    
            </div>
            
            <div class="pizza">
                <img src="image/pizza salami.2.png">
                <div class="productcolumn">
                    <div class="naamenprijs">
                        <h2>Salami</h2><h2>€ 8,00</h2>
                    </div>
                    <h4>Marinara, mozzarella, pepperoni</h4>
                    <br>
                    <div class="keuze">
                        <select name="opties" id="opties">
                            <option value=" ">Kies een formaat</option>
                            <option value="medium">medium pizza (25 cm)</option> 
                            <option value="large">large pizza (35 cm)</option>
                            <option value="calzone">calzone (opgevouwen pizza)</option>
                        </select>
                        <button class="bestellen">Bestellen</button>
                    </div>
                </div>   
            </div>
            
            <div class="pizza">
                <div class="productcolumn">
                    <div class="naamenprijs">
                        <h2>Vegetariano</h2><h2>€ 9,00</h2>
                    </div>
                    <h4>Champignons, mozzarella, zwarte olijven, <br>groene en rode peper, ui, oregano</h4>
                    <br>
                    <div class="keuze">
                        <select name="opties" id="opties">
                            <option value=" ">Kies een formaat</option>
                            <option value="medium">medium pizza (25 cm)</option> 
                            <option value="large">large pizza (35 cm)</option>
                            <option value="calzone">calzone (opgevouwen pizza)</option>
                        </select>
                        <button class="bestellen">Bestellen</button>
                    </div>
                </div>
                <img src="image/pizza vegetariana.png">    
            </div>		
            
            <div class="pizza">
                <img src="image/pizza pollo.png"> 
                <div class="productcolumn">
                    <div class="naamenprijs">
                        <h2>Pollo</h2><h2>€ 10,50</h2>
                    </div>
                    <h4>Kipblokjes, champignons en mozzarella</h4>
                    <br>
                    <div class="keuze">
                        <select name="opties" id="opties">
                            <option value=" ">Kies een formaat</option>
                            <option value="medium">medium pizza (25 cm)</option> 
                            <option value="large">large pizza (35 cm)</option>
                            <option value="calzone">calzone (opgevouwen pizza)</option>
                        </select>
                        <button class="bestellen">Bestellen</button>
                    </div>
                </div>
            </div>		
            
            <div class="pizza">
                <div class="productcolumn">
                    <div class="naamenprijs">
                        <h2>Shoarma</h2><h2>€ 9,50</h2>
                    </div>
                    <h4>Tomatensaus, mozzarella, shoarma, knoflooksaus</h4>
                    <br>
                    <div class="keuze">
                        <select name="opties" id="opties">
                            <option value=" ">Kies een formaat</option>
                            <option value="medium">medium pizza (25 cm)</option> 
                            <option value="large">large pizza (35 cm)</option>
                            <option value="calzone">calzone (opgevouwen pizza)</option>
                        </select>
                        <button class="bestellen">Bestellen</button>
                    </div>
                </div>
                <img src="image/pizza Shoarma.png">    
            </div>
            
            <div class="pizza">
                <img src="image/pizza sopranos delux.png"> 
                <div class="productcolumn">
                    <div class="naamenprijs">
                        <h2>Sopranos Deluxe</h2><h2>€ 10,00</h2>
                    </div>
                    <h4>Rundvlees, worst, pepperoni, uien, <br>zwarte olijven, champignons, mozzarella</h4>
                    <br>
                    <div class="keuze">
                        <select name="opties" id="opties">
                            <option value=" ">Kies een formaat</option>
                            <option value="medium">medium pizza (25 cm)</option> 
                            <option value="large">large pizza (35 cm)</option>
                            <option value="calzone">calzone (opgevouwen pizza)</option>
                        </select>
                        <button class="bestellen">Bestellen</button>
                    </div>
                </div>
            </div>		
            
            <div class="pizza">
                <div class="productcolumn">
                    <div class="naamenprijs">
                        <h2>Bolognese</h2><h2>€ 8,00</h2>
                    </div>
                    <h4>Tomaten, gekruid rundergehakt, mozzarella, Edammer kaas</h4>
                    <br>
                    <div class="keuze">
                        <select name="opties" id="opties">
                            <option value=" ">Kies een formaat</option>
                            <option value="medium">medium pizza (25 cm)</option> 
                            <option value="large">large pizza (35 cm)</option>
                            <option value="calzone">calzone (opgevouwen pizza)</option>
                        </select>
                        <button class="bestellen">Bestellen</button>
                    </div>
                </div>
                <img src="image/pizza bolognese.png">    
            </div>
            
            <div class="pizza">
                <img src="image/pizza tonno.png"> 
                <div class="productcolumn">
                    <div class="naamenprijs">
                        <h2>Tonno</h2><h2>€ 9,00</h2>
                    </div>
                    <h4>Passata, mozzarella, tonijn, rode ui</h4>
                    <br>
                    <div class="keuze">
                        <select name="opties" id="opties">
                            <option value=" ">Kies een formaat</option>
                            <option value="medium">medium pizza (25 cm)</option> 
                            <option value="large">large pizza (35 cm)</option>
                            <option value="calzone">calzone (opgevouwen pizza)</option>
                        </select>
                        <button class="bestellen">Bestellen</button>
                    </div>
                </div> 
            </div>			
            
            <div class="pizza">
                <div class="productcolumn">
                    <div class="naamenprijs">
                        <h2>Hawaï</h2><h2>€ 9,50</h2>
                    </div>
                    <h4>Mozzarella, gerookte ham, ananas</h4>
                    <br>
                    <div class="keuze">
                        <select name="opties" id="opties">
                            <option value=" ">Kies een formaat</option>
                            <option value="medium">medium pizza (25 cm)</option> 
                            <option value="large">large pizza (35 cm)</option>
                            <option value="calzone">calzone (opgevouwen pizza)</option>
                        </select>
                        <button class="bestellen">Bestellen</button>
                    </div>
                </div>
                <img src="image/pizza hawai.png">    
            </div> 
        </div>

        <h1>Drinken</h1>
        <div class="drinkennaam">
            <div class="drinken">
                <img src="image/7-up.png">
                <div class="drinkencolumn">
                    <div class="drinkprijs">
                        <h2>7up</h2><h2>€ 3,00</h2>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div> 
            </div>
            <div class="drinken">
                <img src="image/cola (2).png">
                <div class="drinkencolumn">
                    <div class="drinkprijs">
                        <h2>Cola</h2><h2>€ 3,00</h2>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>    
            </div>
        
            <div class="drinken">
                <img src="image/cola light.png">
                <div class="drinkencolumn">
                    <div class="drinkprijs">
                        <h2>Cola light</h2><h2>€ 2,50</h2>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>    
            </div>
            <div class="drinken">
                <img src="image/fanta (3).png">
                <div class="drinkencolumn">
                    <div class="drinkprijs">
                        <h2>Sinas</h2><h2>€ 3,00</h2>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>    
            </div>
        
            <div class="drinken">
                <img src="image/chocomel (4).png" style="height: 350px; justify-content: center;">
                <div class="drinkencolumn">
                    <div class="drinkprijs">
                        <h2>Chocomelk</h2><h2>€ 2,00</h2>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>    
            </div>
            <div class="drinken">
                <img src="image/fristi (2).png">
                <div class="drinkencolumn">
                    <div class="drinkprijs">
                        <h2>Fristi</h2><h2>€ 2,00</h2>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>    
            </div>
           
            <div class="drinken">
                <img src="image/appelsap.png">
                <div class="drinkencolumn">
                    <div class="drinkprijs">
                        <h2>Appelsap</h2><h2>€ 2,00</h2>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>    
            </div>
            <div class="drinken">
                <img src="image/red bull.1.png">
                <div class="drinkencolumn">
                    <div class="drinkprijs">
                        <h2>Red bull</h2><h2>€ 2,50</h2>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>    
            </div>
          
            <div class="shake">
                <img src="image/milkshake vanille.png" style="width: auto; height: 350px">
                <div class="drinkencolumn" style="width: 370;">
                    <div class="milk">
                        <h2>Milkshake vanille</h2><h2>€ 3,50</h2>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>    
            </div>
            <div class="shake">
                <img src="image/milkshake choco.png" style="width: auto; height: 350px">
                <div class="drinkencolumn" style="width: 370;">
                    <div class="milk">
                        <h2>Milkshake choco</h2><h2>€ 3,50</h2>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>    
            </div>
            
            <div class="shake">
                <img src="image/milkshake aardbei.png" style="width: auto; height: 350px">
                <div class="drinkencolumn" style="width: 370;">
                    <div class="milk">
                        <h2>Milkshake aardbei</h2><h2>€ 3,50</h2>
                    </div>
                    <button class="bestellen">Bestellen</button>
                </div>    
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