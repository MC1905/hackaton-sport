# hackaton-sport

# Userdocumentatie

________________________________________________________________________________________
1. Login
Ga naar de loginpagina:
http://localhost/hackaton-sport/login.php
Klik op de knop "Login".
Je wordt automatisch ingelogd en doorgestuurd naar het dashboard.


2. Dashboard
Op het dashboard zie je een overzicht van je huidige abonnement en cursussen:

Mijn Abonnement: Hier kun je je abonnement instellen of wijzigen.
Mijn Cursussen: Hier kun je cursussen selecteren en start- en einddatums opgeven.
Uitloggen: Hiermee kun je uitloggen en terugkeren naar de loginpagina.


3. Abonnementen Beheren
Klik op "Mijn Abonnement" om naar de abonnementsinstellingen te gaan.
Selecteer het gewenste abonnement (1x per week, 2x per week, of Onbeperkt).
Klik op "Opslaan" om je keuze op te slaan.


4. Cursussen Beheren
Klik op "Mijn Cursussen" om naar de cursussenpagina te gaan.
Selecteer de gewenste cursussen door de checkboxes aan te vinken.
Vul de start- en einddatums in voor elke geselecteerde cursus.
Klik op "Opslaan" om je cursuskeuze op te slaan.


5. Uitloggen
Klik op "Uitloggen" om je sessie te beëindigen en terug te keren naar de loginpagina.
_______________________________________________________________________________________|

# Systeem documentatie


1. Project structuur
/hackaton-sport 
    ├── css/
    ├── index.php
    ├── abonnement.php
    ├── cursussen.php
    ├── login.php
    ├── logout.php
    └──  README.md
css/: Bevat de CSS-bestand voor de opmaak van de applicatie.
index.php: De dashboardpagina die alleen toegankelijk is na inloggen.
abonnement.php: Pagina waar gebruikers hun abonnement kunnen beheren.
cursussen.php: Pagina waar gebruikers hun cursussen kunnen selecteren en start- en einddatums kunnen invoeren.
login.php: Inlogpagina voor het systeem.
logout.php: Verwerkt het uitlogproces door de sessie te beëindigen.


2.Installatie-instructies

Download of clone de repository:
git clone https://github.com/MC1905/hackaton-sport
Plaats het project in een PHP-serveromgeving (bijvoorbeeld XAMPP of LAMP).

Zet de bestanden in de webroot (bijv. htdocs in XAMPP).
Start de PHP-server.

Open de applicatie in een webbrowser:
http://localhost/hackaton-sport/login.php


3. Sessiebeheer
Het systeem gebruikt PHP-sessies om te controleren of een gebruiker is ingelogd. Wanneer een gebruiker inlogt, wordt de variabele $_SESSION['loggedin'] ingesteld op true. Pagina's zoals index.php, abonnement.php, en cursussen.php controleren eerst of deze sessievariabele aanwezig is. Als dat niet zo is, wordt de gebruiker teruggestuurd naar de loginpagina.


4. Belangrijkste functies en pagina's
login.php: Verwerkt het inloggen van gebruikers.
index.php: Het dashboard dat alleen toegankelijk is voor ingelogde gebruikers.
abonnement.php: Pagina om het gebruikersabonnement te selecteren en te beheren.
cursussen.php: Pagina waar gebruikers hun cursussen kunnen selecteren en datums kunnen invoeren.
logout.php: Verwerkt het uitlogproces door de sessie te vernietigen.


