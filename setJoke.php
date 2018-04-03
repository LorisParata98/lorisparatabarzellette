<?php
  include("db_info.php");
  $joketext= $_GET["joketext"];
 // $jokedate= date("Y-m-d");
  $idauthor= $_GET["idauthor"];
  $likes=0;



  $conn->query("SET NAMES 'utf8'");
  $sql = "INSERT INTO joke (joketext, jokedate, idauthor, likes)
  VALUES ('$joketext', NOW(), $idauthor, $likes);";
  $result = $conn->query($sql) or die (mysqli_error($conn));
  $check_autore= $conn->query("SELECT idauthor from author where idauthor='$idauthor'");
  if($check_autore){
    if($result)
      header("location: index.php");
  }
  else
    echo "<script type='text/javascript'>alert('WEI CUSCI VI CA STA SCERRI. STATTE CCORTU');</script>";