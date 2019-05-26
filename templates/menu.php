<div class="dropdown show  m-3 p-1">
    <a class="btn btn-secondary nav-item bg-<?php echo $color;?>" href="#" role="button" id="dropdownMenuLink"
       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <h2><?php echo $menu;?></h2>
    </a>

    <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink">
        <?php foreach($subMenus as $subMenu):?>
            <li class="nav-item bg-<?php echo $color;?> ">
                <h2><a class="dropdown-item" href="#"><?php echo $subMenu;?></a></h2>
            </li>
        <?php endforeach;?>
    </ul>
</div>
