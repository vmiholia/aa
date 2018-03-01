<?php
$username = "root"; 
$password = "m9YhAP0DLQRi";   
$host = "52.26.225.238";
$database="bitnami_moodle";
$server = mysql_connect($host, $username, $password);
$connection = mysql_select_db($database, $server);

function one($class)
{
$query0="select * from lfps_teacher WHERE Subject = 'Class' AND Class ='".$class."'";
$basic0= mysql_query($query0);
if (false === $basic0) {
  echo mysql_error();
}
$row0=mysql_fetch_array($basic0);

$q2="select rn,Attendance,admno from bitnami_moodle.attnd WHERE Class='".$class."' ";
$r2= mysql_query($q2);
if (false === $r2) {
  echo mysql_error();
}

 $output = '';

$query1="select * from little12 WHERE Class='".$class."' AND Subject = 'English'  AND description='READING SKILLS - PRONUNCIATION & FLUENCY' order by Student_Name;";
$query2="select * from little12 WHERE Class='".$class."' AND Subject = 'English'  AND  description='READING SKILLS - COMPREHENSION' Order by Student_Name;";
$query3="select * from little12 WHERE Class='".$class."' AND Subject = 'English'  AND  description='WRITING SKILLS - LITERATURE' order by Student_Name;";
$query4="select * from little12 WHERE Class='".$class."' AND Subject = 'English'  AND  description='WRITING SKILLS - GRAMMAR' order by Student_Name;";
$query5="select * from little12 WHERE Class='".$class."' AND Subject = 'English'  AND  description='WRITING SKILLS - DICTIONARY/VOCABULARY' order by Student_Name;";
$query6="select * from little12 WHERE Class='".$class."' AND Subject = 'English'  AND  description='WRITING SKILLS - HAND WRITING & ASSIGNMENTS' order by Student_Name;";
$query7="select * from little12 WHERE Class='".$class."' AND Subject = 'English'  AND  description='SPEAKING SKILLS - RECITATION/STORY TELLING'  order by Student_Name;";
$query8="select * from little12 WHERE Class='".$class."' AND Subject = 'English'  AND  description='SPEAKING SKILLS - CONVERSATION'  order by Student_Name;";
$query9="select * from little12 WHERE Class='".$class."' AND Subject = 'English'  AND  description='LISTENING SKILLS - COMPREHENSION' order by Student_Name;";


$query10="select * from little12 WHERE Class='".$class."' AND Subject = 'Hindi'  AND  description='READING SKILLS - PRONUNCIATION & FLUENCY' order by Student_Name;";
$query11="select * from little12 WHERE Class='".$class."' AND Subject = 'Hindi'  AND  description='READING SKILLS - COMPREHENSION' Order by Student_Name;";
$query12="select * from little12 WHERE Class='".$class."' AND Subject = 'Hindi'  AND  description='WRITING SKILLS - LITERATURE' order by Student_Name;";
$query13="select * from little12 WHERE Class='".$class."' AND Subject = 'Hindi'  AND  description='WRITING SKILLS - GRAMMAR' order by Student_Name;";
$query14="select * from little12 WHERE Class='".$class."' AND Subject = 'Hindi'  AND  description='WRITING SKILLS - DICTIONARY/VOCABULARY' order by Student_Name;";
$query15="select * from little12 WHERE Class='".$class."' AND Subject = 'Hindi'  AND  description='WRITING SKILLS - HAND WRITING & ASSIGNMENTS' order by Student_Name;";
$query16="select * from little12 WHERE Class='".$class."' AND Subject = 'Hindi'  AND  description='SPEAKING SKILLS - RECITATION/STORY TELLING'  order by Student_Name;";
$query17="select * from little12 WHERE Class='".$class."' AND Subject = 'Hindi'  AND  description='SPEAKING SKILLS - CONVERSATION'  order by Student_Name;";
$query18="select * from little12 WHERE Class='".$class."' AND Subject = 'Hindi'  AND  description='LISTENING SKILLS - COMPREHENSION'  order by Student_Name;";


$query19="select * from little12 WHERE Class='".$class."' AND Subject = 'Maths'  AND  description='CONCEPT'  order by Student_Name;";
$query20="select * from little12 WHERE Class='".$class."' AND Subject = 'Maths'  AND  description='ACTIVITY'  order by Student_Name;";
$query21="select * from little12 WHERE Class='".$class."' AND Subject = 'Maths'  AND  description='TABLE' order by Student_Name;";
$query22="select * from little12 WHERE Class='".$class."' AND Subject = 'Maths'  AND  description='CLASS & HOME ASSIGNMENTS' order by Student_Name;";



$query23="select * from little12 WHERE Class='".$class."' AND Subject = 'Other Subjects'  AND  description='EVS'  order by Student_Name;";
$query24="select * from little12 WHERE Class='".$class."' AND Subject = 'Other Subjects'  AND  description='Activity/Project'  order by Student_Name;";
$query25="select * from little12 WHERE Class='".$class."' AND Subject = 'Other Subjects'  AND  description='GK'  order by Student_Name;";
$query26="select * from little12 WHERE Class='".$class."' AND Subject = 'Other Subjects'  AND  description='Computer'  order by Student_Name;";
$query27="select * from little12 WHERE Class='".$class."' AND Subject = 'Other Subjects'  AND  description='Drawing'  order by Student_Name;";
$query28="select * from little12 WHERE Class='".$class."' AND Subject = 'Other Subjects'  AND  description='Value Education'  order by Student_Name;";

$basic1 = mysql_query($query1);

if (false === $basic1) {
  echo mysql_error();
}

$basic2 = mysql_query($query2);

if (false === $basic2) {
  echo mysql_error();
}

$basic3= mysql_query($query3);

if (false === $basic3) {
  echo mysql_error();
}

$basic4 = mysql_query($query4);

if (false === $basic4) {
  echo mysql_error();
}

$basic5 = mysql_query($query5);

if (false === $basic5) {
  echo mysql_error();
}


$basic6 = mysql_query($query6);

if (false === $basic6) {
  echo mysql_error();
}

$basic7 = mysql_query($query7);

if (false === $basic7) {
  echo mysql_error();
}

$basic8 = mysql_query($query8);

if (false === $basic8) {
  echo mysql_error();
}

$basic9 = mysql_query($query9);

if (false === $basic9) {
  echo mysql_error();
}


$basic10 = mysql_query($query10);

if (false === $basic10) {
  echo mysql_error();
}

$basic11 = mysql_query($query11);

if (false === $basic11) {
  echo mysql_error();
}

$basic12= mysql_query($query12);

if (false === $basic12) {
  echo mysql_error();
}

$basic13 = mysql_query($query13);

if (false === $basic13) {
  echo mysql_error();
}

$basic14 = mysql_query($query14);

if (false === $basic14) {
  echo mysql_error();
}


$basic15 = mysql_query($query15);

if (false === $basic15) {
  echo mysql_error();
}

$basic16 = mysql_query($query16);

if (false === $basic16) {
  echo mysql_error();
}

$basic17 = mysql_query($query17);

if (false === $basic17) {
  echo mysql_error();
}

$basic18 = mysql_query($query18);

if (false === $basic18) {
  echo mysql_error();
}


$basic19 = mysql_query($query19);

if (false === $basic19) {
  echo mysql_error();
}

$basic20 = mysql_query($query20);

if (false === $basic20) {
  echo mysql_error();
}

$basic21= mysql_query($query21);

if (false === $basic21) {
  echo mysql_error();
}

$basic22 = mysql_query($query22);

if (false === $basic22) {
  echo mysql_error();
}

$basic23 = mysql_query($query23);

if (false === $basic23) {
  echo mysql_error();
}


$basic24 = mysql_query($query24);

if (false === $basic24) {
  echo mysql_error();
}

$basic25 = mysql_query($query25);

if (false === $basic25) {
  echo mysql_error();
}

$basic26 = mysql_query($query26);

if (false === $basic26) {
  echo mysql_error();
}

$basic27 = mysql_query($query27);

if (false === $basic27) {
  echo mysql_error();
}


$basic28 = mysql_query($query28);

if (false === $basic28) {
  echo mysql_error();
}

$row1=mysql_fetch_array($basic1);
$row2=mysql_fetch_array($basic2);
$row3=mysql_fetch_array($basic3);
$row4=mysql_fetch_array($basic4);
$row5=mysql_fetch_array($basic5);
$row6=mysql_fetch_array($basic6);
$row7=mysql_fetch_array($basic7);
$row8=mysql_fetch_array($basic8);
$row9=mysql_fetch_array($basic9);
$row10=mysql_fetch_array($basic10);
$row11=mysql_fetch_array($basic11);
$row12=mysql_fetch_array($basic12);
$row13=mysql_fetch_array($basic13);
$row14=mysql_fetch_array($basic14);
$row15=mysql_fetch_array($basic15);
$row16=mysql_fetch_array($basic16);
$row17=mysql_fetch_array($basic17);
$row18=mysql_fetch_array($basic18);
$row19=mysql_fetch_array($basic19);
$row20=mysql_fetch_array($basic20);
$row21=mysql_fetch_array($basic21);
$row22=mysql_fetch_array($basic22);
$row23=mysql_fetch_array($basic23);
$row24=mysql_fetch_array($basic24);
$row25=mysql_fetch_array($basic25);
$row26=mysql_fetch_array($basic26);
$row27=mysql_fetch_array($basic27);
$row28=mysql_fetch_array($basic28);


$output .='
<table class="table" bordered="1">
<thead>
<tr>
<th>Class</th>
<th>'.$row0["Class"].'</th>
<th>Teacher</th>
<th>'.$row0["Teachername"].'</th>
</tr>
<tr>
<th>Roll No.</th>
<th>Ad.No.</th>
<th>Student Name</th>

<th colspan="4">ENGLISH READING SKILL</th>
<th colspan="8">ENGLISH WRITING SKILL</th>
<th colspan="4">ENGLISH SPEAKING SKILL</th>
<th colspan="2">ENGLISH LISTENING SKILL</th>
<th colspan="4">HINDI READING SKILL</th>
<th colspan="8">HINDI WRITING SKILL</th>
<th colspan="4">HINDI SPEAKING SKILL</th>
<th colspan="2">HINDI LISTENING SKILL</th>
<th colspan="8">MATHEMATICS</th>
<th colspan="11">OTHERS</th>


</tr>
<tr>
   <th></th>
   <th></th>
   <th></th>
   <th colspan="2">PRONUNCIATION & FLUENCY</th>
   <th colspan="2">COMPREHENSION</th>
   <th colspan="2">LITERATURE</th>
   <th colspan="2">GRAMMAR</th>
   <th colspan="2">DICTATION/VOCABULARY</th>
   <th colspan="2">HAND WRITING & ASSIGNMENT</th>
  
   <th colspan="2">RECITAION/STORY TELLING</th>
   <th colspan="2">CONVERSATION</th>
   <th colspan="2">COMPREHENSION</th>
   <th colspan="2">PRONUNCIATION & FLUENCY</th>
   <th colspan="2">COMPREHENSION</th>
   <th colspan="2">LITERATURE</th>
   <th colspan="2">GRAMMAR</th>
   <th colspan="2">DICTATION/VOCABULARY</th>
   <th colspan="2">HAND WRITING & ASSIGNMENTS</th>
   <th colspan="2">"RECITATION/STORY TELLING</th>
   <th colspan="2">CONVERSATION</th>
   <th colspan="2">COMPREHENSION</th>
   <th colspan="2">CONCEPT (W)</th>
   <th colspan="2">ACTIVITY</th>
   <th colspan="2">TABLE/MENTAL ABILITY</th>
   <th colspan="2">CLASS & HOME ASSIGNMENTS </th>
   <th colspan="2">E.V.S.</th>
   <th colspan="2">ACTIVITY/PROJECT </th>
   <th colspan="2">G.K.</th>
   <th colspan="2">COMP </th>
   <th colspan="2">DRAWING</th>
    <th colspan="1">VALUE EDUCATION</th>
    <th>Attendance</th>

   <th>
</tr>

<tr>
<th></th>
<th></th>
<th></th>

<th>10.0</th>
<th>G</th>

<th>10.0</th>
<th>G</th>

<th>20.0</th>
<th>G</th>

<th>20.0</th>
<th>G</th>

<th>10.0</th>
<th>G</th>

<th>10.0</th>
<th>G</th>

<th>10.0</th>
<th>G</th>

<th>10.0</th>
<th>G</th>

<th>10.0</th>
<th>G</th>

<th>10.0</th>
<th>G</th>

<th>10.0</th>
<th>G</th>

<th>20.0</th>
<th>G</th>

<th>20.0</th>
<th>G</th>

<th>10.0</th>
<th>G</th>

<th>10.0</th>
<th>G</th>

<th>10.0</th>
<th>G</th>

<th>10.0</th>
<th>G</th>

<th>10.0</th>
<th>G</th>

<th>20.0</th>
<th>G</th>

<th>10.0</th>
<th>G</th>

<th>10.0</th>
<th>G</th>

<th>10.0</th>
<th>G</th>

<th>20.0</th>
<th>G</th>

<th>10.0</th>
<th>G</th>

<th>20.0</th>
<th>G</th>

<th>20.0</th>
<th>G</th>

<th>20.0</th>
<th>G</th>

<th>G</th>

<th></th>
<th></th>
<th></th>
</tr>
</thead>
';

$sanket=0;
while($sanket<=60)
{
$ro1=mysql_fetch_array($r2);
$row1=mysql_fetch_array($basic1);
$row2=mysql_fetch_array($basic2);
$row3=mysql_fetch_array($basic3);
$row4=mysql_fetch_array($basic4);
$row5=mysql_fetch_array($basic5);
$row6=mysql_fetch_array($basic6);
$row7=mysql_fetch_array($basic7);
$row8=mysql_fetch_array($basic8);
$row9=mysql_fetch_array($basic9);
$row10=mysql_fetch_array($basic10);
$row11=mysql_fetch_array($basic11);
$row12=mysql_fetch_array($basic12);
$row13=mysql_fetch_array($basic13);
$row14=mysql_fetch_array($basic14);
$row15=mysql_fetch_array($basic15);
$row16=mysql_fetch_array($basic16);
$row17=mysql_fetch_array($basic17);
$row18=mysql_fetch_array($basic18);
$row19=mysql_fetch_array($basic19);
$row20=mysql_fetch_array($basic20);
$row21=mysql_fetch_array($basic21);
$row22=mysql_fetch_array($basic22);
$row23=mysql_fetch_array($basic23);
$row24=mysql_fetch_array($basic24);
$row25=mysql_fetch_array($basic25);
$row26=mysql_fetch_array($basic26);
$row27=mysql_fetch_array($basic27);
$row28=mysql_fetch_array($basic28);


  $output .= '
<tr>

<th>'.$ro1["rn"].'</th>
<th>'.$ro1["admno"].'</th>

<th>'.$row1["Student_Name"].'</th>
<th>'.$row1["PT_2_remark"].'</th>
<th> '.$row1["PT_2GRADE"].'</th>

<th>'.$row2["PT_2_remark"].'</th>
<th> '.$row2["PT_2GRADE"].'</th>

<th>'.$row3["PT_2_remark"].'</th>
<th> '.$row3["PT_2GRADE"].'</th>

<th>'.$row4["PT_2_remark"].'</th>
<th> '.$row4["PT_2GRADE"].'</th>

<th>'.$row5["PT_2_remark"].'</th>
<th> '.$row5["PT_2GRADE"].'</th>

<th>'.$row6["PT_2_remark"].'</th>
<th> '.$row6["PT_2GRADE"].'</th>

<th>'.$row7["PT_2_remark"].'</th>
<th> '.$row7["PT_2GRADE"].'</th>

<th>'.$row8["PT_2_remark"].'</th>
<th> '.$row8["PT_2GRADE"].'</th>

<th>'.$row9["PT_2_remark"].'</th>
<th> '.$row9["PT_2GRADE"].'</th>

<th>'.$row10["PT_2_remark"].'</th>
<th> '.$row10["PT_2GRADE"].'</th>

<th>'.$row11["PT_2_remark"].'</th>
<th> '.$row11["PT_2GRADE"].'</th>

<th>'.$row12["PT_2_remark"].'</th>
<th> '.$row12["PT_2GRADE"].'</th>

<th>'.$row13["PT_2_remark"].'</th>
<th> '.$row13["PT_2GRADE"].'</th>

<th>'.$row14["PT_2_remark"].'</th>
<th> '.$row14["PT_2GRADE"].'</th>

<th>'.$row15["PT_2_remark"].'</th>
<th> '.$row15["PT_2GRADE"].'</th>

<th>'.$row16["PT_2_remark"].'</th>
<th> '.$row16["PT_2GRADE"].'</th>

<th>'.$row17["PT_2_remark"].'</th>
<th> '.$row17["PT_2GRADE"].'</th>

<th>'.$row18["PT_2_remark"].'</th>
<th> '.$row18["PT_2GRADE"].'</th>

<th>'.$row19["PT_2_remark"].'</th>
<th> '.$row19["PT_2GRADE"].'</th>

<th>'.$row20["PT_2_remark"].'</th>
<th> '.$row20["PT_2GRADE"].'</th>

<th>'.$row21["PT_2_remark"].'</th>
<th> '.$row21["PT_2GRADE"].'</th>

<th>'.$row22["PT_2_remark"].'</th>
<th> '.$row22["PT_2GRADE"].'</th>

<th>'.$row23["PT_2_remark"].'</th>
<th> '.$row23["PT_2GRADE"].'</th>

<th>'.$row24["PT_2_remark"].'</th>
<th> '.$row24["PT_2GRADE"].'</th>

<th>'.$row25["PT_2_remark"].'</th>
<th> '.$row25["PT_2GRADE"].'</th>

<th>'.$row26["PT_2_remark"].'</th>
<th> '.$row26["PT_2GRADE"].'</th>

<th>'.$row27["PT_2_remark"].'</th>
<th> '.$row27["PT_2GRADE"].'</th>

<th> '.$row28["VALUE2"].'</th>

<th> '.$ro1["Attendance"].'</th>

</tr>
';  
$sanket++;
}


$output .='</table>';
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=".$class.".xls");
echo $output;
}

