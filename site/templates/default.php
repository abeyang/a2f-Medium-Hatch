<? 
// ====================================================================
// Homepage
// ====================================================================

snippet('header'); 
?>

<? //snippet('sidebar') ?>

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
			<div class="imagecontent">
 			<!-- Banner picture backend code 2 lines -->
				<?php $image = explode(',',$page->picture_url()); ?>
  				<img src="<?php echo $image[date("d")%sizeof($image)] ?>">  
				<h2><?= $site->title() ?></h2>
				<?= $page->description() ?>
			</div>
		</div>
	</header>
	<div class="news">
		<!--<div class="container">	-->
			<?= $page->news_label() ?>
			<div class="box">
			<!--<div class="row"> -->
					<div class="blankpost span4">
					</div>
					<div class="post span4 offset 2">
					Post	
					</div>
					<div class="post span4">
					post 2
					</div>
					<div class="post span4">
					post 3
					</div>
					<div class="post span4">
					post 
				</div>
			<!-- </div> -->
			</div>
		<!-- </div> -->
		<div class="container">
			<span class="sectionHeader">	
				<?= $page->news_label() ?>
			</span>
		</div>

	</div>
	<div class="container faux">
		<span class="sectionHeader2">	
			<?= $page->posts_label() ?>
		</span>
		<div class="row">
			<div class="span12">
				<div class="posts">
					<div class="row">
						<!-- <?= kirbytext($page->posts_label()) ?> -->
						<? foreach($posts as $post): ?>
						<div class="span3 post">
							<img src="<?= $post->thumbnail() ?>">
							<div class="imagecontent">
								<h3 class="postTitle"><?= $post->title() ?></h3>
								<div class="author">Abe Yang</div>

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
