<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$input = $_GET;


// $input=[
//     'name'=>'test',
//     'mobile'=>'0811'
// ];

// dd($input);


echo json_encode($input);
