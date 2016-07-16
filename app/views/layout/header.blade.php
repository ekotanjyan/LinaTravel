<header id="header" class="navbar-static-top">
    <div class="topnav hidden-xs">
        <div class="container">
            <ul class="quick-menu pull-left">
                <li><a href="#">My Account</a></li>
                <li class="ribbon">
                    <a href="#">{{trans('header.language')}}</a>
                    <ul class="menu mini">
                        <li><a href="{{URL::to('/lang',['am'])}}">{{trans('header.armenian')}}</a></li>
                        <li><a href="{{URL::to('/lang',['ru'])}}" title="Deutsch">{{trans('header.russian')}}</a></li>
                        <li><a href="{{URL::to('/lang',['en'])}}" title="English">{{trans('header.english')}}</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="quick-menu pull-right">
                <li><a href="#travelo-login" class="soap-popupbox">LOGIN</a></li>
                <li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
                <li class="ribbon currency">
                    <a href="#" title="">USD</a>
                    <ul class="menu mini">
                        <li><a href="#" title="AUD">AUD</a></li>
                        <li><a href="#" title="BRL">BRL</a></li>
                        <li class="active"><a href="#" title="USD">USD</a></li>
                        <li><a href="#" title="CAD">CAD</a></li>
                        <li><a href="#" title="CHF">CHF</a></li>
                        <li><a href="#" title="CNY">CNY</a></li>
                        <li><a href="#" title="CZK">CZK</a></li>
                        <li><a href="#" title="DKK">DKK</a></li>
                        <li><a href="#" title="EUR">EUR</a></li>
                        <li><a href="#" title="GBP">GBP</a></li>
                        <li><a href="#" title="HKD">HKD</a></li>
                        <li><a href="#" title="HUF">HUF</a></li>
                        <li><a href="#" title="IDR">IDR</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    
    <div class="main-header">   
        <div class="container">
            <h1 class="logo navbar-brand">
                <a href="index.html" title="Travelo - home">
                    <img src="{{URL::asset('asset/images/logo.png')}}" alt="Travelo HTML5 Template" />
                </a>
            </h1>

            <nav id="main-menu" role="navigation">
                <ul class="menu">
                    <li class="menu-item-has-children">
                        <a href="{{URL::to('/home')}}">{{trans('header.home')}}</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{URL::to('/tours')}}">{{trans('header.tours')}}</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{URL::to('/cruises')}}">{{trans('header.cruises')}}</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{URL::to('/aboutus')}}">{{trans('header.aboutus')}}</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{URL::to('/contactus')}}">{{trans('header.contactus')}}</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="travelo-signup" class="travelo-signup-box travelo-box">
        <div class="login-social">
            <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
            <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
        </div>
        <div class="seperator"><label>OR</label></div>
        <div class="simple-signup">
            <div class="text-center signup-email-section">
                <a href="#" class="signup-email"><i class="soap-icon-letter"></i>Sign up with Email</a>
            </div>
            <p class="description">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund olicy, and Host Guarantee Terms.</p>
        </div>
        <div class="email-signup">
            <form>
                <div class="form-group">
                    <input type="text" class="input-text full-width" placeholder="first name">
                </div>
                <div class="form-group">
                    <input type="text" class="input-text full-width" placeholder="last name">
                </div>
                <div class="form-group">
                    <input type="text" class="input-text full-width" placeholder="email address">
                </div>
                <div class="form-group">
                    <input type="password" class="input-text full-width" placeholder="password">
                </div>
                <div class="form-group">
                    <input type="password" class="input-text full-width" placeholder="confirm password">
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Tell me about Travelo news
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <p class="description">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund Policy, and Host Guarantee Terms.</p>
                </div>
                <button type="submit" class="full-width btn-medium">SIGNUP</button>
            </form>
        </div>
        <div class="seperator"></div>
        <p>Already a Travelo member? <a href="#travelo-login" class="goto-login soap-popupbox">Login</a></p>
    </div>
    <div id="travelo-login" class="travelo-login-box travelo-box">
        <div class="login-social">
            <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
            <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
        </div>
        <div class="seperator"><label>OR</label></div>
        <form>
            <div class="form-group">
                <input type="text" class="input-text full-width" placeholder="email address">
            </div>
            <div class="form-group">
                <input type="password" class="input-text full-width" placeholder="password">
            </div>
            <div class="form-group">
                <a href="#" class="forgot-password pull-right">Forgot password?</a>
                <div class="checkbox checkbox-inline">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                </div>
            </div>
        </form>
        <div class="seperator"></div>
        <p>Don't have an account? <a href="#travelo-signup" class="goto-signup soap-popupbox">Sign up</a></p>
    </div>
</header>