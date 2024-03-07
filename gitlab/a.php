

<?php

$config = parse_ini_file(__DIR__.'/config.ini', true);


echo "Host do banco de dados: " . $config['database']['host'] . "\n";
echo "Nome de usuário do banco de dados: " . $config['database']['username'] . "\n";
echo "Senha do banco de dados: " . $config['database']['password'] . "\n";
echo "Nome do banco de dados: " . $config['database']['database'] . "\n";
echo "Caminho da raiz: " . $config['paths']['root'] . "\n";
