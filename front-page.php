<?php
/*
Template Name: ホームページ
*/
?>

<?php get_header(); ?>
<div class="header_img"><img src="<?php echo get_template_directory_uri(); ?>/img/FUpF6v3UYAAISYx (1).jpeg" alt=""></div>
<div class="news_logo">
    <span>news</span>
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