<?php get_header(); ?>
<!-- ファーストビュー -->
<div class="fv">
    <div class="fv-inner">
        <div class="fv-text-inner">
            <h2 class="fv-main">妊活・不妊治療<br class="fv-pc fv-tb">
                <span class="fv-accent">福利厚生</span>サポート
            </h2>
            <p class="fv-text">
                不妊症看護認定看護師・臨床心理士・胚培養士などの専門家チームによるセミナーや従業員様への個別サポートを軸に柔軟に対応。<br>
                常に進化し続ける妊活・不妊治療の現場で培われた経験と実績で、ご信頼頂けるサポートをお約束します。
            </p>
            <div class="btn-box">
                <div class="btn btn-contact"><a href="https://famione.co.jp/benefit-contact/">お問い合わせ</a></div>
                <div class="btn btn-data"><a href="https://famione.co.jp/benefit-download/">資料請求</a></div>
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_pc.jpg" alt="" class="fv-pc">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_sp.jpg" alt="" class="fv-sp">
</div>

<!-- 様々な企業様にてファミワンの妊活・不妊治療サポートを 福利厚生としての導入等で活用いただいています -->
<!-- ループさせるために同様のロゴを3つ読み込んでいます -->
<div class="custmer-bar">
    <p class="custmer-bar-title">様々な企業様にてファミワンの妊活・不妊治療サポートを<br class="br-sp">福利厚生としての導入等で活用いただいています</p>
    <div class="scloll-box">
        <ul class="slideshow">
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_odakyu.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_metro.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_mixi.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_mercari.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_casley.jpg" alt=""></li>

            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_interg.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_tbs.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_daio.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_ga-tech.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_kokuyo.jpg" alt=""></li>
        </ul>
        <ul class="slideshow">
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_odakyu.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_metro.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_mixi.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_mercari.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_casley.jpg" alt=""></li>

            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_interg.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_tbs.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_daio.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_ga-tech.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_kokuyo.jpg" alt=""></li>
        </ul>
        <ul class="slideshow">
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_odakyu.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_metro.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_mixi.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_mercari.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_casley.jpg" alt=""></li>

            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_interg.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_tbs.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_daio.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_ga-tech.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_kokuyo.jpg" alt=""></li>
        </ul>
    </div>
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


<!-- 従業員向け妊活・不妊サポートの特徴 -->
<section class="section-wrapper" id="suport">
    <div class="section-inner">
        <div class="section-title-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title_ue.png" alt="">
            <p class="section-title-famione">ファミワンの</p>
            <h3 class="section-title"><span class="section-title-accent">従業員向け</span><br class="fv-sp">妊活・不妊サポートの<span
                    class="section-title-accent">特徴</span></h3>
        </div>
        <div class="suport-container">
            <div class="suport-box">
                <div class="suport-title-box">
                    <p class="suport-title-number">01</p>
                    <p class="suport-title">妊活の専門家による<span class="suport-title-accent">幅広く<br class="br-pc">
                            質の高い</span>サポートが可能</p>
                </div>
                <p class="suport-text">
                    妊活中のお悩みは医療的なものから<span class="suport-text-accent">メンタル的なものまで多様な要因が混在していることが多い</span>です。
                    ファミワンでは<span class="suport-text-accent">不妊症看護認定看護師、臨床心理士、胚培養士、妊活経験者など</span>
                    妊活・不妊治療における様々な専門家がアドバイスを担当しサポートします。
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/point01.png" alt="">
            </div>
            <div class="suport-box">
                <div class="suport-title-box">
                    <p class="suport-title-number">02</p>
                    <p class="suport-title">
                        変化し続ける<span class="suport-title-accent">社会情勢</span>、働く人の妊活・不妊治療の<span
                            class="suport-title-accent">リアルに対応</span>
                    </p>
                </div>
                <p class="suport-text">
                    法律の改正、新しい検査や治療法の確立など、<span class="suport-text-accent">変化の多い妊活・不妊治療。</span>
                    ファミワンのアドバイザーは、これまで多くの企業様のセミナーやご相談の実績から、<span
                        class="suport-text-accent">「働く人の妊活・不妊サポート」</span>に関する豊富な経験と実績を生かし、より実践的な企業サポートを提供可能です。
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/point02.png" alt="">
            </div>
            <div class="suport-box">
                <div class="suport-title-box">
                    <p class="suport-title-number">03</p>
                    <p class="suport-title">
                        ファミワンサービスを活用した個別の<span class="suport-title-accent">アフターフォローも充実</span>
                    </p>
                </div>
                <p class="suport-text">
                    社内セミナーは社内の風土を変えること、働きやすさを改善することにつながりますが、個々の妊活の悩みの解決には至りません。
                    ファミワンではセミナーでは<span class="suport-text-accent">企業様全体へのサポート</span>、そして<span
                        class="suport-text-accent">個別の相談では社員個々のサポートと両側面からのサポート</span>を実現しています。
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/point03.png" alt="">
            </div>
            <div class="suport-box">
                <div class="suport-title-box">
                    <p class="suport-title-number">04</p>
                    <p class="suport-title">
                        セミナー等、企業様や聞き手に合わせた<span class="suport-title-accent">オリジナルの対応が可能</span>
                    </p>
                </div>
                <p class="suport-text">
                    <span
                        class="suport-text-accent">勤務形態や休暇制度などに応じ、妊活と仕事の両立の形は異なります。</span>企業様ごとにオリジナルだからこそ意味のあるセミナーになります。
                    またこれまで、妊活だけではなく<span class="suport-text-accent">女性の健康（PMSや更年期）、メンタルヘルス</span>など様々な内容をご提供させていただきました。
                    企業様それぞれの状況や課題にフィットしたセミナーを提供します。
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/point04.png" alt="">
            </div>
        </div>
        <p class="section-sub-title">専門家による二つのサポートを軸に柔軟に対応していきます</p>
        <p class="section-sub-text">妊活当時者向け支援だけではなく、<span class="section-sub-text-accent">管理職や社員向けの啓発支援や外部取材への対応</span>
            など、企業の風土を変える取り組みを支援いたします。
            ファミワンでは、<span class="section-sub-text-accent">センシティブで難しい課題に対して、専門的できめ細やかな支援</span>が可能です。</p>
        <div class="support_flow">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/support.png" alt="">
        </div>
    </div>
