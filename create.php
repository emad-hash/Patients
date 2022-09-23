<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Patients Create</title>
</head>
<body>
  
    <div class="container mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Patients Add 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="php.php" method="POST">

                            <div class="mb-3">
                                <label>Patient Name</label>
                                <input type="text" name="Name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Patient Age</label>
                                <input type="number" name="Age" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Patient Phone</label>
                                <input type="number" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="Address" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_Patients" class="btn btn-primary">Save Patient</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
