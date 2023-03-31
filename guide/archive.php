<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>
<?php $comingSoon = "現在、準備中です。";?>
<div id="guide">
	<section class="archive">

		<div class="archive__heading">
			<h1 class="archive__heading-title">ご利用ガイド</h1>
		</div>

		<div class="archive__items">
			<div class="archive__item">
				<p class="archive__item-title"><span class="material-symbols-outlined">local_library</span>初めての方へ</p>
				<?if($_contents_01){?>
					<ul class="archive__item-lists">
						<?foreach($_contents_01 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="archive__item-list"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="archive__item-comingSoon"><?=$comingSoon?></span><?}?>
			</div>
			<div class="archive__item">
				<p class="archive__item-title"><span class="material-symbols-outlined">person_add</span>会員登録について</p>
				<?if($_contents_02){?>
					<ul class="archive__item-lists">
						<?foreach($_contents_02 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="archive__item-list"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="archive__item-comingSoon"><?=$comingSoon?></span><?}?>
			</div>
			<div class="archive__item">
				<p class="archive__item-title"><span class="material-symbols-outlined">settings_account_box</span>会員情報について</p>
				<?if($_contents_03){?>
					<ul class="archive__item-lists">
						<?foreach($_contents_03 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="archive__item-list"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="archive__item-comingSoon"><?=$comingSoon?></span><?}?>
			</div>
			<div class="archive__item">
				<p class="archive__item-title"><span class="material-symbols-outlined">shopping_bag</span>購入について</p>
				<?if($_contents_04){?>
					<ul class="archive__item-lists">
						<?foreach($_contents_04 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="archive__item-list"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="archive__item-comingSoon"><?=$comingSoon?></span><?}?>
			</div>
			<div class="archive__item">
				<p class="archive__item-title"><span class="material-symbols-outlined">storefront</span>出品について</p>
				<?if($_contents_05){?>
					<ul class="archive__item-lists">
						<?foreach($_contents_05 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="archive__item-list"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="archive__item-comingSoon"><?=$comingSoon?></span><?}?>
			</div>
			<div class="archive__item">
				<p class="archive__item-title"><span class="material-symbols-outlined">cancel</span>キャンセル・返品について</p>
				<?if($_contents_06){?>
					<ul class="archive__item-lists">
						<?foreach($_contents_06 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="archive__item-list"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="archive__item-comingSoon"><?=$comingSoon?></span><?}?>
			</div>
			<div class="archive__item">
				<p class="archive__item-title"><span class="material-symbols-outlined">verified_user</span>有料会員について</p>
				<?if($_contents_07){?>
					<ul class="archive__item-lists">
						<?foreach($_contents_07 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="archive__item-list"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="archive__item-comingSoon"><?=$comingSoon?></span><?}?>
			</div>
			<div class="archive__item">
				<p class="archive__item-title"><span class="material-symbols-outlined">rule</span>利用規約など</p>
				<?if($_contents_08){?>
					<ul class="archive__item-lists">
						<?foreach($_contents_08 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="archive__item-list"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="archive__item-comingSoon"><?=$comingSoon?></span><?}?>
			</div>
			<div class="archive__item">
				<p class="archive__item-title">その他</p>
				<?if($_contents_09){?>
					<ul class="archive__item-lists">
						<?foreach($_contents_09 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="archive__item-list"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="archive__item-comingSoon"><?=$comingSoon?></span><?}?>
			</div>
		</div>
		<div class="archive__contact">
			<p class="archive__contact-title">解決されない場合は<br class="ps-s--on">以下よりお問い合わせください。</p>
			<a href="/contact/" class="archive__contact-btn">お問い合わせはこちら</a>
		</div>

		<a href="#" class="prev-btn" onclick="javascript:window.history.back(-1);return false;">前の画面に戻る</a>

</section>
</div>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>