<?php


class MiCabecera
{

    private $titulo;
    private $subtitulo;
    private $autor;


    public function __construct(string $titulo, string $subtitulo = '', string $autor = '')
    {
        $this->titulo = $titulo;
        $this->subtitulo = $subtitulo;
        $this->autor = $autor;
    }


    public function __toString(): string
    {
        $html = '<header>' . "\n";
        $html .= '    <h1>' . htmlspecialchars($this->titulo) . '</h1>' . "\n";

        if ($this->subtitulo) {
            $html .= '    <h2 >' . htmlspecialchars($this->subtitulo) . '</h2>' . "\n";
        }

        if ($this->autor) {
            $html .= '    <p">Creado por: ' . htmlspecialchars($this->autor) . '</p>' . "\n";
        }

        $html .= '</header>' . "\n";
        return $html;
    }
}
