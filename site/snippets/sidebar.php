<? 
// ====================================================================
// Sidebar
// ====================================================================
?>

<aside id="sidebar">
<!--    <a class="brand" href="<?= html($site->url()) ?>"><?= html($site->title()) ?></a> -->

    <ul class="menu">
    	<li>
    		<a>a2f Riverside</a>
    	</li>
    	<li>
    		<a>About Us</a>
    	</li>
    	<li>
    		<a>Archives</a>
    	</li>
    </ul>

    Temp Bookmarks:

    <ul>
        <? foreach($pages->visible() as $p): ?>
        <li><a href="<?= $p->url() ?>" class="nav"><?= html($p->title()) ?></a></li>
        <? endforeach ?>    
    </ul>

    <br />Upcoming events go here

    <br />Comments go here
</aside>

