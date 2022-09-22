<?php
session_start();
require 'db.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>update employee</title>
  </head>
  <body>
    
  <div class="container mt-5">
      <?php include 'message.php';?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>employee update
                        <a href="index.php" class="btn btn-danger float-end">back</a>
                        </h4>
                    </div>
                <div class="card-body">
                   <?php
                        if(isset($_GET['id']))
                        {
                            $employee_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM employeee WHERE id='$employee_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $employee=mysqli_fetch_array($query_run);
                                ?>
                              <form action="script.php" method="POST">
                              <input type="hidden" name="employee_id" value="<?= $employee['id']; ?>">
                      <div class="mb-3">
                      <label>employee name</label>
                        <input type="text" name="name" value="<?= $employee['name']; ?>"class="form-control">
                      </div>
                      <div class="mb-3">
                      <label>employee email</label>
                        <input type="text" name="email" value="<?= $employee['email']; ?>" class="form-control">
                      </div>
                      <div class="mb-3">
                      <label>employee phone</label>
                        <input type="text" name="phone" value="<?= $employee['phone']; ?>"class="form-control">
                      </div>
                      <div class="mb-3">
                      <label>employee location</label>
                        <input type="text" name="location" value="<?= $employee['location']; ?>" class="form-control">
                      </div>
                      <div class="mb-3">
                       <button type="submit" class="btn btn-primary" name="update">update employee</button>
                      </div>

                    </form>
                            <?php


                        }else{
                          echo "<h4>No Such Id Found</h4>";
                        }
                    }
                    ?>
                  
                </div>
                </div>
            </div>
        </div>

    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 
  </body>
</html>