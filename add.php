<!doctype html>
<html lang="en">

<head>
  <title>Work Shifts Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/x-icon" href="images/logo@256x.png">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
    <?php
      include_once 'includes/header.php';
    ?>
  </header>
  <main>
  <?php

      ini_set('display_errors', 1);
      error_reporting(E_ALL);

      include_once ('database.php');

      $name = $_POST['name'];
      $employeeId = $_POST['employee-id'];
      $branch = $_POST['branch'];
      $date = $_POST['date'];
      $timeIn = new DateTime($_POST['time-in']);
      $timeOut = new DateTime($_POST['time-out']);
      $duration = $timeIn->diff($timeOut);
      $duration = $duration->format('%H:%I:%S');
      $timeIn = $_POST['time-in'];
      $timeOut = $_POST['time-out'];

      // Assuming $database is your database connection object (e.g., PDO or MySQLi)
      $result = $database->execute("INSERT INTO timesheet (employee_name, employee_id, branch, shift_date, time_in, time_out, duration) VALUES ('$name', '$employeeId', '$branch', '$date', '$timeIn', '$timeOut', '$duration')");

      if ($result) {
          echo "<p>Data added successfully.</p>";
          echo "<a href='timesheet.php'>View timesheet</a>";
      } else {
          echo "Error inserting data into the database.";
      }
    ?>
  </main>
  <footer>
    <?php
      include_once 'includes/footer.php';
    ?>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>