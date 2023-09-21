<h3><b>silahkan susun laphar di sini</b></h3>
<hr>
<form action="" method="post">
    <table border="1" class="table-striped" id="table_susun_laphar">
        <thead>
            <th><b>Gambar</b></th>
            <th><b>Narasi</b></th>
        </thead>
    <?php 
      include 'koneksi.php';
        $id_laphar = $_GET["id_laphar"];
        $sql = "SELECT * FROM `gambar` WHERE `id_laphar` = '$id_laphar' ORDER BY `tgl` DESC LIMIT 1000";
        $result = $conn->query($sql);
        $no = 1;
        if ($result->num_rows > 0) {
             while ($row = $result->fetch_assoc()) {
                ?>
        <tr>
            <td>
                <div class="col-md-10">
                    <div class="form-group ">
                        <img src="gambar/<?php echo $row['nama']; ?>" alt="" class="img-responsive" width="400" height="800">
                        <input type="hidden" name="id_gambar" value="<?php echo $row['id_gambar']; ?>">
                    </div>
                </div>
            </td>
                <td>
                <div class="col-md-2">
                                    <div class="form-group ">
                                        <select id="ilceler" class="form-control" >
                                        <?php 
                                                $sql2 = "SELECT * FROM `narasi` WHERE `id_laphar` = '$id_laphar' ORDER BY `tgl` DESC LIMIT 1000";
                                                $result2 = $conn->query($sql2);
                                                $no = 1;
                                                if ($result2->num_rows > 0) { 
                                                    while ($row2 = $result2->fetch_assoc()) {
                                                    ?>
                                                <option><?php echo $row2['narasi']; ?></option>
                                                <input type="hidden" name="id_narasi" value="<?php echo $row2['id_narasi']; ?>">
                                        <?php  }} ?>
                                        </select>
                                    </div>
                                </div>
            </td>
            <?php 
                    }
                }
             ?>
            
        </tr>
    </table>
</form>