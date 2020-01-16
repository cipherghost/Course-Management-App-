<?php
include 'connection.php';
header("Content-Type: application/json; charset=UTF-8");

$data = array();



$sql = 'SELECT dname,nod FROM course1';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		//$data += array($row['dname']  => $row['nod']);
		array_push($data, [
                'name'   => $row['dname'],
                'nod' => $row['nod']
                ]);
		
	}
}

$sql = 'SELECT dname,nod FROM course2';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
		// $data += array($row['nod'] => $row['dname']);
		 array_push($data, [
                'name'   => $row['dname'],
                'nod' => $row['nod']
                ]);

                
        }
}

$sql = 'SELECT dname,nod FROM course3';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
		 // $data += array( $row['nod']  => $row['dname']);
		  array_push($data, [
                'name'   => $row['dname'],
                'nod' => $row['nod']
                ]);

                
        }
}

$sql = 'SELECT dname,nod FROM course4';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
		  //   $data += array($row['nod']  => $row['dname']);
		   array_push($data, [
                'name'   => $row['dname'],
                'nod' => $row['nod']
                ]);

        }
} 

echo json_encode($data);

?>
