
<?php
require 'db_connect.php';
require 'function.php';
$db_datas= select_all('offers');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Assignment First</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <h2>Action for test or check the result</h2>
    <a href="city.php" class="btn btn-primary">Insert Dummy Cities</a>
    <?php if(!empty($db_datas)):  ?>
    <a href="update_city.php" class="btn btn-primary">Update cities</a>
    <?php endif; ?>
    <a target="_blank" href="api.php" class="btn btn-secondary">Check Api</a>
</div>

</body>
</html>
