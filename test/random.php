<?php
$permitted_chars = '0123456789ABCDEFGHIJKLMNOPKRSTUVWXYZ';
// Output: 54esmdr0qf
echo substr(str_shuffle($permitted_chars), 0, 10);
?>
<input type="file">