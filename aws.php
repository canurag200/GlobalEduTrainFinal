<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AWS-GlobalEduTrain</title>
  <!-- Favicon -->
  <?php
  include('link.php');
  ?>
  <style>
       body {
  font-size: 100%;
}

h1 {
  font-size: 2.5em;
}

h2 {
  font-size: 1.875em;
}

p {
  font-size: 1.09em;
}

a {
    font-size: 0.875em;
}

    .wrapper {
      max-width: auto;
      width: 100%;
      max-height: max-content;
      margin-bottom: 4rem;
      margin-left: 1rem;
      padding-bottom: 4rem;
    }

    .tabs {
      position: relative;
      margin: 3rem 0;
      background: #ffff;
      height: 14.75rem;
    }

    .tabs::before,
    .tabs::after {
      content: "";
      display: table;
    }

    .tabs::after {
      clear: both;
    }

    .tab {
      float: left;
      margin-right: 4px;
    }

    .tab-switch {
      display: none;
      width: auto;
    }

    .tab-label {
      position: relative;
      display: block;
      line-height: 2.75em;
      height: 3em;
      padding: 0 1.618em;
      background: blue;
      border-right: 0.125rem solid blue;
      color: #fff;
      cursor: pointer;
      top: 0;
      transition: all 0.25s;
      width: fit-content;
    }

    .tab-label:hover {
      top: -0.25rem;
      transition: top 0.25s;
    }

    .tab-content {
      height: 18rem;
      width: 60rem;
      position: absolute;
      z-index: 6;
      top: 2.75em;
      left: 0;
      padding: 1.618rem;
      background: #fff;
      color: #2c3e50;
      /* border-bottom: 0.25rem solid #bdc3c7; */
      opacity: 0;
      transition: all 0.35s;
    }

    .tab-switch:checked+.tab-label {
      background: #fff;
      color: #2c3e50;
      border-bottom: 0;
      border-right: 0.125rem solid #fff;
      transition: all 0.35s;
      z-index: 1;
      top: -0.0625rem;
    }

    .tab-switch:checked+label+.tab-content {
      z-index: 2;
      opacity: 1;
      transition: all 0.35s;
    }
  </style>
</head>

<body onselectstart="return false">
  <!--::header part start::-->
  <?php
  include('header.php');
  ?>
  <!-- Header part end-->

  <!-- breadcrumb start-->
  <!-- Page Header Start -->
  <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
      <h1 class="display-4 text-white animated slideInDown mb-2">AWS Courses and Certifications</h1>
      <p class="text-white">AWS training courses provide individuals and organizations with comprehensive and in-depth knowledge of Amazon Web Services, empowering them to navigate and optimize the vast capabilities of the AWS cloud platform.</p>
    </div>
  </div>
  <!-- breadcrumb start-->

  <!--================ Start Course Details Area =================-->
  <div class="container-fluid ms-5 ps-5 mb-n5">
    <div class="row">
      <div class="col-lg-12">
        <h3>AWS Courses</h3>
        <p class="text-start text-dark">Elevate your cloud computing skills and empower your organization’s success.</p>
      </div>
    </div>
  </div>


  <div class="container-xl">
    <div class="row mb-5 pb-5">
      <div class="col-12">
      <div class="wrapper">
        <div class="tabs">
          <div class="tab">
            <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
            <label for="tab-1" class="tab-label">Fundamentals</label>
            <div class="tab-content">
              <table class="table table-striped table-hover">
                <tr>
                  <th>Sr No</th>
                  <th>Courses</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td><a href="#">AWS Cloud Practitioner Essentials</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><a href="#">AWS Technical Essentials</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><a href="#"> AWS Cloud Essentials for Business Leaders</a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><a href="#">AWS Cloud Essentials for Business Leaders – Financial Services</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="tab">
            <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
            <label for="tab-2" class="tab-label">Architect</label>
            <div class="tab-content">
              <table class="table table-striped table-hover">
                <tr>
                  <th>Sr No</th>
                  <th>Courses</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td><a href="#">Architecting on AWS</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><a href="#">Advanced Architecting on AWS</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><a href="#">Architecting on AWS – Accelerator</a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><a href="#">AWS Well-Architected Best Practices</a></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td><a href="#">Advanced AWS Well-Architected Best Practices</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="tab">
            <input type="radio" name="css-tabs" id="tab-3" class="tab-switch">
            <label for="tab-3" class="tab-label">Security</label>
            <div class="tab-content">
              <table class="table table-striped table-hover">
                <tr>
                  <th>Sr No</th>
                  <th>Courses</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td><a href="#">AWS Security Essentials</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><a href="#">AWS Security Best Practices</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><a href="#">AWS Security Governance at Scale</a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><a href="#">Security Engineering on AWS</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="tab">
            <input type="radio" name="css-tabs" id="tab-4" class="tab-switch">
            <label for="tab-4" class="tab-label">Database</label>
            <div class="tab-content">
              <table class="table table-striped table-hover">
                <tr>
                  <th>Sr No</th>
                  <th>Courses</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td><a href="#"> Planning and Designing Databases on AWS</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="tab">
            <input type="radio" name="css-tabs" id="tab-5" class="tab-switch">
            <label for="tab-5" class="tab-label">Developer</label>
            <div class="tab-content">
              <table class="table table-striped table-hover">
                <tr>
                  <th>Sr No</th>
                  <th>Courses</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td><a href="#">Developing on AWS</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><a href="#">Advanced Developing on AWS</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="tab">
            <input type="radio" name="css-tabs" id="tab-6" class="tab-switch">
            <label for="tab-6" class="tab-label">DevOps</label>
            <div class="tab-content">
              <table class="table table-striped table-hover">
                <tr>
                  <th>Sr No</th>
                  <th>Courses</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td><a href="#"> DevOps Engineering on AWS</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="tab">
            <input type="radio" name="css-tabs" id="tab-7" class="tab-switch">
            <label for="tab-7" class="tab-label">Data Analytics</label>
            <div class="tab-content">
              <table class="table table-striped table-hover">
                <tr>
                  <th>Sr No</th>
                  <th>Courses</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td><a href="#">Building Batch Data Analytics Solutions on AWS</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><a href="#">Building Data Analytics Solutions Using Amazon Redshift</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><a href="#">Building Data Lakes on AWS</a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><a href="#">Data Warehousing on AWS</a></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td><a href="#">Building Streaming Data Analytics Solutions on AWS</a></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td><a href="#">Authoring Visual Analytics Using Amazon QuickSight</a></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  




  <?php
  include('features.php');
  ?>

  <!--================ End Course Details Area =================-->

  <?php
  include('footer.php');
  ?>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <!-- custom js -->
  <script src="js/main2.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>