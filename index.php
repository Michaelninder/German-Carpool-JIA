<?php
include 'http://134.255.225.220:1234/config.php';
echo $someConfigVariable;
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print ${page.title}"; ?></title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
    <link rel="stylesheet" href="assets/styles/<?php echo ${page.name}; ?>.css" />
    <link rel="stylesheet" href="assets/styles/<?php echo ${user.mode}; ?>/<?php echo ${page.name}; ?>.css" />
</head>
<body>

<?php
include 'assets/pages/map.php';
include 'assets/javascript/map.php';
?>

</body>
</html>
Page: <?php echo ${page.name}; ?>
Mode: <?php echo ${user.mode}; ?>
