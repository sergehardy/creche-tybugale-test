<div id="recherche" class="col-sm-8 offset-sm-2">
    <h3>Recherche</h3>

    <?php if (count($searchResults) ===0):?>
        Pas de résultat.
    <?php endif;?>
    <?php foreach($searchResults as list($title, $excerpt, $permalink)):?>
        <h5><a href="<?php echo $permalink;?>" ><?php echo $title;?></a></h5>
        <p>
            <?php echo $excerpt;?>
        </p>
    <?php endforeach;?>
</div>