<!-- イベント情報 -->
<section class="section-wrapper" id="event">
    <div class="section-inner">
        <div class="section-title-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title_ue.png" alt="">
            <h3 class="section-title">イベント情報</h3>
        </div>
        <div class="event-container">

            <!--カスタム投稿-->
            <?php
/* （ステップ1）データの取得 */
$query = new WP_Query(
    array(
        'post_type' => 'info-event',
        'posts_per_page' => 10,
    )
);
?>
            <?php
/* （ステップ2）データの表示 */
if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post();?>
            <div class="event-box">
                <div class="event-box-inner">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>" alt="">
                    <p class="event-title"><?php the_title(); ?></p>
                    <p class="event-main-text"><?php the_field('overview'); ?></p>
                    <p class="event-icon">内容</p>
                    <p class="event-sub-text"><?php the_field('detail'); ?></p>
                </div>
                <div class="contact-btn">
                    <a href="<?php the_field('link'); ?>">
                        <i class="material-icons">email</i>
                        お問い合わせ
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>

        </div>
    </div>
</section>


<!-- メディア掲載情報 -->
<section class="section-wrapper" id="media">
    <div class="section-inner">
        <div class="section-title-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title_ue.png" alt="">
            <h3 class="section-title">メディア掲載情報</h3>
        </div>
        <div class="media-container">

            <!--カスタム投稿-->
            <?php
/* （ステップ1）データの取得 */
$query = new WP_Query(
    array(
        'post_type' => 'info-media',
        'posts_per_page' => 10,
    )
);
?>
            <?php
/* （ステップ2）データの表示 */
if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post();?>
            <div class="media-box">
                <div class="media-icon-box">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>" alt="">
                </div>
                <div class="media-text-box">
                    <p class="media-title"><?php the_title(); ?></p>
                    <p class="media-text"><?php the_field('overview'); ?></p>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>

        </div>
    </div>
</section>


<!-- 妊活サポートに関する記事 -->
<section class="section-wrapper" id="news">
    <div class="section-inner">
        <div class="section-title-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title_ue.png" alt="">
            <h3 class="section-title">妊活サポートに関する記事</h3>
        </div>
        <div class="media-container">

            <!--カスタム投稿-->
            <?php
/* （ステップ1）データの取得 */
$query = new WP_Query(
    array(
        'post_type' => 'info-article',
        'posts_per_page' => 10,
    )
);
?>
            <?php
/* （ステップ2）データの表示 */
if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post();?>
            <div class="media-box">
                <div class="media-icon-box news-icon-box">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>" alt="">
                </div>
                <div class="media-text-box">
                    <a href="<?php the_field('link'); ?>" target="_blank">
                        <p class="media-title news-title"><?php the_title(); ?></p>
                        <p class="media-text news-text"><?php the_field('overview'); ?></p>
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>

        </div>
    </div>
</section>


<!-- 企業での妊活サポートを実現しませんか？ -->
<div class="btn-form-first">
    <div class="btn-form-first-inner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cv_left_pc.png" alt="" class="fv-pc">
        <div>
            <p class="btn-form-title fv-pc">企業での妊活サポートを実現しませんか？</p>
            <div class="btn-box">
                <div class="btn btn-contact"><a href="https://famione.co.jp/benefit-contact/">お問い合わせ</a></div>
                <div class="btn btn-data"><a href="https://famione.co.jp/benefit-download/">資料請求</a></div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cv_right_pc.png" alt="" class="fv-pc">
    </div>
</div>
<!-- フッター -->
<footer>
    <div class="footer_bg">
        <div class="inner_body">

            <div class="footer_body_grid">
                <div class="footer_logo">
                    <a href="https://famione.com/"><img src="https://famione.com/images/logo.svg" alt="famione"></a>
                </div>

                <ul class="footer_link">
                    <span class="footer_link_title">個人向け</span>
                    <li><i class="material-icons fotter_link_ico">chevron_right</i><a href="https://lp.famione.com/"
                            target="_blank">妊活コンシェルジュ　ファミワン</a></li>
                    <li><i class="material-icons fotter_link_ico">chevron_right</i><a href="https://lp.famione.com/faq/"
                            target="_blank">妊活コンシェルジュ　よくあるご質問</a></li>
                    <li><i class="material-icons fotter_link_ico">chevron_right</i><a href="https://famione.com/live/"
                            target="_blank">妊活ライブ</a></li>
                    <li><i class="material-icons fotter_link_ico">chevron_right</i><a
                            href="https://famione.com/premium/" target="_blank">プレミアムプラン</a></li>
                    <li><i class="material-icons fotter_link_ico">chevron_right</i><a href="https://flora.famione.com/"
                            target="_blank">子宮内フローラキット</a></li>
                    <li><i class="material-icons fotter_link_ico">chevron_right</i><a href="https://famione.com/mall/"
                            target="_blank">ファミワンモール</a></li>
                    <li><i class="material-icons fotter_link_ico">chevron_right</i><a href="https://famione.com/career/"
                            target="_blank">ファミワンキャリア</a></li>
                    <li><i class="material-icons fotter_link_ico">chevron_right</i><a href="https://famione.com/column/"
                            target="_blank">妊コラム</a></li>
                    <!--
<li><i class="material-icons fotter_link_ico">chevron_right</i
><a href="https://jiten.famione.com" target="_blank">ジブン事典Ver.1</a></li>
<li><i class="material-icons fotter_link_ico">chevron_right</i
><a href="http://jiten.famione.com/t2/" target="_blank">ジブン事典Ver.2</a></li>
<li><i class="material-icons fotter_link_ico">chevron_right</i
><a href="https://twitter.com/OshieteEndosan" target="_blank">遠藤さんtwitter</a></li>-->
                </ul>

                <ul class="footer_link">
                    <span class="footer_link_title">法人向け</span>
                    <li><i class="material-icons fotter_link_ico">chevron_right</i><a
                            href="https://famione.com/benefit/" target="_blank">妊活・不妊治療の福利厚生</a></li>
                    <li><i class="material-icons fotter_link_ico">chevron_right</i><a href="https://famione.com/local/"
                            target="_blank">自治体の方はこちら</a></li>
                </ul>

                <ul class="footer_link">
                    <span class="footer_link_title">運営会社</span>
                    <li><i class="material-icons fotter_link_ico">chevron_right</i><a href="https://famione.co.jp"
                            target="_blank">運営会社</a></li>
                    <li><i class="material-icons fotter_link_ico">chevron_right</i><a
                            href="https://famione.co.jp/contact/" target="_blank">お問い合わせ</a></li>
                    <li><i class="material-icons fotter_link_ico">chevron_right</i><a href="https://famione.co.jp/law/"
                            target="_blank">特定商取引法に基づく表示</a></li>
                    <li><i class="material-icons fotter_link_ico">chevron_right</i><a
                            href="https://famione.co.jp/terms/" target="_blank">利用規約</a></li>
                    <li><i class="material-icons fotter_link_ico">chevron_right</i><a
                            href="https://famione.co.jp/privacy/" target="_blank">プライバシーポリシー</a></li>
                    <li><i class="material-icons fotter_link_ico">chevron_right</i><a
                            href="https://famione.co.jp/terms-premium/" target="_blank">ファミワンプレミアム利用規約</a></li>
                </ul>

            </div>

            <div class="footer_copy_body">
                <p class="copy">© FamiOne , Inc. All rights reserved.</p>
            </div>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
