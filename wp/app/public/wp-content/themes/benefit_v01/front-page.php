<?php get_header(); ?>

<!--キービジュアル-->
<section class="main-visual">
    <div class="main-visual-img">
        <div class="inner_body">
            <div class="main-visual-text">
                <span class="main-visual-text_forgov">自治体関係者のみなさまへ</span>
                <h1 class="main-visual-text_title"><span class="orange">不妊治療</span>や<span
                        class="orange">女性活躍推進</span>の<br>
                    課題解決を専門家がサポート</h1>
                <p>月経、妊活、更年期、性教育。これらは性別、年齢にかかわらず誰もが当事者になる課題で、誰もがサポーターになることができます。正しく知ることは自分を含む自分の大切な人を守ることにつながります。<br>
                    わたしたちファミワンは、課題の根本解決に必要な知識・情報に誰でもすぐにアクセスでき、安心で健やかに暮らせる社会にしたいと考えています。</p>
                <span class="main-visual-text_btn_box">
                    <a class="button" href="https://form.run/@famione-jichitai">お問い合わせ</a>
                    <a class="subbutton" href="https://famione.co.jp/local-contact">資料請求</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner_body">
        </div>
    </div>
    </div>
</section>

<!-- 様々な企業様にてファミワンの妊活・不妊治療サポートを 福利厚生としての導入等で活用いただいています -->

<div class="custmer-bar">
    <p class="custmer-bar-title">様々な企業様にてファミワンの妊活・不妊治療サポートを<br class="br-sp">福利厚生としての導入等で活用いただいています</p>

    <ul class="municipality-list">
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/municipality01.png" alt=""
                width="200" height="60" loading="lazy">
        </li>
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/municipality02.png" alt=""
                width="200" height="60" loading="lazy">
        </li>
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/municipality03.png" alt=""
                width="200" height="60" loading="lazy">
        </li>
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/municipality04.png" alt=""
                width="200" height="60" loading="lazy">
        </li>
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/municipality05.png" alt=""
                width="200" height="60" loading="lazy">
        </li>
    </ul>
</div>

<?php
  $url = "https://famione.co.jp/wp-json/wp/v2/posts?categories=4+312+313&per_page=5&_embed&_fields=id,title,link,date,_links,categories";
  //ヘッダーの設定
  $header = array(
      "Content-Type: application/x-www-form-urlencoded",
      "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0",
      "Referer: https://https://famione.com/"
      );

  //オプション設定
  $options =array(
      'http' =>array(
              'method' => "GET",
              'header' => implode("\r\n", $header),
              )
      );

  $json = file_get_contents($url, false, stream_context_create($options));
  $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
  $cojpBlogs = json_decode($json,true);
?>

<section class="section-wrapper02">
    <div class="section-inner">
        <h3 class="section-title">ニュース</h3>

        <ul class="news-list">
            <?php
      $cat=array(
          4=>'プレリリース',
          312=>'コラム',
          313=>'新規導入'
      );
      foreach($cojpBlogs as $cojpBlog){?>
            <li>
                <div class="news-header">
                    <div class="news-time">
                        <?php
                              $dateTime= new DateTime($cojpBlog['date']);
                              print $dateTime->format('Y年m月d日');
                              ?>
                    </div>

                    <div class="news_category">
                        <?php
                              foreach($cojpBlog['categories'] as $getCat){
                                  if($cat[$getCat]){
                                      print $cat[$getCat];
                                  };
                              };
                            ?>
                    </div>
                </div>
                <a class="news_link" target="_blank" href="<?php print $cojpBlog['link']; ?>">
                    <?php print strip_tags($cojpBlog['title']['rendered']); ?>
                </a>
            </li>
            <?php  }?>
        </ul>
    </div>
</section>

