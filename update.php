<?php
 $name=$session=$f_name=$m_name=$cor_add=$per_add=$phone=$mobile=$ten_mrk=$twel_mrk=$Err=$email=$gender=$cat="";
 $name=$_POST["name"];
 $session=$_POST["session"];
 $f_name=$_POST["f_name"];
 $m_name=$_POST["m_name"];
 $cor_add=$_POST["cor_add"];
 $per_add=$_POST["per_add"];
 $phone=$_POST["phone"];
 $mobile=$_POST["mobile"];
 $ten_mrk=$_POST["ten_mrk"];
 $twel_mrk=$_POST["twel_mrk"];
 $email=$_POST["email"];
 $gender=$_POST["gender"];
 $cat=$_POST["cat"];

 $connect = mysql_connect("localhost","root","");
  if(!$connect)
  die("Server Not connected");
  $db = mysql_select_db("form",$connect);
  if(!$db)
  die("Database not Connected");

  $id = $_GET["id"];

 $sql="UPDATE info 
        SET name='$name',f_name='$f_name',email='$email', session='$session',m_name='$m_name',cor_add='$cor_add',per_add='$per_add',phone='$phone' mobile='$mobile',ten_mrk='$ten_mrk',twel_mrk='$twel_mrk' WHERE id=$id";
  mysql_query($sql);      

  header("location:form.php");
?>