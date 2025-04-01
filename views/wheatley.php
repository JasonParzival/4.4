<?php
        $is_image = $url == '/wheatley/image';
        $is_info = $url == '/wheatley/info';
?>

<h1>Уитли</h1>
<a href="/wheatley/image">Картинка</a>
<a href="/wheatley/info">Описание</a>

<?php if ($is_image) {?>
        <img src="..." alt="">
<?php } else if ($is_info) { ?>

<?php } ?>

<div class="image">
        <img src="images/wheatley.jpg" alt="Уитли">
        
        <div class="caption">
        "Подожду... подожду один час. <br>
        А потом вернусь и, если найду твое мертвое тело, похороню тебя. <br>
        Правильно? Отлично! Мы команда! Увидимся через час. <br>
        Надеюсь. Если ты не мертва..."<br>
        </div>
</div>