$(document).ready(function () {
    $('#log').click(function (e) {
        var valid = this.form.checkValidity();
        if (valid) {
            var uname = $('#uname').val();
            var email = $('#email').val();
            var password = $('#password').val();
            // var pass2 = $('#pass2').val();
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'sign.php',
                data: { uname: uname, email: email, password: password },
                success: function (data) {
                    Swal.fire(
                        'Logged in',
                        'welcome',
                        'success'
                    )
                    setTimeout(window.location.replace("index.php"), 3000);
                },
                error: function (data) {
                    Swal.fire(
                        'Not Logged in',
                        'Error in logging in',
                        'error'
                    )
                }
            });
        } else {
            alert('aasss')
        }
    });

});
