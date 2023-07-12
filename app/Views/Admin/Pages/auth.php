<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>

    <link rel="stylesheet" href="<?=base_url()?>/public/assests/Admin/css/auth.css">

</head>

<body>
    <div class="cont">
        <div class="form signIn">
            <h2>Welcome</h2>
            <label>
                <span>Email</span>
                <input type="email" />
            </label>
            <label>
                <span>Password</span>
                <input type="password" />
            </label>
            <p class="forgotPass">Forgot password?</p>
            <button type="button" class="submit">Sign In</button>

        </div>
        <div class="sub-cont">
            <div class="msg">
                <div class="text msgSignUp">

                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="text msgSignIn">

                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="msgBtn">
                    <span class="msgSignUp">Sign Up</span>
                    <span class="msgSignIn">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
                <h2>Create your Account</h2>
                <label>
                    <span>Name</span>
                    <input type="text" />
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" />
                </label>
                <button type="button" class="submit">Sign Up</button>

            </div>
        </div>
    </div>

    <script>
        document.querySelector('.msgBtn').addEventListener('click', function () {
            
            document.querySelector('.cont').classList.toggle('statIsUp');
        });
    </script>

</body>