let zapato = [
    { marca: '{{ $producto->descripcion }}', color: '{{ $producto->color }}', codigo: '{{ $producto->color }}', nombre: 'Bulova Classic', img: '{{ $producto->foto }}', precio: '{producto.precio}.Bs' },

];


let carrito = [];
let dinprueba = [];
let filtros = { cuero: false, metal: false, masculino: false, femenino: false, bulova: false, citizen: false, rolex: false, seiko: false, menor: false, mayor: false };
let preciozapato = [];

function sumaProductos() {
    for (let i = 0; i <= carrito.length; i++) {
        preciozapato.push(carrito[i].precio);
    }
}


function agregarCarrito(productoQueAgrego) {
    carrito.push(productoQueAgrego);
    mostrarCarrito();
    mostrarSumaTotal();
    //alert('agregado');
}

function confirmacionCompra() {
    for (const producto of carrito) {
        //alert('dinooooo user');
        $("#confirmacionCompra").append(`<div id="mensajeCompra" role="alert ">
        <h4 class="mensajecarrito"> Añadiste</h4>
        <p>
        Producto: ${producto.nombre}
        <br>
        Precio: ${producto.precio}
        </p>
        </div>`);
    }
    $("#confirmacionCompra").show().delay(1500);
    $("#confirmacionCompra").hide(400);
}

function cantidadDeProductos() {
    $("#cantidadProductos").html(" ");
    if (carrito.length > "0") {
        $("#cantidadProductos").append(`<div style= "background-color:#f3753a; border-radius:50%; height:30px; width:30px;display:flex; flex-direction:row; justify-content: center">
        <p style= "color:white" >${carrito.length}</p>
        </div>`);
        //alert('dinooooo user');
    }
}

function mostrarCarrito() {
    $("#listadoCarrito").html(" ");
    $("#listaCompras").html(" ");
    cantidadDeProductos();
    confirmacionCompra();
    for (const producto of carrito) {
        $("#listaCompras").append(`

<table class="col-6 table text-center table-dark">
 <thead class="thead-dark">
    <tr>
      <td>${producto.precio}.Bs</td>
      <td>${producto.codigo}</td>
      <td>${producto.nombre}</td>
      <td>${producto.color}</td>
      <td><img src=${producto.img} style=width:15%></td>
    </tr>
</thead>
</table>


        <div id="columnaImg" class="col-2 columnaImg text-start ">
        <img src=${producto.img} style=width:10%>
        </div>
        <div id="columnaProductos" class="col-6 columnaProductos text-center">
        ${producto.nombre}
        </div>
        <div id="columnaCantidad" class="col-2 columnaCantidad text-center ">
        ${producto.precio}
        </div>
        <div id="columnaPrecio" class="col-2 columnaPrecio text-center ">
        ${producto.precio}.Bs
        </div>

        `);

    }
    /*       $("#listaCompras").append(`<div id="precioTotal" class=" col-12 columnaTotal text-end "><h6 > ${preciozapato} </h6></div>`);  */
}

/*  */
function mostrarProductos(filtro) {
    if (filtro == "cuero") {
        if (filtros.cuero == true) {
            filtros.cuero = false;
        } else {
            filtros.cuero = true;
        }
    } else if (filtro == "metal") {
        if (filtros.metal == true) {
            filtros.metal = false;
        } else {
            filtros.metal = true;
        }
    } else if (filtro == "masculino") {
        if (filtros.masculino == true) {
            filtros.masculino = false;
        } else {
            filtros.masculino = true;
        }
    } else if (filtro == "femenino") {
        if (filtros.femenino == true) {
            filtros.femenino = false;
        } else {
            filtros.femenino = true;
        }
    } else if (filtro == "bulova") {
        if (filtros.bulova == true) {
            filtros.bulova = false;
        } else {
            filtros.bulova = true;
        }
    } else if (filtro == "citizen") {
        if (filtros.citizen == true) {
            filtros.citizen = false;
        } else {
            filtros.citizen = true;
        }
    } else if (filtro == "rolex") {
        if (filtros.rolex == true) {
            filtros.rolex = false;
        } else {
            filtros.rolex = true;
        }
    } else if (filtro == "seiko") {
        if (filtros.seiko == true) {
            filtros.seiko = false;
        } else {
            filtros.seiko = true;
        }
    } else if (filtro == "mayor") {
        if (filtros.mayor == true) {
            filtros.mayor = false;
        } else {
            filtros.mayor = true;
        }
    } else if (filtro == "menor") {
        if (filtros.menor == true) {
            filtros.menor = false;
        } else {
            filtros.menor = true;
        }
    }


    function productosFiltrados(producto) {
        $("#seccionProductos").append(
            `<div class="col">
            <div class="card" style="width: 10rem;">
                <img src=${producto.img} class="card-img-top" alt="zapato">
                <div class="card-body">
                    <h5 class="card-title">${producto.nombre}</h5>  
                    <div class="precio">
                        <a href="#" class="botonAgregarCarrito btn"
                            onclick="agregarCarrito();">Agregar</a>
                        <p>$${producto.precio}</p>
                    </div>
                </div>
            </div>
        </div>`);
    }


    $("#seccionProductos").html(" ");
    for (const producto of zapato) {
        if (producto.color == "cuero") {
            if ((filtros.cuero == true) || (filtros.cuero == false && filtros.metal == false)) {
                if (producto.codigo == "masculino") {
                    if ((filtros.masculino == true) || (filtros.masculino == false && filtros.femenino == false)) {
                        ultimoFiltro(producto);
                    }
                } else {
                    if ((filtros.femenino == true) || (filtros.femenino == false && filtros.masculino == false)) {
                        ultimoFiltro(producto);
                    }
                }
            }


        } else {
            if ((filtros.metal == true) || (filtros.cuero == false && filtros.metal == false)) {
                if (producto.codigo == "masculino") {
                    if ((filtros.masculino == true) || (filtros.masculino == false && filtros.femenino == false)) {
                        ultimoFiltro(producto);
                    }
                } else {
                    if ((filtros.femenino == true) || (filtros.femenino == false && filtros.masculino == false)) {
                        ultimoFiltro(producto);
                    }
                }
            }
        }
    }
}



//mostrar suma total de productos en el carrito

function mostrarSumaTotal() {
    let sumaTotal = 0;
    for (const producto of carrito) {
        sumaTotal += parseFloat(producto.precio);
    }
    console.log(sumaTotal);
    $('#sumaTotal').text("Total: " + sumaTotal + ".Bs");
}