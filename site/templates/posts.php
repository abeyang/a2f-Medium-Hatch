<? snippet('header') ?>
<? snippet('navigation') ?>
<!--post-->
<div class="container">
	<? if(param('tag')) {
	
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
	<? foreach($posts as $post): ?>
	<div class="row">		
		<div class="slot-6-7-8-9">
			<p class="date"><? //echo html($post->published()) ?></p> 
			<p class="date"><? translate_date($post->published());
 ?></p>  


			<h1 class="post-title"><a href="<? echo $post->url() ?>"><? echo html($post->title()) ?></a></h1>
			<p>
				<? echo $post->description() ?> <? echo excerpt($post->text(), 800) ?> <a href="<? echo $post->url() ?>">Read more</a>
			</p>			
		</div>
	</div>
	<? endforeach ?>
	<? if($posts->pagination()->hasPages()): ?>
	<div class="row">		
		<div class="slot-6-7-8-9">
			<p>    						
				<? if($posts->pagination()->hasPrevPage()): ?>
				<a class="prev" href="<?= $posts->pagination()->prevPageURL() ?>">« Previous</a>
				<? endif ?>
				
				<? if($posts->pagination()->hasPrevPage() && $posts->pagination()->hasNextPage()): ?>
				|
				<? endif ?>
				
				<? if($posts->pagination()->hasNextPage()): ?>
				<a class="next" href="<?= $posts->pagination()->nextPageURL() ?>">Next  »</a>
				<? endif ?>
			</p>			
		</div>
	</div>
	<? endif ?>
</div>


<? snippet('footer') ?>
