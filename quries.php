<?php
$username = "root"; 
$password = "m9YhAP0DLQRi";   
$host = "52.26.225.238";
$database="bitnami_moodle";
$server = mysql_connect($host, $username, $password);
$connection = mysql_select_db($database, $server);
mysql_query("DROP TABLE IF EXISTS lfpsreportcard68gsnewt");
mysql_query("CREATE TABLE lfpsreportcard68gsnewt AS SELECT * FROM bitnami_moodle.lfpsreportcard68gsnew;") or die(mysql_error());
mysql_query("DROP TABLE IF EXISTS LFPSREPORTCARD35GSNEWT");
mysql_query("CREATE TABLE LFPSREPORTCARD35GSNEWT AS SELECT * FROM LFPSREPORTCARD35GSNEW;") or die(mysql_error());
mysql_query("DROP TABLE IF EXISTS LFPSREPORTCARD5GSNEWT");
mysql_query("CREATE TABLE LFPSREPORTCARD5GSNEWT AS SELECT * FROM LFPSREPORTCARD5GSNEW;") or die(mysql_error());
?>