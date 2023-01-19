<?php

// Absolute path.
defined('ABSPATH') || define('ABSPATH', __DIR__ . '/..');

// Database path.
defined('DBPATH')  || define('DBPATH', ABSPATH . '/resources/database/dbapp.db');

// Conexión BD tipo SQLite3 Global.
$gConn = new SQLite3(DBPATH);
