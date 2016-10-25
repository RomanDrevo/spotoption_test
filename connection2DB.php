<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 10/25/2016
 * Time: 2:45 PM
 */




const DB_HOST = 'localhost';
const DB_LOGIN = 'orange';
const DB_PASSWORD = 'orange2312!';
const DB_NAME = 'orange_spotoption';


$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die('No Connection');


