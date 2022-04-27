<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M6KJN82');
  </script>
  <!-- End Google Tag Manager -->

  <!--google-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">



  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6KJN82" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php wp_body_open(); ?>
  <!-- へッダー -->
  <header class="bl_mainHeader">
    <h1>
      <a href="https://famione.com/"><img class="bl_logo" alt="famione" src="https://famione.com/images/logo.svg"
          width="179" height="32"></a>
    </h1>

    <button type="button" class="bl_menuSwitch js-menu"><span></span></button>
    <nav class="bl_mainHeader_right">
      <ul class="bl_mainHeader_list">



        <li>
          <a href="/benefit/">福利厚生トップ</a>
        </li>
        <li>
          <a href="/benefit/interview/">事例一覧</a>
        </li>
        <li>
          <a target="_blank" href="https://famione.co.jp/">運営会社</a>
        </li>
        <li class="bl_mainHeader_list_drop js-dropDown">
          <span>個人の方</span>
          <ul class="bl_mainHeader_list_sub">
            <li>
              <a href="/famioneplus/">妊活LINEサポート</a>
            </li>
            <li>
              <a href="https://lp.famione.com/faq/">よくあるご質問</a>
            </li>
            <li>
              <a href="/live/">妊活ライブ</a>
            </li>
            <li>
              <a href="/premium/">プレミアムプラン</a>
            </li>
            <li>
              <a href="https://flora.famione.com/">子宮内フローラキット</a>
            </li>
            <li>
              <a href="/mall/">ファミワンモール</a>
            </li>
            <li>
              <a href="/career/">ファミワンキャリア</a>
            </li>
            <li>
              <a href="/column/">妊コラム</a>
            </li>
          </ul>
        </li>

        <li>
          <a href="https://famione.co.jp/benefit-contact/"
            class="bl_mainHeader_btn bl_mainHeader_btn--contact">お問い合わせ</a>
        </li>
        <li>
          <a href="https://famione.co.jp/benefit-download/"
            class="bl_mainHeader_btn bl_mainHeader_btn--document">資料請求</a>
        </li>
      </ul>
    </nav>
  </header>
