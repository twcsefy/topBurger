<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lanches = [
            [
                'nome' => 'Burger 1',
                'preco' => 17.99,
                'ingredientes' => 'Hamburguer de carne, bacon, queijo, cebola',
                'imagem' => 'images/hamburgao.jpg'
            ],
            [
                'nome' => 'Burguinho',
                'preco' => 14.79,
                'ingredientes' => 'Hamburguer de carne, presunto, queijo, cebola',
                'imagem' => 'images/hamburgao.jpg'
            ],
            [
                'nome' => 'Hambaiourg',
                'preco' => 15.26,
                'ingredientes' => 'Hamburguer de carne, bacon, queijo, cebola,tomate,abacaxi',
                'imagem' => 'images/hamburgao.jpg'
            ],
            [
                'nome' => 'Burg 9',
                'preco' => 19.99,
                'ingredientes' => 'Hamburguer de carne, bacon, queijo, cebola,ovo, parmesao, vela comestivel numero 9',
                'imagem' => 'images/hamburgao.jpg'
            ],
            [
                'nome' => 'Hamburguersario',
                'preco' => 20,00,
                'ingredientes' => 'Hamburguer de carne, bacon, queijo duplo, cebola, ovo, calabresa, molho especial',
                'imagem' => 'images/hamburgao.jpg'
            ],
            [
                'nome' => 'Bur',
                'preco' => 17.49,
                'ingredientes' => 'Hamburguer de carne, bacon, queijo, cebola',
                'imagem' => 'images/hamburgao.jpg'
            ],
            [
                'nome' => 'Burg',
                'preco' => 17.50,
                'ingredientes' => 'Hamburguer de carne, bacon, queijo, cebola',
                'imagem' => 'images/hamburgao.jpg'
            ],
            [
                'nome' => 'Burge',
                'preco' => 17.34,
                'ingredientes' => 'Hamburguer de carne, bacon, queijo, cebola, bariola',
                'imagem' => 'images/hamburgao.jpg'
            ],
            [
                'nome' => 'Burger 1',
                'preco' => 17.99,
                'ingredientes' => 'Hamburguer de brigadeiro, queijo doce, abacaxi, pe de moleque',
                'imagem' => 'images/hamburgao.jpg'
            ],
            [
                'nome' => 'Burger Triplo',
                'preco' => 15.50,
                'ingredientes' => 'Hamburguer de carne duplo, bacon duplo, queijo duplo, cebola dupla',
                'imagem' => 'images/hamburgao.jpg'
            ],
        ];

        foreach ($lanches as $lanche) {
            DB::table('produtos')->insert([
                'nome'=> $lanche['nome'],
                'preco'=> $lanche['preco'],
                'ingredientes'=>$lanche['ingredientes'],
                'imagem'=>$lanche['imagem'],
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
