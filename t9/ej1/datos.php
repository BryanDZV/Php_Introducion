<?php
$palos = ['oros', 'copas', 'espadas', 'bastos'];
$valores = [
    1 => 'As',
    2 => '2',
    3 => '3',
    4 => '4',
    5 => '5',
    6 => '6',
    7 => '7',
    8 => '8',
    9 => '9',
    10 => 'Sota',
    11 => 'Caballo',
    12 => 'Rey'
];


$baraja = [];
foreach ($palos as $palo) {
    foreach ($valores as $valor => $nombre) {
        $imagen = "./baraja/{$valor}{$palo}.jpg";
        $baraja[] = [
            'palo' => $palo,
            'valor' => $valor,
            'nombre' => $nombre,
            'imagen' => $imagen
        ];
    }
};
