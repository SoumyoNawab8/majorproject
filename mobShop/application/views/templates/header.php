<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mobile Shopping</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>material-design-iconic-font/css/material-design-iconic-font.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/mdb.min.css">
    <style type="text/css">
        <?php $this->load->view('css/style.css'); ?>
    </style>

    <!-- Adding Javascript Files -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>


</head>
<body>
 <header>
 	<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark blue-gradient fixed-top scrolling-navbar" id="mynav">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>img/logo.png"  height="30"/></a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url();?>">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>features">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>pricing">Pricing</a>
            </li> -->

            <!-- Dropdown -->
           <!--  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/take_tour">Get Assissted
                    <span class="sr-only">(current)</span>
                </a>
            </li> -->
            <form class="form-inline my-1">
        <div class="md-form form-sm mt-0">
            <input class="form-control form-control-sm mr-sm-2 mb-0" type="text" id="product_search" value="Search" aria-label="Search">
        </div>
        <!-- <button class="btn btn-outline-white btn-sm my-0" type="submit">Search</button> -->
    </form>
         
        </ul>
        <!-- Links -->
        <a type="button" href="<?php echo base_url();?>take_tour" class="btn btn-assistance waves-effect">Get Assisted</a>
        <form class="form-inline">
            <div class="md-form mt-0 dropdown">
               <!--  <ul>
                    <li> -->
 <!--             <?php  //if(isset($_COOKIE["login"])): if ($_COOKIE["login"] == "admin" ) : ?>
                <input type="hidden" id="siteUrl" value="<?php // echo base_url();?>">
                <button class="nav-item nav-link" onclick="logout($('input#siteUrl').val);" style="    margin-top: -2em;
    background: transparent;
    color: white;">Logout</button>
             <?php // else:?> -->
                <a class="nav-item nav-link dropdown-toggle" id="cartDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-shopping-cart zmdi-hc-lg"></i><span class="counter ">3</span></a>
                <div class="dropdown-menu dropdown-primary cartItem" aria-labelledby="cartDrop" >
                    <a class="dropdown-item" href="#">Product1</a>
                    <a class="dropdown-item" href="#">Product2</a>
                    <a class="dropdown-item" href="#">Product3</a>
                    <a class="dropdown-item" href="<?php echo base_url();?>cart"><b>View All...</b></a>
                </div>
            <!-- <?php// endif; endif; ?> -->
            <!-- </li>
            </ul> -->
            </div>
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
 </header>
