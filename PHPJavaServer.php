<?php 
$filename=$_GET['fileName'];
  $fileData=file_get_contents('php://input');
  $fhandle=fopen("/images/".$filename, 'wb');
  fwrite($fhandle, $fileData);
  fclose($fhandle);
  echo("Done uploading");
?>