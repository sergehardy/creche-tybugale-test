<?php
$page= substr($_SERVER['REQUEST_URI'],1) ;

$page = $page ? $page : "home";
$file = __DIR__ . "/pages/$page.php";

if (!file_exists($file)) {
//    touch($file);
    return ;
    throw new \HttpException();
}

?>

<?php
include $file;
?>
