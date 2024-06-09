<?php

/*
No sabía de que forma hacerlo así que aparte de este también hice uno con arreglo multidimensional. (El que se muestra).


$departamentosUruguay = array("Artigas", "Colonia","Montevideo", "San José", "Lavalleja", "Trienta y Tres", "Soriano", "Flores", "Florida", "Rio Negro", "Durazno", "Rivera", "Rocha", "Tacuarembo", "Paysandú", "Salto", "Cerro Largo", "Canelones", "Maldonado");
$capitalesUruguay = array("Artigas", "Colonia del Sacramento", "Montevideo", "San José de Mayo", "Minas", "Treinta y Tres", "Mercedes", "Trinidad", "Florida", "Fray Bentos", "Durazno", "Rivera", "Rocha", "Tacuarembó", "Paysandú",  "Salto", "Melo", "Canelones", "Maldonado");
*/




$departamentosUruguay = array('Artigas', 'Colonia', 'Montevideo', 'San José', 'Lavalleja', 'Treinta y Tres', 'Soriano', 'Flores', 'Florida', 'Río Negro', 'Durazno', 'Rivera', 'Rocha', 'Tacuarembó', 'Paysandú', 'Salto', 'Cerro Largo', 'Canelones', 'Maldonado');
$capitalesUruguay = array(
    'Artigas' => 'Artigas',
    'Colonia' => 'Colonia del Sacramento',
    'Montevideo' => 'Montevideo',
    'San José' => 'San José de Mayo',
    'Lavalleja' => 'Minas',
    'Treinta y Tres' => 'Treinta y Tres',
    'Soriano' => 'Mercedes',
    'Flores' => 'Trinidad',
    'Florida' => 'Florida',
    'Río Negro' => 'Fray Bentos',
    'Durazno' => 'Durazno',
    'Rivera' => 'Rivera',
    'Rocha' => 'Rocha',
    'Tacuarembó' => 'Tacuarembó',
    'Paysandú' => 'Paysandú',
    'Salto' => 'Salto',
    'Cerro Largo' => 'Melo',
    'Canelones' => 'Canelones',
    'Maldonado' => 'Maldonado'
);


$combidepcap = array_merge($departamentosUruguay, $capitalesUruguay);

array_pop($combidepcap);


print_r ($combidepcap) ;

?>