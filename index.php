<!DOCTYPE html>
<html lang="en" class="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Подключаем шрифт -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <!-- Подключаем иконки -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- Подключаем файл со стилями -->
  <link rel="stylesheet" href="style.css">

</head>

<body class="body">
    <?php include "mail.php";?>
    <header class="header">
        <a class="header_logo logo" href="#">Сайт Бармина Никиты<a href="#" class="black_theme"><i class='bx bx-sun'></i></a></a>
    </header>

    <div class="hero">
        <div class="container hero_container">
           <div class="hero_about">
            <h1 class="hero_title">
                Веб-разработчик
            </h1>
            <h2 class="hero_subtitle">Бармин Никита</h2>
            <p class="hero_description">Привет, данный сайт представляет из себя моё краткое резюме. Ниже представлены основные ссылки.</p>
            <div class="hero_links">
                <a href="https://vk.com/gaaldren" class="hero_link hero_link1"><i class='bx bxl-vk'></i></a>
                <a href="https://t.me/gaaldren" class="hero_link"><i class='bx bxl-telegram'></i></a>
                <a href="https://github.com/gaaldren" class="hero_link"><i class='bx bxl-github'></i></a>
                <a href="#" class="hero_link"><i class='bx bxl-steam'></i></a>
            </div>
           </div>
           <div class="hero_box">
            <img class="hero_box-img" src="11.jpg" alt="man">
           </div>      
        </div>
    </div>

    <div class="hero">
        <div class="container hero_container">
            <div class="study_box">
                <img class="study_box-img" src="12.jpg" alt="">
               </div>  
           <div class="hero_about">
            <h1 class="hero_title">
                Место обучения
            </h1>
            <h2 class="hero_subtitle">Колледж Вятского Государственного Университета
            </h2>
            <p class="hero_description">Годы обучения - 2020-2023</p>
           </div>
     
        </div>
    </div>



    <footer class="footer">
        <a class="footer_logo logo" href="#">Made by <i class="footer_name">Barmin Nikita</i></a>
    </footer>


    <script src="https://rawcdn.githack.com/gaaldren/gaadren.github.io/a737bedbe3fe4d36f8bda80bbfc4706628ec6afb/theme.js"></script>
</body>

</html>