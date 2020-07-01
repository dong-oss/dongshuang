
<?php
header("Content-type:text/html;charset=UTF-8");
require './class.php';
        
           
$username=$_POST['name'];
$password=$_POST['password'];
$ck=new Login("localhost","root","qsE7ETrjvvLntHP4","db_user01","utf8",$username,$password);
if($ck->log()){
	 header("location:default.php");  
}

?>