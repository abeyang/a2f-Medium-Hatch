<? 
// ====================================================================
// Homepage
// ====================================================================

snippet('header'); 
?>

<? snippet('navigation') ?>

<div class="container">	
	<?= kirbytext($page->text()) ?>				
</div>


<? snippet('footer') ?>