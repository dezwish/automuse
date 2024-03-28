<?php

  include('./server/connection.php');

  $stmt =  $conn->prepare("SELECT * FROM vehicle LIMIT 10");

  $stmt->execute();

  $featured = $stmt->get_result();

  
