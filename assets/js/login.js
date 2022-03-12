$(() => {
    $('#form').submit(e => {
        let email = $('#email').val().trim();
        let password = $('#password').val().trim();
        let regex = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

        if (email.length === 0) {
            showError('Vui lòng nhập email');
            e.preventDefault();
        }

        else if (!regex.test(email)) {
            showError('Email không hợp lệ');
            e.preventDefault();
        }

        else if (password.length === 0) {
            showError('Vui lòng nhập password');
            e.preventDefault();
        }

        else if(password.length < 6) {
            showError('Password không hợp lệ');
            e.preventDefault();
        }

        else if (regex.test(email) && password.length >= 6) {
            console.log(email);
            console.log(password); 
            swal({
                title: "Chúc mừng",
                text: "Bạn đã đăng nhập thành công!",
                icon: "success",
                }).then(ok => {
                    if(ok) {
                        window.location.href = "./list_student.php";
                    }
                })
            e.preventDefault();
        }
    })
})

function showError(message) {
    $('#errorMessage').html(message);
    $('#errorMessage').show();
}