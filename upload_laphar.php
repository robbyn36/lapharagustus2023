<div class="container mt-2">
  <h1 >Upload Gambar Laphar disini</h1>
  <form action="#" method="post" enctype="multipart/form-data" class="mt-4">
	  <input type="file" class="form-control" id="images" name="images[]" multiple accept="image/*" required>
      <br>
	<button type="submit" class="btn btn-primary">Upload</button>
  </form>
</div>
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
            $sql = "INSERT INTO gambar (nama) VALUES ('$newName')";
            $conn->query($sql);
        }
    }

    $conn->close();
}
?>
