<?php include 'header.php';
?>

<form action="upload_img.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $_REQUEST["id"];?>">

    <p align="center" style="color:white">Select image to upload:</p>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>