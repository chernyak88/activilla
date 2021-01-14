(function (_, $) {
  $(document).ready(function () {
    if (!$('.navbar-right li').length) {
      return;
    } // Navbar submenu position


    $(document).on('mouseenter', '.navbar-right li', function () {
      var pagePosition = $(".admin-content").offset();
      var adminContentWidth = 1240;

      if ($(this).hasClass('dropdown-submenu')) {
        var dropdownMenu = $(this).find('.dropdown-menu');
        var elmPosition = dropdownMenu.offset().left + dropdownMenu.width();

        if (elmPosition - pagePosition.left > adminContentWidth) {
          dropdownMenu.addClass('dropdown-menu-to-right');
        }
      }
    });
    $(document).on('mouseleave', '.navbar-right li', function () {
      $(this).find('.dropdown-menu').removeClass('dropdown-menu-to-right');
    });
  });
})(Tygh, Tygh.$);