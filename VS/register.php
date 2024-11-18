<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+5hb5og2l5Xv15pGp5W4U1P2lsJOM3+jZx+dXy" crossorigin="anonymous">
    
    <style>
        /* Background motion balls */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f7f7f7;
            position: relative;
        }

        /* Styling form container */
        .register-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            position: relative;
            z-index: 1;
        }

        /* Bold labels */
        .form-group label {
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 10px; /* Adjusting margin between label and input */
        }

        /* Fixed input box size with proper spacing */
        .form-control {
            height: 40px;
            font-size: 14px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            width: 100%; /* Makes the input box 100% of the parent width */
            max-width: 300px; /* Fixed width to make input fields smaller */
            margin-bottom: 15px; /* Consistent spacing between input boxes */
        }

        /* Button styling */
        .btn-custom {
            background-color: #28a745;
            color: #fff;
            padding: 12px;
            font-size: 16px;
            border-radius: 5px;
        }

        /* Ball animation */
        .ball {
            position: absolute;
            border-radius: 50%;
            background-color: rgba(40, 167, 69, 0.7); /* Green color for register */
            animation: move 6s infinite;
        }

        .ball-1 {
            width: 150px;
            height: 150px;
            top: -75px;
            left: -75px;
        }

        .ball-2 {
            width: 100px;
            height: 100px;
            bottom: -50px;
            right: -50px;
        }

        /* Motion ball animation */
        @keyframes move {
            0% { transform: translateY(0); }
            50% { transform: translateY(30px); }
            100% { transform: translateY(0); }
        }
    </style>
</head>
<body>
    <!-- Motion ball background -->
    <div class="ball ball-1"></div>
    <div class="ball ball-2"></div>

    <!-- Form container -->
    <div class="register-container">
        <div class="company-name">
            𝕮𝖊𝖒𝖊𝖓𝖙𝕮𝖔𝖗𝖕 €
        </div>
        <h2 class="text-center mb-4">Register</h2>
        <form action="register_handler.php" method="post">
            <div class="form-group mb-3">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="d-grid">
                <input type="submit" class="btn btn-success btn-custom btn-block" value="Register">
            </div>
        </form>
        <p class="text-center mt-3">Already have an account? <a href="index.php">Login here</a></p>
    </div>

    <!-- Bootstrap JS and Popper.js (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-Q7I/7tnQ/mDfuTXjy8KzCk7eq9uJk6+KvIkPQgXl6G9y8FwTM30XwBs3LRKJEgdf" crossorigin="anonymous"></script>
</body>
</html>
