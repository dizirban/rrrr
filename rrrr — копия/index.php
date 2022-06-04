<?php
    require "db.php";
    echo "<link rel='stylesheet' href='css/style.css'>";
?>

<!DOCTYPE html>
<html lang="ru">
    
<head>
    <link rel="icon" href="img/favicon.ico"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1400">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;900&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Бандера Банк</title>
</head>

<body>
    <div class="block1">
        <div class="logo">ББ</div>
        <div class="logo2">Бандера Банк</div>
        <nav class="nav">
            <a class="nav1 navbar" href="#">Головна</a>
            <a class="nav2 navbar" href="#">Відгуки</a>
            <a class="nav2 navbar" href="kab.php">Кабінет</a>
        </nav>
    </div>
    <div class="introfather">
    <div class="intro0">
        <div class="intro">Відкрий для себе нові можливості</div>
        <div class="intro2">Приєднуйся до Банку номер один в Україні, разом ми зможемо</div>
        <a class="btn" href="#">Приєднатись</a>
    </div>
    <img class="img" src="img/Intro__logo.png">    
    </div>
    <div class="info__banner">
        <div class="info1">Переваги Бандера Банку</div>
        <div class="info__panel">
            
            <div class="info__panel1">
                
                <div class="info__panel1__father">
                    
                <img class="panel__img" src="img/card.png"><div class="cardq">
                  Переказ з картки на картку
                </div>
              </div>
              
              <div class="info__panel1__father2">
                    
                <img class="panel__img" src="img/kredit.png"><div class="cardq">
                  Кредит готівкою
                </div>
              </div>
              
              <div class="info__panel1__father2">
                    
                <img class="panel__img" src="img/business.png"><div class="cardq">
                 Підтримка бізнесу
                </div>
              </div>
              
            </div>
            
            
            
            <div class="info__panel2">
                
                <div class="info__panel2__father">
                    
                <div class="cardq2">
                  Зняття готівки без комісії  
                </div><img class="panel__img" src="img/nalik.png">
              </div>
              
              <div class="info__panel2__father2">
                    
                <div class="cardq2">
                  Поповнення мобільного
                </div><img class="panel__img" src="img/mobile.png">
              </div>
              
              <div class="info__panel2__father2">
                    
                <div class="cardq2">
                 Кешбєк на все
                </div><img class="panel__img" src="img/keshback.png">
              </div>
                
            </div>
        </div>
        
        <div class="info2">Все це і навіть більше з Бандера Банком</div>
        
    </div>
</body>


</html>
