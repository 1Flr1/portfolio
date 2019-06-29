<?php
    $param = parse_ini_file('db.ini');
    try {
        $pdo = new PDO($param['url'], $param['user'], $param['pass']);
    }
    catch(Exception $e) {
        echo $e->getMessage();
    }
?>