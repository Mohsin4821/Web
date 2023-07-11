<!-- Program Statement:
  Write a PHP script to display today’s date in dd-mm-yyyy format. 
-->



<?php
$date = date('d-m-Y');
echo "Today's date is: " . $date;
?>


<!-- <!DOCTYPE html>
<html>

<head>
  <title>Date Display</title>
  <style>
    h1 {
      text-align: center;
    }

    date {
      color: blue;
    }
  </style>
</head>

<body>
  <?php
  $date = getdate();
  echo "<h1>Today's Date is <date>$date[mday]/$date[mon]/$date[year]</date></h1>";
  ?>
</body>

</html> -->

