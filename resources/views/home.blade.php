<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShelterMe</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.5/dist/flowbite.min.css" rel="stylesheet">

    <style>
      /* Customize the scrollbar width */
      html::-webkit-scrollbar {
        width: 10px; /* Set the width of the vertical scrollbar */
      }

      /* Customize the thumb (the draggable part) */
      html::-webkit-scrollbar-thumb {
        background-color: #888; /* Thumb color */
        border-radius: 10px; /* Rounded corners */
      }

      /* Customize the track (the area the thumb slides in) */
      html::-webkit-scrollbar-track {
        background-color:rgb(83, 83, 83); /* Track color */
      }

      /* Optional: Change the thumb on hover */
      html::-webkit-scrollbar-thumb:hover {
        background-color: #555; /* Darker color on hover */
      }

      @media (orientation: portrait){
        #navBar {
          padding-left: 1rem; /* example for portrait mode */
          padding-right: 1rem;
        }
      }

      @media (orientation: portrait) and (max-width: 700px){

        #navBar #optionsContainer a{
          font-size: 0.55rem;
        }

        #searchBarContainer{
          flex: 0.9;
        }

        #propertySearch{
          font-size: 0.7rem;
        }

        #navBar #optionsContainer{
          gap: 0.5rem;
        }

        #secondRowContainer{
          padding: 0.5rem 1rem 0.5rem 1rem !important;
        }

        .mx-auto #firstContentStack #innerContainer, #secondContentStack #innerContainer{
          flex-direction: column;
          align-items: center;
          gap: 1rem;
        }

        .mx-auto #secondContentStack #innerContainer{
          flex-direction: column-reverse;
        }

        .mx-auto #firstContentStack #innerContainer #rightContainer, #secondContentStack #innerContainer #leftContainer{
          width: 100% !important;
        }

        .mx-auto #firstContentStack #innerContainer #leftContainer, #secondContentStack #innerContainer #rightContainer{
          width: 100% !important;
        }

        .mx-auto #firstContentStack img, #secondContentStack img{
          height: 50%;
          width: 100%;
          height: auto;
        }

        .mx-auto #firstContentStack h1, #secondContentStack h1, #thirdContainer #mainLabel h1{
          font-size: 1rem;
          line-height: 1rem;
          text-align: center;
        }

        .mx-auto #firstContentStack p, #secondContentStack p{
          font-size: 0.7rem;
          margin-top: 0.5rem;
          line-height: 0.8rem;
          text-align: center;
        }

        #carouselWrapper .carousel-item img{
          height: 6rem !important;
          width: 10rem !important;
        }

        #carouselWrapper .carousel-item .carousel-img.selected{
          height: 8rem !important;
          width: 22rem !important;
        }
      }

      @media (orientation: landscape) {
        #navBar {
          padding-left: 2rem; /* example for landscape mode */
          padding-right: 2rem;
          font-size: 1rem;
        }
      }

      @media (orientation: landscape) and (max-width: 700px){
        header{
          height: 2rem !important;
        }

        nav{
          height: 2rem !important;
        }

        footer span{
          font-size: 0.8rem !important;
        }

        footer h2{
          font-size: 0.5rem !important;
        }
      }

    </style>
