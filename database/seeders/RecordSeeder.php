<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Record;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entrada = [
            'autores' => 'João Cirino; Maria Amélia',
            'titulo' => 'Estudos Sobre As Obras de Jane Austen',
            'tipo' => 'Livro',
            'ano' => '1995',
            'editora' => 'Campo Azul',
            'edicao' => '3º',
            'assunto' => 'Literatura',
            'idioma' => 'pt_BR',
            'isbn' => '9788533307650',
            'local_publicacao' => 'São Paulo',
            'issn' => '17129842',
            'desc_fisica' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porta, tortor in fermentum viverra, tortor odio tincidunt nisl, fringilla tempor leo leo id dolor. Pellentesque eleifend erat sed massa blandit accumsan. Aenean viverra volutpat molestie. Sed vel sollicitudin arcu. Praesent aliquet mi sodales sem euismod, eu imperdiet felis mattis. Suspendisse potenti. Morbi felis arcu, fringilla vitae purus non, malesuada luctus quam. Suspendisse potenti. Phasellus consequat urna vel erat dapibus accumsan. Duis rutrum ultricies leo, sed commodo elit efficitur in. Cras vitae felis condimentum, pretium sem commodo, egestas mi. Sed enim tortor, finibus ac maximus in, sollicitudin non sem. Suspendisse convallis ligula massa, ac consectetur massa tristique varius. Etiam sed metus auctor, molestie lectus eu, fermentum diam. Vestibulum euismod diam id mi luctus, ac elementum turpis pellentesque. Cras odio nulla, volutpat vitae dignissim nec, faucibus eu felis. Ut vel eros eget libero tempor sagittis. Etiam iaculis enim et quam gravida, vel consequat erat vestibulum. ',
        ];
        Record::create($entrada);

        Record::factory(50)->create();
    }
}
