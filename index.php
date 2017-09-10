<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EggCheck</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="apple-touch-icon" sizes="57x57" href="./favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body>
    <link rel="stylesheet" href="./css/main.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

  <?php
    include("./head.html");
  ?>



    <article class="wrapTable">
      <table>
        <thead>
          <tr>
            <td style="width : 30px" class="num">연번</td>
            <td style="width : 30px" class="city">시도</td>
            <td class="name">농가명</td>
            <td class="adress">주소</td>
            <td style="width : 70px" class="scale">사육 규모<br />(수)</td>
            <td style="width : 60px" class="product">생산량</td>
            <td style="width : 60px" class="certifications">인증<br />사항</td>
            <td style="width : 60px" class="InspectionAgency">검사<br />기관</td>
            <td style="width : 80px" class="collectionDay">시료<br />채취일</td>
            <td style="width : 80px" class="nongyak">검출 농약</td>
            <td style="width : 50px" class="nongAmount">검출양<br />(mg/kg)</td>
            <td style="width : 50px" class="nongStandard">기준치<br />(mg/kg)</td>
            <td class="code">난각코드</td>
          </tr>
        </thead>
        <tbody>
            <?php
              include("./DB/DBinfo.php");
          		$connect = mysql_connect($hostname,$username,$passwd) or die("connect 실패");
          		$db_con=mysql_select_db($dbname,$connect)or die("db연결 실패");
          		$sql = "select * from eggcheck";
          		$result = mysql_query($sql,$connect) or die("sql 실패");
              mysql_query("SET NAMES utf8",$connect);
          		while ($row=mysql_fetch_array($result)) {
                echo "<tr>";
            			echo "
                  <td class='num'>{$row[num]}</td>
                  <td class='city'>{$row[city]}</td>
                  <td class='name'>{$row[name]}</td>
                  <td class='adress'>{$row[address]}</td>
                  <td class='scale'>{$row[scale]}</td>
                  <td class='product'>{$row[product]}</td>
                  <td class='certifications'>{$row[certifications]}</td>
                  <td class='InspectionAgency'>{$row[InspectionAgency]}</td>
                  <td class='collectionDay'>{$row[collectionDay]}</td>
                  <td class='nongyak'>{$row[nongyak]}</td>
                  <td class='nongAmount'>{$row[nongAmount]}</td>
                  <td class='nongStandard'>{$row[nongStandard]}</td>
                  ";
                  if (strpos($row[code], ",") !== false) {
                    $row[code]=str_replace(",","<br />",$row[code]);
                    echo "<td class='code'>{$row[code]}</td>";
                  }
                  else {
                    echo "<td class='code'>{$row[code]}</td>";
                  }
                echo "</tr>";
              }
          		mysql_close($connect);
            ?>
          </tr>
        </tbody>
      </table>

    </article>

    <script type="text/javascript">
    var headerSize;
    if (screen.availWidth < 800) {
      headerSize=160;
    }
    else{
      headerSize=200;
    }
      $(window).scroll(function() {
        if ($(window).scrollTop() <= headerSize) {
          if (screen.availWidth < 800) {
            $("header").css("height","160px");
            $(".head").css("font-size","30px");
          }
          else{
            $("header").css("height","200px");
            $(".head").css("font-size","50px");
          }
          $("header").css("position","absolute");
          $("header").css("margin-top","0");
          $("header").css("top","0");
          $("header").css("transition","margin .0s");
        }
         else if ($(window).scrollTop() > headerSize && $(window).scrollTop() <= 350) {
           $("header").css("height","150px");
           $(".head").css("font-size","20px");
           $("header").css("position","fixed");
           $("header").css("margin-top",$(window).scrollTop());
           $("header").css("top","-350px");
         }
         else if ($(window).scrollTop() > 350) {
           $("header").css("height","150px");
           $(".head").css("font-size","20px");
           $("header").css("position","fixed");
           $("header").css("margin-top","350px");
           $("header").css("top","-350px");
         }
       });
    </script>
  </body>
</html>
