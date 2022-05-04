<?php get_header(); ?>
<!-- ファーストビュー -->
<div class="fv-list">
    <div class="fv-inner-list">
        <!-- タグ変更p→h2 -->
        <h2 class="fv-title">取組実績</h2>
    </div>
</div>

<!-- CSSファイルをまとめるためにクラス名を一部変更 -->
<div class="success-slider">
    <ul class="gallery">

        <?php while (have_posts()) : the_post(); ?>

        <li class="sccess-item-list">
            <a href="<?php the_permalink(); ?>">
                <div class="success-item-box">

                    <div class="success-item-box-inner-list">
                        <div class="success-img-box">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>" alt="">
                        </div>
                        <div class="success-item-box-text-list">

                            <div class="success-item-tagUnit">
                                <?php
                                $terms = get_the_terms(get_the_ID(),'intro_type');
                                if(!empty($terms)){
                                foreach( $terms as $term ) {
                                echo '<div  class="success-item-tag">'.$term->name.'</div>';
                                }
                                }
                              ?>
                            </div>
                            <p class="success-item-title"><?php the_field('company'); ?></p>
                            <p class="success-item-sub-title success-item-sub-title-list"><?php the_title(); ?></p>
                        </div>
                    </div>
                    <div class="success-item-box-btn">詳細を見る</div>
                </div>
            </a>
        </li>

        <?php endwhile; ?>
    </ul>
    <div class="bl_paginationWrapper">
        <?php
            the_posts_pagination(array(
                'mid_size' => 3,
                'prev_text' => '<',
                'next_text' => '>',
                'screen_reader_text'=>''
            )) ;
        ?>
    </div>
    <!-- ボタンを横並びにするために親要素を追加 -->
    <div class="main-btn-box main-btn-box__list">
        <div class="border-list-btn btn">
            <a href="<?php echo home_url(); ?>">TOPに戻る</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
