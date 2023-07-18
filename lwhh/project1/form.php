<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1 Form </title>
</head>

<body>
    <div style="width: 50%; margin: 30px auto;">
        <form method="POST">
            <div style="margin-bottom: 20px;">
                <label for="name">Name: </label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="email">Email: </label>
                <input type="email" name="email">
            </div>
            <button type="submit" style="margin-top: 20px;">Submit</button>
        </form>
    </div>

    <?php if (isset($_POST['name'])) { ?>
        <h4>Customers Name: <?php echo htmlspecialchars($_POST['name']); ?></h4>
    <?php } ?>

    <?php if (isset($_POST['email'])) { ?>
        <h4>Customers Email: <?php echo htmlspecialchars($_POST['email']); ?></h4>
    <?php } ?>

    
</body>

</html>