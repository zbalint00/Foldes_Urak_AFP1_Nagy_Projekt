# Funkcionális Specifikáció 
## 1.) Áttekintés
- Az oldal egy START gombra kattintva számokat jelenít meg, amit a felhasználónak az oldalon megjelenő számbillentyűkre kattintva időre bekell ütnie.
- A felhasználó az aktuális kép alatt látja, hogy hány kép van még hátra.
- 20 random kép megjelenítése után a felhasználó megkapja az eredményét és az átlag képenkénti sebességét, eredményét elmentheti, vagy újrakezdheti.
- Ha szeretné hogy az eredménye megjelenjen a ranksoron ahoz regisztrálnia kell, kérünk tőle egy e-mailt, felhasználónevet és jelszót.
- Hogyha a felhasználó bevan jelentkezve eredményének elmentése autómatikusan megtörténik.
- A felhasználó próbálkozásait, e-mail-jét, felhasználónevét és jelszavát adatbázisba biztonságosan mentjük el.
- A felhasználó kérheti az adatai és profilja eltávolítását, megtekintését a PROFIL oldalján.
- A ranksoron a felhasználóneve mellett megjelenik, hogy hány számot talált el és az átlagidő. 
## 2.) Jelenlegi helyzet
A cél egy olyan dinamikus weboldal készítése, melyen a felhasználónak rákell böknie, hogy mely számot látja kiírva a képernyőn. Ez alapján az oldal pontozza a teljesítményét, hányat sikerült eltalálnia az illetőnek, adatbázisba elmenti, a teszt végén kiírja azt. A számok egy "adatbázisból" lesznek kivágva, mindegyikük kézzel írt. A pontozás a teljesített idő alapján is szabályozva lesz.
## 3.) Követelménylista
  1. Reszponzív dizájn
  2. Felhasználói fiók létrehozása
  3. Felhasználói adatok biztonsága
  4. Felhasználói adatok törölhetősége
  5. Azonnal frissülő ranksor
  6. Számbillentyűzet létrehozása
  7. Adatok adatbázisba rendezése
## 4.) Követelmények
## 5.) Jelenlegi üzleti folyamatok modellje
Üzleti szereplők: 	
-	felhasználó

Üzleti munkatárs: 	
-	karbantartó

Üzleti entitások: 		
-	email cím
-	leaderboard

Üzleti folyamatok: 	
-	Új felhasználó felvétele a rendszerbe: A felhasználó email címe megadásával és egy saját felhasználói név megadásával regisztrálni tud az oldalra aminek az adatait titkosítva egy adatbázisban menti el a rendszer
-	Program menete: A felhasználó belépés után a Start gombra kattintva 20 random képet kap sorban egymás után amikről elkell dönteni-e, hogy 1-től 9-ig melyik számjegyet ábrázolja.
-	Értékelés: Minden egyes jó válasz adásért pontot kap a felhasználó, legvégén pedig megtudja nézni, hogy a ranglistán hanyadik helyen áll.

## 6.) Igényelt üzleti folyamatok
1. A felhasználó regisztrációs lehetősége.
2. A "Start" gombra kattintva elkezdődik a program.
3. 20 random képről eldönteni, hogy melyik számjegyet ábrázolja, egy számbillenytűzet segítségével.
4. Az eredményt pont, és átlagolt idő szerint rangsorba helyezi.
5. Ha a felhasználó regisztrált be kell jelentkeznie, hogy a rangsorba be kerülhessen. 

## 7.) Használati esetek
## 8.) Megfeleltetés, hogyan fedik le a használati esetek a követelményeket
## 9.) Képernyőtervek
## 10.) Forgatókönyv
## 11.) Funkció-követelmény megfeleltetés
## 12.) Fogalomszótár
- **Reszponzív felület** - Mobilon, Tableten, PC-n igazodik a
képernyőhöz a felület mérete, azaz több eszközön is probléma nélkül
üzemelhet.
- **MNIST database (Modified National Institute of Standards and Technology database)** - egy nagyméretű, kézzel írt számjegyek adatbázisa, amelyet általában különféle képfeldolgozó rendszerek betanítására használnak. Az adatbázist széles körben használják képzésre és tesztelésre is a gépi tanulás területén.
- **Adatbázis** - Az adatbázis azonos minőségű (jellemzőjű), többnyire strukturált adatok összessége, amelyet egy azok tárolására, lekérdezésére és szerkesztésére alkalmas szoftvereszköz kezel.

