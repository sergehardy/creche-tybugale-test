
    <div  class="col-sm-2">
        <a href="/">
            <img height="220px" src="/assets/images/TyBugaleLogo.png">
        </a>
    </div>

    <div class="col-sm-10 d-flex w-100">
        <nav class="navbar navbar-expand-lg ">

            <?php


            foreach ($menus as $href=>$menu) {
                echo block("menu",["href"=>$href,"menu"=>$menu]);
            }
            ?>

            <?php get_search_form();?>

        </nav>


<!--        <div class="d-flex">-->
<!---->
<!--            <form><input type="text" value="Rechercher"> </form>-->
<!--        </div>-->


    </div>
    