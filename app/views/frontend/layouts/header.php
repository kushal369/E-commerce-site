<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Electronix Store</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL;?>/assets/frontend/css/style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>
<div id="main_container">
  
<?php Loader::view('frontend/layouts/topbar'); ?>


  <?php Loader::view('frontend/layouts/banner'); ?>


  <div id="main_content">
    <?php Loader::view('frontend/layouts/menu'); ?>


    <!-- end of menu tab -->
    
    <?php Loader::view('frontend/layouts/breadcrumb'); ?>
    

    <?php Loader::view('frontend/layouts/leftbar'); ?>
    <!-- end of left content -->