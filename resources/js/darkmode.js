document.addEventListener('DOMContentLoaded', () => {
  const darkModeToggle = document.getElementById('toggleDarkMode');

  if (darkModeToggle) {
    darkModeToggle.addEventListener('change', function () {
      document.body.classList.toggle('dark-mode');
    });
  }
});
