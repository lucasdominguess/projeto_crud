<?php 
    
    // $config = parse_ini_file('arquivo.ini', true);
    $config = parse_ini_file(__DIR__.'/config.ini');

    print_r($config);
    // print_r ($config['nome']['nome1'] . "\n");
    // print_r ($config['database']);