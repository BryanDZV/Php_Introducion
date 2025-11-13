<?php

/**
 * Clase MiCabecera
 * Genera etiquetas de cabecera HTML (h1 a h6).
 */
class MiCabecera
{
    private string $texto;
    private int $nivel;

    public function __construct(string $texto, int $nivel = 1)
    {
        $this->texto = $texto;

        if ($nivel < 1 || $nivel > 6) {
            $this->nivel = 1;
        } else {
            $this->nivel = $nivel;
        }
    }


    public function __toString(): string
    {
        $tag = "h" . $this->nivel;
        $safeText = htmlspecialchars($this->texto);
        return "<{$tag}>{$safeText}</{$tag}>";
    }
}
