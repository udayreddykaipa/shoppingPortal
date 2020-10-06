
<?php
session_start();
include "connect.php";
//echo $_SESSION['email'] ;
$message = '';

if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload')
{

 
 if (isset($_FILES['img1']) && $_FILES['img1']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['img1']['tmp_name'];
    $fileName = $_FILES['img1']['name'];
    $fileSize = $_FILES['img1']['size'];
    $fileType = $_FILES['img1']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // sanitize file-name
    $newFileName = $_SESSION['email'].'img1'.  md5(time() . $fileName) . '.' . $fileExtension;

    // check if file has one of the following extensions
    $allowedfileExtensions = array('jpg', 'jpeg', 'png');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = 'uploads/';
      $dest_path = $uploadFileDir . $newFileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='File is successfully uploaded.';
      }
      else 
 {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['img1']['error'];
  
   }


 
 if (isset($_FILES['img2']) && $_FILES['img2']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['img2']['tmp_name'];
    $fileName = $_FILES['img2']['name'];
    $fileSize = $_FILES['img2']['size'];
    $fileType = $_FILES['img2']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // sanitize file-name
    $newFileName1 = $_SESSION['email'].'img2'. md5(time() . $fileName) . '.' . $fileExtension;

    // check if file has one of the following extensions
    $allowedfileExtensions = array('jpg', 'jpeg', 'png');

    if (in_array($fileExtension, $allowedfileExtensions))
    {



      // directory in which the uploaded file will be moved
      $uploadFileDir = 'uploads/';
      $dest_path = $uploadFileDir . $newFileName1;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='File is successfully uploaded.';
        function validate($data){
       $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }
$email= validate($_SESSION['email']);
$height=validate($_POST['height']);
$weight=validate($_POST['Weight']);

$sql="INSERT INTO userprofile (email,height,weight,imgfront,imgselfie) VALUES ('$email','$height','$weight','$newFileName','$newFileName1')";
       $result = mysqli_query($conn, $sql);
       print_r($result);
//echo $mail.$height.$weight.$newFileName.$newFileName1.$sql;
      }
      else 
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);

    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['img2']['error'];
  
  }



}
$_SESSION['message'] = $message;
echo $message;


?>
