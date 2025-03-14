<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Form styling */
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 420px;
        }

        /* Form input styles */
        .form-group {
            margin-bottom: 20px;
        }

        .form-input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            box-sizing: border-box;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .form-input:focus {
            outline: none;
            border-color: #4CAF50;
            box-shadow: 0 0 8px rgba(76, 175, 80, 0.3);
        }

        /* Button styling */
        .form-button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-button:hover {
            background-color: #45a049;
        }

        .form-button:focus {
            outline: none;
            box-shadow: 0 0 8px rgba(76, 175, 80, 0.3);
        }

        /* Error message styling */
        .error-message {
            color: #e74c3c;
            font-size: 0.875rem;
            margin-top: 5px;
            margin-left: 5px;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 500px) {
            form {
                padding: 20px;
                max-width: 90%;
            }

            .form-input {
                font-size: 0.9rem;
            }

            .form-button {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" class="form-input">
            @error('name')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="form-input">
            @error('email')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-input">
            @error('password')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-input">
        </div>

        <button type="submit" class="form-button">Register</button>
    </form>
</body>

</html>
