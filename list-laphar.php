<a href="?go=add_laphar" class="btn btn-primary">Tambah Laporan</a>
<hr>
<table class="table" id="table_laphar" border='1'>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nomor Laporan</th>
      <th scope="col">Tanggal </th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  include 'koneksi.php';
    // SQL query to retrieve data from your table (replace 'your_table_name' and column names)
    $sql = "SELECT * FROM laphar";

    // Execute the query
    $result = $conn->query($sql);

    // Check if there are rows in the result set
    $no = 1;
    if ($result->num_rows > 0) {
         while ($row = $result->fetch_assoc()) {
 ?>
    <tr>
      <td scope="row"><?php echo $no++; ?></td>
      <td><?php echo "LAPHAR-".$row["nomor"]; ?></td>
      <td><?php echo $row["tanggal"]; ?></td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
          <a href="?go=upload_laphar&no=<?php echo $row["nomor"]; ?>" class="btn btn-info">Susun</a>
          <a href="" class="btn btn-warning">Edit</a>
          <a href="" class="btn btn-danger">Delete</a>
        </div>
      </td>
    </tr>
<?php }} ?>
  </tbody>
</table>