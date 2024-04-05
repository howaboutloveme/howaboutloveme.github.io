<?php
$target_dir = "1/"; // 目标文件夹路径
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// 检查文件是否已上传
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {
        $uploadOk = 1;
    }

    // 检查文件大小
    if ($_FILES["fileToUpload"]["size"] > 500000) { // 500KB
        echo "抱歉，您的文件太大。";
        $uploadOk = 0;
    }

    // 允许特定的文件扩展名
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
       && $imageFileType != "gif" ) {
        echo "抱歉，只允许 JPG, JPEG, PNG & GIF 文件格式。";
        $uploadOk = 0;
    }

    // 检查 $uploadOk 是否为 0
    if ($uploadOk == 0) {
        echo "抱歉，您的文件未上传。";
    // 尝试上传文件
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "文件 ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " 已成功上传。";
        } else {
            echo "抱歉，上传文件时出现错误。";
        }
    }
}
?>