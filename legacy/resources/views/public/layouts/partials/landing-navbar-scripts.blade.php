<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof feather !== 'undefined') {
            feather.replace();
        }
        var menu = document.getElementById('landingPopupMobileMenu');
        if (!menu) return;
        var openers = document.querySelectorAll('.hamberger-button');
        var closers = menu.querySelectorAll('.close-button');
        openers.forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                menu.classList.add('active');
            });
        });
        closers.forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                menu.classList.remove('active');
            });
        });
        menu.addEventListener('click', function (e) {
            if (e.target === menu) {
                menu.classList.remove('active');
            }
        });
    });
</script>
