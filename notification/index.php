<? include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc") ?>
<div id="notification">
	<section class="notification">

		<div class="notification__heading">
			<h1 class="notification__heading-title">総合案内</h1>
		</div>
		<div class="notification__news">
			<?= pagenavi($totalcnt, $pno) ?>
			<p class="pagenavi__num"><?= $totalcnt ?>件中/<?= $startnum + 1 ?>件～<?= $endnum ?>件 を表示</p>
			<? foreach ($_contents as $ctid => $col) {
				extract($col); ?>
				<? if ($disp == 1) { ?>
					<ul class="notification__news-lists">
						<li class="notification__news-list">
							<a href="/notification/<?= $ctid ?>">
								<time class="notification__news-date"><?= $date ?></time>
								<p class="notification__news-title"><?= $title ?></p>
							</a>
						</li>
					</ul>
					<? } ?><? } ?>

					<?= pagenavi($totalcnt, $pno) ?>
					
					<a href="#" class="prev-btn" onclick="javascript:window.history.back(-1);return false;">前の画面に戻る</a>
		</div>


	</section>
</div>
<? include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc") ?>