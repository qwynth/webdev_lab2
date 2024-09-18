<!-- resources/views/about.blade.php -->
@extends('Components.Layout') <!-- This extends your Layout.blade.php -->
@section('title', 'About-My Website') <!-- This sets the title section -->

@section('content') <!-- This defines the content section -->
<!-- Projects Section -->
<section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">WHAT IS <span>INFORMATION TECHNOLOGY</span>?</h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>What is IT</h1>
            <br>
            <h3>
            <ul>
            <li>Information Technology (IT) refers to the use of computers, software, networks, and other electronic devices to manage, store, process, transmit, and secure data.
            <li>It encompasses a wide range of fields, including computer hardware, software engineering, network administration, cybersecurity, data management, and more.</h3>
            </ul>
          </div>
          <div class="project-img">
            <img src="./img/logo.JPG" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
          <h1>History of Information Technology</h1>
            <br>
            <h3>
              <ul>
                <li>The evolution of IT began with the invention of the first computers in the 1940s, such as the ENIAC.
                <li>The introduction of personal computers in the 1970s and the internet in the 1990s significantly accelerated the growth of IT.
                <li>Today, IT continues to evolve with advancements in cloud computing, artificial intelligence, and blockchain technology.</h3>          
              </ul>
              </div>
          <div class="project-img">
            <img src="./img/ganda.JPG" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
          <h1>Key Components of Information Technology</h1>
            <br>
            <h3>
              <ul>
                <li>Hardware: Physical devices like computers, servers, routers, and smartphones.
                <li>Software: Operating systems, applications, and tools that run on hardware.
                <li>Data: Information that is processed, stored, and managed, which is central to all IT activities.
                <li>Networks: Systems that connect devices and facilitate data communication (e.g., LAN, WAN, the internet).</h3>          
              </ul>          
            </div>
          <div class="project-img">
            <img src="./img/archery.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
          <h1>Importance of Information Technology</h1>
            <br>
            <h3>
              <ul>
                <li>IT drives innovation across various sectors, including healthcare, education, finance, entertainment, and manufacturing.
                <li>It enables efficient communication and collaboration globally, supporting businesses and individuals.   
                <li>IT improves data management and decision-making, automating routine tasks and enhancing productivity.</h3>          
              </ul>          
            </div>
          <div class="project-img">
            <img src="./img/shuvie.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
          <h1>IT in Everyday Life</h1>
            <br>
            <h3>
              <ul>
                <li>IT impacts our daily lives through various devices and applications, like smartphones, social media, online banking, e-commerce, and smart home technology.  
                <li>Remote work, online education, and digital healthcare services are now integral parts of life, made possible by advancements in IT.</h3>          
              </ul>          
          </div>
          <div class="project-img">
            <img src="./img/fam.jpg" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

<!-- Service Section -->
<section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">CAREERS IN<span> IT</span></h1>
        <p>IT offers diverse career opportunities, such as software development, network engineering, cybersecurity, data analytics, and IT project management.
          The demand for IT professionals continues to grow due to the increasing reliance on technology across all industries.</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <h2>Cyber Security</h2>
          <p> Refers to the practice of protecting systems, networks, and data from digital attacks, unauthorized access, damage, or theft. It encompasses a wide range of technologies, processes, and practices designed to safeguard information and maintain the integrity, confidentiality, and availability of data.</p>
        </div>
        <div class="service-item">
          <h2>Web Designing</h2>
          <p>The process of creating and designing the visual and functional aspects of websites. It involves a combination of creative and technical skills to develop a user-friendly, aesthetically pleasing, and effective online presence. Web design encompasses several aspects, including layout, color scheme, typography, graphics, and the overall user experience (UX).</p>
        </div>
        <div class="service-item">
          <h2>Data Analytics</h2>
          <p>The process of examining, cleaning, transforming, and modeling data to discover useful information, draw conclusions, and support decision-making. It involves applying various statistical, mathematical, and computational techniques to analyze data sets and extract meaningful insights. It is widely used across industries to enhance business operations and optimize processes.</p>
        </div>
        <div class="service-item">
          <h2>Computer Networks</h2>
          <p>Computer networks refer to interconnected systems of computers and other devices that communicate and share resources, such as data, files, printers, and internet connections. These networks allow devices to exchange information and collaborate, enabling various functionalities from simple file sharing to complex distributed computing.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Service Section -->


   <!-- comment Section -->
  <div class="comment-container">
        <div class="head"><h1>Let us know your feedback</h1></div>
        <div class="text"><p>We are happy to hear from you! </p></div>
        <div><span id="comment">0</span> Comments</div>
          <div class="comments"></div>
            <div class="commentbox">
            <img src="./img/user1.png" alt="img">
            <div class="content">
                <h2>Comment as: </h2>
                <input type="text" value="Anonymous" class="user">

                <div class="commentinput">
                    <input type="text" placeholder="Enter comment" class="usercomment">
                    <div class="buttons">
                        <button type="submit" disabled id="publish">Publish</button>
                        <div class="notify">
                            <input type="checkbox" class="notifyinput"> <span>Notify me</span>
                        </div>
                    </div>
                </div>
                <p class="policy">This is the <a href="">privacy policy</a> and <a href="">Terms of Service</a> apply.</p>
            </div>
        </div>
    </div>

<script>

const USERID = {
    name: null,
    identity: null,
    image: null,
    message: null,
    date: null
}

const userComment = document.querySelector(".usercomment");
const publishBtn = document.querySelector("#publish");
const comments = document.querySelector(".comments");
const userName = document.querySelector(".user");
const notify = document.querySelector(".notifyinput");

    userComment.addEventListener("input", e => {
        if(!userComment.value) {
            publishBtn.setAttribute("disabled", "disabled");
            publishBtn.classList.remove("abled")
        }else {
            publishBtn.removeAttribute("disabled");
            publishBtn.classList.add("abled")
        }
    })

    function addPost() {
        if(!userComment.value) return;
        USERID.name = userName.value;
        if(USERID.name === "Anonymous") {
            USERID.identity = false;
            USERID.image = "anonymous.png"
        }else {
            USERID.identity = true;
            USERID.image = "./img/user.png"
        }

        USERID.message = userComment.value;
        USERID.date = new Date().toLocaleString();
        let published = 
        `<div class="parents">
            <img src="${USERID.image}">
            <div>
                <h1>${USERID.name}</h1>
                <p>${USERID.message}</p>
                <div class="engagements"><img src="./img/like.png" id="like"><img src="./img/share.png" alt="img"></div>
                <span class="date">${USERID.date}</span>
            </div>    
        </div>`

        comments.innerHTML += published;
        userComment.value = "";
        publishBtn.classList.remove("abled")

        let commentsNum = document.querySelectorAll(".parents").length;
        document.getElementById("comment").textContent = commentsNum;

    }

    publishBtn.addEventListener("click", addPost);

</script>
 <!-- comment Section -->
  @endsection