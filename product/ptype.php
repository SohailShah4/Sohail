<?php
    include 'connection.php';

    if(isset($_POST['submit']))
    {
        $i = $_POST['id'];
        $n = $_POST['pname'];
        $cn = $_POST['cid'];

        $q = "insert into product_type (Pid,PName,cid) values('$i','$n','$cn')";
        $r = mysqli_query($con,$q);
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Index</title>
  </head>
  <body>

  <div class="container my-3">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="category.php">Category</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="ptype.php">Product Type</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="manufacture.php">Manufacture</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="product.php">Product</a>
                </li>
            </ul>

            </div>
        </div>
    </nav>
  </div>

  <div class="container my-3">
    <form method="post">
        <div class="mb-3">
            <label>Product Type ID : </label>
            <input type="text" class="form-control" name="id" autocomplete="off">
           
        </div>
        <div class="mb-3">
            <label>Product Type Name : </label>
            <input type="text" class="form-control" name="pname" autocomplete="off">
        </div>

        <div class="mb-3">
            <label>Category Name : </label>
            <input type="text" class="form-control" name="cid" autocomplete="off">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>

  <div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Product Type ID</th>
      <th scope="col">Product Type Name</th>
      <th scope="col">Category Name</th>
    </tr>
  </thead>
  <tbody>

  <?php
    $q = "select * from product_type";
    $r = mysqli_query($con,$q);

    while($row = mysqli_fetch_assoc($r))
    {
        echo '
        <tr>
        <td>'.$row['Pid'].'</td>
        <td>'.$row['Pname'].'</td>
        <td>'.$row['cid'].'</td>
      </tr>
        ';
    }
  ?>
    
  </tbody>
</table>
  </div>
  </body>
</html>