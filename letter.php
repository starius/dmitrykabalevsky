<?include 'config.php';
if(!empty($_POST['nameavt'])) {
    $nameavt=$_POST['nameavt'];
    $age=stripslashes(trim(htmlspecialchars($_POST['age'],ENT_QUOTES)));
    $phone=stripslashes(trim(htmlspecialchars($_POST['phone'],ENT_QUOTES)));
    $email=stripslashes(trim(htmlspecialchars($_POST['email'],ENT_QUOTES)));
    $address=stripslashes(trim(htmlspecialchars($_POST['address'],ENT_QUOTES)));
    $nomination=stripslashes(trim(htmlspecialchars($_POST['nomination'],ENT_QUOTES)));
    $old=stripslashes(trim(htmlspecialchars($_POST['old'],ENT_QUOTES)));
    $name1=stripslashes(trim(htmlspecialchars($_POST['name1'],ENT_QUOTES)));
    $phone1=stripslashes(trim(htmlspecialchars($_POST['phone1'],ENT_QUOTES)));
    $address1=stripslashes(trim(htmlspecialchars($_POST['address1'],ENT_QUOTES)));
    $phone2=stripslashes(trim(htmlspecialchars($_POST['phone2'],ENT_QUOTES)));
    $phone3=stripslashes(trim(htmlspecialchars($_POST['phone3'],ENT_QUOTES)));
    $email1=stripslashes(trim(htmlspecialchars($_POST['email1'],ENT_QUOTES)));
    $name2=stripslashes(trim(htmlspecialchars($_POST['name2'],ENT_QUOTES)));
    $pr=stripslashes(trim(htmlspecialchars($_POST['pr'],ENT_QUOTES)));
    $tempfile1=$_FILES['name']['name'];
    move_uploaded_file($_FILES['name']['tmp_name'],  './images1/'.$tempfile1);
    $foto=$tempfile1;
//echo("$nameavt");
//echo("тест");
   $dog=strpos($email, "@");//смотрим выдал номер вхождения или ложь
//проверяет есть ли в почте символ @
   $from="From: ".$email."\r\n";
   $from .= "Content-type: text/html; charset=windows-1251\r\n";
   if ($dog!=false){
  //проверяет как заканчивается введенное мыло

           $emailot="dmitrykabalevsky@gmail.com";  // мыло кому отправляем
           $zagolovok="Заявка ".$name; //заголовок письма
           $msg="<html><body><table><tr><td>ФИО</td><td>$nameavt</td></tr><tr><td>Возраст</td><td>$age</td></tr><tr><td>Телефон</td><td>$phone</td></tr><tr><td>Е-mail</td><td>$email</td></tr><tr><td>Адрес</td><td>$address</td></tr><tr><td>Номинация</td><td>$nomination</td> <tr><td>Возрастная группа</td><td>$old</td></tr> <tr><td>Ф.И.О. преподавателя</td><td>$name1</td></tr> <tr><td>Телефон</td><td>$phone1</td></tr> <tr><td>Программа выступления. Указать хронометраж</td><td>$pr</td></tr> <tr><td>Телефон</td><td>$phone2</td></tr><tr><td>Е-mail</td><td>$email1</td></tr><tr><td>Адрес учебного заведения</td><td>$address1</td></tr><tr><td>Руководитель учебного заведения</td><td>$name2</td></tr></table></body></html>"; //формируем строку с данными для отправки в письме
           mail($emailot, $zagolovok, $msg, $from); //функция отправки
           //echo 'Спасибо! Ваше письмо отправлено.';
           }
   $sql_1 = "INSERT INTO application (nameavt, age, phone, email, address, nomination, old, name1, phone1, address1, phone2, phone3, email1, name2, pr, foto) values ('$nameavt', '$age', '$phone', '$email', '$address', '$nomination', '$old', '$name1', '$phone1', '$address1', '$phone2', '$phone3', '$email1', '$name2', '$pr', '$foto')";
   mysql_query($sql_1) or die(mysql_error());
            $fl=fopen("list.txt", "a+");
            $data="$nameavt, $age, $phone, $email, $address, $nomination, $old, $name1, $phone1, $address1, $phone2, $phone3, $email1, $name2, $pr \n ";
            fputs($fl, $data);
            fclose($fl);
            header ("Location: listpart.php");
     }


?>





