<?php


Class Automovil{


private string $marca;
private string $color;
private int $agno;
private int $motor;





public function CreateCar($marca,$color,$agno,$motor){


include("conexion-class.php");

$query_insert="INSERT INTO autos (id,marca,color,agno,motor)
              VALUES(null,'$marca','$color',$agno,$motor)";

$cnn1=new Conexion();

$mysql=$cnn1->getConnection();

$rs_insert=$mysql->query($query_insert);

if(!$rs_insert){

    return mysql_errno($cnn1) . ": " . mysql_error($cnn1) . "\n";

}else{

    return $rs_insert;

}

}
public function ReadCars(){


    include("conexion-class.php");
    
    $query_read="SELECT * FROM autos";
    
    $cnn2=new Conexion();
    
    $mysql=$cnn2->getConnection();
    
    $rs_read=$mysql->query($query_read);
    
    if(!$rs_read){
    
        return mysql_errno($cnn2) . ": " . mysql_error($cnn2) . "\n";
    
    }else{
    
        return $rs_read;
    
    }

}


public function UpdateCarId($id){


    include("conexion-class.php");

    $cnn3=new Conexion();

    $objConn=$cnn3->getConnection();

    $query_id = "SELECT * FROM autos WHERE id=$id";

    $rs_row_id=$objConn->query($query_id);

    return $rs_row_id;

}



public function UpdateCar($id,$marca,$color,$agno,$motor){


    // return $id."|".$marca."|".$color;


    require_once("conexion-class.php");

    $cnn4=new Conexion();

    $objConn=$cnn4->getConnection();

    $query_update_car="UPDATE autos SET marca = '$marca',
                                        color = '$color',
                                        agno = '$agno',
                                        motor = '$motor'
                                    WHERE
                                        id = $id";


$rs_update_car=$objConn->query($query_update_car);

if(!$rs_update_car){

    return mysql_errno($cnn4) . ": " . mysql_error($cnn4) . "\n";

}else{

    return "row updated successfully";

}

}


public function DeleteCar($id){

   require_once("conexion-class.php");

   $cnn5=new Conexion();

   $objConn=$cnn5->getConnection();

   $query_del="DELETE FROM autos WHERE id=$id";

   $rs_del_car=$objConn->query($query_del);

   if(!$rs_del_car){

    return mysql_errno($cnn5) . ": " . mysql_error($cnn5) . "\n";

    }else{

        return "row deleted successfully";

    }

}



}




?>