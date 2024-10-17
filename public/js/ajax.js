function dinoprueba(pruebadeproducto) {
    dinprueba.push(pruebadeproducto);
    for (const k of dinprueba) {
        alert(k.user + k.codigoP + 'dinooooo user');
    }

    aux118();
    while (dinprueba.length > 0)
        dinprueba.pop();
    alert('cuando sale' + k.user + k.codigoP);

}


function aux118(pruebadeproducto) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    for (const k of dinprueba) {
        var cantidad = 118;
        var id_user = 118; //k.user
        var id_producto = 118; //k.codigoP
        var aux = "cantidad:" + cantidad + " " + "id-user:" + id_user + " " + "id-producto:" + id_producto;
        alert(aux);

        $.ajax({
            type: "POST",
            url: "{{ route('carritos.store') }}",
            // url: "{{ route('boyData') }}",
            data: {
                cantidad: cantidad,
                id_user: id_user,
                id_producto: id_producto,
            },

            success: function(data) {
                //mostrarMensaje(data.mensaje);
                //alert('EXITO!');
            },
            error: function(resp) {
                //alert("FAIL");
            }
        });
    }
}