<?
include 'config.php';
echo ("<form method='post' action='input5.php'>");
$sql5 = "SELECT DISTINCT nameavt, nomination, name1 FROM applicationgroup";
        $resp5 = mysql_query($sql5);
        $i = 0;
        while($row5 = mysql_fetch_assoc($resp5))
          {
          $nameavt=$row5['nameavt'];
          $nomination=$row5['nomination'];
          $name1=$row5['name1'];
          echo ("<input type='checkbox' name=\"check_del_$i\">$nameavt $nomination<Br>");
          $i++;
          }
echo ("<p><input type='submit' name=\"submit_del\" value='Отправить'></p></form>");
?>
