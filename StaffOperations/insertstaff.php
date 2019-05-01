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
  </head>
  <body>
	<h3>Record a new staff member's details.</h3>
	    <form method="post">
		Staff No.:<br>
			<input type="text" value="" name="staff_no" maxlength="4" placeholder = "SG12" required><br><br>
		First Name: <br>
			<input type="text" value="" name="fname" placeholder = "Joe" required><br><br>
		Last Name: <br>
			<input type="text" value="" name="lname" placeholder = "Bloggs" required><br><br>
		Address: <br>
			<input type="text" value="" name="address" placeholder = "WGB, UCC" required><br><br>
		Telephone: <br>
			<input type="text" value="" name="telephone" maxlength="13" placeholder="1234-567-8910" required><br><br>
		Position: <br>
			<select name="position" required>
		  		<option value="Manager">Manager</option>
		  		<option value="Deputy">Deputy</option>
		  		<option value="Assistant">Assistant</option>
		  		<option value="Snr Asst">Senior Assistant</option>
			</select><br><br>
				Sex: Male <input type="radio" name="sex" value="M" checked> Female <input type="radio" name="sex" value="F">
		<br><br>
				DOB: <br>
					<input type="date" value="" name="dob" max="2019-03-15" required><br><br>
				Salary: <br>
					<input type="number" min="5000" max="100000" name="salary" placeholder="23565" required><br><br>
				NIN: <br>
					<input type="text" value="" name="nin" maxlength="9" placeholder="WK442011B" required><br><br>
				Branch No.: B3 
				<input type="radio" name="bno" value="B3" checked> B5 <input type="radio" name="bno" value="B5"> B7 <input type="radio" name="bno" value="B7"> B4 <input type="radio" name="bno" value="B4"> B2 <input type="radio" name="bno" value="B2"><br><br>
		<input type="submit" value="Add new staff member to database">
	    </form>
	    <br>

<?php
	include "../dreamsetup.php";
		$conn_id = dream_connect ()
 	or die ("Cannot connect to server");
	  if ($_POST){
		$staff_no = $_POST['staff_no'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$address = $_POST['address'];
		$telephone = $_POST['telephone'];
		$position = $_POST['position'];
		$sex = $_POST['sex'];
		$dob = $_POST['dob'];
		$salary = intval($_POST['salary']);
		$nin = $_POST['nin'];
		$bno = $_POST['bno'];
		$insert= "INSERT INTO staff VALUES('".$staff_no."', '".$fname."', '".$lname."', '".$address."', '".$telephone."','".$position."', '".$sex."', '".$dob."', '".$salary."', '".$nin."', '".$bno."')";
		$result = mysqli_query($conn_id, $insert)
			or exit("Cannot execute insert");
		if ($result){
			print("<p> New staff member <b>" .$fname. " " .$lname. "</b> inserted into staff.</p>");
		} else {
			print("<p>New staff member could <b>not</b> be added, Please try again.</p>");
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
