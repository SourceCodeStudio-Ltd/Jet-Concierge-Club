<?php
/////////////////////////////////////////////////////////////
// Login Functions
/////////////////////////////////////////////////////////////
function scs_login_logo() {
  $img = '/wp-content/themes/jetconcierge/assets/img/jet-con-logo.png';
  if(!$img){ ?>
    <style type="text/css">
      body.login div#login h1 a {
        display:none;
      }
    </style>
  <?php
  }?>
  <style type="text/css">
    body.login{
      background-color:black;
      display:flex;
      justify-content: center;
      align-items: center;
      flex-direction: column-reverse;
    }
    body.login div#login {
      width:100%;
      padding:0;
      display:flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
    body.login div#login h1 {
      display:flex;
      width:100%;
      text-align: center;
    }
    body.login div#login h1 a {
      background-image: url(<?php echo $img; ?>);
      background-position: center;
      margin-bottom:0px;
      padding:24px;
      width:150px;
      height:150px;
      background-size:50%;
      border-radius:4px;
      border:0;
      border-radius:0;
    }
    body.login div#login form#loginform {
      background-color:#fff;
      border:0!important;
      max-width:320px;
      box-shadow: none;
      margin-top:0!important;
    }
    body.login .loginform{
      margin-top:0!important;
    }
    body.login div#login form#loginform label {
      color:black;
    }
    body.login div#login form#loginform input {
      color:black;
      border-radius:0;
    }
    body.login div#login form#loginform p.submit input#wp-submit{
      background-color:#333;
      border:2px solid white;
      color:#000;
      text-shadow: none;
      border-radius: 4px;
      box-shadow: none;
      text-transform: uppercase;
      color:white;
      border-radius:0;
    }
    body.login div#login form#loginform p.submit input#wp-submit:hover{
      background-color:black;
      color:#fff;
    }
    body.login div#login a {
      color:white;
    }
    body.login div#login a:hover {
      text-decoration: underline;
      color:white;
    }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'scs_login_logo' );


function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
