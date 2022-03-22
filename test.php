<h3> Data barang </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nam Pengguna </th>
        <th>Total Pembelian </th>
        <th>Points</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "functions.php";

    $no=1;
    $ambildata = mysqli_query($conn, "SELECT * FROM users");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[username]</td>
            <td>$tampil[total_pembelian]</td>
            <td>$tampil[points]</td>
        <tr>";
        $no++;
    }
    ?>
    </table>
    <button type="button" class="btn btn-primary btn-sm">Small button</button>