<?
include 'config.php';
$id = $_GET["id"];
echo ("<form action='upd1group.php' method='post' enctype='multipart/form-data' name='Form11'><table border='1'><tr><td>Название коллектива</td><td>Номинация</td><td>Ф.И.О. руководителя</td><td>Ф.И.О. концертмейстера</td><td>Телефон</td><td>Программа выступления</td><td>Адрес учебного заведения</td><td>Телефон</td><td>Тел/факс</td><td>E-mail</td><td>Руководитель учебного заведения</td></tr>");
$sql5 = "SELECT * FROM applicationgroup WHERE id='$id'";
        $resp5 = mysql_query($sql5);
        while($row5 = mysql_fetch_assoc($resp5))
          {
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
          if(!empty($foto)){
             echo ("<img src='images1/$foto' width='200'>");
             }
              echo("<tr><td><textarea  type='text' name='nameavt' cols='20' rows='1'/>$nameavt</textarea></td>
              <td><textarea  type='text' name='nomination' cols='20' rows='1'/>$nomination</textarea></td>
              <td><textarea  type='text' name='name1' cols='20' rows='1'/>$name1</textarea></td>
              <td><textarea  type='text' name='name2' cols='20' rows='1'/>$name2</textarea></td>
                <td><textarea  type='text' name='phone1' cols='20' rows='1'/>$phone1</textarea></td>
              <td><textarea  name='sum1' cols='20' rows='1' id='sum1'>$sum1</textarea></td>
              <td><textarea  type='text' name='address1' cols='20' rows='1'/>$address1</textarea></td>
              <td><textarea  type='text' name='phone2' cols='20' rows='1'/>$phone2</textarea></td>
              <td><textarea  type='text' name='phone3' cols='20' rows='1'/>$phone3</textarea></td>
              <td><textarea  type='text' name='email1' cols='20' rows='1'/>$email1</textarea></td>
              <td><textarea  type='text' name='name3' cols='20' rows='1'/>$name3</textarea></td>

              ");
          }
echo ("<table>");
echo ("<input type='hidden' name='id' value='$id'> <input type='submit' value='Изменить' /></form>");
?>
<style>
textarea{border: 0px solid white;}
</style>
