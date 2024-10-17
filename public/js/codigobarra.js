    //  <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>

    const productos = [{
        nombre: "zapato",
        precio: 20,
        codigo: "123",
    }];

    const $contenedor = document.querySelector("#contenedor");

    // Por cada producto, crear un SVG y adjuntarlo

    productos.forEach(producto => {
        const elemento = document.createElement("img");
        elemento.dataset.format = "CODE128";
        elemento.dataset.value = producto.codigo;
        elemento.dataset.text = producto.nombre + " Bs" + producto.precio.toFixed(2);
        elemento.classList.add("codigo");
        $contenedor.appendChild(elemento);
    });
    // Al final, inicializamos
    JsBarcode(".codigo").init();