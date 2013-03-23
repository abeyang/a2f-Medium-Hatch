<? 
// ====================================================================
// Homepage
// ====================================================================

snippet('header'); 
?>

<? snippet('sidebar') ?>

<?
	$posts = $pages->find('posts')
                  ->children()
                  ->visible()
                  ->flip()
                  ->paginate(10);
?>

<div class="wrapper">
	<header>
		<div class="container">	
			<h2><?= kirbytext($site->title()) ?></h2>
			<?= kirbytext($page->description()) ?>
		</div>
	</header>
	<div class="news">
		<div class="container">	
			<?= kirbytext($page->news_label()) ?>
		</div>
	</div>
	<div class="container faux">	
		<div class="row">
			<div class="span9">
				<div class="posts">
					<div>
						<!-- <?= kirbytext($page->posts_label()) ?> -->
						<? foreach($posts as $post): ?>
						<div><img src="<?= $post->thumbnail() ?>"></div>
						<? endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<? snippet('footer') ?>