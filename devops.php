<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>DevOps-GlobalEduTrain</title>
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
    /* *{
    margin: 0;
    padding: 0;
    font-family: 'poppins' sans-serif;
    box-sizing: border-box;
} */

/* body{
    background: #ffffff;

} */

.accordion{
    margin: 60px;
    width: auto;
}

.accordion li{
    list-style: none;
    width: 100%;
    margin: 20px;
    padding: 10px;
    border-radius: 8px;
    background: #e3edf7;
    box-shadow: 6px 6px 10px -1px rgba(0, 0, 0, 0.15), -6px -6px 10px -1px rgba(255, 255, 255, 0.7);
}

.accordion li label{
    display: flex;
    align-items: center;
    padding: 10px;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;

}

label::before{
    content: '+';
    margin-right: 10px;
    font-size: 24px;
    font-weight: 600;

}

input[type="radio"]{
    display: none;
}

.accordion .content{
    color: #555;
    padding: 0 10px;
    line-height: 26px;
    max-height: 0;
    overflow:hidden;
    transition: max-height 0.5s, padding 0.5s;
}

.accordion input[type="radio"]:checked + label + .content{
    max-height: 400px;
    padding: 10px 10px 20px;
}

.accordion input[type="radio"]:checked + label::before{
    content: '-';
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
      <h1 class="display-4 text-white animated slideInDown mb-2">DevOps Institute Courses and Certifications</h1>
      <p class="text-white">DevOps Institute courses are essential for mastering DevOps principles and practices. Their up-to-date curriculum caters to all levels of expertise, equipping individuals with the skills to streamline processes and excel in the fast-paced tech industry. Invest in your professional development with DevOps Institute and unlock valuable career opportunities.</p>
    </div>
  </div>
  <!-- breadcrumb start-->

  <!--================ Start Course Details Area =================-->
  <ul class="accordion">
        <li>
            <input type="radio" name="accordion" id="first" checked>
            <label for="first">Site Reliability Engineering (SRE) Foundation</label>
            <div class="content">
                <p>The SRE Foundation certification is a recognized credential that confirms an individual’s grasp of essential SRE principles and techniques. It encompasses operational responsibilities, error budgets, SLIs/SLOs, breaking down silos, and introducing gradual changes. Industries rely on this certification to validate the competency of technical professionals responsible for maintaining robust, scalable, and resilient software systems. It serves as a valuable asset for companies embracing the SRE model, promoting a shared understanding among team members and enhancing operational efficiency and system reliability. Take the step towards SRE excellence today.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="second" >
            <label for="second">DevOps Foundation®</label>
            <div class="content">
                <p>The DevOps Foundation® certification provides a holistic understanding of DevOps, emphasizing communication, collaboration, continuous integration, and delivery. Key topics cover DevOps objectives, business benefits, continuous integration, and automation, all geared towards enhancing productivity, accuracy, and deployment speed. Industries leverage this certification to standardize processes, minimize errors, and foster team collaboration.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="third" >
            <label for="third">Certified Agile Service Manager (CASM)®</label>
            <div class="content">
                <p>The Certified Agile Service Manager (CASM)® certification signifies a professional’s ability to apply Agile practices in service management, specifically in IT services. It emphasizes the adaptation of Agile and Scrum methodologies to enhance communication, teamwork, flexibility, and productivity. Industries rely on CASM® certified experts to align service management with Agile principles, resulting in faster service delivery and meeting evolving customer needs. The certification underscores leadership, collaboration, continuous improvement, and customer satisfaction as core competencies.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="fourth" >
            <label for="fourth">DevOps Leader (DOL)®</label>
            <div class="content">
            <p>The DevOps Leader (DOL)® certification attests to one’s proficiency in implementing DevOps principles and practices, with a primary emphasis on fostering cultural transformation, enhanced collaboration, continuous learning, and agility within organizations. Key areas covered include measurement, metrics, sharing, change management, and facilitating team interactions. Widely adopted by industries, this certification validates an individual’s capacity to negotiate, influence, and drive DevOps transformations. Certified DevOps leaders exhibit a change-oriented mindset, aligning the objectives of developers and operations, while comprehending infrastructure, security, and operations.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="five" >
            <label for="five">DevSecOps Foundation® (DSOF)</label>
            <div class="content">
            <p>The DevSecOps Foundation® (DSOF) certification validates expertise in merging security practices with DevOps, making security an integral part of the software development process. It’s widely adopted by industries to ensure the seamless integration of security, leading to faster and safer development cycles. DSOF emphasizes early integration of security controls, compliance, and risk mitigation in the system life cycle. This approach fosters a collaborative culture among development, security, and operations teams, proactively preventing security flaws and reducing the risk of breaches in software development.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="six" >
            <label for="six">DevSecOps Practitioner℠</label>
            <div class="content">
            <p>The DevSecOps Practitioner℠ certification confirms an individual’s ability to merge security practices with DevOps, emphasizing the integration of security throughout the software delivery life cycle. This certification centers on collaboration, automation, and the incorporation of security at every phase. Industries rely on it to ensure their DevSecOps experts can effectively detect and mitigate risks in DevOps settings, promoting shared security responsibility within teams. Ultimately, this leads to quicker, safer, and more efficient software production and deployment.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="seven" >
            <label for="seven">DevOps Engineering Foundation (DOEF)℠</label>
            <div class="content">
            <p>The DevOps Engineering Foundation (DOEF)℠ certification confirms a person’s competence in applying DevOps principles and practices in practical scenarios. It encompasses vital aspects such as collaboration, automation, and integration, crucial for enhancing software development, IT operations, and service delivery. Industries rely on DOEF certification to onboard experts skilled in implementing strategies that promote continuous integration and continuous delivery (CI/CD). This leads to swift, dependable, and frequent software releases, while minimizing defects and deployment failures. Consequently, it holds significant value in sectors including IT, software development, and operations management.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="eight" >
            <label for="eight">Continuous Testing Foundation (CTF)℠</label>
            <div class="content">
            <p>The Continuous Testing Foundation (CTF)℠ certification attests to an individual’s expertise in continuous testing methodologies and tools within the context of software development. Governed by the DevOps Institute standards, it holds value in industries that prioritize continuous delivery, including tech, manufacturing, finance, and healthcare. Organizations leverage certified professionals to enhance software quality and efficiency, reducing miscommunications, bugs, and development lag times.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="nine" >
            <label for="nine">Continuous Delivery Ecosystem Foundation (CDEF)℠</label>
            <div class="content">
            <p>The Continuous Delivery Ecosystem Foundation (CDEF)℠ certification is a recognized qualification that confirms an individual’s proficiency in the principles, practices, and methodologies of the continuous delivery ecosystem. It emphasizes collaboration on open-source projects and the advancement of interoperable DevOps and continuous delivery (CD) solutions. Industries leverage CDEF certification to assess employees’ skills, foster collaboration, and promote the adoption of CD best practices. This certification is sought after by software developers, project managers, and IT professionals involved in software development, deployment, and delivery. It holds particular value for organizations aiming to streamline processes and enhance productivity.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="ten" >
            <label for="ten">Value Stream Management Foundation</label>
            <div class="content">
            <p>The Value Stream Management Foundation certification focuses on comprehending and implementing Value Stream Management (VSM), a method for creating a holistic visual representation of business operations. VSM helps identify inefficiencies and waste in production processes, with the primary aim of optimizing workflow, enhancing decision-making, and fostering a lean organizational culture. Industries adopt this certification to ensure their teams can proficiently apply VSM principles, leading to improved productivity, quality, and customer satisfaction. It facilitates cross-functional collaboration, streamlines operations, and ultimately enhances business value.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="eleven" >
            <label for="eleven">Git and GitHub Actions</label>
            <div class="content">
                <p>The Git and GitHub Actions certification is a comprehensive credential that confirms an individual’s expertise in version control with Git and the automation, customization, and execution of software development workflows through GitHub Actions. This certification assesses knowledge in creating repositories, branching, merging, conflict resolution, and workflow triggers within the GitHub platform. Industries rely on this certification to ensure an individual’s proficiency in these essential open-source tools, which facilitate change tracking in source code, team collaboration, and automation of deployment tasks. It is widely adopted by software development industries to streamline processes, enhance productivity, and uphold best practices in source code management.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="twelve" >
            <label for="twelve">Site Reliability Engineering (SRE) Practitioner℠</label>
            <div class="content">
                <p>The Site Reliability Engineering (SRE) Practitioner℠ certification underscores proficiency in SRE principles, a methodology that leverages automation and software engineering to handle operational tasks typically managed manually. Industries rely on this certification to confirm an individual’s ability to implement SRE strategies and practices for enhanced system reliability. The certification encompasses SRE fundamentals, such as designing scalable software, reducing manual workloads, managing service level objectives, and error budgeting. SRE is employed by industries to continually enhance efficiency, reduce manual work, establish self-service platforms for rapid execution, and strike a balance between reliability and swift software releases.</p>
            </div>
        </li>
    </ul>



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