<?php
// Enter the name of directory
$pathdir = "./1teste/"; 
  
// Enter the name to creating zipped directory
$zipcreated = "testes/te.zip";
  
// Create new zip class
$zip = new ZipArchive;
   
if($zip -> open($zipcreated, ZipArchive::CREATE ) === TRUE) {
      
    // Store the path into the variable
    $dir = opendir($pathdir);
       
    while($file = readdir($dir)) {
        if(is_file($pathdir.$file)) {
            $zip -> addFile($pathdir.$file, $file);
        }
    }
    $zip ->close();
    print 'OK';
}
