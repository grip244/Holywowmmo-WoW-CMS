<html>
<head>
<title>Holy-wowmmo</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
	require_once("includes/connect.php");
	require_once("includes/functions.php");
	include("includes/header.php");

?>
  
  <div id="content">
  	<table id="table">
  	   <tr>
  	   <td id="nav">
  	   <ul class="info">
<?php 
$query_info = "SELECT * FROM information ORDER BY position ASC";
$info_set = mysqli_query($connection,$query_info);
confirm_query($info_set);
while ($info = mysqli_fetch_array($info_set)){
	echo "<li>{$info["menu"]}</li>";

$query_pages = "SELECT * FROM pages WHERE information_id ={$info["id"]} ORDER BY position ASC";
$page_set = mysqli_query($connection,$query_pages);
confirm_query($query_pages);
echo "<ul class=\"pages\">";
while ($info = mysqli_fetch_array($page_set)){
	echo "<li>{$info["menu"]}</li>";
}
echo "</ul>";
}
?>
		</ul>
  	   </td>
  	   <td id="main">
  	    <h3>Main content</h3>
  	   
  	   
  	   </td>
  	 </tr>
  	</table>
  </div>
<?php 
	include("includes/footer.php");
?>
</body>

</html>

