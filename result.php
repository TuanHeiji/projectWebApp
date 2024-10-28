<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết Quả Đăng Ký</title>
</head>
<body>
    <h2 style="color:cornflowerblue;">Kết Quả Đăng Ký Thành Viên Club</h2>

    <?php
    // Kiểm tra nếu có dữ liệu từ phương thức GET
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["name"])) {
        echo "<h3>Dữ liệu nhận bằng phương thức GET:</h3>";
        echo "Tên: " . htmlspecialchars($_GET["name"]) . "<br>";
        echo "Lớp: " . htmlspecialchars($_GET["class"]) . "<br>";
        echo "Số đt: " . htmlspecialchars($_GET["phone"]) . "<br>";
        echo "Tuổi: " . htmlspecialchars($_GET["age"]) . "<br>";
        echo "Email: " . htmlspecialchars($_GET["email"]) . "<br>";
    }
    
    // Kiểm tra nếu có dữ liệu từ phương thức POST
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
        echo "<h3>Dữ liệu nhận bằng phương thức POST:</h3>";
        echo "Tên: " . htmlspecialchars($_GET["name"]) . "<br>";
        echo "Lớp: " . htmlspecialchars($_GET["class"]) . "<br>";
        echo "Số đt: " . htmlspecialchars($_GET["phone"]) . "<br>";
        echo "Tuổi: " . htmlspecialchars($_GET["age"]) . "<br>";
        echo "Email: " . htmlspecialchars($_GET["email"]) . "<br>";
    }
    ?>
</body>
</html>
