<footer>
    <div class="content">
        <!-- about -->
        <div class="section_item">
            <h3>About</h3>
            <p>テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
            </p>
            <div class="about_list">
                <a href="#"><i class="fa-solid fa-play">プロフィール詳細</i></a>
                <a href="#"><i class="fa-solid fa-play">お問い合わせ</i></a>
            </div>
        </div>

        <!-- menu -->
        <div class="section_item">
            <h3>Menu</h3>
            <div class="menu_list">
                <a href="<?php the_permalink(19); ?>">
                    <p>home</p>
                </a>
                <a href="<?php the_permalink(9); ?>">
                    <p>blog</p>
                </a>
                <a href="#">
                    <p>meal</p>
                </a>
                <a href="#">
                    <p>stay</p>
                </a>
                <a href="<?php the_permalink(1); ?>">
                    <p>information</p>
                </a>
                <hr>
            </div>
        </div>

        <!-- map -->
        <div class="section_item">
            <h3>Map</h3>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1619.8314434286533!2d139.80984975822125!3d35.70991254504687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ed0d12f9adf%3A0x7d1d4fb31f43f72a!2z5p2x5Lqs44K544Kr44Kk44OE44Oq44O8!5e0!3m2!1sja!2sjp!4v1660659143081!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</footer>

<p class="copyright">©️2022 yaku homepage</p>

<?php wp_footer(); ?>
</body>

</html>




