<?php
   header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["q"],false);

    // name of the server
    $servername = "localhost";
    // username of the user
    $username = "test";
    
    // password of the mysql user
    $password = "test";
    
    // database that is being used
    $db = "endgem";
    
    // Establishing a connection between PHP and MySQL
    $conn = new mysqli($servername, $username, $password, $db);
    
    // Checking for a connection error
    if($conn->connect_error){
        die("Connection failed:" . $conn->connect_error);
    }
  // else echo("sucess!!");
    $course = (int) $obj->course;
    if($course == 0) {
    $count= (int) $obj->rn;

    $sq = "UPDATE course1 SET nod= nod+1 WHERE id= $count ";
    $res = $conn-> query($sq);
    $sql = "SELECT id, nod FROM course1";
   $result = $conn->query($sql);
    if ($result = $conn -> query($sql)) {
  while ($row = $result ->fetch_assoc()) {
	  if($row['id'] == (int) $obj->rn)
	  {
	     $count = (int) $row['nod'];
	  }
  }

    }
    echo($count);
    }


    elseif($course == 1){
	     $count= (int) $obj->rn;

    $sq = "UPDATE course2 SET nod= nod+1 WHERE id= $count ";
    $res = $conn-> query($sq);
    $sql = "SELECT id, nod FROM course2";
   $result = $conn->query($sql);
    if ($result = $conn -> query($sql)) {
  while ($row = $result ->fetch_assoc()) {
          if($row['id'] == (int) $obj->rn)
	  {
           		  
	     $count = (int) $row['nod'];
	  
          }
  }

    }
  
    echo($count);

    }


    elseif($course == 2){
	     $count= (int) $obj->rn;

    $sq = "UPDATE course3 SET nod= nod+1 WHERE id= $count ";
    $res = $conn-> query($sq);
    $sql = "SELECT id, nod FROM course3";
   $result = $conn->query($sql);
    if ($result = $conn -> query($sql)) {
  while ($row = $result ->fetch_assoc()) {
          if($row['id'] == (int) $obj->rn)
          {
             $count = (int) $row['nod'];
          }
  }

    }
    echo($count);

    }


    elseif($course == 3){
	     $count= (int) $obj->rn;

    $sq = "UPDATE course4 SET nod= nod+1 WHERE id= $count ";
    $res = $conn-> query($sq);
    $sql = "SELECT id, nod FROM course4";
   $result = $conn->query($sql);
    if ($result = $conn -> query($sql)) {
  while ($row = $result ->fetch_assoc()) {
          if($row['id'] == (int) $obj->rn)
          {
             $count = (int) $row['nod'];
          }
  }

    }
    echo($count);

    }

?>
