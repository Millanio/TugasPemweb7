<!DOCTYPE html> 
<html>
    <head>
        <title>Input Form</title>
        <!-- CSS untuk mengatur style form -->
        <style type="text/css">
        body {background : url('bg2.jpg');background-size: cover;background-attachment: fixed;}
        color: white;}
        table {background: transparent;
        text-align: center;
        padding: 35px 40px;}
        h2{
        background-color: transparent;
        padding: 35px 40px;
        text-align:center;
        color: #fffff;
        }
        button  {background-color: white;}
        </style>
    </head>
    <body>
        <!-- Form untuk mendapat input data -->
        <form method="POST" action="Simpan_Kontak.php">
            <table align="center" border="1" cellpadding="0" cellspacing="0">
            <tr align="center"><td><h2> TAMBAH KONTAK</h2></td></tr>    
            <tr>
            <td>
            <table cellspacing="10">
            <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
            <tr><td>JENIS KELAMIN</td><td>
                <input type="radio" name="jenis_kelamin" value="L">Laki laki
                <input type="radio" name="jenis_kelamin" value="P">Perempuan
                </td></tr> 
                <tr><td>EMAIL</td><td><input type="text" name="email"></td></tr>
                <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
                <tr><td>KOTA</td><td><input type="text" name="kota"></td></tr>
                <tr><td>PESAN</td><td><input type="text" name="pesan"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</tr>
            </table>
            </td>
            </tr>
            </table>
        </form>
    </body>
</html>