<button type="button" class="btn btn-primary">Tambah Laporan</button>
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
      <td><?php echo $row["nomor"]; ?></td>
      <td><?php echo $row["tanggal"]; ?></td>
      <td>Susus/Edit/Delete</td>
    </tr>
<?php }} ?>
  </tbody>
</table>