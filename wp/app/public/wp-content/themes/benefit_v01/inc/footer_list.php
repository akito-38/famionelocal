<div class="bl_contentItemWrapper bl_contentItemWrapper__bottom">
  <div class="bl_pageInner02">

    <section class="bl_contentItem">
      <h2 class="el_lv3Heading"><?php the_title(); ?>を見た人はこちらの老人ホーム・介護施設も見ています</h2>
      <div class="bl_card01UnitWrapper">
        <div class="bl_card01Unit">
          <div class="bl_card01"><a class="bl_card01_inner" href="#">
              <figure class="bl_card01_imgWrapper">
                <div class="bl_label">介護付有料老人ホーム</div><img src="https://placehold.jp/246x176.png" alt="" width="246"
                  height="176" loading="lazy">
              </figure>
              <div class="bl_card01_data">
                <div class="bl_card01_ttl">グッドタイムホーム・大通東</div>
                <dl class="bl_card01_list">
                  <div>
                    <dt>空室状況</dt>
                    <dd><span class="el_label02">残り6室</span>
                      <time datetime="2018-07-07">※2022/02/03 時点</time>
                    </dd>
                  </div>
                  <div>
                    <dt>入居費用</dt>
                    <dd class="h-secondaryColor h_fontBold"><span class="bl_card01_txt01">6.4 〜 25</span> <span
                        class="bl_card01_txt02">万円</span></dd>
                  </div>
                  <div>
                    <dt>月額費用</dt>
                    <dd class="h-secondaryColor h_fontBold"><span class="bl_card01_txt03">11.49 〜 28.57</span> 万円</dd>
                  </div>
                </dl>
                <div class="bl_card01_address">北海道 大寒市 寒中区東西南北 1丁目2-3</div>
              </div>
            </a></div>
          <div class="bl_card01"><a class="bl_card01_inner" href="#">
              <figure class="bl_card01_imgWrapper">
                <div class="bl_label">介護付有料老人ホーム</div><img src="https://placehold.jp/246x176.png" alt="" width="246"
                  height="176" loading="lazy">
              </figure>
              <div class="bl_card01_data">
                <div class="bl_card01_ttl">グッドタイムホーム・大通東</div>
                <dl class="bl_card01_list">
                  <div>
                    <dt>空室状況</dt>
                    <dd><span class="el_label02">残り6室</span>
                      <time datetime="2018-07-07">※2022/02/03 時点</time>
                    </dd>
                  </div>
                  <div>
                    <dt>入居費用</dt>
                    <dd class="h-secondaryColor h_fontBold"><span class="bl_card01_txt01">6.4 〜 25</span> <span
                        class="bl_card01_txt02">万円</span></dd>
                  </div>
                  <div>
                    <dt>月額費用</dt>
                    <dd class="h-secondaryColor h_fontBold"><span class="bl_card01_txt03">11.49 〜 28.57</span> 万円</dd>
                  </div>
                </dl>
                <div class="bl_card01_address">北海道 大寒市 寒中区東西南北 1丁目2-3</div>
              </div>
            </a></div>
          <div class="bl_card01"><a class="bl_card01_inner" href="#">
              <figure class="bl_card01_imgWrapper">
                <div class="bl_label">介護付有料老人ホーム</div><img src="https://placehold.jp/246x176.png" alt="" width="246"
                  height="176" loading="lazy">
              </figure>
              <div class="bl_card01_data">
                <div class="bl_card01_ttl">グッドタイムホーム・大通東</div>
                <dl class="bl_card01_list">
                  <div>
                    <dt>空室状況</dt>
                    <dd><span class="el_label02">残り6室</span>
                      <time datetime="2018-07-07">※2022/02/03 時点</time>
                    </dd>
                  </div>
                  <div>
                    <dt>入居費用</dt>
                    <dd class="h-secondaryColor h_fontBold"><span class="bl_card01_txt01">6.4 〜 25</span> <span
                        class="bl_card01_txt02">万円</span></dd>
                  </div>
                  <div>
                    <dt>月額費用</dt>
                    <dd class="h-secondaryColor h_fontBold"><span class="bl_card01_txt03">11.49 〜 28.57</span> 万円</dd>
                  </div>
                </dl>
                <div class="bl_card01_address">北海道 大寒市 寒中区東西南北 1丁目2-3</div>
              </div>
            </a></div>
        </div>
      </div><a class="el_btn el_btn__more el_btn__rightArrow" href="#">もっと見る</a>
    </section>

    <?php
				$args = Array(
					'post__not_in' => [$post->ID],
					'post_type' => 'facility',
					'posts_per_page' => 3,
					'meta_key' => 'facility_system_company_id',
					'meta_value' => $company_id
				);
				$the_query = new WP_Query($args);
				if($the_query -> have_posts()):
				?>
    <section class="bl_contentItem">
      <h2 class="el_lv3Heading">同じ会社が運営する老人ホーム・介護施設</h2>
      <div class="bl_card01UnitWrapper">
        <div class="bl_card01Unit">
          <?php
												while($the_query -> have_posts()): $the_query -> the_post();
												 get_template_part( 'inc/item_card' );
												endwhile;
										?>
        </div>
      </div>
      <a class="el_btn el_btn__more el_btn__rightArrow" href="#">もっと見る</a>
    </section>
    <?php
										endif;
										wp_reset_postdata();
			?>

    <section class="bl_contentItem">
      <h2 class="el_lv3Heading"><?php print $address['city']; ?>で人気の老人ホーム・介護施設</h2>
      <div class="bl_card01UnitWrapper">
        <div class="bl_card01Unit">
          <div class="bl_card01"><a class="bl_card01_inner" href="#">
              <figure class="bl_card01_imgWrapper">
                <div class="bl_label">介護付有料老人ホーム</div><img src="https://placehold.jp/246x176.png" alt="" width="246"
                  height="176" loading="lazy">
              </figure>
              <div class="bl_card01_data">
                <div class="bl_card01_ttl">グッドタイムホーム・大通東</div>
                <dl class="bl_card01_list">
                  <div>
                    <dt>空室状況</dt>
                    <dd><span class="el_label02">残り6室</span>
                      <time datetime="2018-07-07">※2022/02/03 時点</time>
                    </dd>
                  </div>
                  <div>
                    <dt>入居費用</dt>
                    <dd class="h-secondaryColor h_fontBold"><span class="bl_card01_txt01">6.4 〜 25</span> <span
                        class="bl_card01_txt02">万円</span></dd>
                  </div>
                  <div>
                    <dt>月額費用</dt>
                    <dd class="h-secondaryColor h_fontBold"><span class="bl_card01_txt03">11.49 〜 28.57</span> 万円</dd>
                  </div>
                </dl>
                <div class="bl_card01_address">北海道 大寒市 寒中区東西南北 1丁目2-3</div>
              </div>
            </a></div>
          <div class="bl_card01"><a class="bl_card01_inner" href="#">
              <figure class="bl_card01_imgWrapper">
                <div class="bl_label">介護付有料老人ホーム</div><img src="https://placehold.jp/246x176.png" alt="" width="246"
                  height="176" loading="lazy">
              </figure>
              <div class="bl_card01_data">
                <div class="bl_card01_ttl">グッドタイムホーム・大通東</div>
                <dl class="bl_card01_list">
                  <div>
                    <dt>空室状況</dt>
                    <dd><span class="el_label02">残り6室</span>
                      <time datetime="2018-07-07">※2022/02/03 時点</time>
                    </dd>
                  </div>
                  <div>
                    <dt>入居費用</dt>
                    <dd class="h-secondaryColor h_fontBold"><span class="bl_card01_txt01">6.4 〜 25</span> <span
                        class="bl_card01_txt02">万円</span></dd>
                  </div>
                  <div>
                    <dt>月額費用</dt>
                    <dd class="h-secondaryColor h_fontBold"><span class="bl_card01_txt03">11.49 〜 28.57</span> 万円</dd>
                  </div>
                </dl>
                <div class="bl_card01_address">北海道 大寒市 寒中区東西南北 1丁目2-3</div>
              </div>
            </a></div>
          <div class="bl_card01"><a class="bl_card01_inner" href="#">
              <figure class="bl_card01_imgWrapper">
                <div class="bl_label">介護付有料老人ホーム</div><img src="https://placehold.jp/246x176.png" alt="" width="246"
                  height="176" loading="lazy">
              </figure>
              <div class="bl_card01_data">
                <div class="bl_card01_ttl">グッドタイムホーム・大通東</div>
                <dl class="bl_card01_list">
                  <div>
                    <dt>空室状況</dt>
                    <dd><span class="el_label02">残り6室</span>
                      <time datetime="2018-07-07">※2022/02/03 時点</time>
                    </dd>
                  </div>
                  <div>
                    <dt>入居費用</dt>
                    <dd class="h-secondaryColor h_fontBold"><span class="bl_card01_txt01">6.4 〜 25</span> <span
                        class="bl_card01_txt02">万円</span></dd>
                  </div>
                  <div>
                    <dt>月額費用</dt>
                    <dd class="h-secondaryColor h_fontBold"><span class="bl_card01_txt03">11.49 〜 28.57</span> 万円</dd>
                  </div>
                </dl>
                <div class="bl_card01_address">北海道 大寒市 寒中区東西南北 1丁目2-3</div>
              </div>
            </a></div>
        </div>
      </div><a class="el_btn el_btn__more el_btn__rightArrow" href="#">もっと見る</a>
      <div class="bl_telMessage">
        <div class="bl_telMessage_img"><img src="<?php print TMP_URL; ?>/images/common/tel_message_img.png"
            alt="施設探しをフルサポート" width="248" height="130" loading="lazy"></div>
        <div class="bl_telMessage_after">
          <div class="bl_telMessage_txt01">お困りの方はいつでも<br>お気軽にご相談ください</div>
          <div class="bl_telMessage_txt02">施設の探し方や介護に関するご質問など、プロの相談員が施設探しをサポート致します！</div>
          <div class="bl_telMessage_after_bottom">
            <div><a class="bl_telMessage_tel" href="tel:0120-370-6360"><span
                  class="material-icons">phone</span>0120-370-6360</a>
              <div class="bl_telMessage_txt03">営業時間：10:00〜18:30(土日祝除く)</div>
            </div><a class="el_btn el_btn__banner" href="#">Webでお問い合わせ</a>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
