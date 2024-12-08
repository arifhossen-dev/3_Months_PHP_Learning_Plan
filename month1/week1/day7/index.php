<?php 

try{
    function data($filePath){
        $data = file_get_contents($filePath);
        // $data = json_decode($data, true);
        return $data;
    }
    $users = data('users.json');
    // foreach($users as $user){
    //     echo $user['name'] . PHP_EOL;
    // }
    print_r($users);

} catch(Exception $e){
    return $e->getMessage();
}