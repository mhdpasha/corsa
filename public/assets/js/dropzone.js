document.addEventListener('DOMContentLoaded', function () {
    const submitBtn = document.getElementById('submitBtn');
    const form = document.getElementById('addForm');

    stylized(form)

    submitBtn.addEventListener('click', function () {
        form.submit();
    });
});

const stylized = (el) => {
    el.style.borderWidth = '2px'
    el.style.borderStyle = 'dashed'
}