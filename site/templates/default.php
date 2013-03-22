<? 
// ====================================================================
// Homepage
// ====================================================================

snippet('header'); 
?>

<? snippet('sidebar') ?>

<div class="container-fluid">	
	<div class="row-fluid">
		<!-- <div class="span3 fauxsidebar">
			<div>
				FAke Sidebar
			</div>
		</div> -->
		<div class="span9 offset3">
			<header>
				<h2><?= kirbytext($site->title()) ?></h2>
				<?= kirbytext($page->description()) ?>
			</header>
			<div class="news">
				<?= kirbytext($page->news_label()) ?>
			</div>
			<div class="posts">
				<div><?= kirbytext($page->posts_label()) ?></div>
			</div>
		</div>
	</div>
</div>


<? snippet('footer') ?>