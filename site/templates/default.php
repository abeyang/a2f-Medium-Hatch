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

<?php if($page->hasImages()): ?> 
<ul class="gallery">
  <?php $image = $page->images()  ?>
  <li><img src="<?php echo $image[date("d")%sizeof($image)]->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>"  /></li>
</ul>
<?php endif ?>

<div class="wrapper">
	<header>
		<div class="container">
			<div class="imagecontent">
				<h2><?= $site->title() ?></h2>
				<?= $page->description() ?>
			</div>
		</div>
	</header>
	<div class="news">
		<div class="container">	
			<?= $page->news_label() ?>
		</div>
	</div>
	<div class="container faux">	
		<?= $page->posts_label() ?>
		<div class="row">
			<div class="span9">
				<div class="posts">
					<div class="row">
						<!-- <?= kirbytext($page->posts_label()) ?> -->
						<? foreach($posts as $post): ?>
						<div class="span3 post">
							<img src="<?= $post->thumbnail() ?>">
							<div class="imagecontent">
								<h3><?= $post->title() ?></h3>

							</div>
						</div>
						<? endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<? snippet('footer') ?>
