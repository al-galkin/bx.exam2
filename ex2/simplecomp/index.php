<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Простой компонент: [ex2-70], [ex2-58], [ex2-82], [ex2-100]");
?>

<?$APPLICATION->IncludeComponent(
	"simplecomp:ex2-70", 
	".default", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"USER_PROPERTY" => "UF_NEWS_LINK",
		"IBLOCK_CATALOG_ID" => "2",
		"IBLOCK_NEWS_ID" => "1",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>