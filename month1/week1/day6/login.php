 <?php 
    $email = mb_trim($_POST['email']);
    $password = mb_trim($_POST['password']);
    try{
        if($email == ''){
            throw new Exception('Email is required');
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception('Invalid Email format.');
        } elseif($password == ''){
            throw new Exception('Password is required');
        } elseif(strlen($password) < 6){
            throw new Exception('Password at least 6 character');
        }else{
            if($email === 'admin@gmail.com' && $password === '11223344'){
                header('location : dashboard.php');
            } else{
                throw new Exception('Invalid email or password.');
            }
        }
    } Catch(Exception $e){
        $error = $e->getMessage();
    }

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Login</h2>
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input
                    type="text"
                    id="email"
                    name="email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Enter your email"
                >
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Enter your password"
                >
            </div>
            <?php if(isset($error)): ?>
                <p class=" text-red-500 mb-2"> <?php echo $error; ?></p>
            <?php endif ?>
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="remember" class="ml-2 text-sm text-gray-700">Remember me</label>
                </div>
              <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
            </div>
            <button
                type="submit"
                name="form"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400"
            >
                Login
            </button>
        </form>
        <p class="text-sm text-center text-gray-600 mt-6">
            Don't have an account?
            <a href="#" class="text-blue-600 hover:underline">Sign up</a>
        </p>
    </div>
</body>
</html>
