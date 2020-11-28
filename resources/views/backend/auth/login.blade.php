<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Porsche03/css/login.css') }}">
    
    <link rel="stylesheet" href="{{ asset('backend/dist/css/toastr.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('backend/dist/css/toastr.css') }} ">
    <link rel="stylesheet" href="{{ asset('backend/plugins/jquery-toast-plugin/dist/jquery.toast.min.css') }} ">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <title>Porsche ID Login</title>
</head>
<body>
    @if ( Session::has('success') )
    <div class="alert alert-success alert-dismissible" role="alert">
        <strong>{{ Session::get('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
    </div>
    @endif
    <div class="main">
            <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                <img src="{{ asset('Porsche03/img/login/porsche-svg.svg') }}">
                <div class="infor">
                    <p class="welcome"> Nice to see you</p>
                    <div class="form">
                        <label for="username">Porsche ID (email address)</label>
                        <input type="email" id="email" name="email" required />
                        @if ($errors->has('email'))
                            <code>{{ $errors->first('email') }}</code>
                        @endif
                    </div>
                    <div class="form">
                        <label for="username">Porsche Password</label>
                        <input type="password" id="password" name="password" required />
                        @if ($errors->has('password'))
                        <code>{{ $errors->first('password') }}</code>
                    @endif
                    </div>
                    <button class="submit">> Continue</button>
                    <div class="register">
                        <a href="{{ route('admin.register') }}">Register now,</a> to discover the digital world of Porsche.
                    </div>
                </div>
            </form>
    </div>
    {{-- </div> --}}
    <script src="{{ asset('backend/src/js/vendor/jquery-3.3.1.min.js')}} "></script>
    <script src="{{ asset('backend/plugins/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>
    <script>
        @if(session('error'))
            $.toast({
            heading: 'có lỗi xảy ra',
            text: '{{ session('error') }}',
            showHideTransition: 'slide',
            icon: 'success',
            loaderBg: '#2dce89',
            bgColor : '#f5365c',
            textColor : '#eee', 
            position: 'top-right'
            })
        @endif
        @if(session('status'))
            $.toast({
            heading: 'success',
            text: '{{ session('status') }}',
            showHideTransition: 'slide',
            icon: 'success',
            loaderBg: '#2dce89',
            bgColor : '#2dce89',
            textColor : '#eee', 
            position: 'top-right'
            })
        @endif
</script>
</body>
</html>
