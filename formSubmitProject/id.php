<?php

if(isset($_POST['submit_btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $batchNo = $_POST['batchNo'];
}

if(isset($_FILES['photo'])){
    $photo = $_FILES['photo'];
    $pName = $photo['name'];

    var_dump($photo);  

    move_uploaded_file($photo['tmp_name'], 'uploads/' . $pName);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Page</title>
</head>
<body>
    <h2><?php if(isset($name)) {echo "Name: " . htmlspecialchars($name);} ?></h2>
    <h2><?php if(isset($email)) {echo "Email: " . htmlspecialchars($email);} ?></h2>
    <h2><?php if(isset($phone)) {echo "Phone Number: " . htmlspecialchars($phone);} ?></h2>
    <h2><?php if(isset($batchNo)) {echo "Batch Number: " . htmlspecialchars($batchNo);} ?></h2>
    <img src="uploads/<?php if(isset($pName)) {echo $pName;} ?>" alt="<?php if(isset($pName)) {echo $pName;} ?>" width="500px">
</body>
</html>