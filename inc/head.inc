<?include_once("{$_SERVER['SERVER_ROOT']}/inc/common.inc");?>
<html>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/webpack.inc")?>

<body>
<div id="body">
<div class="main" id="web_page_<?=str_replace(array("/",".php"),"",$self)?>">
<div>
<a href="#" class="sf-back-to-top"><img src="/img/common/icon_top.png" alt="" /></a>
<div id="content_area"></div>


<header>
    <div class="header_left_10px">
        <div class="smp_567px_use">
            <a class="material-symbols-outlined free_return" href="/item/index.php">chevron_left</a>
            <a class="material-symbols-outlined skill_return" href="/item/index_s.php">chevron_left</a>
            <a class="material-symbols-outlined seminar_return" href="/seminar/index.php">chevron_left</a>
            <a class="material-symbols-outlined course_return" href="/course/index.php">chevron_left</a>
        </div>
        <div class="flex_1">
            <a class="display_top_logo" href="/">
                <img src="/img/common/yumewokanaeru_logo_A_line_fff_110.png" alt="" />
            </a>
            <a class="display_other_logo" href="/">
                <img src="/img/common/yumewokanaeru_logo_A_line.png" alt="" />
            </a>
            <a class="display_other_logo_120px" href="/">
                <img src="/img/common/yumewokanaeru_logo_240px.png" alt="" />
            </a>
            <nav class="nav_right display_768px_off">
                <ul>
                    <li><span class="material-symbols-outlined md-light">floor_lamp</span>
                        <ul>
                            <li><a href="/item/index.php">1F フリーマーケット</a></li>
                            <li><a href="/item/index_s.php">2F スキルマーケット</a></li>
                            <li><a href="/course/index.php">3F ムービーマーケット</a></li>
                            <li><a href="/seminar/index.php">4F イベントマーケット</a></li>
                            <li><a href="/guide/">フロアガイド</a></li>
                        </ul>
                    </li>
                    <li><span class="material-symbols-outlined md-light">info</span>
                        <ul>
                            <li><a href="/notification/">総合案内</a></li>
                            <li><a href="/guide/archive.php">ご利用ガイド</a></li>
                            <li><a href="/guide/access.php">アクセス方法</a></li>
                            <li><a href="/contact/">お問い合わせ</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <form action="<?=$self?>">
            <nav class="nav_rearch display_768px_off">
            <ul>
                <li class="li_rearch">
                    <input type="text" name="s[key_word]" value="<?=@$s["key_word"]?>" placeholder="検索ワード" autocomplete="off"/>
                    <input class="li_rearch_icon" type="submit" value="&#xf002;" class="fas"/>
                    <ul class="li_rearch_child">
                        <li class="free_skill_category"><?showradio($_category1,"s1","caid",0,"onchange=\"this.form.submit()\"")?></li>
                        <li class="movie_event_category"><?showradio($_category,"s","caid",0," onclick=\"this.form.submit()\"")?></li>
                    </ul>
                </li>
             </ul>
            </nav>
            </form>


        </div>
    </div>
    <nav class="display_768px_off">
        <ul>
            <li class="header_login_btn">
                <a href="/regist/index.php" class="header_regi">新規登録</a>
            </li>
            <li class="header_login_btn">
                <a href="/login/" class="header_login">ログイン</a>
            </li>
        </ul>
    </nav>
    <div class="header_ham display_768px_on">
        <!--🔍-->
        <div id="navArea100" class="nav_rearch">
            <div class="nav_search_BOX nav_search_BOX100">
                <div class="inner">
                    <form action="<?=$self?>">
                    <div class="search_fixed">
                        <h2><span>S</span>earch</h2>
                        <div class="search_fixed_flex">
                            <input type="text" name="s[key_word]" value="<?=@$s["key_word"]?>" placeholder="検索ワード" autocomplete="off"/>
                            <input class="li_rearch_icon_" type="submit" value="検索"/>
                        </div>
                        <h2 class="search_fixed_h2">カテゴリから検索</h2>
                    </div>
                    <ul class="search_fixed_ul">
                        <li class="free_skill_category"><?showradio($_category1,"s1","caid",0,"onchange=\"this.form.submit()\"")?></li>
                        <li class="movie_event_category"><?showradio($_category,"s","caid",0," onclick=\"this.form.submit()\"")?></li>
                    </ul>
                    </form>
                </div>
            </div>
            <div class="toggle_btn100 touch_highlight_color_none">
                <span class="lines line-1"></span>
                <span class="line-2 material-symbols-outlined">search</span>
                <span class="lines line-3"></span>
            </div>
            <div id="mask100"></div>
        </div>
        <!--🔍-->

        <!--🍔-->
        <section class="header_hamburge">
            <nav class="global-nav">
                <div class="global-nav_innar">
                    <nav class="www_header_hnav">
                        <ul class="flex_">
                            <li class="header_login_btn"><a href="/regist/index.php" class="header_regi">新規登録</a></li>

                            <li class="header_login_btn"><a href="/login/" class="header_login">ログイン</a></li>
                        </ul>
                    </nav>
                    <div class="nav_body">
                        <ul>
                            <li><span>フロアマップ <i class="fas fa-caret-down"></i></span>
                                <ol>
                                    <li><a href="/item/index.php">1F フリーマーケット</a></li>
                                    <li><a href="/item/index_s.php">2F スキルマーケット</a></li>
                                    <li><a href="/course/index.php">3F ムービーマーケット</a></li>
                                    <li><a href="/seminar/index.php">4F イベントマーケット</a></li>
                                    <li><a href="/guide/">フロアガイド</a></li>
                                </ol>
                            </li>
                            <li><span>総合案内 <i class="fas fa-caret-down"></i></span>
                                <ol>
                                    <li><a href="/notification/">総合案内</a></li>
                                    <li><a href="/guide/archive.php">ご利用ガイド</a></li>
                                    <li><a href="/guide/access.php">アクセス方法</a></li>
                                    <li><a href="/contact/">お問い合わせ</a></li>
                                </ol>
                            </li>
                            <li><span>運営情報 <i class="fas fa-caret-down"></i></span>
                                <ol>
                                    <li><a href="/company/">運営会社概要</a></li>
                                    <li><a href="/rule/privacy.php">プライバシーポリシー</a></li>
                                    <li><a href="/rule/">利用規約</a></li>
                                    <li><a href="/law/">特定商取引に関する表記</a></li>
                                </ol>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="hamburger" id="js-hamburger">
            <span class="hamburger__line hamburger__line--1"></span>
            <span class="hamburger__line hamburger__line--2"></span>
            <span class="hamburger__line hamburger__line--3"></span>
            </div>
        <div class="black-bg" id="js-black-bg"></div>
        </section>
        <!--🍔-->
    </div>
