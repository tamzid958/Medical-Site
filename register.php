<?php
include('includes/header.php');
require_once 'controller/loginController.php';
?>

<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">



      <div class="fadeIn first">
        <img src="/assets/images/black_logo.png" id="icon" alt="" />
      </div>


      <form action="" method="post">
        <input type="text2" id="register" class="fadeIn second register-field" name="name" placeholder="Full Name" required>
        <input type="email2" id="register" class="fadeIn second register-field" name="email" placeholder="email address" required>
        <input type="password" id="register" class="fadeIn third register-field" name="password" placeholder="password" required>
        <input type="submit" name="register_btn" class="fadeIn fourth" value="Register">

      </form>


      <div id="formFooter">
        <a class="underlineHover" href="login.php">Have an account?</a>
      </div>

    </div>
  </div>

  <style>
    /* STRUCTURE */

    .wrapper {
      display: flex;
      align-items: center;
      flex-direction: column;
      justify-content: center;
      width: 100%;
      min-height: 100%;
      padding: 20px;
      padding-top: 200px;
      margin-top: -120px;
      background-color: #16193B;
    }

    #formContent {

      border-radius: 10px 10px 10px 10px;
      background: #fff;
      padding: 30px;
      width: 90%;
      max-width: 450px;
      position: relative;
      padding: 0px;
      box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    #formFooter {
      background-color: #f6f6f6;
      border-top: 1px solid #dce8f1;
      padding: 25px;
      text-align: center;
      -webkit-border-radius: 0 0 10px 10px;
      border-radius: 0 0 10px 10px;
    }

    .register-field::placeholder {

      color: #00c4cc !important;

    }




    input[type=button],
    input[type=submit],
    input[type=reset] {
      background-color: #00c4cc;
      border: none;
      color: white;
      padding: 15px 80px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      text-transform: uppercase;
      font-size: 13px;
      box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
      transition: all 0.3s ease-in-out;
      border-radius: 5px 5px 5px 5px;
      margin: 5px 20px 40px 20px;

    }

    input[type=button]:hover,
    input[type=submit]:hover,
    input[type=reset]:hover {
      background-color: #00c4cc;
    }

    input[type=button]:active,
    input[type=submit]:active,
    input[type=reset]:active {
      transform: scale(0.95);
    }

    input[type=text2],
    input[type=password],
    input[type=email2] {
      background-color: #f6f6f6;
      border: none;
      color: #0d0d0d;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 5px;
      width: 85%;
      border: 2px solid #f6f6f6;
      transition: all 0.5s ease-in-out;
      border-radius: 5px 5px 5px 5px;
    }

    input[type=text2]:focus,
    input[type=password] :focus,
    input[type=email2]:focus {
      background-color: #fff;
      border-bottom: 2px solid #00c4cc;
    }


    .underlineHover {
      padding-bottom: 20px;
    }

    *:focus {
      outline: none;
    }

    #icon {
      width: 60%;
    }

    @media screen and (max-width: 992px) {
      .wrapper {
        margin-top: 0px;
        padding-top: 20px;
      }
    }
  </style>


</body>

<?php
include('includes/footer.php');
?>