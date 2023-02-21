$(document).ready(function () {
    let formLogin = $('form[name="form-login"]');
    let loading = $('.loading');
    $('.btn-login').click(function (e) {
        e.preventDefault();
        loading.fadeIn(300);
        setTimeout(() => {
            loading.fadeOut(300);
            formLogin.submit();
        }, 500);
    });
});
