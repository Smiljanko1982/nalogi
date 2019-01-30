# nalogi
Rešitve naloge 1 in 2

Naloga 1

Za rešitev naloge sem uporabil v funkciji formaX 2 for zanki, kjer sem postavil pogoj, da se izriše na ekran *, ko sta vrednosti i in j enaki ali ko je vsota obeh enaka 12.
V ostalih primerih pa se izriše na ekran _ .
Rešitev naloge 1 se nahaja v datoteki formaX.php in klic funkcije v datoteki naloga1-2.php.

Naloga 2

V datoteki db_connection.php se izvede povezava z bazo.
Najprej sem v bazi ajax ustvaril tabelo uporabniki s stolpcema id(ključ) in vnosi.  V nadaljevanju izberem iz baze vse podatke stolpca id v tabeli uporabniki in jih s pomočjo while zanke zapišem v padajoči seznam. V nadaljevanju želim pridobiti na podlagi izbranega id-ja iz seznama, vrednost iz stolpca vnosi. To naredim s funckijo onSelect, kjer pošljem GET zahtevo z URL-jem na datoteko nalozi_podatke.php. V datoteki nalozi_podatke.php preverim, če je nastavljen id (izbrani id iz seznama), ga shranim v spremenljivko v obliki niza in opravim SQL poizvedbo, kjer poiščem vrednost vnosi po izbranem id-ju in shranim vrednost v novo spremenljivko. V nadaljevanju pridobljeno vrednost niza dodam v HTML element input, kjer bom lahko v nadaljevanju vrednosti vnosa spreminjal.
Nato spremembo vrednosti  vnosa v input HTML znački želim shraniti v bazo, kar naredim z jQuery event handler-jem click s funkcijo, kjer pridobim ustrezne vrednosti in naredim POST metodo preko Ajax klica. V Ajax klicu navedem kot URL datoteko posodobi.php, tip metode in podatke, ki jih bom pošiljal. V datoteki posodobi.php preverim, če je nastavljena vrednost id, ter v nadaljevanju shranimo vrednosti id in vnosi pridobljene iz metode post v spremenljivke, ki jih bom uporabil v nadaljevanju. Na koncu še posodobim nove vrednosti vnosi preko sql poizvedbe, kjer je vrednost id-ja vrednost izbranega id-ja iz seznama.

Če je Ajax klic uspešen, se stran posodobi. 


