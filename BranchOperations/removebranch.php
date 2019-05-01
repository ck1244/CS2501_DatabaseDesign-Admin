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
        <th colspan="4"><a href="branchoperations.html" class ="home">Branch Operations</a></th>
    </tr>
</table>
	<h2>Remove a branch by branch number</h2>
	<h3>Enter branch number below:</h3>
	<form  method="POST">
	Staff Number: <input type="text" name="branchno" placeholder="B5" required><p>
	<input type="submit" value="Remove Branch">
	</form>

<?php
if (count ($_POST) != 0){
	$branchNumber = $_POST['branchno'];


	include "../dreamsetup.php";
	$conn_id = dream_connect ()
 	or die ("Cannot connect to server");

	$query = "DELETE from branch WHERE Bno = '$branchNumber'";
	$result_id = mysqli_query ($conn_id, $query)
	or die ("Cannot execute query");
	if ($result_id){
			print("<p> Branch number <b> " .$branchNumber. "</b> deleted successfully.</p>");
		} else {
			print("<p> Branch number <b> " .$branchNumber. "</b> NOT deleted successfully.</p>");
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
