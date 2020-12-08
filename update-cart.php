<?php

if(!isset($_SESSION))
  {
    session_start();
  }

include 'connection.php';
$conn = Connect();

$F_ID = $_GET['id'];
$action = $_GET['action'];




$sql = "SELECT quantity FROM food WHERE F_id = ".$F_ID;

$result = mysqli_query($conn, $sql);


if($result){

  if($obj = mysqli_fetch_assoc($result)) {

    switch($action) {

      case "add":
      if($_SESSION['Cart'][$F_ID]+1 <= $row["quantity"])
        $_SESSION['Cart'][$F_ID]++;
      break;

      case "remove":
      $_SESSION['Cart'][$F_ID]--;
      if($_SESSION['Cart'][$F_ID] == 0)
        unset($_SESSION['Cart'][$F_ID]);
        break;



    }
  }
}



header("location:cart.php");

?>
