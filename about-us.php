<?php 
    get_header();
    /* Template Name: O nas */
    the_post();
?>

    <?php get_template_part('/libs/header_page'); ?>
    
    <section class="about-usPage">
    <div class="container">
        <div class="row about-usPage__content">
            <div class="col-6 about-us__content-left">
                
            </div>
            <div class="col-6 about-us__content-right">
                <img class="about-us__content-rightCitate" src="<?php echo THEME_URL ?>_dev/img/about-us-quote.png" alt="">
                <p>
                Katei jest restauracją funkcjonującą od 9 lat. 
                Przez te 9 lat z pełnym zaangażowaniem pracowaliśmy na Państwa zaufanie. 
                Mamy przyjemność zaprezentować zupełnie nową odsłonę restauracji, na czele której stanął wybitnie utalentowany Szef Kuchni Andrzej Gołąbek. 
                We współpracy z całym zespołem tworzy niesamowite kompozycje smakowe, które przypadną do gustu najbardziej wymagającym Gościom. 
                Warto zaznaczyć, że Sushi Katei dokładnie 27 listopada 2019r. uzyskało oficjalnie uznanie japońskiej organizacji rządowej JETRO, które podpisało się pod autentycznością naszych receptur, w zgodzie z tradycją i kulturą japońską. 
                Na szczególne uznanie zasługuje fakt, że otrzymaliśmy certyfikat jako piąta restauracja w Polsce oraz pierwsze na terenie naszego województwa. 
                Niedawno zmieniliśmy także wnętrze restauracji. 
                Chcemy aby panowała harmonia i spokój. To klucz do sukcesu. 

                
                </p>
                

            </div>
        </div>
    </div>
    <img src="<?php echo THEME_URL ?>_dev/img/about-us-sushi.png" alt="" class="about-usPage__image">
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6 df fd">
                    <img class="about-usPage__flag" src="<?php echo THEME_URL ?>_dev/img/warstwa 4.png" alt="">
                    <p class="w500">
                    "Katei" oznacza dom i rodzinę, dlatego obsługa naszej restauracji zadba o to, by każdy z naszych Gości czuł się jak u siebie. 
                    Wieloletnie doświadczenie i szkolenia z zakresu kuchni japońskiej pozwoliły nam na stworzenie miejsca, które przyciągnie smakoszy oraz pasjonatów dobrego jedzenia. 
                    Dziewięć lat goszczenia Państwa w naszych progach zobowiązuje nas do indywidualnego podejścia do Państwa potrzeb. 
                    Liczymy na to, że każdą spędzoną chwilę w naszej restauracji będziemy wspólnie mile wspominać, a smak serwowanych dań pozostanie na długo w pamięci. 
                    Satysfakcja naszych Gości jest naszą satysfakcją. 
                    </p>
                    </div>
                <div class="col-6">
                    <img class="" src="<?php echo THEME_URL ?>_dev/img/ogrodek4.png" alt="">
                </div>
            </div>
            <div class="vc hc p50">
                <a href="<?php echo home_url(); ?>" class="button vc">Wróć</a>
            </div>
        </div>
        
    </section>
    <iframe src="https://snazzymaps.com/embed/279965" width="100%" height="500px" style="border:none;"></iframe>

<?php get_footer(); ?>