<?
include 'config.php';
$id = $_GET["id"];
echo ("<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" /></head><body><form action='upd1.php' method='post' enctype='multipart/form-data' name='Form11'><table border='1'><tr><td>ФИО</td><td>Дата рождения</td><td>Телефон</td><td>E-mail</td><td>Адрес</td><td>Номинация</td><td>Возрастная группа</td><td>Ф.И.О. преподавателя</td><td>Телефон</td><td>Программа выступления</td><td>Адрес учебного заведения</td><td>Телефон</td><td>Тел/факс</td><td>E-mail</td><td>Руководитель учебного заведения</td></tr>");
$sql5 = "SELECT * FROM application WHERE id='$id'";
        $resp5 = mysql_query($sql5);
		while($row5 = mysql_fetch_assoc($resp5))  
          {
		  $nameavt=$row5['nameavt'];
		  $age=$row5['age'];
		  $phone=$row5['phone'];
		  $email=$row5['email'];
		  $address=$row5['address'];
		  $nomination=$row5['nomination'];
		  $old=$row5['old'];
		  $name1=$row5['name1'];
		  $phone1=$row5['phone1'];
		  $address1=$row5['address1'];
		  $phone2=$row5['phone2'];
		  $phone3=$row5['phone3'];
		  $email1=$row5['email1'];
		  $name2=$row5['name2'];
		  $pr=$row5['pr'];
		  $foto=$row5['foto'];
		  if(!empty($foto)){
		     echo ("<img src='images1/$foto' width='200'>");
		     }
			  echo("<tr><td><textarea  type='text' name='nameavt' cols='20' rows='1'/>$nameavt</textarea></td><td><textarea  type='text' name='age' cols='20' rows='1'/>$age</textarea></td><td><textarea  type='text' name='phone' cols='20' rows='1'/>$phone</textarea></td><td><textarea  type='text' name='email' cols='20' rows='1'/>$email</textarea></td><td><textarea  type='text' name='address' cols='20' rows='1'/>$address</textarea></td><td><textarea  type='text' name='nomination' cols='20' rows='1'/>$nomination</textarea></td><td><textarea  type='text' name='old' cols='20' rows='1'/>$old</textarea></td><td><textarea  type='text' name='name1' cols='20' rows='1'/>$name1</textarea></td><td><textarea  type='text' name='phone1' cols='20' rows='1'/>$phone1</textarea></td><td><textarea  name='pr' cols='20' rows='1' id='sum1'>$pr</textarea></td><td><textarea  type='text' name='address1' cols='20' rows='1'/>$address1</textarea></td><td><textarea  type='text' name='phone2' cols='20' rows='1'/>$phone2</textarea></td><td><textarea  type='text' name='phone3' cols='20' rows='1'/>$phone3</textarea></td><td><textarea  type='text' name='email1' cols='20' rows='1'/>$email1</textarea></td><td><textarea  type='text' name='name2' cols='20' rows='1'/>$name2</textarea></td></tr>");
		  }
echo ("<table>");
echo ("<input type='hidden' name='id' value='$id'> <input type='submit' value='Изменить' /></form></body></html>");
?>
<style>
textarea{border: 0px solid white;}
</style>