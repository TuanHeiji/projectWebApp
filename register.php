<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng Ký Thành Viên</title>
</head>
<body>
    <h2 style="color:cornflowerblue;">Form Đăng Ký Thành Viên Club</h2>
     <!-- Form với phương thức GET  -->
    <form action="result.php" method="GET">
        <label for="name">Tên:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="class">Lớp:</label>
        <input type="text" id="class" name="class" required><br><br>

        <label for="phone">Số đt:</label>
        <input type="text" id="phone" name="phone" required><br><br>
        
        <label for="age">Tuổi:</label>
        <input type="number" id="age" name="age" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <button type="submit">Đăng Ký (GET)</button>
    </form>

    <hr>

    <!-- Form với phương thức POST -->
    <form action="result.php" method="POST">
        <label for="name">Tên:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="class">Lớp:</label>
        <input type="text" id="class" name="class" required><br><br>

        <label for="phone">Số đt:</label>
        <input type="text" id="phone" name="phone" required><br><br>
        
        <label for="age">Tuổi:</label>
        <input type="number" id="age" name="age" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <button type="submit">Đăng Ký (POST)</button>
    </form>
</body>
</html>
