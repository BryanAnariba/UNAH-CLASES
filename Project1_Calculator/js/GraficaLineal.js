var graph = new Morris.Line({ //Objeto de muestra
  // ID de la etiqueta div donde ira la gráfica.
  element: 'proyeccionPoblacional',
  // Registros de datos del gráfico: cada entrada en esta matriz corresponde a un punto en el gráfico
  data: [
    { year: '2019', value: 3000 }, //2019 Año inicial de la población
    { year: '2020', value: 3371 }, //2029 año de proyección de la población
  ],
  // El nombre de los datos de registros en el eje x.
  xkey: 'year',
  // Lista de los nombres de los datos de registros en el eje y.
  ykeys: ['value'],
  // Etiquetas que se mostrarán al pasar el mouse por el gráfico.
  labels: ['Población'],
  parseTime: false,
  lineWidth: 3,
  resize: true, // grafica responsive con bootstrap.
  lineColors: ['#f87b00'] // Color de gráfica
});

//Jquery
$("#botData").on("click", function(){
    console.log(graph);
    var nuevaData = [ //Crear un nuevo objeto para que sea dinámica la gráfica
    { year: '2019', value: 8000000 }, //2019 Año inicial de la población
    { year: '2022', value: 13144256 }, //2029 año de proyección de la población
    ];

    graph.setData( nuevaData );

})