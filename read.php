<?php

    require_once("clases.php");

    $conn4=new Automovil();

    $rs_read=$conn4->read_cars();

    if(isset($rs_read)){
    
        while ($row = $rs_read->fetch_assoc()) {
            echo " id = " . $row['id'];
            echo "<br>";
            echo " marca = " . $row['marca'];
            echo "<br>";
            echo " color = " . $row['color'];
            echo "<br>";
            echo " agno = " . $row['agno'];
            echo "<br>";
            echo " motor = " . $row['motor'];
            echo "<br>";
        }
}




?>