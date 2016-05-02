<?php
    $connect=mysql_connect("localhost","root","");
    if(!$connect)
    {
    	die("Connection not established");
    }

    $db=mysql_select_db("student",$connect);
    if(!$db)
    {
    	die("Database not connected");
    }

    $id = $_GET["id"];

    $sql = "DELETE from info where id=$id";

    mysql_query($sql); 
    header("location:list.php");
?>