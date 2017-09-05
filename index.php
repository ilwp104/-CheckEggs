<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EggCheck</title>
  </head>
  <body>
    <link rel="stylesheet" href="./css/main.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

  <?php
    include("./head.html");
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
            include("./DB/DBinfo.php");
        		$connect = mysql_connect($hostname,$username,$passwd) or die("connect 실패");
        		$db_con=mysql_select_db($dbname,$connect)or die("db연결 실패");
        		$sql = "select * from EggCheck";
        		$result = mysql_query($sql,$connect) or die("sql 실패");
            mysql_query("SET NAMES utf8",$connect);
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
        if ($(window).scrollTop() <= 200) {
          $("header").css("height","200px");
          $(".head").css("font-size","50px");
          $("header").css("position","absolute");
          $("header").css("padding-top","0");
          $("header").css("top","0");
          $("header").css("transition","padding .0s");
        }
         else if ($(window).scrollTop() > 200 && $(window).scrollTop() <= 350) {
           $("header").css("height","150px");
           $(".head").css("font-size","20px");
           $("header").css("position","fixed");
           $("header").css("padding-top",$(window).scrollTop());
           $("header").css("top","-350px");
         }
         else if ($(window).scrollTop() > 350) {
           $("header").css("height","150px");
           $(".head").css("font-size","20px");
           $("header").css("position","fixed");
           $("header").css("padding-top","350px");
           $("header").css("top","-350px");
         }
       });
    </script>
  </body>
</html>
