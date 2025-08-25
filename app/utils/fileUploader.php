<?php
    function file_upload($file,$directory){
        $ext = explode("/",$file['type']);

        $rand1 = rand(100000,9999999);
        $date = new DateTime();
        $date_format = $date->format('dmYhis');
        $file_name = $rand1.$date_format.".".$ext[1];
        move_uploaded_file($file['tmp_name'], 'uploads/'.$directory."/".$file_name);
        return $file_name;
    }
?>