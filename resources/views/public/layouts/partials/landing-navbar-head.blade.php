{{-- Assets required for the same header as /leadform (rbt-header + mobile menu) --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/feather.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
<style>
    .hamberger-button {
        background: transparent !important;
        border: none !important;
        color: var(--color-body) !important;
        font-size: 24px !important;
        padding: 10px !important;
        cursor: pointer !important;
        display: block !important;
    }
    .popup-mobile-menu {
        z-index: 9999 !important;
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        background-color: rgba(0, 0, 0, 0.8) !important;
        visibility: hidden !important;
        opacity: 0 !important;
        transition: opacity 0.5s ease-out !important;
    }
    .popup-mobile-menu.active {
        visibility: visible !important;
        opacity: 1 !important;
    }
    .popup-mobile-menu .inner-wrapper {
        width: 400px !important;
        background-color: white !important;
        height: 100% !important;
        position: absolute !important;
        left: -150px !important;
        transition: all 0.5s ease-out !important;
        padding: 60px 50px !important;
        overflow-y: auto !important;
    }
    .popup-mobile-menu.active .inner-wrapper {
        left: 0 !important;
    }
    @media (max-width: 767px) {
        .popup-mobile-menu .inner-wrapper {
            width: 300px !important;
            padding: 30px 20px !important;
        }
    }
</style>
<script src="https://unpkg.com/feather-icons"></script>
