<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- w3 css -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="endgem.css">
    <link href="https://fonts.googleapis.com/css?family=Aclonica|Acme|Cinzel|Josefin+Sans&display=swap" rel="stylesheet">
   

    <title>EndGem - Course Management App</title>
  </head>
  <body style="background-image:url('images/books3.jpg');">

    <div class="home">
     <!--  Navbar starts here -->

    <div class="container">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
      <!-- Brand name -->
  <a class="navbar-brand" href="#" title="Course Management App"><img src="images/eg-bug.png" width="30" height="30" class="d-inline-block align-top" alt=""> EndGem</a>

     <!-- contents -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item" >
        <a class="nav-link " href="course1.php" >Course 1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item " >
        <a class="nav-link"  href="course2.php" >Course 2 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item " >
        <a class="nav-link"  href="course3.php" >Course 3 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active" >
        <a class="nav-link"  href="#" >Course 4 <span class="sr-only">(current)</span></a>
      </li>
    </ul>
</div>

<!-- Menu toggle to Dropdown -->
<div class="dropdown dp1">
  <button class="btn btn-secondary dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="op1">
                                                                                                                                                                                        

 COURSE 4
  </button>
  <div class="dropdown-menu dropdown-menu-center" aria-labelledby="dropdownMenu2">
    <a class="dropdown-item" type="button" href="course1.php" >COURSE 1</a>
    <a class="dropdown-item" type="button" href="course2.php" >COURSE 2</a>
    <a class="dropdown-item" type="button" href="course3.php" >COURSE 3</a>
  </div>
</div>
<!-- Dropdown ends here -->

    <!-- Right side icons 1. adding file 2.display leader board -->
  <form class="form-inline my-2 my-lg-0">

  <!-- Add file icon -->
  <a  data-toggle="modal" data-target="#eModal" id="addition" title="Add file">
   <img src="images/plus.png" width="30" height="30" >
  </a>

  <!-- Leaderboard icon -->
  <a onclick="openRightMenu()" title="leaderboard" id="hamburger">
    <img src="images/icons8-menu-40.png" width="30" height="30" class="mx-5">
  </a>
  <a onclick="closeRightMenu()" title="leaderboard" id="closing" style="display:none;">
    <img src="images/close2.png" width="30" height="30" class="mx-5">
  </a>
 </form>
 <!-- Right side ends  -->


</nav>
</div>
<!--Nav bar ends here-->


<!-- Modal -->
<div class="modal fade" id="eModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Wanna Add Some more material?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--Form starts here -->
        <form action="upload.php" method="post" enctype="multipart/form-data">
         <div class="form-group">
           <label for="exampleFormControlSelect1">Select Course</label>
           <select class="form-control" id="mySelect" name="course">
            <option value="course1">Course 1</option>
            <option value="course2">Course 2</option>
            <option value="course3">Course 3</option>
            <option value="course4">Course 4</option>
           </select>
         </div>

      <div class="form-group">
        <label for="displayname">Display Name</label>
        <input type="text" id="dispname" class="form-control" placeholder="Display name" name="dname" required>
      </div>

       <div class="form-group">
        <label for="exampleFormControlFile1" >Select File( Only Pdf files ) </label>
       <input type="hidden" name="MAX_FILE_SIZE" value="200000" /> <input type="file" id="myfile" name="fileupload" class="form-control-file" accept=".pdf" required>
      </div>

     <button type="submit" name="submit" class="btn btn-success">Upload</button>

    </form>
     <!-- Form ends here -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<!-- Modal ends here -->

<!-- leaderboard content starts here -->

<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;" id="rightMenu">

  <h4 id="lb"><img src="images/gem.png" width="30" height="30">Top Gems</h4>

  <table class="table" id="topgems">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Files</th>
      <th scope="col">Downloads</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>

</div>
<!-- leaderboard ends here -->

<!--Table starts here -->

 <!-- Course 4 Table  -->

<div id="home4" style="display:block;">

<?php
include 'connection.php';
$sql = 'SELECT * FROM course4';
$result = $conn->query($sql);



if ($result->num_rows > 0){
echo '
<table class="table table-hover table-dark" id="myTableId4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Contents</th>
      <th scope="col">Download</th>
      <th scope="col">No of Downloads</th>
    </tr>
  </thead>
  <tbody> ';
   while ($row = $result->fetch_assoc()) { echo'
    <tr>
      <th scope="row">' . $row['id']  . ' </th>
      <td><span ><div style="float:left;"><img src="images/file.png"  width="50" height="50"></div>' . $row['dname'] . '<div>' . $row['date'] . '</div></span></td> 
      <td> 
        <a href="upload/' . $row['dname'] . '.pdf" download onclick="Countfun(3,this)" > 
        <img src="images/downloadw.png" width="50" height="50"> 
        <a> 
         </td>

      <td> ' . $row['nod'] . ' </td>
    </tr>
       ';


  }
   echo '
   </tbody>
   </table> 
';
}
else echo' <div style="postion:relative; margin:auto;  margin-top:220px; max-width: 30rem;" class="card text-center border-success mb-3">
  <div class="card-body">
   To add Content to this course click add icon !!  
  </div>
</div>';
?>

</div>
 <!-- Course 4 Table Ends here  -->

<!--Table Ends here-->
</div>
     <script src="endgem.js" type="text/javascript"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  </body>
</html>
                                             
