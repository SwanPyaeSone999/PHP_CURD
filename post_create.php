<?php 
    require_once 'config.php';

    //post create
      $msg = "";
		      if (isset($_POST['btn-create'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];

            if (empty($title) || empty($description)) {
                  $msg =  "Pleas Fill all!";
            }else {
              
            $sql = "INSERT INTO posts(title,description)
                     VALUES 
                     ('$title','$description')";

            $res= mysqli_query($con,$sql);
            if (!$res) {
              echo "Insert Fail".mysqli_error($con);
            }
            header("Location: index.php");
            }

          }


 ?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>bootstrap template</title>
	<link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="library/fontawesome/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	

		
          <div class="container mt-5" >
          <div class="card justify-content-center" >
              <div class="card-header">
                <div class="row">
                  <div class="col-md-6">
                    Post Creating Form
                  </div>
                  <div class="col-md-6">
                    <a href="index.php">
                      <button class="btn btn-dark btn-lg float-right" name="btn-create">Back</button>
                    </a>
                  </div>
                </div>
              </div>
          <form action="" method="post">
              <div class="card-body">
                <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" placeholder="Enter Title" id="title" name="title">
                </div>

                <div class="form-group">
                     <label for="description">Description</label>
                      <textarea class="form-control" name="description" placeholder="Enter Description"></textarea>
                </div>
              <h3 class="mt-3 text-danger"><?php echo $msg; ?></h3>
              </div>
              <div class="card-footer">
                <button class="btn btn-success" name="btn-create">Create</button>
              </div>
              
          </div>
        </div>
   
      </form>

	<script src="library/bootstrap/jquery-3.4.1.slim.min.js"></script>
	<script src="library/bootstrap/popper.min.js"></script>
	<script src="library/bootstrap/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>