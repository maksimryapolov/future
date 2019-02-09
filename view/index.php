<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-future</title>
    <link rel="stylesheet" href="../template/css/style.css">
</head>
<body>
    <div class="container">
        <div class="content_block">

        </div>
    <header class="head">
        <div class="info_block">
            <div class="info">Телефон: (499)340-94-71</div>
            <div class="info">Email: info@future-group.ru</div>
            <div class="info-commet_title">Комментарии</div>
        </div>
        <div class="company">
            <img class="company_logo"src="../template/logo/future_test.png" alt="logo_future">
            <h1 class="company_name">Future</h1>
            <div class="company_field">internet agency</div>
        </div>
    </header>
</div>
    <hr>
    <div class="container">
   
    <div class="comments-block">
    <?php if(empty($listComments)): ?>
        <p class="empty">Комментарии отсутствуют<p> 
    <?php else : ?>
        <?php foreach($listComments as $item): ?>
        <div class="commetn_item">
            <p class="user_data"><?php echo $item["user_name"] . "<span class='data_item'>" . $item["time"]  . "</span>" . " <span class='data_item'>" . $item["date"]  . "</span>"?></p>
            <div class="user_content"><?php echo $item["content"] ?></div>
            </div>
        <?php endforeach ?>
    <?php endif ?>

    </div>
    <h2>Оставить комментарий</h2>
    <?php if(is_string($errors) && isset($errors)): ?>
        <p class="error"><?php echo $errors ?></p>
    <?php endif ?> 
    <div class="commetn_form">
        <form action="" method="post">
            <div class="from-group">
                <label for="InputName">Ваше имя</label>
                <input class="texttype" id="InputName" type="text" name="name">
            </div>
            <div class="from-group">
                <label for="InputMessage">Ваш комментарий</label>
                <textarea class="textMessage" id="InputMessage" name="message"></textarea>
                <input type="submit" name="submit" class="btn">
            </div>
        </form>
    </div>
    <footer class="footer">
        <div class="company_block-footer">
            <img src="../template/logo/future_test.png" alt="logo_future">
            <h2 class="company_name-footer">Future</h2>
            <div>internet agency</div>
        </div>
        <div class="contacts">
            <div class="info info_footer">Телефон: (499)340-94-71</div>
            <div class="info info_footer">Email: info@future-group.ru</div>
            <div class="info info_footer">Адрес: <span class="adress">115088 Москва, ул 2-я Машиностроения, д. 7 стр. 1</span></div>
            <div class="copyright">&copy; 2010 - 2014 Future. Все права защищены</div>
        </div>
    </footer>
    </div>
</body>
</html>