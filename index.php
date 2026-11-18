          <?php
          include "backend_files/dbconnection.php";
        
          include "backend_files/coments_insertion.php";
          ?>


          <!DOCTYPE html>
          <html lang="en">

          <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Costa tech solution center</title>
          <link rel="stylesheet" href="index.css">
          <link rel="icon" href="image/NT.jpg">
        
          
          </head>

          <body>

          <nav class="nav-container">
          <h2>Costa Tech</h2>


          <nav class="navClass" id="navClass1">

          <nav class="close" id="close1">&times;</nav>
          <a href="#first-container"><span class="link_icon"><i class="fa-regular fa-house"></i></span> Home</a>
          <a href="#second-container"><span class="link_icon"></span> About</a>
          <a href="#service-background"><span class="link_icon"></span> Services</a>
          <a href="#form-container"><span class="link_icon"></span> Contact</a>
          <a href="#project-container"><span class="link_icon"></span> Project</a>

         <button id="themetoggle"
          class="toggle-btn"
          aria-label="Toggle dark mode">
            <span class="sun">&#9728;</span>
          <span class="moon">&#9789;</span>
         </button>

          </nav>

          <nav class="humbuger" id="humbuger1">&#9776;</nav>
          </nav>



          <main>





          <!--Hero section-->
          <div class="first-container" id="first-container">

          <div class="wel-con">
          <h1 class="welcome">welcome to costa tech <br> solution center</h1>
          <p class="welcome-para">At <b>Costa Tech</b>, we offer solutions to all technology related challenges</p>

          </div>
          <a href="#form-container" class="now" id="mgs">Contact now!</a>
          <P id="message" style="color: #c4c4c4c4; padding-top: 10px;"></P>
          </div>


          <!-- About-->

          <div class="second-container" id="second-container">
          <h1 class="about">About</h1>
          <p class="pname">
          IT Education student at <abbr title="University of Skills Training and Entreprenuerial Development">USTED</abbr>, Ghana, with hands-on experience building responsive
          websites and web applications. I combine technical skill with design thinking to deliver clean,
          practical digital solutions for real-world needs.
          </p>


          <div class="t-table">

          <p><em>Skills</em></p>
          <table border="1">



          <thead>
          <tr>
          <th>Frontend</th>
          <th>Backend</th>
          <th>Design & Tools</th>
          </tr>
          </thead>

          <tbody>
          <tr>
          <td>CSS</td>
          <td>MYSQL</td>
          <td>Photoshop</td>
          </tr>
          <tr>
          <td>HTML</td>
          <td>PHP</td>
          <td>Graphic Design</td>
          </tr>

          <tr>
          <td>Javascript</td>
          <td>Git</td>
          <td>Responsive UI</td>
          </tr>

          </tbody>

          </table>
          </div>
          </div>

          <!--services-->


         <div class="service-background"  id="service-background">
