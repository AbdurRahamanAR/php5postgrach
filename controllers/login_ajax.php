<?php
	$message_ok=false;
	$message_error='The system is not available';
	if(isset($_POST['username'],$_POST['password'])):
		if($_POST['username']!=""):
			if($_POST['password']!=""):
				$username=$_POST['username'];
				$password=md5($_POST['password']);
				$res=pg_query($conn,("Select * from user_tbl where username='$username' and password='$password'"));
				if(pg_num_rows($res)>0):
					$message_ok=true;
					$user_list=pg_fetch_array($res);
					$_SESSION['id']=$user_list[0];
					$_SESSION['username']=$user_list[1];
					$message_error='logged now';
				else:
					$message_error='Login falied,please check your login account again';
				endif;
			else:
				$message_error='Wrong password.';
			endif;
		else:
			$message_error='username not existed.';
		endif;
	else:
		$message_error='All fields are required.';
	endif;
	$json=array('data' => $message_ok, 'message' =>$message_error);
	echo json_encode($json);
?>
