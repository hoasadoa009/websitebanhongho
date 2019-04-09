<ul class="dropdown-menu dropdown-menu-right">
	<?php foreach ($arr as $rows) {
	?>
    <li><a href="grid.php?id=<?php echo $rows->id_category_product ?>"><?php echo $rows->name_category_product; ?></a></li>
	<?php } ?>
</ul>