<h1 class="topic">Services</h1>

          <div class="service-container">
          
         
          <div class="graphicdesign">
          
          <p class="headingSer">Graphic Design</p>
          <img src="image/GD.jpg" class="serviceImage" alt="graphic design" loading="lazy">
          <p  class="baseSer">
          We create a clean, professional designs that strenghtens your brand and identity.
          </p>

          </div>




          <div class="webdevlopment">
          <p  class="headingSer">Web Developer</p>

          <img src="image/NT.jpg"  class="serviceImage"   alt=" web development" loading="lazy">
          <p  class="baseSer">
          We build modern,responsive website and applications that function effectively accross all devices.
          </p>
          </div>





          <div class="softwareinstallation">
          <p  class="headingSer">Software Installation</p>

          <img src="image/SI.jpg"  class="serviceImage" alt="software installation" loading="lazy">
          <p  class="baseSer">
          We install and configure software correctly to ensure smooth and efficient performance.
          </p>
          </div>



          <div class="networking">
          <p  class="headingSer">Networking Admin</p>

          <img src="image/NT.jpg" class="serviceImage"   alt=" imge" loading="lazy">
          <p  class="baseSer">
          We design and manage secure, reliable networks that support your business operation.
          </p>
          </div>

          </div>

          </div>



          <!--Contact secion-->

          <div class="form-container" id="form-container">
          <h1>Get In Touch </h1>
          <div class="grid-container">

          <div class="address">
          <h3>Seventh Day Adventist Church</h3>
          <p>Box 147, Bechem</p>
          <p>Ahafo Region-Ghana</p>



          <!--google map location iframe-->

          <iframe

          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15837
          .330256393127!2d-2.0383072667771303!3d7.087392386648633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
          1!3m3!1m2!1s0xfdae27ff644210b%3A0xbb23869e9e399044!2sBechem!5e0!3m2!1sen!2sgh!4v1780010210644!5m2!1sen!2sgh"
          max-width="100%" height="250" style="border:0; border-radius: 35px; padding-top: 25px;" allowfullscreen=""
          loading="lazy" referrerpolicy="no-referrer-when-downgrade">

          </iframe>


          <!-- message us -->
          <a href="#feedback" class="sendF">Message us</a>


          </div>


          <!-- form details -->
          <div class="form-form1" id="details">
            
          
          <p id="handlesubmissionMessage"></p>

          <form action="index.php" class="form-form2" id="handlesubmission" >
          <label for="Name">Name</label>
          <input type="text" placeholder="Name" id="Name" name="name" autocomplete="name">

          <label for="Fcontact">Contact</label>
          <input type="tel" placeholder="+233 247078406" maxlength="14" 
          id="Fcontact" name="fcontact" autocomplete ="fcontact">

          <label for="Mail">Email</label>
          <input type="email" placeholder="agyeid11@gmail.com" id="Mail" name="mail" autocomplete="mail">



          <label for="Region">Region</label>

          <select name="region" id="Region">
          <option value="" selected spellcheck="true">Select your region</option>
          <option value="Ahafo Region">Ahafo Region</option>
          <option value="Ashanti Region">Ashanti Region</option>
          <option value="Bono Region">Bono Region</option>
          <option value="Bono East Region">Bono East Region</option>
          <option value="Western North Region">Western North Region</option>
          <option value="Western Region">Western Region</option>
          <option value="Greater Accra">Greater Accra</option>
          <option value="Central Region">Central Region</option>
          <option value="North East Region">North East Region</option>
          <option value="Northern Region">Northern Region</option>
          <option value="Savannah Region">Savannah Region</option>
          <option value="Upper West Region">Upper West Region</option>
          <option value="Upper East Rgion">Upper East Rgion</option>
          <option value="Oti Region">Oti Region</option>
          <option value="Eastern Region">Eastern Region</option>
          <option value=" Volta Region">Volta Region</option>
          </select>


          <button type="submit">Send</button>
          </form>

          </div>
          

          <div class="reportLink">
          <a href="report.php">Check Report</a>
          </div>
          </div>


          <!--proseject section-->


           <div class="project--background"  id="project-container">

           <h4 class="topic">Projects</h4>

          <div class="project-container">
            
          <div class="Web-development">
             <img src="./image/file_00000000124081f4883f1ef4f2c95852.png" class="projectM" width="100%" height="300" alt="web Devlopment">
             <a href="https://agyeidacosta.github.io/my-portfolio" target="_blank" class="checklink"> Click the link to vist the site</a>

          </div>

           <div class="software-installation">

           <img src="./image/file_00000000ce9481f4a67fa26961be4b91.png" class="projectM"  alt="software installation">
           
           <a href="#" class="checklink">Check out gallery</a>


          </div>


           <div class="network">
             <img src="./image/copilot_image_1791756671353.jpeg" class="projectM" alt="network">
             <a href="#"  class="checklink">Check out gallery</a>


          </div>


           <div class="graphic-design">
             <img src="./image/GD.jpg" class="projectM"  alt="Graphics Design">
             <a href="graphic.php" class="checklink">Check out gallery</a>

          </div>
          
          </div>

          </div>



          <!--Message us-->

          <div class="feedback" id="feedback">
           
            
          <p class="feeP">Kindly leave your message here</p>

          <form class="feedback1"  action="index.php"  id="feedbackSubmission">
          <label for="Feedback">Message</label>
          <textarea name="feedback" id="feedMe" rows="6" cols="40" placeholder="Hi there, kindly message us....."
          maxlength="300"></textarea>
          <button type="submit">Send</button>

          <p id="submissionAlert"></p>
          </form>

 




          </div>
          </main>

          <!-- footer -->
          <footer>
          <p>&copy; 2026. All rights reserved. Costa Tech Solutions Center</p>
          <p>(+233)247078406</p>
          </footer>


          <script src="home.js" defer></script>
          <script src="contact.js" defer></script>
          <script src="comments.js" defer></script>


          </body>

          </html>