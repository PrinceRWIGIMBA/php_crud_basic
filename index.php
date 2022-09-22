<?php
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

    <title>create employee</title>
  </head>
  <body>
    
  <div class="container mt-5">
      <?php include 'message.php';?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>employee details
                        <a href="create.php" class="btn btn-primary float-end">add imployee</a>
                        </h4>
                    </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                     <thead>
                         <tr>
                             <th>ID</th>
                             <th>NAME</th>
                             <th>EMAIL</th>
                             <th>PHONE</th>
                             <th>LOCATION</th>
                             <th>OPERATION</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                         $query="SELECT *FROM employeee";
                         $query_run=mysqli_query($con,$query);
                         if(mysqli_num_rows($query_run)>0){
                             foreach($query_run as $employee){
                                 ?>
                                 <tr>
                             <td><?=$employee['id'];?></td>
                             <td><?=$employee['name'];?></td>
                             <td><?=$employee['email'];?></td>
                             <td><?=$employee['phone'];?></td>
                             <td><?=$employee['location'];?></td>
                             <td>
                                 <a href="view.php?id=<?=$employee['id'];?>" class="btn btn-info btn-sm">view</a>
                                 <a href="edit.php?id=<?=$employee['id'];?>" class="btn btn-success btn-sm">edit</a>
                                 <form action="script.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete" value="<?=$employee['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                             </td>
                         </tr>
                                 <?php
                             }

                         }else{
                             echo "no record found";
                         }
                         ?>
                         
                     </tbody>
                    </table>
                   
                </div>
                </div>
            </div>
        </div>

    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 
  </body>
</html>