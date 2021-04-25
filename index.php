<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet"  href="style.css">
    <title>TO DO LIST</title>
</head>
<body>
    <div class="container">
    <form action="add.php" method="post">
    <input type="text" name="taskname" id="taskname" class="form-control">
    <!-- <button class="btn btn-primary" type="submit">send</button> -->
    <button class="btn btn-dark" type="submit">send</button>
    </form>
    <?php include 'post-list.php' ?>
    </div>


</body>
</html>
