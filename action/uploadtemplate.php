<?php
require_once '../configuration/configuration.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  //echo"hhjkhk"; 
  $file_content = file_get_contents($_FILES['tempupload']['tmp_name']);
  $temp_name = $_FILES['tempupload']['tmp_name'];
  //echo( SITE_ROOT );exit();
  $path = SITE_ROOT . "/uploads/";
  $movepath = $path . 'Template.docx';

  // Do something with the file content
  //echo $file_content; exit();

  $template_file_name = 'Template.docx';
  /* $full_path = $folder . '/' . $template_file_name; */

  $full_path = $path . $template_file_name;

  if (move_uploaded_file($temp_name, $movepath)) {
    /* echo"MOVED";
      echo($path);exit(); */
    copy($template_file_name, $path);

    $zip_val = new ZipArchive;
    if ($zip_val->open($full_path) == true) {
      //echo"FGG";

      $key_file_name = 'word/document.xml';
      $message = $zip_val->getFromName($key_file_name);


      /* print_r($message);
      exit(); */



      $re = '/{{(.*?)}}/m';
      $str = $message;

      preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

      // Print the entire match result
      //var_dump($matches); exit();

      $array = $matches; // print_r(json_encode($array));exit;



      //$uniques = array_values(array_unique($array, SORT_REGULAR));
      $uniqueValues = array_unique(array_column($array, 1));

      /* $array = array("GENDER", "EMPLOYEE_NAME", "GENDER", "EMPLOYEE_NAME", "POSITION", "DOJ");
      $unique_array = array_unique($array); */

      print_r($uniqueValues);










      /*  $uniqueValues = [];

      foreach ($array as $subArray) {
        if (!in_array($subArray[1], $uniqueValues)) {
          $uniqueValues[] = $subArray[1];
        }
      }

      print_r($uniqueValues); */
    }
  }
}
