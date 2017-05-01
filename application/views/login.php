<!DOCTYPE html>
<html lang="eng">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ઘનશ્યામગઢ લોગ–ઇન</title>
<!-- Latest compiled and minified CSS -->
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url();?>js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css"/>
</head>

<body class="login_bg">
	<!--/header -->
    <section>
        <div class="container">
        	<form role="form"  class="login-form" method="post" action="<?php echo base_url().'verifylogin'; ?>">
			
			<div class="logo">ઘનશ્યામગઢ </div>
            <div class="login-block">
            <span style="color:#FF0000"> <?php if(validation_errors()){ echo validation_errors(); } ?></span>
            	<h1>લોગ – ઇન</h1>
                <label>યુઝરનું નામ </label>
                    <input type="email" class="form-control" autocomplete="off" placeholder="Username" name="email">
              	 <label>પાસવર્ડ</label>
                    <input type="password" class="form-control" autocomplete="off" placeholder="Password" name="password">
              <button value="Login" type="submit">Submit</button>
            </div>
			</form>
        </div><!--/.container--> 
    </section>
