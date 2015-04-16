<?php
  var_dump($_GET);
?>
<!DOCTYPE html>
<html>
 <head>
 	<title>My Favorite Meal</title>
 </head>
 <header>
 	<h1>Homemade Chili</h1>
 </header>
  <main>
 	<h2>Ingredients</h2>
 	<ol>
 		<li>Ground Beef</li>
 		<li>Diced Tomato</li>
 		<li>Onion</li>
 		<li>Your Favorite Beans</li>
 		<li>Assorted Spices</li>
 	</ol>
 	<form>
 		<input id="suggestions" name="suggestion" type="text" placeholder="Suggestions">
 		<input type="submit" value="Send">
 	</form>
  </main>
  <aside>
 	<h3>Other Foods You May Like</h3>
 	  <ul>
 	  	<li><a href="#" title="Taco Recipe">Tacos</a></li>	
 	  	<li><a href="#" title="Bean Soup Recipe">Bean Soup</a></li>
 	  	<li><a href="#" title="Meatloaf Recipe">Meatloaf</a></li>
 	  </ul>
  </aside>	
</html>