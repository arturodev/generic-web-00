<div class="modal fade" id="myModal_img_car" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Selecciona una imagen</h4>
      </div>
      <div class="modal-body">
			<form class="form-inline" action="funciones/uploader.php" method="post" enctype="multipart/form-data" role = "form">	
				<div class="form-group">
				    <label for="nombre" data-toggle="tooltip" title="Dejanos conocerte">Archivo:</label>
				</div>
					
				<div class="form-group">
				    <input name="file" type="file"> 
				    <span id="image"></span> 
			    </div>
			    
			    <input id = "hidenf" type="hidden" name="posicion_name">
			    
			    <div class="form-group">
			    	<img id="matrix" src = "#"  class = "img-responsive" style="height:80px;">
			    <!-- ../../img/<?php echo $posicion; ?>.jpg -->
			    </div>   
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Save changes</button>
			      </div>
			</form>
      </div>

    </div>
  </div>
</div>	
