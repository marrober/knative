<?php

$birthday = exec("stat -c='%Y' /proc/1/"); // container start time
$birthday = (int) substr($birthday, 1); // remove first character (=)
$birthday = date("Y-m-d H:i:s T", $birthday); // reformat date

$hostname = $_ENV['HOSTNAME'];

$colour = $_ENV['colour'];
$version = $_ENV['version'];

?>

<!DOCTYPE html>
<head>
<title>Blue-green deployment</title>
<style>
.message {
    color: <?php echo $colour; ?>;
}
</style>
</head>
<body>
<h1>Pod Details</h1>

<p>This pod is called <b><?php echo $hostname; ?></b>

<p>It was created at <b><?php echo $birthday; ?></b>

<p class="message"><?php echo "Version $version prints this message in $colour."; ?></p>

</body>
