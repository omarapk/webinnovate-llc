<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    (function () {
        if (typeof feather !== 'undefined') {
            feather.replace();
        }
        if (typeof jQuery !== 'undefined') {
            jQuery(function ($) {
                if (typeof eduJs !== 'undefined') {
                    eduJs.popupMobileMenu();
                    eduJs.headerSticky();
                }
                $('.hamberger-button').on('click', function (e) {
                    e.preventDefault();
                    $('.popup-mobile-menu').addClass('active');
                });
                $('.close-button').on('click', function (e) {
                    e.preventDefault();
                    $('.popup-mobile-menu').removeClass('active');
                });
                $('.popup-mobile-menu').on('click', function (e) {
                    if (e.target === this) {
                        $(this).removeClass('active');
                    }
                });
            });
        }
    })();
</script>
