<?php
include "../php/common/config.php";

$query = "SELECT category ,count(createat) as count FROM `case` GROUP BY category";

$result = mysqli_query($link,$query);
// print_r($result);
$emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
      echo json_encode($emparray);

?>