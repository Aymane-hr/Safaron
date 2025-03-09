@props(['type', 'message'])

<script>
        const Toast = Swal.mixin({
        toast: true,
        position: "bottom-end",
        showConfirmButton: false,
        background: "#a80000",
        color: "#fff",
        iconColor: "#fff",
        timer: 5000,
        timerProgressBar: true,
        timerProgressBarColor: "#fff",
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
            let progressBar = toast.querySelector('.swal2-timer-progress-bar');
            if (progressBar) {
                progressBar.style.backgroundColor = "#fff";  // Change to your desired color
            }
        }
        });
        Toast.fire({
        icon: '{{ $type }}',
        title: '{{ $message }}'
        });
</script>
<p style="color: #a80000"></p>