</section>

<!-- 従業員向け妊活・不妊サポートの内容 -->
<section class="section-wrapper" id="seminar">
    <div class="section-inner">
        <div class="section-title-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title_ue.png" alt="">
            <p class="section-title-famione">ファミワンの</p>
            <h3 class="section-title"><span class="section-title-accent">従業員向け</span><br class="fv-sp">妊活・不妊サポートの<span
                    class="section-title-accent">内容</span></h3>
        </div>
        <div class="seminar-text-box">
            <div class="seminar-text-content">
                <p class="seminar-text-title">セミナーの特徴</p>
                <p class="seminar-text-main">妊活や不妊治療のことはもちろん、<span
                        class="seminar-text-main-accent">女性ならではのトラブルである月経痛やPMS（月経前症候群）、
                        更年期についてやヘルスリテラシー</span>についてなど幅広いテーマをご用意しております。一般的な内容だけではなく、
                    企業様ごとの具体的な事例を元に「支える立場から知る」ことを目的としております。以下資料は一例です。</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminar.jpg" alt="">
        </div>
        <div class="seminar-container">
            <div class="seminar-box">
                <div class="seminar-box-title">
                    <i class="material-icons">local_hospital</i>
                    <p class="seminar-title">妊活・不妊治療セミナー</p>
                    <p class="seminar-text">妊活や不妊治療の実際と、内容についてお伝えします。具体的なデータを<span
                            class="seminar-text-accent">元に他人事から自分事へと認識を変える</span>ことができる内容です。</p>
                </div>
                <div class="seminar-img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/slide01.jpg" alt="">
                </div>
            </div>
            <div class="seminar-box">
                <div class="seminar-box-title">
                    <i class="material-icons">business</i>
                    <p class="seminar-title">妊活・不妊治療と仕事との両立</p>
                    <p class="seminar-text">「不妊治療が大変なのは知っているけれどどうやってサポートしたらいいか分からない」
                        当事者はもちろんのこと実は<span
                            class="seminar-text-accent">サポートする側も困っていること</span>があります。双方のコミュニケーションを滑らかにするヒントをお伝えします。
                    </p>
                </div>
                <div class="seminar-img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/slide02.jpg" alt="">
                </div>
            </div>
            <div class="seminar-box">
                <div class="seminar-box-title">
                    <i class="material-icons">person</i>
                    <p class="seminar-title">管理職向け</p>
                    <p class="seminar-text">
                        部下に不妊治療を受けている社員がいる場合、どのようにサポートすることが望ましいでしょうか。
                        <span
                            class="seminar-text-accent">デリケートな問題だからこそ正しい知識を持って対応する必要があります。</span>離職をどう防げるかは管理職次第かもしれません。
                    </p>
                </div>
                <div class="seminar-img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/slide03.jpg" alt="">
                </div>
            </div>
            <div class="seminar-box">
                <div class="seminar-box-title">
                    <i class="material-icons">pregnant_woman</i>
                    <p class="seminar-title">女性向けヘルケアサポート</p>
                    <p class="seminar-text">女性向けのヘルスリテラシーや更年期、月経痛やPMS（月経前症候群）についての解説をしつつ、
                        <span class="seminar-text-accent">セルフチェックの方法や、どのようなケアサポートが必要か</span>などもお伝えしています。
                    </p>
                </div>
                <div class="seminar-img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/slide04.jpg" alt="">
                </div>
            </div>
            <div class="seminar-box">
                <div class="seminar-box-title">
                    <i class="material-icons">wheelchair_pickup</i>
                    <p class="seminar-title">更年期セミナー</p>
                    <p class="seminar-text">女性だけではなく、<span
                            class="seminar-text-accent">男性にも訪れる更年期。</span>どういう風に付き合えば良いのか、
                        改善する方法にはどのようなものがあるのかなどを中心にお伝えします。</p>
                </div>
                <div class="seminar-img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/slide05.jpg" alt="">
                </div>
            </div>
            <div class="seminar-box">
                <div class="seminar-box-title">
                    <i class="material-icons">night_shelter</i>
                    <p class="seminar-title">在宅勤務のメンタルヘルス</p>
                    <p class="seminar-text">
                        <span class="seminar-text-accent">在宅勤務やリモートワークが増えている中で、メンタルヘルスへ大きく影響が出ている</span>という報告があります。
                        働く人のメンタルヘルスを守るポイントについて心理士がお伝えします。
                    </p>
                </div>
                <div class="seminar-img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/slide06.jpg" alt="">
                </div>
            </div>
        </div>
        <p class="section-sub-title">個別サポートの特徴</p>
        <p class="section-sub-text seminar-sub-text">ファミワンの個別サポートは、以下のようなご相談・お悩みに対して、
            医療の推奨よりになりがちな医師などのサポート対応とは異なり、<span
                class="section-sub-text-accent">専門的なサポートから心理士などによるメンタルケアやハラスメント対応なども盛り込んだ幅広いサポート</span>を行っています。</p>
        <div class="seminar-sub-container">
            <div class="seminar-sub-box">
                <p class="seminar-sub-box-text">
                    主治医には人工授精で様子を見ましょうと言われていますが、<br class="fv-sp">
                    <span class="sub-text-accent">ステップアップを考えた方が良いのではないか</span>
                    と悩んでいます。
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people_women.png" alt="">
            </div>
            <div class="seminar-sub-box">
                <p class="seminar-sub-box-text">
                    なかなか胚盤胞になりません。私の治療経過から考えて、<br class="fv-sp">
                    <span class="sub-text-accent">どんな治療方法に変えれば可能性は上がり</span>ますか？
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people_women.png" alt="">
            </div>
            <div class="seminar-sub-box">
                <p class="seminar-sub-box-text">
                    気持ちが落ち込んでいます。<br class="fv-sp">どうすれば
                    <span class="sub-text-accent">気持ちをコントロール</span>できますか？
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people_man.png" alt="">
            </div>
            <div class="seminar-sub-box">
                <p class="seminar-sub-box-text">
                    <span class="sub-text-accent">上司に不妊治療はいつまで続くのかと言われ、傷ついた。</span><br class="fv-sp">
                    理解して欲しいとは思わないが、どのようにしていけば良いのか悩んでいます。
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people_women.png" alt="">
            </div>
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

