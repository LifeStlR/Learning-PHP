<?php
define('HARI', 'jum\'at');
define('HARI2', 'jum"at');
define('NAMA', 'Victor');
define('ALAMAT', 'Semarang');

$constant = 'constant';

$str = <<<Hmm
Satu kutip: {$constant('HARI')} atau Dua kutip: {$constant('HARI2')}.
Nama {$constant('NAMA')} Alamat {$constant('ALAMAT')}
Hmm;

echo $str;