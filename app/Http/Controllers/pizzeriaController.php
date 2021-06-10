<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pizzeriaController extends Controller
{
    public function inicio(){

        //array de listado de pizzas
        $pizzas = [
            'pizzasdata' => [
                '0' => [
                    'nombre'=>'SUPER SUPREMA', 
                    'url'=> 'producto/super-suprema',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porta erat nec consectetur fringilla. Curabitur tempus quam urna.',
                    'imagen'=>'https://static.phdvasia.com/pe/img/singles/super-suprema-desktop-thumbnail.jpg'
                ],
                '1' => [
                    'nombre'=>'VEGETARIANA', 
                    'url'=> 'producto/vegetariana',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porta erat nec consectetur fringilla. Curabitur tempus quam urna.',
                    'imagen'=>'https://static.phdvasia.com/pe/img/singles/vegetariana-desktop-thumbnail.jpg'
                ],
                '2' => [
                    'nombre'=>'CONTINENTAL', 
                    'url'=> 'producto/continental',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porta erat nec consectetur fringilla. Curabitur tempus quam urna.',
                    'imagen'=>'https://static.phdvasia.com/pe/img/singles/continental-desktop-thumbnail.jpg'
                ],
                '3' => [
                    'nombre'=>'HAWAIANA', 
                    'url'=> 'producto/hawaiana',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porta erat nec consectetur fringilla. Curabitur tempus quam urna.',
                    'imagen'=>'https://static.phdvasia.com/pe/img/singles/hawaiana-desktop-thumbnail.jpg'
                ],
                '4' => [
                    'nombre'=>'AMERICANA', 
                    'url'=> 'producto/americana',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porta erat nec consectetur fringilla. Curabitur tempus quam urna.',
                    'imagen'=>'https://static.phdvasia.com/pe/img/singles/americana-desktop-thumbnail.jpg'
                ],
                '5' => [
                    'nombre'=>'PEPPERONI', 
                    'url'=> 'producto/pepperoni',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porta erat nec consectetur fringilla. Curabitur tempus quam urna.',
                    'imagen'=>'https://static.phdvasia.com/pe/img/singles/pepperoni-desktop-thumbnail.jpg'
                ],
                '6' => [
                    'nombre'=>'MOZZARELLA', 
                    'url'=> 'producto/mozzarella',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porta erat nec consectetur fringilla. Curabitur tempus quam urna.',
                    'imagen'=>'https://static.phdvasia.com/pe/img/singles/mozzarella-desktop-thumbnail.jpg'
                ],
                '7' => [
                    'nombre'=>'SUPREMA', 
                    'url'=> 'producto/suprema',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porta erat nec consectetur fringilla. Curabitur tempus quam urna.',
                    'imagen'=>'https://static.phdvasia.com/pe/img/singles/suprema-desktop-thumbnail.jpg'
                ]
            ]
        ];
        
        return view('index', $pizzas);

    }

    public function detalle($producto){

        //array de detalle de pizza
        $pizzasdet = [
            'super-suprema' => [
                'nombre'=>'Super Suprema', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porta erat nec consectetur fringilla. Curabitur tempus quam urna.',
                'imagen'=>'https://static.phdvasia.com/pe/img/singles/super-suprema-desktop-detail.jpg',      
                'precio' => [
                    '0' => [ "tipo" => "Personal", "valor" => 30],
                    '1' => [ "tipo" => "Grande", "valor" => 50]
                ]
            ],
            'vegetariana' => [
                'nombre'=>'VEGETARIANA', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porta erat nec consectetur fringilla. Curabitur tempus quam urna.',
                'imagen'=>'https://static.phdvasia.com/pe/img/singles/vegetariana-desktop-detail.jpg',      
                'precio' => [
                    '0' => [ "tipo" => "personal", "valor" => 15],
                    '1' => [ "tipo" => "Grande", "valor" => 25],
                    '2' => [ "tipo" => "Familiar", "valor" => 40]
                ]
            ],
            'continental' => [
                'nombre'=>'CONTINENTAL', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porta erat nec consectetur fringilla. Curabitur tempus quam urna.',
                'imagen'=>'https://static.phdvasia.com/pe/img/singles/continental-desktop-detail.jpg',      
                'precio' => [
                    '0' => [ "tipo" => "Personal", "valor" => 20],
                    '1' => [ "tipo" => "Grande", "valor" => 35],
                    '2' => [ "tipo" => "Familiar", "valor" => 45]
                ]
            ],
            'hawaiana' => [
                'nombre'=>'HAWAIANA', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porta erat nec consectetur fringilla. Curabitur tempus quam urna.',
                'imagen'=>'https://static.phdvasia.com/pe/img/singles/hawaiana-desktop-detail.jpg',      
                'precio' => [
                    '0' => [ "tipo" => "personal", "valor" => 15],
                    '1' => [ "tipo" => "Grande", "valor" => 25],
                    '2' => [ "tipo" => "Familiar", "valor" => 40]
                ]
            ]
        ];

        return view('detalle', [ 'detalle' => $pizzasdet[$producto] ]);
    
    }

    public function tiendas(){

        //array de tienda
        $pizzasTien = [
            'tiendadata' => [
                '0' => [
                    'distrito'=>'LOS OLIVOS', 
                    'direccion'=> 'Av. Naranajal 123',
                    'telefono' => '999 999 999',
                ],
                '1' => [
                    'distrito'=>'BARRANCO', 
                    'direccion'=> 'Av. Los Jazmines 5475',
                    'telefono' => '999 999 999',
                ],
                '2' => [
                    'distrito'=>'MIRAFLORES', 
                    'direccion'=> 'Av. Izaguirre 123',
                    'telefono' => '999 999 999',
                ],
                '3' => [
                    'distrito'=>'INDEPENDENCIA', 
                    'direccion'=> 'Av. Alfredo Mendiola 123',
                    'telefono' => '999 999 999',
                ],
                '4' => [
                    'distrito'=>'ATE', 
                    'direccion'=> 'Av. Industrial 123',
                    'telefono' => '999 999 999',
                ],
                '5' => [
                    'distrito'=>'COMAS', 
                    'direccion'=> 'Av. El Seguro 123',
                    'telefono' => '999 999 999',
                ]
            ]
        ];

        return view('tiendas', $pizzasTien);
    }
}


//producto
//carrito
//tienda
//login
//mis_pedidos