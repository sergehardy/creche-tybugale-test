<?php
$uri = $_SERVER['REQUEST_URI'];
$page= substr($uri,1) ;

$page = $page ? $page : "home";
$file = __DIR__ . "/pages/$page.php";

if (!file_exists($file)) {
//    touch($file);
    return ;
    throw new \HttpException();
}

$isHome = $page === "home";
$class = $isHome ? "col-sm-12" : "col-sm-8 offset-sm-2";

foreach ($menus as $href => $menu) {
    foreach ($menu['subMenus'] as $href2=>$subMenu) {
        if ($href2 === $uri) {
            $currentMenu=$menu;
            $currentSubMenu=$subMenu;
        }
    }
}
?>
<style>

    h3 span {
        color: green;
    }

    h4{
        background-color:#449d69;
        color: #ffffff;
        padding: 5px ;
    }

    div.stripes{
        padding: 5px ;
        width:100%;
        height: 100%;
        font-size: 1.5rem;

        background: repeating-linear-gradient(-45deg,#d5d5d5, #d5d5d5 1px, #ffffff 1px, #ffffff 5px);
        /*(*/
                /*-45deg,*/
                /*#449d69 1 px,*/
                /*#ffffff 1px,*/
                /*#449d69 10px,*/
                /*#ffffff 20px*/
        /*);*/
    }
    /*h4:after {*/
        /*width:100%;*/
    /*}*/
</style>
<!--<div class="col-sm-8 offset-sm-2">-->
<div class="<?php echo $class;?>">
<?php if(!$isHome):?>
    <h3><?php echo $currentMenu['menu'];?> - <span><?php echo $currentSubMenu;?></span></h3>
<?php endif;?>
    <?php
include $file;
?>
</div>