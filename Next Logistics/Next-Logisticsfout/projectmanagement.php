<?php
include 'dtb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project beheer</title>
</head>
<body>
    <form>
        <!-- out table project koppeling maymagament!?
        <label for="projectcode">Projectcode:</label>
        <input type="text" id="projectcode" name="projectcode">

        <label for="date">Date:</label>
        <input type="date" id="date" name="date">-->

        <!-- out table projectdata
        <label for="start-time">Start Time:</label>
        <input type="time" id="start-time" name="start-time">
        -->
        <!-- out table projectdata
        <label for="end-time">End Time:</label>
        <input type="time" id="end-time" name="end-time">
        -->
        <!-- out table project
        <label for="total_hours">Totale uren:</label>
        <input type="text" id="total_hours" name="total_hours" readonly>
        -->
        <!-- out table projectdata
        <label for="description">Toelichting:</label>
        <input type="text" id="description" name="description">
        -->
        <!-- out table project
        <button type="button" onclick="calculateTotalHours()">Bereken totale uren</button>
        -->
        <!--  <input type="submit" value="Submit">
        Projectbeheer
        Om uren te kunnen boeken op een project, zijn van dat project in ieder geval de onderstaande gegevens nodig.
            Naam
            Code
            Startdatum
            Geplande einddatum
            Beschikbare uren in het project

       urenregistratie
            Gewerkte uren inboeken (op gekoppeld project).
            Overzicht opvragen van eigen geboekte uren.

       projectbeheer
            Totaaloverzicht lopende projecten met geboekte uren.
            Overzicht uren per werknemer per project.
-->
    </form>
</body>
</html>
<script>
    function calculateTotalHours() {
        // Hier kun je JavaScript gebruiken om de totale uren te berekenen
        var startTime = document.getElementById('start-time').value;
        var endTime = document.getElementById('end-time').value;

        // Voer de berekening uit en vul het totale uren veld in
        // (Dit is een eenvoudig voorbeeld, je moet mogelijk de tijd notatie verwerken en rekening houden met verschillende dagen)
        var totalHours = calculateTimeDifference(startTime, endTime);
        document.getElementById('total_hours').value = totalHours;
    }

    function calculateTimeDifference(startTime, endTime) {
        // Implementeer hier je logica om het verschil tussen begintijd en eindtijd te berekenen
        // en retourneer het resultaat in het juiste formaat
    }
</script>