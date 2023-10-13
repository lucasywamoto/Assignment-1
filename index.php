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
    <div class="form-container">
        <form action="add.php" method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text"
                class="form-control" name="name" id="name" placeholder="Full Name" required>
            </div>
            <div class="input-container">
                <div class="mb-3">
                  <label for="employee-id" class="form-label">Employee ID</label>
                  <input type="text"
                    class="form-control" name="employee-id" id="employee-id" aria-describedby="helpId" placeholder="12345" pattern="\d{5}" required>
                  <small id="helpId" class="form-text text-muted">5-digit number</small>
                </div>
                <div class="mb-3">
                    <label for="branch" class="form-label">Branch</label>
                    <select class="form-select form-select-lg" name="branch" id="branch" required>
                        <option selected>Select one</option>
                        <option value="Toronto">Toronto</option>
                        <option value="Ottawa">Ottawa</option>
                        <option value="Montreal">Montreal</option>
                        <option value="Calgary">Calgary</option>
                        <option value="Vancouver">Vancouver</option>
                    </select>
                </div>
            </div>
            <div class="input-container">
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control"  id="date" name="date" required/>
                </div>
                <div class="mb-3">
                    <label for="time-in" class="form-label">Time in</label>
                    <input type="time" class="form-control" id="time-in" name="time-in" required />
                </div>
                <div class="mb-3">
                    <label for="time-out" class="form-label">Time out</label>
                    <input type="time" class="form-control" id="time-out" name="time-out" required />
                </div>
            </div>
            <div class="input-container form-buttons">
                <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </div>
        </form>
    </div>
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