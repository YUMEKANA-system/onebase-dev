<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>
<?$user = text_encode_(@$user)?>
<script type="text/javascript" src="/js/ajaxzip2.js"></script>
<script type="text/javascript">AjaxZip2.JSONDATA = '/json';</script>
<div id="regist">
<section class="regist">

<?if(!$action){?>

	<img class="regist__logo" src="/img/common/logo-icon.png" alt="" />
	<h1 class="regist__title">無料会員登録フォーム</h1>

	<div class="regist__inputs">
		<p class="regist__inputs-description">夢を叶える百貨店へようこそ！<br>お申込み者の情報を入力してください。</p>
		<?=$msg?>

		<form action="/regist/" method="post">
			<p class="regist__inputs-info">お名前 ※</p>
			<div class="regist__inputs-box">
				<input class="regist__inputs-name1" type="text" name="user[name1]" value="<?=@$user["name1"]?>" placeholder="姓 Last name" required>

				<input class="regist__inputs-name2" type="text" name="user[name2]" value="<?=@$user["name2"]?>" placeholder="名 First name" required>
			</div>

			<p class="regist__inputs-info">メールアドレス ※</p>
			<input class="regist__inputs-mail1" id="user[email]" type="text" placeholder="メールアドレスを入力" name="user[email]" value="<?=@$user["email"]?>" required />

			<p class="regist__inputs-info">メールアドレス(確認) ※</p>
			<input class="regist__inputs-mail2" id="user[ref]" type="text" placeholder="メールアドレスを入力" name="confirm[ref]"  value="<?=@$confirm["ref"]?>" required />
			<?if(!$action){?><span>メールアドレスはログイン用のIDになります。</span><?}?>

			<?if(@$rfid<=100002){?>
			<p class="regist__inputs-info">紹介者がいる場合</p>
			<input class="regist__inputs-intro" type="text" name="user[rfid]" placeholder="紹介者IDを半角で入力" value="<?=@$user["rfid"]?>" />
			<?}?>

			<div class="regist__inputs-checkbox">
				<input type="checkbox" name="user[receivemail]" checked="<?=@$user["receivemail"]?"checked":""?>" value="1" id="userreceivemail" />
				<label for="userreceivemail">ダイレクトメールの配信を希望する</label>
			</div>
			<div class="regist__inputs-checkbox">
				<input type="checkbox" name="checkrule" value="1" id="checkrule"<?=isset($checkrule)?" checked=\"checked\"":""?> />
				<label for="checkrule"> 利用規約に同意する</label>
				<p>利用規約・プライバシーポリシーは<a href="/rule/privacy.php" target="_blank" rel="noopener noreferrer">こちら</a>から</p>
			</div>
			<input type="submit" value="確認画面へ進む" />
			<input type="hidden" name="action" value="1" />
		</form>
	</div>


<?}elseif($action==1){?>


	<p class="regist__confirm">以下の内容で会員登録を行います。<br>よろしければ「登録する！」ボタンを押してください。</p>

	<div class="disabled" disabled>

		<p class="regist__inputs-info">お名前</p>
		<input class="regist__inputs-name1" type="text" name="user[name1]" value="<?=@$user["name1"]?>" placeholder="姓 Last name" required>

		<input class="regist__inputs-name2" type="text" name="user[name2]" value="<?=@$user["name2"]?>" placeholder="名 First name" required>
		<div class="clear"></div>

		<p class="regist__inputs-info">メールアドレス</p>
		<input class="regist__inputs-mail1" id="user[email]" type="text" placeholder="PC または メールアドレス" name="user[email]" value="<?=@$user["email"]?>" required />

		<div class="regist__inputs-checkbox">
			<?if(@$user["rfid"]){?>
				<label>紹介者ID : #<?=@$user["rfid"]?></label>
			<?}else{?>
				<label>紹介者ID : -</label>
			<?}?>
		</div>
		<div class="regist__inputs-checkbox">
			<?if(@$user["receivemail"]==1){?>
				<label>ダイレクトメールの配信を希望する</label>
			<?}else{?>
				<label>ダイレクトメールの配信を希望しない</label>
			<?}?>
		</div>
		<div class="regist__inputs-checkbox">
			<label for="checkrule"> 利用規約に同意する</label>
		</div>

	</div>
	<div class="btn-select-box">
		<form action="/regist/" method="post" style="display:inline"><?showhidden($user,"user")?><?showhidden($confirm,"confirm")?>
			<input type="hidden" name="action" value="2" />
			<input type="hidden" name="checkrule" value="1" />
			<input class="btn-select-submit" type="submit" value="登録する！" />
		</form>
		<form action="/regist/" method="post" style="display:inline"><?showhidden($user,"user")?><?showhidden($confirm,"confirm")?>
			<input type="hidden" name="action" value="0" />
			<input type="hidden" name="checkrule" value="1" />
			<input class="btn-select-prev" type="submit" value="訂正する" />
		</form>
	</div>


<?}elseif($action==2){?>

	<img class="regist__logo" src="/img/common/logo-icon.png" alt="" />
	<p class="regist__welcome" data-en="Welcome">ようこそ！<br>夢を叶える百貨店へ</p>
	<p class="regist__welcome-info">無料会員登録が完了しました。<br><br>ログインに必要なパスワードがメールアドレスへ<br>自動送信されましたのでご確認ください。</p>
	<p class="regist__welcome-info-sub">メールが届かない場合は、お問い合わせまたは、<br />異なるメールアドレスにてお手続きください。</p><br />
	<a href="/login/" class="prev-btn">ログインはこちら</a>


<?}?>

</section>
</div>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>