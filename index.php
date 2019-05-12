<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|html)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // retourne la requête telle quelle.
}

include "layout.php";