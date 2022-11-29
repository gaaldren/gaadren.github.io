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
                <a href="#openModal" class="hero_link"><i class='bx bxl-steam'></i></a>
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

<div id="openModal" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Скачивание файла</h3>
        <a href="#close" title="Close" class="close">×</a>
      </div>
      <div class="modal-body">    
        <ul>
			<li>
                Скачать файл
            </li>
			<li>
                <textarea class="download" id="textbox" placeholder="Type something here"></textarea>
                <a class="hero_description" download="info.txt" id="create" href="#" style="display: none;">Create file</a>
            </li>
		</ul>
      </div>
    </div>
  </div>
</div>



<style>
.modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0,0,0,0.5);
    z-index: 1050;
    opacity: 0;
    -webkit-transition: opacity 200ms ease-in; 
    -moz-transition: opacity 200ms ease-in;
    transition: opacity 200ms ease-in;
    pointer-events: none;
    margin: 0;
    padding: 0;
}
.modal:target {
    opacity: 1;
	  pointer-events: auto;
    overflow-y: auto;
}
.modal-dialog {
    position: relative;
    width: auto;
    margin: 10px;
}
@media (min-width: 576px) {
  .modal-dialog {
      max-width: 500px;
      margin: 30px auto;
  }
} 
.modal-content {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: .3rem;
    outline: 0;
}
@media (min-width: 768px) {
  .modal-content {
      -webkit-box-shadow: 0 5px 15px rgba(0,0,0,.5);
      box-shadow: 0 5px 15px rgba(0,0,0,.5);
  }
}
.modal-header {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 15px;
    border-bottom: 1px solid #eceeef;
}
.modal-title {
    margin-top: 0;
    margin-bottom: 0;
    line-height: 1.5;
    font-size: 1.25rem;
    font-weight: 500;
}
.close {
    float: right;
    font-family: sans-serif;
    font-size: 24px;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5;
    text-decoration: none;
}
.close:focus, .close:hover {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    opacity: .75;
}
.modal-body {
  position: relative;
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 15px;
    overflow: auto;
}
</style>


    <footer class="footer">
        <a class="footer_logo logo" href="#">Made by <i class="footer_name">Barmin Nikita</i></a>

    </footer>


    <script src="https://rawcdn.githack.com/gaaldren/gaadren.github.io/a737bedbe3fe4d36f8bda80bbfc4706628ec6afb/theme.js"></script>
    <script src="download.js"></script>


</body>

</html>