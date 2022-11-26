<?php
// multi images converter and compressor with php cli
$i = 1;
while ( $i < 13 ) {
    print('Untitled '."$i".'png'."\n");

    $php_to_webp_img_location_before = 'Untitled '."$i".'.png';
$php_to_webp_img_location_after = "php-webp-acc/".'Untitled '."$i".'.png';
// die(print_r($php_to_webp_img_location_after));
$php_to_webp_img = imagecreatefrompng($php_to_webp_img_location_before);

imagepalettetotruecolor($php_to_webp_img);

imagealphablending($php_to_webp_img, true);

imagesavealpha($php_to_webp_img, true);

imagewebp($php_to_webp_img, $php_to_webp_img_location_after, 60);

imagedestroy($php_to_webp_img);
    ++$i;
}