<!--子どもを願うすべての人によりそい、幸せな人生を歩める社会-->
<section class="introduction">
    <div class="background_container">
        <div class="inner_body" data-aos="fade-up" data-aos-duration="1500">
            <div class="headline_text bold">
                <h2>子どもを願う<br class="br-sp">すべての人によりそい、<br>
                    幸せな人生を歩める社会</h2>
            </div>

            <div class="introduction_text">
                <p>昨今の少子化対策として、国は少子化社会対策大綱に基づき、<br class="br-pc">
                    『<span class="info_text_strong">結婚、妊娠、子ども・育児に温かい社会</span>』の実現のために、<br class="br-pc">
                    会議・検討会等を通じ幅広い視点から検討を重ね、あらゆる施策を推進しています。<br>
                    こうした国の施策に加え、<span class="info_text_strong">妊娠を望むカップルに対する支援の充実を図る自治体の動き</span>が広がっています。</p>
            </div>
            <div class="info_img">
                <img src="https://famione.com/local/images/kosodate_image.png">
            </div>
        </div>
    </div>
</section>
<!--ファミワンが解決できる行政の課題-->
<div class="background_container">
    <section>

        <div class="inner_narrow" data-aos="fade-up" data-aos-duration="1500">
            <div class="headline_text bold">
                <h2>自治体の抱える課題を<br class="br-sp">ファミワンのリソースで解決へ</h2>
            </div>

            <div class="famione_service_body">
                <div class="famione_service_grid">
                    <div class="famione_service_box">
                        <h3><span class="orange">妊活・不妊治療当事者</span>への支援</h3>
                        <p>医学的な知識や情報だけでなく、<span class="orange">妊活・不妊治療中のこころや夫婦コミュニケーション</span>についても、理解できるようになる。</p>
                        <img src="https://famione.com/local/images/kadai01.jpg">
                    </div>

                    <div class="famione_service_box">
                        <h3>ヘルスケアと<span class="orange">生理</span>の貧困</h3>
                        <p>月経トラブルの知識を学び、自分自身の健康を見つめ直す。生活習慣の改善や受診など、<span class="orange">適切な対処方法を知って行動できる。</span></p>
                        <img src="https://famione.com/local/images/kadai02.jpg">
                    </div>

                    <div class="famione_service_box">
                        <h3>小中学生への<span class="orange">性教育</span></h3>
                        <p><span class="orange">からだとこころ、両方の側面から</span>性教育を考える。子どもや大切な人と一緒に話せる、性教育の重要トピックを理解する。
                        </p>
                        <img src="https://famione.com/local/images/kadai03.jpg">
                    </div>

                    <div class="famione_service_box">
                        <h3>ヘルスケアと<span class="orange">女性活躍支援</span></h3>
                        <p>更年期や月経というプライベートでセンシティブな問題の基礎知識を理解する。<span
                                class="orange">相談されやすい関係性を作るために、当事者の困難さやコミュニケーションの取り方</span>を知る。
                        </p>
                        <img src="https://famione.com/local/images/kadai04.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="background_container">
    <!--ファミワンの取り組みについて-->
    <section class="famione-support">
        <div class="inner_narrow" data-aos="fade-up" data-aos-duration="1500">
            <div class="headline_text bold">
                <h2>ファミワンが住民の<br class="br-sp">皆さまの<br>
                    妊活・不妊治療の相談を<br class="br-sp">フルサポートします</h2>
            </div>

            <div class="famione-support_grid">
                <div class="famione-support_box">
                    <img src="https://famione.com/local/images/famione_info01.jpg">
                    <h4>専門家による各種セミナー</h4>
                    <p>月経、妊活、更年期、性教育など、各種セミナーは、不妊症看護認定看護師や臨床心理士、助産師など専門家チームで行います。</p>
                </div>

                <div class="famione-support_box_plus"><img src="https://famione.com/local/images/plus.png"></div>

                <div class="famione-support_box">
                    <img src="https://famione.com/local/images/famione_info02.jpg">
                    <h4>LINEサポート</h4>
                    <p>ファミワンが住民の皆さまの妊活中の体のこと、気持ちのサポート、病院選び、パートナーのこと、キャリアのことなど。妊活・不妊治療をフルサポートします</p>
                </div>
            </div>
        </div>
    </section>
