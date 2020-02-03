<!DOCTYPE html>

<html lang="en">
<head>
<title>JASTIF</title>
  @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

    <!-- Main content -->
    <div class="content">
        <div class="container container-overide">
          <div class="row">
            <div class="col-md-3">
          <div class="logo-small logo-margin-footeraddress">
    <img src="images/payment.jpg">
    </div>
        </div> 
            <div class="col-md-9 margin-needhelp-we">
        <div class="title-needhelp-we"><ul>who <span class="register_hitam">we are!</span></div></ul>
          <p class="text-justify">
            <ul>
               <h6>Payment :</h6>
								<div class="col-md-7"><p>BNI : 3150675145<br>Zain Fajri</p></div>
							</div>
            </ul>
          </p>
        </div>
          </div>
        </div>
    </section>
    </div>


  <!-- Main Footer -->
  @include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')
</body>
</html>
