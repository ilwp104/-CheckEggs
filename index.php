<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EggCheck</title>
  </head>
  <body>
    <header>
      <p>살충제 검출 달걀 확인</p>
    </header>

    <article class="">

    </article>

    <article class="">
      <?php
        require_once("/DB/DBinfo.php");
    		$connect = mysql_connect($hostname,$username,$passwd) or die("connect 실패");
    		$db_con=mysql_select_db($dbname,$connect)or die("db연결 실패");
    		$sql = "select * from EggCheck";
    		$result = mysql_query($sql,$connect) or die("sql 실패");
    		while ($row=mysql_fetch_array($result)) {
    			echo "{$row[num]},{$row[city]},{$row[name]},{$row[address]},{$row[scale]},{$row[product]},{$row[certifications]}
            {$row[InspectionAgency]},{$row[collectionDay]},{$row[nongyak]},{$row[nongAmount]},{$row[nongStandard]},{$row[code]}";
            echo "<br />";
        }
    		mysql_close($connect);
      ?>
    </article>
  </body>
</html>
