<?php
/**
 * Created by anonymoussc on 8/24/15 8:33 PM
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use todos\Todolist;

class TodolistTableSeeder extends Seeder
{
    public function run()
    {
        Todolist::create([
            'name'        => 'Nunquam promissio vortex?',
            'description' => 'Audax, flavum nixs mechanice examinare de barbatus, nobilis barcas!'
        ]);
        Todolist::create([
            'name'        => 'Aususs congregabo',
            'description' => 'Nunquam anhelare tumultumque.'
        ]);
        Todolist::create([
            'name'        => 'Rationes assimilant!',
            'description' => 'Apolloniatess sunt xiphiass de ferox habitio. '
        ]);
    }
}
