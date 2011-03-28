<? 
include 'config.php';
echo ("<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" /></head><body>Участники<br>");  
$sql5 = "SELECT id, nameavt FROM application";
        $resp5 = mysql_query($sql5);
		while($row5 = mysql_fetch_assoc($resp5))  
          {
		   $id=$row5['id'];
		  $nameavt=$row5['nameavt'];
		  echo("$nameavt<br>");
		  }
		echo ("<br>Коллективы<br>");  
$sql5 = "SELECT id, nameavt FROM applicationgroup";
        $resp5 = mysql_query($sql5);
		while($row5 = mysql_fetch_assoc($resp5))  
          {
		   $id=$row5['id'];
		  $nameavt=$row5['nameavt'];
		  echo("$nameavt<br>");
		  }
echo ("<a href='participate.html'>Вернуться к заявке</a></body></html>");
?>