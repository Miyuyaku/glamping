<?php
/*
Template Name: ホームページ
*/
?>

<?php get_header(); ?>
<div class="header_img"><img src="<?php echo get_template_directory_uri(); ?>/img/FUpF6v3UYAAISYx (1).jpeg" alt="">
</div>

<div class="top">
    <div class="news_logo">
        <h2>News</h2>
        <span>新着情報</span>
    </div>
    <div class="top_flex">
        <div class="news">
            <?php
            //取得したい投稿記事などの条件を引数として渡す
            $args = array(
                //記事のタイプ
                'post_type'      => 'post',
                //1ページに表示する記事の数
                // 'posts_per_page' => 4,
            );
            //WP_Queryクラスのオブジェクトを生成する
            $news_query = new WP_Query($args);
            ?>

            <?php if ($news_query->have_posts()) : ?>
                <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                    <div class="news_item">
                        <a href="<?php the_permalink(); ?>">
                            <!-- アイキャッチ(サムネイル)画像 -->
                            <div class="news_thumnail">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php endif; ?>
                            </div>

                            <!-- 日付の表示 -->
                            <p><?php echo the_time('Y.m.d'); ?></p>

                            <!-- タイトルの表示 -->
                            <p><?php echo mb_substr($post->post_title, 0, 30) . '…'; ?></p>
                        </a>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- お食事 -->
<meal>
    <div class="meal_img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/bbq_dinner_01.jpeg" alt="">
        <div class="meal_contents">
            <logo>
                <div class="meal_logo">
                    <h2>Meal</h2>
                    <span>お食事</span>
                </div>
                <div class="meal_btn">
                    <a href="<?php the_permalink(13); ?>">詳細はこちら<i class="fa-solid fa-angles-right"></i></a>
                </div>
            </logo>
        </div>
    </div>
</meal>

<!-- 宿泊 -->
<div class="stay">
    <div class="stay_logo">
        <h2>Stay</h2>
        <span>ご宿泊</span>
    </div>
    <div class="stay_content">
        <a href="#" class="stay_link">
            <div class="stay_up">
                <img src="<?php echo get_template_directory_uri(); ?>/img/22.jpeg" alt="ドームテント">
            </div>
            <div class="stay_caption">
                <h3 class="stay_title">
                    <span>Dome Tent</span>
                    <div class="stay_text">
                        <p>ドームテント</p>
                    </div>
                </h3>
            </div>
        </a>
        <a href="#" class="stay_link">
            <div class="stay_up">
                <img src="<?php echo get_template_directory_uri(); ?>/img/23.jpeg" alt="クリアドームテント">
            </div>
            <div class="stay_caption">
                <h3 class="stay_title">
                    <span>Clear Dome Tent</span>
                    <div class="stay_text">
                        <p>クリアドームテント</p>
                    </div>
                </h3>
            </div>
        </a>
        <a href="#" class="stay_link">
            <div class="stay_up">
                <img src="<?php echo get_template_directory_uri(); ?>/img/24.jpeg" alt="ベルテント">
            </div>
            <div class="stay_caption">
                <h3 class="stay_title">
                    <span>Bell Tent</span>
                    <div class="stay_text">
                        <p>ベルテント</p>
                    </div>
                </h3>
            </div>
        </a>
        <a href="#" class="stay_link">
            <div class="stay_up">
                <img src="<?php echo get_template_directory_uri(); ?>/img/25.webp" alt="ペット同伴タイプ">
            </div>
            <div class="stay_caption">
                <h3 class="stay_title">
                    <span>With Tent</span>
                    <div class="stay_text">
                        <p>ぺット同伴タイプ</p>
                    </div>
                </h3>
            </div>
        </a>
    </div>
    <div class="stay_btn">
        <a href="#">VIEW MORE<i class="fa-solid fa-angles-right"></i></a>
    </div>
</div>
<!-- スクロールしたら車が動く -->
<div class="car">
    <img src="<?php echo get_template_directory_uri(); ?>/img/1.gif" alt="">
</div>

<!-- スクロールしたらバナーを表示 -->
<script>
    $(function() {
        //画面をスクロールするとイベントが発動する
        $(window).scroll(function() {

            //フェードインさせたい要素の位置をずらす
            $('.meal_img img').css({
                'opacity': '0',
                'transform': 'translateX(-30px)'
            });

            //スクロールバーの位置を取得
            var scroll = $(window).scrollTop();

            //ウィンドウの高さを取得
            var windowHeight = $(window).height();

            $('.meal_img img').each(function() {
                //フェードインさせたい要素の縦位置を取得
                var elemPos = $(this).offset().top;

                //要素がウィンドウの中に入ってからさらに100pxスクロールしたら要素をフェードインする
                if (scroll > elemPos - windowHeight + 100) {
                    $(this).css({
                        'opacity': '1',
                        'transform': 'translateX(0)'
                    });
                }
            });
        });
    });
</script>


<!-- ふわっと表示 -->

<script>
    $(window).scroll(function() {
        // クラスを追加するwindowの位置を設定
        var scrollTop = $(this).scrollTop();
        var scrollBottom = scrollTop + $(this).height();
        var effectPos = scrollBottom - 50;

        // eachでliを順番に処理
        $(".stay_link").each(function(i) {
            if (effectPos > $(this).offset().top) {
                var that = this;

                // 0.2s毎にずれて表示
                setTimeout(function() {
                    $(that).addClass("fadein");
                }, 400 * i);
            }
        });
    });
</script>

<?php get_footer(); ?>