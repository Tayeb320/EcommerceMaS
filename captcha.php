<?php 
@session_start();
if(isset($_POST['getcaptchastring']) && $_POST['getcaptchastring'] == 'yes') {
    echo $_SESSION['captcha_string'];
} else {
  $image = imagecreatetruecolor(150, 50);
  $image_background_color = imagecolorallocate($image, 155,155,155);
  imagefilledrectangle($image, 0, 0, 150, 50, $image_background_color);
  $dot_color = imagecolorallocate($image, 0, 0, 255);
  for ($i = 0; $i < 500; $i++) {
        imagesetpixel($image, rand() % 150, rand() % 50, $dot_color);
    }
    $line_color = imagecolorallocate($image, 230, 230, 230);
    for ($i = 0; $i < 4; $i++) {
        imageline($image, 0, rand() % 50, 150, rand() % 50, $line_color);
    }
    $font_color = imagecolorallocate($image, 255, 255, 255);
    $characters = '23456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz';
    $chars_len  = strlen($characters);
    $captcha_string = "";
    $temp_xco = 20;
    for($i=0; $i<5; $i++) {
        $single_letter = $characters[rand(0, $chars_len - 1)];
                            //image, font-size, angle, xco, ycon, font-color, font, captch string
        $bbox = imagettftext($image, 15, 0, $temp_xco, 33, $font_color, realpath('Arial.ttf'), $single_letter);
        $temp_xco += 15 + ($bbox[2] - $bbox[0]);
        $captcha_string .= $single_letter;
    }
    $_SESSION['captcha_string'] = $captcha_string;
  imagepng($image, 'captcha.png');
}
?>