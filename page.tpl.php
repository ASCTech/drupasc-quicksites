<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<meta name="description" content="<?php print $site_name; ?>"/> 
<meta name="author" content="Arts and Sciences Technology Services Office"/> 
<meta name="keywords" content="<?php print strtr($site_name, array(" " => ", ")); ?>, Arts and Sciences, OSU, Ohio State"/> 
<?php
global $base_path;
global $theme_path;
$quickSites_layout = theme_get_setting('quickSites_layout');
$quickSites_theme = theme_get_setting('quickSites_theme');
$quickSites_theme_header = theme_get_setting('quickSites_theme_header');
$quickSites_theme_footer = theme_get_setting('quickSites_theme_footer');

// These content types will not display a title
$no_title_node_types = array("events", "people");
?>
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<link type="text/css" rel="stylesheet" media="screen" href="<?php print $base_path.$theme_path."/variations/theme-$quickSites_theme/override.css"; ?>" />
<?php if($quickSites_theme_header != '') print '<link type="text/css" rel="stylesheet" media="screen" href="'.$base_path.$theme_path.'/variations/header-'.$quickSites_theme_header.'/override.css" />'."\n"; ?>
<?php if($quickSites_theme_footer != '') print '<link type="text/css" rel="stylesheet" media="screen" href="'.$base_path.$theme_path.'/variations/footer-'.$quickSites_theme_footer.'/override.css" />'."\n"; ?>
<?php print $scripts ?>
	
</head>
<body class="<?php print $body_classes." theme-$quickSites_theme layout-$quickSites_layout"; ?>">

	<?php require_once("sites/all/themes/quickSites/navbar/osu-navbar-b-custom.php"); ?>

	<div id="header">
		<div class="container">
			<div id="header-container" class="span-24">
				<?php if(false && !$is_front){ ?>
					<a href="http://artsandsciences.osu.edu/" id="small-banner-1" title="Arts and Sciences homepage">&nbsp;</a>
				<? } ?>
				<div id="logo">
					<?php if($logo){ ?>
						<?php if(!$is_front){ ?>
						<a href="<?php global $base_url; print $base_url; ?>" title="Back to <?php print $site_name; ?> home"><img alt="<?php print $site_name; ?> Logo" src="<?php print $logo ?>"/></a>
						<?php }else{ ?>
						<img alt="<?php print $site_name; ?> Logo" src="<?php print $logo ?>"/>
						<?php } ?>
					<?php } ?>
				</div><!-- .logo -->
				<a href="http://www.osu.edu/" id="osulogo" title="Ohio State University homepage">&nbsp;</a>

				<div id="navigation">
					<?php print $MainNav; ?>			
				</div><!-- #navigation -->
			</div>
		</div> <!-- .container -->
		<div id="header-tile">&nbsp;</div>
	</div> <!-- #header -->
	<div id="headerbar">&nbsp;</div>

	<?php include($is_front ? "front.tpl.php" : "inner.tpl.php"); ?>

	<hr id="footer-border"/>
	<div id="footer">
		<div class="container">
			<?php if(true || !$is_front){ ?>
				<a href="http://artsandsciences.osu.edu/" id="small-banner-2" title="Arts and Sciences homepage">&nbsp;</a>
			<? } ?>
			<div id="contact" class="span-6 append-1">
				<?php if(user_access('administer site configuration')){ ?>
				<ul class="tabs primary">
					<li class="active">
						<a class="active" href="<?=url();?>admin/settings/site-information">Edit Text</a>
					</li>
				</ul>
				<?php } ?>
				<?php print $footer_message; ?>
			</div><!-- .contact -->
			<div id="footer-right" class="span-17 last">
				<div id="footer-top" class="span-17 last">
					<?php print $footer; ?>
				</div>
				<div id="footer-bottom" class="span-17 last">
					<?php print $footer_menu; ?>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- #footer -->
	<div id="footer_copyright" class="clearfix">
		<div class="small">
			<p>&copy; <?php print date("Y"); ?>, The Ohio State University, College of Arts and Sciences</p>
			<?php include("sites/all/themes/quickSites/icons/uicons_basic.php"); ?>
		</div>
	</div>


<?php print $closure;?>

</body>

</html>
