<script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
<script src="{{ asset('assets/frontend/js/homepage-bg.js') }}"></script>
<script src="{{ asset('assets/frontend/js/logo-animated.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('open-modal').addEventListener('click', () => {
        Swal.fire({
            title: 'Modal Title',
            text: 'This is the content of the modal window.',
            icon: 'info',
            confirmButtonText: 'Close'
        });
    });
</script>
