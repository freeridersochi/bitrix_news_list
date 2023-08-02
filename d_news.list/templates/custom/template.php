<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
global $APPLICATION;
$APPLICATION->SetAdditionalCss("/local/components/d_news.list/css/common.css");
?>

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>

<div class="news-list barba-wrapper">
	<div class="article-list">
	
<!-- CARD CONTENT -->
<?foreach($arResult["ITEMS"] as $arItem):?>

<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

<a class="article-item article-list__item" 
	href="<?=$arItem["DETAIL_PAGE_URL"]?>"
	data-anim="anim-3">
	<div class="article-item__background">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
		<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
				data-src="xxxHTMLLINKxxx0.39186223192351520.41491856731872767xxx"
				alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
				title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"/>
		<?else:?>
			<img 
				data-src="xxxHTMLLINKxxx0.39186223192351520.41491856731872767xxx"
				alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
				title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"/>
			<?endif;?>
		<?endif?>
	</div>
	<div class="article-item__wrapper">
		<div class="article-item__title">
			<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
				<?echo $arItem["NAME"]?>
			<?endif;?>
		</div>
		<div class="article-item__content">
			<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
				<?echo $arItem["PREVIEW_TEXT"];?>
			<?endif;?>
		</div>

		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>

	</div>
	
	<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif?>
</a>

	<!-- CARD CONTENT END -->
	<?foreach($arItem["FIELDS"] as $code=>$value):?>
		<small>
		<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
		</small><br />
	<?endforeach;?>
	<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
		<small>
		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		</small><br />
	<?endforeach;?>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<br /><?=$arResult["NAV_STRING"]?>
	<?endif;?>

<?endforeach;?>

	</div> <!-- div class="article-list" end -->
</div> <!-- news div end -->



	
