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
        <script>
            $(document).ready(function () {

                $('#forgotpass').validate({// initialize plugin
                    // your rules & options,
                    rules: {
                        forgotEmail: {
                            required: true,
                            email: true
                        }
                    },
                    messages: {
                        forgotEmail: {
                            required: "Please enter email address.",
                            email: 'Please enter valid email.'
                        }
                    },
                    errorPlacement: function (error, element)
                    {
                        error.insertAfter(element);
                    },
                    submitHandler: function (form) {
                        var email = $("#forgotEmail").val();
                        if (email != '') {
                            $("#loginporgress").show();
                            $("#forgotBtn").hide();
                            var emailAddress = email;

                            firebase.auth().sendPasswordResetEmail(emailAddress).then(function () {
                                $("#ForgotError").hide();
                                $("#Forgotsuccess").show().text("Email has been sent to your email address which will help you to recover your account.");
                            }).catch(function (error) {
                                $("#ForgotError").show().text(error.message);
                                $("#forgotBtn").show();
//                                $("#ForgotError").hide();
                                $("#Forgotsuccess").hide();
                            });

                        }
                        return false; // blocks regular submit since you have ajax
                    }
                });

            });
        </script>
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
                            <div class="panel-heading"><img src="assets/img/logologin.png" alt="logo" width="280" height="auto" class="logo-img"><span class="splash-description">Please enter your email.</span></div>
                            <div class="panel-body">
                                <form id="forgotpass" name="forgotpass">
                                    <p id="Forgotsuccess" style="border: 1px solid; padding: 8px; color: green; font-weight: 500;"></p>
                                    <p id="ForgotError" style="color:red;"></p>
                                    <div class="form-group">
                                        <input id="forgotEmail" name="forgotEmail" type="text" placeholder="Email" autocomplete="off" class="form-control">
                                    </div>
                                    <div class="col-xs-6 login-forgot-password" style="float:right;margin-bottom:10px;"><a href="login">Click here to Login</a></div>
                                    <div class="form-group login-submit">
                                        <button type="submit" class="btn btn-primary btn-xl" id="forgotBtn" >Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>

        <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
        <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript">
//            $(document).ready(function () {
//                initialize the javascript
//                App.init();
//            });


        </script>
        <script src="https://www.gstatic.com/firebasejs/4.3.0/firebase.js"></script>
        <script>
            // Initialize Firebase
            var config = {
                apiKey: "AIzaSyDTbIr6aF9uRfTFR75CdOhDVgQobXikJj8",
                authDomain: "abiding-ion-171613.firebaseapp.com",
                databaseURL: "https://abiding-ion-171613.firebaseio.com",
                projectId: "abiding-ion-171613",
                storageBucket: "abiding-ion-171613.appspot.com",
                messagingSenderId: "841121031687"
            };
            firebase.initializeApp(config);
        </script>

        <script src="js/forgotpassword.js"></script>
        <script src='https://code.jquery.com/jquery-3.1.0.js'></script>
        <script type="text/javascript" src="js/validationjs/jquery.validate.min.js"></script>

    </body>
</html>