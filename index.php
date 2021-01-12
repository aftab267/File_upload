<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
    <div class="container">
    <form class="" action="" method="post" enctype="multipart/form-data">
   <input type="file" name="myfile" value="">
   <button type="submit" name="submit">Upload</button>
    </form>
    <?php
    if(isset($_POST['submit'])){
     $filename=$_FILES['myfile']['name'];
     $filetype=$_FILES['myfile']['type'];
     $filetmpn=$_FILES['myfile']['tmp_name'];
     $fileerro=$_FILES['myfile']['error'];
     $filesize=$_FILES['myfile']['size'];
     move_uploaded_file($filetmpn,'upload/'.$filename);
    }

    ?>
    </div>

    </div>
</body>
</html>