</div>


<div class="background_containerPink">
    <!-- 導入実績 -->
    <section class="section-wrapper" id="success">
        <div class="section-inner">
            <div class="section-title-box">
                <h3 class="section-title">各種セミナー・LINEサポート取組事例</h3>
                <p class="section-sub-text seminar-sub-text">
                    ファミワンのを福利厚生として従業員向け妊活支援を導入して、<br>管理職や若手社員向けの啓発など、企業の風土を変える取り組みをされている企業の事例をご紹介します。</p>
            </div>

        </div>
        <div class="success-slider">
            <ul class="js-flickity">

                <!--カスタム投稿-->
                <?php
/* （ステップ1）データの取得 */
$query = new WP_Query(
    array(
        'post_type' => 'interview',
        'posts_per_page' => 10,
    )
);
?>
                <?php
/* （ステップ2）データの表示 */
if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post();?>
                <li class="sccess-item gallery-cell">
                    <div class="success-item-box">
                        <a href="<?php the_permalink(); ?>">
                            <div class="success-item-box-inner">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>"
                                    alt="">
                                <div class="success-item-box-text">
                                    <p class="success-item-title"><?php the_field('company'); ?></p>
                                    <p class="success-item-sub-title"><?php the_title(); ?></p>
                                    <p class="success-item-text"><?php the_field('overview'); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>

            </ul>
        </div>
        <div class="btnWrapper">
            <div class="border-list-btn btn">
                <a href="<?php echo home_url(); ?>/interview/">取組一覧</a>
            </div>
            <div class="success-list-btn btn">
                <a href="/benefit/benefit_list/">取組団体一覧</a>
            </div>
        </div>
        <!--</div>-->
    </section>
</div>

<div>
    <p class="custmer-bar-title">様々な企業様にてファミワンの妊活・不妊治療サポートを<br class="br-sp">福利厚生としての導入等で活用いただいています</p>

    <ul class="municipality-list">
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/municipality01.png" alt=""
                width="200" height="60" loading="lazy">
        </li>
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/municipality02.png" alt=""
                width="200" height="60" loading="lazy">
        </li>
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/municipality03.png" alt=""
                width="200" height="60" loading="lazy">
        </li>
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/municipality04.png" alt=""
                width="200" height="60" loading="lazy">
        </li>
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/municipality05.png" alt=""
                width="200" height="60" loading="lazy">
        </li>
    </ul>
</div>

<?php
  $url = "https://famione.co.jp/wp-json/wp/v2/posts?categories=4&per_page=5&_embed&_fields=id,title,link,date,_links,categories";

  //オプション設定

  $json = file_get_contents($url, false, stream_context_create($options));
  $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
  $cojpBlogs = json_decode($json,true);
?>

<section class="section-wrapper">
    <div class="section-inner">
        <h3 class="section-title">プレスリリース</h3>

        <ul class="news-list">
            <?php
      foreach($cojpBlogs as $cojpBlog){?>
            <li>
                <a class="news_link" target="_blank" href="<?php print $cojpBlog['link']; ?>">
                    <?php print strip_tags($cojpBlog['title']['rendered']); ?>
                </a>
            </li>
            <?php  }?>
        </ul>
    </div>
