<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //echo"hhjkhk"; 
    $file_content = file_get_contents($_FILES['tempupload']['tmp_name']);
  
    // Do something with the file content
    echo $file_content; exit();
  }
  

?>