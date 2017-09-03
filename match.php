<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <link rel="stylesheet" href="./css/main.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

    <?php
    require_once("/head.html");

    require_once("/DB/DBinfo.php");

    $string = $_POST["string"];
    $match = $_POST["matchSelect"];

    $connect = mysql_connect($hostname,$username,$passwd) or die("connect 실패");
    mysql_select_db($dbname,$connect) or die("db연결 실패");
    if ($match=="select") {
      echo "<script>
      alert('선택해주세요');
      </script>";
      $sql = "select * from EggCheck";
      $result = mysql_query($sql,$connect)or die("sql 실패");
    }
    elseif ($match=="전체보기") {
      $sql = "select * from EggCheck";
      $result = mysql_query($sql,$connect)or die("sql 실패");
    }
    elseif ($match=="난각코드") {
      $sql = "select * from EggCheck where code like \"%{$string}%\"";
      $result = mysql_query($sql,$connect)or die("sql 실패");
    }
    elseif ($match=="농가명") {
      $sql = "select * from EggCheck where name like \"%{$string}%\"";
      $result = mysql_query($sql,$connect)or die("sql 실패");
    }
    elseif ($match=="주소") {
      $sql = "select * from EggCheck where address like \"%{$string}%\"";
      $result = mysql_query($sql,$connect)or die("sql 실패");
    }?>
    <article class="wrapTable">

      <?php

      $num = mysql_num_rows($result);
      if ($num == 0 ) {
        echo "<p style='text-align : center'>확인된 계란이 없습니다.</p>";
      }
      else {
        echo "<table>";
        echo "<tr>
        <td style='width : 30px'>연번</td>
        <td style='width : 30px'>시도</td>
        <td>농가명</td>
        <td>주소</td>
        <td style='width : 60px'>사육규모<br />(수)</td>
        <td style='width : 60px'>생산량</td>
        <td style='width : 60px'>인증사항</td>
        <td style='width : 60px'>검사기관</td>
        <td style='width : 80px'>시료채취일</td>
        <td style='width : 60px'>검출농약</td>
        <td style='width : 50px'>검출양<br />(mg/kg)</td>
        <td style='width : 50px'>기준치<br />(mg/kg)</td>
        <td>난각코드</td>
        </tr>";
        while ($row=mysql_fetch_array($result)) {
          echo "<tr>";
          echo "
          <td>{$row[num]}</td>
          <td>{$row[city]}</td>
          <td>{$row[name]}</td>
          <td>{$row[address]}</td>
          <td>{$row[scale]}</td>
          <td>{$row[product]}</td>
          <td>{$row[certifications]}</td>
          <td>{$row[InspectionAgency]}</td>
          <td>{$row[collectionDay]}</td>
          <td>{$row[nongyak]}</td>
          <td>{$row[nongAmount]}</td>
          <td>{$row[nongStandard]}</td>
          <td>{$row[code]}</td>";
          echo "</tr>";
        }
        echo "</table>";
      }

      mysql_close();

      ?>
    </article>
  </body>
</html>
