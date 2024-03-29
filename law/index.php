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
					<li class="--active"><a id="info__" href="/law/">特定商取引に関する表記</a></li>
					<li><a id="company__" href="/company/">運営会社</a></li>
					<li><a id="contact__" href="/contact/">お問い合わせ</a></li>
				</ul>
			</div><!--left-inner-->
		</div><!--stickyStyle__inner-left-->

		<div class="stickyStyle__inner-right"><!--stickyStyle__inner-right-->

			<section class="smp-menu">
				<? include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/smp-menu/law.inc") ?>
			</section>

			<section class="right-inner"><!--right-inner-->
				<h1>特定商取引に関する表記</h1>
				<table>
					<tr>
						<th>運営会社</th>
						<td>ONE COLLEGE合同会社</td>
					</tr>
					<tr>
						<th>責任者</th>
						<td>藤原 立和</td>
					</tr>
					<tr>
						<th>所在地</th>
						<td>東京都葛飾区高砂3丁目22番14号</td>
					</tr>
					<tr>
						<th>電話番号</th>
						<td>090-5580-3853</td>
					</tr>
					<tr>
						<th>受付時間</th>
						<td>10:00～18:00</td>
					</tr>
					<tr>
						<th>eMail</th>
						<td>info@<?= $_SERVER["tld"] ?></td>
					</tr>
					<tr>
						<th>運営サイト</th>
						<td><a href="https://www.<?= $_SERVER["tld"] ?>/">https://www.<?= $_SERVER["tld"] ?>/</a></td>
					</tr>
					<tr>
						<th>販売価格</th>
						<td>各販売ページをご参照ください</td>
					</tr>
					<tr>
						<th>商品代金以外<br />の必要料金</th>
						<td>消費税<br />送料*各出品者が設定<br />振込の場合は振込手数料<br />クレジットカード分割払の場合は分割決済手数料<br />事務手数料</td>
					</tr>
					<tr>
						<th>郵送時期</th>
						<td>入金確認後、商品が準備でき次第発送いたします</td>
					</tr>
					<tr>
						<th>支払方法</th>
						<td>銀行振込、口座振替、クレジットカード、ポイント、サイト内独自媒体</td>
					</tr>
					<tr>
						<th>申込み有効期限</th>
						<td>お申し込みから７日間入金がない場合はキャンセルとなります</td>
					</tr>
					<tr>
						<th>返品・交換・<br />キャンセル</th>
						<td class="text_kerning">出品者により対応は異なりますので、出品者情報や必要によって直接お問い合わせください<br />原則として、返品は未使用の場合に限り、商品が不良の場合のみ交換の対象となります<br />キャンセルは商品発送後はお受け致しかねる場合がございます<br />動画購入後の返品は動画コンテンツの性質上対応が難しい場合がございます</td>
					</tr>
					<tr>
						<th>返品期限</th>
						<td>商品出荷より30日以内にご連絡ください</td>
					</tr>
					<tr>
						<th>返品送料</th>
						<td>当事者同士で決定し対応するものとします</td>
					</tr>
					<tr>
						<th>表現及び商品に<br />関する注意書き</th>
						<td>本商品に示された表現や再現性には個人差があり、必ずしも利益や効果を保証したものではありません</td>
					</tr>
				</table>

			</section><!--right-inner-->

			<a href="#" class="prev-btn" onclick="javascript:window.history.back(-1);return false;">前の画面に戻る</a>

		</div><!--stickyStyle__inner-right-->
	</div><!--stickyStyle__inner-->
</div><!--stickyStyle-->
<? include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc") ?>