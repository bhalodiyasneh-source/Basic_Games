<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        html, body {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative;
        }   

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('Game.png');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            filter: blur(5px);
            z-index: -1;
        }

        form {
            text-align: center;
            position: relative;
            z-index: 1;
            
            /* Dark Translucent Card */
            background: rgba(15, 23, 42, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(12px);
            
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            width: 90%;
            max-width: 400px;
        }

        form h2 {
            color: #ffffff;
            font-size: 1.3rem;
            margin-bottom: 20px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        label {
            display: block;
            color: #e2e8f0;
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px 16px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid #cbd5e1;
            background: #ffffff;
            color: #0f172a;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #22c55e;
            box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.3);
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #22c55e;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 4px 12px rgba(34, 197, 94, 0.3);
        }

        button:hover {
            background-color: #16a34a;
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <form action="Process.php" method="POST">
        <h2>This Is A Rock Paper Scissors Game</h2>
        <label for="Enter">Enter Input</label>
        <input type="text" id="Enter" name="Enter" placeholder="Rock, Paper, or Scissors" required>
        <button type="submit">Play</button>
    </form>
</body>
</html>