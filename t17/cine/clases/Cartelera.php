<?php

class Cartelera
{
    private $xml;
    private $ruta = "CINESLYS_BASEDEDATOS.xml";

    public function __construct()
    {
        $this->xml = simplexml_load_file($this->ruta);
        if ($this->xml === false) {
            die("Error cargando XML");
        }
    }

    /* READ */
    public function listar()
    {
        return $this->xml->recinto->evento;
    }

    /* CREATE */
    public function crear($titulo, $duracion, $imagen)
    {
        $evento = $this->xml->recinto->addChild("evento");

        $t = $evento->addChild("titulo");
        $t->addAttribute("value", $titulo);
        $t->addAttribute("id", time());

        $evento->addChild("duracion", $duracion);
        $evento->addChild("caratula", $imagen);
        $evento->addChild("fechas");

        $this->guardar();
    }

    /* DELETE */
    public function eliminar($id)
    {
        $i = 0;
        foreach ($this->xml->recinto->evento as $evento) {
            if ((string)$evento->titulo['id'] === $id) {
                unset($this->xml->recinto->evento[$i]);
                break;
            }
            $i++;
        }
        $this->guardar();
    }

    /* UPDATE */
    public function editar($id, $titulo, $duracion, $caratula)
    {
        foreach ($this->xml->recinto->evento as $evento) {
            if ((string)$evento->titulo['id'] === $id) {
                $evento->titulo['value'] = $titulo;
                $evento->duracion = $duracion;
                $evento->caratula = $caratula;
                break;
            }
        }
        $this->guardar();
    }



    public function obtenerUno($id)
    {
        foreach ($this->xml->recinto->evento as $evento) {
            if ((string)$evento->titulo['id'] === $id) {
                return $evento;
            }
        }
    }

    public function añadirSesion($id, $fecha, $sala, $hora)
    {
        foreach ($this->xml->recinto->evento as $evento) {

            if ((string)$evento->titulo['id'] === $id) {

                // si la fecha ya existe
                foreach ($evento->fechas->fecha as $f) {
                    if ((string)$f['value'] === $fecha) {

                        $s = $f->sesiones->addChild("sala", $hora);
                        $s->addAttribute("value", $sala);

                        $this->guardar();
                        return;
                    }
                }

                // Si la fecha NO existe, crearla
                $nuevaFecha = $evento->fechas->addChild("fecha");
                $nuevaFecha->addAttribute("value", $fecha);

                $sesiones = $nuevaFecha->addChild("sesiones");
                $s = $sesiones->addChild("sala", $hora);
                $s->addAttribute("value", $sala);

                break;
            }
        }

        $this->guardar();
    }





    private function guardar()
    {
        $this->xml->asXML($this->ruta);
    }
}
