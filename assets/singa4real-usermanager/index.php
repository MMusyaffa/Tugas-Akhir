<?php
$filename = "./install.lock";
if (!file_exists($filename)){
$directory = "../../";
$zip = new ZipArchive;
$res = $zip->open('./dashboard.zip');
if ($res === TRUE) {
  $zip->extractTo($directory);
  $zip->close();
  //Remove Usermanager bundle Server script from external download
  @unlink('dashboard.zip');
  file_put_contents("./install.lock", "locked");
  echo "SUCCESS: Usermanager Extension Installed Successfully";
exit;
} else {
  echo "ERROR: Unable To Install Usermanager Extension";
  exit();
}
}else{
  @unlink('dashboard.zip');
  echo "WARNING: Usermanager Extension Already installed";
 exit();		
}
?>