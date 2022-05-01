<?php
// get file from form
$file = $_FILES['img_file'];


echo '<pre>';
var_dump($file);
echo '</pre>';

echo '<br>';

if (move_uploaded_file($file['tmp_name'], $file['name'])) {
	echo 'File uploaded successfully';
} else {
	echo 'There was an error uploading the file';
}
