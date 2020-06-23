<?php session_start();
$_SESSION["otazka"] = 0;
$_SESSION["spravne"] = 0;
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<link href="https://fonts.googleapis.com/css2?family=Alata&family=Bebas+Neue&family=Harmattan&family=Jost:ital,wght@1,200&family=Pathway+Gothic+One&family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="master.css">
  </head>
  <body>
    <header>
      <div class="header">
        <ul>
          <li><a href="testy.php">ĎALŠIE TESTY</a></li>
          <li><a href="o_nas.php">O NÁS</a></li>
          <li><a href="index.php" class="active">IQ TEST</a></li>
          <li><a href="domov.php">DOMOV</a></li>
        </ul>
      </div>
    </header>

<h1 class="nadpis1">NAJPRESNEJŠÍ SLOVENSKÝ IQ TEST!</h1>
<h3 class="podnadpis1">V spolupráci s najlepšími Slovenskými psychológmi</h3>

    <div class="center">
      <div class="spustac_testu">
        <p class="popis">Prinášame Vám jeden z nejpresnejších IQ Testou, na ktoré sa dá na internete natrafiť. <br> V spolupráci s najlepšími Slovenskými
        psychológmi sme vytvorili tento IQ Test, ktorý má presnoť až 96%, čo je o 17% viac ako naša priemerná konkurencia.</p>
        <div class="background_div_1"></div>
        <form class="" action="test.php" method="post">
          <button type="submit" name="button" class="spustit_test"><p class="button_text">SPUSTIŤ TEST</p></button>
        </form>
          <div class="background_div_2"></div>
          <div class="background_div_3"></div>
          <div class="background_div_4"></div>
          <div class="background_div_5"></div>
        <div class="popis_2">
            <p>Máme pre vás pripravených 30 otázok, ktoré zapoja vaše logické myslenie a aktivujú všetky časti vášho mozgu.</p>
            <p>Tento test bude trvať maximálne <b>30 minút</b>.</p>
            <p>Na každú otázku budete mať <b>maximálne 1 minútu</b>, čas, ani test sa nedá zastaviť.</p>
            <p>Na hornej časti obrazovky budete mať časovač, takisto ako aj číslo otázky.</p>
            <p>Ak otázku nestihnete zodpovedať včas, odpoveď sa započíta ako <b>nesprávna</b>.</p>
            <p>Pri pokuse o refresh stránky sa posuniete na ďalšiu otázku a body vám <b>nebudú</b> pripočítané!</p>
            <p>Na test sa netreba žiadno špeciálne pripravovať, ale môžete si prichystať pero a papier pre prípad, že si budete potrebovať
              niečo nakresliť, alebo zapísať.</p>
        </div>
      </div>
      <div class="popis_3">
        <p class="nadpis2">Čo je IQ?</p>
        <p>Spravili ste si IQ test a teraz potrebujete vedieť, čo to číslo vlastne znamená? Začnime pri tom, čo to vlastne IQ je.
        IQ, alebo inteligenčný kvocient je číslo opisujúce inteligenciu človeka v pomere k ostatnej populácii. Meria sa tak, že
        sa určí pomer mentálneho veku k fyzickému veku a ten sa vynásobý stomi.</p>

        <table>
          <tr>
            <td>mentálne nespôsobilý</td>
            <td>pod 70</td>
          </tr>
          <tr>
            <td>podpriemerná</td>
            <td>71 až 89</td>
          </tr>
          <tr>
            <td>priemerná</td>
            <td>90 až 110</td>
          </tr>
          <tr>
            <td>nadpriemerná</td>
            <td>111 až 120</td>
          </tr>
          <tr>
            <td>veľmi nadpriemerná</td>
            <td>121 až 130</td>
          </tr>
          <tr>
            <td>takmer genialita</td>
            <td>131 až 140</td>
          </tr>
          <tr>
            <td>genialita</td>
            <td>141 a vyššie</td>
          </tr>
        </table>
      </div>

    </div>

    <footer>
      <div class="center">
        <div class="footer">
          <p>&copy; IQ TEST 2020</p>
        </div>
      </div>
    </footer>
    <?php

     ?>
  </body>
</html>
