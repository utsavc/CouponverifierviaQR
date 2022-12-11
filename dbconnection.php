<?php
date_default_timezone_set('Asia/Kathmandu');

session_start();
//defining Constants for database in Local Server
define("HOST","localhost");
define("DBUSER","root");
define("DBPASS","");
define("DB","hackathon");

$link = mysqli_connect(HOST, DBUSER, DBPASS, DB) or die("Incorrect Login with database");

function userLogin($username,$password){
	global $link;
	$sql="SELECT * from login where username='$username' and password='$password' ";
	$res = mysqli_query($link, $sql);
	$numrows = mysqli_num_rows($res);
	if($numrows > 0){
		return true;
	}else{
		return false;
	}
}


function userInsert($fname,$team,$designation){
	$sql="INSERT into participant set name='$fname', team='$team', designation='$designation'";
	global $link;
	$res = mysqli_query($link, $sql);
	if ($res) {
		return true;
	}else{
		return false;
	}
}


function showParticipants(){
	$sql="SELECT * from participant where designation='Participant' ORDER BY team asc";
	global $link;		
	$result=mysqli_query($link,$sql);
	if (mysqli_num_rows($result) > 0) {
		$count=1;
		while($row = mysqli_fetch_assoc($result)){?>
			<tr>
				<th scope="row"><?php echo $count++; ?></th>
				<td><?php echo $row['name'] ?></td>
				<td><?php echo $row['team'] ?></td>
				<td><a href="qrcode.php?id=<?php echo $row['id'] ?>">View QR</td>
				</tr>

			<?php }
		}
	}



	function showUser($user){
		$sql="SELECT * from participant where designation='$user'";
		global $link;		
		$result=mysqli_query($link,$sql);
		if (mysqli_num_rows($result) > 0) {
			$count=1;
			while($row = mysqli_fetch_assoc($result)){?>
				<tr>
					<th scope="row"><?php echo $count++; ?></th>
					<td><?php echo $row['name'] ?></td>
					<td><a href="qrcode.php?id=<?php echo $row['id'] ?>">View QR</td>
					</tr>

				<?php }
			}
		}


		function getStatus($sql,$food,$id){

			global $link;		
			$result=mysqli_query($link,$sql);
			if (mysqli_num_rows($result) > 0) {?>
				<a href="#" class="disabled bg-danger btn btn-sm text-white">Expired</a>
				<?php
			}else{ ?>

				<a href="update_status.php?food=<?php echo $food ?>&id=<?php echo $id ?>" class="bg-success btn btn-sm text-white">Use Now</a>
				<?php
			}
		}





		function msg($msg, $type){
			?>
			<div class="alert alert-<?php echo $type; ?> alert-dismissable fade show">
				<span><?php echo $msg; ?>		
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			<?php 
		}


		function Counter($designation){
			$sql="SELECT count(id) as registered from participant where designation='$designation'";

			global $link;		
			$result=mysqli_query($link,$sql);
			if (mysqli_num_rows($result) > 0) {
				$row=mysqli_fetch_array($result);
				return $row[0];
			}else{
				return 0;
			}


		}


		function updateStaus($sql,$id){
			global $link;
			if (mysqli_query($link, $sql)) {
				header('location:home.php?id='.$id);
			} else {
				header('location:home.php?id='.$id);
			}
		}




	function getDetails($id){
		$sql="SELECT * from participant where id=".$id;
		global $link;		
		$result=mysqli_query($link,$sql);
		if (mysqli_num_rows($result) > 0) {
			$count=1;
			while($row = mysqli_fetch_assoc($result)){?>
					<h4>Name: <?php echo $row['name'] ?></h4>
					<span>Designation: <?php echo $row['designation'] ?></span>

				<?php }
			}
		}







		?>
