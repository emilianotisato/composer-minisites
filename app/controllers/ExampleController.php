<?php

namespace App\Controllers;

class ExampleController
{
    /**
     * Show the welcome page.
     */
    public function welcome()
    {
        return view('welcome');
    }

    /**
     * Example create page with database.
     */
    public function create()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }

    /**
     * Example Store a new user in the database.
     */
    public function store()
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);

        return redirect('users');
    }
}
