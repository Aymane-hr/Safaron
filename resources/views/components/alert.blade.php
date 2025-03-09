@props(['type', 'message'])

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const type = '{{ $type }}';  // Get the message type from Blade
        const isError = type === 'error';

        const Toast = Swal.mixin({
            toast: true,
            position: "bottom-end",
            showConfirmButton: false,
            background: isError ? "#a80000" : "",
            color: isError ? "#fff" : "",
            iconColor: isError ? "#fff" : "",
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;

                if (isError) {
                    let progressBar = toast.querySelector('.swal2-timer-progress-bar');
                    if (progressBar) {
                        progressBar.style.backgroundColor = "#fff"; // White progress bar for error
                    }
                }
            }
        });

        Toast.fire({
            icon: type,
            title: '{{ $message }}'
        });
    });
</script>
