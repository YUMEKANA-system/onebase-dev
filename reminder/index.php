<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>
<div id="reminder">
<section class="reminder">

	<img class="reminder__logo" src="/img/common/logo-icon.png" alt="" />
	<h1 class="reminder__title">パスワード再発行</h1>

	<div class="reminder__inputs">
		<p class="reminder__inputs-description">登録済みのメールアドレスを入力するとパスワードが送信されます。</p>
		<?=$msg?>
		<form action="/reminder/" method="post">
			<p class="reminder__inputs-info">登録メールアドレスを入力してください</p>
			<input id="email" type="text" name="email" value="" placeholder="Email" required />
			<input type="hidden" name="action" value="1" />
			<input type="submit" value="送信" />
		</form>
	</div>

	<a href="#" class="prev-btn" onclick="javascript:window.history.back(-1);return false;">前の画面に戻る</a>

</section>
</div>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>