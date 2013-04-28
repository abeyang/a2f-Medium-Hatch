<!DOCTYPE html>
<?php

        function translate_date($temp) {
                $date_p = explode("-",$temp);
                if(isset($date_p[1])) {
                        $m=$date_p[1];
                        echo date("F", mktime(0, 0, 0, $m));
                }
                if(isset($date_p[2])) {
                        $d=$date_p[2];
                        echo " ".$d.","." ";
                }
                if(isset($date_p[0])) {
                        $y=$date_p[0];
                        echo $y;
                }
}
?>

<html lang="en-">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?= html($page->title()) ?> | <?= html($site->title()) ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta http-equiv="content-language" content="en" />
	<meta http-equiv="imagetoolbar" content="no" />

	<!-- Please support http://humanstxt.org/ -->
	<link type="text/plain" rel="author" href="<?= url('humans.txt') ?>" />

	<!-- Feed -->
	<link rel="alternate" type="application/rss+xml" href="<?= url('feed') ?>" title="Feed | <?= html($site->title()) ?>" />

	<link rel="canonical" href="<?= html($page->url()) ?>" />  

	<meta name="title" content="<?= html($page->title()) ?> | <?= html($site->title()) ?>" />
	<meta name="author" content="<?= html($site->author()) ?>" />
	<meta name="publisher" content="<?= html($site->author()) ?>" />
	<meta name="copyright" content="<?= html($site->author()) ?>" />
	<meta name="description" content="<?= html($page->description()) ?>" />
	<meta name="robots" content="index,follow" />
	<meta name="DC.Title" content="<?= html($page->title()) ?> | <?= html($site->title()) ?>" />
	<meta name="DC.Creator" content="<?= html($site->author()) ?>" />
	<meta name="DC.Rights" content="<?= html($site->author()) ?>" />
	<meta name="DC.Publisher" content="<?= html($site->author()) ?>" />
	<meta name="DC.Description" content="<?= html($page->description()) ?>"/ >
	<meta name="DC.Language" content="en" />

	<meta property="og:title" content="<?= html($page->title()) ?> | <?= html($site->title()) ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?= html($site->url()) ?>" />
	<meta property="og:image" content="<?= url('assets/images/facebook/facebook-icon-646x1027.jpg') ?>" />
	<meta property="og:description" content="<?= html($page->description()) ?>" />

	<meta itemprop="name" content="<?= html($page->title()) ?> | <?= html($site->title()) ?>">
	<meta itemprop="description" content="<?= html($page->description()) ?>">
		
	<link rel="stylesheet/less" type="text/css" href="<?= url('assets/styles/a2f.bootstrap.less') ?>" />
    <?= js('assets/js/less-1.3.3.min.js') ?>
    
    <script type="text/javascript">
	    less.env = "development";
	    less.watch();
	</script>

	<!--jQuery Plugin-->
	<?= js('assets/js/jquery-1.9.1.min.js') ?>
	<?= js('assets/js/jquery.pageslide.min.js') ?>

	<!--Google Webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?= url('assets/images/icons/favicon.ico') ?>" />
	<link rel="apple-touch-icon" href="<?= url('assets/images/icons/icons/iOS/apple-touch-icon-72x72.png') ?>" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?= url('assets/images/icons/iOS/apple-touch-icon-72x72.png') ?>" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?= url('assets/images/icons/iOS/apple-touch-icon-114x114.png') ?>" />

</head>
<body>
