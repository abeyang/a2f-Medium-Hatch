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



<div class="wrapper homepage">
	<header>
		<div class="container">
			<div class="row">
				<div class="span1">
					<a class="logo" href="#sidebar">A2F</a>
				</div>

				<div class="span10">
					<div class="imagecontent">
		 			<!-- Banner picture backend code 2 lines -->
						<?php $image = explode(',',$page->picture_url()); ?>
		  				<img src="<?php echo $image[date("d")%sizeof($image)] ?>">  
						<h2><?= $site->title() ?></h2>
						<?= $page->description() ?>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="news">
		<div class="container">	
			<div class="row">
				<h4 class="span10 offset1"><?= $page->news_label() ?></h4>
			</div>
		</div>

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

	</div>
	<div class="container faux">
		<span class="sectionHeader2">	
			<?= $page->posts_label() ?>
		</span>
		<div class="row">
			<div class="span10 offset1">
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
