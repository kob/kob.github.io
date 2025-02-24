<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = isset($_POST['text']) ? $_POST['text'] : '';
    $fileName = isset($_POST['filename']) ? trim($_POST['filename']) : '';

    // 检查文件名是否为空
    if (empty($fileName)) {
        echo "File name cannot be empty.";
        exit;
    }

    // 添加.txt扩展名
    $filePath = $fileName . '.txt';

    // 将文本内容写入文件
    if (file_put_contents($filePath, $text)) {
        echo "Text has been saved to $filePath";
    } else {
        echo "Failed to save text to $filePath";
    }
} else {
    echo "Invalid request method.";
}

?>
