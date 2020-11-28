<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Porsche03/css/creat_an_acc.css') }}">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"> -->
    <title>Creat an account</title>
</head>
<body>
    <div class="logo">
        <img src="{{ asset('Porsche03/img/login/porsche-svg.svg') }}">
    </div>
    <div class="form">
        <p class="fisrt">
            Create Porsche ID Account
        </p>
        <p class="second">
            Please enter your registration details in the following fields. Mandatory fields are marked with an asterisk (*).
            Salutation *
        </p>
        <div class="third">
            <label for="salutation">Salutation :</label>
            <select id="salutation">
                <option value="">Mrs</option>
                <option value="">Mr</option>
                <option value="">Ms</option>
            </select>
            <label for="salutation">Title</label>
            <select id="title">
                <option value="">No title</option>
                <option value="">Dr</option>
                <option value="">Prof</option>
            </select>
        </div>
        <div>
            <form method="POST" action="{{ route('admin.postregister') }}" >
                @csrf
                <label for="fname">email:</label>
                <input type="email" id="fname" name="email" class="block" required><br><br>
                @if (@$errors->has('email'))
                    <code style="color:red">{{ $errors->first('email') }}</code>
                @endif
                <label for="lname">Last name:</label>
                <input type="name" id="lname" name="name"class="block" required><br><br>
                @if (@$errors->has('name'))
                    <code style="color:red">{{ $errors->first('name') }}</code>
                @endif
                <label for="fname">Password:</label>
                <input type="password" id="password" name="password" class="block" required><br><br>
                @if (@$errors->has('password'))
                <code style="color:red">{{ $errors->first('password') }}</code>
                @endif
                <button type="submit" id="submit">submit</button>
                {{-- <div class="sign-btn text-center">
                    <button class="btn btn-theme">tạo tài khoản</button>
                </div> --}}
            </form>
        </div>
        
    </div>
    {{-- <script type="text/javascript" src="{{ asset('Porsche03/jquery-3.5.0.js') }}"></script> --}}
    {{-- <script>
        function validateEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        function validate() {
            const $result = $("#result");
            const email = $("#email").val();
            $result.text("");
          
            if (validateEmail(email)) {
              $result.text(email + " is valid :)");
              $result.css("color", "green");
            } else {
              $result.text(email + " is not valid :(");
              $result.css("color", "red");
            }
            return false;
        }

        function confirmPass() {
            var pass = document.getElementById("pass").value
            var confPass = document.getElementById("c_pass").value
            if(pass != confPass) {
                alert('Wrong confirm password !');
            }
        }
        $("#validate").on("click", validate);
    </script> --}}
</body>
</html>