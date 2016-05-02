<?php
  session_start();
?>
<!DOCTYPE html>
<head>
  <link href="cap.js" rel="javascript" type="cap.js" media="all">
  <title>Registration Form</title>
<style>
	 table 
	   {
       border-collapse: collapse;
       border-radius: 10px;
       text-align: left;
       background-color:white;
       font color:black;
       }

     table, td, tr 
     {
      border: 3px solid black;
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
      background-color:#ccc;
     }
  
   </style>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link href="layout/styles/style.css" rel="stylesheet" type="text/css" media="all">
  <script>
  $(function() {
    $("#datepicker").datepicker();
  });
  </script>
  <script>
  function ValidateEmail()  
   {  
      var email = document.getElementById('email');
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
      if(!(email.value.match(mailformat)))  
      {  
       alert("You have entered an invalid email address!");  
       document.getElementById('email').focus();  
       return false;   
      }  
    }  
  </script>
 </head>  
<?php
    //echo $_POST['captcha']."=>".$_SESSION['digit']; 

 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
 	  if($_POST['captcha'] != $_SESSION['digit'])
     echo $Err = "Sorry, the CAPTCHA code entered was incorrect!";
 

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

  if (empty($session))  
	   {  
       echo $Err="enter the session";
	   }

	else if (empty($name))  
	   {  
       echo $Err="enter the name";
	   }
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
     {
       echo $Err = "Only letters and white space allowed in name";
     }   
	else if (empty($f_name))  
	   {  
       echo $Err="enter father's name";
	   }
     if (!preg_match("/^[a-zA-Z ]*$/",$f_name)) 
     {
       echo $Err = "Only letters and white space allowed in father's name";
     }   
	else if (empty($m_name))  
	   {  
       echo $Err="enter mother's name";
	   }
     if (!preg_match("/^[a-zA-Z ]*$/",$m_name)) 
     {
       echo $Err = "Only letters and white space allowed in mother's name";
     }  
	else if (empty($cor_add))  
	   {  
       echo $Err="enter the correspondence address";
	   }
     if (!preg_match("/^[a-zA-Z ]*$/",$cor_add)) 
     {
       echo $Err = "Only letters and white space allowed in correspondence address";
     }  
	else if (empty($per_add))  
	   {  
       echo $Err="enter the permanent address";
	   }
     if (!preg_match("/^[a-zA-Z ]*$/",$per_add)) 
     {
       echo $Err = "Only letters and white space allowed in permanent address";
     }  
	else if (empty($phone))  
	   {  
       echo $Err="enter the phone number";
	   }
    /* else if(!preg_match("0-9",$phone))
     {
      echo $Err="only numeric values are allowed";
     }*/
                     
	else if (empty($mobile))  
	   {  
       echo $Err="enter the mobile number";
	   }
    /*else if(!preg_match("0-9",$mobile))
     {
      echo $Err="only numeric values are allowed";
     }*/
  else if (empty($email))  
     {  
       echo $Err="enter the email address";
     }
     
	$connect = mysql_connect("localhost","root","");
    if(!$connect)
    die("Server Not connected");
    $db = mysql_select_db("student",$connect);
    if(!$db)
    die("Database not Connected");   

    $sql="INSERT INTO info(session, name, f_name, m_name, cor_add, per_add, phone, mobile, ten_mrk, twel_mrk,email)
          VALUES ('$session','$name','$f_name','$m_name','$cor_add','$per_add','$phone','$mobile','$ten_mrk','$twel_mrk','$email')";

    mysql_query($sql);         
 }

          /*$subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($email,$subject,$message,$header);
         if($retval==true)
         {
          echo "message sent successfully";
         }
         else
         {
          echo "mail cannot be sent";
         }*/
?> 
<h1 align="center">ABC School</h1> 
<h2 align="center"><i><u>Admission Form</u></i></h2>
<body>
<form method="post"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return ValidateEmail()">
<table align="center" style="witdth:100%" bgcolor="#000">
	<tr>
		<td><input type="text" style="font-size:20px; padding:10px;" name="session" placeholder="Session" size="50"padding:5px required/></td>
		<td><input type="text" style="font-size:20px; padding:10px;" name="name" placeholder="Name" size="50" required/></td>
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
		<td><input type="text" style="font-size:20px; padding:10px;" name="f_name" placeholder="Father's name" size="50" required/></td>
		<td><input type="text" style="font-size:20px; padding:10px;" name="m_name" placeholder="Mother's name" size="50" required/></td>
	</tr>
	<tr>
		<td><textarea name="cor_add" placeholder="Correspondence address" rows="4" cols="61" required/></textarea></td>
		<td><textarea name="per_add" placeholder="Permanent address" rows="4" cols="61" required/></textarea></td>	
	</tr>	
	<tr>
		<td><input type="text" style="font-size:20px; padding:10px;" name="phone" placeholder="Phone number"size="50" required/></td>
		<td><input type="text" style="font-size:20px; padding:10px;" name="mobile" placeholder="Mobile number" size="50" required/></td>
	</tr>
	<tr>
		<td><input type="text" style="font-size:20px; padding:10px;" name="ten_mrk" placeholder="Tenth %" size="50" required/></td>
		<td><input type="text" style="font-size:20px; padding:10px;" name="twel_mrk" placeholder="Twelth %" size="50"required/></td>
  </tr>
  <tr>
    <td><input type="text" id="datepicker" placeholder="Date of birth" style="font-size:20px; padding:10px;" required></td>
    <td><input type="text" style="font-size:20px; padding:10px;" name="email" id="email" placeholder="email-id" size="50" required/></td>
  </tr>	
  <tr>
    <td>
     <form method="POST" action="form-handler" onsubmit="return checkForm(this);">
     <p><img src="captcha.php" width="120" height="30" border="1"></p>
     <p><input type="text" size="6" maxlength="5" name="captcha" value=""><br>
     <small font-color="blue">copy the digits from the image into this box</small></p>
     </form>
    </td>  
  </tr> 
 </table>  
 - <div align="center"><input type="submit" align="center"name="submit" value="Save and continue" style="padding: 7px 10px;" /></div>	
</form>
</body>
</html>