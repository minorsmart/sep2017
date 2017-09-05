
# Installatie Arduino software op Mac #
 
## Voorbereiding ##
We gaan twee programma's installeren. Deze programma's downloaden we
van het internet. Apple ziet dit terecht als iets verdachts. Daarom
zul je eerst je mac moeten vertellen dat je weet wat je doet.

Normaal gesproken weigert OS X het installeren van programma's
die niet uit de app store komen. Er zijn twee manieren om OS X te
vertellen dat je de programma's wel vertrouwd en het standaard gedrag
wil overrulen. De makkelijkste is de volgende:

    1. Geef een rechter muis klik op de .dmg of .pkg die je hebt gedownload.

Dan verschijnt er een menu naast de file. Bovenin staat 'open met'.
    2. Klik op `open met`, je ziet nu dat je het bestand met 'installer' kan openen.
    3. Klik op `installer`

Je krijgt nu een mededeling dat het gevaarlijk is gedownloadde bestanden
te installeren. Je hebt nu echter toch de mogelijkheid op 'openen' te
klikken. Die had je normaal gesproken niet gehad als je meteen dubbel klikt 
op de .dmg of .pkg file.

## Wat gaan we doen? ##
Om de electronica te kunnen programmeren moet je verschillende programma's
hebben. Ten eerste een soort tekst verwerkingsprogramma om software
mee te schrijven. Dit heet een IDE (integrated development environment). 
Ten tweede een programma om wat je geschreven hebt om te zetten in nullen 
en enen die meteen door een processor begrepen worden (een compiler) en 
ten derde een programma dat het bestand met nullen en enen naar het board 
kopieerd. Dit noemt men het "flashen" van een board. Je schrijft namelijk
je gemaakte programma naar het `flash` geheugen van het board.

We gaan dus eerst de 'tekstverwerker' installeren (Arduino IDE). Die bevat
meteen ook al de software voor het omzetten en kopieren naar verschillende
boards, helaas echter niet voor het board dat wij gebruiken...

Dus we moeten ook een "omzet" programma (compiler toolchain) voor ons board
installeren en daarnaast een driver die ervoor zorgt dat het kopierprogramma 
(flash programma) via de USB-poort van de OS X met het board kan communiceren.

Daarnaast krijg je meteen ook de software die de leraren geschreven hebben
voor het board.

## 1e pakket: Arduino ##
Download het volgende bestand:
https://www.arduino.cc/download_handler.php?f=/arduino-1.8.4-macosx.zip

   1. Pak het uit
   2. Je hebt nu een bestand dat heet `arduino`.
   3. Verplaats dit naar je `Applicaties` directory.

Het Arduino programma is nu geinstalleerd.

   1. Start het Arduino programma
   2. Als het goed is, zie je nu in de directory 'Documents', de directory 'Arduino' verschijnen.
   3. Sluit het programma weer af

## 2e pakket: compiler toolchain voor het board
Volg de aanwijzingen op de volgende website:

https://github.com/espressif/arduino-esp32/blob/master/docs/arduino-ide/mac.md

Je hebt nu het 'omzet' (compiler) en kopieer (flash) programma geinstalleerd
voor het board. Als het goed is heb je nu een extra directory gekregen in je
'Documents/Arduino' directory. Deze heet 'hardware'. Je hebt nu dus twee directories
in deze directory:

    ~/Documents/Arduino
    ~/Documents/Arduino/hardware/
    ~/Documents/Arduino/libraries/

## 3e pakket: USB-serialport driver ##
Download de volgende file:
https://www.silabs.com/documents/public/software/Mac_OSX_VCP_Driver.zip

Pak ook deze file weer uit en installeer de .pkg. Je hebt nu de driver
geinstalleerd zodat het kopieer programma via de USB poort kan communiceren
met het board.

## 3e pakket: software geschreven door de HAN ##
Download de volgende file:
https://github.com/minorsmart/sep2017/tree/master/docs/onderwijs/software.zip

Pak de file uit. Je hebt nu twee directories gekregen: `src` en `libraries`.

  1. Kopieer de `src` directory naar ~/Documents/Arduino
  2. Kopieer alles in de `libraries` directory naar ~/Documents/Arduino/liberaries/

NB: in `1` kopier je dus de directory naar een andere directory. In `2` kopier je alle directories in de uitgepakte directory `libraries` naar de  ~/Documents/Arduino/liberaries/. Waarschijnlijk werkt het overschrijven van de libraries directory ook, maar dit is niet getest. Beter is het dus om gewoon de directories van elke library te kopieren.

Als het goed is ziet de directory structuur er nu zo uit:

    ~/Documents/Arduino/
    ~/Documents/Arduino/hardware
    ~/Documents/Arduino/src
    ~/Documents/Arduino/libraries

## Testen maar! ##
Als alles gelukt is, hoef je nu alleen maar de Arduino applicatie te
starten via 'launch pad'. Daar vind je de Arduino applicatie naast
alle andere applicaties. Als je het start kun je via 'File' en 'Open'
de bron code files openen die in de directory: ~/Documents/Arduino/src/
staan.
