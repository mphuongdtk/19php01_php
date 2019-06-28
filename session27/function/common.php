<?php 
    function checkExistNameProduct($name, $connect){
      $sql = "SELECT name FROM products_19php WHERE name = '$name'";
      $result = mysqli_query($connect, $sql);
      return $result->num_rows;
    }
?>