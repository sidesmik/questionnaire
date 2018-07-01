<div class="sidebar-component">
	<ul class="sidebar-nav">
		<?php foreach ($pages as $path => $name): ?>
			<li><a href="<?= $path ?>"><?= $name ?></a></li>
		<?php endforeach ?>
	</ul>
</div>