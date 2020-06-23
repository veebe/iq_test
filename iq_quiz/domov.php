<?php session_start();
$_SESSION["otazka"] = 0;
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>
    <header>
      <div class="header">
        <ul>
          <li><a href="testy.php">ĎALŠIE TESTY</a></li>
          <li><a href="o_nas.php">O NÁS</a></li>
          <li><a href="index.php"> IQ TEST</a></li>
          <li><a href="domov.php" class="active">DOMOV</a></li>
        </ul>
      </div>
    </header>

<h1 class="nadpis1">NAJLEPŠIE SLOVENSKÉ TESTY!</h1>

    <div class="center">
      <p class="popis">Na tejto stránke nájdete tie najlepšie SLovenské testy z mnohých odvetvý, ale predovšetkým tu nájdete ten nejlepší
      test na zistenie vášho IQ, <b>NIE JE</b> potrebná žiadná registrácia, stačí len kliknúť na <b>"SPUSTIŤ TEST"</b> a vyplniť ho!</p>
        <div class="background_div_1"></div>
      <form class="" action="test.php" method="post">
        <button type="submit" name="button" class="spustit_test"><p class="button_text">SPUSTIŤ IQ TEST</p></button>
      </form>
        <div class="background_div_2"></div>
        <div class="background_div_3"></div>
        <div class="background_div_4"></div>
        <div class="background_div_5"></div>
      <p class="popis_2"><b>Prečo práve tento test, prečo my?</b> <br> <br> Narozdiel od iných stránok, tento test je jeden z najspoľahlivejších testou a to nie len na Slovensku!
      Pre vytvorenie tohoto testu sme spolupracovali s mnohými Slovenskými psychológmi a profesionálne vyučenými ľuďmi, aby sme sa
      ubezpečili, že test má čo najvyššiu presnosť (96%) a čo najlepšie položnené otázky ako aj to, aby bolo vyplnenie testu bezproblémové
      a aby ste sa výsledky dozvedeli v čo najkratšom čase. <br><br>A nesmieme zabudnúť na to, že my od vás nebudeme požadovať
      veci, ako vaše meno, alebo vaše telefónne číslo, pretože my si vaše súkromie vážime.</p>
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
