<?
//if  (!isset($_POST['check_del'])) {
//                    die("�� ��  ������� �������!");
//	$check_del  = $_POST['check_del'];
	$col = 0;
foreach  ($_POST as $name => $check) {  
		if(substr($name, 0, strlen($name) - 1) == "check_del_")
		{
             // ������� ����������  ���������� ���������
 	                $col  = $col + 1;
					$st="";
					$s=substr($name, 10, strlen($name));
					str_replace("check_del_", $st, $name);
                   echo  "������� ".$name." <br>";
				   echo "$s<br>";
		}
 	                   
 }
?>