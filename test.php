<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="post" action="" enctype="multipart/form-data">
            <input type="file" name="avatar"/>
            <input type="submit" name="uploadclick" value="Upload"/>
        </form>
        <?php
            // Xử Lý Upload
            echo "<pre>";   
            var_dump($_FILES);
        ?>
    </body>
</html>