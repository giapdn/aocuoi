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
                <form action="./?url=register" method="post">
                    <div class="login-form">
                        <h4 class="login-title">Đăng ký tài khoản</h4>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <label>Full Name</label>
                                <input name="fullname" type="text" placeholder="fullname" autofocus>
                            </div>
                            <div class="col-md-12 col-12">
                                <label>Email</label>
                                <input name="email" type="text" placeholder="Email">
                            </div>
                            <div class="col-md-12 col-12">
                                <label>Phone</label>
                                <input name="phone" type="text" placeholder="Phone">
                            </div>
                            <div class="col-md-12 col-12">
                                <label>Username*</label>
                                <input name="username" type="text" placeholder="Username">
                            </div>
                            <div class="col-12 mb--20">
                                <label>Password</label>
                                <input name="password" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-12">
                                <!-- <button class="kenne-login_btn">Login</button> -->
                                <input class="kenne-login_btn" type="submit" name="register" value="Đăng ký" style="background-color: black;">
                            </div>

                            <div class="col-md-12">
                                <div class="forgotton-password_info">
                                    Bạn đã có tài khoản?
                                    <a href="./?url=login"> Đăng nhập</a>
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