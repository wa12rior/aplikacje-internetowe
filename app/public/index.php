<?php

echo <<<HTML
<form action="" method="get">
    <input type="hidden" name="lang" value="lang.txt">
    <button type="submit">Load lang</button>
</form>
HTML;

if (isset($_GET['lang'])) {
    $lang = file_get_contents($_GET['lang']);
    echo $lang;
}