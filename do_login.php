<html>

<head>
    <title>Membuat otentikasi user</title>
</head>

<body>

    <?php
    if (isset($_POST['login'])) {
        $id = $_POST['id'];
        $pwd = $_POST['pwd'];

        require('connectdb.php');

        $query = "SELECT nama FROM webuser 
            WHERE id='$id' AND pwd=md5('$pwd')";

        $result = mysqli_query($conn, $query);
        $num = mysqli_num_rows($result);

        if ($num == 1) {
            $result = mysqli_fetch_array($result);
            $name = $result[0];
    ?>
            <h2>Secret Area</h2>
            Selamat Datang,
            <strong><?php echo $name; ?></strong><br />
            Ini adalah halaman yang dapat diakses oleh user yang telah terdaftar didalam
            Website
    <?php
        } else {
            header("Location: login.php");
        }
    }
    ?>
</body>

</html>