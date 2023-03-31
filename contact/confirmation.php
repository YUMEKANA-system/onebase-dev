<? include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc") ?>

<div class="stickyStyle"><!--stickyStyle-->
	<div class="stickyStyle__inner"><!--stickyStyle__inner-->

		<div class="stickyStyle__inner-left"><!--stickyStyle__inner-left-->
			<p class="left-pankuzuList"><span>夢を叶える百貨店</span><span>サポート</span></p>
			<div class="left-inner"><!--left-inner-->
				<ul>
					<li><a id="rule__" href="/rule/">利用規約</a></li>
					<li><a id="rule__" href="/rule/affiliate.php">利用規約(アフィリエイト)</a></li>
					<li><a id="privacy__" href="/policy/">プライバシーポリシー</a></li>
					<li><a id="info__" href="/law/">特定商取引に関する表記</a></li>
					<li><a id="company__" href="/company/">運営会社</a></li>
					<li class="--active"><a id="contact__" href="/contact/">お問い合わせ</a></li>
				</ul>
			</div><!--left-inner-->
		</div><!--stickyStyle__inner-left-->

		<div class="stickyStyle__inner-right"><!--stickyStyle__inner-right-->

			<section class="smp-menu">
				<? include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/smp-menu/contact.inc") ?>
			</section>

			<section class="right-inner"><!--right-inner-->
				<h1>お問い合わせ</h1>
				<h2>お問い合わせフォーム</h2>
				<h3>内容に不備がなければ「送信する」を押してください<h3>
					<form action="/contact/submit.php" method="post" name="myform">
						<table class="contact-form">
							<tr>
								<th>お名前</th>
								<td><input type="text" name="name" readonly="readonly" value="<?= $name ?>"></td>
							</tr>
							<tr>
								<th>フリガナ</th>
								<td><input type="text" name="furigana" readonly="readonly" value="<?= $furigana ?>"></td>
							</tr>
							<tr>
								<th>メールアドレス</th>
								<td><input type="text" name="address" readonly="readonly" value="<?= $address ?>"></td>
							</tr>
							<tr>
								<th>電話番号</th>
								<td><input type="text" name="tel" readonly="readonly" value="<?= $tel ?>"></td>
							</tr>
							<tr>
								<th>お問い合わせ</th>
								<td><textarea name="otoiawase" class="gray_bg" readonly="readonly"><?= $otoiawase ?></textarea></td>
							</tr>
						</table>
						<input type="submit" value="送信する">

						<a href="#" class="prev-submit-btn" onclick="javascript:window.history.back(-1);return false;">もどる</a>

					</form>

			</section><!--right-inner-->

		</div><!--stickyStyle__inner-right-->
	</div><!--stickyStyle__inner-->
</div><!--stickyStyle-->
<? include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc") ?>