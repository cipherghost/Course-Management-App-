<?php
include 'connection.php';
//if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//$target_dir = "uploads/";

$source_file = $_FILES['fileupload']['tmp_name'];
$temp = explode(".", $_FILES["fileupload"]["name"]);
$filename =$_POST["dname"];
$newfilename = $filename . '.' . end($temp);
$target_file = "upload/" .$newfilename ;

if(file_exists($target_file)) {
	echo "THE FILE NAME ALREADY EXISTS!!";
}

elseif($_FILES["fileupload"]["size"] > 2097152){
        echo "Sorry , your file is too large.";
       
}

else{
	move_uploaded_file( $source_file,$target_file) 
		or die("ERROR!! YOUR FILE IS NOT UPLOADED");
	if($_FILES['fileupload']['error']==0){
		print "success!!";
                 $date = date("Y-m-d");
		$course = htmlspecialchars($_POST["course"]);

		if($course == "course1"){

			$sql = "INSERT INTO course1 (dname , date , nod) values('" . $filename . "', '" . $date ."', 0)";
                        
			 if($conn ->query($sql)==true) {
				 echo "NEW RECORD CREATED SUCCESSFULLY";
				 header('LOCATION:course1.php');
			 }

			 else
                            {
                        echo "Error:" . $sql . "<br>" . $conn->error;
                        }

		}

		 elseif($course == "course2")
             {

                  $sql = "INSERT INTO course2 (dname , date , nod) values('" . $filename . "', '" . $date ."', 0)";
                if($conn ->query($sql)==true) {
			echo "NEW RECORD CREATED SUCCESSFULLY";
			 header('LOCATION: course2.php');

                  } else
                   {
                        echo "Error:" . $sql . "<br>" . $conn->error;
                   }
            }

           elseif($course == "course3")
           {

              $sql = "INSERT INTO course3 (dname , date , nod) values('" . $filename . "', '" . $date ."', 0)";
                if($conn ->query($sql)==true) {
			echo "NEW RECORD CREATED SUCCESSFULLY";
			 header('LOCATION:course3.php');

                } else
                   {
                        echo "Error:" . $sql . "<br>" . $conn->error;
                   }
           }


           elseif($course == "course4")
           {

             $sql = "INSERT INTO course4 (dname , date , nod) values('" . $filename . "', '" . $date ."', 0)";
                if($conn ->query($sql)==true) {
			echo "NEW RECORD CREATED SUCCESSFULLY";
			 header('LOCATION: course4.php');

                } else
                   {
                        echo "Error:" . $sql . "<br>" . $conn->error;
                   }
           }


		


	}


}
?>

