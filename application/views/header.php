<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="eng">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ઘનશ્યામગઢ-Dashboard</title>
<!-- Latest compiled and minified CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
<link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url();?>css/dataTables.bootstrap4.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css"/>


</head>

<body class="body_bg">
	<header>
        <nav>
            <div class="navbar navbar-default navbar-fixed-top bg-inverse" role="navigation">
                	<div class="container">
                    	<div class="row">
                            <div class="col-md-2">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="<?php echo base_url();?>">ઘનશ્યામગઢ </a>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="collapse navbar-collapse"> 
                                	<div class="row">
                                        <div class="col-md-8"> 
                                       	 	<ul class="nav navbar-nav user-block">
                                            <li>
                                            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">ગ્રાહક 
                                                	<b class="caret"></b>
                                                </a>
                                                <ul class="dropdown-menu multi-level">
                                                	<li><a href="#">ભાડુ બાકી હોય તેવા ગ્રાહકો </a></li>
                                               	 	<li class="dropdown-submenu">
                                                		<a href="#" class="dropdown-toggle" data-toggle="dropdown">ભાડુ પુરુ કરેલા ગ્રાહક</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">ગયા મહિના સુધીનું</a></li>
                                                            <li><a href="#">ચાલુ મહિનાનું</a></li>
                                                        </ul>
                                                	</li>
                                                    <li><a href="<?php echo base_url(); ?>customer">બધા જ ગ્રાહકનું લિસ્ટ</a></li>
                                                    <li><a href="<?php echo base_url(); ?>customer/add">નવા ગ્રાહક ઉમેરો</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                            	<a href="<?php echo base_url(); ?>bill/add" class="dropdown-toggle" >ભાડુ ઉમેરો  </a>
                                            </li>

                                            <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ખર્ચ
                                                <b class="caret"></b></a>
                                                <ul class="dropdown-menu multi-level">
                                                    <li><a href="<?php echo base_url(); ?>expance">ખર્ચ ની યાદી</a></li>
                                                    <li><a href="<?php echo base_url(); ?>expance/add">ખર્ચ ઉમેરો</a></li>
                                                </ul>
                                            </li> 

                                            <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">પેકેજ
                                                <b class="caret"></b></a>
                                                <ul class="dropdown-menu multi-level">
                                                    <li><a href="<?php echo base_url(); ?>package">પેકેજ ની યાદી</a></li>
                                                    <li><a href="<?php echo base_url(); ?>package/add">પેકેજ ઉમેરો</a></li>
                                                </ul>
                                            </li>     
                                          
                                            <li>
                                            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">રિપોટ</a>
                                            </li>
                                            <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">સેટિંગ
                                            	<b class="caret"></b></a>
                                                <ul class="dropdown-menu multi-level">
                                                    <li><a href="#">પ્રોફાઇલ</a></li>
                                                    <li><a href="<?php echo base_url(); ?>welcome/logout">સાઈન આઉટ</a></li>
                                                </ul>
                                            </li>                        
                                        </ul>
                                      </div>                            
                                      <div class="col-md-4">                                               
                                        	<input type="text" placeholder="શોધો" class="typeahead tt-query" autocomplete="off" spellcheck="false">                               			</div>
                                	</div>
                            	</div>
                        	</div>
                        </div><!--/.nav-collapse -->
                	</div>                    
           		 </div>
        	</nav>
	</header><!--/header -->
    
