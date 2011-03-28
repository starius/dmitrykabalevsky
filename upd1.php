<?include 'config.php';
          $nameavt=$_POST['nameavt'];
		  $age=$_POST['age'];
		  $phone=$_POST['phone'];
		  $email=$_POST['email'];
		  $address=$_POST['address'];
		  $nomination=$_POST['nomination'];
		  $old=$_POST['old'];
		  $name1=$_POST['name1'];
		  $phone1=$_POST['phone1'];
		  $address1=$_POST['address1'];
		  $phone2=$_POST['phone2'];
		  $phone3=$_POST['phone3'];
		  $email1=$_POST['email1'];
		  $name2=$_POST['name2'];
		  $pr=$_POST['pr'];
		  $id=$_POST['id'];
		  //echo ($id);
		  //echo("id $id");
		  mysql_query ("UPDATE application SET nameavt='$nameavt', age='$age', phone='$phone', email='$email', address='$address', nomination='$nomination', old='$old', name1='$name1', phone1='$phone1', address1='$address1', phone2='$phone2', phone3='$phone3', email1='$email1', name2='$name2', pr='$pr' WHERE id='$id'");
header ("Location: conclusion.php");
		
?>
