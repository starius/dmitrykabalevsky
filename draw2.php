<?
// файл button.php - помещение текста на рисунок.
// входные параметры:
// $caption - текст, размещаемый посередине рисунка
Header("Content-Type: image/gif");

// создаем изображение на основе существующего файла
$image = ImageCreateFromGIF("button.gif");

//регистрируем цвет
$white = ImageColorAllocate($image, 255, 255, 255);

// определяем размеры шрифта
$font_height = ImageFontHeight(3);
$font_width = ImageFontWidth(3);

// определяем размер рисунка
$image_height = iY($image);
$image_width = iX($image);

// получаем длину строки
$length = $font_width * strlen($caption);

// вычисляем начальные координаты для заголовка
$image_center_x = ($image_width/2)-($length/2);
$image_center_y = ($image_height/2)-($font_height/2);

// пишем текст
itring($image, 3, $image_center_x, $image_center_y, $caption, $white);

ImageGIF($image);
ImageDestroy($image);
?>


