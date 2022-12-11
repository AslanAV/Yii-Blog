<?php
$db = require __DIR__ . '/db.php';
// test database! Important not to run tests on production or development databases
$db['dsn'] = 'pgsql:host=localhost;port=8432;dbname=yii2_test';
$db['username'] = 'yii';
$db['password'] = 'secret';

return $db;
