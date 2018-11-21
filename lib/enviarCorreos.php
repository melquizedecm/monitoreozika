<?php
require_once '../lib/links.php';
libnivel2();

function enviarCorreoInformativo($idSolicitud){

 //////////////////////////ENVIAR CORREO///////////////////////////////////////
 require_once '../model/ClassSolicitudCompleta';
 $Solicitud = new ClassSolicitudCompleta();
 $filaSolicitud= $Solicitud->getFilaSolicitud($idSolicitud);
 
$idSolicitud=$filaSolicitud['idSolicitud'];
$problema=   $filaSolicitud['problema'];
 
    $destino=$correo.', dbaquedano@itsprogreso.edu.mx';
    //$destino='mmoo@itsprogreso.com';
    $asunto="SOLICITUD DE MANTENIMIENTO No. ".$idSolicitud;
    
    $mensaje="Usuario: '".$nombre."'"
            . "\r\n"
            . "Edificio: '".$edificio."'"
            . "\r\n"
            . "Area: '".$area."'"
            . "\r\n"
            . "Inventario: '".$inventario."'"
            . "\r\n"
            . "Problema: '".$problema."'"
            . "\r\n"
            . "Comentario: '".$comentarios."'";
    
    if($status=='2'){
        $filaOrden= getFilaSql("orden", "idSolicitud", $idSolicitud);
        $filaUsuario = getFilaSql("usuario", "usuario", $asignado);
        
        $mensaje2="\r\n"
            . " SE HA REALIZADO UNA ORDEN DE SERVICIO"
            . "Servicio: '".$servicio."'"
            . "\r\n"
            . "Tipo de servicio: '".$tipoServicio."'"
            . "\r\n"
            . "Asignado: '".$filaUsuario['nombre']."' "
            . "\r\n";
        $mensaje= $mensaje2.$mensaje;
        
    }
    if($status=='3'){
         $filaOrden= getFilaSql("orden", "idSolicitud", $idSolicitud);
        $mensaje3="SU SOLICITUD AUN ESTA EN PROCESO POR FAVOR ESPERE"
                . "\r\n"
                . "TRABAJO REALIZADO HASTA AHORA: '".$actividad."' ";
        $mensaje=$mensaje3.$mensaje;
    }
    if($status=='4'){
        $mensaje4="SU SOLICITUD HA SIDO TERMINADA PRO FAVOR DE CLICK EN SIGUEINTE LINK SI:"
                . "\r\n"
                . "SU PROBLEMA FUE ARREGLADO: xxxx"
                . "\r\n"
                . "SU PROBLEMA NO FUE ARREGLADO: xxxxx";
        $mensaje= $mensaje.$mensaje4;
    }
    if($status=='5'){
        $filaOrden= getFilaSql("orden", "idSolicitud", $idSolicitud);
        
        
    }
    
    
    
    $headers = "From: mantenimientotec@itsprogreso.edu.mx" . "\r\n" 
               . "To: '".$correo."'"
               . "CC: dbaquedano@itsprogreso.edu.mx";
    
    mail($destino, $asunto, $mensaje, $headers);
}
    function enviarSolicitud(){
        
    }
    
     function enviarOrden(){
        
    }
    
     function enviarSegumiento(){
        
    }

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

