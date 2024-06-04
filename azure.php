<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Microsoft Azure-GlobalEduTrain</title>
  <!-- Favicon -->
  <?php
  include('link.php');
  ?>
  <style>
    /* *{
    margin: 0;
    padding: 0;
    font-family: 'poppins' sans-serif;
    box-sizing: border-box;
} */

/* body{
    background: #e3edf7;

} */
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
    content: '';
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
    overflow: hidden;
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
      <h1 class="display-4 text-white animated slideInDown mb-2">Microsoft Azure Training Courses</h1>
      <p class="text-white">Whether you’re a beginner or an experienced IT professional, We have a course for you. Our Microsoft Azure Training courses cover a wide range of topics, including Azure fundamentals, Azure Infrastructure, Azure Data and Applications, Azure security, Azure DevOps and Automation and Azure machine learning.</p>
    </div>
  </div>
  <!-- breadcrumb start-->

  <!--================ Start Course Details Area =================-->
  <ul class="accordion">
        <li>
            <input type="radio" name="accordion" id="first" checked>
            <label for="first">Microsoft Azure Fundamentals (AZ-900T00)</label>
            <div class="content">
              <span>Microsoft Azure Fundamentals (AZ-900T00)</span>
              <span>Duration: 8 Hours</span>
                <p>The Microsoft Azure Fundamentals Certification is an entry-level certification offered by Microsoft. This certification is designed for professionals who are starting their journey in cloud services and wish to gain a foundational understanding of Microsoft Azure and its capabilities.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="second" >
            <label for="second">Microsoft Azure Administrator (AZ-104T00)</label>
            <div class="content">
              <span>Microsoft Azure Administrator (AZ-104T00)</span>
              <span>Duration: 32 Hours</span>
                <p>This course covers a range of essential topics, including securing identities, administering infrastructure, configuring virtual networking, connecting Azure and on-premises sites, managing network traffic, implementing storage solutions, creating and scaling virtual machines, deploying web apps and containers.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="third" >
            <label for="third">Developing Solutions for Microsoft Azure (AZ-204T00)</label>
            <div class="content">
              <span>Developing Solutions for Microsoft Azure (AZ-204T00)</span>
              <span>Duration: 40 Hours</span>
                <p>The Az 204 course focuses on training developers to create comprehensive solutions in Microsoft Azure. Throughout the course, students will learn various aspects of implementing Azure compute solutions, including the creation of Azure Functions and the management of web apps. Additionally, they will gain proficiency in developing solutions utilizing Azure storage, implementing authentication and authorization mechanisms, and enhancing security through the utilization of KeyVault and Managed Identities.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="fourth" >
            <label for="fourth">Designing Microsoft Azure Infrastructure Solutions (AZ-305T00)</label>
            <div class="content">
              <span>Designing Microsoft Azure Infrastructure Solutions (AZ-305T00)</span>
              <span>Duration: 32 Hours</span>
                <p>The AZ 305 course is exclusively designed for Azure Solution Architects, with a primary focus on providing them with the essential skills to design infrastructure solutions. The course encompasses a broad range of topics, including governance, compute, application architecture, storage, data integration, authentication, networks, business continuity, and migrations.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="five" >
            <label for="five">Designing and Implementing Microsoft DevOps Solutions (AZ-400T00)</label>
            <div class="content">
              <span>Designing and Implementing Microsoft DevOps Solutions (AZ-400T00)</span>
              <span>Duration: 32 Hours</span>
                <p>By the end of the Azure DevOps training, students will have a comprehensive understanding of DevOps principles and will possess the capability to apply their knowledge to real-world scenarios. This will empower them to foster collaboration, streamline workflows, and maximize efficiency throughout the entire software development lifecycle.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="six" >
            <label for="six">Microsoft Azure Security Technologies (AZ-500T00)</label>
            <div class="content">
              <span>Microsoft Azure Security Technologies (AZ-500T00)</span>
              <span>Duration: 32 Hours</span>
                <p>The comprehensive AZ 500 training program encompasses a wide spectrum of security facets, including identity & access security, platform protection, data & application security, and security operations. With this training, students emerge well-prepared to uphold security excellence within their organizations.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="seven" >
            <label for="seven">Administering Windows Server Hybrid Core (AZ-800T00)</label>
            <div class="content">
              <span>Administering Windows Server Hybrid Core (AZ-800T00)</span>
              <span>Duration: 32 Hours</span>
                <p>This course equips IT Professionals with knowledge and techniques to implement and manage on-premises and hybrid solutions, focusing on identity management, compute resources, networking, and storage within a Windows Server hybrid environment. Completion of Azure AZ-800 training enables IT Professionals to deploy, configure, and manage these solutions effectively, optimizing their Windows Server infrastructure using a blend of on-premises and cloud technologies.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="eight" >
            <label for="eight">Configuring Windows Server Hybrid Advanced Services (AZ-801T00)</label>
            <div class="content">
              <span>Configuring Windows Server Hybrid Advanced Services (AZ-801T00)</span>
              <span>Duration: 32 Hours</span>
                <p>Throughout the course, IT Professionals will learn how to leverage the hybrid capabilities of Azure, migrate virtual and physical server workloads to Azure IaaS, and implement effective security measures for Azure VMs running Windows Server. The course also covers important tasks related to high availability, troubleshooting, and disaster recovery. Additionally, the course emphasizes the use of various administrative tools and technologies, including Windows Admin Center, PowerShell, Azure Arc, Azure Automation Update Management, Microsoft Defender for Identity, Azure Security Center, Azure Migrate, and Azure Monitor.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="nine" >
            <label for="nine">Microsoft Cybersecurity Architect (SC-100T00 )</label>
            <div class="content">
              <span>Microsoft Cybersecurity Architect (SC-100T00 )</span>
              <span>Duration: 32 Hours</span>
                <p>This course focuses on equipping students with the expertise to design and evaluate cybersecurity strategies in key areas such as Zero Trust, Governance Risk Compliance (GRC), security operations (SecOps), and data and applications. SC 100 training empowers participants to learn how to architect and implement solutions using zero trust principles and define security requirements for cloud infrastructure across different service models (SaaS, PaaS, IaaS).</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="ten" >
            <label for="ten">Microsoft Security Operations Analyst (SC-200T00)</label>
            <div class="content">
              <span>Microsoft Security Operations Analyst (SC-200T00)</span>
              <span>Duration: 32 Hours</span>
                <p>The course focuses on enhancing participant’s skills in investigating, responding to, and hunting threats using Microsoft Sentinel, Microsoft Defender for Cloud, and Microsoft 365 Defender. By leveraging these technologies, participants will gain valuable insights into effectively mitigating cyber threats. The curriculum covers the configuration and utilization of Microsoft Sentinel, as well as the application of Kusto Query Language (KQL) for detection, analysis, and reporting purposes. Specifically tailored for Security Operations roles, the course aims to prepare learners for the SC 200: Microsoft Security Operations Analyst certification exam.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="eleven" >
            <label for="eleven">Microsoft Identity and Access Administrator (SC-300T00)</label>
            <div class="content">
              <span>Microsoft Identity and Access Administrator (SC-300T00)</span>
              <span>Duration: 32 Hours</span>
                <p>The Microsoft Identity and Access Administrator SC 300 training course focuses on the design, implementation, and operation of an organization’s identity and access management systems using Azure AD. Participants will gain expertise in managing critical tasks such as ensuring secure authentication and authorization access to enterprise applications. The course also covers the implementation of seamless user experiences and self-service management capabilities for all users. Additionally, participants will learn how to establish adaptive access and governance for identity and access management solutions, as well as how to troubleshoot, monitor, and report on the environment.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="twelve" >
            <label for="twelve">Automating Administration with PowerShell (AZ-040T00)</label>
            <div class="content">
              <span>Automating Administration with PowerShell (AZ-040T00)</span>
              <span>Duration: 40 Hours</span>
                <p>The AZ-040 PowerShell Training Course offers students a solid foundation in using PowerShell for the administration and automation of Windows servers. It provides essential knowledge and skills needed to identify and execute specific tasks by building custom commands. Additionally, participants will learn how to create scripts for advanced functions, including the automation of repetitive tasks and the generation of reports. The powershell training covers a wide range of Microsoft products, such as Windows Server, Windows Client, Microsoft Azure, and Microsoft 365, providing prerequisite skills applicable to these platforms.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="thirteen" >
            <label for="thirteen">Data Engineering on Microsoft Azure (DP-203T00)</label>
            <div class="content">
              <span>Data Engineering on Microsoft Azure (DP-203T00)</span>
              <span>Duration: 32 Hours</span>
                <p>Throughout the course, students will focus on executing common data engineering tasks. They will learn to orchestrate data transfer and transformation pipelines, ensuring efficient data movement. Working with data files in a data lake will be emphasized, covering aspects such as organization and accessibility.</p>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="fourteen" >
            <label for="fourteen">Designing and Implementing a Microsoft Azure AI Solution (AI-102T00)</label>
            <div class="content">
              <span>Designing and Implementing a Microsoft Azure AI Solution (AI-102T00)</span>
              <span>Duration: 32 Hours</span>
                <p>This course offers comprehensive instruction and guidance on leveraging these Azure services to incorporate artificial intelligence capabilities into applications.The course focuses on using either C# or Python as the programming language for development. Participants will gain practical knowledge and hands-on experience in utilizing Azure Cognitive Services to integrate natural language processing, computer vision, speech recognition, and other AI functionalities into their applications.</p>
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