<?php

ini_set('display_Errors', 1);

define('APPPATH', 'Application/');
/** A APPROOT szükséges ahhoz, hogy amennyiben nem a webszerver gyökérmappájában lakik az alkalmazásunk, a routing helyesen működjön */
define('APPROOT', '/Project');

/** Az adatbázis kapcsolódáshoz szükséges adatokat tartalmazó json fájl */
$confPath = 'config.json';

require_once APPPATH.'Core/functions.php';
require_once APPPATH.'Core/controllers.php';
require_once APPPATH.'Database/database.php';

/** A core.php-ban megyünk tovább */

require_once APPPATH.'Core/core.php';