<!-- Begin Kenne's Login Register Area -->
<style>
    .row {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<div class="kenne-login-register_area" style="  width: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
                <!-- Login Form s-->
                <form action="./?url=login" method="post">
                    <div class="login-form">
                        <h4 class="login-title">Đăng nhâp</h4>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <label>Username*</label>
                                <input name="username" type="text" placeholder="Username" autofocus>
                            </div>
                            <div class="col-12 mb--20">
                                <label>Password</label>
                                <input name="password" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-8">
                                <div class="check-box">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Nhớ mật khẩu</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="forgotton-password_info">
                                    <a href="#"> Quên mật khẩu?</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <!-- <button class="kenne-login_btn">Login</button> -->
                                <input class="kenne-login_btn" type="submit" name="Login" value="Đăng Nhập" style="background-color: black;">
                            </div>

                            <div class="col-md-12">
                                <div class="forgotton-password_info">
                                    Bạn chưa có tài khoản?
                                    <a href="./?url=register"> Đăng ký</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Kenne's Login Register Area  End Here -->