</head>
<body style ="overflow-x: hidden;">
<div class="bg-white">
  <header class="fixed inset-x-0 top-0 z-50 sm: h-2" style="background-color: white; height: 4rem;">
    <nav id="navBar" class="flex items-center justify-between 
      h-full" aria-label="Global" style=" height: 4rem;">
      <div>
        <a href="#" class="-m-1.5 p-1.5">
          <img class="h-8 w-auto sm: 2rem md: 3rem lg: 3rem" src="{{ asset('assets/logoIcon.svg') }}" alt="">
        </a>
      </div>
      <div id ="optionsContainer" class="flex flex-1 gap-6">
        <a href="#" class="text-sm font-semibold text-gray-900">Home</a>
        <a href="#" class="text-sm font-semibold text-gray-400">Properties</a>
        <a href="#" class="text-sm font-semibold text-gray-400">About Us</a>
        <a href="#" class="text-sm font-semibold text-gray-400">Contact Us</a>
      </div>
      <div class=" justify-end">
        <a href="#" class="text-sm/6  font-semibold text-gray-900 sm:text-xs"><button id="loginButton" style="background-color: black; color: white; padding: 4px 10px 4px 10px; box-sizing: border-box; border-radius: 5px; border: none;">Log in</button></a>
      </div>
    </nav>
  </header>

  <div class="relative isolate px-6 pt-16 sm:pt-8 lg:px-8">

  <!-- Second Row Containers -->
  <div class="fixed sm: h-10" id="secondRowContainer" style="left: 0; width: 100%; padding: 0.5rem 2rem 0.5rem 2rem; box-sizing: border-box; display: flex; justify-content: space-between; background-color: white; z-index: 100;">
      <!-- Dynamic Text container -->
      <h2 class="text-lg font-semibold sm:text-xs" style="z-index: 80;">Discover</h2>

      <!-- Searchbar -->
      <div id="searchBarContainer" style="width:50%; display: flex; gap: 1rem; z-index: 80;">
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="propertySearch" type="text" placeholder="Search for any property">

        <a href="#" class="text-sm/6 font-semibold text-gray-900 sm:text-xs"><button id="loginButton" style="background-color: black; color: white; padding: 4px 9px 4px 9px; box-sizing: border-box; border-radius: 5px; border: none;">Search</button></a>
      </div>
   </div>

      <div class="mx-auto" style= "display: flex; flex-direction: column; padding-top: 3rem; padding-bottom: 5rem; box-sizing: border-box; gap: 6rem;">

        <!-- First Content Stack -->
        <div class="portrait: h-[50vh]
                    sm:landscape:h-[50vh]
                    md:landscape:h-[50vh]
                    lg:landscape:h-[70vh]" id="firstContentStack" style="display: flex; gap: 1rem; align-items: center;">
          <div class="sm:gap-8 md:gap-8 lg:gap-8" id="innerContainer" style="display: flex; height: fit-content;">
            <div id="leftContainer" style="width: 50%; align-content: center;">
              <h1 class="text-balance font-semibold tracking-tight text-gray-900 portrait:text-3xl landscape:text-3xl">Finding your new dream home has never been easier!</h1>
              <p class="mt-8 text-pretty text-base font-medium text-gray-500 sm:text-xl/6">Endless options laid bare for you to choose from. Detailed overview of each property for your information, and reviews for in-real-life feedback! </p>
            </div>

            <div id="rightContainer" style="width: 50%; display: flex; justify-content: center;">
              <img src="{{ asset('assets/suburban house 1.png') }}" alt="" id="homeImageContainer">
            </div>
          </div>
        </div>

        <!-- Second Content Stack -->
        <div class="portrait: h-[40vh]
                    sm:landscape:h-[40h]
                    md:landscape:h-[50vh]
                    lg:landscape:h-[70vh]" id="secondContentStack" style="display: flex; gap: 1rem; align-items: center;">
          <div class="sm:gap-8 md:gap-8 lg:gap-8" id="innerContainer" style="display: flex; height: fit-content;">
            <div id="leftContainer" style="width: 50%; display: flex; justify-content: center;">
              <img src="{{ asset('assets/realEstateBroker.png') }}" alt="" id="homeImageContainer" style="">
            </div>

            <div id="rightContainer" style="width: 50%; align-content: center;">
              <h1 class="text-balance font-semibold tracking-tight text-gray-900
              portrait:text-lg landscape:text-lg
              sm:portrait:text-base sm:landscape:text-base
              md:portrait:text-3xl md:landscape:text-3xl
              lg:portrait:text-3xl lg:landscape:text-3xl">Collaboration with numerous real estate brokerages</h1>
              <p class="mt-8 text-pretty text-base font-medium text-gray-500 sm:text-xl/6">Working alongside many real estate brokerages, we strive to deliver a plethora of premium, attractive, and top-class properties for you to choose from! </p>
            </div>
          </div>
        </div>

        
        <div class="
          portrait:pb-2 landscape:pb-3
          sm:portrait:pb-4 sm:landscape:pb-5
          md:portrait:pb-6 md:landscape:pb-7
          lg:portrait:pb-28 lg:landscape:pb-8" id="thirdContainer" style="margin-bottom: 2rem; display: flex; flex-direction: column; align-items: center; gap: 2rem;">

          <!-- Main Label -->
          <div id="mainLabel">
            <h1 class="text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-2xl">
              Our top-rated properties
            </h1>
          </div>

          <!-- Carousel -->
          <div id="default-carousel" class="relative w-full">
            <!-- Property Name -->
            <div id="propertyName">
              <h1 class="text-balance text-5xl font-semibold tracking-tight text-gray-900 text-xl text-center" id="property-label">
                Example Property 2
              </h1>
            </div>

            <!-- Carousel Wrapper -->
            <div id="carouselWrapper" class="relative h-56 overflow-hidden rounded-lg md:h-96 flex-1" 
                style="height: 20rem; display: flex; justify-content: center; align-items: center; gap: 1rem;">
              <!-- Carousel Items -->
              <div class="carousel-item" onclick="navigateCarousel(-1)">
                <img src="{{ asset('assets/suburban house 1.png') }}" 
                    alt="Suburban House 1" 
                    class="carousel-img"
                    style="height: 12rem; width: 20rem; filter: blur(2px); border-radius: 2rem; cursor: pointer; transition: transform 0.3s ease;">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/suburban house 2.png') }}" 
                    alt="Suburban House 2" 
                    class="carousel-img selected"
                    style="height: 18rem; width: 28rem; border-radius: 2rem; cursor: pointer; transition: transform 0.3s ease;">
              </div>
              <div class="carousel-item" onclick="navigateCarousel(1)">
                <img src="{{ asset('assets/realEstateBroker.png') }}" 
                    alt="Suburban House 3" 
                    class="carousel-img"
                    style="height: 12rem; width: 20rem; filter: blur(2px); border-radius: 2rem; cursor: pointer; transition: transform 0.3s ease;">
              </div>
            </div>
          </div>
        </div>


