<link href="styles.css" rel="stylesheet" />

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Обучение документации РЖД</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

  <?include 'navigationWhite.php';?>
    
    <a href="about.php" style="text-decoration: none; color: black;">
      <div class="container my-4" style='background-image: url("img/index/SectionHero.png");background-color: transparent;background-size: cover;'>
        <div class="row">
            <div class="col-md-4">
                <div style="margin-top: 150px;">
                    <h1 style="font-size: 34px;">Виртуальный тренажер</h1>
                    <center>
                        <!--
                        <h5 style="margin-top: 45px;">Обучающие курсы</h5>
                        <a href="about.php" class="btn-ask btn btn-primary" style="margin-top: 45px;">Старт</a>
                        -->
                    </center>
                </div>
            </div>
            
            <div class="col-md-8"; >
                <img src="img/index/Larisa.png" style="margin-left: auto; margin-right: 0;">
            </div>
        </div>
      </div>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>

<script>
    //Активная вкладка
    document.querySelector('#menu-index').classList.add("active");
</script>

<?include 'footer.php';?>