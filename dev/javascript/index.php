<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" href="../../css/colour_test.css" type="text/css" media="screen" />
<script type="text/javascript">
	function show_alert(){
		alert("This is an example warning message!");
	}
</script>

<title>JavaScript Examples</title>
</head>

<body>
<div class="container">
<table class="layout" cellspacing="15px">
	<!-- Header -->
	<tr>
		<?php include("../../common/header.htm") ?>
	</tr>
	
	<!-- Menu & Content -->
	<tr>
		<?php include("../../common/menu.htm") ?>
	</tr>

		<tr>
		<td class="content" colspan="2" style="width: 706px"><div>
		
		<!-- Introduction - Writing from external js file -->
		<script type="text/javascript" src="js/document-writing.js"></script>
		<hr />
		
		<!-- Using Variables -->
		<h2>Using variables in JavaScript</h2>
		<script type="text/javascript">
			var x = 5;
			var y = 10
			var z = x + y;
			
			document.write("<p>The letter &quot;x&quot; has been assigned the value of 5<br />");
			document.write("The letter &quot;y&quot; has been assigned the value of 10<br />");
			document.write("If we then assign the value of &quot;z&quot; as &quot;x plus y&quot; we get an answer of " + z + " </p>");
			
			sentence1 = "This is sentence 1. ";
			sentence2 = "This is sentence 2. ";
			sentencefinal = sentence1 + sentence2;
			
			document.write("<br /><p>If we add two sentences together this is what the result would be: <br />");
			document.write(sentencefinal + "</p>");
		</script>
		<hr />
		
		<!-- If Statements -->
		<h2>Using IF to display time/date</h2>
		<p>Here we look at the current time of day to display a message which corresponds to that 
			time of day, along with a time stamp.</p><br />
		<script type="text/javascript">
			var d = new Date();
			var hour = d.getHours();

			if (hour < 12){
  				document.write("<p>Good morning!");
			}
			else if (hour > 12 && hour < 18){
 				document.write("<p>Good afternoon!");
			}
			else{
				document.write("<p>Good evening!");
			}
			
			document.write(" Here is the current time stamp: <b>" + d + "</b></p>");
		</script>
		<hr />
		
		<!-- Case statement -->
		<h2>Using Case Statements to look forward to the weekend</h2>
		<p>In this section we work out which day of the week it is, and display 
		a corresponding message.<br /><br />If it&#39;s Friday: Finally Friday!<br />
			For Saturday: Super Saturday!<br />
			For Sunday: Sleepy Sunday...<br />
			Any other day: Looking forward to the Weekend!<br /><br />
			The result is: 
		<script type="text/javascript">
			var d = new Date();
			var day = d.getDay();
			
			switch (day){
			case 5:
				document.write("Finally Friday!");
				break;
			case 6:
				document.write("Super Saturday!");
				break;
			case 7:
				document.write("Sleepy Sunday...");
				break;
			default:
				document.write("Looking forward to the Weekend!");
			}
		</script></p>
		<hr />
		
		<!-- Buttons & Pop-ups -->
		<h2>Using buttons and pop-up messages</h2>
		<p>Here we have a button to display a pop-up warning message:</p>
		<input type="button" onclick="show_alert()" value="Display warning message" />

			<p class="foot">Copyright 2012 &copy; Scotty Dawg</p>
		</div></td>
	</tr>
</table>
</div>
</body>

</html>
