<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>

<body>
    <div style="width: 50%; margin: 30px auto;">
        <form method="POST" action="id.php" enctype="multipart/form-data">
            <div style="margin-bottom: 20px;">
                <label for="name">Name: </label>
                <input type="text" name="name">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="email">Email: </label>
                <input type="email" name="email">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="phone">Phone: </label>
                <input type="number" name="phone">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="batchNo">Batch Number: </label>
                <input type="number" name="batchNo">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="photo">Choose File: </label>
                <input type="file" name="photo">
            </div>
            <button type="submit" name="submit_btn" style="margin-top: 20px;">Submit</button>
        </form>
    </div>
</body>

</html>