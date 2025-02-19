<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $systemPrompt = "You are a helpful assistant.";
    $temperature = 1.7;
    $userPrompt = "Create an artistic avant garde HTML landing page. Feel free to let your creativity flow. Use p5.js when possible. ONLY output the HTML and NOTHING else, no explanation or description.";

    $command = escapeshellcmd("python3 llm-python-chat.py '$systemPrompt' '$userPrompt' '$temperature'");
    $output = shell_exec($command);

    echo $output;
}
?>
