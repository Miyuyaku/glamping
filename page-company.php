<?php
/*
Template Name: informationページ
*/
?>
<?php get_header(); ?>
<div class="company_img"><img src="<?php echo get_template_directory_uri(); ?>/img/216.jpeg" alt=""></div>

<div class="information">
    <logo>
        <h2>information</h2>
        <span>情報</span>
        <logo>
</div>
<div class="company">
    <div class="company_flex">
        <h2 class="company_title">
            <span class="en">COMPANY</span>
            <span class="ja">社内情報</span>
        </h2>
        <text>
            <dt>会社名</dt>
            <dd>Gramping</dd>
            <dt>所在地</dt>
            <dd>東京スカイツリー</dd>
            <dt>代表</dt>
            <dd>xxxxxx</dd>
            <dt>設立</dt>
            <dd>2022年8月20日</dd>
            <dt>資本金</dt>
            <dd>xxx円</dd>
            <dt>事業内容</dt>
            <dd>グランピング</dd>
        </text>
    </div>
    <div class="company_box">
        <img src="<?php echo get_template_directory_uri(); ?>/img/217.png" alt="会社情報">
    </div>
</div>
<?php get_footer(); ?>