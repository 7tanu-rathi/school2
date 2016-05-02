<?php include 'header.php';?>
 <meta charset="UTF-8">
 
 <style>
 table, td
 {
 	text-align: "center"; 
 	border:1px solid blue;
 	border-radius:5px;
 }
 body
 { 
 	margin:auto;
 	padding:auto;
 	width:1024px;
 }
 tr, td 
 {
    padding: 8px;
    text-align:center;
 }
 </style>
</head>
<body>
<?php
  $connect = mysql_connect("localhost","root","");
  if(!$connect)
  die("Server Not connected");
  $db = mysql_select_db("student",$connect);
  if(!$db)
  die("Database not Connected");

   $sql1= "SELECT  id, name, f_name, email from info";
  $retvalue=mysql_query($sql1);


?>
<table style="width:100%;color:blue;" >
  <tr>
      <td>Id</td><td>Name</td><td>Father's Name</td><td>Email id</td><td>Add Image</td><td>Operation</td><td>View full details</td>
  </tr>
  <?php
    $count=1;
    while($row = mysql_fetch_array($retvalue))
    {
  ?>
  <tr>
      <td><?php echo $count?></td>
      <td><?php echo $row["name"];?></td>
      <td><?php echo $row["f_name"];?></td>
      <td><?php echo $row["email"];?></td>
      <td><a href="add_image.php?id=<?php echo $row['id'];?>">Add Image</a></td>
      <td><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>&nbsp;&nbsp;<a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
      <td><a href="detail.php?id=<?php echo $row['id'];?>">Details</td>
  </tr>
  <?php
  $count=$count+1;
    } 
  ?>
</table>
</body>
</html>