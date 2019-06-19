<?php
$file = __DIR__ . "/pages/$currentUrl.php";

if (!file_exists($file)) {
    return ;
//    throw new \HttpException();
}

?>
<div class="<?php echo $contentClass;?>">
    <?php if(!$isHome):?>
        <h3><?php echo $currentMenu['menu'];?> - <span><?php echo $currentSubMenu;?></span></h3>
    <?php endif;?>

    <?php
    ob_start();
    include $file;
    $content = ob_get_clean();

    echo $content;
    ?>

</div>