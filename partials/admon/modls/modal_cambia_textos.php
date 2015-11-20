<div class="modal fade" id="myModal_titulo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Selecciona una imagen</h4>
      </div>
      <div class="modal-body">
      	
			<form class="form-inline" action="funciones/cambia_textos.php" method="post" enctype="multipart/form-data" role = "form">	
				
				<div class="form-group">
				    <label for="nombre" data-toggle="tooltip" title="Dejanos conocerte">Titulo</label>
				</div>
				
     			<div class="form-group">
					<input type="text" class="form-control" placeholder="introdusca el titulo de la web">		    
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