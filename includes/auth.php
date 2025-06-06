<?php
session_start();

$password_corretta = "@Acrisure2025!";  // Cambia la password qui!

if (!isset($_SESSION['autenticato'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['password'] === $password_corretta) {
        $_SESSION['autenticato'] = true;
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        echo '<!DOCTYPE html>
        <html lang="it">
        <head>
            <meta charset="UTF-8">
            <title>Accesso Protetto</title>
            <style>
                body {
                    margin: 0;
                    padding: 0;
                    font-family: "Segoe UI", sans-serif;
                    background: linear-gradient(135deg, #4a90e2, #9013fe);
                    height: 100vh;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    color: #fff;
                }
                .login-box {
                    background: rgba(255, 255, 255, 0.1);
                    padding: 40px;
                    border-radius: 15px;
                    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
                    backdrop-filter: blur(10px);
                    text-align: center;
                }
                .login-box h2 {
                    margin-bottom: 20px;
                }
                .login-box input[type="password"] {
                    padding: 10px;
                    width: 80%;
                    border: none;
                    border-radius: 5px;
                    margin-bottom: 20px;
                    font-size: 16px;
                }
                .login-box button {
                    padding: 10px 20px;
                    border: none;
                    border-radius: 5px;
                    background-color: #fff;
                    color: #4a90e2;
                    font-weight: bold;
                    cursor: pointer;
                    transition: background 0.3s ease;
                }
                .login-box button:hover {
                    background-color: #eee;
                }
            </style>
        </head>
        <body>
            <div class="login-box">
                <h2>Accesso Protetto</h2>
                <form method="POST">
                    <input type="password" name="password" placeholder="Inserisci la password" autofocus required><br>
                    <button type="submit">Accedi</button>
                </form>
            </div>
        </body>
        </html>';
        exit;
    }
}
?>
