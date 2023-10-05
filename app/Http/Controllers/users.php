<?php

use Framework\App;

$users = App::get('database')->selectALL('users');

require '../resources/views/users.blade.php';
