<ul class="menu clearfix visible-lg visible-md">
	<?php foreach ($arr as $rows) { ?>
		 <li><a href="grid.php?id=<?php echo $rows->id_category_product ?>"><?php echo $rows->name_category_product ?></a></li>
		
	<?php } ?>
		<li><a href="blog.php">Blog</a></li>
</ul>