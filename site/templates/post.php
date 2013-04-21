<? 
// ====================================================================
// Individual Post
// ====================================================================

snippet('header'); 
?>


<?php snippet('sidebar') ?>

<!--post-->
<div class="post">
	<div class="container">	
		<div class="row">		
			<div class="span12">
					<div class="row"
						<div class="span8 offset2">
							<img class="picture" src="http://farm8.staticflickr.com/7259/7812836158_f6e6232df2_c.jpg" alt="10k"></img>
						</div>
					</div>	
			

					<div class="row">
						<div class="row">
							<h1 class="post-title span8 offset2"><a href="<?php echo $page->url() ?>"><?php echo html($page->title()) ?></a></h1>			
						</div>
						<div class="row">
							<?php echo kirbytext($page->text()) ?>
						</div>	
						<div class="row">
							<p class="date"><?php echo html($page->published()) 
							//translate_date($page->published())?></p>
						</div>
						
						<p>
							<?php snippet('share') ?><br /><br />
							URL: <a id="url" href="<?php echo html($page->url()) ?>"><?php echo html($page->url()) ?></a><br />
							Tags: <?php foreach(str::split($page->tags()) as $tag): ?>
							<a href="<?php echo url('posts/tag:' . urlencode($tag)) ?>">#<?php echo html($tag) ?></a>
							<?php endforeach ?>
						</p>
					</div>
					
					
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
				
		
		
		<div class="row">		
			<div class="span12">
				<?php snippet('disqus', array('disqus_shortname' => $site->disqus())) ?>						
			</div>
		</div>
	</div>
</div>

<?php snippet('footer') ?>
