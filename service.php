<?php

$jsonFile = 'status.json';

if (isset($_GET['drawerStatus'])) {
    $data = array('drawerStatus' => $_GET['drawerStatus']);

    $data = json_encode($data);
    file_put_contents($jsonFile, $data);
} elseif (isset($_GET['query'])) {
    if ($_GET['query'] == 'getDrawerStatus') {
        $json = file_get_contents($jsonFile);
        $data = json_decode($json, true);

        echo stripslashes($data['drawerStatus']);

        $data = array('drawerStatus' => 0);

        $data = json_encode($data);
        file_put_contents($jsonFile, $data);
    }
}
?>