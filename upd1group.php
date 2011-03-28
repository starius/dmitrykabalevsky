<?include 'config.php';
          $nameavt=$_POST['nameavt'];
		  $nomination=$_POST['nomination'];
		  $name1=$_POST['name1'];
		  $name2=$_POST['name2'];
		  $phone1=$_POST['phone1'];
		  $sum1=$_POST['sum1'];
		  $address1=$_POST['address1'];
		  $phone2=$_POST['phone2'];
		  $phone3=$_POST['phone3'];
		  $email1=$_POST['email1'];
		  $name3=$_POST['name3'];
		  $id=$_POST['id'];
		  mysql_query ("UPDATE applicationgroup SET nameavt='$nameavt', nomination='$nomination', name1='$name1', name2='$name2', phone1='$phone1', sum1='$sum1', address1='$address1', phone2='$phone2', phone3='$phone3', email1='$email1', name3='$name3' WHERE id='$id'");
		   header ("Location: conclusion.php");

		
?>