<?php
$name = $_FILES['image']['name'];
$path_to_upload = 'images/$name'; //The @images folder must be created first to be able to do this, for sure
$tmp_path = $_FILES['image']['tmp_name'];
$error = $_FILES['image']['error'];
$name_parts =  explode('.', $name);
$extension_file = strtolower(end($name_parts));
$valid_extensions = ['jpg', 'png', 'svg', 'ico'];

if ($error == UPLOAD_ERR_OK) {
    if(in_array($extension_file, $valid_extensions)){
        if(move_uploaded_file($tmp_path, $path_to_upload)){
            $message = "This is the image you've been uploaded right now";
        }else{
            $message = "We had an error while @moving the image";
        }
    }else{
        $message = "The $extension_file extension file is not allowed!";
    }
}else if($error == UPLOAD_ERR_INI_SIZE){
    $message = "The file size is larger than the limit set in the system's settings";
}else{
    $message = "We had an error while @uploading the image";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Image</title>
</head>
<body>
    <h1><?= $message ?></h1>
    <img src="<?= $path_to_upload ?>" alt="Uploaded Image" style="width:auto;">
</body>
</html>
