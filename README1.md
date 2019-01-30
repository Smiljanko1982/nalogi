# nalogi
Rešitve naloge 1 in 2

Naloga 1

Za rešitev naloge sem uporabil v funkciji formaX 2 for zanki, kjer sem postavil pogoj da se izriše na ekran * ko sta vrednosti i in j enaki ali ko je vsota obeh enaka 12.
V ostalih primerih pa se izriše na ekran _ .
Rešitev naloge 1 se nahaja v datoteki formaX.php in klic funkcije v datoteki naloga1-2.php.

Naloga 2

V datoteki db_connection.php se izvede povezava z bazo.
Najprej smo v bazi ajax ustvaril tabelo uporabniki s stolpcema id(ključ) in vnosi.  V nadaljevanju izberemo iz baze vse podatke 
stolpca id v tabeli uporabniki in jih s pomočjo while zanke zapišemo v padajoči seznam . V nadaljevanju želimo pridobiti 
na podlagi izbranega id-ja iz seznama,  vrednost iz stolpca  vnosi. To naredimo s funckijo onSelect, kjer pošljemo GET zahtevo 
z URL-jem na datoteko nalozi_podatke.php. V datoteki nalozi_podatke.php preverimo če je nastavljen id (izbrani id iz seznama ), 
ga shranimo v spremenljivko v obliki niza in opravimo SQL poizvedbo, kjer poiščemo vrednost vnosi po izbranem id-ju in shranimo 
vrednost v novo spremenljivko. V nadaljevanju pridobljeno vrednost niza dodamo v HTML element input, kjer bomo lahko v
nadaljevanju vrednosti vnosa spreminjali.Nato spremembo  vrednosti  vnosa v input HTML znački želimo shraniti v bazo,
kar naredimo z jQuery event handler-jem click s funkcijo kjer pridobimo ustrezne vrednosti in naredimo POST metodo preko 
Ajax klica. V Ajax klicu navedemo kot URL datoteko posodobi.php, tip metode in podatke ki jih bomo pošiljali. V datoteki 
posodobi.php preverimo, če je nastavljena vrednost id, ter v nadaljevanju shranimo vrednosti id in vnosi pridobljene iz
metode post v spremenljivke, ki jih bomo v nadaljevanju uporabili  . Na koncu še posodobimo nove vrednosti  vnosi preko 
sql poizvedbe, kjer je vrednost id-ja vrednost izbranega id-ja iz seznama. 
Če je Ajax klic uspešen, se stran posodobi. 
