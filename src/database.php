<?php
//povezava na bazo
  $username = 'root';
  $password = '';
  $database = 'filmden';
  $server = 'localhost';
//povezali smo se na bazasdasdas
  $link = mysqli_connect($server, $username, $password, $database);
//težava php in utf-8
  mysqli_query($link, "SET NAMES 'utf8'");
//povezava je uspešna in končana
?>
