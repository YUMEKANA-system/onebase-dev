<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>
<style type="text/css">
body {background: url(/img/common/login_bgimg.png) no-repeat center center;background-size: cover;}
</style>
<div id="login">
<section class="login">

	<p class="login__heading"><span class="login__heading-logo">Login</span><br>Welcome back!</p>

	<div class="login__inputs">
		<form action="/login/" method="post">
			<div class="login__inputs-mail">
				<p class="input-title">メールアドレス</p>
				<input id="loginid" type="text" name="loginid" value="" placeholder="メールアドレス" required />
			</div>
			<div class="login__inputs-password">
				<p class="input-password">パスワード</p>
				<input id="password" type="password" name="password" value="" placeholder="英数字" required />
				<p class="input-recovery"><a href="https://<?=$_SERVER["tld"]?>/reminder/">パスワードをお忘れの方はこちらから</a></p>
			</div>
			<div class="login__inputs-login">
				<input type="submit" value="ログイン" />
				<input type="hidden" name="action" value="login" />
				<p class="input-keep">
					<input type="checkbox" name="setcookie" value="1" id="setcookie" />
					<label for="setcookie">ログイン状態を保持する</label>
				</p>
			</div>
		</form>
	</div>

	<div class="login__links">
		<p class="is-member">夢を叶える百貨店は初めてですか？</p>
		<a href="https://<?=$_SERVER["tld"]?>/regist/">無料登録はこちら</a>
	</div>

</section>
</div>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>