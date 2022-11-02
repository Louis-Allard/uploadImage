<?php
if(isset($_POST['send'])) {
    $img_name  = $_FILES['img_upload']['name'];
    $tmp_img_name = $_FILES['img_upload']['tmp_name'];
    $folder = 'upload/';
   if(move_uploaded_file($tmp_img_name ,$folder.$img_name)) {
    echo "img uploaded";
   }
    else {
        echo "upload non effectué";
    }
   };
?>

<form action='' method='POST' enctype='multipart/form-data'>
    <input type='file' name='img_upload' />
    <br /><br />
    <input type='submit' name='send' />
    <?= $tmp_img_name;?>
    <?= $folder.$img_name; ?>
</form>
