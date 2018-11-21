<?php
require_once("../core/config.php");

function getFila($sql){
        $link=  conectar();     ///DEVUELVE LA FILA DE LA CONSULTA SQL///
	$tabla= $link->query($sql);
	$fila = $tabla->fetch_array(MYSQLI_BOTH);
	return $fila;
}

function getTabla($tabla){
        $link=  conectar();
	$sql="SELECT * FROM ".$tabla;
	$res = $link->query($sql);
	if (!$res) {
		echo $link->error;
		return null;
	}
	else{
		return $res;
	}
}

function sqlUpdate($table,$campo, $valor, $campoId, $id){
	$link=conectar();
	$sql="UPDATE ".$table." SET ".$campo."='".$valor."' WHERE ".$campoId."='".$id."'";
	$res = $link->query($sql);
	if (!$res) {
		echo $link->error;
		return false;
	}
	else{
		return true;
	}
        cerrar($link);
}


function getFilaSql($table,$campoId,$id){
	$link=conectar();
	$consulta="SELECT * FROM ".$table." WHERE ".$campoId."='".$id."'";
		if ($result= $link->query($consulta)){
			$fila=$result->fetch_array(MYSQLI_BOTH);
			liberar($result);
			cerrar($link);
			return $fila;	
		}
		else{
			return false;
		}
}


function getResultSQL($sql){
        $link=conectar();
	$res = $link->query($sql);
	if (!$res) {
		echo $link->error;
                cerrar($link);
		return $res;
                liberar($resultado);
	}
	else{
		return $res;
	}
}

function getFilaSql2($sql){
                $link=conectar();
		if ($result= $link->query($sql)){
			$fila=$result->fetch_array(MYSQLI_BOTH);
			liberar($result);
			return $fila;
		}
		else{
			return false;
		}
}

function getTablaWhere($table,$campoId,$id){
        $link=conectar();
	$consulta="SELECT * FROM ".$table." WHERE ".$campoId."='".$id."' ORDER BY ".$campoId." ASC";
		return $link->query($consulta);
}

function getTablaWhereDesc($table,$campoId,$id){
        $link=conectar();
	$consulta="SELECT * FROM ".$table." WHERE ".$campoId."='".$id."' ORDER BY ".$campoId." DESC";
	return $link->query($consulta);
}

function formatoMoneda($monto){
	return "$ ".number_format($monto,'2','.',',');	
}

function getTablaDesc($tabla,$id){
        $link=  conectar();
	$sql="SELECT * FROM ".$tabla." ORDER BY ".$id." DESC";
	$res = $link->query($sql);
	if (!$res) {
		echo $link->error;
		return null;
	}
	else{
		return $res;
	}
}

?>
