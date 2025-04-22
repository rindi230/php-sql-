<?php
include("connection.php")
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Login Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(-45deg, #FF6B6B, #4ECDC4, #45B7D1, #96E4DF);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
    padding: 20px;
}

@keyframes gradient {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

#form {
    width: 100%;
    max-width: 450px;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 40px;
    box-shadow: 
        0 20px 40px rgba(0, 0, 0, 0.1),
        0 0 100px rgba(255, 255, 255, 0.2);
    transform: translateY(0);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

#form:hover {
    transform: translateY(-5px);
    box-shadow: 
        0 25px 50px rgba(0, 0, 0, 0.15),
        0 0 120px rgba(255, 255, 255, 0.3);
}

h1 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 30px;
    text-align: center;
    color: #333;
    background: linear-gradient(135deg, #FF6B6B, #4ECDC4);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    letter-spacing: -0.5px;
}

form {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.input-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

label {
    font-size: 0.95rem;
    font-weight: 500;
    color: #555;
    margin-bottom: 4px;
    transition: color 0.3s ease;
}

input {
    width: 100%;
    padding: 14px 18px;
    border: 2px solid #e1e1e1;
    border-radius: 12px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: rgba(255, 255, 255, 0.9);
}

input:focus {
    border-color: #4ECDC4;
    box-shadow: 0 0 0 4px rgba(78, 205, 196, 0.1);
    outline: none;
}

input:focus + label {
    color: #4ECDC4;
}

#btn {
    margin-top: 10px;
    padding: 16px;
    border: none;
    border-radius: 12px;
    background: linear-gradient(135deg, #FF6B6B, #4ECDC4);
    color: white;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

#btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(78, 205, 196, 0.2);
}

#btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(255, 255, 255, 0.2),
        transparent
    );
    transition: 0.5s;
}

#btn:hover::before {
    left: 100%;
}

@media (max-width: 480px) {
    #form {
        padding: 30px 20px;
    }

    h1 {
        font-size: 2rem;
    }
}

/* Error Handling */
.error-message {
    color: #FF6B6B;
    font-size: 0.875rem;
    margin-top: 4px;
    display: none;
}

input.error {
    border-color: #FF6B6B;
    animation: shake 0.5s ease-in-out;
}

@keyframes shake {
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    75% { transform: translateX(5px); }
}

/* Input Focus Animation */
input:focus {
    transform: scale(1.01);
}

/* Success State */
input.success {
    border-color: #4ECDC4;
}

/* Loading State */
#btn.loading {
    background: #ccc;
    cursor: not-allowed;
}

#btn.loading::after {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    top: 50%;
    left: 50%;
    margin: -10px 0 0 -10px;
    border: 2px solid #fff;
    border-top-color: transparent;
    border-radius: 50%;
    animation: loading 0.8s linear infinite;
}

@keyframes loading {
    to { transform: rotate(360deg); }
}
    </style>
</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
        <form id="loginForm" method="POST" action="login.php">
            <div class="input-group">
                <label for="id">ID</label>
                <input type="text" id="id" name="id" required>
                <div class="error-message"></div>
            </div>
            
            <div class="input-group">
                <label for="user">Username</label>
                <input type="text" id="user" name="user" required>
                <div class="error-message"></div>
            </div>
            
            <div class="input-group">
                <label for="pass">Password</label>
                <input type="password" id="pass" name="pass" required>
                <div class="error-message"></div>
            </div>
            
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <div class="error-message"></div>
            </div>
            
            <input type="submit" id="btn" value="Log in" name="submit"/>
        </form>
    </div>

    
</body>
</html>