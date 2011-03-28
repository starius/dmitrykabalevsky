<?//проверяем заполнены ли все поля
include 'config.php';
if(!empty($_POST['nameavt'])) {
$tempfile1=$_FILES['name']['name'];
//echo("test $tempfile1");
move_uploaded_file($_FILES['name']['tmp_name'],  './images1/'.$tempfile1);
$foto=$tempfile1;
//echo("<br>$foto");
$nameavt=stripslashes(trim(htmlspecialchars($_POST['nameavt'],ENT_QUOTES)));
$nomination=stripslashes(trim(htmlspecialchars($_POST['nomination'],ENT_QUOTES)));
$name1=stripslashes(trim(htmlspecialchars($_POST['name1'],ENT_QUOTES)));
$name2=stripslashes(trim(htmlspecialchars($_POST['name2'],ENT_QUOTES)));
$phone1=stripslashes(trim(htmlspecialchars($_POST['phone1'],ENT_QUOTES)));
$sum1=stripslashes(trim(htmlspecialchars($_POST['sum1'],ENT_QUOTES)));
$address1=stripslashes(trim(htmlspecialchars($_POST['address1'],ENT_QUOTES)));
$phone2=stripslashes(trim(htmlspecialchars($_POST['phone2'],ENT_QUOTES)));
$phone3=stripslashes(trim(htmlspecialchars($_POST['phone3'],ENT_QUOTES)));
$email1=stripslashes(trim(htmlspecialchars($_POST['email1'],ENT_QUOTES)));
$name3=stripslashes(trim(htmlspecialchars($_POST['name3'],ENT_QUOTES)));
$tempfile1=$_FILES['name']['name'];
//echo("test $tempfile1");
move_uploaded_file($_FILES['name']['tmp_name'],  './images1/'.$tempfile1);
$foto=$tempfile1;
//echo("<br>$foto");
$dog=strpos($email, "@");//смотрим выдал номер вхождения или ложь
//проверяет есть ли в почте символ @
$from="From: ".$email."\r\n";
$from .= "Content-type: text/html; charset=windows-1251\r\n";
  if ($dog!=false){
  //проверяет как заканчивается введенное мыло
     $end=stristr($email, ".");
           $emailot="dmitrykabalevsky@gmail.com";  // мыло кому отправляем
           $zagolovok="Заявка ".$name; //заголовок письма
           $msg="<html><body><table><tr><td>ФИО</td><td>".$name.".</td></tr><tr><td>Возраст</td><td>".$age."</td></tr><tr><td>Телефон</td><td>".$phone."</td></tr><tr><td>Е-mail</td><td>".$email."</td></tr><tr><td>Адрес</td><td>".$address."</td></tr><tr><td>Номинация</td><td>$nomination</td> <tr><td>Возрастная группа</td><td>$old</td></tr> <tr><td>Ф.И.О. преподавателя</td><td>$name1</td></tr> <tr><td>Телефон</td><td>$phone1</td></tr> <tr><td>Программа выступления. Указать хронометраж</td><td>$pr</td></tr> <tr><td>Телефон</td><td>".$phone2."</td></tr><tr><td>Е-mail</td><td>".$email1."</td></tr><tr><td>Адрес учебного заведения</td><td>".$address1."</td></tr><tr><td>Руководитель учебного заведения</td><td>".$name2."</td></tr></table></body></html>"; //формируем строку с данными для отправки в письме
           mail($emailot, $zagolovok, $msg, $from); //функция отправки
           }
           //echo 'Спасибо! Ваше письмо отправлено.';
   $sql_1 = "
             INSERT INTO applicationgroup (nameavt, nomination, name1, name2,phone1, sum1,address1, phone2, phone3, email1, name3, foto) values ('$nameavt', '$nomination', '$name1', '$name2', '$phone1', '$sum1', '$address1', '$phone2', '$phone3', '$email1', '$name3', '$foto')";
             mysql_query($sql_1) or die(mysql_error());
             $fl=fopen("listgroup.txt", "a+");
            $data="$nameavt, $nomination, $name1, $name2, $phone1, $sum1, $address1, $phone2, $phone3, $email1, $name3 ****************** ";
            fwrite($fl, $data);
            fclose($fl);
            header ("Location: listpart.php");
     }
?>
