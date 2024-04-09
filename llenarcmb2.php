<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])){
  $valor = $_POST["valor"];//Obtener el valor del select seleccionado
  
  switch ($valor) {
    case 1:
      $error=0;
      $mensaje = "Mostrando Opciones";
      $datos="<option value=''>- Seleccione -</option>";
      $datos = $datos."<option value='1'>- Opcion A. 1 -</option>";
      $datos = $datos."<option value='2'>- Opcion A. 2 -</option>";
      $datos = $datos."<option value='3'>- Opcion A. 3 -</option>";
      break;

    case 2:
      $error=0;
      $mensaje = "Mostrando Opciones";
      $datos="<option value=''>- Seleccione -</option>";
      $datos = $datos."<option value='1'>- Opcion B. 1 -</option>";
      $datos = $datos."<option value='2'>- Opcion B. 2 -</option>";
      $datos = $datos."<option value='3'>- Opcion B. 3 -</option>";
      break;

    case 3:
      $error=0;
      $mensaje = "Mostrando Opciones";
      $datos="<option value=''>- Seleccione -</option>";
      $datos = $datos."<option value='1'>- Opcion C. 1 -</option>";
      $datos = $datos."<option value='2'>- Opcion C. 2 -</option>";
      $datos = $datos."<option value='3'>- Opcion C. 3 -</option>";
      break;
    default:
      // code...
      break;
  }

  //generar un array para devolver
  $resp = [
  "error"=>$error,
  "mensaje"=>$mensaje,
  "datos"=>$datos
];

 echo json_encode($resp);//Devolver como formato JSON
}
?>
