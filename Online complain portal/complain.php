<?php 
require_once('session.php');
include "header.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Title Page-->
    <title>Apply for job by Colorlib</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main2.css" rel="stylesheet" media="all">
	<script type="text/javascript">
	function validate(){
		var title=document.frm1.c_title.value;
		var msg=document.frm1.c_message.value;
	if(document.frm1.c_title.value==''){
		alert("Enter title");
		return false;
	}
	if(title.length <=6){
		alert("title must more han 6 char");
		return false;
	}
	if(msg.length<=5){
		alert("please write complain ");
		return false;
	}
	}
	</script>
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">complain box</h2>
                </div>
                <div class="card-body">
                    <form name="frm1" method="POST" action="<?php ($_SERVER["PHP_SELF"]);?>" onsubmit="return validate();"enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="name"> ENROLLMENT NO</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="enroll" placeholder="Enter University Enrollment No">
                            </div>
                        </div>
						 <div class="form-row">
                            <div class="name">complain title</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="c_title" placeholder="subject of complain">
                                </div>
                            </div>
                        </div>
                        <!--<div class="form-row">
                            <div class="name">Email address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email" placeholder="example@email.com">
                                </div>
                            </div>
                        </div>-->
                        <div class="form-row">
                            <div class="name">Complain Message</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="c_message" placeholder="complain sent to the university"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload document--</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload Document or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
						<div class="card-footer">
                    <input class="btn btn--radius-2 btn--blue-2" type="submit" name="submit"value="Send Complain"><br>
					<br><input class="btn btn--radius-2 btn--blue-2" type="reset" value="Cancel">
                </div>
                    </form> 
                </div>
                
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->

<?php
//require_once('comp_count.php');
require_once('connection.php');
require_once('comp_count.php');
// Include the database configuration file

if(isset($_POST["submit"])){
// File upload path
//$targetDir = "uploads/";
//$fileName = basename($_FILES["file_cv"]["name"]);
//$targetFilePath = $targetDir . $fileName;
$enrollment=$_POST["enroll"];
$title=$_POST["c_title"];
$complain=$_POST["c_message"]; 
$statusMsg = '';
$u_id=$_SESSION['id'];

$file=$_FILES["file_cv"];
			$filename=$file["name"];
			//echo $filename;
			$fileerr=$file["error"];
			$filetmp=$file["tmp_name"];
			$destination='uploads/'.$filename;
			move_uploaded_file($filetmp,$destination);
			if($comp_count=="false"){
					$statusMsg="you can not sent two complain on single day";
				
			}
			else{
            $query="INSERT into complain (s_id,c_enroll,c_title,c_message,c_file,c_date) VALUES('$u_id','$enrollment','$title','$complain','$destination', NOW())";
			$res=mysqli_query($con,$query);
            if($res){
                $statusMsg = "The Complain ".$title. " has been uploaded successfully.";
            }
			else
			{
				$statusMsg="Your Complain has not sent ";
			}
			
			}
			echo "<div style='text-align:center;color:red;'>$statusMsg</div>";
}
			//}
//}

// Display status message

 ?>
 <?php 
 include 'footer.php';
 ?>