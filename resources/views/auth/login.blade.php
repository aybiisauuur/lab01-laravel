<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Simple CSS styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
            font-size: 14px;
            text-align: center;

            .register-link {
                display: block;
                text-align: center;
                margin-top: 15px;
            }

            .register-link a {
                align-items: center;
                color: #4CAF50;
                text-decoration: none;
            }

            .register-link a:hover {
                text-decoration: underline;
            }
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Login</h2>

        <!-- Display validation errors -->
        @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>

            <!-- Display the error message if it exists -->
            @if(session('error'))
            <div style="color: red; margin-top: 10px;">
                {{ session('error') }}
            </div>
            @endif
        </form>

        <div class="register-link">
            <p>No account? <a href="{{ route('register') }}">Register</a></p>
        </div>
    </div>

</body>

</html>