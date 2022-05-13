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

  jQuery('.js-moreBtn').on('click', function () {
    jQuery('.js-slideWrapper').addClass('is-active');
    console.log('dd');
  });

});