<!-- 妊活・不妊サポート導入のメリット -->
<section class="section-wrapper" id="merit">
    <div class="section-inner">
        <div class="section-title-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title_ue.png" alt="">
            <h3 class="section-title">妊活・不妊サポート<br class="fv-sp"><span class="section-title-accent">導入のメリット</span></h3>
        </div>
        <div class="section-text-box">
            <div class="section-text-inner-box">
                <p class="section-text">
                    妊活や不妊治療時の大きな課題として、特に女性のキャリア形成との両立が難しい点がありますが、
                    現在、<span class="section-text-accent">不妊治療を原因とした不妊退職者または不妊転職者は増加傾向</span>にあるとも言われており、
                    実際に<span
                        class="section-text-accent">２割が退職しているというデータ</span>も出ており、経営戦略や人事戦略としても、「当たり前」の支援となりつつあります。<br>
                    その反面、女性の社会進出などを背景に、晩婚化・晩産化が進み不妊治療件数は増加傾向にありますが、
                    大企業を中心に、福利厚生を通した妊活や不妊治療のサポート導入なども増加傾向にあり、重要な課題解決事項としての取り組みが注目されています。<br>
                    妊活の悩みは「人に言いにくい」。また、支援制度があっても使われない制度では本当の意味でのサポートはできない。
                    だからこそ、守られた形での当事者へのサポートと支える側へのサポートの両方が必要ですが、
                    ファミワンでは<span class="section-text-accent">様々な企業様が抱える課題に対して、解決に必要なベースは企業風土づくり</span>と考えています。
                </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/counseling.jpg" alt="">
        </div>
        <div class="merit-title-box">
            <p class="merit-title">社員が抱える課題例</p>
        </div>
        <div class="merit-container">
            <div class="merit-grid">
                <div class="merit-box">
                    <div class="merit-box-inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people_women.png" alt="">
                        <p class="merit-box-text">不妊治療と仕事の両立が難しい。</p>
                    </div>
                </div>
                <div class="merit-box">
                    <div class="merit-box-inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people_women.png" alt="">
                        <p class="merit-box-text">妊活や不妊治療のことを会社に相談しにくい。</p>
                    </div>
                </div>
                <div class="merit-box">
                    <div class="merit-box-inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people_man.png" alt="">
                        <p class="merit-box-text">そもそも妊活が何をやるかわからない。</p>
                    </div>
                </div>
                <div class="merit-box">
                    <div class="merit-box-inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people_women.png" alt="">
                        <p class="merit-box-text">困っている他の社員に対して、どう対応したら良いのか分からない</p>
                    </div>
                </div>
                <div class="merit-box">
                    <div class="merit-box-inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people_women.png" alt="">
                        <p class="merit-box-text">休暇制度はあるが、利用しにくい。</p>
                    </div>
                </div>
                <div class="merit-box">
                    <div class="merit-box-inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people_man.png" alt="">
                        <p class="merit-box-text">ハラスメントにならない相談の仕方や<br>
                            話し方が知りたい。</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="merit-title-box">
            <p class="merit-title">企業が抱える課題例</p>
        </div>
        <div class="merit-container">
            <div class="merit-grid">
                <div class="merit-box">
                    <div class="merit-box-inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people_hr01.png" alt="">
                        <div class="merit-box-company">
                            <p class="merit-box-text">福利厚生をより充実させることで<br>
                                優秀な人材を獲得したい。</p>
                            <p class="merit-box-text-name">人事（採用）</p>
                        </div>
                    </div>
                </div>
                <div class="merit-box">
                    <div class="merit-box-inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people_hr02.png" alt="">
                        <div class="merit-box-company">
                            <p class="merit-box-text">福利厚生をより充実させることで<br>
                                離職率を下げたい。</p>
                            <p class="merit-box-text-name">人事（労務）</p>
                        </div>
                    </div>
                </div>
                <div class="merit-box">
                    <div class="merit-box-inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people_hr03.png" alt="">
                        <div class="merit-box-company">
                            <p class="merit-box-text">社員の福利厚生を充実させたい、<br>
                                女性活躍のブランディングなど。</p>
                            <p class="merit-box-text-name">経営者</p>
                        </div>
                    </div>
                </div>
                <div class="merit-box">
                    <div class="merit-box-inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people_hr02.png" alt="">
                        <div class="merit-box-company">
                            <p class="merit-box-text">ダイバーシティを意識した、<br>
                                福利厚生を導入したい。</p>
                            <p class="merit-box-text-name">人事（労務）</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="merit-title-box">
            <p class="merit-title">当事者の声</p>
        </div>
        <div class="merit-container">
            <p class="merit-container-title">妊活と仕事との両立に困難さを抱えていらっしゃる方は<span
                    class="merit-container-title-accent">８割を超えていました。</span></p>
            <div class="merit-custmer-container">
                <div class="merit-grid">
                    <div class="merit-custmer-box">
                        <!--<p class="merit-custmer-title">仕事と両立できない人が34.7%</p>-->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/graph01.png" alt="">
                    </div>
                    <div class="merit-custmer-box">
                        <!--<p class="merit-custmer-title">仕事と両立できなかった理由</p>-->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/graph02.png" alt="">
                    </div>
                </div>
            </div>
            <p class="merit-custmer-text">出典（厚生労働省：平成29年度「不妊治療と仕事の両立に係る諸問題についての総合的調査」）</p>
        </div>
    </div>
