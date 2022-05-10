<?php
$total = count($_FILES['img_file']['name']);

echo "Uploaded files: " . $total . "<br>";

for ($i = 0; $i < $total; $i++) {

  $tmp = $_FILES['img_file']['tmp_name'][$i];

  if ($tmp !== "") {
    $newFile = "./upload/" . $_FILES['img_file']['name'][$i];

    if (move_uploaded_file($tmp, $newFile)) {
			echo "File uploaded successfully";
    } else {
			echo "There was an error uploading the file";
		}
  }
}
