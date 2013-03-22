<? 
// ====================================================================
// Sidebar
// ====================================================================
?>

<aside class="sidebar">
	<div>Sidebar</div>
    <a class="brand" href="<?= html($site->url()) ?>"><?= html($site->title()) ?></a>
    <ul>
		<? foreach($pages->visible() as $p): ?>
		<li><a href="<?= $p->url() ?>" class="nav"><?= html($p->title()) ?></a></li>
		<? endforeach ?>	
    </ul>
</aside>

