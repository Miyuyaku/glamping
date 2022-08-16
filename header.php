<!DOCTYPE html>

<head>
    <html lang="ja">
    <title>GRANPING</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/archive-blog.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sanitize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sidebar.css">

    <!-- font -->
    <script src="https://kit.fontawesome.com/43751a5777.js" crossorigin="anonymous"></script>


    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav>
            <a href="<?php the_permalink(19) ?>">
                <div class="glanping_icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/glanping.jpeg" alt="ロゴ">
                </div>
            </a>
            <div class="item_link">
                <a href="<?php the_permalink(19); ?>">
                    <span>home</span>
                </a>
                <a href="<?php the_permalink(9); ?>">
                    <span>blog</span>
                </a>
                <a href="<?php the_permalink(13); ?>">
                    <span>information</span>
                </a>
                <a href="<?php the_permalink(15); ?>">
                    <span>access</span>
                </a>
                <a href="<?php the_permalink(1); ?>">
                    <span>contact</span>
                </a>
            </div>
        </nav>

    </header>