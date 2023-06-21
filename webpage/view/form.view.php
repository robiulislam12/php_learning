<?php require "partials/header.php" ?>

<main>
    <h2>This is form Route</h2>
    <form style="width: 550px; margin: 30px auto;" method="post">
        <div style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 10px">
            <label for="fname">First Name: </label>
            <input type="text" name="fname" style="padding: 10px"/>
        </div>
        <div style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 10px">
            <label for="lname">Last Name: </label>
            <input type="text" name="lname" style="padding: 10px"/>
        </div>
        <button type="submit" style="background: #FF2020; border: 0; padding: 10px 20px; color: #fff; font-size: 18px">Submit Form</button>
    </form>


    <!-- User Data -->
    <?php if($_POST !== null) : ?>
        <ul>
        <p>
          First Name:   <?php echo getFormData()['fname']; ?>
        </p>
        <p>
            Last Name:   <?php echo getFormData()['lname']; ?>
        </p>
    </ul>
    <?php endif ?>
    
</main>

<?php require "partials/footer.php" ?>