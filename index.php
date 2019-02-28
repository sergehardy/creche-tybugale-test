<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // retourne la requête telle quelle.
}

include "layout.php";