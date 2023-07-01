<?php
$con = new mysqli('localhost', 'root', '', 'users');
if (isset($_POST['rev'])) {
  $email = $_POST['email'];
  $rev =  $_POST['riv'];

  $sql = "INSERT INTO `review`(email,rev) VALUES
            ( '$email','$rev')";
  if ($con->query($sql) === TRUE) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <b>Well Done</b> &nbsp;&nbsp;&nbsp;  Submitted successfuly
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href='https://css.gg/instagram.css' rel='stylesheet'>
  <link href='https://css.gg/twitter.css' rel='stylesheet'>
  <link href='https://css.gg/facebook.css' rel='stylesheet'>
  <link href='https://css.gg/mail.css' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Cars</title>
  <style>
    .nav ul li:hover {
      color: #0d6efd;

      background-color: #0d6efd;
      border-radius: 5px;
      transition-duration: 1s;
    }

    header .nav-link:hover {
      color: white !important;
    }

    .album .container h3:hover {
      color: black !important;
      cursor: pointer !important;
      transition-duration: 1s;
    }

    .testimonial-card .card-up {
      height: 120px;
      overflow: hidden;
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem;
    }

    .testimonial-card .avatar {
      width: 110px;
      margin-top: -60px;
      overflow: hidden;
      border: 3px solid #fff;
      border-radius: 50%;
    }

    .map-container-2 {
      overflow: hidden;
      padding-bottom: 56.25%;
      position: relative;
      height: 0;
    }

    .map-container-2 iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }

    span:hover {
      color: #0d6efd;
    }

    .nav .col-md-2 button:hover {
      color: #fff;
    }

    .sig {
      text-decoration: none;
      color: #fff;
    }

    .sig:hover {
      color: #fff;
    }

    .log {
      text-decoration: none;
      color: #0d6efd;
    }

    .log:hover {
      color: white;
    }
  </style>
</head>

