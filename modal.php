<!-- Ventana modal -->
<div class="modal" id="registroExitosoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Registro Exitoso</h5>
          <button type="button" class="close" data-dismiss="modal" onclick="redirigirALogin() aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p><?php echo $mensaje; ?></p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="redirigirALogin()">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <!-- Script para activar la ventana modal -->
  <script>
    $(document).ready(function() {
      // Mostrar la ventana modal al cargar la página si el mensaje es exitoso
      <?php if ($mensaje === "Usuario registrado exitosamente") : ?>
        $('#registroExitosoModal').modal('show');
      <?php endif; ?>
    });

    function redirigirALogin() {
    window.location.href = 'login.php';
  }
  </script>