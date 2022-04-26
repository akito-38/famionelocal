<?php get_header(); ?>
<!-- ファーストビュー -->
<div class="fv-list">
    <div class="fv-inner-list">
        <!-- タグ変更p→h2 -->
        <h2 class="fv-title">事例一覧</h2>
    </div>
</div>

<!-- CSSファイルをまとめるためにクラス名を一部変更 -->
<div class="success-slider">
    <ul class="gallery">

        <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>">
            <li class="sccess-item-list">
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

                </div>
            </li>
        </a>
        <?php endwhile; ?>

    </ul>
</div>

<?php get_footer(); ?>
