<?php
// png to webp php cli
$php_to_webp_img_location_before = "Untitled.png";
$php_to_webp_img_location_after = "php-webp-acc/Untitled.png";

$php_to_webp_img = imagecreatefrompng($php_to_webp_img_location_before);

imagepalettetotruecolor($php_to_webp_img);

imagealphablending($php_to_webp_img, true);

imagesavealpha($php_to_webp_img, true);

imagewebp($php_to_webp_img, $php_to_webp_img_location_after, 80);

imagedestroy($php_to_webp_img);

// while loop test
$i = 1;
while ( $i < 13 ) {
    print('Untitled '."$i".'png'."\n");
    ++$i;
}