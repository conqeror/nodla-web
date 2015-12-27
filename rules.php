<!DOCTYPE html>
<html lang="sk">

<head>
    <?php include "head.php" ?>
</head>

<body>


    <?php include "navbar.php" ?>

    <!-- let the content begin -->
    <div class="container first">
    <h1>Informácie a pravidlá</h1>
    <hr>
    <div class="col-xs-12" style="height:30px;"></div>
        <!-- Navigation Buttons -->
        <div class="col-md-3">
          <ul class="affix nav nav-pills nav-stacked" id="myTabs">
            <li class="active"><a href="#info" data-toggle="pill">Dôležité informácie</a></li>
            <li><a href="#signup" data-toggle="pill">Prihlasovanie a platba</a></li>
            <li><a href="#rules" data-toggle="pill">Pravidlá</a></li>
            <li><a href="#points" data-toggle="pill">Bodovanie a nápovedy</a></li>
            <li><a href="#bring" data-toggle="pill">Čo si doniesť</a></li>
            <li><a href="#lastinfo" data-toggle="pill">Posledné informácie</a></li>
            <hr>
            <li><a href="#all" data-target="#info, #signup, #rules, #points, #bring, #lastinfo" data-toggle="pill">Zobraz všetko</a></li>
          </ul>
        </div>

        <!-- Content -->
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane fade in active" id="info"><h2>Dôležité informácie</h2>
          <ul>
      		<li>Štvrtý ročník šifrovacej hry Nôdľa sa uskutoční v <strong>sobotu 20. februára 2016.</strong></li>
      		<li>Nôdľa bude prebiehať cez deň <strong>od 9:00 do 21:00</strong>. </li>
      		<li>Nôdľa bude v Bratislave a jej blízkom okolí. Dĺžka trasy je okolo 15km. Miesto štartu zverejníme v posledných informáciách.</li>
      		<li>Nôdľa je terénna šifrovačka. Akože fakt. Les, blato, voda, sneh. Cieľ je vo vykúrenom mieste a veľmi sa na vás tam tešíme :-)</li>
      		<li>Nôdľa je tímová hra, počet ľudí v tíme je maximálne 4.</li>
      		<li>Obtiažnosť šifier na Nôdli by nemala byť príliš veľká. Očakávame, že aj šikovné začiatočnícke tímy nezamrznú (v akomkoľvek význame) niekde na začiatku.</li>
      		<li>Napriek tomu aj skúsené tímy budú mať kopu zážitkov, viď šifry a fotky z minulého ročníka.</li>
      		<li>Úplní začiatočníci môžu prísť tiež, dajte nám vedieť a budeme k vám extra milí :-)</li></div>
            <div class="tab-pane fade" id="signup"><h2>Prihlasovanie a platba štartovného</h2>
            		<p>
            		<a href="register.php">Prihlasovanie</a> je otvorené do 14.2. (prihláška je ideálny Valentínsky darček ;-), prihlasovanie po tomto termíne je možné po konzultácii s organizátormi.
            		Čím skôr sa však prihlásite, tým lepšie pre nás - objednávame nejaké veci a neskoré prihlášky nám to komplikujú. Ďakujeme.
            		Ak nemáš tím, daj nám vedieť a niečo vymyslíme. Alebo rovno napíš do <a href="forum.php">fóra</a>.
            		</p>

                <p>
                    Po prihlásení je potrebné uhradiť poplatok 12&euro; na tím najneskôr do 14. 2. Platí sa na účet SK28 8360 5207 0042 0394 6590. Pri platbe uveďťe ID vášho tímu ako variabilný
                    symbol. Tieto informácie vám zašleme aj e-mailom po registrácií. Ak by ste mali problém uhradiť tento poplatok prevodom na účet (ak ste napríklad z Česka), ozvite sa nám.
                </p>
                <p><b>Hry sa zúčastňujete na vlastnú zodpovednosť. Minimálny vek je preto 18 rokov.</b></p>
            </div>
            <div class="tab-pane fade" id="rules"><h2>Pravidlá</h2>
                <p>V princípe platia bežné šifrovačkové pravidlá. Tu je zopár pravidiel,
                ktoré chceme zdôrazniť alebo sa mierne líšia od iných šifrovačiek.</p>
                <ul>
                    <li>Je zakázané spolupracovať pri riešení šifry s ľudmi, ktorí nie sú členmi tímu.</li>
                    <li>Môžete používať ľubovoľné šifrovacie pomôcky, internet, výpočtovú techniku,
                    otvárač na konzervy, navigáciu GPS a pýtať sa (faktografické) otázky nesúťažiacich ľudí
                    - napríklad zavolať svojej babičke, že kedy sa sadia zemiaky.</li>
                    <li>Zo stanoviska si môžete zobrať 2 kópie zadania (väčšinou viditeľne oddelené na 1 papieri A4), ak nie je uvedené ináč.</li>
                    <li>Stanoviská netreba držať v tajnosti, naopak, budeme radi, ak si navzájom pomôžete
                    s dohľadávaním stanovísk: "ahojte, áno, stanovisko je pri tamtom dube".
                    Pozor však na civilistov.</li>
                    <li>Udržiavajte odstup od iných lúštacich tímov. Môžete riešiť aj v blízkosti stanoviska -
                    (napríklad ak prší, tak sa kľudne ukryte pod striešku, kde sú zadania) -
                    ale v tom prípade príchodzím tímom zadania distribuujte..</li>
                    <li>Ak máte podozrenie, že stanovisko chýba, alebo ak predčasne dochádzajú zadania kontaktujte orgov.</li>
                    <li>Ak neviete nájsť stanovisko, tiež nám zavolajte. Cieľom Nôdľe nie je hodinové prehľadávanie lesa.</li>
                    <li>Dve nasledujúce stanoviská sú vzdialené maximálne 2km vzdušnou čiarou.</li>
                    <li>Sledovať iné tímy pri presune okrem dohľadávania stanoviska je zakázané.</li>
                    <li>Bez vyriešenia šifry je príchod na stanovisko inej šifry zakázaný.</li>
                    <li>V rámci tímu sa môžete deliť.</li>
                    <li>Počas hry sa môžete presúvať vlastnými nohami, bežkovať, plávať, sánkovať, lopárovať. Iné spôsoby dopravy vopred konzultujte s orgami.</li>
                    <li>Na rozdiel od minulých ročníkov, okrem cieľu netreba vstupovať do žiadnych budov ani bunkrov. Nebránime vám to, ale berte to ako vašu osobnú mimohernú činnosť :-)</li>
            	<li>Ak robíte niečo nebezpečné alebo nelegálne, tak ste asi niečo zle pochopili :-) Zamyslite sa znovu alebo nám zavolajte.</li>
                </ul>
                <p>
                V prípade, že sa rozhodnete hru predčasne ukončiť, kontaktujte nás.
                Jednak chceme mať prehľad, kto kde je, dvak bola by škoda, keby ste to vzdali tesne pred nejakým skvelým stanoviskom, no nie?
                </p></div>
            <div class="tab-pane fade" id="points"><h2>Bodovanie a nápovedy</h2>
                <p>Vyhráva tím s najvyšším počtom bodov, v prípade rovnosti rozhoduje najvyššie navštívené stanovisko a čas jeho dosiahnutia. Za vyriešenie cieľovej aktivity je +1b.
                Ku každej šifre existujú 2 nápovedy a totálka. Použitie jednej nápovedy je penalizované 0.5b, dvoch dokopy 0.75b. Tieto body sa strhnú len v prípade, že prídete na nasledujúce stanovisko.
                Za regulárne vyriešenie šifry (aj s využitím nápoved) a príchod na nasledujúce stanovisko je +1b.
                Šifru, na ktorej sa nachádzate, môžete preskočiť požiadaním o totálku, v tom prípade za príchod na nasledujúce stanovisko nezískate žiadne body ani sa nestrhne penalizácia za použité nápovedy - t.j. nápovedy sa vždy oplatia otvoriť pred totálkou.</p>

                <p>Nápovedy a totálky si pýtajte od orga na stanovisku. V prípade, že stanovisko orga nemá, zavolajte na telefónne číslo uvedené v posledných informáciách alebo na štarte.</p>
              </div>
            <div class="tab-pane fade" id="bring"><h2>Čo si doniesť</h2>
                <ul>
                    <li>potrebnú mapu dostanete na štarte, vlastné turistické a online mapy sa môžu hodiť, ale používate ich na vlastnú zodpovednosť</li>
                    <li>čelovky - bude tma</li>
                    <li>nabitý mobil s číslom uvedeným v prihláške</li>
                    <li>buzola nie je povinná, ale hodí sa</li>
                    <li>rozumné šifrovacie pomôcky, doporučujeme napríklad tie od <a href="http://chlyftym.cz/web/pomucky" target="_blank">Chlýftýmu</a></li>
                    <li>nožnice, lepiace pásky, eurobaly, fixky, zvýrazňovačky,...</li>
                    <li>pohárik</li>
                    <!--<li>prázdnu (alebo plnenú vodou) fľašu s objemom 1l a viac</li>-->
                    <li>MHD lístky počas hry nepotrebujete (ak sa fakt veľmi nestratíte :-)</li>
                </ul>
                Zoznam sa môže ešte meniť s blížiacim sa dátumom hry :-)
              </div>
            <div class="tab-pane fade" id="lastinfo"><h2> Posledné informácie </h2>
              <p>Čakajte, objavia sa neskôr na tomto mieste.</p>
            </div>
          </div>
        </div>
    </div>


    <?php include "footer.php" ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type='text/javascript'>
    var gotoHashTab = function (customHash) {
    var hash = customHash || location.hash;
    var hashPieces = hash.split('?'),
        activeTab = $('[href=' + hashPieces[0] + ']');
        activeTab && activeTab.tab('show');
    }

// onready go to the tab requested in the page hash
gotoHashTab();

// when the nav item is selected update the page hash
$('.nav a').on('shown', function (e) {
    window.location.hash = e.target.hash;
})

// when a link within a tab is clicked, go to the tab requested
$('.tab-pane a').click(function (event) {
    if (event.target.hash) {
        gotoHashTab(event.target.hash);
    }
});
</script>

</body>

</html>
