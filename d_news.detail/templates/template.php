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

use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss("/local/components/d_news.detail/templates/custom/css/common.css");
$this->setFrameMode(true);
?>

<!-- original card -->
<div class="article-card">
    <div class="article-card__title"><?=$arResult['CARD_TITLE'] ?></div>
    <div class="article-card__date"><?=strtolower(FormatDate("d F Y", MakeTimeStamp($arItem['ACTIVE_FROM'])));?></div>
    <div class="article-card__content">
    	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
    	<div class="article-card__image sticky">
	    	<img
    			class="detail_picture"
    			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
    			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
    			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
    			/>
		</div>
    	<?endif?>
        <div class="article-card__text">
            <div class="block-content" data-anim="anim-3"><p><?echo $arResult["DETAIL_TEXT"];?></p>
                <p>Достигнутые результаты наглядно показывают, что развитие компании соответствует заявленной ранее
                    стратегии.Более подробную информацию можно найти в разделе «Инвесторам».</p></div>
            <a class="article-card__button" href="/news/index.php">Назад к новостям</a></div>
    </div>
</div>



















