<?
include 'config.php';
mysql_select_db('forum2') or die(mysql_error()); //делаем активной бд
$sql = "
CREATE TABLE application (
	id int(11) NOT NULL auto_increment,
	nameavt varchar(50) NOT NULL default '',
	age varchar(50) NOT NULL default '',
	phone varchar(50) NOT NULL default '',
	email varchar(50) NOT NULL default '',
	address varchar(50) NOT NULL default '',
	nomination varchar(50) NOT NULL default '',
	old varchar(50) NOT NULL default '',
	name1 varchar(50) NOT NULL default '',
	phone1 varchar(50) NOT NULL default '',
	address1 varchar(50) NOT NULL default '',
	phone2 varchar(50) NOT NULL default '',
	phone3 varchar(50) NOT NULL default '',
	email1 varchar(50) NOT NULL default '',
	name2 varchar(50) NOT NULL default '',
	pr TEXT,
	foto varchar(50) NOT NULL default '',
	PRIMARY KEY (id)
)";
mysql_query($sql) or die(mysql_error());

$sql = "
CREATE TABLE applicationgroup (
	id int(11) NOT NULL auto_increment,
	nameavt varchar(50) NOT NULL default '',
	nomination varchar(50) NOT NULL default '',
	name1 varchar(50) NOT NULL default '',
	name2 varchar(50) NOT NULL default '',
	phone1 varchar(50) NOT NULL default '',
	sum1 TEXT,
	address1 varchar(50) NOT NULL default '',
	phone2 varchar(50) NOT NULL default '',
	phone3 varchar(50) NOT NULL default '',
	email1 varchar(50) NOT NULL default '',
	name3 varchar(50) NOT NULL default '',
	foto varchar(50) NOT NULL default '',
	PRIMARY KEY (id)
)";
mysql_query($sql) or die(mysql_error());
?>