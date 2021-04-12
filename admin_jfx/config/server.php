 <?php
DEFINE("DBHOST", "localhost"); 
DEFINE("DBUSER", "root");
DEFINE("DBPASS", "");
DEFINE("DBNAME", "pbj3");
$koneksidb=mysql_connect(DBHOST,DBUSER,DBPASS) or die ("Couln't connect to database");
mysql_select_db(DBNAME,$koneksidb);




 

?> 