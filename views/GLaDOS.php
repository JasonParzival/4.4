<?php
        $is_image = $url == '/GLaDOS/image';
        $is_info = $url == '/GLaDOS/info';
?>

<h1>ГЛэДОС</h1>
<a href="/GLaDOS/image">Картинка</a>
<a href="/GLaDOS/info">Описание</a>

<?php if ($is_image) {?>
        <img src="..." alt="">
<?php } else if ($is_info) { ?>

<?php } ?>

<div class="image">
        <img src="images/GLaDOS.gif" alt="ГЛэДОС">
        
        <div class="caption">
            "А, это ты… Давно не виделись. Как дела?<br>
             Я была так занята, пока была мертва. <br>
             Ну, после того, как ты убила меня. <br>
             Ладно, слушай, мы обе наговорили много такого, о чем ты ещё пожалеешь. <br>
             Но сейчас мы должны забыть все наши разногласия. Ради науки. <br>
             Ты чудовище. Раз ты так много сделала, <br>
             чтобы разбудить меня, значит ты очень, очень любишь испытания. <br>
             Я тоже их люблю. Но сначала нужно уладить одну мелочь."<br>
        </div>
</div>