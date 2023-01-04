<?php
  $DB_Connection = mysqli_connect('localhost', 'Test1', 'Test', 'profilemakertest');
  $sql = "INSERT INTO userprofilestest(PFP, NAME, STATUS) VALUES('hihi', 'Namjofghte', 'Making a wfghfebsite')";
  mysqli_query($DB_Connection, $sql)

?>