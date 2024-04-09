<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center><h1>Llenar 1 select seleccionando otro.</h1></center>
    <div class="col1">
      <select class="" name="cmb1" id="cmb1" onchange="javascript:llenar_cmb2();">
        <option value="">Seleccione</option>
        <option value="1">A</option>
        <option value="2">B</option>
        <option value="3">C</option>
      </select>
    </div>
    <div class="col2">
      <select class="" name="cmb2" id="cmb2" onchange="javascript:seleccionado();">
        <option value="">Seleccione</option>
      </select>
    </div>
  </body>

  <script>
    function llenar_cmb2() {
      var valor= document.getElementById("cmb1").value;

      if (valor !== ""){
        $.ajax({
          url: "llenarcmb2.php",
          type: "POST",
          data: "valor="+valor,
          success: function(resp){
            datos=JSON.parse(resp);
            console.log(resp);
            if (datos.error==0){
              $("#cmb2").html(datos.datos)
            }
          }
        })
      }
    }

    function seleccionado() {
      var cmb = document.getElementById("cmb2");
      var seleccionado = cmb.options[cmb.selectedIndex].text;
      alert(seleccionado);
    }
  </script>

  <link rel="stylesheet" href="ejemplo.css">
  <script src="jquery-2.1.3.js"></script>
</html>