</section>

<!-- 妊活・不妊支援導入効果 -->
<section class="" id="efficacy">
    <div class="section-inner">
        <div class="section-title-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title_ue.png" alt="">
            <h3 class="section-title">妊活・不妊支援導入効果</h3>
        </div>
        <div class="efficacy-container">
            <div class="efficacy-box">
                <div class="efficacy-box-inner">
                    <p class="efficacy-title"><span class="efficacy-number">01</span>妊活しやすい企業風土作り</p>
                    <p class="efficacy-text">妊活と仕事との両立のポイントと実際をお伝えすることで企業ぐるみで解決できる風土づくりをサポートします。</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/effective01.png" alt="">
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png" alt="" class="efficacy-img">
            <div class="efficacy-box">
                <div class="efficacy-box-inner">
                    <p class="efficacy-title"><span class="efficacy-number">02</span>充実した当事者サポート</p>
                    <p class="efficacy-text">
                        妊活当事者の個別の課題に対して、アドバイザーがお一人お一人のご相談に対応します。企業では拾い上げにくいお悩みに対して専門家ならではの相談でサポートします。</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/effective02.png" alt="">
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png" alt="" class="efficacy-img">
            <div class="efficacy-box">
                <div class="efficacy-box-inner">
                    <p class="efficacy-title"><span class="efficacy-number">03</span>不妊退職防止</p>
                    <p class="efficacy-text">妊活がしやすい企業風土をベースとして妊活と仕事の両立のハードルを下げることで、不妊退職を防止していきます。</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/effective03.png" alt="">
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png" alt="" class="efficacy-img">
            <div class="efficacy-box">
                <div class="efficacy-box-inner">
                    <p class="efficacy-title"><span class="efficacy-number">04</span>優秀人材の確保</p>
                    <p class="efficacy-text">福利厚生として、妊活や不妊治療のサポートを行う事により、妊活や不妊治療により転職を検討している優秀な人材を確保していきます。</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/effective04.png" alt="">
            </div>
        </div>
    </div>
