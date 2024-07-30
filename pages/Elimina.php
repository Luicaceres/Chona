

<div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="eliminaModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="eliminaModalLabel">Aviso</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
   
         Desea eliminar el registro?
    
    </div>
    <div class="modal-footer">

    <form action="../php/delete_prd.php" method="POST">
      
       
      <input type="hidden" id="id" name="id">
  
      <div>

          <button  type="submit" class="btn btn-danger"><i class="fa fa-floppy-o" ></i> Eliminar</button>
          <button  type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Cerrar</button>
          
      </div>
      </form>
    </div>
  </div>
</div>
</div>