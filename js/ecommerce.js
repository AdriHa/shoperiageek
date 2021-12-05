$(document).ready(function(){
    $('#agregarCarrito').click(function (e) {
        e.preventDefault();
       var id=$(this).data('id');
       var nombre=$(this).data('nombre');
       var direccionImagen=$(this).data('direccionImagen');
       var cantidad=$('#cantidadProducto').val();


       $.ajax({
            type: 'post',
            url: "ajax/agregarCarrito.php",
            data: {'id':id,'nombre':nombre,'direccionImagen':direccionImagen,'cantidad':cantidad},
            dataType: 'json',
            success: function(response){
                var cantidad=Object.keys(response).lenght;
                $('#badgeProducto').text(cantidad);
                response.forEach(element => {
                    $('#listaCarrito').append(
                            `
                            <a href="index.php?modulo=detalleProducto&id=${element['id']}" class="dropdown-item">
                            <div class="media">
                                <img src="${element['direccionImagen']}" class=img-size-50">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        ${element['nombre']}
                                        <span class="float-right text-sm text-primary"><i class"fas fa-eye"></i></span>
                                    </h3>
                                    <p class="text-sm">Cantidad ${element['cantidad']}</p>
                                </div>
                            </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            `


                        );

                });
            }


       });


    });
});