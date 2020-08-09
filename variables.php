<?php
    include 'index.php';
    include 'p.php';
    include 'dbService.php';
    $cuont = "UPDATE `howmeny` SET `count`= math  WHERE count 1";
    
    mysql_query($cuont);
?>