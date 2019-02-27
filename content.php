<div class="row">

    <?php

    $page= $_GET['p'] ?? "home";
    include "pages/$page.php";

    ?>
</div>