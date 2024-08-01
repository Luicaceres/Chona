
<div class="modal fade" id="editarperfilModal" tabindex="-1" aria-labelledby="editarperfilModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="editarperfilModalLabel">Editar Perfil</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form action="../php/update_perfil.php" method="POST" enctype="multipart/form-data">
      
        <input type="hidden" id="id" name="id"> 
      
      
        <div class="mb-3">
            <label for="nombre" class="from-label">Nombre:</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control"  required>

        </div>
        <div class="mb-3">
            <label for="Apellido" class="from-label">Apellido:</label>
            <input type="text" name="Apellido" id="Apellido" class="form-control"  required>

        </div>
        
        <div class="mb-3">
            <label for="Telefono" class="from-label">Telefono:</label>
            <input type="number" name="Telefono" id="Telefono" class="form-control" required>

        </div>
        <div class="mb-3">
            <label for="Email" class="from-label">Email:</label>
            <input type="text" name="Email" id="Email" class="form-control"  required>

        </div>
        <div class="mb-3">
            <label for="Ubicacion" class="from-label">Ubicacion:</label>
            <input type="text" name="Ubicacion" id="Ubicacion" class="form-control"  required>

        </div>
        
       
        <div>

            <button  type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" ></i> Guardar</button>
            <button  type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Cerrar</button>
            
        </div>
        </form>
    </div>
    <div class="modal-footer">
    </div>
  </div>
</div>
</div>