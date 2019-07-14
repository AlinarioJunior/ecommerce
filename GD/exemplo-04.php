<?php

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$new_whidth = 256;
$new_height = 256;

$data = var_dump(getimagesize($file));

$whidth = data [0];
$height = data [1];

list($old_width, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_whidth, $new_height);
$old_name = imagecreatefromjpeg($file);

imagecopyresampled(dst_image, src_image, dst_x, src_)
?>