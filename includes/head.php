<?php
//var_dump($page);

switch ($page) {
    case 'home':
        include 'includes/constants-home.php';
    break;
    case 'brommer-onderdelen':
        include 'constants-brommer-onderdelen.php';
    break;
    case 'motor-onderdelen':
        include 'includes/constants-motor-onderdelen.php';
    break;
    case 'oldtimers':
        include 'includes/constants-oldtimers.php';
    break;
    case 'nieuw-gebruikt':
        include 'includes/constants-nieuw-gebruikt.php';
    break;
    case 'contact':
        include 'includes/constants-contact.php';
    break;
    case 'bedankt':
        include 'includes/constants-bedankt.php';
    break;
    case 'onderdelen-zoeker':
        include 'includes/constants-onderdelen-zoeker.php';
    break;

}
?>
<!DOCTYPE html>

<html lang="nl-nl" dir="ltr" vocab="http://schema.org/">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <title><?php echo TITEL; ?></title>
    <base href="<?php //echo COMPANY_LINK; ?>" />

    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Open+Sans+Condensed:wght@300;700&family=Raleway:wght@100;200;300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

	<meta name="keywords" content="<?php echo KEYWORDS; ?>" />
	<meta name="author" content="<?php echo AUTHOR; ?>" />
    <meta name="description" content="<?php echo DESCRIPTION; ?>" />
    
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta property="og:locale" content="nl_NL" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo TITEL; ?>" />
    <meta property="og:description" content="<?php echo DESCRIPTION; ?>" />
    <meta property="og:url" content="<?php echo COMPANY_LINK; ?>" />
    <meta property="og:site_name" content="<?php echo SITENAME; ?>" />
    <script type="text/javascript" charset="UTF-8" src="//eu.cookie-script.com/s/913454224d74e205110127eb35defd61.js"></script>
    <?php include "componenten/google.php"; ?>

</head>
<body>