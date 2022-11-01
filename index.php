<!-- 
Same concept from the login system except this version only asks for a access code

No sanitization is required for this code as the query doesn't process any user input in the database (Nothing to be manipulated)
 -->

<?php
require_once 'assets/config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome | login</title>
</head>
	<body>
		<form method="POST">
         <input name="data" placeholder="Enter Secret">
         <button type="submit" name="submit">Submit</button>
         <?php
         if(isset($_POST['submit'])) {
            $query = mysqli_query($conn, "SELECT data FROM secret_holder;");
            $output = $query->fetch_assoc();

            if(sha1($_POST['data']) === $output['data']) {
               die('Valid code [x]');
            } else {
               die('Invalid code [y]');
            }
         }
         ?>
      </form>
	</body>
</html>