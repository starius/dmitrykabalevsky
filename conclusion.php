<?
include 'config.php';
$i=0;
echo("<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" /></head><body><table border='1'><tr bgcolor='#FFE1FF'><td>ФИО</td><td>Дата рождения</td><td>Телефон</td><td>E-mail</td><td>Адрес</td><td>Номинация</td><td>Возрастная группа</td><td>Ф.И.О. преподавателя</td><td>Телефон</td><td>Программа выступления</td><td>Адрес учебного заведения</td><td>Телефон</td><td>Тел/факс</td><td>E-mail</td><td>Руководитель учебного заведения</td><td>Фото</td></tr>");
$sql5 = "SELECT * FROM application";
        $resp5 = mysql_query($sql5);
		while($row5 = mysql_fetch_assoc($resp5))  
          {
		  $i++;
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
		  if($i%2==0){$c="#FFE1FF";}
		  else {$c="#EED2EE";}
		  echo("<tr bgcolor='$c'><td>$nameavt</td><td>$age</td><td>$phone</td><td>$email</td><td>$address</td><td>$nomination</td><td>$old</td><td>$name1</td><td>$phone1</td><td>$pr</td><td>$address1</td><td>$phone2</td><td>$phone3</td><td>$email1</td><td>$name2</td><td>");
		    if (!empty($foto)){
		      echo ("<img src='images1/$foto' width='200'></td><td>");}
		    else{
			  echo("</td><td>");}
		  }
$i=0;
echo("</table><p></p>");
echo("<table border='1'><tr bgcolor='#EEE0E5'><td>Название коллектива</td><td>Номинация</td><td>Ф.И.О. руководителя</td><td>Ф.И.О. концертмейстера</td><td>Телефон</td><td>Программа выступления</td><td>Адрес учебного заведения</td><td>Телефон</td><td>Тел/факс</td><td>E-mail</td><td>Руководитель учебного заведения</td><td>Фото</td></tr>");
$sql5 = "SELECT * FROM applicationgroup";
        $resp5 = mysql_query($sql5);
		while($row5 = mysql_fetch_assoc($resp5))  
          {
		  $i++;
		  $nameavt=$row5['nameavt'];
		  $nomination=$row5['nomination'];
		  $name1=$row5['name1'];
		  $name2=$row5['name2'];
		  $phone1=$row5['phone1'];
		  $sum1=$row5['sum1'];
		  $address1=$row5['address1'];
		  $phone2=$row5['phone2'];
		  $phone3=$row5['phone3'];
		  $email1=$row5['email1'];
		  $name3=$row5['name3'];
		  $foto=$row5['foto'];
		  if($i%2==0){$c="#EEE0E5";}
		  else {$c="#FFE4E1";}
         echo("<tr bgcolor='$c'><td>$nameavt</td><td>$nomination</td><td>$name1</td><td>$name2</td><td>$phone1</td><td>$sum1</td><td>$address1</td><td>$phone2</td><td>$phone3</td><td>$email1</td><td>$name3</td><td>");
		    if (!empty($foto)){
		      echo ("<img src='images1/$foto' width='200'></td></tr>");}
		    else{
			  echo("</td></tr>");}		  
		  }
echo("</table><p></p><p><a href='all.php'>Список</a></p></body></html>");

?>