<?php
if (isset($_POST['username'])&&isset($_POST['password'])) {
	$username = $_POST['username'];
    $password = $_POST['password'];
    $password_hash = md5($_POST['password']);
    
    if (!empty($username)&&!empty($password)) { 
        $query = "SELECT `id` FROM `users`  WHERE `username`='$username' AND `password`= '$password_hash'";
        $query_run =  mysqli_query($link,$query);
        if ($query_run) {
            $query_rows = mysqli_num_rows($query_run);
            if ($query_rows==0) {
                echo "invalid Username or Password";
	
}else if ($query_rows==1) {
  $user_id_d = mysqli_fetch_assoc($query_run);
  $user_id_d['id'];
  $user_id = $user_id_d['id'];
  $_SESSION['user_id'] = $user_id;
  header('Location: index.php');

  

    
}
	
}
        
}else {
    echo 'You must supplu a username and password.';
}
}

?>
<form action="<?php echo $current_file?>" method="POST">
Username:<input type="text" name="username" />
Password: <input type="password" name="password" />
<input type="submit" value="Log in" />
</form>