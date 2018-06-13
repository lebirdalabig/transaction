<?php
	$conn = mysqli_connect("localhost", "root", "", "db2test");

	if($conn->connect_error)
	{
		echo("Connection failed: " . $conn->connect_error);
	}

	// $txt = file_get_contents(($_GET['file']));
	$put = "";
	$sql = "";
	mysqli_query($conn, "BEGIN");

	if(isset($_POST["upload"]))
	{
		// if(!empty($_POST["upload"]))
		// {
			$filename=$_FILES["file"]["tmp_name"];

				if($_FILES["file"]["size"] > 0)
				{
					$file = fopen($filename, "r");

					while(($getData = fgetcsv($file, 10000, ",")) !== FALSE&&$sql !== 0)
					{
						if(!empty($getData[0])&&!empty($getData[1])&&!empty($getData[2])&&!empty($getData[3])&&!empty($getData[4]))
						{
							$sql = mysqli_query($conn, "INSERT into accounts (id,fname,lname,age,sex) VALUES ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."')");
						}else{
							$sql = 0;
							break;
						}
					}
					if($sql!=0)
					{
						mysqli_query($conn, "COMMIT");
							echo "SUCCESS!!!";
					}else{
						mysqli_query($conn, "ROLLBACK");
						echo "FAILED!!!";
					}
					
					fclose($file);
				}
		// }else{
		// 	echo "File is empty!!!";
		// }
	}
?>
