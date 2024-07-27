

<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form action="../php/editarprd.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="Producto" class="from-label">Producto:</label>
            <input type="text" name="Producto" id="Producto" class="form-control" required>

        </div>
        
        <div class="mb-3">
            <label for="Precio" class="from-label">Precio:</label>
            <input type="number" name="Precio" id="Precio" class="form-control" required>

        </div>
        
        <div class="mb-3">
            <label for="Imagen" class="from-label">Imagen:</label>
            <input type="file" name="imagen" id="Imagen" class="form-control" accept="image/jpeg">

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