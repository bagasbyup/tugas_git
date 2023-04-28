<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_validation</title>
    <!-- Created By : BAGAS BAYU PRATAMA-->
</head>
<body>
    <?php
    // define variables and set to empty values
    $name = $email = $vehicle = $comment = $website = $vehicle = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama= test_input($_POST["nama"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
        $vehicle = test_input($_POST["vehicle"]);
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>FORM VALIDASI DATA DIRI</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama: <input type="text" name="nama">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Website: <input type="text" name="website">
        <br><br>
        Komentar: <textarea name="comment" rows="5" cols="20"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="Perempuan">Perempuan
        <input type="radio" name="gender" value="Laki - Laki">Laki - Laki
        <input type="radio" name="gender" value="Lainnya">Lainnya
        <br><br>
         Kendaraan:
        <input type="radio" name="vehicle" value="Mobil">Mobil
        <input type="radio" name="vehicle" value="Motor">Motor
        <input type="radio" name="vehicle" value="Lainnya">Lainnya
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    echo "<h3 color = #FF0001> <b> Anda telah berhasil mendaftar</b> </h3>"; 
    echo "<h2>Hasil Input Anda:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $vehicle;
    ?>
</body>
</html>
