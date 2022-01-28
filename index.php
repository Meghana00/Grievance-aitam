<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favicon-->
    <!-- Page title -->
    <link rel="icon" href="./assets/images/aitamlogo.png" type="image/gif" sizes="16x16">
	<title>Home - Grievance Cell</title>
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Main CSS -->
	<link href="./assets/css/mainstyle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        .ball {
	position: absolute;
	border-radius: 100%;
	opacity: 0.5;
  }
        </style>
</head>
<<<<<<< HEAD
<body >
<script>
  const colors = ["#3CC157", "#2AA7FF", "#1B1B1B", "#FCBC0F", "#F85F36"];

const numBalls = 150;
const balls = [];

for (let i = 0; i < numBalls; i++) {
  let ball = document.createElement("div");
  ball.classList.add("ball");
  ball.style.background = colors[Math.floor(Math.random() * colors.length)];
  ball.style.left = `${Math.floor(Math.random() * 100)}vw`;
  ball.style.top = `${Math.floor(Math.random() * 100)}vh`;
  ball.style.transform = `scale(${Math.random()})`;
  ball.style.width = `${Math.random()}em`;
  ball.style.height = ball.style.width;
  
  balls.push(ball);
  document.body.append(ball);
}

// Keyframes
balls.forEach((el, i, ra) => {
  let to = {
    x: Math.random() * (i % 2 === 0 ? -11 : 11),
    y: Math.random() * 12
  };

  let anim = el.animate(
    [
      { transform: "translate(0, 0)" },
      { transform: `translate(${to.x}rem, ${to.y}rem)` }
    ],
    {
      duration: (Math.random() + 1) * 2000, // random duration
      direction: "alternate",
      fill: "both",
      iterations: Infinity,
      easing: "ease-in-out"
    }
  );
});
</script>
=======
<body style="background:url('./assets/images/wall.jpg'); background-repeat:no-repeat;background-position:center ;background-size:cover;">
>>>>>>> af90c6894ef1ff3171984336ac1b437609a61196
<main>
    
        <nav class="navbar shadow" style="background: linear-gradient(to right, #1758e8 0%, #e227a3 100%);" data-aos="slide-down" data-aos-duration="1000">
        <div class="container-fluid d-flex">
             <div class="d-flex"> <a class="navbar-brand d-flex" href="#"><img src="./assets/images/aitam_logo.jpg" class="mt-2" alt="" width="50" height="42" ><h1>AITAM</h1> </a></div>
    
           <div class="">
                 <span class="ms-3 fw-bold display-6 " style="color:#ffffff; font-size:2rem">GRIEVANCE REDRESSAL PORTAL</span>
            </div>
        </div>
     </nav> 
        
    </div>
       <div class="mx-auto d-flex ">
        <h2 class=" header fw-normal" style=color:#6600ff></h2>
       </div>
   
       
       
</main>

<!--hex grid layout------------>


<section id="lab" class="mt-5">
    <div class="">
        <article >
    
            <div class="lab_item" data-aos="slide-right" data-aos-duration="1200" >		
            <div class="hexagon hexagon2 " >
                <div class="hexagon-in1" >
                    <div class="hexagon-in2" style="background:#6600ff" >
                        <a class="hexLink" href="login.php?Logintype=ADMIN">
                            <img src="./assets/images/admin.png" class="img-fluid" alt="admin" width="110" height="100"  >
                            <p class="text-center mt-1">Admin </p>
                        </a>
                    </div>
                 </div>
             </div>
             </div>
              <div class="lab_item" data-aos="slide-right" data-aos-duration="1200">
              <div class="hexagon hexagon2">
                <div class="hexagon-in1">
                    <div class="hexagon-in2" style="background:#6600ff">
                        <a class="hexLink" href="login.php?Logintype=STUDENT">
                            <img src="./assets/images/graduate.png" class="img-fluid" alt="admin" width="110" height="100" >
                            <p class="text-center mt-1">students </p>
                        </a>
                    </div>
                 </div>
             </div>
             </div>
     <div class="lab_item" data-aos="slide-left" data-aos-duration="1200">
              <div class="hexagon hexagon2">
                <div class="hexagon-in1">
                    <div class="hexagon-in2" style="background: #6600ff">
                        <a class="hexLink" href="login.php?Logintype=PARENT">
                            <img src="./assets/images/family.png" class="img-fluid" alt="admin" width="110" height="100" >
                            <p class="text-center mt-1">Parents</p>
                        </a>
                    </div>
                 </div>
             </div>
             </div>
     <div class="lab_item" data-aos="slide-left" data-aos-duration="1200">
              <div class="hexagon hexagon2">
                <div class="hexagon-in1">
                    <div class="hexagon-in2" style="background: #6600ff" >
                        <a class="hexLink" href="login.php?Logintype=FACULTY">
                            <img src="./assets/images/classroom.png" class="img-fluid" alt="admin" width="110" height="100" >
                            <p class="text-center mt-1">Faculty </p>
                        </a>
                    </div>
                 </div>
             </div>
             </div>
                  <div class="lab_item" data-aos="slide-right" data-aos-duration="1200">        
            <div class="hexagon hexagon2">
                <div class="hexagon-in1">
                    <div class="hexagon-in2" style="background: #6600ff">
                        <a class="hexLink" href="login.php?Logintype=COMMITEE">
                            <img src="./assets/images/group.png" class="img-fluid" alt="admin" width="110" height="100" >
                            <p class="text-center"> Committee</p>
                        </a>
                    </div>
                 </div>
             </div>
             </div>
              <div class="lab_item" data-aos="slide-up" data-aos-duration="1200">
              <div class="hexagon hexagon2">
                <div class="hexagon-in1">
                    <div class="hexagon-in2" style="background: #6600ff">
                        <a class="hexLink" href="about.html">
                            <img src="./assets/images/help-desk.png" class="img-fluid" alt="admin" width="110" height="100" >
                            <p class="text-center mt-1">About</p>
                        </a>
                    </div>
                 </div>
             </div>
             </div>
              <div class="lab_item" data-aos="slide-left" data-aos-duration="1200">
              <div class="hexagon hexagon2">
                <div class="hexagon-in1">
                    <div class="hexagon-in2" style="background: #6600ff">
                        <a class="hexLink" href="contact.html">
                            <img src="./assets/images/agenda.png" class="img-fluid" alt="admin" width="110" height="100" >
                            <p class="text-center mt-1">Contact Us </p>
                        </a>
                    </div>
                 </div>
             </div>
             </div>
             
             
             
              
        </article>
    </div>
</section>
    <!--end hex grid layout------------>

    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-white fixed-bottom">

  <!-- Copyright -->
<div class="text-center py-1"  style="background: #6600ff" >
  © 2021 Copyright: Designed and Developed by Developers Club of 
  <a class=" fw-bold text-danger" href="http://aitamsac.in/">AITAM SAC</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->
    

    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  
</body>
</html>