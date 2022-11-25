# Php Image Compression Webp 2022

[https://www.youtube.com/watch?v=ntQxTsyAz-0&list=PLkyGuIcLcmx2AFkvwFXNIBzH8w39hcrmB&index=3](https://www.youtube.com/watch?v=ntQxTsyAz-0&list=PLkyGuIcLcmx2AFkvwFXNIBzH8w39hcrmB&index=3)

![Untitled](Untitled.png)

```php
<?php

$php_to_webp_img_location_before = "before.png";
$php_to_webp_img_location_after = "after.png";

$php_to_webp_img = imagecreatefrompng($php_to_webp_img_location_before);

imagepalettetotruecolor($php_to_webp_img);

imagealphablending($php_to_webp_img, true);

imagesavealpha($php_to_webp_img, true);

imagewebp($php_to_webp_img, $php_to_webp_img_location_after, 60);

imagedestroy($php_to_webp_img);
```

![Untitled](Untitled%201.png)

[PHP ইমেজ কম্প্রেশন টেকনিক | কোয়ালিটি Web Application এর জন্যে PNG/JPG to Webp Part 04](https://www.youtube.com/watch?v=Q20gZG-f1eY&list=PLkyGuIcLcmx2AFkvwFXNIBzH8w39hcrmB&index=4)

[https://www.youtube.com/watch?v=Q20gZG-f1eY&list=PLkyGuIcLcmx2AFkvwFXNIBzH8w39hcrmB&index=4](https://www.youtube.com/watch?v=Q20gZG-f1eY&list=PLkyGuIcLcmx2AFkvwFXNIBzH8w39hcrmB&index=4)

![Untitled](Untitled%202.png)

![Untitled](Untitled%203.png)

![Untitled](Untitled%204.png)