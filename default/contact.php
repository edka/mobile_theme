<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<title>MobileWeb</title>
<link rel="stylesheet"  href="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.css" />
<link rel="stylesheet" href="data/mobile.css" />
<link rel="stylesheet" href="data/photoswipe.css" />
<script type="text/javascript" src="data/klass.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.js"></script>
<script type="text/javascript" src="data/code.photoswipe.jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="data/mobile.js"></script>
<script type="text/javascript" src="data/submitform.js"></script>
</head>
<body>
<div data-role="page" data-theme="c" id="contact" data-position="inline">
  <div data-role="header" data-theme="f">
    <a href="index.html" data-icon="arrow-l">Back</a>
    <h1>Contact</h1>
  </div>
  <!-- /Header -->
  <div data-role="content">
    <div>
      <h1>Contact</h1>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
    </div>
    <div id="contact-block">
<?php include('/data/verify.php'); ?>
	<form action="/contact.php" method="post" id="sendEmail">
		<div data-role="fieldcontain"> 
		   <label for="emailFrom">Email: *</label>
           <input type="text" name="emailFrom" id="emailFrom" value="<?= $_POST['emailFrom']; ?>" />
         </div>
		 <?php if(isset($emailFromError)) echo '<div data-role="fieldcontain" class="error">'.$emailFromError.'</div>'; ?>
         <div data-role="fieldcontain">
		   <label for="subject">Name: *</label>
           <input type="text" name="subject" id="subject" value="<?= $_POST['subject']; ?>" /><?php if(isset($subjectError)) echo '<div class="error">'.$subjectError.'</div>'; ?>
         </div>
         <div data-role="fieldcontain">
		   <label for="message">Message: *</label>
           <textarea name="message" id="message"><?= $_POST['message']; ?></textarea><?php if(isset($messageError)) echo '<div class="error">'.$messageError.'</div>'; ?>
         </div>
         <div data-role="fieldcontain" class="formbutton">
           <button type="submit" id="submit" data-theme="f">Send</button>
           <input type="hidden" name="submitted" id="submitted" value="true" data-theme="f" />
         </div>
		  <p>* All fields are required</p>
	</form>
	<div class="clearing"></div>
</div>
  </div>
  <!-- /Content -->
  <div data-role="footer" data-theme="f">
    <div class="ui-bar">
     <a href="index.html" data-role="button" data-icon="plus" data-theme="f">Home</a>
     <a href="" data-role="button" data-icon="star" data-theme="f">Facebook</a>
     <a href="" data-role="button" data-icon="star" data-theme="f">Twitter</a>
    </div>
  </div>
  <!-- /Footer --> 
</div>
<!-- /Contact -->
</body>
</html>
