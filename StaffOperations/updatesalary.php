<html lang="en">
  <head>
	<title class="title">Dreamhome Rental Agency</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <link rel="stylesheet" href="../CSS/dreamhome.css" />
    <link rel="icon" href="../favicon.ico" />
  </head>
  <body>
      
    <header>
	   <h1>Dreamhome Rental Agency</h1>
    </header>
	<table style="width:100%" id="table">
    <tr>
        <th colspan="4"><a href="../index.html" class ="home">Home Page</a></th>
    </tr>
    <tr>
        <th colspan="4"><a href="staffoperations.html" class ="home">Staff Operations</a></th>
    </tr>
</table>
	<h2>Update the salary of an employee given their first name & last name</h2>
	<h3>Enter first & last name below:</h3>
	<form method="POST">
	First Name: <input type="text" name="firstname" placeholder="Joe" required><p>
	Last Name: <input type="text" name="lastname" placeholder="Bloggs" required><p>
	New Salary:  <input type="number" min="5000" max="100000" name="salary" 		placeholder="23565" required><br><br>
	<input type="submit" value="Update Salary">
	</form>

<?php
if (count ($_POST) != 0){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$salary = $_POST['salary'];

	include "../dreamsetup.php";
	$conn_id = dream_connect ()
 	or die ("Cannot connect to server");

	$query = "UPDATE staff SET Salary = '$salary'
	"
	."where Fname = '$firstname' and Lname = '$lastname' ";
	$result_id = mysqli_query ($conn_id, $query)
		or die ("Cannot execute query");
	if ($result_id){
			print("<p> Salary of <b> " .$firstname. " " .$lastname. "</b> updated 					successfully.</p>");
		} else {
			print("<p> Salary of <b> " .$firstname. " " .$lastname. "</b>  NOT 					updated successfully.</p>");
		}
}
?>
</body>
    <footer>
        <p> 
            <small>
                      &copy; Colin Kelleher,  University College Cork. All rights reserved.
            </small>
        </p> 
    </footer>
</html>
