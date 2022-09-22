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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>create employee</title>
  </head>
  <body>
    
  <div class="container mt-5">
      <?php include 'message.php';?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>employee add
                        <a href="index.php" class="btn btn-danger float-end">back</a>
                        </h4>
                    </div>
                <div class="card-body">
                    <form action="script.php" method="POST">
                      <div class="mb-3">
                      <label>employee name</label>
                        <input type="text" name="name" class="form-control">
                      </div>
                      <div class="mb-3">
                      <label>employee email</label>
                        <input type="text" name="email" class="form-control">
                      </div>
                      <div class="mb-3">
                      <label>employee phone</label>
                        <input type="text" name="phone" class="form-control">
                      </div>
                      <div class="mb-3">
                      <label>employee location</label>
                        <input type="text" name="location" class="form-control">
                      </div>
                      <div class="mb-3">
                       <button type="submit" class="btn btn-primary" name="save_employee">save employee</button>
                      </div>

                    </form>
                </div>
                </div>
            </div>
        </div>

    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 
  </body>
</html>