<?php
<!DOCTYPE html>
<html lang="en">
<script>
    function includeHTML() {
    var z, i, elmnt, file, xhttp;
  /* Loop through a collection of all HTML elements: */
    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /* Make an HTTP request using the attribute value as the file name: */
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {elmnt.innerHTML = this.responseText;}
            if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /* Remove the attribute, and call this function once more: */
            elmnt.removeAttribute("w3-include-html");
            includeHTML();
        }
        }
        xhttp.open("GET", file, true);
        xhttp.send();
      /* Exit the function: */
        return;
    }
    }
}
</script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library PICT, Pune</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="aboutUs-2.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Belanosima&display=swap');
    </style>
</head>

<body>
<div w3-include-html="header.html"></div>
<script>includeHTML();</script>
    <main>
        <div class="section">
            <div class="container">
                <div class="content-section">
                <div class="title">
                        <h1 style="color: #ff6347;">About Us</h1>
                        <br><br>
                    </div>
                    <div class="content">
                        <h2 id="vis" style="color: #ff6347;">Vision</h2>
                        <br>
                        <p>Pune Institute of Computer Technology aspires to be the leader in Higher technical education
                            and research of International repute.</p>
                        <br>
                        <hr><br>
                        <h2 id="mis" style="color: #ff6347;">Mission</h2>
                        <br>
                        <p>To be the leading and the most sought after institute of education and research in emerging
                            engineering and technology disciplines that attract, retains and sustains gifted individuals
                            of significant potential.</p>
                        <br>
                        <hr>
                        <br>
                        <div class="over">
                            <h2 style="color: #ff6347;">Overview</h2><br>
                        </div>
                        <p>
                            Pune Institute of Computer Technology (popularly known as PICT), is an elite academic
                            Institute located in Pune, “The Oxford of the East.” Since our establishment in 1983, PICT
                            has been revolutionizing the education sector by nurturing skilled and industry-ready
                            engineers.
                        </p>
                        <br>
                        <p>PICT believes in value-based quality education in Information and Communication Technology
                            (ICT). PICT constantly endeavours to achieve higher levels of technical ingenuity through
                            our undergraduate (UG) programmes in Computer Engineering (CE), Electronics &
                            Telecommunication Engineering (E&TE), and Information Technology (IT). Our postgraduate (PG)
                            programmes in Computer Engineering, Data Science, Electronics & Communication (Wireless
                            Communication Technology), and Information Technology promote a high-quality research
                            environment in emerging technological domains. PICT is a Savitribai Phule Pune University
                            (SPPU) recognized Research Center in Computer Engineering and Electronics &
                            Telecommunication Engineering.</p>
                        <br>
                        <p>PICT is a UGC Approved Institute, ISO 9001:2015 Certified, and is NAAC Accredited (4th Cycle)
                            with A+ grade. All our UG programmes are NBA Accredited (CE and E&TE – 6 times, IT – 4
                            times). PICT is ranked 8th among private Engineering Institutions in India, 1st among all
                            private Engineering Institutions in Maharashtra, and 4th among all Engineering Institutions,
                            including IITs, NITs, and Govt. Colleges in Maharashtra (as per the EDU-RAND ranking- 2015).
                            PICT is placed in the ranking band: 201 to 250 as per the NIRF 2021 Ranking.</p>
                        <br>
                        <p>The students of PICT are always involved in creating and sustaining cutting-edge technology
                            to surpass the competition. Specialized laboratories/centers with industry support, like
                            Virtual FinTech Lab, SAS Language Lab, e-yantra IIT Bombay, National Instruments LabVIEW,
                            AICTE-funded Center for Wireless Communication, Alumni-funded 3D Printer Lab, etc. enable
                            PICT students to learn in an industry-focused environment.
                        </p>
                        <br>
                        <p>PICT has a well-established Research & Development (R&D) center. The faculty members have
                            undertaken numerous research projects funded by renowned organizations like Department of
                            Science & Technology (DST), All India Council for Technical Education (AICTE), Defence
                            Research and Development Organization (DRDO), Rajiv Gandhi Science and Technology Commission
                            (RGSTC), Govt. of Maharashtra, SPPU etc. In line with the ideals of Make in India,
                            AtmaNirbhar Bharat Abhiyan, etc., it is PICTs’ objective to promote the development of job
                            providers and not just job seekers. PICT’s Entrepreneurship Development Cell (EDC) and
                            Start-up & Innovation Cell (SIC) endeavour to generate opportunities for students aspiring
                            to start their own business or enterprise and empower young talented students to transform
                            their research, findings, and innovative ideas into successful products or services,
                            creating value in the real world.</p>
                        <br>
                        <p>A serene and charming enclave spread over 5 acres, PICT is home to 346 hostelers, 3000+ day
                            scholars, and 250+ staff members. A functioning canteen caters to the nutritional needs of
                            students, staff, parents, and visitors. A 24x7 medical facility and security personnel, make
                            the PICT campus an educational paradise. Facilities for sports like Basketball, Volleyball,
                            Table Tennis, Chess, Carrom, Gymkhana etc., help rejuvenate and restore the youthful rigor
                            among PICTians. PICT is recognized not only for its excellence in academics but also for its
                            exceptional performance in sports, performing arts, and cultural activities at the
                            intercollegiate, university, zonal, national, and international levels. PICT encourages
                            sport and artistry as a tool to engage the energies of the youth, thus providing a vital
                            avenue for their self-actualization and expression of their capabilities.
                        </p>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="hero-section">
            <div class="background-image">
            </div>
        </div> -->
    </main>

    <footer>
        <div class="foot-panel">
            <a href="#">
                <p>Back To Top</p>
            </a>
        </div>

        <div class="footer-panel">
            <div class="firstBlock">
                <ul>
                    <div class="info">Quick Links</div>
                    <a href="index.php">
                        <li>Home</li>
                    </a>
                    <a href="aboutUs-2.php">
                        <li>About Us</li>
                    </a>
                    <a href="e-resources.php">
                        <li>E-Resources</li>
                    </a>
                    <a href="services.php">
                        <li>Library Services</li>
                    </a>
                    <a href="books-section.php">
                        <li>Books Section</li>
                    </a>
                    <a href="login.php">
                        <li>Log In</li>
                    </a>
                </ul>
            </div>
            <div class="secondBlock">
                <ul>
                    <div class="info">Get to know Us</div>
                    <a href="aboutUs-2.php">
                        <li>About PICT College</li>
                    </a>
                    <a href="aboutUs.html">
                        <li>About PICT Library</li>
                    </a>
                    <a target="_blank"
                        href="https://www.google.com/maps/place/SCTR'S+Pune+Institute+of+Computer+Technology/@18.4575421,73.8482587,17z/data=!3m1!4b1!4m6!3m5!1s0x3bc2eac85230ba47:0x871eddd0a8a0a108!8m2!3d18.4575421!4d73.8508336!16zL20vMDc3MTl3?entry=ttu">
                        <li>Location</li>
                    </a>
                </ul>
            </div>
            <div class="thirdBlock">
                <ul>
                    <div class="info">Approved By </div>
                    <a target="_blank" href="https://pict.edu/naac/">
                        <li>NAAC</li>
                    </a>
                    <a target="_blank" href="https://pict.edu/NBA/">
                        <li>NBA</li>
                    </a>
                    <a target="_blank" href="https://pict.edu/pdf/footer/AICTE%20Approvals_08June23.pdf">
                        <li>AICT Approval</li>
                    </a>
                    <a target="_blank" href="https://pict.edu/pdf/footer/ara_fe_final%20approval%20letter_2021-22.pdf">
                        <li>ARA Approval</li>
                    </a>
                </ul>
            </div>
            <div class="fourthBlock">
                <ul>
                    <div class="info">Contact Us</div>

                    <li>Phone No :- <a target="_blank" href="">020 2437 1101</a></li>
                    
                    <li>Email id :- <a target="_blank" href="">registrar@pict.edu</a>
                    </li>
                    <li>Address :- 
                        <a target="_blank" href="https://www.google.com/maps/place/SCTR'S+Pune+Institute+of+Computer+Technology/@18.4575421,73.8508336,17z/data=!3m1!4b1!4m6!3m5!1s0x3bc2eac85230ba47:0x871eddd0a8a0a108!8m2!3d18.4575421!4d73.8508336!16zL20vMDc3MTl3?entry=ttu">
                            Survey No. 27, Near,<br> Trimurti Chowk, Bharati Vidyapeeth Campus,<br> Dhankawadi, Pune, Maharashtra 411043
                        </a>
                    </li>
                </ul>
            </div>

        </div>


        <div class="social-details">
            <div class="insta">
                <div class="img">
                    <a target="_blank" href="https://www.instagram.com/pict.pune/?hl=en"><i
                            class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="linkedIn">
                <div class="img">
                    <a target="_blank" href="https://www.linkedin.com/school/pune-institute-of-computer-technology/"><i
                            class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
            <div class="facebook">
                <div class="img">
                    <a target="_blank" href="https://www.facebook.com/PICTOfficial/"><i
                            class="fa-brands fa-facebook"></i></a>
                </div>
            </div>
            <div class="twitter">
                <div class="img">
                    <a target="_blank" href="https://twitter.com/punepict?lang=en"><i
                            class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <hr>

        <div class="copyright-info">
            <div class="copy">
                <i class="fa-regular fa-copyright"></i>
            </div>
            <p>Copyright 2022-23 PICT, Pune. All Rights Reserved <br>
                Developed by <a href="team.php"> WEB TEAM </a> of First Year PICT.</p>
        </div>


    </footer>


    <script src="script.js"></script>


</body>

</html>