<?php
/*
Template Name: blogページ
*/
?>
<?php get_header(); ?>


<div class="container">
    <!-- メイン投稿 -->
    <main>
        <div class="main_item">
            <?php
            //取得したい投稿記事などの条件を引数として渡す
            $args = array(
                //記事のタイプ
                'post_type'      => 'blog_main',
                //1ページに表示する記事の数
                'posts_per_page' => 4,
            );
            //WP_Queryクラスのオブジェクトを生成する
            $news_query = new WP_Query($args);
            ?>

            <?php if ($news_query->have_posts()) : ?>
                <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                    <div class="blog_main_item">
                        <a href="<?php the_permalink(); ?>">
                            <!-- タイトルの表示 -->
                            <h3><?php the_title(); //aタグで投稿記事へのリンクを作成し、タイトルを表示する
                                ?></h3>
                            <!-- 日付の表示 -->
                            <p><?php echo the_time('Y/m/d'); ?>

                                <!-- アイキャッチ(サムネイル)画像 -->
                                <div class="blog_main_thumnail">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php endif; ?>
                                </div>
                                <!-- 本文の抜粋 -->
                                <p><?php the_excerpt(); ?></p>
                        </a>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </main>



    <!-- サイドバー -->
    <side class="side_right">
        <div class="side_02">
            <?php get_sidebar(); ?>
        </div>


        <!-- ランキング -->
        <div class="ranking">
            <div class="ranking_logo">
                <h2>Favarite</h2>
            </div>
            <div class="ranking_item">
                <?php
                //取得したい投稿記事などの条件を引数として渡す
                $args = array(
                    //記事のタイプ
                    'post_type'      => 'blog_main',
                    //1ページに表示する記事の数
                    'posts_per_page' => 5,
                    'taxonomy' => 'main_category',
                    'term' => 'fav'

                );
                //WP_Queryクラスのオブジェクトを生成する
                $news_query = new WP_Query($args);
                ?>

                <?php if ($news_query->have_posts()) : ?>
                    <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                        <div class="blog_ranking_item">
                            <a href="<?php the_permalink(); ?>">
                                <!-- アイキャッチ(サムネイル)画像 -->
                                <div class="blog_ranking_thumnail">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php endif; ?>
                                </div>
                                <!-- 本文の抜粋 -->
                                <p><?php the_excerpt(); ?></p>
                            </a>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>



        <!-- twitter-->
        <div class="twitter">
            <div class="twitter_logo">
                <h2>Twitter</h2>
            </div>
            <div class="twitter_link">
                <blockquote class="twitter-tweet">
                    <p lang="en" dir="ltr">Sunsets don&#39;t get much better than this one over <a href="https://twitter.com/GrandTetonNPS?ref_src=twsrc%5Etfw">@GrandTetonNPS</a>. <a href="https://twitter.com/hashtag/nature?src=hash&amp;ref_src=twsrc%5Etfw">#nature</a> <a href="https://twitter.com/hashtag/sunset?src=hash&amp;ref_src=twsrc%5Etfw">#sunset</a> <a href="http://t.co/YuKy2rcjyU">pic.twitter.com/YuKy2rcjyU</a></p>&mdash; US Department of the Interior (@Interior) <a href="https://twitter.com/Interior/status/463440424141459456?ref_src=twsrc%5Etfw">May 5, 2014</a>
                </blockquote>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </side>
</div>

<?php get_footer(); ?>