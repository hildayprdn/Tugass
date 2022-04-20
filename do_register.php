<html>

<head>
    <title>Membuat otentikasi User</title>

</head>

<body>
    <h2>Status Registrasi</h2>
    <?php
    if (isset($_POST['daftar'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $pwd = $_POST['pwd'];

        require("connectdb.php");

        $sql = "INSERT INTO webuser(id, nama, pwd) VALUES('$id', '$nama', md5('$pwd'))";
        Mysqli_query($conn, $sql);
        $num = mysqli_affected_rows($conn);
        if ($num > 0) {
    ?>
            Selamat Anda sudah terdaftar di website kami. <br />
            *<a href="login.php">Login</a>*</br><br />
            <table>
                <tr>
                    <td>ID</td>
                    <td>:</td>
                    <td><strong><?php echo $id; ?></strong></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><strong><?php echo $nama; ?></strong></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><strong><?php echo $pwd; ?></strong></td>
                </tr>
            </table>
        <?php
        } else {
        ?>
            Proses registrasi gagal. Silahkan ulangi!<br />
            *<a href="register.php">Kembail ke form register</a>*
    <?php
        }
    }
    ?>
</body>

</html>