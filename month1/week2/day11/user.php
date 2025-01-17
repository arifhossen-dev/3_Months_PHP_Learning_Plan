<?php
include 'response.php';
class User
{
    use Response;
    public function login($bool)
    {
        try {
            if ($bool) {
                $data = [
                    'email' => 'ashik@gmail.com',
                    'password' => '11223344'
                ];
                return $this->success(
                    message: 'Login successfully.',
                    data: $data,
                    statusCode: 201
                );
            }
        } catch (Exception $e) {
            return $this->error(
                message: 'Invalid email or password',
                statusCode: 200
            );
        }
    }
}

$user = new User();
var_dump($user->login(true));
