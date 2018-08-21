jQuery(document).ready(function ($) {
    
    // Fitvids
    function fitVids() {
        $('.post').fitVids();
    }
    fitVids();

    // Site Search Dropdown
    $('.js-open-site-search').live( 'click', function () {
        openSearch(this);
    });

    $('.js-close-site-search').live( 'click', function () {
        closeSearch(this);
    });

    function openSearch(button) {
        $(button)
            .addClass('site-search-open')
            .removeClass('js-open-site-search')
			.addClass('js-close-site-search');
        $('.js-site-search').slideDown();
        $('.js-site-search .search-field').focus();
    }

    function closeSearch(button) {
        $(button)
			.removeClass('site-search-open')
            .removeClass('js-close-site-search')
            .addClass('js-open-site-search');
        $('.js-site-search').slideUp();
    }

});