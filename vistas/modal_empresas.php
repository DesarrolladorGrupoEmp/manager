<?php 
    
    /**/
    //include("../controller/empresaController.php");    

    //$empresainst = new empresaController();

?>
<!-- Modal -->
<div class="modal fade" id="form_modal_empresa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="lbl_form_empresa">-</h4>
      </div>
      <div class="modal-body">
        
        <form id="form_empresa" method="POST">                
            <br>
                <div class="form-group" hidden>                     
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pkID" name="pkID">
                    </div>
                </div>
                                                       
                <div class="form-group">
                    <label for="nombre" class="control-label">Nombre</label>                        
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la Empresa." required = "true">                        
                </div> 
        </form>
                
      </div>

      <div class="modal-footer">    
        <button id="btn_actionempresa" type="button" class="btn btn-primary" data-action="-" disabled="disabled">
            <span id="lbl_btn_actionempresa">-</span>
        </button>
      </div>

    </div>
        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  -->
  </div>
  
</div>
  
<!-- /form modal 2-->

<!--<script src="../js/scripts_cont/cont_empresa.js"></script>-->
