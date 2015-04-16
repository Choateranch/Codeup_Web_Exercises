<?php
  var_dump($_GET);
?>
<!DOCTYPE html>
<html>
 <head>
	 <title>My First HTML Form</title>
 </head>
 <body>
   <form method="GET" action="/my_first_form.php">
   	<h1>User Login</h1>
   	<p>
   		<label for="username">Username</label>
   		<input id="username" name="username" type="text" placeholder="Enter Your Username">
   	</p>
   	<p>
   	    <label for="password">Password</label>
   	    <input id="password" name="password" type="password" placeholder="Enter Your Password">
   	</p>
   	<p>
   	    <button type="submit">Login</button>
   	</p>        	
   </form>
   <form>
   	<h1>Compose Email</h1>
   	<p>
   	 <label for="to">To</label>
   	 <input id="to" name="to" type="text" placeholder="Email Address">
   </p>
   <p>
   	<label for="from">From</label>
   	<input id="from" name="from" type="text" placeholder="Your Name">
   </p>
   <p>
   	<label for="subject">Subject</label>
      <input id="subject" name="subject" type="text" placeholder="Enter Subject">      
   </p>
   <p>
      <label for="email_body">Email Body</label>
   </p>
   <p>
      <textarea id="email_body" name="email_body" rows="5" cols="40">Enter Text Here</textarea>
   </p>
   <p>
      <input type="submit" value="Send">
   </p>
   </form>
  </body>
 </html>