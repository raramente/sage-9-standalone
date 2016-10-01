<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <?php /*
	http://realfavicongenerator.net/
	favicon.ico and apple-touch-icon.png should be placed at the root of the website also.
  */ ?>
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo App\asset_path( "images/logos-and-icons/apple-touch-icon.png" ); ?>">
  <link rel="icon" type="image/png" href="<?php echo App\asset_path( "images/logos-and-icons/favicon-32x32.png"); ?>" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo App\asset_path( "images/logos-and-icons/favicon-16x16.png"); ?>"  sizes="16x16">
  <link rel="manifest" href="<?php echo App\asset_path( "images/logos-and-icons/manifest.json") ?>">
  <link rel="mask-icon" href="<?php echo App\asset_path( "images/logos-and-icons/safari-pinned-tab.svg"); ?>"  color="#5bbad5" >
  <link rel="shortcut icon" href="<?php echo App\asset_path( "images/logos-and-icons/favicon.ico") ?>">
  <meta name="msapplication-config" content="<?php echo App\asset_path( "images/logos-and-icons/browserconfig.xml") ?>">
  <meta name="theme-color" content="#008be3">

  <?php // Missing <title>, <description>, <keywords> ?>

  <?php // wp_head(); ?>
  <?php $above_the_folder_css = App\abovethefolder( "styles/abovethefolder.css" ); ?>
  <?php if ( !empty($above_the_folder_css) ): ?>
    <style><?php echo $above_the_folder_css; ?></style>
  <?php endif ?>
  
</head>
