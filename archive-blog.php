<?php
/*
Template Name: blogページ
*/
?>
<?php get_header(); ?>

<!-- ピックアップ記事 -->
<div class="pickup">
    <div class="pickup_item">
        <?php
        //取得したい投稿記事などの条件を引数として渡す
        $args = array(
            //記事のタイプ
            'post_type'      => 'blog_pickup',
            //1ページに表示する記事の数
            'posts_per_page' => 3,
        );
        //WP_Queryクラスのオブジェクトを生成する
        $news_query = new WP_Query($args);
        ?>
        <?php if ($news_query->have_posts()) : ?>
            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                <div class="blog_pickup_item">
                    <a href="<?php the_permalink(); ?>">
                        <!-- アイキャッチ(サムネイル)画像 -->
                        <div class="blog_pickup_thumnail">
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
                'posts_per_page' => 3,
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
                            <p><?php echo the_time('Y/m/d'); ?><a href="#">カテゴリ1</a></p>

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
                <h2>Ranking</h2>
            </div>
            <div class="ranking_item">
                <?php
                //取得したい投稿記事などの条件を引数として渡す
                $args = array(
                    //記事のタイプ
                    'post_type'      => 'blog_ranking',
                    //1ページに表示する記事の数
                    'posts_per_page' => 3,
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



        <!-- アーカイブ-->
        <div class="archive">
            <div class="archive_logo">
                <h2>Archive</h2>
            </div>
            <div class="archive_item">
                <?php
                //取得したい投稿記事などの条件を引数として渡す
                $args = array(
                    //記事のタイプ
                    'post_type'      => 'blog_archive',
                    //1ページに表示する記事の数
                    'posts_per_page' => -1,
                );
                //WP_Queryクラスのオブジェクトを生成する
                $news_query = new WP_Query($args);
                ?>

                <?php if ($news_query->have_posts()) : ?>
                    <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                        <div class="blog_archive_item">
                            <a href="<?php the_permalink(); ?>">
                                <!-- アイキャッチ(サムネイル)画像 -->
                                <div class="blog_archive_thumnail">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php endif; ?>
                                </div>
                                <!-- 本文の抜粋 -->
                                <!-- <p><?php the_excerpt(); ?></p> -->

                                <!-- 日付の表示 -->
                                <p><?php echo the_time('Y/m/d(D)'); ?></p>
                            </a>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </side>
</div>

<?php get_footer(); ?>