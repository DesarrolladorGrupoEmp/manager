<?php 

  //include("../controller/proyectosController.php");

  $inst = new proyectosController();

 ?>
<!-- Modal -->
<div class="modal fade" id="form_modal_subtdocumento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="lbl_form_subtdocumento">-</h4>
      </div>
      <div class="modal-body">
        
        <form id="form_subtdocumento" method="POST">                
            <br>
                <div class="form-group" hidden>                     
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pkID" name="pkID">
                    </div>
                </div>

                <div class="form-group">
                    <label for="fkID_padre" class="control-label">Categoría</label>                        
                    <select name="fkID_padre" id="fkID_padre" class="form-control" required = "true">
                        <option></option>
                        <?php 
                            //$inst->getSelectTipoDocumento();
                         ?>
                    </select>                    
                </div>
                                                       
                <div class="form-group">
                    <label for="nombre_tdoc" class="control-label">Nombre Sub Categoría</label>                        
                    <input type="text" class="form-control" id="nombre_tdoc" name="nombre_tdoc" placeholder="Nombre de sub categoría de documento." required = "true">                        
                </div> 
        </form>
                
      </div>

      <div class="modal-footer">    
        <button id="btn_actionsubtdocumento" type="button" class="btn btn-primary" data-action="-" disabled="disabled">
            <span id="lbl_btn_actionsubtdocumento">-</span>
        </button>
      </div>

    </div>
        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  -->
  </div>
  
</div>
  
<!-- /form modal 2-->

<!--<script src="../js/scripts_cont/cont_subtdocumento.js"></script>-->
