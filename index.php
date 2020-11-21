<?php 

require_once 'vendor/autoload.php';

use Spatie\Browsershot\Browsershot;
use Spatie\Image\Manipulations;
if (isset($_GET['url'])) {
	$url = $_GET['url'];
} else {
	$url = 'https://labeep.me/%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6%D9%8A%D8%A7%D8%AA/%D8%A7%D9%84%D8%B5%D9%81%D9%88%D9%81';	
}

Browsershot::url($url)->savePdf('files/example.pdf');
