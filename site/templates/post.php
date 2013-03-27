<?php snippet('header') ?>


<?php snippet('navigation') ?>

<!--post-->
<div class="container">	
	<div class="row">		
		<div class="slot-6-7-8-9">
			<p class="date"><?php echo html($page->published()) 
			//translate_date($page->published())?></p>

			<h1 class="post-title"><a href="<?php echo $page->url() ?>"><?php echo html($page->title()) ?></a></h1>			
			<?php echo kirbytext($page->text()) ?>
			<p>
				<?php snippet('share') ?><br /><br />
				URL: <a id="url" href="<?php echo html($page->url()) ?>"><?php echo html($page->url()) ?></a><br />
				Tags: <?php foreach(str::split($page->tags()) as $tag): ?>
				<a href="<?php echo url('posts/tag:' . urlencode($tag)) ?>">#<?php echo html($tag) ?></a>
				<?php endforeach ?>
			</p>
			<p>    						
				<?php if($page->hasPrev()): ?>
				<a href="<?php echo $page->prev()->url() ?>">« Previous</a>
				<?php endif ?>
				
				<?php if($page->hasPrev() && $page->hasNext()): ?>
				|
				<?php endif ?>
				
				<?php if($page->hasNext()): ?>
				<a href="<?php echo $page->next()->url() ?>">Next »</a>
				<?php endif ?>
			</p>		
		</div>
	</div>	
	<div class="row">		
		<div class="slot-6-7-8-9">
			<?php snippet('disqus', array('disqus_shortname' => $site->disqus())) ?>						
		</div>
	</div>
</div>


<?php snippet('footer') ?>
