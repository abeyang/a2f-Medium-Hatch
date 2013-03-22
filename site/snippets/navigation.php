<!--Navigation-->
<div class="container">
	<div class="navbar">
	  <div class="navbar-inner">
	    <a class="brand" href="<?= html($site->url()) ?>"><?= html($site->title()) ?></a>
	    <ul class="nav">
			<? foreach($pages->visible() as $p): ?>
			<li><a href="<?php echo $p->url() ?>" class="nav"><?= html($p->title()) ?></a></li>
			<? endforeach ?>	
	    </ul>
	  </div>
	</div>	
</div>
