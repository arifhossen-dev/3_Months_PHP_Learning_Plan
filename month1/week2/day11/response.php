<?php 

trait Response{
    protected function success(string $message, array $data, string $statusCode){
        $result = [
            'message' => $message,
            'data' => $data,
            'statusCode' => $statusCode
        ];
        return json_encode($result);
    }

    protected function error(string $message, string $statusCode){
        $result = [
            'message' => $message,
            'statusCode' => $statusCode
        ];
        return json_encode($result);
    }
}