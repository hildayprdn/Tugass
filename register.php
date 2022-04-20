<html>

<head>
    <title>Membuat otentikasi user</title>
</head>

<body>
    <h2> Form Registrasi User</h2>
    <form action="do_register.php" method="post">
        <table>
            <tr>
                <td> ID User </td>
                <td><input type="textfield" name="id" maxlenght="15" size="15" /></td>
            </tr>

            <tr>
                <td>Nama Lengkap</td>
                <td><input type="textfield" name="nama" maxtlenght="25" size="25" /></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="pwd" maxlenght="15" size="25" /></td>
            </tr>

            <tr>
                <td>Submit</td>
                <td><input type="submit" name="daftar" Value="Daftar" /></td>
            </tr>
        </table>
    </form>
</body>

</html>