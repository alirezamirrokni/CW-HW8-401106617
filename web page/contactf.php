<?php
 $lastname = $_POST["lastname"];
 $name = $_POST["firstname"];
 $Email = $_POST["Email"];
 $mess = $_POST["subject"];
 $dir = 'message';
 $files1 = scandir($dir);
 sort($files1);
 $cnt = 1;
 foreach($files1 as $value){
    if($value == "$cnt.txt"){
        $cnt = $cnt + 1;
    }
 }
 $file = fopen("message/$cnt.txt","w");
 echo fwrite($file,"(first name: $name);(last name: $lastname);(Email: $Email);(your message: $mess)");
 fclose($file);
 ?>