<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Daniel Strong</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<?php  
if(strpos($_SERVER['SCRIPT_NAME'],'projects.php') !== FALSE) 
echo '<link rel="stylesheet" href="js/magnific.css"> ' 


?>
</head>
<body>
<div id="header">
    <h1><a href="index.html">Daniel Strong</a></h1>
    <ul>			
          <?php echo  strpos($_SERVER['SCRIPT_NAME'],'index.php') !== FALSE  ? '<li class="current">': '<li>'; ?><a href="index.html" title="About Me">About Me</a></li>
		  <?php echo  strpos($_SERVER['SCRIPT_NAME'],'projects.php') !== FALSE  ? '<li class="current">': '<li>'; ?><a href="projects.html" title="Projects">Projects</a></li>
          <?php echo  strpos($_SERVER['SCRIPT_NAME'],'contact.php') !== FALSE  ? '<li class="current">': '<li>'; ?><a href="contact.html" title="Contact">Contact</a></li>
	</ul>
  </div>
  <!-- <div class="clear"></div> -->
  <div id="paper"> 
        <div id="content">