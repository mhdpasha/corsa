// document.addEventListener('DOMContentLoaded', () => {
//     const toggleButton = document.getElementById('toggle');
//     const icon = document.getElementById('svg');
//     const darkIcon = '<path fill="currentColor" d="M9,2C7.95,2 6.95,2.16 6,2.46C10.06,3.73 13,7.5 13,12C13,16.5 10.06,20.27 6,21.54C6.95,21.84 7.95,22 9,22A10,10 0 0,0 19,12A10,10 0 0,0 9,2Z" />';
//     const lightIcon = '<path fill="currentColor" d="M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z" />';

//     const savedMode = sessionStorage.getItem('color-mode') || 'dark';
//     document.body.classList.add(savedMode);
//     toggleButton.setAttribute('data-value', savedMode);

//     if (savedMode === 'dark') {
//         icon.innerHTML = darkIcon;
//     } else {
//         icon.innerHTML = lightIcon;
//     }

//     toggleButton.addEventListener('click', function() {
//         const currentValue = toggleButton.getAttribute('data-value');
//         const newValue = currentValue === 'dark' ? 'light' : 'dark';
        
//         toggleButton.setAttribute('data-value', newValue);

//         if (newValue === 'dark') {
//             document.body.classList.remove('light');
//             document.body.classList.add('dark');
//             icon.innerHTML = darkIcon;
//         } else {
//             document.body.classList.remove('dark');
//             document.body.classList.add('light');
//             icon.innerHTML = lightIcon;
//         }

//         sessionStorage.setItem('color-mode', newValue);
//     });
// });
