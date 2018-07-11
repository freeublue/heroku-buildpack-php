<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laundry By Magic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery-1.9.1.js"></script>
  <script src="bootstrap.min.js"></script>
<link href="cara.css" rel="stylesheet">
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>
<?
include "slide.php";
?>
<div class="navbar-wrapper">
<div class="container">
<nav class="navbar navbar-inverse navbar-static-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span></button>
<a class="navbar-brand" href="index.php">Laundry By Magic</a></div>
<div id="navbar" class="navbar-collapse collapse"><ul class="nav navbar-nav"><li class="active"><a href="index.php">Home</a></li><li><a href="login.php"><img src='images/user.png' height='30px' /></a></li><li><a href="icontact.php">Contact</a></li><li><img onclick='showswap();' height='30px' style='padding:4px;' src='images/cart.png'></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a><ul class="dropdown-menu">
<li><a href='pricing.php'>pricing</a></li>
<li><a href="products.php">On the Menu</a></li>


<li><a href="about.php">About</a></li><li role="separator" class="divider"></li><li class="dropdown-header">Resources</li><li><a href="paymentoptions.php">Payment Types</a></li><li><a href="deliveryoptions.php">Delivery Options</a></li></ul></li></ul></div></div></nav></div></div>