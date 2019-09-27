<?php
class poblacion
{
    //Declaración de Variables de entrada
    private $poblacionInicial;
    private $anio;
    private $tasaNatalidad;
    private $tasaMortalidad;
    private $tasaInmigracion;
    private $tasaEmigracion;
    private $porcentajeMujeres;
    private $porcentajeHombres;

    //Constructor de la clase población
    public function __construct($poblacionInicial, $anio, $tasaNatalidad, $tasaMortalidad,
     $tasaInmigracion, $tasaEmigracion, $porcentajeMujeres, $porcentajeHombres)
    {
        $this->poblacionInicial = $poblacionInicial;
        $this->anio = $anio;
        $this->tasaNatalidad = $tasaNatalidad;
        $this->tasaMortalidad = $tasaMortalidad;
        $this->tasaInmigracion = $tasaInmigracion;
        $this->tasaEmigracion = $tasaEmigracion;
        $this->porcentajeMujeres = $porcentajeMujeres;
        $this->porcentajeHombres = $porcentajeHombres;
    }

    //*** FUNCIONES GET Y SET DE CADA VARIABLES ***
    //Funcion de Poblacion Inicial
    public function getPoblacionInicial()
    {
        return $this->poblacionInicial;
    }

    public function setPoblacionInicial($poblacionInicial)
    {
        $this->poblacionInicial = $poblacionInicial;
    }
    //Funcion del Año
    public function getAnio()
    {
        return $this->anio;
    }

    public function setAnio($anio)
    {
        $this->anio = $anio;
    }
    //Funcion de Tasa de Natalidad
    public function getTasaNatalidad()
    {
        return $this->tasaNatalidad;
    }

    public function setTasaNatalidad($tasaNatalidad)
    {
        $this->tasaNatalidad = $tasaNatalidad;
    }
    //Funcion de Tasa de Mortalidad
    public function getTasaMortalidad()
    {
        return $this->tasaMortalidad;
    }

    public function setTasaMortalidad($tasaMortalidad)
    {
        $this->tasaMortalidad = $tasaMortalidad;
    }
    //Funcion de Tasa de Inmigración
    public function getTasaInmigracion()
    {
        return $this->tasaInmigracion;
    }

    public function setTasaInmigracion($tasaInmigracion)
    {
        $this->tasaInmigracion = $tasaInmigracion;
    }
    //Funcion de Tasa de Emigración
    public function getTasaEmigracion()
    {
        return $this->tasaEmigracion;
    }

    public function setTasaEmigracion($tasaEmigracion)
    {
        $this->tasaEmigracion = $tasaEmigracion;
    }
    //Funcion de Porcentaje de Mujeres
    public function getPorcentajeMujeres()
    {
        return $this->porcentajeMujeres;
    }

    public function setPorcentajeMujeres($porcentajeMujeres)
    {
        $this->porcentajeMujeres = $porcentajeMujeres;
    }
    //Funcion de Porcentaje de Hombres
    public function getporcentajeHombres()
    {
        return $this->porcentajeHombres;
    }

    public function setPorcentajeHombres($porcentajeHombres)
    {
        $this->porcentajeHombres = $porcentajeHombres;
    }

}
