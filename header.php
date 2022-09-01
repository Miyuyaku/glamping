<!DOCTYPE html>

<html lang="ja">
<head>
    <title>GRANPING</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/archive-blog.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sanitize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sidebar.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-company.css">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- font -->
    <script src="https://kit.fontawesome.com/43751a5777.js" crossorigin="anonymous"></script>


    <?php wp_head(); ?>
</head>

<body>
    <!-- ハンバーガーメニュー -->
    <script>
        $(function() {
            $('.menu-btn').on('click', function() {
                $('.menu').toggleClass('active');
            });
        });
    </script>

    <header>
        
        <a class="menu__item" href="<?php the_permalink(19) ?>">
            <div class="glanping_icon">
                <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2661.PNG" alt="ロゴ">
            </div>
        </a>
        <nav>
            <!-- ハンバーガーメニュー部分 -->
            <button type="button" class="menu-btn">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="menu">
                <a class="menu__item" href="<?php the_permalink(19) ?>">home</a>
                <a class="menu__item" href="<?php the_permalink(9) ?>">blog</a>
                <a class="menu__item" href="#">meal</a>
                <a class="menu__item" href="#">stay</a>
                <a class="menu__item" href="<?php the_permalink(13) ?>">information</a>
            </div>


            <!-- <a href="<?php the_permalink(19) ?>">
                <div class="glanping_icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2661.PNG" alt="ロゴ">
                </div>
            </a>

            <div class="item_link">
                <a href="<?php the_permalink(19); ?>">
                    <span>home</span>
                </a>
                <a href="<?php the_permalink(9); ?>">
                    <span>blog</span>
                </a>
                <a href="#">
                    <span>meal</span>
                </a>
                <a href="#">
                    <span>stay</span>
                </a>
                <a href="<?php the_permalink(13); ?>">
                    <span>information</span>
                </a>
            </div> -->
        </nav>

    </header>