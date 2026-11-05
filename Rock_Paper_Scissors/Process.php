<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_input = trim($_POST['Enter']);

    $python_path = "python"; 
    $script_path = "Game_Logic.py";

    $command = escapeshellcmd("$python_path $script_path " . escapeshellarg($user_input));
    $output = shell_exec($command);

    echo "<div style='display: flex; flex-direction: column; justify-content: center; align-items: center; min-height: 100vh; background-color: #0f172a; position: fixed; top: 0; left: 0; width: 100%; margin: 0; font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;'>";
    
  
    echo "<pre style='color: #ffffff; font-size: 1.4rem; font-family: inherit; background: transparent; text-align: center; line-height: 1.8; margin-bottom: 20px;'>" . htmlspecialchars($output) . "</pre>";
    
    
    echo "<a href='index.php' style='padding: 12px 30px; background: #22c55e; color: white; text-decoration: none; border-radius: 8px; font-weight: bold; font-size: 1.1rem; box-shadow: 0 4px 12px rgba(34, 197, 94, 0.4); transition: 0.3s;'>Play Again</a>";
    
    echo "</div>";
}
?>