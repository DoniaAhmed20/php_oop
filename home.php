<?php
require_once './controller/users.php';
$db = new dbFunction();
$items = $db->get_all_record_paginated();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.8/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#"> &nbsp;Article System</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="text-center text-danger font-weight-normal my-3">CRUD Application</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h4 class="text-primary mt-2">All users in the Database</h4>
        </div>
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary m-1 py-2 float-right" data-toggle="modal" data-target="#addModal">Add new user</button>
        </div>
    </div>
    <hr class="my-1">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive" id='showUser'>
                <table class="table table-striped table-sm table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- <tr class="text-center text-secondary">
                        <td>1</td>
                        <td>Donia</td>
                        <td>donia@gmail.com</td>
                        <td>01200161863</td>
                        <td>
                            <a href="#" title="View Details" class="text-sucess">
                                <i class="fas fa-info-circle fa-lg"></i>
                            </a>
                        </td>
                    </tr> -->
                    <?php



$dbs = new dbFunction();
$users = $dbs->get_all_record_paginated(array(), 0);

$user_names = array();

foreach($users as $user) {
  $user_names[$user["id"]] = $user["name"];
}
      foreach ($items as $item) {
        echo '<tr><td>' . $item["id"] . '</td>
   <td>' . $item["name"] . '</td>
   <td>' . $item["email"] . '</td>
   <td>' . $item["password"] . '</td>
   
     <td><button class="btn " style="background-color:#D3B2B7"><a class="text-decoration-none text-black"href="user_update.php?updateId=' . $item["id"] . '" ><i class="fa fa-edit "></i></a></button>
     <button class="btn btn-danger"><a class="text-decoration-none text-black"  class="text-decoration-non text-black" href="user_delete.php?deleteId=' . $item["id"] . '" ><i class="fas fa-trash-alt"></i></a></button>
    </td></tr>';
    }
      ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add New User Modal -->
<div class="modal fade" id="addModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add New User</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body px-4">
          <form action="" method="post">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Enter your name" required></input>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required></input>
            </div>
            <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="Enter your phone" required></input>
            </div>
            <div class="form-group">
                <input type="submit" name="insert" id="insert" value="Add User" class="btn btn-danger btn-block"></input>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
  
  
<!-- datatables -->
<script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


<!-- fontawesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include DataTables CSS and JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

<!-- sweetalert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("table").DataTable();
    })
</script>

</body>
</html>