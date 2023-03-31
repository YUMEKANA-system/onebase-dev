<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>
<div id="notification">
	<section class="detail">

	<p class="pankuzuList"><span><a class="" href="/notification/">総合案内</a></span><span><?=$_contents_["title"]?></span></p>

	<div class="detail__article">
		<figure class="detail__article-image">
			<picture>
				<?if(is_file("{$_SERVER['SERVER_ROOT']}/upfile/contents/{$ctid}/01")){?>
					<img src="/img/upfile/contents/<?=$ctid?>/01" alt="" />
				<?}else{?>
					<img src="/img/common/information_def_img.jpg" alt="" />
				<?}?>
			</picture>
		</figure>
		<h1 class="detail__article-title"><?=$_contents_["title"]?></h1>
		<div class="detail__article-date">配信日：<?=$_contents_["date"]?></div>
		<p class="detail__article-contents"><?=$_contents_["text"]?></p>
		<?if($_contents_["url"]){?>
			<a class="detail__article-url" href="<?=$_contents_["url"]?>" target="_blank" rel="noopener noreferrer">関連情報のリンクはこちら</a><?}?>

			<a href="#" class="prev-btn" onclick="javascript:window.history.back(-1);return false;">前の画面に戻る</a>
	</div>

</section>
</div>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>