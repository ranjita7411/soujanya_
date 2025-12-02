<!DOCTYPE html>
<html>
<head>
    <title>Form Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Submitted Information</h2>

    <p><strong>Name:</strong> <?php echo $_POST['fullname']; ?></p>
    <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
    <p><strong>Phone:</strong> <?php echo $_POST['phone']; ?></p>
    <p><strong>Course Selected:</strong> <?php echo $_POST['course']; ?></p>

</div>

</body>
</html>
