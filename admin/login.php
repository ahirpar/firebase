<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="assets/img/logo-fav.png">
        <title>Lacamp </title>
        <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
        <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
        <script type="text/javascript" src="js/validationjs/jquery.min.js"></script>
        <script type="text/javascript" src="js/validationjs/common2.js"></script>
        <style>
            @keyframes loader-animation {
                0% {
                    width: 0%;
                }
                49% {
                    width: 100%;
                }
                50% {
                    left: 100%;
                }
                100% {
                    left: 0%;
                    width: 100%
                }
            }
            .loginporgress {
                height: 5px;
                width: 100%;
                margin-top: -3px;
            }
            .loginporgress .bar {
                position: relative;
                height: 3px;
                background-color: #EEEEEE;
                animation-name: loader-animation;
                animation-duration: 4s;
                animation-iteration-count: infinite;
                animation-timing-function: ease-in-out;
            }
            * {
                outline:none;
            }
        </style>

        <script>
            $(document).ready(function () {

                $('#login-form').validate({// initialize plugin
                    // your rules & options,
                    rules: {
                        loginEmail: {
                            required: true,
                            email: true
                        },
                        loginPassword: {
                            required: true
                        }
                    },
                    messages: {
                        loginEmail: {
                            required: "Please enter email address.",
                            email: 'Please enter valid email.'
                        },
                        loginPassword: {
                            required: "Please enter password."
                        }
                    },
                    errorPlacement: function (error, element)
                    {
                        error.insertAfter(element);
                    },
                    submitHandler: function (form) {
                        var email = $("#loginEmail").val();
                        var password = $("#loginPassword").val();
                        var rememberMe = $("#remember").val()

                        if (email != '' && password != '' && (email == 'ashishh.versatiletechno@gmail.com')) {
                            $("#loginporgress").show();
                            $("#loginBtn").hide();
                            firebase.auth().signInWithEmailAndPassword(email, password).catch(function (error) {
                                $("#LoginError").show().text(error.message);
                                $("#loginporgress").hide();
                                $("#loginBtn").show();
                            });
                        } else {
                            $("#LoginError").show().text("Please enter valid email and password.");
                        }

                        return false; // blocks regular submit since you have ajax
                    }
                });

            });
        </script>
    </head>
    <body class="be-splash-screen">
        <div class="be-wrapper be-login">
            <div class="be-content">
                <div class="main-content container-fluid">
                    <div class="splash-container">

                        <div class="panel panel-default panel-border-color panel-border-color-primary">
                            <div class="loginporgress" id="loginporgress">
                                <div class="bar"></div>
                            </div>
                            <div class="panel-heading"><img src="assets/img/logologin.png" alt="logo" width="280" height="auto" class="logo-img"><span class="splash-description">Please enter your user information.</span></div>
                            <div class="panel-body">
                                <p id="LoginError" style="color:red;"></p>
                                <form id="login-form" name="login-form">
                                    <div class="form-group">
                                        <input id="loginEmail" name="loginEmail" type="email" placeholder="Email" autocomplete="off" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input id="loginPassword" name="loginPassword" type="password" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="form-group row login-tools">
                                        <div class="col-xs-6 login-remember">
                                            <div class="be-checkbox">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 login-forgot-password"><a href="forgotpassword">Forgot Password?</a></div>
                                    </div>
                                    <div class="form-group login-submit">
                                        <button style="submit" data-dismiss="modal" class="btn btn-primary btn-xl" id="loginBtn" >Sign me in</button>
                                        <!--<button class="btn btn-primary btn-xl" onclick="return loginBtn();" >Sign me in</button>-->
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--<div class="splash-footer"><span>Don't have an account? <a href="#">Request Access</a></span></div>-->
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>


        <script src="assets/js/main.js" type="text/javascript"></script>
        <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
          <!--<script type="text/javascript" src="js/validationjs/jquery.validate.min.js"></script>-->
        <script type="text/javascript">
//            $(document).ready(function () {
//                //initialize the javascript
//                App.init();
//            });

        </script>
        <script src="https://www.gstatic.com/firebasejs/4.8.2/firebase.js"></script>
        <script>
            // Initialize Firebase
            var config = {
                apiKey: "AIzaSyBFX7iPena-FTPLfYXHOpLnHz-6P8Wib5I",
                authDomain: "ashish-f10a4.firebaseapp.com",
                databaseURL: "https://ashish-f10a4.firebaseio.com",
                projectId: "ashish-f10a4",
                storageBucket: "ashish-f10a4.appspot.com",
                messagingSenderId: "445454105473"
            };
            firebase.initializeApp(config);
        </script>
        <script src="js/login.js"></script>
        <script src='https://code.jquery.com/jquery-3.1.0.js'></script>
        <script type="text/javascript" src="js/validationjs/jquery.validate.min.js"></script>

    </body>
</html>