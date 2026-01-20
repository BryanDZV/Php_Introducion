<?php

class CineXML
{
    private $xml;
    private $ruta = "CINESLYS_BASEDEDATOS.xml";

    public function __construct()
    {
        $this->xml = simplexml_load_file($this->ruta);

        if ($this->xml === false) {
            die("Error al cargar el XML");
        }
    }

    // READ
    public function obtenerEventos()
    {
        return $this->xml->recinto->evento;
    }

    // CREATE
    public function insertarEvento($titulo, $duracion, $fecha, $sala, $hora)
    {
        $evento = $this->xml->recinto->addChild("evento");

        $t = $evento->addChild("titulo");
        $t->addAttribute("value", $titulo);
        $t->addAttribute("id", time());

        $evento->addChild("duracion", $duracion);

        $fechas = $evento->addChild("fechas");
        $f = $fechas->addChild("fecha");
        $f->addAttribute("value", $fecha);

        $sesiones = $f->addChild("sesiones");
        $s = $sesiones->addChild("sala", $hora);
        $s->addAttribute("value", $sala);

        $this->guardar();
    }

    // UPDATE
    public function actualizarEvento($id, $titulo, $duracion)
    {
        foreach ($this->xml->recinto->evento as $evento) {
            if ((string)$evento->titulo['id'] === $id) {
                $evento->titulo['value'] = $titulo;
                $evento->duracion = $duracion;
                break;
            }
        }

        $this->guardar();
    }

    // DELETE
    public function eliminarEvento($id)
    {
        $pos = 0;
        foreach ($this->xml->recinto->evento as $evento) {
            if ((string)$evento->titulo['id'] === $id) {
                unset($this->xml->recinto->evento[$pos]);
                break;
            }
            $pos++;
        }

        $this->guardar();
    }

    private function guardar()
    {
        $this->xml->asXML($this->ruta);
    }
}
