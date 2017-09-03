<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EggCheck</title>
    <link rel="stylesheet" href="./css/main.css">
  </head>
  <body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>


  <?php
    require_once("/head.html");
  ?>


    <article class="wrapTable">
      <table>
        <tr>
          <td style="width : 30px">연번</td>
          <td style="width : 30px">시도</td>
          <td>농가명</td>
          <td>주소</td>
          <td style="width : 60px">사육규모<br />(수)</td>
          <td style="width : 60px">생산량</td>
          <td style="width : 60px">인증사항</td>
          <td style="width : 60px">검사기관</td>
          <td style="width : 80px">시료채취일</td>
          <td style="width : 80px">검출농약</td>
          <td style="width : 50px">검출양<br />(mg/kg)</td>
          <td style="width : 50px">기준치<br />(mg/kg)</td>
          <td>난각코드</td>
        </tr>

          <?php
            require_once("/DB/DBinfo.php");
        		$connect = mysql_connect($hostname,$username,$passwd) or die("connect 실패");
        		$db_con=mysql_select_db($dbname,$connect)or die("db연결 실패");
        		$sql = "select * from EggCheck";
        		$result = mysql_query($sql,$connect) or die("sql 실패");
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
        		mysql_close($connect);
          ?>
        </tr>
      </table>

    </article>

    <script type="text/javascript">
      $(window).scroll(function() {
         if ($(window).scrollTop() > 150) {
           $("header").css("position","fixed");
           $("header").css("padding-top","150px");
           $("header").css("top","-150px");
           $("header").css("transition","padding .5s");

         }
         else {
           $("header").css("position","absolute");
           $("header").css("padding-top","0");
           $("header").css("top","0");
           $("header").css("transition","padding .3s");
         }
       });
    </script>
  </body>
</html>
