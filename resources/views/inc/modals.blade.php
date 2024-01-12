<div class="register-modal-frame register-modal-frame-none" id="register-modal">
    <div class="register-modal-frame-container">
        <form method="post" class="register-form" id="regform" action="{{url('register')}}">
            {{ csrf_field() }}
            <div class="register-form-container">
                <span class="register-form-main-text">Регистрация</span>
                <div class="register-input-container">
                    <input class="register-input" name="fioreg" placeholder="ФИО"/>
                    <input class="register-input" name="cityreg" placeholder="Город"/>
                    <div class="register-input-container-small">
                        <input class="register-input-small" name="emailreg" placeholder="Email"/>
                        <input class="register-input-small" name="phonereg" placeholder="Номер телефона"/>
                    </div>
                    <input class="register-input" name="passreg" placeholder="Пароль"/>
                    <input class="register-input" name="passrepreg" placeholder="Подтверждение пароля"/>
                </div>
                <div class="errors-register-container"></div>
                <div class="register-submit-container">
                    <div class="register-politics-container">
                        <input id="chks" type="checkbox" checked="checked" class="register-politics-checkbox"/>
                        <label class="register-politics-label">Даю согласие на обработку персональных данных.</label>
                    </div>
                    <input type="submit" class="register-submit-btn" value="Зарегистрироваться"/>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="auth-modal-frame auth-modal-frame-none" id="auth-modal">
    <div class="auth-modal-frame-container">
        <form class="auth-form" method="post" id="authform" action="{{url('auth')}}">
            {{ csrf_field() }}
            <div class="auth-form-container">
                <span class="auth-form-main-text">Авторизация</span>
                <div class="auth-input-container">
                    <input class="auth-input" name="emailauth" placeholder="Email"/>
                    <input class="auth-input" name="passwordauth" placeholder="Пароль"/>
                    <input type="submit" class="auth-submit-btn" value="Войти"/>
                </div>
                <div class="errors-auth-container"></div>
            </div>
        </form>
    </div>
</div>
