<? include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc") ?>
<div id="guide">
	<section class="index">

		<div class="index__sns">
			<div class="index__sns-inner">
				<span class="index__sns-text">夢を叶える百貨店 公式 LINE アカウント</span>
				<div class="index__sns-info">
					<span class="ps-l--off">最新情報やお得なお知らせを配信中！</span>
					<a href="https://lin.ee/j1c4rBK" target="_blank" rel="noopener noreferrer"><i class="fab fa-line"></i> <span>Follow Me</span></a>
				</div>
			</div>
		</div>
		<ul class="slider">
			<li><img src="/img/common/online_shop01.jpg" alt=""></li>
			<li><img src="/img/common/market_bldg02.jpg" alt=""></li>
			<li><img src="/img/common/market_img_001.png" alt=""></li>
			<li><img src="/img/common/movie_buy02.jpg" alt=""></li>
			<li><img src="/img/common/syuppin_M.jpg" alt=""></li>
			<li><img src="/img/common/syuppin_E.jpg" alt=""></li>
		</ul>

		<div class="index__floorGuide">
			<h1 class="index__floorGuide-title">夢を叶える百貨店</h1>
			<ul class="index__floorGuide-lists">
				<li class="index__floorGuide-list">
					<a href="/item/index.php">
						<div class="list-name">
							<span>1F</span>
							<h2>Free market</h2>
							<p>商品販売フロア</p>
						</div>
						<div class="list-desc">
							<p>中古品から新品の物販を取り扱うフロアです。<br>望む人々が自発的に取引を行なえる市場を目指し、従来の' flea market 'ではなく" Free market "を採用しています。</p>
						</div>
					</a>
				</li>
				<li class="index__floorGuide-list">
					<a href="/item/index_s.php">
						<div class="list-name">
							<span>2F</span>
							<h2>Skill market</h2>
							<p>スキル販売フロア</p>
						</div>
						<div class="list-desc">
							<p>スキル・サービスの販売を取り扱うフロアです。<br>仕事を依頼したい方と請け負いたい方をマッチングします。お悩みや困った際はこちらのフロアを覗いてみましょう。</p>
						</div>
					</a>
				</li>
				<li class="index__floorGuide-list">
					<a href="/course/index.php">
						<div class="list-name">
							<span>3F</span>
							<h2>Movie market</h2>
							<p>動画販売フロア</p>
						</div>
						<div class="list-desc">
							<p>動画コンテンツの販売を取り扱うフロアです。<br>あなたの人生をより豊かにする動画が販売されています。夢や理想を広げるキッカケをぜひ見つけてみてください。</p>
						</div>
					</a>
				</li>
				<li class="index__floorGuide-list">
					<a href="/seminar/index.php">
						<div class="list-name">
							<span>4F</span>
							<h2>Event market</h2>
							<p>イベント販売フロア</p>
						</div>
						<div class="list-desc">
							<p>イベント・セミナー・コンサートなどの販売を取り扱うフロアです。<br>オンラインからリアルまで出品者が体験を共有する場を提供しています。新しい出会いであなたの世界を広げてください。</p>
						</div>
					</a>
				</li>
				<!-- <li class="index__floorGuide-list">
					<a href="">
						<div class="list-name">
							<span>5F</span>
							<h2>Travel market<ruby style="font-size: 14px;">（準備中）</ruby></h2>
							<p>旅行プラン販売フロア</p>
						</div>
						<div class="list-desc">
							<p>テスト文章が入ります。テスト文章が入ります。テスト文章が入ります。テスト文章が入ります。テスト文章が入ります。テスト文章が入ります。テスト文章が入ります。テスト文章が入ります。テスト文章が入ります。</p>
						</div>
					</a>
				</li> -->
				<li class="index__floorGuide-list">
					<a href="">
						<div class="list-name">
							<span class="mall-color">mall</span>
							<h2>Community mall</h2>
							<p>（準備中）コミュニティ紹介フロア</p>
						</div>
						<div class="list-desc">
							<p>人気のコミュニティやスクールなどを紹介するフロアです。<br>各運営者によって独自コンテンツやカリキュラムなどが展開されており、一部無料コンテンツを体験することもできます。</p>
						</div>
					</a>
				</li>
			</ul>
			<div class="community_logo">
				<img src="/img/common/market_logo.png" alt="" />
			</div>
		</section>



	</section>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">
	$('.slider').slick({
		arrows: false,
		autoplay: true,
		autoplaySpeed: 0,
		speed: 6900,
		infinite: true,
		pauseOnHover: false,
		pauseOnFocus: false,
		cssEase: 'linear',
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [{
				breakpoint: 768,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 450,
				settings: {
					slidesToShow: 2,
				}
			}
		]
	});
</script>
<? include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc") ?>