function two($class)
{
$query="select ROLLNO,attendance from LFPS35FINAL WHERE Class='".$class."' AND Subject = 'English' order by Student_Name;";
$basic = mysql_query($query);
if (false === $basic) {
  echo mysql_error();
}


$query1="select * from LFPSREPORTCARD35GS WHERE Class='".$class."' AND Subject = 'English' order by Student_Name;";
$query2="select * from LFPSREPORTCARD35GS WHERE Class='".$class."' AND Subject = 'Hindi' order by Student_Name ;";
$query3="select * from LFPSREPORTCARD35GS WHERE Class='".$class."' AND Subject = 'Maths' order by Student_Name ;";
$query4="select * from LFPSREPORTCARD35GS WHERE Class='".$class."' AND Subject = 'EVS' order by Student_Name ;";
$query5="select * from LFPSREPORTCARD35GS WHERE Class='".$class."' AND Subject = 'GK' order by Student_Name;";
$query6="select * from LFPSREPORTCARD35GS WHERE Class='".$class."' AND Subject = 'Drawing' order by Student_Name ;";
$query7="select * from LFPSREPORTCARD35GS WHERE Class='".$class."' AND Subject = 'Computer' order by Student_Name ;";



$output = '';
$output .='
<table class="table" bordered="1">
<tbody>
<tr>
<th>RollNo</th>
<th colspan="0">ADMNO</th>
<th colspan="0">NAME</th>
<th colspan="6">ENGLISH</th>
<th colspan="6">HINDI</th>
<th colspan="6">MATHS</th>
<th colspan="6">EVS</th>
<th colspan="2">GK</th>
<th colspan="2">DRAWING</th>
<th colspan="2">COMPUTER</th>
<th>Attendance</th>
</tr>

<tr>
   <th></th>
   <th></th>
   <th></th>
   <th>PT(10)</th>
   <th>NS1(5)</th>
   <th>SEA1(5)</th>
   <th>HY(60)</th>
   <th>TOT(80)</th>
   <th>G</th>

    <th>PT(10)</th>
   <th>NS1(5)</th>
   <th>SEA1(5)</th>
   <th>HY(60)</th>
   <th>TOT(80)</th>
   <th>G</th>

    <th>PT(10)</th>
   <th>NS1(5)</th>
   <th>SEA1(5)</th>
   <th>HY(60)</th>
   <th>TOT(80)</th>
   <th>G</th>

    <th>PT(10)</th>
   <th>NS1(5)</th>
   <th>SEA1(5)</th>
   <th>HY(60)</th>
   <th>TOT(80)</th>
   <th>G</th>

   <th>M(40)</th>
   <th>G</th>

   <th>M(50)</th>
   <th>G</th>

   <th>M(60)</th>
   <th>G</th>
   <th></th>
</tr>

</tbody>
';

$basic1 = mysql_query($query1);

if (false === $basic1) {
  echo mysql_error();
}

$basic2 = mysql_query($query2);

if (false === $basic2) {
  echo mysql_error();
}

$basic3= mysql_query($query3);

if (false === $basic3) {
  echo mysql_error();
}

$basic4 = mysql_query($query4);

if (false === $basic4) {
  echo mysql_error();
}

$basic5 = mysql_query($query5);

if (false === $basic5) {
  echo mysql_error();
}


$basic6 = mysql_query($query6);

if (false === $basic6) {
  echo mysql_error();
}

$basic7 = mysql_query($query7);

if (false === $basic7) {
  echo mysql_error();
}

$sanket=0;
while($sanket<=60)
{
$row=mysql_fetch_array($basic);
$row1=mysql_fetch_array($basic1);
$row2=mysql_fetch_array($basic2);
$row3=mysql_fetch_array($basic3);
$row4=mysql_fetch_array($basic4);
$row5=mysql_fetch_array($basic5);
$row6=mysql_fetch_array($basic6);
$row7=mysql_fetch_array($basic7);
if($row1["GRADE"]=='E(Needs Improvement)')
$row1["GRADE"]='E';
if($row2["GRADE"]=='E(Needs Improvement)')
$row2["GRADE"]='E';
if($row3["GRADE"]=='E(Needs Improvement)')
$row3["GRADE"]='E';
if($row4["GRADE"]=='E(Needs Improvement)')
$row4["GRADE"]='E';
if($row5["GRADE"]=='E(Needs Improvement)')
$row5["GRADE"]='E';
if($row6["GRADE"]=='E(Needs Improvement)')
$row6["GRADE"]='E';
if($row7["GRADE"]=='E(Needs Improvement)')
$row7["GRADE"]='E';

  $output .= '
<tr>
<th>'.$row["ROLLNO"].'</th>

<th>'.$row1["Adm_No"].'</th>
<th>'.$row1["Student_name"].'</th>
<th>'.$row1["PT"].'</th>
<th> '.$row1["NS_1"].'</th>
<th> '.$row1["SEA_1"].'</th>
<th> '.$row1["Half_Yearly"].'</th>
<th> '.$row1["MARKS_OBTAINED"].'</th>
<th> '.$row1["GRADE"].'</th>

<th>'.$row2["PT"].'</th>
<th> '.$row2["NS_1"].'</th>
<th> '.$row2["SEA_1"].'</th>
<th> '.$row2["Half_Yearly"].'</th>
<th> '.$row2["MARKS_OBTAINED"].'</th>
<th> '.$row2["GRADE"].'</th>

<th>'.$row3["PT"].'</th>
<th> '.$row3["NS_1"].'</th>
<th> '.$row3["SEA_1"].'</th>
<th> '.$row3["Half_Yearly"].'</th>
<th> '.$row3["MARKS_OBTAINED"].'</th>
<th> '.$row3["GRADE"].'</th>

<th>'.$row4["PT"].'</th>
<th> '.$row4["NS_1"].'</th>
<th> '.$row4["SEA_1"].'</th>
<th> '.$row4["Half_Yearly"].'</th>
<th> '.$row4["MARKS_OBTAINED"].'</th>
<th> '.$row4["GRADE"].'</th>

<th> '.$row5["MARKS_OBTAINED"].'</th>
<th> '.$row5["GRADE"].'</th>

<th> '.$row6["MARKS_OBTAINED"].'</th>
<th> '.$row6["GRADE"].'</th>

<th> '.$row7["MARKS_OBTAINED"].'</th>
<th> '.$row7["GRADE"].'</th>

<th>'.$row["attendance"].'</th>

</tr>
';  
$sanket++;
}

$output .='</table>';
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename='".$class."'.xls");
echo $output;
}

