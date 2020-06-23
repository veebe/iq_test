<?php
session_start();
if (!isset($_SESSION["otazka"])) {
  $_SESSION["otazka"] = 0;
  $_SESSION["spravne"] = 0;
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="master.css">
    <title></title>
  </head>
  <body>
    <header>
      <div class="header">
        <ul>
          <li><a href="testy.php">ĎALŠIE TESTY</a></li>
          <li><a href="o_nas.php">O NÁS</a></li>
          <li><a href="index.php">IQ TEST</a></li>
          <li><a href="domov.php">DOMOV</a></li>
        </ul>
      </div>
    </header>

<div id="progress_bar">
  <div id="progress"></div>
</div>
    <script>
    function reload() {
      location.reload();
      var pripocitanie = "<?php $_SESSION['otazka']++; ?>"
    }
    var i = 0;
    var countdown = new Date().getTime()
    countdown += 59000;
function move() {
if (i == 0) {
  i = 1;
  var elem = document.getElementById("progress");
  var width = 1;
  var id = setInterval(frame, 600);
  function frame() {
    if (width >= 100) {
      reload();
      clearInterval(id);
      i = 0;
    } else {
      width++;
      elem.style.width = width + "%";
    }
  }
}
}
    </script>


<?php
if ($_SESSION["otazka"] != 30) {
echo "<script> move(); </script>";
}else {
  header('location:index.php');
}

/*if ($_SESSION["otazka"] == 1) {
  echo "jedna";
}
if ($_SESSION["otazka"] == 2) {
  echo "dva";
}*/
 ?>
 <div class="center">

   <p class="cilso_otazky">otázka <?php echo $_SESSION["otazka"]; ?></p>

<div class="otazka_odpovede">
  <img src="otazky/otazka_1.jpg" alt="" class="obrazok_otazky">
  <img src="otazky/odpoved_1.jpg" alt="" class="obrazok_odpoved">
  <img src="otazky/odpoved_2.jpg" alt="" class="obrazok_odpoved">
  <img src="otazky/odpoved_3.jpg" alt="" class="obrazok_odpoved">
  <img src="otazky/odpoved_4.jpg" alt="" class="obrazok_odpoved">
</div>



   <button onclick="reload()" class="dalej">Ďalšia otázka</button>
 </div>





    <footer>
      <div class="center">
        <div class="footer_2">
          <p>&copy; IQ TEST 2020</p>
        </div>
      </div>
    </footer>
  </body>
</html>
