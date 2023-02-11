function custom_login_background_color() {
    echo '<style type="text/css">
        body.login {
            background-color: #FFC0CB !important;
        }
    </style>';
}
add_action('login_head', 'custom_login_background_color');



function custom_login_logo() {
    echo '<style type="text/css">
        h1 a {
            background-image:url(https://logo.png) !important;
            background-size:contain !important;
            width:100% !important;
        }
    </style>';
}
add_action('login_head', 'custom_login_logo');



function custom_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_action( 'login_headerurl', 'custom_login_logo_url' );

function custom_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_action( 'login_headertitle', 'custom_login_logo_url_title' );


function custom_register_form_style() {
    echo '<style type="text/css">
        #registerform {
            background-color: #f2f2f2;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        #registerform label {
            font-size: 14px;
            font-weight: 600;
            color: #333;
        }
        #registerform input[type="text"], #registerform input[type="password"] {
            background-color: #fff;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 10px;
            font-size: 16px;
            width: 100%;
            margin-bottom: 20px;
        }
        #registerform input[type="submit"] {
            background-color: #173B4E;
            border: none;
            border-radius: 5px;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }
    </style>';
}
add_action('register_form', 'custom_register_form_style');


function custom_login_form_style() {
    echo '<style type="text/css">
        #loginform {
            background-color: #f2f2f2;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        #loginform label {
            font-size: 14px;
            font-weight: 600;
            color: #333;
        }
        #loginform input[type="text"], #loginform input[type="password"] {
            background-color: #fff;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 10px;
            font-size: 16px;
            width: 100%;
            margin-bottom: 20px;
        }
        #loginform input[type="submit"] {
            background-color: #173B4E;
            border: none;
            border-radius: 5px;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }
    </style>';
}
add_action('login_head', 'custom_login_form_style');




