<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Meine Animal Crossing Amiibo Karten</title>

        <link rel="stylesheet" href="./lib/skeleton/normalize.css" />
        <link rel="stylesheet" href="./lib/skeleton/skeleton.css" />
        
    </head>
    <body> 
      <br>
      <!-- <?php echo '<p>Hallo Welt</p>'; ?> -->
      <br>
      <div class="container">
          <h1>Meine Animal Crossing Amiibo Karten jeder Serie! ♥</h1>
            <p>
            Infomartion: Ich habe alle Bewohner auf deutsch hier benannt, da es einfacher für mich war. Auf den Karten stehen nämlich keine deutschen Namen drauf. Per Google findet ihr aber mit der Kartennummer oder dem deutschen Namen raus, welcher im Englischen gemeint war. ♥
            </p>
        </div>
        <br>
      <div class="buttoncontainer">
        <?php include ("./templates/buttons.php"); ?>
      </div>
        <br>
        <div class="container">
            <h2>1. Serie</h2>
            <table class="u-full-width">
              <thead>
                <tr>
                  <?php include ("./templates/table_head.php"); ?>
                </tr>
              </thead>
              <tbody>
              <?php include ("./include/series1_missing.php"); ?>
              </tbody>
            </table>
        </div>
        <br>
        <br>
      <div class="container">
            <h2>2. Serie</h2>
            <table class="u-full-width">
              <thead>
                <tr>
                  <?php include ("./templates/table_head.php"); ?>
                </tr>
              </thead>
              <tbody>
              <?php include ("./include/series2_missing.php"); ?>
              </tbody>
            </table>
        </div>
        <br>
        <br>
        <div class="container">
            <h2>3. Serie</h2>
            <table class="u-full-width">
              <thead>
                <tr>
                  <?php include ("./templates/table_head.php"); ?>
                </tr>
              </thead>
              <tbody>
              <?php include ("./include/series3_missing.php"); ?>
              </tbody>
            </table>
        </div>
        <br>
        <br>
        <div class="container">
            <h2>4. Serie</h2>
            <table class="u-full-width">
              <thead>
                <tr>
                  <?php include ("./templates/table_head.php"); ?>
                </tr>
              </thead>
              <tbody>
              <?php include ("./include/series4_missing.php"); ?>
              </tbody>
            </table>
        </div>
        <br>
        <br>
        <div class="container">
            <h2>Sonderkarten</h2>
            <table class="u-full-width">
              <thead>
                <tr>
                  <?php include ("./templates/table_head.php"); ?>
                </tr>
              </thead>
              <tbody>
                <?php include ("./include/sonderkarten_missing.php"); ?>
              </tbody>
            </table>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </body>
</html>