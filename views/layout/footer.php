</div> <!-- main -->
</div> <!-- layout -->
<script>
function updateClock(){
const now = new Date();
const time = now.toLocaleTimeString();
document.getElementById("live-clock").innerText = time;
}

setInterval(updateClock,1000);
updateClock();
</script>
</body>
</html>