<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{ asset('/frontend/css/login.css') }}">
    <link rel="shortcut icon" href="{{ asset('frontend/img/logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c71231073e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-web">
        <div class="row h-100">
            <div class="col-md-5" style="background-color: #F6F6F6">
                <div class="form-action">
                    <div class="image-logo" style="margin-top: 40px">
                        <img class="mt-3" src="{{ asset('frontend/img/logo.png') }}" style="width: 170px; max-width: 90%; height: auto">
                    </div>
                    <form method="POST" action="/" style="max-width: 400px; margin-top: 50px" class="w-100">
                        <div class="form-group">
                            <h4 style="text-align: center"> Đặt lại mật khẩu </h4>
                            <label for="username">Vui lòng nhập email để đặt lại mật khẩu của bạn<span style="color: red"> *</span></label>
                            <input type="text" class="form-control form-error" id="username" placeholder="Tên đăng nhập">
                        </div>
                        <div class="button-action" style="margin-top: 10%; display: flex; flex-direction: row; align-items: center;justify-content: center">
                            <a href="{{ URL::to('/') }}">
                                <button style="margin-top: 16px" type="button" class="btn btn-outline-primary">Hủy</button>
                            </a>
                            <button  style="margin-left: 5%" type="submit" class="btn btn-primary mt-3">Tiếp tục</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-7">
                <div class="center-backgroud">
                    <img src="{{ asset('frontend/img/background2.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function togglePassword(field, button) {
        button.addEventListener("click", function() {
            const type = field.getAttribute("type") === "password" ? "text" : "password";
            field.setAttribute("type", type);
            button.innerHTML = type === "password" ? '<i class="fa-regular fa-eye"></i>' : '<i class="fa-regular fa-eye-slash"></i>';
        });
    }
    togglePassword(document.getElementById("password"), document.getElementById("togglePassword"));
</script>
</html>
