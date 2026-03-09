</div> <!-- main -->
</div> <!-- wrapper -->

<script>
setInterval(() => {
    const now = new Date();
    const clock = document.getElementById('live-clock');
    if (clock) {
        clock.textContent = now.toLocaleTimeString();
    }
}, 1000);
</script>

</body>
</html>