function three($class)
{

//select count(distinct(ID))as count from GREENGRADEALL where Class='".$class."';
$query="select ROLLNO,attendance from LFPS68FINALD WHERE Class='".$class."' AND Subject = 'English' order by Student_Name;";
$basic = mysql_query($query);
if (false === $basic) {
  echo mysql_error();
}

$query0="select * from lfps_teacher WHERE Subject = 'Class' AND Class ='".$class."'";
$basic0= mysql_query($query0);
if (false === $basic0) {
  echo mysql_error();
}
$row0=mysql_fetch_array($basic0);


$query1="select Adm_No,Student_Name,PT_1*2 as PT_1,PT_2*2 as PT_2,PT,NS_1,SEA_1,Half_Yearly,MARKS_OBTAINED,GRADE from LFPSREPORTCARD68GS WHERE Class='".$class."' AND Subject = 'English' order by Student_Name;";
$query2="select Adm_No,Student_Name,PT_1*2 as PT_1,PT_2*2 as PT_2,PT,NS_1,SEA_1,Half_Yearly,MARKS_OBTAINED,GRADE from LFPSREPORTCARD68GS WHERE Class='".$class."' AND Subject = 'Hindi' order by Student_Name ;";
$query3="select Adm_No,Student_Name,PT_1*2 as PT_1,PT_2*2 as PT_2,PT,NS_1,SEA_1,Half_Yearly,MARKS_OBTAINED,GRADE from LFPSREPORTCARD68GS WHERE Class='".$class."' AND Subject = 'Maths' order by Student_Name ;";
$query4="select Adm_No,Student_Name,PT_1*2 as PT_1,PT_2*2 as PT_2,PT,NS_1,SEA_1,Half_Yearly,MARKS_OBTAINED,GRADE from LFPSREPORTCARD68GS WHERE Class='".$class."' AND Subject = 'Sanskrit' order by Student_Name ;";
$query5="select Adm_No,Student_Name,PT_1*2 as PT_1,PT_2*2 as PT_2,PT,NS_1,SEA_1,Half_Yearly,MARKS_OBTAINED,GRADE from LFPSREPORTCARD68GS WHERE Class='".$class."' AND Subject = 'Science' order by Student_Name ;";
$query6="select Adm_No,Student_Name,PT_1*2 as PT_1,PT_2*2 as PT_2,PT,NS_1,SEA_1,Half_Yearly,MARKS_OBTAINED,GRADE from LFPSREPORTCARD68GS WHERE Class='".$class."' AND Subject = 'Social Studies' order by Student_Name ;";
$query7="select Adm_No,Student_Name,PT_1*2 as PT_1,PT_2*2 as PT_2,PT,NS_1,SEA_1,Half_Yearly,MARKS_OBTAINED,GRADE from LFPSREPORTCARD68GS WHERE Class='".$class."' AND Subject = 'GK' order by Student_Name;";
$query8="select Adm_No,Student_Name,PT_1*2 as PT_1,PT_2*2 as PT_2,PT,NS_1,SEA_1,Half_Yearly,MARKS_OBTAINED,GRADE from LFPSREPORTCARD68GS WHERE Class='".$class."' AND Subject = 'Drawing' order by Student_Name ;";
$query9="select Adm_No,Student_Name,PT_1*2 as PT_1,PT_2*2 as PT_2,PT,NS_1,SEA_1,Half_Yearly,MARKS_OBTAINED,GRADE from LFPSREPORTCARD68GS WHERE Class='".$class."' AND Subject = 'Computer' order by Student_Name ;";


$output = '';
$output .='
<table class="table" bordered="1">
<thead>
<tr>
<th>Class</th>
<th>'.$row0["Class"].'</th>
<th>Teacher</th>
<th>'.$row0["Teachername"].'</th>
</tr>
<tr>
<th>Roll No</th>
<th >ADMNO</th>
<th >NAME</th>
<th colspan="8">ENGLISH</th>
<th colspan="8">HINDI</th>
<th colspan="8">MATHS</th>
<th colspan="8">SANSKRIT</th>
<th colspan="8">SCIENCE</th>
<th colspan="8">SOCIAL SCIENCE</th>
<th colspan="2">GK</th>
<th colspan="2">DRAWING</th>
<th colspan="2">COMPUTER</th>
<th>Attendance</th>

</tr>

<tr>
   <th></th>
   <th></th>
   <th></th>

   <th>PT1(20)</th>
   <th>PT2(20)</th>
   <th>PT(10)</th>
   <th>NS1</th>
   <th>SEA1</th>
   <th>HY(80)</th>
   <th>TOT(100)</th>
   <th>G</th>

    <th>PT1(20)</th>
    <th>PT2(20)</th>
    <th>PT(10)</th>
   <th>NS1</th>
   <th>SEA1</th>
   <th>HY(80)</th>
   <th>TOT(100)</th>
   <th>G</th>

   <th>PT1(20)</th>
    <th>PT2(20)</th>
    <th>PT(10)</th>
   <th>NS1</th>
   <th>SEA1</th>
   <th>HY(80)</th>
   <th>TOT(100)</th>
   <th>G</th>

    <th>PT1(20)</th>
    <th>PT2(20)</th>
    <th>PT(10)</th>
    <th>NS1</th>
   <th>SEA1</th>
   <th>HY(80)</th>
   <th>TOT(100)</th>
   <th>G</th>

    <th>PT1(20)</th>
    <th>PT2(20)</th>
    <th>PT(10)</th>
   <th>NS1</th>
   <th>SEA1</th>
   <th>HY(80)</th>
   <th>TOT(100)</th>
   <th>G</th>

   <th>PT1(20)</th>
    <th>PT2(20)</th>
    <th>PT(10)</th>
   <th>NS1</th>
   <th>SEA1</th>
   <th>HY(80)</th>
   <th>TOT(100)</th>
   <th>G</th>

   <th>M(40)</th>
   <th>G</th>

   <th>M(50)</th>
   <th>G</th>

   <th>M(60)</th>
   <th>G</th>
   <th></th>

</tr>

</thead>
';

$basic1 = mysql_query($query1);

if (false === $basic1) {
  echo mysql_error();
}

$basic2 = mysql_query($query2);

if (false === $basic2) {
  echo mysql_error();
}

$basic3= mysql_query($query3);

if (false === $basic3) {
  echo mysql_error();
}

$basic4 = mysql_query($query4);

if (false === $basic4) {
  echo mysql_error();
}

$basic5 = mysql_query($query5);

if (false === $basic5) {
  echo mysql_error();
}


$basic6 = mysql_query($query6);

if (false === $basic6) {
  echo mysql_error();
}

$basic7 = mysql_query($query7);

if (false === $basic7) {
  echo mysql_error();
}

$basic8 = mysql_query($query8);

if (false === $basic8) {
  echo mysql_error();
}

$basic9 = mysql_query($query9);

if (false === $basic9) {
  echo mysql_error();
}
$sanket=0;
while($sanket<=60)
{
$row=mysql_fetch_array($basic);
$row1=mysql_fetch_array($basic1);
$row2=mysql_fetch_array($basic2);
$row3=mysql_fetch_array($basic3);
$row4=mysql_fetch_array($basic4);
$row5=mysql_fetch_array($basic5);
$row6=mysql_fetch_array($basic6);
$row7=mysql_fetch_array($basic7);
$row8=mysql_fetch_array($basic8);
$row9=mysql_fetch_array($basic9);
if($row1["GRADE"]=='E(Needs Improvement)')
$row1["GRADE"]='E';
if($row2["GRADE"]=='E(Needs Improvement)')
$row2["GRADE"]='E';
if($row3["GRADE"]=='E(Needs Improvement)')
$row3["GRADE"]='E';
if($row4["GRADE"]=='E(Needs Improvement)')
$row4["GRADE"]='E';
if($row5["GRADE"]=='E(Needs Improvement)')
$row5["GRADE"]='E';
if($row6["GRADE"]=='E(Needs Improvement)')
$row6["GRADE"]='E';
if($row7["GRADE"]=='E(Needs Improvement)')
$row7["GRADE"]='E';
if($row8["GRADE"]=='E(Needs Improvement)')
$row8["GRADE"]='E';
if($row9["GRADE"]=='E(Needs Improvement)')
$row9["GRADE"]='E';

  $output .= '
<tr>
<th>'.$row["ROLLNO"].'</th>
<th>'.$row1["Adm_No"].'</th>
<th>'.$row1["Student_Name"].'</th>
<th> '.$row1["PT_1"].'</th>
<th>'.$row1["PT_2"].'</th>
<th>'.$row1["PT"].'</th>
<th> '.$row1["NS_1"].'</th>
<th> '.$row1["SEA_1"].'</th>
<th> '.$row1["Half_Yearly"].'</th>
<th> '.$row1["MARKS_OBTAINED"].'</th>
<th> '.$row1["GRADE"].'</th>

<th> '.$row2["PT_1"].'</th>
<th>'.$row2["PT_2"].'</th>
<th>'.$row2["PT"].'</th>
<th> '.$row2["NS_1"].'</th>
<th> '.$row2["SEA_1"].'</th>
<th> '.$row2["Half_Yearly"].'</th>
<th> '.$row2["MARKS_OBTAINED"].'</th>
<th> '.$row2["GRADE"].'</th>

<th> '.$row3["PT_1"].'</th>
<th>'.$row3["PT_2"].'</th>
<th>'.$row3["PT"].'</th>
<th> '.$row3["NS_1"].'</th>
<th> '.$row3["SEA_1"].'</th>
<th> '.$row3["Half_Yearly"].'</th>
<th> '.$row3["MARKS_OBTAINED"].'</th>
<th> '.$row3["GRADE"].'</th>

<th> '.$row4["PT_1"].'</th>
<th>'.$row4["PT_2"].'</th>
<th>'.$row4["PT"].'</th>
<th> '.$row4["NS_1"].'</th>
<th> '.$row4["SEA_1"].'</th>
<th> '.$row4["Half_Yearly"].'</th>
<th> '.$row4["MARKS_OBTAINED"].'</th>
<th> '.$row4["GRADE"].'</th>

<th> '.$row5["PT_1"].'</th>
<th>'.$row5["PT_2"].'</th>
<th>'.$row5["PT"].'</th>
<th> '.$row5["NS_1"].'</th>
<th> '.$row5["SEA_1"].'</th>
<th> '.$row5["Half_Yearly"].'</th>
<th> '.$row5["MARKS_OBTAINED"].'</th>
<th> '.$row5["GRADE"].'</th>

<th> '.$row6["PT_1"].'</th>
<th>'.$row6["PT_2"].'</th>
<th>'.$row6["PT"].'</th>
<th> '.$row6["NS_1"].'</th>
<th> '.$row6["SEA_1"].'</th>
<th> '.$row6["Half_Yearly"].'</th>
<th> '.$row6["MARKS_OBTAINED"].'</th>
<th> '.$row6["GRADE"].'</th>

<th> '.$row7["MARKS_OBTAINED"].'</th>
<th> '.$row7["GRADE"].'</th>

<th> '.$row8["MARKS_OBTAINED"].'</th>
<th> '.$row8["GRADE"].'</th>

<th> '.$row9["MARKS_OBTAINED"].'</th>
<th> '.$row9["GRADE"].'</th>

<th>'.$row["attendance"].'</th>

</tr>
';  
$sanket++;
}


$output .='</table>';
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename='".$class."'.xls");
echo $output;
}


