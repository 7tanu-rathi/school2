<!DOCTYPE html>
<head>
<style>
	 table 
	   {
       border-collapse: collapse;
       border-radius: 10px;
       text-align: left;
       background-color:green;
       font color:black;
       }

     table, td, tr 
     {
      border: 3px solid green;
      padding:5px;
      border-radius:10px;
      align-content:left;
      font color:black;
     }

     body
     {
      margin:10px;
      padding:5px;
      width:100%;
      font color:black;
      background-color: #ccc
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

      $id = $_GET["id"];
      
      $sql = "SELECT * from info where id=$id";
      $rs = mysql_query($sql);
      $row = mysql_fetch_array($rs);
    ?>

  <form method="post" action="update.php">
     <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
      <table align="center" style="witdth:100%" bgcolor="#000">
  <tr>
    <td><input type="text" style="font-size:20px; padding:10px;" name="session" placeholder="Session" size="50"padding:5px/></td>
    <td><input type="text" style="font-size:20px; padding:10px;" name="name" placeholder="Name" size="50"/></td>
  </tr>
  <tr>
    <td>
      <select name="wid" id="wid">
        <option colspan="10">Male</option>
        <option colspan="10">Female</option>
      </select> 
    </td>
    <td>   
      <select name="wid" id="wid">
        <option>General</option>
        <option>SC</option>
        <option>ST</option>
        <option>OBC</option>
      </select>  
    </td>    
  </tr>  
  <tr>
    <td><input type="text" style="font-size:20px; padding:10px;" name="f_name" placeholder="Father's name" size="50"/></td>
    <td><input type="text" style="font-size:20px; padding:10px;" name="m_name" placeholder="Mother's name" size="50"/></td>
  </tr>
  <tr>
    <td><textarea name="cor_add" placeholder="Correspondence address" rows="4" cols="61"/></textarea></td>
    <td><textarea name="per_add" placeholder="Permanent address" rows="4" cols="61"/></textarea></td> 
  </tr> 
  <tr>
    <td><input type="text" style="font-size:20px; padding:10px;" name="phone" placeholder="Phone number"size="50"/></td>
    <td><input type="text" style="font-size:20px; padding:10px;" name="mobile" placeholder="Mobile number" size="50"/></td>
  </tr>
  <tr>
    <td><input type="text" style="font-size:20px; padding:10px;" name="ten_mrk" placeholder="Tenth %" size="50"/></td>
    <td><input type="text" style="font-size:20px; padding:10px;" name="twel_mrk" placeholder="Twelth %" size="50"/></td>
  </tr>
  <tr>
    <td><input type="text" id="datepicker" placeholder="Date of birth" style="font-size:20px; padding:10px;"></td>
    <td><input type="text" style="font-size:20px; padding:10px;" name="email" placeholder="email-id" size="50"/></td>
  </tr> 
  <!--<tr>
    <td>
      <img src="captcha_code_file.php?rand=<?php //echo rand(); ?>" id='captchaimg' ><br>
      <label for='message'>Enter the code above here :</label><br>
      <input id="6_letters_code" name="6_letters_code" type="text"><br>
      <small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
    </td>  
  </tr> --> 
 </table>  
 - <div align="center"><input type="submit" align="center"name="submit" value="Save and continue" style="padding: 7px 10px;"/></div>  
</form>
</body>
</html> 