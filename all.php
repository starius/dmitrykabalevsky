<? 
include 'config.php';
echo ("<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" /></head><body>Участники<br>");  
$sql5 = "SELECT id, nameavt FROM application";
        $resp5 = mysql_query($sql5);
		while($row5 = mysql_fetch_assoc($resp5))  
          {
		   $id=$row5['id'];
		  $nameavt=$row5['nameavt'];
		  echo("<a href='data.php?id=$id'>$nameavt</a><br>");
		  }
		echo ("<br>Коллективы<br>");  
$sql5 = "SELECT id, nameavt FROM applicationgroup";
        $resp5 = mysql_query($sql5);
		while($row5 = mysql_fetch_assoc($resp5))  
          {
		   $id=$row5['id'];
		  $nameavt=$row5['nameavt'];
		  echo("<a href='datagroup.php?id=$id'>$nameavt</a><br>");
		  }
echo ("<a href='list.txt'>Скачать файл с данными участников</a><br>");
echo ("<a href='listgroup.txt'>Скачать файл с данными коллективов участников</a></body></html>");
?>
