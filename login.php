<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="miclogin.css" />
    <title>Principal Login</title>
    <link href="login.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body style="background-color: #343a40">
    <div class="box-xsn bg-6j8 border-a6h border-l6l style-4wA9R" id="style-4wA9R">
      <div>
        <div class="text-mso p-t-t35 p-b-b72">
          <h2 style="color: white"><b>MKCE</b></h2>
          <span><img style="border-radius: 100px" src="miclogo.jpg" alt="MKCE Logo" /></span>
        </div>
        <div class="py-4nb">
          <li class="nav-item-6hx">
            <a style="text-align: center" class="nav-link-r7e act-376" href="#principal"><b>Principal</b></a>
          </li>
        </div>
        <div class="content-wpd">
          <div class="tab-aqo fa-msf sho-mgo act-376">
            <form id="loginForm" class="m-t-fp5">
              <div class="row-591 p-b-k3o"> 
                <div class="col-blm">
                  <div class="input-ay6 mb-pf3">
                    <input type="text" class="form-control-fa9 form-control-64j" placeholder="Userid" name="userid" id="userid" />
                  </div>
                  <div class="input-ay6 mb-pf3">
                    <input type="password" class="form-control-fa9 form-control-64j" placeholder="Password" name="pass" id="pass" />
                  </div>
                </div>
              </div>
              <div class="row-591 border-a6h border-l6l">
                <div class="col-blm">
                  <div class="form-group-968">
                    <div class="p-t-tjg">
                      <button class="btn-7c3 success-bgn float-pwg" type="button" id="signinBtn">Login</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <footer class="footer-n75 text-mso" style="color: white">
        <b>All Rights Reserved by M.Kumarasamy College of Engineering, Karur.<br /><br /><span style="color: yellow">Version 2.0</span></b>
      </footer>
    </div>

    <script>
      $(document).ready(function() {
        $('#signinBtn').on('click', function(e) {
          e.preventDefault();
          var userid = $('#userid').val();
          var pass = $('#pass').val();

          $.ajax({
            url: 'backend.php',
            type: 'POST',
            data: { signin: true, userid: userid, pass: pass },
            success: function(response) {
              var data = JSON.parse(response);
              if (data.status == 'success') {
                Swal.fire({
                  title: ' Success!',
                  text: 'Login Successfully',
                  icon: 'success',
                  confirmButtonText: 'OK'
                }).then(function() {
                  window.location.href = 'success.php';
                });
              } else {
                Swal.fire({
                  title: 'Login Failed',
                  text: 'Invalid User ID or Password',
                  icon: 'error',
                  confirmButtonText: 'Retry'
                });
              }
            }
          });
        });
      });
    </script>
  </body>
</html>
