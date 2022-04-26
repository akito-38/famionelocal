// スムーススクロール
jQuery(function ($) {
  jQuery('a[href^="#"]').click(function () {
    var speed = 900;
    var href = jQuery(this).attr('href');
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - 90;
    jQuery('body,html').animate({
      scrollTop: position
    }, speed, 'swing');
    return false;
  });

  jQuery('.js-dropDown').on('click', (e) => {
    jQuery(e.currentTarget).toggleClass('is-open');
  })

  jQuery('.js-menu').on('click', (e) => {
    jQuery('html').toggleClass('is-menu');
  })


  //ヘッダー JS
  jQuery(function () { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    jQuery('nav ul li a:not(:only-child)').click(function (e) {
      jQuery(this).siblings('.nav-dropdown').toggle();
      // Close one dropdown when selecting another
      jQuery('.nav-dropdown').not(jQuery(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    jQuery('html').click(function () {
      jQuery('.nav-dropdown').hide();
    });
    // Toggle open and close nav styles on click
    jQuery('#nav-toggle').click(function () {
      jQuery('nav ul').slideToggle();
    });
    // Hamburger to X toggle
    jQuery('#nav-toggle').on('click', function () {
      this.classList.toggle('active');
    });
  }); // end DOM ready


});

// // jquery.pagination.js
// jQuery('.gallery').pagination({
//   itemElement : '> .sccess-item-list', // アイテムの要素
//   displayItemCount : 12,// 1ページ毎に表示する個数
//   pageNumberDisplayNumber : 3, // ページ番号の表示個数
//   ellipsisMaxPageNumber : '10', // 省略記号が表示される最大ページ数
//   ellipsisMode : true,// 省略記号を表示するかどうか
//   paginationClassName : 'pager-container', // ページネーション本体のクラス名
//   pageNumberClassName : 'page-number',// ページネーション本体の内側のクラス名
//   nextBtnText : '<i class="material-icons">navigate_next</i>',
//   prevBtnText : '<i class="material-icons">navigate_before</i>',
//   onePageOnlyDisplay : true,// 1ページのみの場合にページネーションを表示するかどうか
//   changeEndCallback : function() {
//     // クリックした後にページの一番上までアニメーションスクロール
//     jQuery('body,html').animate({ scrollTop: 0 }, 500);
//   }
// });
