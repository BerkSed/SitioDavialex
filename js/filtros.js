let productos = {
    data: [{
            producNombre: "Teclado mecánico",
            categoria: "PERIFERICOS",
            precio: 100,
            imagen: "../assets/img/portfolio/2.jpg"
        },
        {
            producNombre: "Mouse inalámbrico",
            categoria: "PERIFERICOS",
            precio: 50,
            imagen: "../assets/img/portfolio/3.jpg"
        },
        {
            producNombre: "Monitor curvo",
            categoria: "SERVICIOS",
            precio: 400,
            imagen: "../assets/img/portfolio/4.jpg"
        },
        {
            producNombre: "Laptop gaming",
            categoria: "DISEÑOWEB",
            precio: 1200,
            imagen: "../assets/img/portfolio/5.jpg"
        },
        {
            producNombre: "Impresora multifuncional",
            categoria: "DESARROLLO",
            precio: 250,
            imagen: "../assets/img/portfolio/6.jpg"
        },
        {
            producNombre: "Tarjeta gráfica",
            categoria: "CURSOS",
            precio: 600,
            imagen: "../assets/img/portfolio/1.jpg"
        }
    ]
};

for(let i of productos.data){
    let tarjeta = document.createElement("div");
    tarjeta.classList.add("tarjeta", i.categoria, "hide");
    let imgContainer = document.createElement("div");
    imgContainer.classList.add("imagen");
    
    let imagen = document.createElement("img");
    imagen.setAttribute("src", i.imagen);
    imgContainer.appendChild(imagen);
    tarjeta.appendChild(imgContainer);
    
    let contenedor = document.createElement("div");
    contenedor.classList.add("contenedor");
    
    let nombre = document.createElement("h5");
    nombre.classList.add("producName");
    nombre.innerText = i.producNombre.toLocaleUpperCase();
    contenedor.appendChild(nombre);
    
    let precio = document.createElement("h6");
    precio.innerText = "$" + i.precio;
    contenedor.appendChild(precio)
    
    tarjeta.appendChild(contenedor)
    document.getElementById("productos").appendChild(tarjeta);
}

function filtraProduct(value){
    let elementos = document.querySelectorAll(".tarjeta");
    elementos.forEach(elemento =>{
        if(value == "TODOS")
        {
            elemento.classList.remove("hide");
        }
        else
        {
            if(elemento.classList.contains(value))
            {
                elemento.classList.remove("hide");
            }
            else
            {
                elemento.classList.add("hide");
            }
        }
    })
}

document.getElementById("btn-buscador").addEventListener("click", () =>{
    let inputBuscar = document.getElementById("buscador").value;
    
    let elementos = document.querySelectorAll(".producName");
    
    let tarjetas = document.querySelectorAll(".tarjeta");
    
    elementos.forEach((elemento, index) => {
        if(elemento.innerText.includes(inputBuscar.toLocaleUpperCase())){
        tarjetas[index].classList.remove("hide");
        }
        else
        {
            tarjetas[index].classList.add("hide");
        }
    })
 });

window.onload = () => {
    filtraProduct("TODOS");
}