<body>
  <section class="nav">
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom w-100>
        <a href=" /" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <h1 style="color: #0d6efd;">Cars</h1>
        </a>

        <ul class="nav col-12 col-md-auto mb-3  justify-content-center mb-md-0 ">
          <li><a href="#cfs" class="nav-link px-2  link-dark">&nbsp;&nbsp;&nbsp; Cars for Sale&nbsp;&nbsp;</a></li>
          <li><a href="#rev" class="nav-link px-2 link-dark">&nbsp;Research & Reviews&nbsp;</a></li>
          <li><a href="#sr" class="nav-link px-2 link-dark">&nbsp;&nbsp;Service & Repair&nbsp;&nbsp;</a></li>
          <li><a href="#abot" class="nav-link px-2 link-dark">&nbsp;&nbsp;About&nbsp;&nbsp;</a></li>
        </ul>

        <div class="col-md-2 text-end">
          <button type="button" class="btn btn-outline-primary " onclick="location.href = 'login.php';">Login</button>
          <button type="button" class="btn btn-primary m-2" onclick="location.href = 'signup.php';">Sign-up</button>

        </div>
      </header>
    </div>
  </section>
  <section>
    <div class="container col-xxl-8 px-4 py-5 shadow-lg p-3 mb-5 bg-white rounded">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5 ">
        <div class="col-10 col-sm-8 col-lg-6">
          <svg class="animated" id="freepik_stories-vehicle-sale" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
            <style>
              svg#freepik_stories-vehicle-sale:not(.animated) .animable {
                opacity: 0;
              }

              svg#freepik_stories-vehicle-sale.animated #freepik--background-simple--inject-17 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
                animation-delay: 0s;
              }

              svg#freepik_stories-vehicle-sale.animated #freepik--Clouds--inject-17 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
                animation-delay: 0s;
              }

              svg#freepik_stories-vehicle-sale.animated #freepik--Pennants--inject-17 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
                animation-delay: 0s;
              }

              svg#freepik_stories-vehicle-sale.animated #freepik--Car--inject-17 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideRight;
                animation-delay: 0s;
              }

              svg#freepik_stories-vehicle-sale.animated #freepik--character-2--inject-17 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp;
                animation-delay: 0s;
              }

              svg#freepik_stories-vehicle-sale.animated #freepik--character-1--inject-17 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
                animation-delay: 0s;
              }

              svg#freepik_stories-vehicle-sale.animated #freepik--Floor--inject-17 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight;
                animation-delay: 0s;
              }

              @keyframes zoomIn {
                0% {
                  opacity: 0;
                  transform: scale(0.5);
                }

                100% {
                  opacity: 1;
                  transform: scale(1);
                }
              }

              @keyframes zoomOut {
                0% {
                  opacity: 0;
                  transform: scale(1.5);
                }

                100% {
                  opacity: 1;
                  transform: scale(1);
                }
              }

              @keyframes slideDown {
                0% {
                  opacity: 0;
                  transform: translateY(-30px);
                }

                100% {
                  opacity: 1;
                  transform: translateY(0);
                }
              }

              @keyframes slideRight {
                0% {
                  opacity: 0;
                  transform: translateX(30px);
                }

                100% {
                  opacity: 1;
                  transform: translateX(0);
                }
              }

              @keyframes slideUp {
                0% {
                  opacity: 0;
                  transform: translateY(30px);
                }

                100% {
                  opacity: 1;
                  transform: inherit;
                }
              }

              @keyframes lightSpeedRight {
                from {
                  transform: translate3d(50%, 0, 0) skewX(-20deg);
                  opacity: 0;
                }

                60% {
                  transform: skewX(10deg);
                  opacity: 1;
                }

                80% {
                  transform: skewX(-2deg);
                }

                to {
                  opacity: 1;
                  transform: translate3d(0, 0, 0);
                }
              }
            </style>
            <g id="freepik--background-simple--inject-17" class="animable" style="transform-origin: 246.976px 230.725px;">
              <path d="M329,34.58s-77.4-27.52-153.37,16.3S61.3,181.67,28.38,251.34s-14,140.55,44,172.86,97.43-15.32,178.79-17.64S354.44,415.87,422,369.91s79.71-154.51,26.46-234.82S329,34.58,329,34.58Z" style="fill: rgb(80, 108, 172); transform-origin: 246.976px 230.725px;" id="elkgmdurthpvb" class="animable"></path>
              <g id="elloi8f7zeps">
                <path d="M329,34.58s-77.4-27.52-153.37,16.3S61.3,181.67,28.38,251.34s-14,140.55,44,172.86,97.43-15.32,178.79-17.64S354.44,415.87,422,369.91s79.71-154.51,26.46-234.82S329,34.58,329,34.58Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 246.976px 230.725px;" class="animable"></path>
              </g>
            </g>
            <g id="freepik--Clouds--inject-17" class="animable" style="transform-origin: 249.68px 117.171px;">
              <path d="M149,102.1c-3.84-2.1-5.59-.35-7-2.1s3.85-6.29-6.64-10.84c0,0-.7-9.79-15-10.14S109.83,88.81,106,91.26s-4.9-1.4-8.75,1-2.09,7.34-5.24,8-7.34-3.15-11.19-.7S77,104.2,75.22,104.2s-5.25-1.4-7.35,0-4.54,3.14-4.54,3.14h88.46S152.84,104.2,149,102.1Z" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.686672px; transform-origin: 107.626px 93.1756px;" id="eljr2x436tw3" class="animable"></path>
              <path d="M96.66,100.66a11,11,0,0,1-1.56.74" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.686672px; transform-origin: 95.88px 101.03px;" id="eln1val2qreu" class="animable"></path>
              <path d="M115.59,84.33a6,6,0,0,0-3.42,4.27c-.64,3.2-2.13,5.33-3.84,5.54s-8.11-.42-9.17,1.92a9.33,9.33,0,0,0-.6,2.15" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.686672px; transform-origin: 107.075px 91.27px;" id="elbjgpe66cfqr" class="animable"></path>
              <path d="M409,151.25c-3-1.63-4.35-.27-5.43-1.63s3-4.89-5.17-8.42c0,0-.54-7.62-11.69-7.89s-8.15,7.61-11.14,9.52-3.8-1.09-6.79.81-1.64,5.71-4.08,6.25-5.71-2.44-8.7-.54-3,3.53-4.35,3.53-4.08-1.08-5.71,0-3.53,2.45-3.53,2.45h68.77S412,152.88,409,151.25Z" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.686672px; transform-origin: 376.846px 144.317px;" id="elvn5lckaxhre" class="animable"></path>
              <path d="M368.32,150.14a10.89,10.89,0,0,1-1.21.57" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.686672px; transform-origin: 367.715px 150.425px;" id="el8nd31g3iv4" class="animable"></path>
              <path d="M383,137.44a4.65,4.65,0,0,0-2.65,3.32c-.5,2.48-1.66,4.14-3,4.31s-6.3-.33-7.13,1.49a7,7,0,0,0-.46,1.67" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.686672px; transform-origin: 376.38px 142.835px;" id="el7uxw613o1c" class="animable"></path>
              <line x1="361.44" y1="149.54" x2="366.21" y2="149.54" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.686672px; transform-origin: 363.825px 149.54px;" id="elgkplj1ymlsa" class="animable"></line>
              <path d="M403.57,149.54h32.14s2.58-7.75-6.89-12.92-13.78-.86-17.22-5.17,9.47-15.5-16.37-26.69c0,0-1.72-24.12-37-25s-25.83,24.11-35.31,30.14-12.05-3.44-21.53,2.59-5.16,18.08-12.91,19.8-18.09-7.75-27.56-1.72-9.47,11.2-13.78,11.2-12.92-3.45-18.09,0-11.19,7.75-11.19,7.75H356" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.686672px; transform-origin: 326.945px 114.639px;" id="el26zwxm53pvr" class="animable"></path>
              <path d="M299.93,133.08a30.64,30.64,0,0,1-3.84,1.82" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.686672px; transform-origin: 298.01px 133.99px;" id="elcjvg56cm7n" class="animable"></path>
              <path d="M304.6,127a23.34,23.34,0,0,1,1.47-5.28c2.63-5.78,18.4-4.21,22.6-4.73s7.88-5.78,9.46-13.67a14.72,14.72,0,0,1,8.41-10.51" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.686672px; transform-origin: 325.57px 109.905px;" id="elgti13qhk31s" class="animable"></path>
            </g>
            <g id="freepik--Pennants--inject-17" class="animable" style="transform-origin: 250.815px 53.115px;">
              <path d="M25.38,50.53q10.14-8.72,19.9-17.7-12.95-3.9-25.78-8.29Q22.21,37.53,25.38,50.53Z" style="fill: rgb(80, 108, 172); transform-origin: 32.39px 37.535px;" id="elrrz3h4d8k4" class="animable">
              </path>
              <path d="M55.47,59.49Q65.21,50.34,74.55,41q-13.05-3.33-26-7.16Q51.77,46.65,55.47,59.49Z" style="fill: rgb(38, 50, 56); transform-origin: 61.55px 46.665px;" id="el7abec4to0kb" class="animable">
              </path>
              <path d="M84.74,66.9Q94.09,57.35,103,47.58,89.87,44.8,76.79,41.51,80.54,54.22,84.74,66.9Z" style="fill: rgb(80, 108, 172); transform-origin: 89.895px 54.205px;" id="el09oaqhgwkwgw" class="animable"></path>
              <path d="M115.31,73.29q8.91-9.93,17.42-20.08Q119.49,51,106.32,48.27,110.6,60.79,115.31,73.29Z" style="fill: rgb(38, 50, 56); transform-origin: 119.525px 60.78px;" id="elrh8g6im6by" class="animable">
              </path>
              <path d="M145,78.21q8.49-10.29,16.57-20.77Q148.23,55.76,135,53.59,139.76,65.94,145,78.21Z" style="fill: rgb(80, 108, 172); transform-origin: 148.285px 65.9px;" id="elequraq7zihw" class="animable"></path>
              <path d="M175.87,82q8-10.64,15.65-21.46-13.35-1.11-26.65-2.72Q170.15,70,175.87,82Z" style="fill: rgb(38, 50, 56); transform-origin: 178.195px 69.91px;" id="el517360qepi9" class="animable">
              </path>
              <path d="M205.76,84.47q7.59-11,14.76-22.07-13.36-.57-26.72-1.64Q199.56,72.67,205.76,84.47Z" style="fill: rgb(80, 108, 172); transform-origin: 207.16px 72.615px;" id="eliao8rbata2i" class="animable"></path>
              <path d="M236.81,85.72Q243.94,74.44,250.62,63q-13.38,0-26.75-.51Q230.13,74.19,236.81,85.72Z" style="fill: rgb(38, 50, 56); transform-origin: 237.245px 74.105px;" id="elhn3apc3s6rd" class="animable"></path>
              <path d="M266.78,85.68q6.66-11.55,12.88-23.22-13.37.54-26.75.57Q259.63,74.43,266.78,85.68Z" style="fill: rgb(80, 108, 172); transform-origin: 266.285px 74.07px;" id="el3doffwkvt42" class="animable"></path>
              <path d="M297.83,84.35Q304,72.53,309.73,60.6,296.38,61.71,283,62.31,290.21,73.41,297.83,84.35Z" style="fill: rgb(38, 50, 56); transform-origin: 296.365px 72.475px;" id="el6xcqr4no74w" class="animable"></path>
              <path d="M327.72,81.83q5.68-12.06,10.93-24.21Q325.34,59.27,312,60.41,319.66,71.21,327.72,81.83Z" style="fill: rgb(80, 108, 172); transform-origin: 325.325px 69.725px;" id="elwre0p53nek" class="animable"></path>
              <path d="M358.6,77.93q5.19-12.3,9.92-24.66Q355.28,55.49,342,57.2,350.1,67.66,358.6,77.93Z" style="fill: rgb(38, 50, 56); transform-origin: 355.26px 65.6px;" id="ella1q0k51sxq" class="animable">
              </path>
              <path d="M388.26,72.93q4.68-12.51,8.92-25.05-13.15,2.76-26.4,5Q379.32,63,388.26,72.93Z" style="fill: rgb(80, 108, 172); transform-origin: 383.98px 60.405px;" id="ele7opkfcf0jn" class="animable"></path>
              <path d="M418.81,66.45Q423,53.76,426.7,41q-13.06,3.33-26.22,6.14Q409.45,56.93,418.81,66.45Z" style="fill: rgb(38, 50, 56); transform-origin: 413.59px 53.725px;" id="elhzokna5mfwr" class="animable">
              </path>
              <path d="M448.07,59q3.66-12.86,6.88-25.72-13,3.86-26,7.22Q438.31,49.85,448.07,59Z" style="fill: rgb(80, 108, 172); transform-origin: 441.95px 46.14px;" id="elt8nuvfzba4i" class="animable"></path>
              <path d="M478.14,49.92q3.12-13,5.81-26-12.81,4.42-25.76,8.35Q468,41.23,478.14,49.92Z" style="fill: rgb(38, 50, 56); transform-origin: 471.07px 36.92px;" id="el3l5wqgzonai" class="animable">
              </path>
              <path d="M492.86,21.12a714.61,714.61,0,0,1-484.09,0L9,20.51a713.94,713.94,0,0,0,483.65,0C492.71,20.71,492.78,20.91,492.86,21.12Z" style="fill: rgb(38, 50, 56); transform-origin: 250.815px 41.9349px;" id="elw53sm3bi1fc" class="animable"></path>
            </g>
            <g id="freepik--Car--inject-17" class="animable" style="transform-origin: 313.379px 266.074px;">
              <path d="M159.39,399.67h38.41a0,0,0,0,1,0,0v47a14,14,0,0,1-14,14H173.39a14,14,0,0,1-14-14v-47A0,0,0,0,1,159.39,399.67Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 178.595px 430.17px;" id="elip6pb6kh2g" class="animable"></path>
              <path d="M413.2,399.67h38.41a0,0,0,0,1,0,0v47a14,14,0,0,1-14,14H427.2a14,14,0,0,1-14-14v-47A0,0,0,0,1,413.2,399.67Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 432.405px 430.17px;" id="elzjutivmqh1d" class="animable"></path>
              <path d="M466.17,273c-2.91-3.4-14.58-4.86-20.42-5.35s-7.29,4.86-7.29,9.73,1,12.15,0,14.1l-1,1.94L426.3,264.25l-25.15-50.32a13.53,13.53,0,0,0-6.36-6.27,21.58,21.58,0,0,0-4.17-1.43L301.56,204q-3.74-.09-7.48,0L215,206.23a5.69,5.69,0,0,0-2.61,2.59s-30.15,60.78-33.55,69.53-5.35,16-5.35,16a5.62,5.62,0,0,1-1.94-4.37c0-2.92,0-19-1-21.4s-18,0-25.28,4.38-2.92,12.64,3.4,16.05a39.3,39.3,0,0,0,14.1,3.89l6.33,9.23s-8.27,8.76-9.24,11.67-4.87,34-4.87,43.77,1.46,42.78,3.89,47.65S167.63,416,171,416.93s139.55,4.86,139.55,4.86l125-2.92s11.19,3.4,15.56-19,3.4-41.33,3.4-54-1-30.15-2.91-34-7.78-8.75-8.75-10.21,2.43-10.7,2.43-10.7,17.5-1.46,20.9-3.89S469.09,276.4,466.17,273Z" style="fill: rgb(80, 108, 172); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 305.014px 312.872px;" id="el1z8g0n7jr7" class="animable"></path>
              <path d="M213.34,270.45S199,283.58,251,289,359,303.88,371,309.25l11.94,5.38L408,302.69S396,289,363.78,283.58s-93.13-8.95-114-16.11S213.34,264.48,213.34,270.45Z" style="fill: rgb(255, 255, 255); transform-origin: 309.764px 289.161px;" id="el2phzhsi646x" class="animable"></path>
              <line x1="242.21" y1="366.48" x2="247.32" y2="382.95" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 244.765px 374.715px;" id="el24e6a4eec7k" class="animable"></line>
              <line x1="370.58" y1="366.48" x2="365.47" y2="382.95" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 368.025px 374.715px;" id="elfekfpsb3is" class="animable"></line>
              <path d="M180.93,281.92s2.52,13.64,15.8,20.1,44.51,24.77,44.51,24.77" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 211.085px 304.355px;" id="eljxb3ao86jfo" class="animable"></path>
              <path d="M430.43,281.92s-2.51,13.64-15.79,20.1-44.52,24.77-44.52,24.77" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 400.275px 304.355px;" id="elijxv84tjcuk" class="animable"></path>
              <line x1="189.91" y1="354.8" x2="213.24" y2="380.64" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 201.575px 367.72px;" id="el5851n69mt1m" class="animable"></line>
              <line x1="419.3" y1="355.51" x2="397.76" y2="382.8" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 408.53px 369.155px;" id="elmlz7tijtdlk" class="animable"></line>
              <line x1="375.51" y1="333.97" x2="385.95" y2="333.97" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 380.73px 333.97px;" id="eljsbj0xp8ha" class="animable"></line>
              <line x1="237.29" y1="333.97" x2="224.65" y2="333.97" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 230.97px 333.97px;" id="elc8kuawymkk" class="animable"></line>
              <path d="M156.17,385.49c.66,9.22,1.58,17.52,2.7,19.77,2.44,4.86,8.76,10.69,12.16,11.67s139.55,4.86,139.55,4.86l125-2.92s11.19,3.4,15.56-19c1-5,1.68-9.8,2.19-14.42Z" style="fill: rgb(117, 117, 117); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 304.75px 403.62px;" id="el46kpnkvg5ip" class="animable"></path>
              <path d="M256.26,400H244.44l-13.91,19.31c38,1.24,80,2.44,80,2.44l71.09-1.66L367.21,400H355.39l-49.57.87Z" style="fill: rgb(171, 171, 171); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 306.075px 410.875px;" id="el6iz75himlfd" class="animable"></path>
              <path d="M211.39,215.14s-22.86,60.29-22.86,62.24,138.1-.49,138.1-.49H421s2.92-1.94,1.46-8.75-24.79-51.54-24.79-51.54-86.07-3.41-111.84-3.41S211.39,215.14,211.39,215.14Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 305.699px 245.663px;" id="elk67sofoqy4b" class="animable"></path>
              <g id="elpo5p34gk7">
                <polygon points="203.86 238.93 241.43 277.3 215.45 277.3 196.66 258.91 203.86 238.93" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 219.045px 258.115px;" class="animable"></polygon>
              </g>
              <g id="elsk01vdxdcn">
                <polygon points="280.21 216.72 419.3 266.27 413.33 250.75 333.94 216.72 280.21 216.72" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 349.755px 241.495px;" class="animable"></polygon>
              </g>
              <polygon points="391.38 256.61 305.66 256.61 309 228.26 388.03 228.26 391.38 256.61" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 348.52px 242.435px;" id="el27ej7c9xwvy" class="animable"></polygon>
              <path d="M321.62,240.43l-.15,1.9h-4.14l-.74,8.31h-2L316.31,232h6.93l-.13,1.81h-5l-.59,6.62Z" style="fill: rgb(38, 50, 56); transform-origin: 318.915px 241.32px;" id="el2nvuiw3mpu3" class="animable"></path>
              <path d="M324.34,236.32c.19-2.74,1.63-4.49,4.3-4.49s3.94,1.75,3.81,4.49L332,246c-.14,2.93-1.63,4.88-4.47,4.88s-4.08-2-3.87-4.88Zm1.31,9.74c-.11,1.76.53,2.79,2,2.79s2.22-1,2.32-2.79l.51-9.84c.09-1.62-.51-2.59-1.94-2.59s-2.15,1-2.25,2.59Z" style="fill: rgb(38, 50, 56); transform-origin: 328.048px 241.355px;" id="el4cyx1rv1p8x" class="animable"></path>
              <path d="M338.39,232c2.74,0,3.87,1.42,3.82,4.09l0,1.48c0,2-.75,3.29-2.3,3.79,1.63.51,2.22,1.91,2.18,3.94l-.05,3a5.11,5.11,0,0,0,.32,2.35h-2.08a5.46,5.46,0,0,1-.28-2.37l.07-3c0-2.14-.88-2.81-2.55-2.81h-1.42l-.29,8.21h-2L334.5,232Zm-.77,8.54c1.59,0,2.55-.53,2.6-2.53l0-1.74c0-1.62-.52-2.46-2-2.46h-1.91l-.24,6.73Z" style="fill: rgb(38, 50, 56); transform-origin: 338.085px 241.34px;" id="ele1w0rbpjh1" class="animable">
              </path>
              <path d="M355.85,236.3v.49H354v-.6c0-1.62-.65-2.56-2.05-2.56s-2,.94-2,2.54c0,4.11,6,4.5,6.15,9.81.06,2.92-1.24,4.85-4.06,4.85s-4.13-1.93-4.12-4.85v-1.09h1.89v1.2c0,1.73.7,2.76,2.16,2.76s2.13-1,2.11-2.76c-.07-4.22-6.08-4.62-6.07-9.79,0-2.78,1.25-4.47,3.87-4.47S355.79,233.58,355.85,236.3Z" style="fill: rgb(38, 50, 56); transform-origin: 352.011px 241.33px;" id="elamf68mjms39" class="animable"></path>
              <path d="M359.92,246.72l-.58,3.92h-1.89L360.32,232h2.82l4.33,18.64h-2.05l-.89-3.92Zm.2-1.83h4.05l-2.46-10.65Z" style="fill: rgb(38, 50, 56); transform-origin: 362.46px 241.32px;" id="elpimnwqvhte" class="animable">
              </path>
              <path d="M369.08,250.64,368,232H370L371,248.65h5.23l.16,2Z" style="fill: rgb(38, 50, 56); transform-origin: 372.195px 241.325px;" id="el6x1jsn5udv" class="animable"></path>
              <path d="M383.44,240l.18,1.86h-4.39l.6,6.78h5.5l.2,2H378L376.42,232h7.18l.19,1.81h-5.27l.55,6.2Z" style="fill: rgb(38, 50, 56); transform-origin: 380.975px 241.32px;" id="elxwno5t90vq" class="animable">
              </path>
              <path d="M428.73,307s-18.47,4.86-27.22,10.69-12.65,9.24-15.56,17S383,355.17,383,355.17s47.65-6.8,55.92-11.67,8.75-15.55,9.23-19.44a20.43,20.43,0,0,0-.48-7.3Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 415.642px 331.085px;" id="el6innla8iubh" class="animable"></path>
              <line x1="397.65" y1="337.69" x2="397.65" y2="349.65" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 397.65px 343.67px;" id="elri0fjua716" class="animable"></line>
              <line x1="397.65" y1="332.65" x2="397.65" y2="335.02" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 397.65px 333.835px;" id="eluxkozi6lo3" class="animable"></line>
              <line x1="403.17" y1="330.52" x2="403.17" y2="347.52" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 403.17px 339.02px;" id="elfz1bfhe1gv8" class="animable"></line>
              <line x1="408.7" y1="342.26" x2="408.7" y2="345.38" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 408.7px 343.82px;" id="elopwazqie9ch" class="animable"></line>
              <line x1="408.7" y1="328.39" x2="408.7" y2="339.79" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 408.7px 334.09px;" id="elu5ugm9lgb8f" class="animable"></line>
              <line x1="414.22" y1="326.26" x2="414.22" y2="343.25" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 414.22px 334.755px;" id="elu6eydpxlyzc" class="animable"></line>
              <line x1="419.74" y1="338.83" x2="419.74" y2="341.12" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 419.74px 339.975px;" id="eldpdv9rs5rcc" class="animable"></line>
              <line x1="419.74" y1="324.13" x2="419.74" y2="336.16" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 419.74px 330.145px;" id="elmh3nx2dh32" class="animable"></line>
              <line x1="425.27" y1="322" x2="425.27" y2="338.99" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 425.27px 330.495px;" id="elbawk4bvxbar" class="animable"></line>
              <line x1="430.79" y1="331.97" x2="430.79" y2="336.86" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 430.79px 334.415px;" id="el4jpga68z0sx" class="animable"></line>
              <line x1="430.79" y1="319.86" x2="430.79" y2="328.73" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 430.79px 324.295px;" id="elvfvg11cj8w" class="animable"></line>
              <line x1="436.32" y1="317.73" x2="436.32" y2="334.73" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 436.32px 326.23px;" id="eli61nxqjuqx" class="animable"></line>
              <path d="M181.86,307s18.48,4.86,27.23,10.69,12.64,9.24,15.56,17,2.92,20.42,2.92,20.42-47.65-6.8-55.92-11.67-8.75-15.55-9.24-19.44a20.56,20.56,0,0,1,.49-7.3Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 194.926px 331.055px;" id="elwncu70fxqq" class="animable"></path>
              <line x1="211.65" y1="337.69" x2="211.65" y2="349.65" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 211.65px 343.67px;" id="el2xua0c0r3c7" class="animable"></line>
              <line x1="211.65" y1="332.65" x2="211.65" y2="335.02" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 211.65px 333.835px;" id="ely57bdeem7z" class="animable"></line>
              <line x1="206.13" y1="330.52" x2="206.13" y2="347.52" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 206.13px 339.02px;" id="elpi12z4nlf7l" class="animable"></line>
              <line x1="200.6" y1="342.26" x2="200.6" y2="345.38" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 200.6px 343.82px;" id="elh3fbmt58bj9" class="animable"></line>
              <line x1="200.6" y1="328.39" x2="200.6" y2="339.79" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 200.6px 334.09px;" id="elscfz7rthf4" class="animable"></line>
              <line x1="195.08" y1="326.26" x2="195.08" y2="343.25" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 195.08px 334.755px;" id="elmc7ysfg6jwf" class="animable"></line>
              <line x1="189.55" y1="338.83" x2="189.55" y2="341.12" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 189.55px 339.975px;" id="eltn0pzx8813" class="animable"></line>
              <line x1="189.55" y1="324.13" x2="189.55" y2="336.16" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 189.55px 330.145px;" id="elcv0379zjvf" class="animable"></line>
              <line x1="184.03" y1="322" x2="184.03" y2="338.99" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 184.03px 330.495px;" id="els98qdsxg9pf" class="animable"></line>
              <line x1="178.5" y1="331.97" x2="178.5" y2="336.86" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 178.5px 334.415px;" id="elec4omudzkjm" class="animable"></line>
              <line x1="178.5" y1="319.86" x2="178.5" y2="328.73" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 178.5px 324.295px;" id="ela3r3agx33o6" class="animable"></line>
              <line x1="172.98" y1="317.73" x2="172.98" y2="334.73" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 172.98px 326.23px;" id="el9umffv985lf" class="animable"></line>
              <path d="M242,364.13A205.32,205.32,0,0,1,237.29,334l12.93-5.74,52.88.7,59.48-.7L375.51,334a205.32,205.32,0,0,1-4.67,30.16Zm6.91,22.62c3.55,9,7.14,14.86,10,16.51,4.24,2.47,14.37,6.66,44.33,5.11,36.43,1.55,46.57-2.64,50.81-5.11,2.82-1.65,6.41-7.47,10-16.51Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 306.4px 368.483px;" id="elbhmyw0h64et" class="animable"></path>
              <path d="M375.51,334l-12.93-5.74-59.48.7-52.88-.7L237.29,334s.05.71.16,2l42.21,5.56,6.46,3.59h40.2l6.47-3.59L375.34,336C375.46,334.71,375.51,334,375.51,334Z" style="fill: rgb(117, 117, 117); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 306.4px 336.705px;" id="elfa4q8lgcsj4" class="animable"></path>
              <polygon points="362.58 328.23 303.1 328.93 250.22 328.23 245.37 330.38 271.4 330.38 277.86 332.9 336.38 332.9 341.04 330.74 368.24 330.74 362.58 328.23" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 306.805px 330.565px;" id="elr0r2p3iz7xs" class="animable"></polygon>
              <path d="M239.45,350.13l3.59-4.31h9.33A129.39,129.39,0,0,0,270,349.05c9.7,1.08,79.34,0,79.34,0l12.56-2.87H369l3.59,5.74-45.95,5-7.89,2.87H291.5l-6.82-3.95Z" style="fill: rgb(117, 117, 117); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 306.02px 352.805px;" id="el3ey39859yys" class="animable"></path>
              <path d="M364,357.67,351.09,362H261.35l-12.93-4.31-8-.89c.45,2.36,1,4.82,1.56,7.35H370.84c.51-2.21,1-4.37,1.39-6.46Z" style="fill: rgb(117, 117, 117); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 306.325px 360.475px;" id="elvzcm7h9viil" class="animable"></path>
              <path d="M216.11,409.36l3.59-6.46a29.1,29.1,0,0,0-15.79-11.85c-11.13-3.59-23.34-5.38-27.29-3.95s-5,11.85-4.3,14.72,4,5.39,4,5.39Z" style="fill: rgb(71, 71, 71); transform-origin: 195.909px 397.983px;" id="elfbf254jl3op" class="animable"></path>
              <path d="M203.91,391.05a102.46,102.46,0,0,0-17.43-4,6.22,6.22,0,0,0-3.39,3.64c-2.52,6.11-2.16,10.42,1.43,15.08a15.27,15.27,0,0,0,1.83,2l29.76,1.61,3.59-6.46A29.1,29.1,0,0,0,203.91,391.05Z" style="fill: rgb(38, 50, 56); transform-origin: 200.582px 398.215px;" id="el8o0t8bw5sz" class="animable"></path>
              <path d="M199.24,398.05a7.36,7.36,0,1,1-7.36-7.36A7.35,7.35,0,0,1,199.24,398.05Z" style="fill: rgb(171, 171, 171); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 191.88px 398.05px;" id="elcnex3kbzw0j" class="animable"></path>
              <path d="M395.76,409.36l-3.59-6.46A29.15,29.15,0,0,1,408,391.05c11.12-3.59,23.33-5.38,27.28-3.95s5,11.85,4.31,14.72-3.95,5.39-3.95,5.39Z" style="fill: rgb(71, 71, 71); transform-origin: 415.978px 397.983px;" id="elxy1v0vfrtje" class="animable"></path>
              <path d="M408,391.05a102,102,0,0,1,17.43-4,6.24,6.24,0,0,1,3.39,3.64c2.51,6.11,2.15,10.42-1.44,15.08a15.27,15.27,0,0,1-1.83,2l-29.76,1.61-3.59-6.46A29.15,29.15,0,0,1,408,391.05Z" style="fill: rgb(38, 50, 56); transform-origin: 411.319px 398.215px;" id="elrqqccz203k" class="animable"></path>
              <g id="elaws6mxjy09p">
                <circle cx="419.99" cy="398.05" r="7.36" style="fill: rgb(171, 171, 171); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 419.99px 398.05px; transform: rotate(-67.61deg);" class="animable"></circle>
              </g>
              <path d="M212.88,214.79h5.75s1.77-7.62,7.34-9.38h4.5s-3.59-4.26-9-3.54S212.88,206.89,212.88,214.79Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 221.675px 208.289px;" id="elupe21mgtfm" class="animable"></path>
              <path d="M225.82,202.32c-9.11,2.32-7.19,12.47-7.19,12.47s1.77-7.62,7.34-9.38h4.5A11.63,11.63,0,0,0,225.82,202.32Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 224.466px 208.555px;" id="el85t9erqve46" class="animable"></path>
              <path d="M397.05,214.79H391.3s-1.77-7.62-7.35-9.38h-4.5s3.59-4.26,9-3.54S397.05,206.89,397.05,214.79Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 388.25px 208.289px;" id="elx5kqoye0dla" class="animable"></path>
              <path d="M384.11,202.32c9.11,2.32,7.19,12.47,7.19,12.47s-1.77-7.62-7.35-9.38h-4.5A11.71,11.71,0,0,1,384.11,202.32Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 385.459px 208.555px;" id="elr3ngjukw6ym" class="animable"></path>
              <path d="M223,277.87,277,274l10.17-3.5s38.94-1.41,65.95,2.8h-68.4" style="fill: none; stroke: rgb(138, 138, 138); stroke-linecap: round; stroke-linejoin: round; transform-origin: 288.06px 274.072px;" id="el7mjwy0toivm" class="animable"></path>
              <polyline points="431.99 183.05 445.2 290.98 443.41 161.11" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 438.595px 226.045px;" id="elk6m0eieozw" class="animable"></polyline>
              <polyline points="440.38 112.64 445.2 290.98 459.64 148.63" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 450.01px 201.81px;" id="elhiymg5jwom9" class="animable"></polyline>
              <line x1="418.81" y1="131.92" x2="445.66" y2="289.07" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 432.235px 210.495px;" id="elo7tku9kjw5" class="animable"></line>
              <path d="M465.36,96c-.15,12-10.11,31.5-22.12,31.35s-21.8-19.86-21.37-31.87c.55-15.52,10-24.18,22-24S465.53,81.24,465.36,96Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 443.609px 99.4141px;" id="el5yx0596sexx" class="animable"></path>
              <g id="eljiyjjnaxdeb">
                <path d="M458.14,84.18c1.11,3.23-.32,6.64-3.18,7.63s-6.1-.83-7.2-4.06.31-6.64,3.18-7.63S457,81,458.14,84.18Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 452.951px 85.9671px;" class="animable"></path>
              </g>
              <path d="M431.52,110.94c3.94,11.34,1.19,33.05-10.15,37s-27.25-11.28-30.93-22.71c-4.76-14.79,1.21-26.15,12.55-30.1S426.65,97,431.52,110.94Z" style="fill: rgb(80, 108, 172); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 411.003px 121.248px;" id="el98cdz0k1bdk" class="animable"></path>
              <g id="elhxipps1cf2d">
                <path d="M418.71,101.51c2.33,2.49,2.43,6.18.22,8.26s-5.9,1.73-8.23-.75-2.43-6.19-.22-8.27S416.38,99,418.71,101.51Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 414.705px 105.257px;" class="animable"></path>
              </g>
              <path d="M485.1,130.41c-1.25,11.94-13,30.42-24.93,29.16s-19.86-21.81-18.32-33.72c2-15.4,12.23-23.15,24.17-21.89S486.65,115.69,485.1,130.41Z" style="fill: rgb(80, 108, 172); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 463.469px 131.729px;" id="elxiv8h458jrb" class="animable"></path>
              <g id="el3ua3mxl2z8d">
                <path d="M479.7,118.15c1.54,3,.61,6.62-2.09,8s-6.15,0-7.7-3-.61-6.62,2.09-8S478.15,115.11,479.7,118.15Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 474.803px 120.647px;" class="animable"></path>
              </g>
              <path d="M460.53,143.91c-1,12-12.44,30.65-24.41,29.61s-20.24-21.45-18.91-33.39c1.71-15.44,11.81-23.36,23.77-22.32S461.82,129.17,460.53,143.91Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 438.862px 145.64px;" id="elqne612ci4gr" class="animable"></path>
              <g id="el2egkboxpr5h">
                <path d="M452.71,130.07c1.11,3.22-.31,6.64-3.18,7.62s-6.09-.83-7.2-4.05.31-6.64,3.18-7.63S451.6,126.84,452.71,130.07Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 447.52px 131.848px;" class="animable"></path>
              </g>
              <path d="M444.33,152.78c4,11.33,1.25,33.05-10.09,37s-27.27-11.24-31-22.66c-4.79-14.79,1.16-26.16,12.5-30.12S439.44,138.81,444.33,152.78Z" style="fill: rgb(80, 108, 172); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 423.818px 163.099px;" id="elfsj8m5msr2m" class="animable"></path>
              <g id="el5a5fswphnd7">
                <path d="M434.2,144c2.7,2.09,3.39,5.73,1.53,8.12s-5.54,2.66-8.24.57S424.1,147,426,144.57,431.5,141.92,434.2,144Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 430.85px 148.34px;" class="animable">
                </path>
              </g>
            </g>
            <g id="freepik--character-2--inject-17" class="animable" style="transform-origin: 204.997px 291.349px;">
              <path d="M206.23,198.05s7,.93,10.53,7,13.86,28.64,13.86,28.64S241,226,244.85,224.48s10.35,2,11.83,7.39,0,8.69-3.88,12.94-22.55,20.52-27.35,21.62-8.51-.73-10.17-6.83-11.09-59.88-11.09-59.88S203.45,197.5,206.23,198.05Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 230.672px 232.347px;" id="eljd6tmhn1we" class="animable"></path>
              <path d="M138.72,304.53a18,18,0,0,0,.76,6c.92,2.29,2.75,6.11,2.75,8.09s.61,6.72-.3,7.33-1.38-1.68-1.53-2.6a17.86,17.86,0,0,0-.92-2.74s.77,6.1.77,8.24,3.51,2.14,2.44,4-2.9.76-5.19,0-5.5-2.6-5.5-8.4.16-18.62.16-18.62Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 137.446px 319.201px;" id="elidmayu3fgd" class="animable"></path>
              <path d="M131,297.81l-.36,6.14a4.52,4.52,0,0,0,3.87,4.74h0a4.52,4.52,0,0,0,5.1-3.71l1.08-6.26Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 135.661px 303.273px;" id="elnmfctstui8" class="animable"></path>
              <path d="M147.27,200.82s-6.59.41-9.92,8c-1.2,2.73-12.42,84.77-11.51,87.8s9.08,6.36,13,5.15,5.75-3.33,6.36-5.76,4.84-91.73,4.84-91.73A3,3,0,0,0,147.27,200.82Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 137.932px 251.422px;" id="el0tinru5hc2k9" class="animable"></path>
              <path d="M142.19,275.71s.3,8.78.61,13.62,14.53,132.61,13.62,138.06-3.63,6.66-3,10.29,2.42,11.51,2.42,11.51H174s3.94-4.84,3.33-8.48-3.63-10.59-3.63-13.62,2.72-113.23,2.72-113.23l4.54.6s8.18,118.08,7.57,120.5-2.42,4.54-2.42,5.75,4.24,9.08,4.24,9.08l20.59-3.33s.9-13.62.3-16.34-3.63-5.76-3.63-5.76l3.33-84.16,3.63-53.59-1.21-10.9Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 178.38px 362.75px;" id="elu5jeur9ekqn" class="animable"></path>
              <path d="M213.34,275.71H142.19s.08,2.21.19,5H213.9Z" style="fill: rgb(117, 117, 117); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 178.045px 278.21px;" id="ell90933l3c9d" class="animable"></path>
              <rect x="150.25" y="277.34" width="3.22" height="5.37" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 151.86px 280.025px;" id="elz07mtz9x7ai" class="animable"></rect>
              <rect x="200.22" y="277.34" width="3.22" height="5.37" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 201.83px 280.025px;" id="elj1q1x8st0s" class="animable"></rect>
              <rect x="173.11" y="275.95" width="10.12" height="4.5" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 178.17px 278.2px;" id="elyuve6smkb8n" class="animable"></rect>
              <path d="M168.34,191.77s-20.15,7.21-21.07,9-7,60.62-7.76,63.4-2.22,7.39-.93,9.61a12.84,12.84,0,0,0,3.51,3.69h71.34s4.25-2.21,5-5.91a27.89,27.89,0,0,0,0-8.32l-12.19-65.24-12.76-5L177,191.77Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 178.405px 234.62px;" id="elq7wl3ajznol" class="animable"></path>
              <line x1="152.09" y1="260.73" x2="192.6" y2="235.27" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 172.345px 248px;" id="elcqvpz764mlt" class="animable"></line>
              <line x1="144.91" y1="265.24" x2="147.4" y2="263.68" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 146.155px 264.46px;" id="elxl1yx526h3e" class="animable"></line>
              <line x1="161.26" y1="249.8" x2="190.33" y2="230.27" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 175.795px 240.035px;" id="elwj2tv3hd33f" class="animable"></line>
              <polygon points="171.48 199.9 177.02 208.4 170.93 262 178.13 274.2 187.19 260.89 179.61 208.59 186.08 200.64 178.32 192.32 171.48 199.9" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 179.06px 233.26px;" id="el6ffubwqhbz" class="animable"></polygon>
              <path d="M170,178.28l.93,11.64s4.25,6.84,7.39,6.84,10.9-6.65,10.9-6.65V177.35s-8.13,5.73-11.64,4.81A28.45,28.45,0,0,1,170,178.28Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 179.61px 187.055px;" id="elqov47rp8o9c" class="animable"></path>
              <path d="M177.58,182.16a28.45,28.45,0,0,1-7.58-3.88l.84,10.54c2.1,2.07,9.94,2,11.56.91s5-6.56,6.82-10.51v-1.87S181.09,183.08,177.58,182.16Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 179.61px 183.916px;" id="elnwglel412t" class="animable"></path>
              <polygon points="176.28 196.02 169.26 208.22 163.35 192.69 169.82 185.3 176.28 196.02" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 169.815px 196.76px;" id="eljfb5q3ag4mi" class="animable"></polygon>
              <polygon points="181.64 195.47 187.19 208.59 194.95 193.25 189.78 186.22 181.64 195.47" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 188.295px 197.405px;" id="el4ddv3nvhzun" class="animable"></polygon>
              <path d="M194.68,156.78s2.94-5,4.49-.35a9.07,9.07,0,0,1-3.45,10c-1.9,1-2.42-1.38-2.42-1.38Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 196.425px 160.563px;" id="elviluz8zd3lk" class="animable"></path>
              <path d="M163.77,157.3s-1.56-4.49-4-1.56,1.38,9,2.59,10.36,2.59.87,2.94-.17S163.77,157.3,163.77,157.3Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 162.158px 160.84px;" id="el8gzzdn5c9ai" class="animable"></path>
              <path d="M162.92,138s-1.75,6.42-1.46,8.75,2.92,20.13,3.79,24.51,6.13,9.92,7.3,12.55,10.21,2.62,12,1.46,6.13-8.47,7.59-12.26S195,155.77,195,152s3.21-9,2.92-12.83-7.88-8.76-11.67-10.22-5.54-.87-7.58-2.91-5-5.26-9.93-3.51,0,6.13-2.33,6.72-11.09-7.3-12.84.87S162.92,138,162.92,138Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 175.661px 154.021px;" id="el5uvafb4fpbl" class="animable"></path>
              <path d="M197.93,139.14c-.29-3.8-7.88-8.76-11.67-10.22s-5.54-.87-7.58-2.91-5-5.26-9.93-3.51,0,6.13-2.33,6.72-11.09-7.3-12.84.87,9.34,7.88,9.34,7.88-1.75,6.42-1.46,8.75c.14,1.1.79,5.61,1.53,10.54l.26.21s.86-1.21,0-5.35,1.38-3.46,1.38-5.36,1.38-6.73,3.28-7.42,5.35,2.59,8.29,1.55,6.91-4.84,10.71-3.11,1.72,9,2.42,10,2.93,1.55,2.93,5.35-.69,7.26.69,7.77a1.41,1.41,0,0,0,1.38-.33c.42-3.63.68-7,.68-8.62C195,148.18,198.22,142.93,197.93,139.14Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 175.671px 141.479px;" id="elee7yl7bzngo" class="animable"></path>
              <path d="M174.76,171.24s5,2.51,9.05-1.51" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 179.285px 170.872px;" id="elz1qu9so1w7" class="animable"></path>
              <path d="M172.75,150.56l1.9,4s-1.21,13.13-.7,13.47,8-1.38,8-2.93a3.57,3.57,0,0,0-.86-2.42" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 177.351px 159.317px;" id="elnxrqiksqedq" class="animable"></path>
              <path d="M171.35,146.08s-6.91,0-6.91.69.69,1,1.73.87,4.31-.18,5-.35S171.35,146.08,171.35,146.08Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 167.986px 146.875px;" id="elmmn2z37t7l" class="animable"></path>
              <path d="M185.7,145.18s-6.91,0-6.91.69.69,1,1.73.87,4.32-.18,5-.35S185.7,145.18,185.7,145.18Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 182.334px 145.974px;" id="elhsqv35qd15m" class="animable"></path>
              <path d="M183.28,156.26c0,1.05-.42,1.9-.95,1.9s-1-.85-1-1.9.43-1.9,1-1.9S183.28,155.21,183.28,156.26Z" style="fill: rgb(38, 50, 56); transform-origin: 182.305px 156.26px;" id="elteqo04emhdq" class="animable"></path>
              <path d="M171.19,156.26c0,1.05-.42,1.9-.95,1.9s-1-.85-1-1.9.43-1.9,1-1.9S171.19,155.21,171.19,156.26Z" style="fill: rgb(38, 50, 56); transform-origin: 170.215px 156.26px;" id="elkysn5h2ectj" class="animable"></path>
              <path d="M230.62,233.72s-9.05,7.58-11.27,12.39" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 224.985px 239.915px;" id="elbadtu7ntxou" class="animable"></path>
              <path d="M226.37,237.6s-6.28,3.15-9.8,7.21" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 221.47px 241.205px;" id="el7ot8m4tor05" class="animable"></path>
              <path d="M277.2,225.41s5.17-1.48,6.28-3.7.92-3.7-.37-2.59-2.77,2-3.33,2.59S277.2,225.41,277.2,225.41Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 280.704px 222.076px;" id="elnp6ivp5bmx" class="animable"></path>
              <path d="M251.14,221.34l-3.53,5.36a4.26,4.26,0,0,0,.4,5.23h0a4.29,4.29,0,0,0,6.31,0l7.35-7.87s14.79,2.22,15.53,1.3,3.14-2.59,3.69-4.44,1.3-4.07.37-3.51-2,3-2,3l-13.49-8.69s4.8-3,5.17-5.36-.55-3.51-1.48-2-2.21,2.58-5.17,3.69-6.66,2.22-7.95,4.44Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 264.299px 218.496px;" id="ely1bvl0w0ny" class="animable"></path>
              <path d="M254.32,232l4.07-4.36a8.21,8.21,0,0,1-7.38-6.09l-3.4,5.17a4.28,4.28,0,0,0,6.71,5.28Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 252.632px 227.475px;" id="el21kbea6ylmi" class="animable"></path>
              <path d="M258.53,221.15s4.25-4.43,7.39-4.06,8.13,6.28,8.13,6.28,6.1-6.47,6.47-4.43-5,6.47-5.91,6.65-14.05-1.48-14.05-1.48" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 269.534px 221.336px;" id="el60eahbb5a0p" class="animable"></path>
              <path d="M173.42,449.1s-8.9-7-11.06-7.42-5.12,2.43-6.07,3.64-1.21,2.57-1.62,2.84-4.58,4-6.2,5.52-1.75,5.53-1.21,6.21a3,3,0,0,0,1.75.81h26.43a25.09,25.09,0,0,0,.27-4.72,38.18,38.18,0,0,0-1.73-6.79" style="fill: rgb(117, 117, 117); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 161.351px 451.169px;" id="elqtlurxpguiq" class="animable"></path>
              <path d="M147,458.21a3.23,3.23,0,0,0,.28,1.68,3,3,0,0,0,1.75.81h26.43s.18-1.12.26-2.49Z" style="fill: rgb(117, 117, 117); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 161.352px 459.455px;" id="elhv7crumhohv" class="animable"></path>
              <path d="M190.56,449.1s11.45-7,13.61-7.42,5.12,2.43,6.07,3.64,1.62,3.91,2,4.18,5.93,2.7,7.55,4.18,1.76,5.53,1.22,6.21a3.06,3.06,0,0,1-1.76.81H188.54a25.09,25.09,0,0,1-.27-4.72,38.18,38.18,0,0,1,1.73-6.79Z" style="fill: rgb(117, 117, 117); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 204.773px 451.169px;" id="el6c4j8r4c8or" class="animable"></path>
              <path d="M188.54,460.7h30.73a3.06,3.06,0,0,0,1.76-.81,3.34,3.34,0,0,0,.28-1.68h-33C188.36,459.58,188.54,460.7,188.54,460.7Z" style="fill: rgb(117, 117, 117); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 204.817px 459.455px;" id="eloozjnmh5b2q" class="animable"></path>
            </g>
            <g id="freepik--character-1--inject-17" class="animable" style="transform-origin: 75.861px 296.124px;">
              <path d="M116.89,166c1.69-.82,2.63-4.07,2.13-7.76-.55-4.11-2.67-7.21-4.72-6.93-1.62.21-2.72,2.47-2.84,5.42Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 115.307px 158.646px;" id="elblkljg9symw" class="animable"></path>
              <path d="M73,143a7.55,7.55,0,0,0,.78-8.28c-2.33-4.92-20.18-4.66-26.65,4.66s.14,20.22,9,18.62C63,156.77,70.9,146.87,73,143Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 59.6px 144.853px;" id="elj0p5xu8po3" class="animable"></path>
              <path d="M47.1,139.37a15.86,15.86,0,0,0,5.74,11.44c5.82,4.87,10.37,3.93,10.37,3.93" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 55.155px 147.091px;" id="el6wc7s6sa0cn" class="animable"></path>
              <path d="M48.59,138.08s4.88,5.34,9.59,7.54a84.19,84.19,0,0,1,8,4.25" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 57.385px 143.975px;" id="elhzo3oaai64i" class="animable"></path>
              <path d="M49.69,136.5s6.76-1.73,12.74-.31a14.63,14.63,0,0,1,8.8,6.6" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 60.46px 139.21px;" id="el67hu60aawgl" class="animable"></path>
              <path d="M109.24,144.46s2.82,4.63,3.42,8,0,5.84,1,7.85,5,4.83,4.22,6.64-3.62,3-3.62,3-4.23,9.26-6.44,12.08-10.67,0-10.67,0l-.2,4.43-16.5-3s1.81-2.62-1.21-5.84-12.08-14.09-1.61-24.55S105.82,143.25,109.24,144.46Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 95.3486px 165.134px;" id="el1snn6nndmpy" class="animable"></path>
              <polyline points="97.16 182.1 90.34 180.85 96.96 186.53 97.16 182.1" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 93.75px 183.69px;" id="el4urzh8ot5dt" class="animable"></polyline>
              <path d="M109.85,145.79a26.43,26.43,0,0,0-4.8-6.42c-6-5.7-19.4-6.47-30.27.77s-18.11,27.17-11.9,34.41,20.18,2.59,20.18,2.59-2.59-10.35.78-11.39,6.47.26,7-2.06-.26-8.28,4.92-11.65S107.65,150.17,109.85,145.79Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 85.2201px 156.756px;" id="ell9mhohr0e8" class="animable"></path>
              <path d="M82.55,173s-4.4,3.46-13,.63-8.17-11.48-8.17-11.48" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 71.9632px 168.446px;" id="elanwoyutls3p" class="animable"></path>
              <path d="M63.06,156.63a10.28,10.28,0,0,0,6.92,9.9c7.38,2.83,11.16,1.1,11.16,1.1" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 72.0992px 162.392px;" id="el7dxlwjw0j0r" class="animable"></path>
              <path d="M64.94,152.07A15.73,15.73,0,0,0,75.48,162a38.82,38.82,0,0,0,6,1.42" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 73.21px 157.745px;" id="el5tsqxot8o7h" class="animable"></path>
              <path d="M66.67,148.92a81.68,81.68,0,0,0,13.21,6.76c6.92,2.68,13.21-1.41,13.21-1.41" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 79.88px 152.755px;" id="elawqw5hd6w1v" class="animable"></path>
              <path d="M70.13,144.84s1.26,2.51,14.15,1.1,19,.33,20.12,2.83" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 87.265px 146.805px;" id="elpcj7u84xfmj" class="animable"></path>
              <path d="M72.65,141.85a79.33,79.33,0,0,0,11.47-3.46c7.86-2.83,20.17-1.23,25.73,7.4" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 91.25px 141.449px;" id="el1tqxap2jy0w" class="animable"></path>
              <path d="M86.68,167.57s-1.81-7-6-7-2.84,8.54.26,11.9S85.91,174,85.91,174" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 82.3618px 167.534px;" id="el80rcl84umpb" class="animable"></path>
              <path d="M100.4,170.41s2.58,4.4,7,3.37" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 103.9px 172.173px;" id="eljw68704izz" class="animable"></path>
              <g id="elmns1v462r3">
                <circle cx="104.36" cy="159.37" r="7.5" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 104.36px 159.37px; transform: rotate(-81.01deg);" class="animable"></circle>
              </g>
              <line x1="97.81" y1="159.8" x2="84.61" y2="162.91" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 91.21px 161.355px;" id="elqxn72ljyvc" class="animable"></line>
              <line x1="111.17" y1="158.12" x2="114.27" y2="157.34" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 112.72px 157.73px;" id="elqaoxxqood1p" class="animable"></line>
              <polygon points="85.91 426.29 85.91 442.85 71.42 442.85 71.42 426.03 85.91 426.29" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 78.665px 434.44px;" id="el8odcg1tthze" class="animable"></polygon>
              <polygon points="98.84 428.1 98.58 438.45 106.35 441.55 111.26 438.45 111.26 426.55 98.84 428.1" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 104.92px 434.05px;" id="el0qtxx9a1cyr" class="animable"></polygon>
              <path d="M112.3,204.82s8.25,4.74,9.48,10.89,3.69,28.67,6.55,35.63,4.1,11.47,2.46,13.52a9.26,9.26,0,0,0-1.64,7c.41,1.64,4.1,2.87,2.46,6.15s-3.68,6.55-3.68,6.55v43.83c0,4.1-4.92,9-6.15,10.24s-3.28-3.27-3.28-6.55-.82-78.65-2-84.38-8.2-41.79-8.2-41.79S109.37,202.54,112.3,204.82Z" style="fill: rgb(80, 108, 172); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 120.164px 271.434px;" id="eleytdgtbxzjk" class="animable"></path>
              <path d="M121.78,338.59c1.23-1.22,6.15-6.14,6.15-10.24V291.3a34.46,34.46,0,0,1-10,.37c.34,19.66.54,38.76.54,40.37C118.5,335.32,120.55,339.82,121.78,338.59Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 122.93px 315.049px;" id="elli3nbi1i9g9" class="animable"></path>
              <path d="M62.62,309.86l8,121.6,16-.26L97,307.79l1.56.26-.78,122.89,14-.51L126.27,315s-3.11-26.39-6-32.6a43.93,43.93,0,0,0-7-10.61H71.68S64.69,283.47,62.62,309.86Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 94.445px 351.625px;" id="elzxw44n6p4xl" class="animable"></path>
              <path d="M96.77,195.51s8.28,5.43,10.09,10.09,8.54,68.82,8.54,69.85-12.42.78-19.66,1-9.83.26-9.83.26-9.57-63.13-11.39-69.6,0-9.05,2.07-11.12,5.44-2.59,7-3.37S96.77,195.51,96.77,195.51Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 94.5861px 234.611px;" id="elotpbiq93e0b" class="animable"></path>
              <path d="M99.62,199.65s6.21,13.71,9.57,45c2,19.1,1.55,71.41,1.55,71.41a6.08,6.08,0,0,0,6.73.78A106.88,106.88,0,0,1,129.89,313s-4.92-33.64-5.17-45.28-5.7-45.28-8.28-54.85-3.63-10.86-7.51-13.19-9.83-3.11-9.83-3.11Z" style="fill: rgb(80, 108, 172); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 114.495px 257.042px;" id="elf21tk4ca35" class="animable"></path>
              <path d="M100.14,198.61s1.55-7.24,1.29-10.09-1.05-3.08-7.26-3.34-13.44-5.2-15.51-2.61S76.08,194.73,77.37,196s6.63,4.79,14.92,5.55C95.23,201.84,99.36,200.68,100.14,198.61Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 89.0623px 191.708px;" id="el7targl6zu3" class="animable"></path>
              <path d="M76.85,194.73s-16,10.35-19.4,14.23,3.1,59.77,3.36,73.74a230.19,230.19,0,0,1-1.55,28.46,137.11,137.11,0,0,0,16.3,6.46,36.09,36.09,0,0,0,19.66.52s-3.36-51.48-3.88-66.49-5.69-40.88-7.5-46.83S76.85,194.73,76.85,194.73Z" style="fill: rgb(80, 108, 172); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 75.844px 256.994px;" id="elh40lpuc0y1" class="animable"></path>
              <path d="M76.59,193.18s-15.26,10.09-14.23,11.38,8,35.71,8,53,.78,51.49.78,51.49,4.92,0,8.54.26,11.38-1,11.38-1-2.59-35.7-2.59-53.81-6.46-45.8-8-50.2S76.59,193.18,76.59,193.18Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 76.6851px 251.263px;" id="eldlkd8y4rxn" class="animable"></path>
              <path d="M100.4,197.32s5.95,31.05,8.53,51.23,5.44,44,5.44,47.86v9.83s4.91.78,6.72.78a15.06,15.06,0,0,0,4.4-1s-3.88-34.41-4.91-50.19-6.47-45.53-8.28-51l-1.81-5.43S104,196,100.4,197.32Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 112.945px 252.018px;" id="el2uxcnsifhm9" class="animable"></path>
              <path d="M62.62,378.17l-38-10.09s-2.85,12.16-5.43,17.07S14.76,398.6,15.54,403s5.43,7.25,9.05,8.54,31.31,9.31,38.29,8.8,8-6.21,7.25-11.13S62.62,378.17,62.62,378.17Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 42.8492px 394.222px;" id="ely10c4uwlit" class="animable"></path>
              <path d="M70.13,409.21c-.78-4.91-7.51-31-7.51-31l-2.36-.63c-.42,2.12-5.69,28.59-6.43,35.29-.39,3.46.56,5.52,2.18,6.82a32.19,32.19,0,0,0,6.87.69C69.87,419.82,70.9,414.13,70.13,409.21Z" style="fill: rgb(76, 76, 76); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 62.0447px 398.98px;" id="elq5c21qe0j9a" class="animable"></path>
              <path d="M41.67,329,31.09,375.08a1.52,1.52,0,0,1-1.6,1.17h0a1.52,1.52,0,0,1-1.33-1.9l13-49,12.16,2.07,5,53.28a1.52,1.52,0,0,1-1.85,1.61l-.22-.05a1.51,1.51,0,0,1-1.17-1.38l-3-51.14Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 43.2177px 353.849px;" id="elukhq4uewqk" class="animable"></path>
              <path d="M60.55,206.37S49.69,210,48.13,213.88,44.77,248.29,44,255.53s-.77,9.06-.77,9.06-6.47,3.1-5.43,7.24,4.91,7.76,4.91,8.8,1.55,33.11,1.55,33.11-4.91,15.53-3.88,16.82,4.92,2.85,5.44,3.62,3.36,3.62,4.65,2.59A4.38,4.38,0,0,0,52,334.44l.77-2.84s3.11,3.1,3.88,3.1-1.29-5.95-1.29-9.83S52,315.55,52,314.52,55.38,283,55.38,283s5.17-4.4,5.69-8-.78-7.77-.26-9.06,2.33-4.14,2.59-6.73-1.81-6.46-2.07-8.53,1.81-30.79,1.81-30.79" style="fill: rgb(80, 108, 172); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 50.5547px 271.681px;" id="ell23xqp1axcp" class="animable"></path>
              <path d="M45.81,334.18c.51.78,3.36,3.62,4.65,2.59A4.38,4.38,0,0,0,52,334.44l.77-2.84s3.11,3.1,3.88,3.1-1.29-5.95-1.29-9.83S52,315.55,52,314.52c0-.7,1.53-14.87,2.53-24l-11.45-.88c.46,9.82,1.15,24.09,1.15,24.09s-4.91,15.53-3.88,16.82S45.29,333.41,45.81,334.18Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 48.5151px 313.316px;" id="elxzjt1noe2gc" class="animable"></path>
              <path d="M83.58,441.81s-9.31-1.55-10.87-1.55S64.43,450.87,63.4,455s2.07,5.69,2.84,5.69H86.68s3.11,0,3.37-4.92-1.81-11.9-1.81-13.71,1.29-4.14.77-5.43S83.84,434.57,83.58,441.81Z" style="fill: rgb(80, 108, 172); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 76.6326px 448.239px;" id="elh5jfaqwvaz7" class="animable"></path>
              <path d="M90.05,455.78a25.73,25.73,0,0,0-.22-4.31c-1.1,1.29-1.92,3.72-3.4,4.83-2.07,1.55-7.25,1-8.28.78s-3.63-5.18-4.92-5.95-4.14,5.17-4.14,5.17H63.2a4,4,0,0,0,3,4.4H86.68S89.79,460.7,90.05,455.78Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 76.6151px 455.881px;" id="el6vu77tved5s" class="animable"></path>
              <path d="M72.08,442.14s-1.74-11.75-.44-12.26,12.91-1.71,13.43.87-1.46,11.68-1.46,11.68Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 78.1574px 435.792px;" id="elu278t1l0vk" class="animable"></path>
              <path d="M74.83,430l-.16,4.53,6.31.32.49-4.85A15.14,15.14,0,0,0,74.83,430Z" style="fill: rgb(80, 108, 172); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 78.07px 432.241px;" id="el183z9h3w671" class="animable"></path>
              <path d="M84.74,444.19h0l-13.32-.44a.9.9,0,0,1-.88-.93.88.88,0,0,1,.94-.88l13.32.43a.91.91,0,0,1,0,1.82Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 78.1248px 443.064px;" id="el3zsnqp808u4" class="animable"></path>
              <path d="M83.94,446.27h0l-13.32-.44a.91.91,0,0,1-.88-.93.87.87,0,0,1,.94-.88l13.32.43a.91.91,0,0,1,0,1.82Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 77.3249px 445.144px;" id="eluyqu7mxur9d" class="animable"></path>
              <path d="M82.4,448.19h0l-10.87-.44a.85.85,0,0,1-.72-.94c0-.5.35-.93.77-.87l10.87.43a.86.86,0,0,1,.72.94A.83.83,0,0,1,82.4,448.19Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 76.9895px 447.062px;" id="ela4j5jx6bcje" class="animable"></path>
              <path d="M106.61,438.71s-8.54-3.88-10.35-2.07-2.33,2.84-1,3.62,3.11,1.81,3.11,1.81-2.85,13.19-1.81,15a10.38,10.38,0,0,0,3.1,3.1h35.7s2.07-1,.26-4.66-9.05-5.43-11.9-7.24-8.28-8.54-8.54-9.31,1.3-7.77-.51-8.54-7.51,0-7.25,2.07a28.07,28.07,0,0,0,1.3,4.91Z" style="fill: rgb(80, 108, 172); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 115.438px 445.149px;" id="el5tgqq8pwn9k" class="animable"></path>
              <path d="M114.46,448.05c.37.53.91.85,1.21.72l5.7-2.42c-.56-.54-1.14-1.14-1.7-1.75l-5.34,2.26C114,447,114.09,447.52,114.46,448.05Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 117.748px 446.699px;" id="el8865skfi72x" class="animable"></path>
              <path d="M111.25,444c.36.53,1,.83,1.32.66l5.15-2.25c-.57-.68-1.08-1.31-1.49-1.84l-5,2.18C110.84,442.85,110.88,443.45,111.25,444Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 114.337px 442.639px;" id="elqnt4bdsu7ss" class="animable"></path>
              <path d="M112.25,445.18c-.4.12-.36.72,0,1.25s1,.82,1.32.66l6-2.62c-.55-.6-1.09-1.21-1.59-1.79Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 115.767px 444.907px;" id="elj6lu3ac39lg" class="animable"></path>
              <path d="M115.93,440.08c-.26-.77,1.62-10.16-.19-10.93s-8.08,1.28-8.36,3.35c-.26,1.9,1.3,4.91,1.3,4.91l2.84,5.18S115.41,440.86,115.93,440.08Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 111.943px 435.787px;" id="elttm8ii3drdd" class="animable"></path>
              <path d="M110.77,430.16l1.13,3.24,2.92-1-.65-3.08S111.58,429,110.77,430.16Z" style="fill: rgb(80, 108, 172); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 112.795px 431.34px;" id="elamckb4nbl8p" class="animable"></path>
              <path d="M135.58,455.52a6.38,6.38,0,0,0-1.73-2,1.8,1.8,0,0,0-.08.21c-.52,1.81.26,3.62-.77,4.66s-6.21.78-10.35.26-11.39-2.85-16.3-4.66a18.62,18.62,0,0,0-10-.36,11.87,11.87,0,0,0,.13,3.47,3.58,3.58,0,0,0,3.1,3.1h35.7S137.39,459.15,135.58,455.52Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 116.296px 456.657px;" id="elnqgw1mg9sa" class="animable"></path>
            </g>
            <g id="freepik--Floor--inject-17" class="animable" style="transform-origin: 254px 460.7px;">
              <line x1="21" y1="460.7" x2="487" y2="460.7" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.908269px; transform-origin: 254px 460.7px;" id="el7y73ppwms1m" class="animable"></line>
            </g>
            <defs>
              <filter id="active" height="200%">
                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                <feMerge>
                  <feMergeNode in="OUTLINE"></feMergeNode>
                  <feMergeNode in="SourceGraphic"></feMergeNode>
                </feMerge>
              </filter>
              <filter id="hover" height="200%">
                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                <feMerge>
                  <feMergeNode in="OUTLINE"></feMergeNode>
                  <feMergeNode in="SourceGraphic"></feMergeNode>
                </feMerge>
                <feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                </feColorMatrix>
              </filter>
            </defs>
          </svg>
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold lh-1 mb-3">Find Your Match</h1>
          <p class="lead">We are providing a certified and quality cars in second hands, you can see all the details in
            this website, this website is useful for selecting your match and fav cars, you can select your fav car
            models, we are providing cars with higher cubic capacity cars with internal features and also, we are
            providing good cars in low price </p>
          <div class="container">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary w-50" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Search
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Select Your Fav</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form method="post">
                    <div class="modal-body">

                      <div class="row">
                        <div class="col-sm-6 mt-3">
                          <select class="form-select" aria-label="Default select example">
                            <option selected>New/Used</option>
                            <option value="1">New & Used</option>
                            <option value="1">Certified</option>
                            <option value="2">New & Certified</option>
                            <option value="3">Used</option>
                          </select>
                        </div>
                        <div class="col-sm-6 mt-3">
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Body Style</option>
                            <option value="cargo_van">Cargo van</option>
                            <option value="convertible">Convertible</option>
                            <option value="coupe">Coupe</option>
                            <option value="hatchback">Hatchback</option>
                            <option value="minivan">Minivan</option>
                            <option value="passenger_van">Passenger van</option>
                            <option value="pickup_truck">Pickup truck</option>
                            <option value="suv">SUV</option>
                            <option value="sedan">Sedan</option>
                            <option value="wagon">Wagon</option>
                          </select>
                        </div>
                        <div class="col-sm-6 mt-3">
                          <select class="form-select" aria-label="Default select example">
                            <option value="">No max price</option>
                            <option value="12000">$12,000</option>
                            <option value="14000">$14,000</option>
                            <option value="16000">$16,000</option>
                            <option value="18000">$18,000</option>
                            <option value="20000">$20,000</option>
                            <option value="25000">$25,000</option>
                            <option value="30000">$30,000</option>
                            <option value="35000">$35,000</option>
                            <option value="40000">$40,000</option>
                            <option value="45000">$45,000</option>
                            <option value="50000">$50,000</option>
                            <option value="60000">$60,000</option>
                            <option value="70000">$70,000</option>
                            <option value="80000">$80,000</option>
                            <option value="90000">$90,000</option>
                            <option value="100000">$100,000</option>
                          </select>
                        </div>
                        <div class="col-sm-6 mt-3">
                          <select class="form-select" aria-label="Default select example">
                            <option value="10">10 miles</option>
                            <option selected="" value="20">20 miles</option>
                            <option value="30">30 miles</option>
                            <option value="40">40 miles</option>
                            <option value="50">50 miles</option>
                            <option value="75">75 miles</option>
                            <option value="100">100 miles</option>
                            <option value="150">150 miles</option>
                            <option value="200">200 miles</option>
                            <option value="250">250 miles</option>
                            <option value="500">500 miles</option>
                            <option value="all">All miles from</option>
                          </select>
                        </div>
                        <div class="col-sm-6 mt-3">
                          <input type="number" name="Zip" class="form-control" id="">
                        </div>

                      </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="location.href = 'menu.php';">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <hr style="width: 50%; position:relative;left:25%;">
  <section id="cfs">

    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">

          </div>
          <div class="col-lg-4">
            <h4 style="color:black;">Find new & used cars for sale</h4>
            <p class="mx-5">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Popular searches near you.</p>
          </div><br><br>
          <div class="col-lg-4"></div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-lg p-3 mb-1 bg-white rounded ">
              <img src="https://platform.cstatic-images.com/in/v2/stock_photos/098efaf1-e69d-41d1-bb0f-48dcbf595942/975893da-31c1-4ce7-95a2-d3af46d3b908.png" class="bd-placeholder-img card-img-top" alt="">
              <div class="card-body">
                <p class="card-text">Used &nbsp;<a href="https://www.cardekho.com/electric-cars" style="text-decoration: none;">Electric Cars</a></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="location.href = 'menu.php';">View</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col ">
            <div class="card  shadow-lg p-3 mb-5 bg-white rounded ">
              <img src="https://www.cstatic-images.com/car-pictures/main/USC50FOT113A021001.png" class="bd-placeholder-img card-img-top" alt="">
              <div class="card-body">
                <p class="card-text">Used &nbsp;<a href="https://www.ford.com/trucks/f150/" style="text-decoration: none;">Ford F-150s</a></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="location.href = 'menu.php';">View</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm shadow-lg p-3 mb-5 w-2 bg-white rounded">
              <img src="https://www.cstatic-images.com/car-pictures/main/CAC50DOC191A021001_2.png" class="bd-placeholder-img card-img-top " alt="">
              <div class="card-body">
                <p class="card-text">Used &nbsp;<a href="https://www.dodge.com/challenger.html" style="text-decoration: none;">Dodge Challengers</a></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="location.href = 'menu.php';">View</button>
                  </div>
                </div>
              </div>
            </div>
          </div>






        </div>
      </div>
    </div>
  </section>
  <hr style="width: 50%; position:relative;left:25%;">
  <section id="rev">
    <div class="container">
      <section>
        <div class="row d-flex justify-content-center">
          <div class="col-md-10 col-xl-8 text-center ">
            <h3 class="mb-4">Testimonials</h3>
            <p class="mb-4 pb-2 mb-md-5 pb-md-0">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
              numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
              quisquam eum porro a pariatur veniam.
            </p>
          </div>
        </div>

        <div class="row text-center d-flex align-items-stretch">
          <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
            <div class="card testimonial-card shadow-lg p-3 mb-5 bg-white rounded">
              <div class="card-up" style="background-color: white;"></div>
              <div class="avatar mx-auto bg-white">
                <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="rounded-circle img-fluid" />
              </div>
              <div class="card-body">
                <h4 class="mb-4">Maria Smantha</h4>
                <hr />
                <p class="dark-grey-text mt-4">
                  <i class="fas fa-quote-left pe-2"></i>"Lorem ipsum dolor sit amet eos adipisci,
                  consectetur adipisicing elit.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
            <div class="card testimonial-card shadow-lg p-3 mb-5 bg-white rounded">
              <div class="card-up"></div>
              <div class="avatar mx-auto bg-white">
                <img src="https://images.unsplash.com/photo-1557425747-929b65a39785?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" class=" img-fluid " />
              </div>
              <div class="card-body">
                <h4 class="mb-4">Lisa Cudrow</h4>
                <hr />
                <p class="dark-grey-text mt-4">
                  <i class="fas fa-quote-left pe-2"></i>"Neque cupiditate assumenda in maiores
                  repudi mollitia architecto.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-0 d-flex align-items-stretch ">
            <div class="card testimonial-card shadow-lg p-3 mb-5 bg-white rounded">
              <div class="card-up hover-"></div>
              <div class="avatar mx-auto bg-white">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" class="rounded-circle img-fluid" />
              </div>
              <div class="card-body">
                <h4 class="mb-4">John Smith</h4>
                <hr />
                <p class="dark-grey-text mt-4">
                  <i class="fas fa-quote-left pe-2"></i>"Delectus impedit saepe officiis ab
                  aliquam repellat rem unde ducimus.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>
  <hr style="width: 50%; position:relative;left:25%;">
  <section id="sr">

    <div class="container">
      <h4>All your tools for safety & maintenance</h4><br>
      <!--Google map-->
      <div class="row">
        <div class="col-lg-5">
          <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
            <div class="mapouter shadow-lg p-3 mb-5 bg-white rounded">
              <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=SPEEDS PREOWNED CARS - Used Cars in Hyderabad , Used Cars for sale in Hyderabad, Preowned Cars in Hyderabad&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/">format json</a></div>
              <style>
                .mapouter {
                  position: relative;
                  text-align: right;
                  width: 90%;
                  height: 100%;
                }

                .gmap_canvas {
                  overflow: hidden;
                  background: none !important;
                  width: 100%;
                  height: 100%;
                }

                .gmap_iframe {
                  height: 100% !important;
                }
              </style>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-5 ">
          <form method="post">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" >Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="riv" rows="9"></textarea>
            <div class="col-auto">
              <button type="submit" name="rev" class="btn btn-primary mb-3 mt-5">Send Message</button>
            </div>
          </div>
          </form>
          
        </div>

      </div>

      <!--Google Maps-->


  </section>
  <hr style="width: 50%; position:relative;left:25%;">
  <section id="abot">
    <div class="container">
      <div class="container px-4 py-5" id="icon-grid">
        <h2 class="pb-2 border-bottom">About</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">

          <div class="col d-flex align-items-start ">
            <span class="material-symbols-outlined" style="width: 50%; margin-top:5px;">
              electric_car
            </span>
            <div>
              <h4 class="fw-bold mb-0">Shop</h4>
              <p>Find cars for sale, local dealers, and advice. Also, our price-badging and price-drop notifications
                keep you informed of potential deals.</p>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <span class="material-symbols-outlined" style="width: 50%; margin-top:5px;">
              description
            </span>
            <div>
              <h4 class="fw-bold mb-0">Research</h4>
              <p>View side-by-side comparisons, payment calculators, video reviews, and consumer reviews. These let you
                hear the good and the bad from current car owners.</p>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <span class="material-symbols-outlined" style="width: 50%; margin-top:5px;">
              newspaper
            </span>
            <div>
              <h4 class="fw-bold mb-0">News</h4>
              <p>Our very own Cars.com experts offer unbiased coverage of today's automotive landscape. Yes, there will
                be dad jokes.</p>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <span class="material-symbols-outlined" style="width: 50%; margin-top:5px;">
              sell
            </span>
            <div>
              <h4 class="fw-bold mb-0">Sell</h4>
              <p>Check out our free, secure methods for selling your car. You can either sell directly to a
                private-party shopper or get an Instant Offer from a dealership. Choose the option that’s right for you!
              </p>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <span class="material-symbols-outlined" style="width: 20%; margin-top:5px;">
              handyman
            </span>
            <div>
              <h4 class="fw-bold mb-0">Service & Repair</h4>
              <p>Watch do-it-yourself tutorials or find local repair options.</p>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <span class="material-symbols-outlined" style="width: 30%; margin-top:5px;">
              security
            </span>
            <div>
              <h4 class="fw-bold mb-0">Certified Pre-Owned</h4>
              <p>Learn why you should consider a Certified Pre-Owned car, and get info on manufacturer programs.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24">
              <use xlink:href="#bootstrap"></use>
            </svg>
          </a>
          <span class="text-muted">© 2022 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3 text-muted"><a class="text-muted" href="#"><i class="gg-twitter"></i></a></li>
          <li class=" ms-3 text-muted"><a class="text-muted" href="#"><i class="gg-instagram"></i></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><i class="gg-facebook"></i></a></li>
        </ul>
      </footer>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>