<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class libroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libros=[
            ['ISBN'=>'001',
             'titulo'=>'Cien años de soledad',
             'precio'=>'120000',   
             'stock'=>'20',
             'editorial_fk'=>'1'
            ],
            ['ISBN'=>'002',
             'titulo'=>'Lo que el viento se llevó',
             'precio'=>'130000',   
             'stock'=>'50',
             'editorial_fk'=>'2'
            ],
            ['ISBN'=>'003',
             'titulo'=>'El nombre de la rosa',
             'precio'=>'110000',   
             'stock'=>'10',
             'editorial_fk'=>'3'
            ],
            ['ISBN'=>'004',
             'titulo'=>'Guerra y Paz',
             'precio'=>'100000',   
             'stock'=>'30',
             'editorial_fk'=>'4'
            ],
            ['ISBN'=>'014',
             'titulo'=>'Orgullo y prejuicio',
             'precio'=>'125000',   
             'stock'=>'25',
             'editorial_fk'=>'5'
            ]
        ];
        DB::table('libro')->insert($libros);
    }
}