</header>

<div class="main_body">


<script type="text/javascript">
function toggleNav() {
    var body = document.body;
    var hamburger = document.getElementById('js-hamburger');
    var blackBg = document.getElementById('js-black-bg');

    hamburger.addEventListener('click', function() {
        body.classList.toggle('nav-open');
    });
    blackBg.addEventListener('click', function() {
        body.classList.remove('nav-open');
    });
}
toggleNav();

var startPos = 0,winScrollTop = 0;
$(window).on('scroll',function(){
    winScrollTop = $(this).scrollTop();
    if (winScrollTop >= startPos) {
        if(winScrollTop >= 80){
            $('.site-header').addClass('hide');
        }
    } else {
        $('.site-header').removeClass('hide');
    }
    startPos = winScrollTop;

});
//TOPへ
//ツールバー表示対策(ソース確認対策)
function winopen(url) {
    win = window.open(url, "host", "scrollbars=1,width=780,height=480");
}

var amountScrolled = 800;

$(window).scroll(function() {
    if ($(window).scrollTop() > amountScrolled) {
        $('a.sf-back-to-top').fadeIn('slow');
    } else {
        $('a.sf-back-to-top').fadeOut('slow');
    }
});

$('a.sf-back-to-top').click(function() {
    $('html, body').animate({
        scrollTop: 0
    }, 300);
    return false;
});
</script>
<script type="text/javascript">
var defaultOrientation; // window.orientationが0または180の時に縦長であればtrue
// 初期化処理
window.addEventListener('load', function() {
  if('orientation' in window) {
    var o1 = (window.innerWidth < window.innerHeight);
    var o2 = (window.orientation % 180 == 0);
    defaultOrientation = (o1 && o2) || !(o1 || o2);
    checkOrientation();
  }
  // もしあれば、その他Webアプリの初期化処理
}, false);
// 画面回転時に向きをチェック
window.addEventListener('resize', checkOrientation, false);
function checkOrientation () {
  if('orientation' in window) {
    // defaultOrientationがtrueの場合、window.orientationが0か180の時は縦長
    // defaultOrientationがfalseの場合、window.orientationが-90か90の時は縦長
    var o = (window.orientation % 180 == 0);
    if(window.matchMedia('(max-width: 767px)').matches) {
        if((o && defaultOrientation) || !(o || defaultOrientation)) {
          // ここに縦長画面への切り替え処理を記述
            document.getElementById("content_area").classList.remove("landscape_img");
        }else{
          // ここに横長画面への切り替え処理を記述
            document.getElementById("content_area").classList.add("landscape_img");
        }
    }
  }
}
</script>
<script type="text/javascript">

(function($) {
    var $body100   = $('#body');
  var $nav_h100   = $('#navArea_header');
  var $nav100   = $('#navArea100');
  var $BOX100   = $('.nav_search_BOX100');
  var $btn100   = $('.toggle_btn100');
  var $mask100  = $('#mask100');
  var open100   = 'open'; // class
  var open_h100   = 'open_h'; // class
  var isfixed100   = 'is-fixed'; // class
  // menu open close
    $btn100.on( 'click', function() {
    if ( ! $nav100.hasClass( open100 ) ) {
      $nav100.addClass( open100 );
      $nav_h100.addClass( open_h100 );
      $body100.addClass( isfixed100 );
    } else {
      $nav100.removeClass( open100 );
      $nav_h100.removeClass( open_h100 );
      $body100.removeClass( isfixed100 );
    }
  });
  // mask close
  $mask100.on('click', function() {
    $nav100.removeClass( open100 );
    $nav_h100.removeClass( open_h100 );
    $body100.removeClass( isfixed100 );
  });
} )(jQuery);
</script>