function ramg($class)
{
$query0="select * from lfps_teacher WHERE Subject = 'Class' AND Class ='".$class."'";
$basic0= mysql_query($query0);
if (false === $basic0) {
  echo mysql_error();
}
$row0=mysql_fetch_array($basic0);
//select count(distinct(ID))as count from GREENGRADEALL where Class='".$class."';
$q2="select ROLLNO,admno,Student_Name,attendance from LFPS35FINAL WHERE Class='".$class."' group by ROLLNO; ";
$r2= mysql_query($q2);
if (false === $r2) {
  echo mysql_error();
}
$q3 = "select * from  LFPSREPORTCARD35GP WHERE Class='".$class."' AND Subject = 'English'  order by Student_Name;";
$r3 = mysql_query($q3);
if (false === $r3) {
  echo mysql_error();
}
$q4 = "select * from  LFPSREPORTCARD35GP WHERE Class='".$class."' AND Subject = 'Hindi'  order by Student_Name;";
$r4 = mysql_query($q4);
if (false === $r4) {
  echo mysql_error();
}
$q5 = "select * from  LFPSREPORTCARD35GP WHERE Class='".$class."' AND Subject = 'Maths'  order by Student_Name;";
$r5 = mysql_query($q5);
if (false === $r5) {
  echo mysql_error();
}
$q6 = "select * from  LFPSREPORTCARD35GP WHERE Class='".$class."' AND Subject = 'Sanskrit'  order by Student_Name;";

$r6 = mysql_query($q6);
if (false === $r6) {
  echo mysql_error();
}
$q7 = "select * from  LFPSREPORTCARD35GP WHERE Class='".$class."' AND Subject ='Science'  order by Student_Name;";
$r7 = mysql_query($q7);
if (false === $r7) {
  echo mysql_error();
}
$q8 = "select * from  LFPSREPORTCARD35GP WHERE Class='".$class."' AND Subject = 'Social Studies'  order by Student_Name;";

$r8 = mysql_query($q8);
if (false === $r8) {
  echo mysql_error();
}
$q9 = "select * from  LFPSREPORTCARD35GP WHERE Class='".$class."' AND Subject = 'GK'  order by Student_Name;";
$r9 = mysql_query($q9);
if (false === $r9) {
  echo mysql_error();
}
$q10 = "select * from  LFPSREPORTCARD35GP WHERE Class='".$class."' AND Subject = 'Drawing'  order by Student_Name;";
$r10 = mysql_query($q10);
if (false === $r10) {
  echo mysql_error();
}
$q11 = "select * from  LFPSREPORTCARD35GP WHERE Class='".$class."' AND Subject = 'Computer'  order by Student_Name;";
$r11 = mysql_query($q11);
if (false === $r11) {
  echo mysql_error();
}

$output = '';
$output .='
<table class="table" bordered="1">
<thead>
<tr>
<th>Class</th>
<th>'.$row0["Class"].'</th>

<th>Teacher</th>
<th>'.$row0["Teachername"].'</th>

</tr>
<tr>
<th>Roll No</th>
<th >ADMNO</th>
<th >NAME</th>
<th colspan="6">ENGLISH</th>
<th colspan="6">HINDI</th>
<th colspan="6">MATHS</th>
<th colspan="6">SANSKRIT</th>
<th colspan="6">SCIENCE</th>
<th colspan="6">SOCIAL SCIENCE</th>
<th colspan="2">GK</th>
<th colspan="2">DRAWING</th>
<th colspan="2">COMPUTER</th>
<th>Attendance</th>

</tr>

<tr>
   
   <th></th>
   <th></th>
   <th></th>

   <th>PT(10)</th>
   <th>NS1</th>
   <th>SEA1</th>
   <th>HY(80)</th>
   <th>TOT(100)</th>
   <th>G</th>

    <th>PT(10)</th>
   <th>NS1</th>
   <th>SEA1</th>
   <th>HY(80)</th>
   <th>TOT(100)</th>
   <th>G</th>

   <th>PT(10)</th>
   <th>NS1</th>
   <th>SEA1</th>
   <th>HY(80)</th>
   <th>TOT(100)</th>
   <th>G</th>

    <th>PT(10)</th>
    <th>NS1</th>
   <th>SEA1</th>
   <th>HY(80)</th>
   <th>TOT(100)</th>
   <th>G</th>

    <th>PT(10)</th>
   <th>NS1</th>
   <th>SEA1</th>
   <th>HY(80)</th>
   <th>TOT(100)</th>
   <th>G</th>

    <th>PT(10)</th>
   <th>NS1</th>
   <th>SEA1</th>
   <th>HY(80)</th>
   <th>TOT(100)</th>
   <th>G</th>

   <th>M(40)</th>
   <th>G</th>

   <th>M(50)</th>
   <th>G</th>

   <th>M(60)</th>
   <th>G</th>
   <th></th>

</tr>
</thead>
';

$sanket=0;
while($sanket<=60)
{
$ro1=mysql_fetch_array($r2);
$row1=mysql_fetch_array($r3);
$row2=mysql_fetch_array($r4);
$row3=mysql_fetch_array($r5);
$row4=mysql_fetch_array($r6);
$row5=mysql_fetch_array($r7);
$row6=mysql_fetch_array($r8);
$row7=mysql_fetch_array($r9);
$row8=mysql_fetch_array($r10);
$row9=mysql_fetch_array($r11);

if($row1["GRADE1"]=='E(Needs Improvement)')
$row1["GRADE1"]='E';
if($row2["GRADE1"]=='E(Needs Improvement)')
$row2["GRADE1"]='E';
if($row3["GRADE1"]=='E(Needs Improvement)')
$row3["GRADE1"]='E';
if($row4["GRADE1"]=='E(Needs Improvement)')
$row4["GRADE1"]='E';
if($row5["GRADE1"]=='E(Needs Improvement)')
$row5["GRADE1"]='E';
if($row6["GRADE1"]=='E(Needs Improvement)')
$row6["GRADE1"]='E';
if($row7["GRADE1"]=='E(Needs Improvement)')
$row7["GRADE1"]='E';
if($row8["GRADE1"]=='E(Needs Improvement)')
$row8["GRADE1"]='E';
if($row9["GRADE1"]=='E(Needs Improvement)')
$row9["GRADE1"]='E';

  $output .= '
<tr>
<th>'.$ro1["ROLLNO"].'</th>
<th>'.$ro1["admno"].'</th>
<th>'.$ro1["Student_name"].' </th>

<th>'.$row1["PT"].'</th>
<th> '.$row1["NS_1"].'</th>
<th> '.$row1["SEA_1"].'</th>
<th> '.$row1["Half_Yearly"].'</th>
<th> '.$row1["MARKS_OBTAINED"].'</th>
<th> '.$row1["GRADE1"].'</th>

<th>'.$row2["PT"].'</th>
<th> '.$row2["NS_1"].'</th>
<th> '.$row2["SEA_1"].'</th>
<th> '.$row2["Half_Yearly"].'</th>
<th> '.$row2["MARKS_OBTAINED"].'</th>
<th> '.$row2["GRADE1"].'</th>

<th>'.$row3["PT"].'</th>
<th> '.$row3["NS_1"].'</th>
<th> '.$row3["SEA_1"].'</th>
<th> '.$row3["Half_Yearly"].'</th>
<th> '.$row3["MARKS_OBTAINED"].'</th>
<th> '.$row3["GRADE1"].'</th>

<th>'.$row4["PT"].'</th>
<th> '.$row4["NS_1"].'</th>
<th> '.$row4["SEA_1"].'</th>
<th> '.$row4["Half_Yearly"].'</th>
<th> '.$row4["MARKS_OBTAINED"].'</th>
<th> '.$row4["GRADE1"].'</th>

<th>'.$row5["PT"].'</th>
<th> '.$row5["NS_1"].'</th>
<th> '.$row5["SEA_1"].'</th>
<th> '.$row5["Half_Yearly"].'</th>
<th> '.$row5["MARKS_OBTAINED"].'</th>
<th> '.$row5["GRADE1"].'</th>

<th>'.$row6["PT"].'</th>
<th> '.$row6["NS_1"].'</th>
<th> '.$row6["SEA_1"].'</th>
<th> '.$row6["Half_Yearly"].'</th>
<th> '.$row6["MARKS_OBTAINED"].'</th>
<th> '.$row6["GRADE1"].'</th>

<th> '.$row7["MARKS_OBTAINED"].'</th>
<th> '.$row7["GRADE1"].'</th>

<th> '.$row8["MARKS_OBTAINED"].'</th>
<th> '.$row8["GRADE1"].'</th>

<th> '.$row9["MARKS_OBTAINED"].'</th>
<th> '.$row9["GRADE1"].'</th>

<th>'.$ro1["attendance"].'</th>

</tr>
';  
$sanket++;
}

$output .='</table>';
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename='".$class."'.xls");
echo $output;

}



?>

<?php
$class=$_POST['classes'];
if((substr($class,0,1) == '1')||(substr($class,0,1) == '2' ))
  one($class);
else if((substr($class,0,1) == '3')||(substr($class,0,1) == '4'))
  two($class);
else if((substr($class,0,1) == '5'))
  ramg($class);
  else
  three($class);
?>