<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>VmWare-GlobalEduTrain</title>
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
    }

    .tab-label:hover {
      top: -0.25rem;
      transition: top 0.25s;
    }

    .tab-content {
      height: 18rem;
      width: 60rem;
      position: absolute;
      z-index: 1;
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
      <h1 class="display-4 text-white animated slideInDown mb-2">VMWare Courses and Certifications</h1>
      <p class="text-white">VMware training courses provide individuals and IT professionals with the knowledge and skills necessary to become proficient in virtualization and cloud computing technologies. These courses cover a wide range of topics, including VMware vSphere, VMware NSX, VMware vSAN, and VMware Horizon.</p>
    </div>
  </div>
  <!-- breadcrumb start-->

  <!--================ Start Course Details Area =================-->
  <div class="container-xl ms-5 ps-5 mb-n5">
    <div class="row">
      <div class="col-lg-12">
        <h3>VMWare Courses</h3>
        <p class="text-start text-dark">Take your virtualization skills to new heights with VMware training</p>
      </div>
    </div>
  </div>


  <div class="container-xl">
    <div class="row mb-5 pb-5">
      <div class="wrapper">
        <div class="tabs">
          <div class="tab">
            <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
            <label for="tab-1" class="tab-label">Virtualization Essentials</label>
            <div class="tab-content">
              <table class="table table-striped table-hover">
                <tr>
                  <th>Sr No</th>
                  <th>Courses</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td><a href="#">VMware Virtualization Essentials</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="tab">
            <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
            <label for="tab-2" class="tab-label">vSphere</label>
            <div class="tab-content table-responsive">
              <table class="table table-striped table-hover">
                <tr>
                  <th>Sr No</th>
                  <th>Courses</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td><a href="#">VMware vSphere: Install, Configure, Manage </a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><a href="#">VMware vSphere: Design (v7)</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><a href="#">VMware vSphere: Fast Track </a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><a href="#">VMware vSphere: Fast Track (v7)</a></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td><a href="#">VMware vSphere: Optimize and Scale (v7)</a></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td><a href="#">VMware vSphere: Install, Configure, Manage (v7)</a></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td><a href="#">VMware vSphere: Optimize and Scale plus Troubleshooting Fast Track (v7)</a></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td><a href="#">VMware HCX: Management and Operations</a></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td><a href="#">VMware vSphere: Install, Configure, Manage (v6.7)</a></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td><a href="#">VMware vSphere: Optimize and Scale (v6.7)</a></td>
                </tr>
                <tr>
                  <td>11</td>
                  <td><a href="#">VMware vSphere: Fast Track (v6.7)</a></td>
                </tr>
                <tr>
                  <td>12</td>
                  <td><a href="#">VMware vSphere: Whats New (v5.5 to v6.7)</a></td>
                </tr>
                <tr>
                  <td>13</td>
                  <td><a href="#">VMWare vSphere Troubleshooting Workshop (v6.7)</a></td>
                </tr>
                <tr>
                  <td>14</td>
                  <td><a href="#">VMware vSphere: Optimize and Scale plus Troubleshooting Fast Track (v6.7)</a></td>
                </tr>
                <tr>
                  <td>15</td>
                  <td><a href="#">VMware Site Recovery Manager: Install, Configure, Manage (V8.2)</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="tab">
            <input type="radio" name="css-tabs" id="tab-3" class="tab-switch">
            <label for="tab-3" class="tab-label">NSX</label>
            <div class="tab-content table-responsive">
              <table class="table table-striped table-hover">
                <tr>
                  <th>Sr No</th>
                  <th>Courses</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td><a href="#">VMware NSX: Install Configure Manage (v6.4)</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><a href="#">VMware NSX: Troubleshooting and Operations (v6.4)</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><a href="#">VMware NSX: Install, Configure, Manage plus Troubleshooting and Operations Fast Track (v6.4)</a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><a href="#">VMware NSX-T Data Center: Install, Configure, Manage (v3.2)</a></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td><a href="#">VMware NSX: Install, Configure, and Manage(v4.0)</a></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td><a href="#">VMware NSX-T Data Center for Intrinsic Security(v3.2)</a></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td><a href="#">VMware NSX-T Data Center: Design(v.30)</a></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td><a href="#">VMware NSX Advanced Load Balancer: Install, Configure, Manage</a></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td><a href="#">VMware NSX Advanced Load Balancer: Troubleshooting and Operations</a></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td><a href="#">VMware NSX Advanced Load Balancer: Web Application Firewall Security</a></td>
                </tr>
                <tr>
                  <td>11</td>
                  <td><a href="#">VMware NSX-T Data Center: Troubleshooting and Operations (v3.2)</a></td>
                </tr>
                <tr>
                  <td>12</td>
                  <td><a href="#">VMware NSX-T Data Center: Install, Configure, Manage (v3.0)</a></td>
                </tr>
                <tr>
                  <td>13</td>
                  <td><a href="#">VMware NSX-T Data Center: Design (V3.2)</a></td>
                </tr>
                <tr>
                  <td>14</td>
                  <td><a href="#">VMware Cloud Director: Advanced Networking with NSX-T Data Center (v10.2)</a></td>
                </tr>
                <tr>
                  <td>15</td>
                  <td><a href="#">VMware NSX: Troubleshooting and Operations (V4.x)</a></td>
                </tr>
                <tr>
                  <td>16</td>
                  <td><a href="#">VMware NSX: Micro Segmentation (V6.3)</a></td>
                </tr>
                <tr>
                  <td>16</td>
                  <td><a href="#">Master Network Virtualization With VMware NSX: Install, Configure, And Manage [V4.0]</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="tab">
            <input type="radio" name="css-tabs" id="tab-4" class="tab-switch">
            <label for="tab-4" class="tab-label">vSAN</label>
            <div class="tab-content">
              <table class="table table-striped table-hover">
                <tr>
                  <th>Sr No</th>
                  <th>Courses</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td><a href="#">VMware vSAN: Fast Track [V7]</a></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td><a href="#">VMware vSAN: Plan And Deploy [V7]</a></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td><a href="#">VMware vSAN: Install, Configure, Manage [V8]</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="tab">
            <input type="radio" name="css-tabs" id="tab-5" class="tab-switch">
            <label for="tab-5" class="tab-label">Horizon</label>
            <div class="tab-content table-responsive">
              <table class="table table-striped table-hover">
                <tr>
                  <th>Sr No</th>
                  <th>Courses</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td><a href="#">VMware Horizon 8: Deploy And Manage Plus App Volumes Fast Track</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><a href="#">VMware Horizon 8: Virtual Desktop Troubleshooting</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><a href="#"></a>VMware Horizon 8: Infrastructure Administration</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><a href="#">VMware Horizon 8: Skills For Virtual Desktop Management</a></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td><a href="#">VMware Horizon 7: Install, Configure, Manage Plus App Volumes Fast Track [V7.10]</a></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td><a href="#">VMware Horizon 7:Install, Configure, Manage [V7.10]</a></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td><a href="#">VMware Horizon Cloud Service: Deploy And Manage On Microsoft Azure</a></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td><a href="#">VMware Horizon 8: Deploy And Manage</a></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td><a href="#">VMware Workspace ONE: Advanced Integration [V21.X]</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="tab">
            <input type="radio" name="css-tabs" id="tab-6" class="tab-switch">
            <label for="tab-6" class="tab-label">vRealize</label>
            <div class="tab-content table-responsive">
              <table class="table table-striped table-hover">
                <tr>
                  <th>Sr No</th>
                  <th>Courses</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td><a href="#">VMware vRealize Operations For Administrators</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><a href="#">VMware vRealize Network Insight: Install, Configure, Manage [V5.0]</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><a href="#">VMware vRealize Automation: Advanced Features And Troubleshooting [V8.X]</a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><a href="#">VMware vRealize Suite Lifecycle Manager: Install, Configure, Manage [V8.0]</a></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td><a href="#">VMware vRealize Automation SaltStack SecOps: Deploy And Manage [V8.6]</a></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td><a href="#">VMware vRealize Automation: Install, Configure, Manage [V8.3]</a></td>
                </tr>
              </table>
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