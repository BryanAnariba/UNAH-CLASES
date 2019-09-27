var canales = [
    {canal:"Seleccione-->",descripcion:"Seleccionar una opcion"},{canal:"Fuera JOH",descripcion:"Canal de Videos en Marcha"},{canal:"Anime Cool",descripcion:"Canal de Videos de Anime Cool"},
    {canal:"Epica",descripcion:"Canal de Videos de Epicos"},{canal:"Queen",descripcion:"Canal de Videos de Reinas"},
    {canal:"Unsun",descripcion:"Canal de Musica Unsun"}
];

(function(){//funcion anonima para poder mostrar datos en las pestañas de seleccion with innerHTML
    for(var i=0; i<canales.length;i++){
        document.getElementById("videos").innerHTML += `<option value="${canales[i].canal}">${canales[i].canal}<option>`;
    }
})();


var arreglo_descripcion = [];

function registro_arreglo(){

    var user = {
        titulo:document.getElementById("titulo").value,
        urlCaratula:document.getElementById("caratula").value,
        canal:document.getElementById("videos").value,
        visualizaciones:document.getElementById("visualizacion").value,
        duracion:document.getElementById("duracion").value,
        subido:document.getElementById("subido").value
    };
    arreglo_descripcion.push(user);
    console.log(arreglo_descripcion);

    document.getElementById("portafolio").innerHTML +=
    `<div  class = "col-lx-2 col-lg-2 col-md-2 col-sm-12 col-xm-12 portafolio-img portafolio-item">   
        <p style = "position:absolute; top:0px; color:white; font-weight:400; font-size:12px;">${user.titulo}</p>
        <p style = "position:absolute; top:20px; color:white; font-weight:400; font-size:12px;">Duracion:${user.duracion}</p>
        <img src="${user.urlCaratula}" alt="" class = "portafolio-img>
        <div style="text-align:justify ">
            <p style="font-size:9px;">${user.canal} <br>${user.visualizaciones} views| ${user.subido}hours ago</p> 
        </div>          
    </div>`
}

