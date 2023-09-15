<div class="container mt-6">
<h3>
  LAPORAN HARIAN NO <b>LAPHAR-<?php echo $_GET['no']; ?></b>
 
</h3>
<hr>
<h3 class="well">
    <ul>
        <li>Silahkan Upload File Gambar Dan Narasi yang sudah di Copy melalui WA di halaman ini</li>
        <li>Jika sudah diupload silahakan susun di <a href="">sini</a></li>
    </ul>
</h3>
<div class="well ">
<ul><li>
    <h4><b>Upload Gambar Laphar disini</b></h4>
</ul></li>
  <form action="#" method="post" enctype="multipart/form-data" class="mt-1 ">
	  <input type="file" class="form-control" id="images" name="images[]" multiple accept="image/*" required>
      <br>
	<button type="submit" class="btn btn-primary">Upload</button>
  </form>
</div>
<hr>
<div class="well">
 <ul><li>
     <h4><b>Upload NARASI Laphar disini</b></h4>
 </li></ul>
  <form action="#" method="post" enctype="multipart/form-data" class="mt-1 ">
      <textarea class="form-control" rows="10"></textarea>
      <br>
    <button type="submit" class="btn btn-primary">Upload</button>
  </form>
</div>
<hr>
<?php
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Handle image uploads
    $uploadDir = "gambar/";
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $uploadedImages = $_FILES["images"];
    $imageNames = [];

    foreach ($uploadedImages["tmp_name"] as $key => $tmpName) {
        $originalName = $uploadedImages["name"][$key];
        $newName = uniqid() . '_' . $originalName;
        $targetPath = $uploadDir . $newName;

        if (move_uploaded_file($tmpName, $targetPath)) {
            $imageNames[] = $newName;

            // Insert image name into the database
            $id_laphar = $_GET["no"];
            $sql = "INSERT INTO gambar (nama, id_laphar) VALUES ('$newName','$id_laphar')";
            if ($conn->query($sql) === TRUE) {
            // Redirect the user to a thank you page
            echo "<script>alert('Data berhasil diubah');document.location='?go=upload_laphar&no=$id_laphar'</script>";
            exit;
        } else {
            echo "Error inserting data: " . $conn->error;
        }
        }
    }

    $conn->close();
}
?>