</section>

<!-- 導入実績 -->
<section class="section-wrapper" id="success">
    <div class="section-inner">
        <div class="section-title-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title_ue.png" alt="">
            <h3 class="section-title">導入実績</h3>
            <p class="section-sub-text seminar-sub-text">ファミワンのを福利厚生として
                従業員向け妊活支援を導入して、管理職や若手社員向けの啓発など、企業の風土を変える取り組みをされている企業の事例をご紹介します。</p>
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
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>" alt="">
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
        <div class="success-list-btn btn">
            <a href="<?php echo home_url(); ?>/interview/">事例一覧</a>
        </div>
        <div class="success-list-btn btn">
            <a href="<?php echo home_url(); ?>/benefit/benefit_list/">導入企業一覧</a>
        </div>
    </div>
    <!--</div>-->
</section>

<!-- 様々な企業様にてファミワンの妊活・不妊治療サポートを 福利厚生としての導入等で活用いただいています -->
<!-- ループさせるために同様のロゴを3つ読み込んでいます -->
<div class="custmer-bar">
    <p class="custmer-bar-title">様々な企業様にてファミワンの妊活・不妊治療サポートを<br class="br-sp">福利厚生としての導入等で活用いただいています</p>
    <div class="scloll-box">
        <ul class="slideshow">
        <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_odakyu.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_metro.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_mixi.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_mercari.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_casley.jpg" alt=""></li>

            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_interg.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_tbs.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_daio.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_ga-tech.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_kokuyo.jpg" alt=""></li>
        </ul>
        <ul class="slideshow">
        <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_odakyu.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_metro.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_mixi.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_mercari.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_casley.jpg" alt=""></li>

            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_interg.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_tbs.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_daio.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_ga-tech.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_kokuyo.jpg" alt=""></li>
        </ul>
        <ul class="slideshow">
        <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_odakyu.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_metro.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_mixi.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_mercari.jpg"
                    alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_casley.jpg" alt=""></li>

            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_interg.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_tbs.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_daio.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_ga-tech.jpg" alt=""></li>
            <li class="content"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_kokuyo.jpg" alt=""></li>
        </ul>
    </div>