</section>
<!--横須賀市での導入事例-->
<section>
    <div class="background_container">
        <div class="inner_narrow" data-aos="fade-up" data-aos-duration="1500">
            <div class="headline_text bold">
                <h2>経済産業省<br>「フェムテック等サポートサービス実証事業費補助金」紹介</h2>
            </div>
            <div class="yokosuka">
                <div class="interview">
                    <div class="seminar-text-box">
                        <div class="seminar-text-content">
                            <p class="seminar-text-title">経済産業省「フェムテック等サポートサービス実証事業費補助金」について</p>
                            <p class="seminar-text-main">
                                実証事業において経済産業省から交付される補助金は、フェムテックなどの製品・サービスを活用し、フェムテックを提供する企業、導入する企業、医療機関、自治体などが、個別にまたは連携して実施する、妊娠・出産などのライフイベントと仕事の両立やヘルスリテラシーの向上など、個人のウェルビーイング実現に向けた事業について、その経費の一部を補助するものです。
                            </p>
                            <p class="seminar-text-main seminar-text-main__blue">
                                ※経済産業省　　2021年4月28日<br>フェムテックを活用して、働く女性の健康をサポートし就業継続を支える仕組み作りを応援します！</p>
                        </div>
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/industry_sp.png"
                                media="(max-width: 768px)" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/industry_pc.png"
                                alt="経済産業省" width="469" height="327" loading="lazy" />
                            <picture>
                    </div>

                    <p class="seminar-text-title bold seminar-text-tac">
                        「妊活xまちづくりの視点で、暮らしやすい/働きやすい街を一緒に考えたい」勉強会、<br>
                        「フェムテックで行政課題を解決する　妊活とヘルスケアセミナー」参加自治体
                    </p>
                    <div class="banner_img">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/banner_sp.jpg"
                                media="(max-width: 768px)" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/banner_pc.jpg" alt=""
                                width="800" height="120" loading="lazy" />
                            <picture>
                    </div>

                    <div class="seminar_about_pc">
                        <table>
                            <tbody>
                                <tr>
                                    <th rowspan="6">北海道 ・<br>東北</th>
                                    <th>北海道</th>
                                    <td>旭川市・石狩市・雄武町・剣淵町・士別市・弟子屈町・美深町・留寿都村</td>
                                </tr>
                                <tr>
                                    <th>青森県</th>
                                    <td>平川市</td>
                                </tr>
                                <tr>
                                    <th>岩手県</th>
                                    <td>北上市</td>
                                </tr>
                                <tr>
                                    <th>山形県</th>
                                    <td>村山市</td>
                                </tr>
                                <tr>
                                    <th>宮城県</th>
                                    <td>岩沼市・大河原町・仙台市・富谷市</td>
                                </tr>
                                <tr>
                                    <th>福島県</th>
                                    <td>會津若松市・浅川町・いわき市・国見町・福島市</td>
                                </tr>


                                <tr>
                                    <th rowspan="6">関東</th>
                                    <th>茨城県</th>
                                    <td>土浦市・常総市・坂東市</td>
                                </tr>
                                <tr>
                                    <th>群馬県</th>
                                    <td>片品村</td>
                                </tr>
                                <tr>
                                    <th>千葉県</th>
                                    <td>御宿町・千葉県教職員組合</td>
                                </tr>
                                <tr>
                                    <th>埼玉県</th>
                                    <td>加須市・さいたま市・深谷市・八潮市</td>
                                </tr>
                                <tr>
                                    <th>東京都</th>
                                    <td>江東区・渋谷区・中央区・調布市・豊島区・日本生活協同組合連合会・東村山市・武蔵野市・目黒区</td>
                                </tr>
                                <tr>
                                    <th>神奈川県</th>
                                    <td>鎌倉市・平塚市・大和市・横須賀市</td>
                                </tr>

                                <tr>
                                    <th rowspan="7">中部</th>
                                    <th>新潟県</th>
                                    <td>加茂市</td>
                                </tr>
                                <tr>
                                    <th>石川県</th>
                                    <td>中能登町</td>
                                </tr>
                                <tr>
                                    <th>福井県</th>
                                    <td>鯖江市</td>
                                </tr>
                                <tr>
                                    <th>山梨県</th>
                                    <td>市川三郷町・身延町</td>
                                </tr>
                                <tr>
                                    <th>静岡県</th>
                                    <td>磐田市</td>
                                </tr>
                                <tr>
                                    <th>岐阜県</th>
                                    <td>川辺町</td>
                                </tr>
                                <tr>
                                    <th>愛知県</th>
                                    <td>大府市・小牧市・設楽町・豊橋市</td>
                                </tr>

                                <tr>
                                    <th rowspan="2">近畿</th>
                                    <th>大阪府</th>
                                    <td>泉大津市・茨木市・大阪市・大阪府立大学・大東市・箕面市</td>
                                </tr>
                                <tr>
                                    <th>奈良県</th>
                                    <td>広陵町</td>
                                </tr>

                                <tr>
                                    <th rowspan="7">中国・四国</th>
                                    <th>鳥取県</th>
                                    <td>日野町</td>
                                </tr>
                                <tr>
                                    <th>島根県</th>
                                    <td>川本町・知夫村</td>
                                </tr>
                                <tr>
                                    <th>広島県</th>
                                    <td>庄原市・世羅町・三原市</td>
                                </tr>
                                <tr>
                                    <th>山口県</th>
                                    <td>光市</td>
                                </tr>
                                <tr>
                                    <th>香川県</th>
                                    <td>観音寺市</td>
                                </tr>
                                <tr>
                                    <th>愛媛県</th>
                                    <td>新居浜市</td>
                                </tr>
                                <tr>
                                    <th>高知県</th>
                                    <td>いの町</td>
                                </tr>

                                <tr>
                                    <th rowspan="4">九州 ・<br> 沖縄</th>
                                    <th>福岡県</th>
                                    <td>岡垣町・春日市</td>
                                </tr>
                                <tr>
                                    <th>熊本県</th>
                                    <td>天草市・美里町</td>
                                </tr>
                                <tr>
                                    <th>鹿児島県</th>
                                    <td>いちき串木野市・指宿市・枕崎市・南さつま市</td>
                                </tr>

                                <tr>
                                    <th>沖縄県</th>
                                    <td>伊是名村・本部町</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="seminar_about_sp">
                        <table>
                            <tbody>
                                <tr>
                                    <th colspan="2">場所</th>
                                </tr>
                                <tr>
                                    <th>北海道</th>
                                    <td>旭川市・石狩市・雄武町・剣淵町・士別市・弟子屈町・美深町・留寿都村</td>
                                </tr>
                                <tr>
                                    <th>青森県</th>
                                    <td>平川市</td>
                                </tr>
                                <tr>
                                    <th>岩手県</th>
                                    <td>北上市</td>
                                </tr>
                                <tr>
                                    <th>山形県</th>
                                    <td>村山市</td>
                                </tr>
                                <tr>
                                    <th>宮城県</th>
                                    <td>岩沼市・大河原町・仙台市・富谷市</td>
                                </tr>
                                <tr>
                                    <th>福島県</th>
                                    <td>會津若松市・浅川町・いわき市・国見町・福島市</td>
                                </tr>

                                <tr>
                                    <th colspan="2">関東</th>
                                </tr>
                                <tr>
                                    <th>茨城県</th>
                                    <td>土浦市・常総市・坂東市</td>
                                </tr>
                                <tr>
                                    <th>群馬県</th>
                                    <td>片品村</td>
                                </tr>
                                <tr>
                                    <th>千葉県</th>
                                    <td>御宿町・千葉県教職員組合</td>
                                </tr>
                                <tr>
                                    <th>埼玉県</th>
                                    <td>加須市・さいたま市・深谷市・八潮市</td>
                                </tr>
                                <tr>
                                    <th>東京都</th>
                                    <td>江東区・渋谷区・中央区・調布市・豊島区・日本生活協同組合連合会・東村山市・武蔵野市・目黒区</td>
                                </tr>
                                <tr>
                                    <th>神奈川県</th>
                                    <td>鎌倉市・平塚市・大和市・横須賀市</td>
                                </tr>
                                <tr>
                                    <th colspan="2">中部</th>
                                </tr>
                                <tr>
                                    <th>新潟県</th>
                                    <td>加茂市</td>
                                </tr>
                                <tr>
                                    <th>石川県</th>
                                    <td>中能登町</td>
                                </tr>
                                <tr>
                                    <th>福井県</th>
                                    <td>鯖江市</td>
                                </tr>
                                <tr>
                                    <th>山梨県</th>
                                    <td>市川三郷町・身延町</td>
                                </tr>
                                <tr>
                                    <th>静岡県</th>
                                    <td>磐田市</td>
                                </tr>
                                <tr>
                                    <th>岐阜県</th>
                                    <td>川辺町</td>
                                </tr>
                                <tr>
                                    <th>愛知県</th>
                                    <td>大府市・小牧市・設楽町・豊橋市</td>
                                </tr>
                                <tr>
                                    <th colspan="2">近畿</th>
                                </tr>

                                <tr>
                                    <th colspan="2">中国・四国</th>
                                </tr>
                                <tr>
                                    <th>鳥取県</th>
                                    <td>日野町</td>
                                </tr>
                                <tr>
                                    <th>島根県</th>
                                    <td>川本町・知夫村</td>
                                </tr>
                                <tr>
                                    <th>広島県</th>
                                    <td>庄原市・世羅町・三原市</td>
                                </tr>
                                <tr>
                                    <th>山口県</th>
                                    <td>光市</td>
                                </tr>
                                <tr>
                                    <th>香川県</th>
                                    <td>観音寺市</td>
                                </tr>
                                <tr>
                                    <th>愛媛県</th>
                                    <td>新居浜市</td>
                                </tr>
                                <tr>
                                    <th>高知県</th>
                                    <td>いの町</td>
                                </tr>
                                <tr>
                                    <th>大阪府</th>
                                    <td>泉大津市・茨木市・大阪市・大阪府立大学・大東市・箕面市</td>
                                </tr>
                                <tr>
                                    <th>奈良県</th>
                                    <td>広陵町</td>
                                </tr>

                                <tr>
                                    <th colspan="2">九州 ・沖縄</th>
                                </tr>
                                <tr>
                                    <th>福岡県</th>
                                    <td>岡垣町・春日市</td>
                                </tr>
                                <tr>
                                    <th>熊本県</th>
                                    <td>天草市・美里町</td>
                                </tr>
                                <tr>
                                    <th>鹿児島県</th>
                                    <td>いちき串木野市・指宿市・枕崎市・南さつま市</td>
                                </tr>
                                <tr>
                                    <th>沖縄県</th>
                                    <td>伊是名村・本部町</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 企業での妊活サポートを実現しませんか？ -->
    <div class="btn-form-first">
        <div class="btn-form-first-inner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cv_left_pc.png" alt="" width="142"
                height="204" loading="lazy" class="btn-form-first-img btn-form-first-img__left">
            <div>
                <p class="btn-form-title">ファミワンが住民の皆さまの<br>妊活・不妊治療の相談をフルサポートします</p>

                <div class="btnWrapper">
                    <div class="success-list-btn btn">
                        <a href="https://form.run/@famione-jichitai">お問い合わせ</a>
                    </div>
                    <div class="border-list-btn btn">
                        <a href="https://famione.co.jp/local-contact">資料請求</a>
                    </div>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cv_right_pc.png" alt="" width="154"
                height="204" loading="lazy" class="btn-form-first-img btn-form-first-img__right">
        </div>
    </div>
</section>

<a class="button button_fix" href="https://form.run/@famione-jichitai">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/email.svg" alt="" width="20" loading="lazy">
    お問い合わせ
</a>

<?php get_footer(); ?>
