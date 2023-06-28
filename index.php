<?php 
$title = 'Rekentabel';
$description = 'De tafels rond de tafel van 10:';
$count = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body style="padding: 0 2rem">
    <h1 style="text-decoration: underline"><?php echo $description ?></h1>
    <table>
        <?php 
            $number = 1;
            while ($number <= 10) {
                echo "<tr><td style='padding-inline-end: 2rem'> $number x 8 = " .  $number * 8 . '</td>';
                echo "<td style='padding-inline-end: 2rem'> $number x 9 = " .  $number * 9 . '</td>' ;
                echo "<td style='padding-inline-end: 2rem'> $number x 10 = " .  $number * 10 . '</td>';
                echo "<td style='padding-inline-end: 2rem'> $number x 11 = " . $number * 11 . '</td>';
                echo "<td style='padding-inline-end: 2rem'> $number x 12 = " . $number * 12 . "</td></tr>";

                ++$number;
            }
        ?>
    </table>
</body>
</html>