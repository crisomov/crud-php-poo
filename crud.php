<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Document</title>
</head>
<body>
    
<nav>

<ul>
    <li><a href="http://localhost/projects/crud-php-poo/crud.php?menu=home">Home</a>
    <li><a href="http://localhost/projects/crud-php-poo/crud.php?menu=create">Create</a>
    <li><a href="http://localhost/projects/crud-php-poo/crud.php?menu=read">Read</a>
    <li><a href="http://localhost/projects/crud-php-poo/crud.php?menu=update">Update</a>
    <li><a href="http://localhost/projects/crud-php-poo/crud.php?menu=delete">Delete</a>
    </li>
</ul>


</nav>


<?php

error_reporting(0);

if($_GET['menu']=="home"){


echo phpinfo();

    

}

if($_GET['menu']=="create"){

    include("create-form.php");

    if($_POST['aceptar']){

        require_once("automovil-class.php");
        
        $auto = new Automovil();    
        
        $response=$auto->CreateCar($_POST['marca'],
                                    $_POST['color'],
                                    $_POST['agno'],
                                    $_POST['motor']);        
        echo $response;   
        
        }
}


if($_GET['menu']=="read"){

    require_once("automovil-class.php");
    
    $auto = new Automovil();    
    
    $rs_read=$auto->ReadCars();        
    
    if(isset($rs_read)){
       
       echo "<table class='table'>";
       echo "<tr>";
       echo "<th>ID</th>";
       echo "<th>Marca</th>";
       echo "<th>Color</th>";
       echo "<th>Año</th>";
       echo "<th>Motor</th>";
       echo "</tr>";
       
       while ($row = $rs_read->fetch_assoc()) {

        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['marca']."</td>";
        echo "<td>".$row['color']."</td>";
        echo "<td>".$row['agno']."</td>";
        echo "<td>".$row['motor']."</td>";
        echo "</tr>";
    }
  
    echo "</table>";
}

}

if($_GET['menu']=="update"){

   
require_once("automovil-class.php");

$auto = new Automovil();

$rs_read=$auto->ReadCars();


if(isset($rs_read)){
    
    echo "<div class='div-roll'>";
    echo "<table class='table-update'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Marca</th>";
    echo "<th>Color</th>";
    echo "<th>Año</th>";
    echo "<th>Motor</th>";
    echo "</tr>";
    
    while ($row = $rs_read->fetch_assoc()) {

     echo "<tr>";
     $id=$row['id'];
     echo "<td><a href='http://localhost/projects/crud-php-poo/crud.php?id=$id'>" . $row['id'] . "</a>"."</td>";
     echo "<td>".$row['marca']."</td>";
     echo "<td>".$row['color']."</td>";
     echo "<td>".$row['agno']."</td>";
     echo "<td>".$row['motor']."</td>";
     echo "</tr>";
 }

 echo "</table>";
 echo "</div>";

}

}


if(isset($_GET['id'])){

    include("automovil-class.php");

    $auto=new Automovil();

    $rs_row_id=$auto->UpdateCarId($_GET['id']);

    while($row_selected=$rs_row_id->fetch_assoc()){

        $id=$row_selected['id'];
        $marca=$row_selected['marca'];
        $color=$row_selected['color'];
        $agno=$row_selected['agno'];
        $motor=$row_selected['motor'];
        
        echo "<div class='box-form'>";
        echo "<form action='' method='post'>";
        echo "<label for=''>Update to:</label>";
        echo "<br>";
        echo "<input id='id' type='text' name='id' value='$id' readonly/>";
        echo "<br>";
        echo "<input id='marca' type='text' name='marca' value='$marca'/>";
        echo "<br>";
        echo "<input id='color' type='text' name='color' value='$color'/>";
        echo "<br>";
        echo "<input id='agno' type='text' name='agno' value='$agno'/>";
        echo "<br>";
        echo "<input id='motor' type='text' name='motor' value='$motor'/>";
        echo "<br>";
        echo "<input type='submit' value='Update' name='update'/>"; 
        echo "</form>";
        echo "</div>";


    }

}


if(isset($_POST['update'])){

    echo "<hr>";
  
    require_once("automovil-class.php");

    $auto=new Automovil();

    $rs_update_car=$auto->UpdateCar($_POST['id'],$_POST['marca'],$_POST['color'],$_POST['agno'],$_POST['motor']);

    echo $rs_update_car;

}


if($_GET['menu']=='delete'){


       echo "<div class='box-form'>";
        echo "<form action='' method='post'>";
        echo "<label for=''>ID Delete to:</label>";
        echo "<br>";
        echo "<input id='id' type='text' name='id'/>";
        echo "<br>";
        echo "<input type='submit' value='Delete' name='delete'/>"; 
        echo "</form>";
        echo "</div>";
}


if($_POST['delete']){

    require_once("automovil-class.php");

    $auto=new Automovil();

    $rs_del_car=$auto->DeleteCar($_POST['id']);

    echo "<hr>";

    echo $rs_del_car;
     
}


?>


</body>
</html>
