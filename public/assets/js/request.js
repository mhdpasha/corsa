document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search)
      if (urlParams.has('openModal') && urlParams.get('openModal') === 'true') {
        let reqModal = new bootstrap.Modal(document.getElementById('addModal'), {
            keyboard: false
        })
        reqModal.show()
    }

      let timeout;
      let debounceTimeout;

      function debounce(func, wait) {
          return function(...args) {
              clearTimeout(debounceTimeout);
              debounceTimeout = setTimeout(() => func.apply(this, args), wait);
          };
      }

      function handleInactivity() {
          window.alert('Inactive, redirecting to dashboard')
          window.location.href = '/dashboard';
      }

      function resetTimer() {
          if (timeout) {
              clearTimeout(timeout);
          }
          console.log('triggered')
          timeout = setTimeout(handleInactivity, 60000); // 60 seconds timeout
      }

      const debouncedResetTimer = debounce(resetTimer, 200);

      document.addEventListener('DOMContentLoaded', resetTimer);
      document.addEventListener('mousemove', debouncedResetTimer);
      document.addEventListener('keypress', debouncedResetTimer);
      document.addEventListener('touchstart', debouncedResetTimer);
      document.addEventListener('click', debouncedResetTimer);

      document.addEventListener('visibilitychange', function() {
          if (document.visibilityState === 'visible') {
              resetTimer(); 
          }
      });
})