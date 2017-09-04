= Installatie Arduino software op Mac
== Voorbereiding
We gaan twee programma's installeren. Deze programma's downloaden we
van het internet. Apple ziet dit terecht als iets verdachts. Daarom
zul je eerst je mac moeten vertellen dat je weet wat je doet.

Normaal gesproken weigert de Mac OS X het installeren van programma's
die niet uit de app store komen. Er zijn twee manieren om OS X te
vertellen dat je de programma's wel vertrouwd en het standaard gedrag
wil overrulen. De makkelijkste is de volgende:

Doe een rechter muis klik op de .dmg of .pkg die je hebt gedownload.
Dan verschijnt er een menu naast de file. Bovenin staat 'open met'.
Klik daarop, je ziet nu dat je het bestand met 'installer' kan openen.
Doe dit.
Je krijgt nu een mededeling dat het gevaarlijk is gedownloadde bestanden
te installeren. Je hebt nu echter toch de mogelijkheid op 'openen' te
klikken. Die had je normaal niet gehad als je meteen dubbel klikt op
de .dmg of .pkg file.

== Wat gaan we doen?
Om de electronica te kunnen programmeren moet je verschillende programma's
hebben. Ten eerste een soort tekst verwerkingsprogramma om software
mee te schrijven. Ten tweede een programma om wat je geschreven hebt
om te zetten in nullen en enen die meteen door een processor begrepen
worden en ten derde een programma dat het bestand met nullen en enen
naar het board kopieerd.

We gaan dus eerst de 'tekstverwerker' installeren (een IDE). Die bevat
meteen ook al de software voor het omzetten en kopieren naar het board.
Alleen moet er ook een driver geinstalleerd worden om ervoor te zorgen
dat het kopierprogramma via de USB-poort met het board kan communiceren.
Daarnaast gaan we nog even de software waarmee we het board gaan programmeren
downloaden en op de goede plek zetten.

== 1e pakket: Arduino
Download het volgende bestand:
https://www.arduino.cc/download_handler.php?f=/arduino-1.8.4-macosx.zip

Pak het uit en installeer vervolgens Arduino door te dubbelklikken op
de .dmg file.

== 2e pakket: USB-serialport driver
Download het volgende bestand:
https://www.silabs.com/documents/public/software/Mac_OSX_VCP_Driver.zip

Pak ook dit bestand weer uit en installeer de .pkg

== 3e pakket: software geschreven door de HAN
Download het volgende bestand:
<> 

Pak het bestand uit. Je hebt nu twee directories. De 'src' directory
kopieer je naar Documents/Arduino.
Kopieer alles in de 'libraries' directory naar Documents/Arduino/liberaries/.
Als het goed is ziet de directory structuur er nu zo uit:

~/Documents/Arduino/
~/Documents/Arduino/hardware
~/Documents/Arduino/src
~/Documents/Arduino/libraries
  

== Testen maar!
Als alles gelukt is, hoef je nu alleen maar de Arduino applicatie te
starten via 'launch pad'. Daar vind je de Arduino applicatie naast
alle andere applicaties. Als je het start kun je via 'File' en 'Open'
de bron code file openen die in de directory: ~/Documents/Arduino
staat.


