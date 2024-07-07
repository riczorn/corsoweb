<?php
/**
 * Corso di Cybersecurity
 * Lezione 13
 * Semplice risposta json 
 * 
 * @version	25/3/2024
 * @package Cybersecurity drills
 *
 * @author Riccardo Zorn code@fasterweb.net
 * @copyright (C) 2024 https://fasterweb.net
 * @license GNU/GPL v2 or greater http://www.gnu.org/licenses/gpl-2.0.html
 * 
 */
include (__DIR__ . '/config.php');
$obj = new \stdClass();
$obj->status = 'success';
$obj->login = 'ric';
$obj->address = ['Via dei Platani, 13','Roma'];
$obj->date = date('Y-m-d H:i:s');
echo json_encode($obj);
