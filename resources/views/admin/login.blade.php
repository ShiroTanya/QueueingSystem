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
                            <label for="username">Tên đăng nhập<span style="color: red"> *</span></label>
                            <input type="text" class="form-control form-error" id="username" placeholder="Tên đăng nhập">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu<span style="color: red"> *</span></label>
                            <div class="input-group mb-3" style="position: relative">
                                <input type="password" class="form-control" id="password" placeholder="Mật khẩu">
                                <div class="btn-toggle-password-div">
                                    <button class="btn-toggle-password" type="button" id="togglePassword">
                                        <i class="fa-regular fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Quên mật khẩu? <a href="{{URL::to('/forgot-password')}}" class="a-forgot-password">Nhấp vào đây</a></label>
                        </div>
                        <div class="button-action">
                            <button type="submit" class="btn btn-primary mt-3">Đăng nhập</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-7">
                <div class="center-backgroud">
                    <img src="{{ asset('frontend/img/background.png') }}" alt="">
                    <div class="text-logo">
                        <div class="header1">Hệ thống</div>
                        <div class="header2">QUẢN LÝ XẾP HÀNG</div>
                    </div>
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
