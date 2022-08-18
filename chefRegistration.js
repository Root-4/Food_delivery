alert("As");
$(document).ready(function () {
    $('#chef').click(function (e) {

        var valid = this.form.checkValidity();
        if (valid) {
            var cname = $('#cname').val();
            var cemail = $('#cemail').val();
            var cphone = $('#cphone').val();
            var address = $('#address').val();
            var country = $('#country').val();
            var state = $('#state').val();
            var type = $('#type').val();
            // alert(cname);
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'chefin.php',
                data: { cname: cname, cemail: cemail, cphone: cphone, address: address, country: country, state: state, type: type },
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
            alert('asd');
        }
    });
});