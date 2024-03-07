<?php
    class Sql extends \PDO
    {
        public function __construct() {
            $config = parse_ini_file(__DIR__.'/config.ini', true);
            parent::__construct("mysql:dbname={$config['database']['dbname']};host={$config['database']['host']}",$config['database']['user'],$config['database']['password']);
        }   
    }
