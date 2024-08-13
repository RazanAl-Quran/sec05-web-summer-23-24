document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('myBtn').addEventListener('click', function () {
        console.log('you clicked me!!');
        document.getElementById('demo').textContent = new Date();
    })
});


