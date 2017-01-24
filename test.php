<?
$index = index::getPages();

$pnumber = index::getPageNumber();

if ($pnumber > 0) {
	$pnumber--;
}

if (index::countPages() > 0) {
	$index++;
}
?>
