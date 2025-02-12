<?php
require_once '../../config.php';
$control = new Controller();
$admin = new Admin();
$id=$_GET['id'];
$stmt=$admin->ret("SELECT * FROM `ld` where `gid`='$id'");
$rr=$stmt->fetch(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title></title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
      <?php include 'sidebar.php'
        ?>
        
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"></span>
                            <small class="text-muted"></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    
                    
                    
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="slogout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
         
              <!-- Basic Bootstrap Table -->
              
              <!-- Bootstrap Dark Table -->
              
              <!-- Bootstrap Table with Header - Light -->


              <!-- Bootstrap Table with Header - Footer -->
              
              <!-- Bootstrap Table with Header - Footer -->

             

              <!-- Bootstrap Table with Caption -->
              
              <!-- Bootstrap Table with Caption -->

         

              <!-- Striped Rows -->
              
              <!-- Bordered Table -->
              <!--/ Bordered Table -->

              <section style="background-color: #eee;">
  <div class="container py-5">
    


    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="../../controller/<?php echo $rr['cphoto']; ?>"alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php echo $rr['cname'];?></h5>
            
            
            <div class="d-flex justify-content-center mb-2">
              
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              
              
              
              
             
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
  
        <div class="card mb-4">
          <div class="card-body">

         

            <div class="row">
             
              <div class="col-sm-3">
                <p class="mb-0">Applicant Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="cname" ><?php echo $rr['cname'];?></p>
              </div>
            </div>
            <hr>


            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Applicant Occupation</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="email" ><?php echo $rr['occup'];?></p>
              </div>
            </div>
            <hr>
           
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Income source</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="cphone" ><?php echo $rr['income'];?></p>
              </div>
            </div>
            <hr>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Age</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="add" ><?php echo $rr['age'];?></p>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Applicant Qualification</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="adhar" ><?php echo $rr['quli'];?></p>
              </div>
            </div>
            <hr>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Issue No</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" ><?php echo $rr['isno'];?></p>
              </div>
            </div>
            <hr>


            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Issue Date</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="acno" ><?php echo $rr['isdate'];?></p>
              </div>
            </div>
            <hr>


            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Surity1 Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="acno" ><?php echo $rr['s1ad'];?></p>
              </div>
            </div>
            <hr>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Surity1 Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="acno" ><?php echo $rr['s1phone'];?></p>
              </div>
            </div>
            <hr>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Surity2 Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="acno" ><?php echo $rr['s2ad'];?></p>
              </div>
            </div>
            <hr>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Surity2 Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="acno" ><?php echo $rr['s2phone'];?></p>
              </div>
            </div>
            <hr>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Applicant Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="acno" ><?php echo $rr['aphone'];?></p>
              </div>
            </div>
            <hr>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Loan Purpose</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="acno" ><?php echo $rr['purpose'];?></p>
              </div>
            </div>
            <hr>


            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Applicant Father</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="acno" ><?php echo $rr['afather'];?></p>
              </div>
            </div>
            <hr>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Permanent Adress</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="acno" ><?php echo $rr['address'];?></p>
              </div>
            </div>
            <hr>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mortage Information</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="acno" ><?php echo $rr['minfo'];?></p>
              </div>
            </div>
            <hr>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mortage File</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="acno" ><?php echo $rr['mfile'];?></p>
              </div>
            </div>
            <hr>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Accomadation Period</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="acno" ><?php echo $rr['aperoid'];?></p>
              </div>
            </div>
            <hr>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Loan Amount</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="acno" ><?php echo $rr['amt'];?></p>
              </div>
            </div>
            <hr>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Percentage</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="acno" ><?php echo $rr['percent'];?></p>
              </div>
            </div>
            <hr>


            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Month</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="acno" ><?php echo $rr['month'];?></p>
              </div>
            </div>
            <hr>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Total</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="acno" ><?php echo $rr['total'];?></p>
              </div>
            </div>
            <hr>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" name="acno" ><?php echo $rr['date'];?></p>
              </div>
            </div>
            <hr>

            




            
               <div class="col-sm-9">
                
             

                           
                           
                            

                </form>
<!-- <button  name="submit" class="btn btn-danger d-grid w-100">Not Eligible </button> -->





</div>
            </div>   

            

            


                  </div>
        </div>
        
               
                
                
                
                
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

              <!-- Borderless Table -->
             
              <!-- Hoverable Table rows -->
              
              <!-- Small table -->

              
              <!-- Contextual Classes -->

              

              <!-- Table within card -->
             
              <!--/ Responsive Table -->
            
            <!-- / Content -->

            <!-- Footer -->
            
            <!-- / Footer -->

            
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
