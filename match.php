<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="match.php" method="post">
      <input type="text" name="string" value="">
      <select class="" name="matchSelect">
        <option value="select">전체보기</option>
        <option value="난각코드">난각코드</option>
        <option value="농가명">농가명</option>
        <option value="주소">주소</option>
      </select>
      <input type="submit" name="" value="검색">
    </form>
    <?php
    require_once("/DB/DBinfo.php");

    $string = $_POST["string"];
    $match = $_POST["matchSelect"];
    echo "$string<br />";

    $connect = mysql_connect($hostname,$username,$passwd) or die("connect 실패");
    mysql_select_db($dbname,$connect) or die("db연결 실패");

    if ($match=="난각코드") {
      $sql = "select * from EggCheck where code like \"%{$string}%\"";
      $result = mysql_query($sql,$connect)or die("sql 실패");
      // echo "select * from EggCheck where code like '%{$string}%'";
    }
    elseif ($match=="농가명") {
      $sql = "select * from EggCheck where name like \"%{$string}%\"";
      $result = mysql_query($sql,$connect)or die("sql 실패");
      // echo "select * from EggCheck where name like '%{$string}%'";
    }
    elseif ($match=="주소") {
      $sql = "select * from EggCheck where address like \"%{$string}%\"";
      $result = mysql_query($sql,$connect)or die("sql 실패");
    }
    echo "<table>";
    echo "<tr>
    <td>연번</td>
    <td>시도</td>
    <td>농가명</td>
    <td>주소</td>
    <td>사육규모<br />(수)</td>
    <td>생산량</td>
    <td>인증사항</td>
    <td>검사기관</td>
    <td>시료 채취일</td>
    <td>검출농약</td>
    <td>검출양<br />(mg/kg)</td>
    <td>기준치<br />(mg/kg)</td>
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

    mysql_close();

    ?>
  </body>
</html>
