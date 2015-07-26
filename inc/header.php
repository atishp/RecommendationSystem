<?php
session_start();
if(!isset($_SESSION["user_id"]))
	header("location:index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LogicBits Systems Pvt. Ltd.</title>
<!-- common style-->
<link type="text/css" rel="stylesheet" href="css/style.css" />

<!-- nav spry style-->
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

<script src="js/validation.js" type="text/javascript"></script>
</head>

<body>
<!-- wrapper start -->
<div id="wrapper">
<div id="container">

    <!-- header start -->
    <div id="header">
    <div id="header_left"></div>
    <div id="header_mid">
    <div id="mkcl_logo"><img src="images/lbits_logo.png" width="350" height="83" border="0" /></div>
    <div class="clear"></div>
    </div><!-- header_mid end -->
    <div id="header_right"></div>
    </div><!-- header end -->
    
    <!-- navigation start -->
    <div id="main_menu">
    <div id="menu_left"></div>
    <div id="menu_mid">
        <ul id="MenuBar1" class="MenuBarHorizontal">
          <li><a class="MenuBarItemSubmenu" href="list_banner.php">Banners</a>
              <ul>
                <li><a href="add_banner.php">Add Banner</a></li>
              </ul>
          </li>
          <li><a class="MenuBarItemSubmenu" href="list_advertisement.php">Ads</a>
              <ul>
                <li><a href="add_advertisement.php">Add Ad</a></li>
              </ul>
          </li>
          <li><a class="MenuBarItemSubmenu" href="list_category.php">Category</a>
              <ul>
                <li><a href="add_category.php">Add Category</a></li>
              </ul>
          </li>
          <li><a class="MenuBarItemSubmenu" href="list_brand.php">Brands</a>
              <ul>
                <li><a href="add_brand.php">Add Brand</a></li>
              </ul>
          </li>
          <li><a class="MenuBarItemSubmenu" href="list_product.php">Products</a>
              <ul>
                <li><a href="add_product.php">Add Product</a></li>
              </ul>
          </li>
          <li><a class="MenuBarItemSubmenu" href="list_customer.php">Customers</a>
              <ul>
                <li><a href="search_customer.php">Search</a></li>
              </ul>
          </li>
          <li><a class="MenuBarItemSubmenu" href="list_sale.php">Sales</a>
              <ul>
                <li><a href="search_sale.php">Search Sales</a></li>
              </ul>
          </li>
          <li><a href="setting.php">Settings</a></li>
          <li><a href="logout.php">Log Out</a></li>
        </ul>
            <div class="clear"></div>
    </div><!-- menu_mid start -->
    <script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
	</script>
    
    <div id="menu_right"></div>
    <div class="clear"></div>
    </div><!-- navigation start -->
    
    <!-- main_content start -->
    <div id="main_content">
    <div id="main_content_top"></div>
    <div id="main_content_mid">
    
<!--container start-->
<div id="container">
<div class="clear"></div>
<!--Developers Code Start Here-->