<!-- Footer -->
 

<footer class="fixed bg-black dark:bg-gray-900" style="bottom: 0; left: 0; width: 100%; z-index: 100;">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-4 lg:py-4" style="box-sizing: border-box;">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0 sm:w-full md:w-1/3 lg:w-1/3">
            <div id="mainContainer" style="display: flex;">

              <div id="logoContainer">
                <img id="shelterMeLogo" src="{{ asset('assets/logoIconWhite.svg') }}" class="h-8 me-3" alt="ShlterMe Logo" style="height: 2rem;"/>
              </div>
              <div id="nameAndTagline" style="display: flex; flex-direction: column; width: 100%;">
                <span class="text-2xl sm: text-sm md: text-base font-semibold whitespace-nowrap dark:text-white" style="color: aliceblue;">ShelterMe</span>
                <div id="taglineContainer">
                  <p class="text-sm sm: text-xs md: text-sm text-gray-600 dark:text-gray-400">Endless options at affordable prices.</p>
                </div>
            </div>
            </div>
          </div>

          <!-- Contact Us Div -->
          <div class="grid grid-cols-2 gap-8 sm:grid-cols-2 lg: flex-1">
              <div>
                  <h2 class="mb-2 text-sm sm: text-xs font-semibold text-gray-900 uppercase dark:text-white" style="color: aliceblue;">Contact Us</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-2 flex" style="align-items: center; gap: 1rem;">

                          <!-- Phone Icon -->
                          <img src="{{ asset('assets/phoneIcon.svg') }}" alt="" style="height: 1rem;">
                          <a href="#" class="hover:underline sm: text-xs">+639123456789 | +639987654321</a>
                      </li>
                      <li class="flex" style="align-items: center; gap: 1rem;">
                          <!-- Email Icon -->
                          <img src="{{ asset('assets/emailIcon.svg') }}" alt="" style="height: 1rem;">
                          <a href="https://tailwindcss.com/" class="hover:underline sm: text-xs">examplebusiness@example.com</a>
                      </li>
                  </ul>
              </div>

              <!-- Follow Us Div -->
              <div>
                  <h2 class="mb-2 text-sm sm: text-xs font-semibold text-gray-900 uppercase dark:text-white" style="color: aliceblue;">Follow Us</h2>
                  
                  <div class="flex" id="platformsContainer" style="gap: 1rem;">

                    <!-- Facebook Icon -->
                    <div id="facebook"><img src="{{ asset('assets/facebookIcon.svg') }}" alt="" style="height: 1.5rem;"></div>

                    <!-- Instagram Icon -->
                    <div id="instagram"><img src="{{ asset('assets/instagramIcon.svg') }}" alt="" style="height: 1.5rem;"></div>

                    <!-- X Icon -->
                    <div id="xIcon"><img src="{{ asset('assets/xPlatformIcon.svg') }}" alt="" style="height: 1.5rem;"></div>

                    <!-- Tiktok Icon -->
                    <div id="xIcon"><img src="{{ asset('assets/tiktokIcon.svg') }}" alt="" style="height: 1.5rem;"></div>

                    <!-- Pinterest Icon -->
                    <div id="pinterestIcon"><img src="{{ asset('assets/pinterestIcon.svg') }}" alt="" style="height: 1.5rem;"></div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>
</html>