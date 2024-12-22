document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('applicationForm');
    form.addEventListener('submit', function (event) {
        alert('Your application is being submitted!');
    });
});
