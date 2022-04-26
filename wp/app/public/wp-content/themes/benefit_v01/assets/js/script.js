// スムーススクロール
$(function () {
  $('a[href^="#"]').click(function () {
    var speed = 900;
    var href = $(this).attr('href');
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - 90;
    $('body,html').animate({ scrollTop: position }, speed, 'swing');
    return false;
  });

  $('.js-dropDown').on('click',(e)=>{
    $(e.currentTarget).toggleClass('is-open');
  })

  $('.js-menu').on('click',(e)=>{
    $('html').toggleClass('is-menu');
  })



});

// jquery.pagination.js
$('.gallery').pagination({
  itemElement : '> .sccess-item-list', // アイテムの要素
  displayItemCount : 12,// 1ページ毎に表示する個数
  pageNumberDisplayNumber : 3, // ページ番号の表示個数
  ellipsisMaxPageNumber : '10', // 省略記号が表示される最大ページ数
  ellipsisMode : true,// 省略記号を表示するかどうか
  paginationClassName : 'pager-container', // ページネーション本体のクラス名
  pageNumberClassName : 'page-number',// ページネーション本体の内側のクラス名
  nextBtnText : '<i class="material-icons">navigate_next</i>',
  prevBtnText : '<i class="material-icons">navigate_before</i>',
  onePageOnlyDisplay : true,// 1ページのみの場合にページネーションを表示するかどうか
  changeEndCallback : function() {
    // クリックした後にページの一番上までアニメーションスクロール
    $('body,html').animate({ scrollTop: 0 }, 500);
  }
});
