<?php
// echo "<pre>";
// print_r($_FILES);die;
// move_uploaded_file($_FILES['file_upload']['tmp_name'], 'upload/'.$_FILES['file_upload']['name']);
$folder_path = 'upload/';
$file_path = $folder_path.$_FILES['file_upload']['name'];
$flag_ok = true;
$file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
if($file_type != 'jpg' && $file_type != 'png' && $file_type != 'jpeg' && $file_type != 'gif'){
    $flag_ok = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?php if(isset($file_path)){echo $file_path;}?>" alt="">
</body>
</html>