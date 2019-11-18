
<?php
include_once 'public/headerRol.php';
?>


  <br /><br />
  <div class="container" style="width:600px;">


   <form method="post"  action="?controlador=Item&accion=crearRole" id="framework_form">

       <div class="form-group" id="user-group">
           <input type="text" class="form-control" placeholder="Codigo Roll" id="codigoRole" name="codigoRole" required=""/>
       </div> 

       <div class="form-group" id="user-group">
           <input type="text" class="form-control" placeholder="Nombre Rol" id="nombreRol" name="nombreRol" required=""/>
       </div>


       <div class="form-group" id="user-group">
           <input type="text" class="form-control" placeholder="Usuario Asignar" id="empleado" name="empleado" required=""/>
       </div> 



       <div class="form-group">
           <label>Seleccione uno/varios privilegios</label>
           <br>

           <select id="framework" name="framework[]" multiple="multiple" class="form-control" required="" >
               <option  value="1">Insertar</option>
               <option  value="2">Modificar</option>
               <option  value="3">Eliminar</option>
               <option  value="4">Consultar</option>
               <option  value="5">Combos</option>
               
           </select>


       </div>
       <div class="form-group">
           <input type="submit" class="btn btn-primary" name="submit" value="Enviar"  href="javascript:;" onclick="js_roles($('#framework1[]').val());return false;"

       </div>
   </form>


   <div   class="alert alert-success" role="alert">
       <img src="public/static/img/atras.png" th:src="@{public/static/img/atras.png}"/>
       <a href="?controlador=Item&accion=vistaAdmin">Regresar</a>
   </div>

   <br />
  </div>



<script>
$(document).ready(function(){
 $('#framework').multiselect({
  nonSelectedText: 'Privilegios',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
// $('#framework_form').on('submit', function(event){
//  event.preventDefault();
//  var form_data = $(this).serialize();
//  $.ajax({
//   url:"?controlador=Item&accion=crearRole",
//   method:"POST",
//   data:form_data,
//   success:function(data){
//    $('#framework option:selected').each(function(){
//     $(this).prop('selected', false);
//    });
//    $('#framework').multiselect('refresh');
//    alert(data);
//   }
//  });
// });
 
 //     <button type="submit"   style="width: 160px;"  href="javascript:;" onclick="js_eliminar_articulosCarrito_cliente($('#arrayEliminar[]').val());return false;"class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> 
   //                 Eliminar seleccionados                    //,$('#framework2[]').val(),$('#framework3[]').val(),$('#framework4[]').val());return false;" />
     //           </button> 
});
</script>

<!-- </body>
</html>-->

<?php
include_once 'public/footerRol.php';
?>

