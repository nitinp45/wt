<?php

if(isset($_FILES["image"]))
{
    print_r($_FILES);
    $file_name=$_FILES(['image']['name']);
    $file_size=$_FILES(['image']['size']);
    $file_type=$_FILES(['image']['type']);
    $file_tmp_loc=$_FILES(['image']['tmp_name']);

    $file_store="uploaded_files/".$file_name;

    move_uploaded_file($file_tmp_loc,
    $file_store
);
}
?>