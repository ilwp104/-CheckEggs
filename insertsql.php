<?php
  // error_reporting(E_ALL);
  // ini_set("display_errors", 1);

include("./DB/DBinfo.php");
$connect = mysql_connect($hostname,$username,$passwd) or die("connect 실패");
$db_con=mysql_select_db($dbname,$connect)or die("db연결 실패");
  //
  // $sql = "insert into eggcheck values(1,'울산','미림농장','울산 울주군 언양읍','103,683','85,000','일반','지자체','8.1','비펜트린','0.06','0.01','07051');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(2,'울산','한국농장','울산 울주군 삼동면','37,600','30,000','일반','지자체','8.2','비펜트린','0.02','0.01','07001');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(3,'경기','신선2농장','경기 양주시 은현면','22,700','14,500','일반','지자체','8.11','비펜트린','0.07','0.01','08신선농장');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(4,'대전','길석노농장','대전 유성구 학하동','7,000','3,500','일반','지자체','8.15','에톡사졸','0.01','불검출','06대전');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(5,'경기','우리농장','경기 광주시 곤지암읍','60,541','42,000','친환경','농관원','8.15','비펜트린','0.015','0.01','08LSH');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(6,'경기','김순도','경기 평택시 청북면','6,720','5,000','친환경','농관원','8.15','비펜트린','0.093','0.01','08KSD영양란');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(7,'경기','박종선','경기 평택시 동삭동','72,500','51,000','친환경','농관원','8.15','비펜트린','0.03','0.01','08SH');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(8,'경기','조성우','경기 평택시 월곡동','34,878','24,000','친환경','농관원','8.15','비펜트린','0.032','0.01','08쌍용');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(9,'경기','농업법인조인','(주) 가남지점경기 여주시 가남읍','403,747','283,000','친환경','농관원','8.15','비펜트린','0.042','0.01','가남,');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(10,'경기','양계농장','경기 여주시 매룡동','71,712','50,000','친환경','농관원','8.15','비펜트린','0.047','0.01','08양계');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(11,'경기','정광면','경기 이천시 부발읍','139,552','98,000','친환경','농관원','8.15','비펜트린','0.043','0.01','08광명농장, 08광명, 08정광면,0802402NH');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(12,'경기','신둔양계','경기 이천시 신둔면','27,400','19,000','친환경','농관원','8.15','비펜트린','0.064','0.01','08신둔');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(13,'경기','마리농장(이한조)','경기 남양주시 진건읍','80,000','56,000','친환경','농관원','8.9','피프로닐','0.0363','0.02','08마리');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(14,'경기','오동민','경기 양주시 은현면','55,000','40,000','친환경','농관원','8.15','비펜트린','0.111','0.01','08부영');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(15,'경기','주희노','경기 연천군 미산면','12,000','8,000','친환경','농관원','8.15','플루페녹수론','0.028','불검출','08JHN');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(16,'경기','고산농장(주윤문)','경기 파주시 파평면','10,692','7,200','친환경','농관원','8.15','비펜트린','0.038','0.01','08고산');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(17,'경기','김준환','경기 화성시 남양읍','236,800','165,000','친환경','농관원','8.15','비펜트린','0.018','0.01','08서신');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(18,'충남','박명서','충남 논산시 광석면','16,500','12,000','친환경','농관원','8.15','비펜트린','0.0197','0.01','11서영친환경');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(19,'충남','송연호','충남 아산시 신창면','95,000','60,000','친환경','농관원','8.15','플루페녹수론','0.0077','불검출','11덕연');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(20,'충남','구운회','충남 홍성군 홍북면','30,000','18,000','친환경','농관원','8.15','비펜트린','0.017','0.01','11신선봉농장');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(21,'경북','김부출','경북 칠곡군 지천면','13,000','7,000','친환경','농관원','8.15','비펜트린','0.03','0.01','14소망');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(22,'경북','김중현','경북 칠곡군 지천면','5,000','3,000','친환경','농관원','8.15','비펜트린','0.045','0.01','14인영');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(23,'경북','박원식','경북 칠곡군 지천면','9,000','7,000','친환경','농관원','8.15','비펜트린','0.016','0.01','14혜찬');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(24,'경남','김미옥','경남 창녕군 유어면','90,000','48,000','친환경','농관원','8.15','비펜트린','0.0253','0.01','15연암');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(25,'경남','문경숙','경남 합천군 야로면','34,000','23,000','친환경','농관원','8.15','비펜트린','0.018','0.01','15온누리');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(26,'강원','왕영호','강원 철원군 동송읍','55,000','30,000','친환경','농관원','8.15','피프로닐','0.056','0.02','09지현');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(27,'전남','청정농장','전남 나주시 다시면','83,000','40,000','친환경','농관원','8.15','피프로닐','0.0036','0.02','13SCK');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(28,'전남','나성준영(최연호)','전남 함평군 엄다면','83,000','45,000','친환경','농관원','8.15','피프로닐','0.0075','0.02','13나성준영');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(29,'경북','황금자','경북 경주시 외동읍','50,000','13,000','친환경','농관원','8.15','피프로닐','0.018','0.02','황금0906, 황금0908, 황금0912, 황금0914, 황금0916, 황금0921');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(30,'경북','전순자','경북 의성군 다인면','50,000','24,000','친환경','농관원','8.15','피프로닐','0.01','0.02','14다인,14DI');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(31,'충남','시온농장','충남 천안시 서북구 입장면','71,000','40,000','친환경','식약처','8.16','비펜트린','0.02','0.01','11시온');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(32,'전남','정화농장','전남 나주시 공산면','83,000','18,000','친환경','식약처','8.15','비펜트린','0.21','0.01','13정화');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(33,'경기','신호농장','경기 포천시 일동면','20,000','15,000','일반','지자체','8.16','피프로닐','0.013','0.02','08신호');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(34,'경기','이창용','경기 파주시 탄현면','3,700','1,500','일반','지자체','8.16','비펜트린','0.028','0.01','08LCY');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(35,'경기','맑은농장','경기 포천시 이동면','35,000','20,000','일반','지자체','8.16','비펜트린','0.0854','0.01','08맑은농장');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(36,'경북','박태수','경북 김천시 개령면','5,000','1,500','일반','지자체','8.15','비펜트린','0.024','0.01','없음');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(37,'전남','장진성','전남 화순군 동면','15,000','12,000','일반','지자체','8.15','비펜트린','0.272','0.01','13우리');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(38,'전남','정고만','전남 화순군 동면','15,000','12,000','일반','지자체','8.15','비펜트린','0.024','0.01','13대산');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(39,'전남','이효성','전남 화순군 동면','15,000','12,000','일반','지자체','8.15','비펜트린','0.041','0.01','13둥지');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(40,'전남','드림영농조합법인','전남 무안군 운남면','40,000','32,000','일반','지자체','8.15','비펜트린','0.023','0.01','13드림');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(41,'경남','조영옥','경남 진주시 일반성면','12,000','6,500','일반','지자체','8.15','비펜트린','0.025','0.01','15CYO');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(42,'강원','윤정희','강원 철원군 동송읍','35,000','5,000','일반','지자체','8.16','비펜트린','0.11','0.01','08LNB');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(43,'충남','대명양계','충남 논산시 상월면','11,680','9,700','일반','지자체','8.15','피리다벤','0.009','불검출','11대명');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(44,'충남','대흥농장','충남 홍성군 갈산면','27,000','20,250','일반','지자체','8.15','비펜트린','0.027','0.01','11CMJ');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(45,'충남','송암농장','충남 홍성군 금마면','25,000','18,750','일반','지자체','8.16','비펜트린','0.026','0.01','11송암');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(46,'경기','정충식','경기 동두천','12,000','8,400','일반','지자체','8.17','비펜트린','0.093','0.01','08이레');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(47,'인천','농업회사법인(유)씨케이파머스','인천 강화군 불은면','31,060','2,700','친환경','농관원','8.15','비펜트린','0.0167','0.01','04씨케이');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(48,'충남','윤재우','충남 천안시 동남구','60,000','54,000','친환경','농관원','8.16','피프로닐','0.0763','0.02','11주현');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(49,'충북','청운영농조합법인','충북 음성군 생극면','30,000','9,200','친환경','농관원','8.15',' 비펜트린','0.0627','0.01','10청운,1000201DM');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(50,'전북','황현우농장','전북 김제시 죽산면','2,500','300','일반','지자체','8.16','플루페녹수론','0.008','불검출','없음');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(51,'충남','시간과 자연농원','충남 청양군 목면','300','225','일반','지차제','8.16','플루페녹수론','0.0082','불검출','11시간과자연');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");
  //
  // $sql = "insert into eggcheck values(52,'충남','초원농장','충남 아산시 둔','포면6,000','4,500','일반','지자체','8.16','플루페녹수론','0.0078','불검출','11초원');";
  // $result = mysql_query($sql,$connect) or die("sql 실패");

  // $sql = "insert into eggcheck values(53,'경남','김옥순농장','경남 양산','-','-','-','-','20170825','비펜트린','0.24','0.01','15058');";
  // $result = mysql_query($sql,$connect) or die("1sql 실패");

  $sql = "insert into eggcheck values(54,'경북','제일농장','경북 김천','-','-','-','-','20170817','피프로닐','0.01','0.02','14제일');";
  $result = mysql_query($sql,$connect) or die("2sql 실패");

    mysql_close($connect);

 ?>
