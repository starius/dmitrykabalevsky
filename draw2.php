<?
// ���� button.php - ��������� ������ �� �������.
// ������� ���������:
// $caption - �����, ����������� ���������� �������
Header("Content-Type: image/gif");

// ������� ����������� �� ������ ������������� �����
$image = ImageCreateFromGIF("button.gif");

//������������ ����
$white = ImageColorAllocate($image, 255, 255, 255);

// ���������� ������� ������
$font_height = ImageFontHeight(3);
$font_width = ImageFontWidth(3);

// ���������� ������ �������
$image_height = iY($image);
$image_width = iX($image);

// �������� ����� ������
$length = $font_width * strlen($caption);

// ��������� ��������� ���������� ��� ���������
$image_center_x = ($image_width/2)-($length/2);
$image_center_y = ($image_height/2)-($font_height/2);

// ����� �����
itring($image, 3, $image_center_x, $image_center_y, $caption, $white);

ImageGIF($image);
ImageDestroy($image);
?>


