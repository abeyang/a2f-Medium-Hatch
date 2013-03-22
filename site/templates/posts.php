<?php snippet('header') ?>

<?php snippet('navigation') ?>

<!--post-->
<div class="container">
	<?php if(param('tag')) {
	
	  $posts = $pages->find('posts')
	                    ->children()
	                    ->visible()
	                    ->filterBy('tags', param('tag'), ',')
	                    ->flip()
	                    ->paginate(10);
	
	} else {
	
	  $posts = $pages->find('posts')
	                    ->children()
	                    ->visible()
	                    ->flip()
	                    ->paginate(10);
	
	} ?>
	<?php foreach($posts as $post): ?>
	<div class="row">		
		<div class="slot-6-7-8-9">
			<p class="date"><?php echo html($post->published()) ?></p>
			<h1 class="post-title"><a href="<?php echo $post->url() ?>"><?php echo html($post->title()) ?></a></h1>
			<p>
				<?php echo $post->description() ?> <?php echo excerpt($post->text(), 800) ?> <a href="<?php echo $post->url() ?>">Read more</a>
			</p>			
		</div>
	</div>
	<?php endforeach ?>
	<?php if($posts->pagination()->hasPages()): ?>
	<div class="row">		
		<div class="slot-6-7-8-9">
			<p>    						
				<?php if($posts->pagination()->hasPrevPage()): ?>
				<a class="prev" href="<?= $posts->pagination()->prevPageURL() ?>">« Previous</a>
				<?php endif ?>
				
				<?php if($posts->pagination()->hasPrevPage() && $posts->pagination()->hasNextPage()): ?>
				|
				<?php endif ?>
				
				<?php if($posts->pagination()->hasNextPage()): ?>
				<a class="next" href="<?= $posts->pagination()->nextPageURL() ?>">Next  »</a>
				<?php endif ?>
			</p>			
		</div>
	</div>
	<?php endif ?>
</div>


<?php snippet('footer') ?>