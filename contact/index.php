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
				<p>
					夢を叶える百貨店をご覧いただきありがとうございます。
					<br>お問い合わせ内容によってはご回答できない、もしくはご回答に時間を要する場合もございますので予めご了承ください。
					<br><br>お客さまの個人情報は厳重な安全管理を行うとともに、お問い合わせへの回答または情報提供のためだけに使用させていただきます。
					<br>本問い合わせにおける個人情報は、第三者にお渡しすることはございません。
					<br>個人情報の取扱い全般に関する考え方は「プライバシーポリシー」をご確認ください。
				</p>
				<h2>お問い合わせフォーム</h2>
				<h3>必要事項をご記入ください。<h3>
				<p class="contact-info">出品商品へのお問い合わせは、各種商品ページより出品者へご連絡ください。<br>その他ご不明点はお気軽にお問い合わせください。</p>
				<form action="/contact/confirmation.php" method="post" name="myform">
					<table class="contact-form">
						<tr>
							<th>お名前</th>
							<td><input type="text" name="name" placeholder="（必須）" required></td>
						</tr>
						<tr>
							<th>フリガナ</th>
							<td><input type="text" name="furigana" placeholder="（必須）" required></td>
						</tr>
						<tr>
							<th>メールアドレス</th>
							<td><input type="text" name="address" placeholder="（必須）" required></td>
						</tr>
						<tr>
							<th>電話番号</th>
							<td><input type="text" name="tel" placeholder=""></td>
						</tr>
						<tr class="contact_form-textarea">
							<th>お問い合わせ</th>
							<td><textarea name="otoiawase" placeholder="（必須）" required></textarea></td>
						</tr>
					</table>
					<input type="button" value="確認画面へ" onclick="check_contactform()">
				</form>

			</section><!--right-inner-->

			<a href="#" class="prev-btn" onclick="javascript:window.history.back(-1);return false;">前の画面に戻る</a>

		</div><!--stickyStyle__inner-right-->
	</div><!--stickyStyle__inner-->
</div><!--stickyStyle-->
<? include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc") ?>