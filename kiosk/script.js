function updateClock() {
  const now = new Date();
  const clock = document.getElementById("clock");
  clock.textContent = now.toLocaleString();
}

// Update clock every second
setInterval(updateClock, 1000);
updateClock();
