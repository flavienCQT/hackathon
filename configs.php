<?php

$DB_SERVER = getenv("MVC_SERVER") ?: "192.168.139.1";
$DB_DATABASE = getenv("MVC_DB") ?: "AP3_BD_HACKATHON_INITIAL";
$DB_USER = getenv("MVC_USER") ?: "exemple-2";
$DB_PASSWORD = getenv("MVC_TOKEN") ?: "m6MIbZx0";
$DEBUG = getenv("MVC_DEBUG") ?: true;

return array(
    "DB_USER" => $DB_USER,
    "DB_PASSWORD" => $DB_PASSWORD,
    "DB_DSN" => "mysql:host=$DB_SERVER;dbname=$DB_DATABASE;charset=utf8",
    "DEBUG" => $DEBUG
);

