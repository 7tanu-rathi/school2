<!DOCTYPE HTML>
<html>
 <style>
 table, td
 {
 	text-align: "center"; 
 	border:1px solid blue;
 	border-radius:5px;
 	font-color:black;
 }
 body
 { 
 	margin:auto;
 	padding:auto;
 	width:1024px;
 	font-color:black;
 }
 tr, td 
 {
    padding: 8px;
    text-align:center;
    font-color:black;
 }
 </style>
 <body>
<?php include 'header.php';

$connect = mysql_connect("localhost","root","");
    if(!$connect)
    die("Server Not connected");
    $db = mysql_select_db("student",$connect);
    if(!$db)
    die("Database not Connected");   

if(isset($_POST["submit"]))
  {
    if(preg_match("/^[a-zA-Z]+/", $_POST['search']))
    { 
      $search=$_POST['search']; 
    }
    $sql="SELECT * FROM info WHERE name LIKE '%".$search."%'";
    $res=mysql_query($sql);
    while($row = mysql_fetch_array($res))
    {
  ?>
  <table style="width:100%;color:blue">
  <tr>
      <td><?php echo $row["id"];?></td>    
      <td><?php echo $row["name"];?></td>
      <td><?php echo $row["f_name"];?></td>    
      <td><?php echo $row["email"];?></td>
  </tr>
</table>
  <?php
    } 
  }  
?>
</body> 
</html> 