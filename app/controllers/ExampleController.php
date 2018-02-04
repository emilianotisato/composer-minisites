<?php

namespace App\Controllers;

class ExampleController
{
    /**
     * Show the home page.
     */
    public function home()
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
