document.addEventListener('DOMContentLoaded', function() {

    let timeout
    let debounceTimeout

    function debounce(func, wait) {
        return function(...args) {
            clearTimeout(debounceTimeout)
            debounceTimeout = setTimeout(() => func.apply(this, args), wait)
        }
    }

    function handleInactivity() {
        window.alert('Inactive. redirecting to requests list')
        window.location.href = '/requests'
    }

    function resetTimer() {
        if (timeout) {
            clearTimeout(timeout)
        }
        console.log('triggered')
        timeout = setTimeout(handleInactivity, 20000) // 20 seconds timeout
    }
    const debouncedResetTimer = debounce(resetTimer, 200)
    document.addEventListener('DOMContentLoaded', resetTimer)
    document.addEventListener('mousemove', debouncedResetTimer)
    document.addEventListener('keypress', debouncedResetTimer)
    document.addEventListener('touchstart', debouncedResetTimer)
    document.addEventListener('click', debouncedResetTimer)
    document.addEventListener('visibilitychange', function() {
        if (document.visibilityState === 'visible') {
            resetTimer() 
        }
    })
})