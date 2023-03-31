<? include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc") ?>
<div id="guide">
	<section class="detail">
	<?extract($_contents_)?>
	<nav class="detail__nav">
		<p class="pankuzuList">
			<span><a href="/guide/archive.php">ご利用ガイド</a></span>
			<span><?= $_category[$caid] ?>__<?= $_contents_["title"] ?></span>
		</p>
		<ul class="detail__nav-list">
			<? foreach ($_contents__ as $ctid => $col) {
				extract($col);
				$current_url =  $_SERVER['REQUEST_URI'];
				$link_url = "/guide/{$ctid}"; ?>

			<li>
				<? if ($disp == 1) { ?>
					<a href="<?= $link_url ?>" <?= ($current_url == $link_url ? ' class="--location"' : '') ?>><?= $title ?></a>
					<? } ?><? } ?>
			</li>
		</ul>
	</nav>
	<?extract($_contents_)?>
	<div class="detail__article">
		<h1 class="detail__article-title"><?= $_contents_["title"] ?></h1>
		<div class="detail__article-date">最終更新日：<?= $_contents_["date"] ?></div>
		<figure class="detail__article-image">
			<picture>
			<?if(is_file("{$_SERVER['SERVER_ROOT']}/upfile/contents/{$ctid}/01")){?>
					<img src="/img/upfile/contents/<?= $ctid ?>/01" alt="" />
				<? } else { ?>
					<img src="/img/common/information_def_img.jpg" alt="" />
				<? } ?>
			</picture>
		</figure>
		<p class="detail__article-contents"><?= $_contents_["text"] ?></p>
		<? if ($_contents_["url"]) { ?>
			<a class="detail__article-url" href="<?= $_contents_["url"] ?>" target="_blank" rel="noopener noreferrer">関連情報のリンクはこちら</a><? } ?>
			<a href="/guide/archive.php" class="prev-btn">ご利用ガイドに戻る</a>
	</div>


	</section>
</div>
<? include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc") ?>