</div>

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

<!-- ファミワンから企業様へ -->
<section class="section-wrapper" id="for">
    <div class="section-inner">
        <div class="section-title-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title_ue.png" alt="">
            <h3 class="section-title">ファミワンから<span class="section-title-accent">企業様</span>へ</h3>
        </div>
        <div class="section-text-box">
            <p class="section-text">
                5.5組に1組の夫婦が、何らかの形で妊活をしている現状において、<span class="section-text-accent">国や自治体からの妊活や不妊治療時の助成金などの拡充傾向や
                    各メディアでの取り扱い量が増加</span>するなど、社会的な取り組みと感心が高まっているなかで企業としての妊活者や不妊治療者へのサポートは標準となりつつある傾向にあります。<br>
                妊活や不妊治療でお悩みの方をはじめ、社員の妊活や不妊治療をサポートしたいと考えている企業様、私たち専門家にお任せください。
                <span class="section-text-accent">正しい知識、最新の情報を元に、専門家チームが皆様の心と共にフルサポート</span>させていただきます。
            </p>

            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team.jpg" alt="">
        </div>
        <p class="for-title">
            専門家のご紹介<br>
            全30名在籍<span class="for-text-accent">（2021年6月現在）</span>
        </p>
        <div class="for-container">
            <div class="for-box">
                <div class="for-box-inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/care-workers/nishioka.jpg" alt="">
                    <div class="for-box-inner-name-box">
                        <p class="for-box-inner-name-bold">不妊症看護認定看護師</p>
                        <p class="for-box-inner-name">西岡 有可</p>
                    </div>
                </div>
                <p class="for-box-inner-text">
                    不妊症看護認定看護師として都内の不妊治療専門クリニックで10数年勤務。不妊に悩むカップルへのケアやチームマネジメント、研究発表を経験。
                    医療機関の枠組みを超えて、もっと身近な存在として悩める人へサービスを届けたい思いからファミワンへジョイン。現在は福利厚生セミナーやユーザー対応とともにサービス設計を担当。
                </p>
            </div>
            <div class="for-box">
                <div class="for-box-inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/care-workers/toda.jpg" alt="">
                    <div class="for-box-inner-name-box">
                        <p class="for-box-inner-name-bold">臨床心理士</p>
                        <p class="for-box-inner-name">戸田 さやか</p>
                    </div>
                </div>
                <p class="for-box-inner-text">
                    公認心理師・臨床心理士・生殖心理カウンセラー。性や生殖補助医療の専門知識を用いながら、カップル・家族の心理支援を行っている。ファミワンではユーザー対応やサービス設計を担当。
                </p>
            </div>
            <div class="for-box">
                <div class="for-box-inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/care-workers/kawaguchi.jpg" alt="">
                    <div class="for-box-inner-name-box">
                        <p class="for-box-inner-name-bold">胚培養士</p>
                        <p class="for-box-inner-name">川口 優太郎</p>
                    </div>
                </div>
                <p class="for-box-inner-text">
                    埼玉医科大学を卒業後、総合病院勤務を経て、国際基督教大学(ICU)大学院博士前期課程へと進学。アーツ・サイエンス研究科にて生命科学を学ぶ。
                    大学院修了後は、加藤レディスクリニック(新宿区)に勤務し、同クリニックの系列病院となった中国上海永遠幸婦科医院生殖医学センターへと出向。
                    病院の立ち上げに携わるとともに、現地スタッフの育成・指導や培養室の運営などを行う。2020年に、リプロダクティブサポートファーム東京を設立。
                    妊活サポートアプリへの医学監修や生殖医療関連のセミナー・イベントにて講演を行うなど、精力的に活動している。
                </p>
            </div>
            <div class="for-box">
                <div class="for-box-inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/care-workers/ishibashi.jpg" alt="">
                    <div class="for-box-inner-name-box">
                        <p class="for-box-inner-name-bold">生殖医療相談士・看護師</p>
                        <p class="for-box-inner-name">石橋 双葉</p>
                    </div>
                </div>
                <p class="for-box-inner-text">
                    妊娠について不妊治療について悩まれている皆さんの傍に居たい。 皆さんの声に耳を傾け、ずっとサポートしていきたい、これが私の願いです。
                    正しい情報を提供し、必要な時にすぐに利用できる。これがファミワンです。 決して一人ではありません。一緒に悩み・考えていきましょう。
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
