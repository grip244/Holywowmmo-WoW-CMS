<html>
<head>
<title>Holy-wowmmo</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
	include("includes/header.php");
?>
  <div id="content">
  	<table id="table">
  	   <tr>
  	   <td id="nav">
  	       &nbsp;
  	   </td>
  	   <td id="page">
  	   	   <h3>Admin Panel</h3>
  	   	   <p> Welcome to the admin panel!</p>
  	   	   <ul>
  	   	   		<li><a href="content.php">Manage Site</a></li>
  	   	   		<li><a href="new_fac.php">Add new staff member</a></li>
  	   	   		<li><a href="logout.php">Logout</a></li>
  	   	   </ul>
  	   </td>
  	 </tr>
  	</table>
  </div>
 <?php 
 	include("includes/footer.php");
 ?>

</body>

</html>
