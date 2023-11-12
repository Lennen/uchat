<?php header('Access-Control-Allow-Origin: *'); ?>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<?php header('Access-Control-Allow-Origin: *'); ?>

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

  <?include 'navigation.php';?>


  <div class="container my-4">
    <div class="row">
        <div class="col-md-4">
            <div id="video-space" class="mb-1">
            <video id="fon" width="100%" autoplay="" controls="">
               <source src="videos/bd530bac056d41c9adc07cd5bc9e5e34.webm" type='video/webm; codecs="vp8, vorbis"'>
               Тег video не поддерживается вашим браузером.
            </video>
            </div>
    
            <div class="btn-ok btn btn-secondary mb-1 btn-begin" style="cursor: pointer;">Начать знакомство</div>
            <div class="btn-formaty btn btn-primary mb-1 btn-begin" style="cursor: pointer;">Форматы обучения</div>
            <div class="btn btn-primary mb-1 btn-begin" style="cursor: pointer;" onclick="location.href='question-answer.php'">К обучению</div>
            <p class="fs-5">Я отвечу на ваши вопросы</p>
            <div class="btn-stop" style="display: none;">Click Stop</div>
        </div>
        
        <div class="col-md-8">
            <div class="form-outline mb-4" style="min-height: 300px; margin-top: auto;
            display: flex; flex-wrap:wrap; justify-content: space-between;">

                <p id="pageText" style="align-self: flex-end; ">
                </p>
                <div id="response" style="align-self: flex-end; display:none;">
                    Я познакомлю вас с документацией компании РЖД и помогу успешно пройти тестирование на проверку уровня знаний.
                </div>
            </div>
            <div class="form-outline mb-1">
                <form id="upload-container" method="POST" action="">
                    <textarea class="form-control" name="userQuestion" id="textAreaExample6" rows="3">Зачем нужны ПТЭ?</textarea>
                    <label class="form-label" for="textAreaExample6"></label>
                </form>
            </div>
            <a class="btn-ask btn btn-primary">Спросить</a>
        </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>

<script>
    //Активная вкладка
    document.querySelector('#menu-about').classList.add("active");
</script>