<?php
/**
 * Created by anonymoussc on 8/28/15 8:23 PM
 */

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use todos\Todolist;

class TodolistTest extends TestCase
{
    use DatabaseMigrations;

    public function testCanInstantiateTodolist()
    {
        $list = new Todolist;
        $this->assertEquals(get_class($list), 'todos\Todolist');
    }
}