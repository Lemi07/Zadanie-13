<!DOCTYPE html>
<html lang="en">
<head>
<title>GuestBook</title>
</head>
<body>
	<h1>GuestBook</h1>
	<form action="index.php" method="POST">
		First name <input type="text" name="fname"><br>
		Last name <input type="text" name="lname"><br>
		comment <textarea name="comment"> </textarea>
		 <br>
		 <input type="submit" value='post comment">
		 
		</form>
			<hr>
		<?php
		
			if( isset( $_POST['fname'] )    )   {
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$comment=$_POST['comment'];

			$file=fopen("comments.html","a");
			fwrite($file,"<b>First Name</b>".$fname. "<br>");
			fwrite($file,"<b>Last Name</b>".$lname. "<br>");
			fwrite($file,"<b>Comment</b>".$comment. "<br><hr>");
			fclose($file);
			}
			require("comments.html")
			
		?>
		
		
		
		
</body>
</html>