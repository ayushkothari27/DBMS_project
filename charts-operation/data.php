<?php
      include '../db_connection.php';
      $conn = OpenCon();
      $sql = "SELECT committee,COUNT(*) as cnt FROM events GROUP BY committee";
      $result = $conn->query($sql);

      $data = array();
      foreach ($result as $row) {
      	$data[] = $row;
      }
      CloseCon($conn);
      echo json_encode($data);
?>
