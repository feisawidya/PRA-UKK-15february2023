<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<center>
<body>
    <header>
   <h1>DATA PENYEWA</h1>
   </header>
        <table border="1">
            <tr>
                <td>No</td>
                <td>Nama Penyewa</td>
                <td>Alamat</td>
                <td>Genre Film</td>
                <td>Judul Film</td>
                <td>Tahun Film</td>
                <td>Tanggal Sewa</td>
                <td>Tanggal Kembali</td>
                <td>Harga</td>
                <td>Aksi</td>
            </tr>

            <?php
            include("koneksi.php");
            $sql="SELECT * FROM tb_penyewa INNER JOIN
            tb_dvd ON tb_penyewa.id_dvd = tb_dvd.id_dvd";
            $query= mysqli_query($koneksi, $sql);

            while($data=mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$data['id_dvd']."</td>";
                echo "<td>".$data['nama_penyewa']."</td>";
                echo "<td>".$data['alamat']."</td>";
                echo "<td>".$data['genre_film']."</td>";
                echo "<td>".$data['judul_film']."</td>";
                echo "<td>".$data['tahun_film']."</td>";
                echo "<td>".$data['tanggal_sewa']."</td>";
                echo "<td>".$data['tanggal_kembali']."</td>";
                echo "<td>".$data['harga']."</td>";
                echo "<td>";
                echo "<a href='edit.php?id_penyewa=".$data['id_penyewa']."'>Edit</a> |";
                echo "<a href='hapus.php?id_penyewa=".$data['id_penyewa']."'>Hapus</a> ";
                echo "</td>";
                echo "</tr>";
            }
            ?>
            <a href = "tambah.php"><input type ="button" value="tambah">
        </table>
        </body>
        </html>