<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Art-com</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        
        <div class="logo" ><a href="https://www.artcom.pl/"></a> <img src="logo.png" alt="logo">  
        <div class="menu">
            <ol class="menu">
                <li><a href="https://www.artcom.pl/o-nas/" >O nas</a>
                  <ul>
                    <li><a href="https://www.artcom.pl/o-nas/historia/">Historia</a></li>
                    <li><a href="https://www.artcom.pl/o-nas/os-czasu/">Oś czasu</a></li>
                    <li><a href="https://www.artcom.pl/o-nas/certyfikaty/">Certyfikaty</a></li>
                    <li><a href="https://www.artcom.pl/o-nas/referencje/">Referencie</a></li>
                    <li><a href="https://www.artcom.pl/o-nas/projekty/">Projekty</a></li>
                    <li><a href="https://www.artcom.pl/o-nas/partnerzy-w-biznesie/">Partnerzy biznesowi</a></li>
                    <li><a href="https://www.artcom.pl/o-nas/udogodnienia-dla-osob-niepelnosprawnych/">Udogodnienia dla osób niepełnosprawnych</a></li>
                    <li><a href="https://www.artcom.pl/o-nas/dane-osobowe_oswiadczenie/">Dane osobowe oświadczenie</a></li>
                  </ul>
                </li>
          
                <li><a href="https://www.artcom.pl/dla-domu/">Oferta dla domu</a>
                  <ul>
                    <li><a href="https://www.artcom.pl/dla-domu/internet/">Internet</a></li>
                    <li><a href="https://www.artcom.pl/dla-domu/telewizja/">Telewizja</a></li>
                    <li><a href="https://www.artcom.pl/dla-domu/telefon/">Telefon</a></li>
                    <li><a href="https://www.artcom.pl/dla-domu/hosting/">Hosting</a></li>
                    <li><a href="https://www.artcom.pl/dla-domu/serwis/">Serwis</a></li>
                    <li><a href="https://www.artcom.pl/dla-domu/sklep/">Sklep</a></li>
                    <li><a href="https://www.artcom.pl/dla-domu/routery/">Router</a></li>
                  
                  </ul>
                </li>
          
                <li><a href="https://www.artcom.pl/dla-firmy/">Oferta dla firm</a>
                    
                
                
                
                    <ul>
                        <li><a href="https://www.artcom.pl/dla-domu/internet/">Internet</a></li>
                        <li><a href="https://www.artcom.pl/dla-domu/telefon/">Telefon</a></li>
                        <li><a href="https://www.artcom.pl/dla-domu/hosting/">Hosting</a></li>
                        <li><a href="https://www.artcom.pl/dla-domu/serwis/">Serwis</a></li>
                        <li><a href="https://www.artcom.pl/dla-firmy/sprzedaz-i-uslugi/">Sprzedarz i usługi</a></li>
                        <li><a href="https://www.artcom.pl/dla-firmy/systemy-fiskalne/">Systemy fiskalne</a></li>
                        <li><a href="https://www.artcom.pl/dla-firmy/outsorcing-it/#top">Outsorcing It</a></li>

                      </ul>
                
                </li>
                
          
                <li><a href="https://www.artcom.pl/zasoby/">Zasoby</a>
                  <ul>
                    <li><a href="https://www.artcom.pl/zasoby/dokumenty/">Dokumenty</a></li>
                    <li><a href="https://www.artcom.pl/zasoby/hosting/">Hosting</a></li>
                    <li><a href="https://www.artcom.pl/zasoby/narzedzia/">Narzędzia</a></li>
                    <li><a href="https://www.artcom.pl/zasoby/pliki/">Pliki</a></li>
                  </ul>
                </li>
    
                <li><a href="https://www.artcom.pl/pomoc/">Pomoc</a>
                    <ul>
                      <li><a href="https://www.artcom.pl/pomoc/uslugi-hostingowe/">Częste pytania - FAQ</a></li>
                      <li><a href="https://www.artcom.pl/pomoc/konfiguracja-kont-dane/">Konfiguracja Kont-Dane</a></li>
                      <li><a href="https://www.artcom.pl/pomoc/konfiguracja-kont-pomoc/">Konfiguracja Kont-Pomoc</a></li>
                      <li><a href="https://www.artcom.pl/pomoc/konfiguracja-dns/">Konfiguracja DNS</a></li>
                      <li><a href="https://www.artcom.pl/pomoc/bezpieczenstwo-stron-www/">Bezpieczeństwo Stron WWW</a></li>
                      <li><a href="https://www.artcom.pl/pomoc/instrukcje/">Instrukcje</a></li>
                    </ul>
                  </li>
    
                  <li><a href="https://www.artcom.pl/kontakt/">Kontakt</a></li>
              </ol>
        </div>
     </div>
       
        <div class="cart">
        <?php if (isset($_SESSION['name'])): ?>
        
                <h1><?php  echo "Witaj ".$_SESSION['name']; ?></h1> 
                <a href='logout.php'><h2>Wyloguj</h2></a> <br>
        <?php else: ?>
            <div>
                <input id="register" type="button" class="php" value="Zarejestruj się" onClick="location.href='register.php';" />
                <input  id="login" type="button" class="php" value="Zaloguj się" onClick="location.href='form.php';" />
                </div>
        <?php endif; ?>
            
            
            <div class="cartimg"><img src="cart.png" alt="cart" srcset="" width="150px" height="150px">
            <div id="cart"><span id="ilosc"><h1>Cena: 0zł</h1></span></div>
            </div>
                
                <div id="shopping"></div>
                <button type="submit" class="button" id="buttonbuy">POTWIERDŹ ZAKUP</button>
                <button type="submit" class="button" id="clear">OCZYŚĆ KOSZYK</button>

        </div>
        <div class="internet">
            <div class="net"><img src="internet.png" alt="internet" srcset="" width="150px" height="150px"></div><h1 id="text3">Internet</h1>

            <div class="eko150">
                <ul class="">
                    <h4  class="">
                        <h2 id="white" class="eko150">EKO150</h2>
                        <span class=""></span>
                    </h4 ><h4  class="">MIESIĘCZNIE <br>  50zł</h4 >     
                    <h4  class="">POBIERANIE <br>  150 Mbit/s</h4 >
                    <h4  class="">WYSYŁANIE <br> 150 Mbit/s</h4 >
                    <h4  class="">UMOWA NA OKRES <br> 12 MIESIĘCY</h4 >
                    <h4 class="">1 zł <br> ZA AKTYWACJE</h4 >
                    <h4  class="">INSTALACJA JUŻ OD <br> 1 zł *</h4 >
                        <button type="submit" class="button" id="buttonEKO150" value="52.00">Wybierz oferte EKO150</button>
                </ul>
                
        </div>
            <div class="super300">
                <ul class="">
                    <div  class="">
                        <h2 id="white" class="super300">SUPER300</h2>
                        <span class="pricing-extra"></span>
                    </div>
                        <h4 class="cenasuper">MIESIĘCZNIE <br>  66 zł</h4 >
                <h4  class=""> POBIERANIE <br> 300 Mbit/s</h4 >
                <h4  class="">  WYSYŁANIE <br> 300 Mbit/s</h4 >
                <h4  class=""> UMOWA NA OKRES <br> 12 MIESIĘCY</h4 >
                <h4  class="">1 zł<br> ZA AKTYWACJE</h4 >
                <h4  class="">INSTALACJA JUŻ OD <br> 1 zł *</h4>
                    <button type="submit" class="button" id="buttonSUPER300" value="68.00">Wybierz oferte SUPER300</button>
            </ul>
            
        </div>

            <div class="max700">
                <ul class="pricing-table "><h4 class="avia-heading-row"><h2 id="white">MAX700</h2><span class="pricing-extra"></span></h4><h4 class="avia-pricing-row">99 zł<br>
                MIESIĘCZNIE</h4><h4 class="">POBIERANIE <br>
                700 Mbit/s</h4><h4 class="">WYSYŁANIE <br>
                700 Mbit/s</h4><h4 class="">UMOWA NA OKRES <br>
                12 MIESIĘCY</h4><h4 class="">1 zł <br>
                ZA AKTYWACJE</h4><h4 class="">INSTALACJA JUŻ OD <br>
                1 zł *</h4>
                <button type="submit" class="button" id="buttonMAX700" value="101.00">Wybierz oferte MAX700</button>
            </ul>
            
        </div>
     </div>
        <div class="phone">
            <div class="phoneimg"><img src="phone.png" alt="phone" srcset="" width="150px" height="150px"></div><h1 id="text1">Telefon</h1>
            <h3>Bezpłatne minuty w abonamencie: 60 minut (krajowe sieci stacjonarne oraz komórkowe).
                Niewykorzystane minuty nie przechodzą na kolejny okres rozliczeniowy. <br> <br>
                Opłata za rozpoczęcie rozmowy: 0 PLN <br>
                Okres trwania umowy: 12 miesięcy <br>
                Wszystkie połączenia taryfikowane są w trybie sekundowym. <br>
                Wszystkie ceny są cenami brutto, zawierają doliczony podatek VAT w wysokości 23%.</h3>
                <br> <br>
            <h1 id="white">Opłaty uruchomieniowe</h1> <br>
            <h3>Przydział i uruchomienie jednego numeru telefonicznego z puli jawtel.pl: <br>
             - Koszt uruchomienia: <h2>250 zł</h2></h3>
             <button type="submit" class="button" id="buttonrun" value="250.00">Uruchom</button>
            <h1 id="white">Opłaty abonamentowe</h1> <br>
            <h3>Abonament telefoniczny jednego numeru telefonicznego z puli jawtel.pl <br>
            - Dla abonentów usług internetowych sieci jawnet.pl: <h2>10 zł</h2></h3>
            <button type="submit" class="button" id="buttonphone" value="10.00">Kup</button>

        </div>
        <div class="tvgrid">
            <div class="tv"><img src="telewzor.png" alt="telewizor" srcset="" width="150px" height="150px"></div><h1 id="text2">Telewizja</h1>
            
            <div class="package1">

                <ul class="pricing-table "><h4 class="avia-heading-row">
                    <div class="first-table-item">
                        <h2 id="white">PODSTAWOWY + EKO150</h2>
                        <p></p>
                    <div style="padding-bottom:22px">
                    </div></div><span class="pricing-extra">

                    </span>
                </h4>
                <h4 class="avia-heading-row">59,00 zł<br>
                    MIESIĘCZNIE</h4>
                    <h4 class="">150 Mbit/s</h4>
                    <h4 class="">UMOWA NA OKRES<br>
                    12 MIESIĘCY</h4>
                    <h4 class="">INSTALACJA JUŻ OD<br>
                    1 zł *</h4>
                    <h4 class="">50 zł<br>
                    ZA AKTYWACJE<br>
                    W TYM 49 zł (TV) + 1 zł (INT)
                </h4>
                <h4 class="avia-button-row">
                    <div class="avia-button-wrap avia-button-center  avia-builder-el-13  el_before_av_button  avia-builder-el-first ">
                        <a href="https://www.artcom.pl/pakiet-podstawowy/" class="avia-button   avia-icon_select-yes-left-icon avia-color-theme-color avia-size-small avia-position-center ">
                            <span class="avia_button_icon avia_button_icon_left " aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                            <span class="avia_iconbox_title">LISTA KANAŁÓW</span>
                        </a>
                    </div>
                </h4>
                <button type="submit" class="button" id="buttontv150" value="110.00">Wybierz oferte Podstawowy + EKO150</button>
            </ul>
            
            </div>
            <br>
            <div class="package2">
                <ul class="pricing-table ">
                    <h4 class="avia-heading-row">
                        <div class="first-table-item"><h2 id="white">PODSTAWOWY + SUPER300</h2><p></p>
                    <div style="padding-bottom:22px">
                    </div>
                </div>
                <span class="pricing-extra">

                </span>
            </h4>
            <h4 class="avia-heading-row">75,00 zł<br>
                    MIESIĘCZNIE
            </h4>
                <h4 class="">300 Mbit/s</h4>
                <h4 class="">
                    UMOWA NA OKRES
                    <br>
                    12 MIESIĘCY</h4>
                    <h4 class="">
                        INSTALACJA JUŻ OD
                        <br>
                    1 zł *</h4>
                    <h4 class="">50 zł<br>
                    ZA AKTYWACJE<br>
                    W TYM 49 zł (TV) + 1 zł (INT)</h4><h4 class="avia-button-row">
                        <div class="avia-button-wrap avia-button-center  avia-builder-el-14  el_after_av_button  el_before_av_button ">
                            <a href="https://www.artcom.pl/pakiet-podstawowy/" class="avia-button   avia-icon_select-yes-left-icon avia-color-theme-color avia-size-small avia-position-center ">
                                <span class="avia_button_icon avia_button_icon_left " aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello">

                                </span>
                                <span class="avia_iconbox_title">LISTA KANAŁÓW</span>
                            </a>
                        </div>
                        <br>
                        <button type="submit" class="button" id="buttontv300" value="126.00">Wybierz oferte PODSTAWOWY + SUPER300</button>
                    </h4>
                    </ul>
            </div>
            <br>
            <div class="package3">
                <ul class="pricing-table ">
                    <h4 class="avia-heading-row">
                        <div class="first-table-item"><h2>PODSTAWOWY + MAX700</h2><p></p>
                    <div style="padding-bottom:22px"></div>
                </div>
                <span class="pricing-extra"></span>
            </h4>
            <h4 class="avia-heading-row">108,00 zł<br>
                    MIESIĘCZN
            </h4>
                <h4 class="">700 Mbit/s</h4>
                <h4 class="">UMOWA NA OKRES
                    <br>
                    12 MIESIĘCY</h4>
                    <h4 class="">INSTALACJA JUŻ OD
                        <br>
                    1 zł *</h4>
                    <h4 class="">50 zł<br>
                    ZA KATYWACJĘ<br>
                    W TYM 49 zł (TV) + 1 zł (INT)
                    </h4>
                <h4 class="avia-button-row">
                    <div class="avia-button-wrap avia-button-center  avia-builder-el-15  el_after_av_button  avia-builder-el-last ">
                        <a href="https://www.artcom.pl/pakiet-podstawowy/" class="avia-button   avia-icon_select-yes-left-icon avia-color-theme-color avia-size-small avia-position-center ">
                            <span class="avia_button_icon avia_button_icon_left " aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello">

                            </span>
                            <span class="avia_iconbox_title">LISTA KANAŁÓW</span>
                        </a>
                    </div>
                    <br>
                        <button type="submit" class="button" id="buttontv700" value="151.00">Wybierz oferte PODSTAWOWY + MAX700 </button>
                </h4>
            </ul>
            </div>
            
        </div>
        <div class="info">
            <div id="foot" class="firm">
                <h2>ADRES FIRMY</h2>                                   
                ART-COM Sp. z o.o. <br>
                ul. Grunwaldzka 120 <br>
                43-600 Jaworzno <br>
                <br> <br>
                <h2>GODZINY OTWARCIA</h2>
                pn – pt 10:00 – 18:00 <br>
                soboty 10:00 – 14:00 <br>
    </div>
    <script src="script.js"></script>
</body>
</html>