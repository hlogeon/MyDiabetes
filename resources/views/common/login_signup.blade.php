<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{asset('css/login_signup.css')}}" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
    <body>
        <div class="form">

        <ul class="tab-group">
            <li class="tab active"><a href="#signup">{{trans('login_form.signup')}}</a></li>
            <li class="tab"><a href="#login">{{trans('login_form.login')}}</a></li>
        </ul>

        <div class="tab-content">
            <div id="signup">
                <h1>{{trans('login_form.signup_title')}}</h1>

                <form action="{{route('post_register')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                {{trans('login_form.f_name')}}<span class="req">*</span>
                            </label>
                            <input name="first_name" type="text" required autocomplete="off" />
                        </div>

                        <div class="field-wrap">
                            <label>
                                {{trans('login_form.l_name')}}<span class="req">*</span>
                            </label>
                            <input name="last_name" type="text"required autocomplete="off"/>
                        </div>
                    </div>

                    <div class="field-wrap">
                        <label>
                            {{trans('login_form.email')}}<span class="req">*</span>
                        </label>
                        <input name="email" type="email"required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            {{trans('login_form.set_password')}}<span class="req">*</span>
                        </label>
                        <input name="password" type="password"required autocomplete="off"/>
                    </div>

                    <button type="submit" class="button button-block"/>{{trans('login_form.signup_send_button')}}</button>

                </form>

            </div>

            <div id="login">
                <h1>{{trans('login_form.login_title')}}</h1>

                <form action="{{route('post_login')}}" method="post">

                    <div class="field-wrap">
                        <label>
                            {{trans('login_form.email')}}<span class="req">*</span>
                        </label>
                        <input name="email" type="email"required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            {{trans('login_form.enter_password')}}<span class="req">*</span>
                        </label>
                        <input name="password" type="password"required autocomplete="off"/>
                    </div>

                    <p class="forgot"><a href="#">{{trans('login_form.forgot_password')}}</a></p>

                    <button class="button button-block"/>{{trans('login_form.login_send_button')}}</button>

                </form>

            </div>

        </div><!-- tab-content -->

    </div> <!-- /form -->

        <script type="text/javascript">
        $('.form').find('input, textarea').on('keyup blur focus', function (e) {

            var $this = $(this),
                    label = $this.prev('label');

            if (e.type === 'keyup') {
                if ($this.val() === '') {
                    label.removeClass('active highlight');
                } else {
                    label.addClass('active highlight');
                }
            } else if (e.type === 'blur') {
                if( $this.val() === '' ) {
                    label.removeClass('active highlight');
                } else {
                    label.removeClass('highlight');
                }
            } else if (e.type === 'focus') {

                if( $this.val() === '' ) {
                    label.removeClass('highlight');
                }
                else if( $this.val() !== '' ) {
                    label.addClass('highlight');
                }
            }

        });

        $('.tab a').on('click', function (e) {

            e.preventDefault();

            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');

            target = $(this).attr('href');

            $('.tab-content > div').not(target).hide();

            $(target).fadeIn(600);

        });
    </script>
    </body>
</html>