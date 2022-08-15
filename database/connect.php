<?php
function connect(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "project1";

  $dblink = mysqli_connect($servername, $username, $password, $database)or die("Could not connect".mysqli_connect_error());
  return $dblink;
}

// This function sets data into the database
function setData($query){
  $link= connect();
  if (mysqli_query($link, $query)) {
    echo "success";
  }else {
    printf("error", mysqli_error($link));
  }
}
 ?>
