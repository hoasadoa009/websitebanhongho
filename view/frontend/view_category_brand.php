<ul class="nav">
    <?php 
        foreach ($arr as $rows) {
            ?>
            <li><a href="grid.php?id=<?php echo $rows->id_category_brand ?>"><?php echo $rows->name_category_brand; ?></a></li>
       <?php } ?>
</ul>
