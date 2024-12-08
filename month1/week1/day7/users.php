<?php 
$con = mysqli_connect("localhost", "root", "root", "api_data");
$response = [];

if($con){
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Content-Type: Json");
        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row['id'];
            $response[$i]['name'] = $row['name'];
            $response[$i]['age'] = $row['age'];
            $response[$i]['email'] = $row['name'];
            $i++;
        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
}