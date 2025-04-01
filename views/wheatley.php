<?php
        $is_image = $url == '/wheatley/image';
        $is_info = $url == '/wheatley/info';
?>

<h1>Уитли</h1>

<div class="container">
        <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link <?= $is_image ? "active" : '' ?>" href="/wheatley/image">
                Картинка
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $is_info ? "active" : '' ?>" href="/wheatley/info">
                Описание
            </a>
        </li>
        </ul>
</div>

<?php if ($is_image) {?>
        <img src="../images/wheatley.jpg" alt="Уитли">
<?php } else if ($is_info) { ?>
        <div class="caption">
        "Подожду... подожду один час. <br>
        А потом вернусь и, если найду твое мертвое тело, похороню тебя. <br>
        Правильно? Отлично! Мы команда! Увидимся через час. <br>
        Надеюсь. Если ты не мертва..."<br>
        </div>
<?php } else { ?>
        Выберите вверху информацию, которую хотите увидеть<br>
<?php } ?>
