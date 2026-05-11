<?php

if(isset($_POST["submit"])) {

    $new_file_name = "gallery_pic" ;
}
else {
    $new_file_name = strtolower(str_replace(" " , "-", $new_file_name));

}


?>