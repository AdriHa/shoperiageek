<script>
function pagoRealizado() {
  alert("Pago realizado con éxtio");
}
</script>
<div class="content" style="margin-top: 10px">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div align=center><strong class="card-title">Datos de pago </strong></div>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" required="required">
                            </div>
			    <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" required="required">
                            </div>
			    <div class="form-group">
                                <label>Direccion</label>
                                <input type="text" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="number" class="form-control" required="required">
                            </div>
			    <div class="form-group">
                                <label>Números delanteros de tarjeta</label>
                                <input type="number" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Código de seguridad</label>
                                <input type="number" class="form-control" required="required">
                            </div>
	                    <div class="form-group">
                                <label>Fecha de expiración de tarjeta</label>
                                <input type="text" class="form-control" required="required">
                            </div>
                            

                            <div class="form-group">
                                <button onclick="pagoRealizado()" class="btn btn-primary">Pagar</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
