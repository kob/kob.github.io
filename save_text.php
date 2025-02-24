<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = isset($_POST['text']) ? $_POST['text'] : '';
    $filePath = 'output.txt';

    // 将文本内容写入文件
    if (file_put_contents($filePath, $text)) {
        echo "Text has been saved to output.txt";
    } else {
        echo "Failed to save text to output.txt";
    }
} else {
    echo "Invalid request method.";
}

?>
