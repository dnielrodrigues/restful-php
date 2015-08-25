<?php
header('Cache-Control: no-cache, must-revalidate'); 
header('Content-Type: application/json; charset=utf-8');

if ($_POST["login"] == 'teste' && $_POST["pass"] == 'teste') {
    $result = array(
        "result" => true,
        "error" => "",
        "parameters" => array(
            "user" => $_POST['login'],
            "pass" => $_POST['pass']
        )
    );
    echo json_encode($result);
} else {
    $result = array(
        "result" => false,
        "error" => 12,
        "parameters" => array(
            "user" => $_POST['login'],
            "pass" => $_POST['pass']
        )
    );
    echo json_encode($result);
}

echo $json;

?>