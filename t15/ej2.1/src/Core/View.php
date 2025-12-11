<?php

namespace App\Core;

class View
{
    /**
     * Renderiza layout.php que incluye la plantilla indicada en $templatePath.
     * $data: array con variables para la vista.
     */
    public static function render(string $templatePath, array $data = []): void
    {
        // Extraer variables para que estén disponibles en la vista: $books, $customers, etc.
        extract($data, EXTR_OVERWRITE);
        // include del layout (este layout incluirá la plantilla concreta)
        require __DIR__ . '/../../views/layout.php';
    }
}
