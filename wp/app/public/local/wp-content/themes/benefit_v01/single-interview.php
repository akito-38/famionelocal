<?php get_header(); ?>
<!-- ファーストビュー -->
<div class="fv-list">
    <div class="fv-inner-list">
        <h2>導入・提供事例</h2>
            <p class="fv-pc"><?php the_field('company'); ?></p>
    </div>
</div>


<!-- Main -->
<section class="main-container">
    <div class="main-container-inner">
        <div class="main-box">
            <h1><?php the_title(); ?></h1>
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="">
            <p><?php the_field('interviewee'); ?></p>
        </div>
        <div class="main-box">

            <?php the_content(); ?>

        </div>
        <!-- ボタンが複数あったため削除 -->
    </div>
    <div class="company-container">
        <div class="company-box">
            <?php
            $image = get_field('logo');
            $src = $image['sizes']['medium'];
            $width = $image['sizes']['medium-width'];
            $height = $image['sizes']['medium-height'];
            ?>
            <img src="<?php echo $src; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="">
            <div class="company-data-box">
                <p>社名<br>
                    <?php the_field('company'); ?>
                </p>
                <p>業種<br>
                    <?php the_field('industry'); ?>
                </p>
                <p>従業員数<br>
                    <?php the_field('employee_num'); ?>
                </p>
            </div>
            <div class="topics-box">
                <h3>TOPICS</h3>
                <p >
                    <?php print nl2br(get_post_meta($post->ID, 'topic',true)); ?></p>
            </div>
        </div>
        <div class="topics-sub-box">
            <h2>ファミワンの妊活・不妊治療<br>福利厚生サポート</h2>
            <div class="btn-box btn-column">
                <div class="btn btn-contact btn-column-item"><a href="https://famione.co.jp/benefit-contact/">お問い合わせ</a></div>
                <div class="btn btn-data btn-column-item"><a href="https://famione.co.jp/benefit-download/">資料請求</a></div>
            </div>
        </div>
    </div>
    <!-- ボタンを横並びにするために親要素を追加 -->
    <div class="main-btn-box">
        <div class="success-list-btn btn main-btn">
            <a href="<?php echo home_url(); ?>">TOPに戻る</a>
        </div>
        <div class="success-list-btn btn main-btn">
            <a href="<?php echo home_url(); ?>/interview/">事例一覧</a>
        </div>
    </div>

</section>

<?php get_footer(); ?>
