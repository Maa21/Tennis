<?php require_once('config.php');?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
	<head>
		<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="theme-color" content="#111111">
					<title itemprop="name"><?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?> <?php echo '' . htmlspecialchars($_GET["match"]) . ''; ?> | <?php echo $meta_title;?></title>
        <meta name="description" content="Watch Now: <?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?> - <?php echo '' . htmlspecialchars($_GET["match"]) . ''; ?>. Stream Live Sports instantly for FREE on RubuhTV.com..">
        <meta name="keywords" content="<?php echo $meta_keyword;?>" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="author" content="admin">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <meta property="og:locale" content="en_US">
        <meta property="og:title" content="<?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?> <?php echo '' . htmlspecialchars($_GET["match"]) . ''; ?> | <?php echo $meta_title;?>" />
        <meta property="og:description" content="Watch Now: <?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?> - <?php echo '' . htmlspecialchars($_GET["match"]) . ''; ?>. Stream Live Sports instantly for FREE on <?php echo $meta_title;?>.">
        <meta property="og:type" content="website" />
        <meta property="og:author" content="Admin">
        <meta property="og:site_name" content="<?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?> <?php echo '' . htmlspecialchars($_GET["match"]) . ''; ?> | <?php echo $meta_title;?>">
        <meta property="og:url" content="<?php echo $url_web.$_SERVER['REQUEST_URI'];?>" />
