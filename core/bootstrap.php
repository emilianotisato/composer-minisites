<?php

use App\Core\App;
use App\Core\Database\{QueryBuilder, Connection};

App::bind('config', require 'config.php');

// Uncomment if you'll se a database
// App::bind('database', new QueryBuilder(
//     Connection::make(App::get('config')['database'])
// ));
