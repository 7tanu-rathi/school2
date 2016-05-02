<!DOCTYPE HTML>
<head>
<title>fancyBox - Fancy jQuery Lightbox Alternative | Demonstration</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Add jQuery library -->
  <script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>

  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

  <!-- Add Button helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
  <script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

  <!-- Add Thumbnail helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
  <script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

  <!-- Add Media helper (this is optional) -->
  <script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

  <script type="text/javascript">
    $(document).ready(function() 
    {
      $('.fancybox').fancybox();
      // Change title type, overlay closing speed
      $(".fancybox-effects-a").fancybox({
        helpers: 
        {
          title : 
          {
            type : 'outside'
          },
          overlay : 
          {
            speedOut : 0
          }
        }
      });
    });
  </script>
  <style type="text/css">
    .fancybox-custom .fancybox-skin {
      box-shadow: 0 0 50px #222;
    }

    body {
      max-width: 700px;
      margin: 0 auto;
    }
  </style>
</head>
</head>
<?php 
  include 'header.php';
  $conn =mysql_connect("localhost","root","");
  if(!$conn)
  {
  	die("connection cannot be established");
  }
  else
  {
  	$db=mysql_select_db('student',$conn);
  	if(!$db)
  	{
  		die("database cannot be connected");
  	}
  }

  $id=$_GET["id"];
  $sql="SELECT * FROM info
        WHERE id=$id";
  $rs=mysql_query($sql);      
  $row=mysql_fetch_array($rs);
 ?>
 <style>
  table, td
 {
 	text-align: "left"; 
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
    padding: 10px;
    text-align:left;
 }
 </style>

 <body>
 	<table style="color:blue">
 		<tr>
 			<td>Session</td>
 			<td colspan="8"><?php echo $row["session"];?></td>
 		</tr>
 		<tr>
 			<td>Name</td>
 			<td><?php echo $row['name'];?></td>
 		</tr>
 		<tr>
 			<td>Father's name</td>
 			<td><?php echo $row["f_name"];?></td>
 		</tr>
 		<tr>
 			<td>Mother's name</td>
 			<td><?php echo $row["m_name"];?></td>
 		</tr>
 		<tr>
 			<td>Email id</td>
 			<td><?php echo $row["email"];?></td>
 		</tr>
 		<tr>
 			<td>Correspondence Address</td>
 			<td><?php echo $row["cor_add"];?></td>
 		</tr>
 		<tr>
 			<td>Permanent Address</td>
 			<td><?php echo $row["per_add"];?></td>
 		</tr>
 		<tr>
 			<td>Phone no.</td>
 			<td><?php echo $row["phone"];?></td>
 		</tr>
 		<tr>
 			<td>Mobile No.</td>
 			<td><?php echo $row["mobile"];?></td>
 		</tr>
 		<tr>
 			<td>Tenth class%</td>
 			<td><?php echo $row["ten_mrk"];?></td>
 		</tr>
 		<tr>
 			<td>Twelth%</td>
 			<td><?php echo $row["twel_mrk"];?></td>
 		</tr>
 		<tr>
 			<td>Image</td>
      <td><a class="fancybox" href="uploads/<?php echo $row["image"];?>"><img src="uploads/<?php echo $row["image"];?>" style="width:50px"/></a></td>
 		</tr>

 	</table>
 </body>
 </html>				