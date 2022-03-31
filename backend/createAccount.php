<?php
require_once 'connection.php';
$fileToUpload = array();
    $fName = $_POST['firstName'];
    $lName = $_POST['lastName'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $nationalId = $_POST['nationalId'];
    $address = $_POST['address'];
    $mobileNumber = $_POST['mobileNumber'];
$target_dir = "images/";
$target_file = $target_dir . basename($_POST["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["account"])) {



  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}



// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "webp" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
   

   

    $img=basename( $_FILES["fileToUpload"]["name"]);


 //$sql = "INSERT INTO `service` (`image`, `title`, `content`) VALUES ('$img', '$title', '$content')";
 //$result = mysqli_query($connect,$sql)or die("Information is Not Added");
  echo "<script>
					alert('Well Done, Now you have a new service')
					</script>";
		            // echo "<script>
		            // window.open('../service.php','_self')
		            // </script>";	
} else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>