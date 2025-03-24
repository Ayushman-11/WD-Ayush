<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Form Tag</title>
</head>
<body>
    <div class="seventh-div" style="width: 70%;">
        <form action="submit.php" method="post">
            <h3 style="color: #007bff; text-transform: uppercase;">Employee Registration Form</h3>
            <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" name="name">
            </div>

            <div class="form-group">
                <label for="emp-id">ID :</label>
                <input type="number" name="emp-id">
            </div>

            <div class="form-group">
                <label for="email">E-Mail :</label>
                <input type="email" name="email">
            </div>

            <div class="form-group">
                <label for="department">Dept :</label>
                <input type="text" name="department">
            </div>

            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <div class="output" style="width: 70%;">
        <h3>Entered Employee Details:</h3>
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>ID:</strong> <?php echo $emp_id; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Department:</strong> <?php echo $department; ?></p>
    </div>

</body>
</html>