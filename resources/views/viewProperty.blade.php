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

  <div class="relative isolate px-6 pt-16 sm:pt-8 lg:px-8" style="height: 100vh; box-sizing: border-box;">
    
      <!-- Second Row Containers -->
  <div class="fixed sm: h-10" id="secondRowContainer" style="left: 0; width: 100%; padding: 0.5rem 2rem 0.5rem 2rem; box-sizing: border-box; display: flex; justify-content: space-between; background-color: white; z-index: 100;">
      <!-- Dynamic Text container -->
      <h2 class="text-sm font-semibold sm:!text-xs md:!text-base lg:!text-lg" style="z-index: 80;">Select Property Type</h2>

      <!-- Searchbar -->
      <div id="searchBarContainer" style="width:50%; display: flex; gap: 1rem; z-index: 80;">
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="propertySearch" type="text" placeholder="Search for any property">

        <a href="#" class="text-sm/6 font-semibold text-gray-900 sm:text-xs"><button id="loginButton" style="background-color: black; color: white; padding: 4px 9px 4px 9px; box-sizing: border-box; border-radius: 5px; border: none;">Search</button></a>
      </div>
   </div>

      <div class="mx-auto portrait:!pb-44 portrait:md:!pb-0 portrait:lg:!pb-0" style= "height: 100%; display: flex; flex-direction: column; padding-top: 3rem; padding-bottom: 7rem; box-sizing: border-box;">

        <!-- First Content Stack -->
        <div id="mainContainer" class="portrait:flex-col portrait:h-full" style="height: 100%; width: 100%; display: flex; gap: 2rem; align-items: center; overflow-x: hidden;">
            <!-- Main Label -->

            <!-- Carousel -->
            <div id="default-carousel" class="relative w-full portrait:!h-full portrait:md:!h-1/3 portrait:lg:!h-1/3 landscape:h-full" style="width: fit-content;">

                <!-- Carousel Wrapper -->
                <div id="carouselWrapper" class="portrait:!h-full landscape:h-full relative overflow-hidden rounded-lg flex-1" 
                    style="overflow: hidden; display: flex; flex-direction: column; justify-content: center; gap: 1rem;">

                    <div id="innerContainer" class="portrait:flex-row landscape:flex-col" style="overflow-y: auto; scrollbar-width: none; -ms-overflow-style: none; gap: 1rem; display: flex; align-items: center; width: fit-content;">
                      <!-- Carousel Items -->
                      <div class="carousel-item" onclick="navigateCarousel(-1)">
                          <img src="{{ asset('assets/suburban house 1.png') }}" 
                              alt="Suburban House 1" 
                              class="carousel-img"
                              style="height: 10rem; width: 16rem; filter: blur(2px); border-radius: 2rem; cursor: pointer; transition: transform 0.3s ease;">
                      </div>
                      <div class="carousel-item">
                          <img src="{{ asset('assets/suburban house 2.png') }}" 
                              alt="Suburban House 2" 
                              class="carousel-img selected"
                              style="height: 18rem; width: 24rem; border-radius: 2rem; cursor: pointer; transition: transform 0.3s ease;">
                      </div>
                      <div class="carousel-item" onclick="navigateCarousel(1)">
                          <img src="{{ asset('assets/realEstateBroker.png') }}" 
                              alt="Suburban House 3" 
                              class="carousel-img"
                              style="height: 10rem; width: 16rem; filter: blur(2px); border-radius: 2rem; cursor: pointer; transition: transform 0.3s ease;">
                      </div>
                    </div>
                </div>
            </div>

            <!-- Right Container -->
            <div id="rightContainer" class="landscape:justify-center" style=" flex: 1; height: 100%; display: flex; flex-direction: column; display: flex;">

              <!-- Dynamic Title of Property -->
              <h2 class="text-base sm:!text-base md:!text-3xl lg:text-4xl xl:text-5xl font-semibold" style="z-index: 80;">Small Family Suburban House</h2>

              <!-- Main Info -->
              <div id="secondStackContainer" class="portrait:!flex-col portrait:!h-full portrait:md:!flex-row portrait:md:!h-1/4 portrait:lg:!flex-row portrait:lg:!h-1/4" style="display: flex; height: 25%; gap: 2rem;">

                <!-- Left Container -->
                <div id="leftContainer" style="width: 70%; display: flex; flex-direction: column; justify-content: center;">

                 <!-- Unorder List of Property Info -->
                  <ul>

                    <!-- Location -->
                    <li class="flex" style="align-items: center; gap: 0.5rem;">
                      <img src="{{ asset('assets/addressLocationIcon.svg') }}" alt="" style="height: 1rem;">
                      <h2 class="text-sm font-normal" style="z-index: 80; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">123 This Street, This Address, This Country</h2>
                    </li>

                    <!-- Area in square meters -->
                    <li class="flex" style="align-items: center; gap: 0.5rem;">
                      <img src="{{ asset('assets/areaSizeIcon.svg') }}" alt="" style="height: 0.7rem;">
                      <h2 class="text-sm font-normal" style="z-index: 80; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">500 square meters</h2>
                    </li>
                  </ul>

                  <div id="crucialInfoContainer" style="display: flex; flex-direction: column;">

                    <!-- Property Type Container -->
                    <div id="propertyTypeInfo" style="display: flex; gap: 0.5rem;">
                      <h2 class="text-sm font-normal" style="z-index: 80;">Type of Property: </h2>
                      <h2 class="text-sm font-semibold" style="z-index: 80;">Residential</h2>
                    </div>

                    <!-- Accomodations and Capacity Info -->
                     <div id="accomodationsInfo">

                     <!-- Unordered List -->
                      <ul style="display: flex; gap: 3rem;">

                        <!-- Persons Capacity -->
                        <li>

                          <!-- Persons Label -->
                          <h2 class="text-sm font-semibold" style="z-index: 80;">Persons:</h2>

                          <!-- Div for Styling -->
                          <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <img src="{{ asset('assets/userIcon.svg') }}" alt="" style="height: 1.5rem;">
                            <h2 class="text-sm font-semibold" style="z-index: 80;">5</h2>
                          </div>
                        </li>

                        <!-- Bedrooms Count -->
                        <li>

                          <!--Bedrooms Count Label -->
                          <h2 class="text-sm font-semibold" style="z-index: 80;">Bedrooms:</h2>

                          <!-- Div for Styling -->
                          <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <img src="{{ asset('assets/bedIcon.svg') }}" alt="" style="height: 1.5rem;">
                            <h2 class="text-sm font-semibold" style="z-index: 80;">3</h2>
                          </div>
                        </li>

                        <!-- Bathrooms Count -->
                        <li>

                          <!--Bathrooms Count Label -->
                          <h2 class="text-sm font-semibold" style="z-index: 80;">Bathrooms:</h2>

                          <!-- Div for Styling -->
                          <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <img src="{{ asset('assets/bathtubIcon.svg') }}" alt="" style="height: 1.5rem;">
                            <h2 class="text-sm font-semibold" style="z-index: 80;">2</h2>
                          </div>
                        </li>
                      </ul>
                     </div>
                  </div>
                </div>

                <!-- Right Container -->
                <div id="rightContainer" class="portrait:!w-full portrait:md:!w-1/3 portrait:lg:!w-1/3" style="display: flex; flex-direction: column;">

                  <!-- Downpayment Price -->
                  <div id="downpaymentPrice" style="display: flex; flex-direction: column; gap: 0.5rem;">

                    <!-- Downpayment Label -->
                    <h2 class="font-semibold text-lg portrait:lg:!text-2xl portrait:md:!text-xl" style="z-index: 80;">Downpayment: </h2>

                    <!-- Amount in Dollars -->
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                      <img src="{{ asset('assets/dollarIcon.svg') }}" alt="" style="height: 2rem;">
                      <h2 class="portrait:lg:!text-4xl portrait:md:!text-3xl text-3xl font-semibold" style="z-index: 80;">200,000.00</h2>
                    </div>
                  </div>

                  <!-- Button Container -->
                   <div id="buttonContainer" class="portrait:!w-full" style="flex: 1; display: flex; justify-content: flex-end; align-items: center;">
                    <a href="#" class="text-sm portrait:md:!text-xs portrait:lg:!text-sm portrait:!flex-col font-semibold text-gray-900 w-full"><button class="w-full" id="loginButton" style="background-color: black; color: white; padding: 4px 9px 4px 9px; box-sizing: border-box; border-radius: 5px; border: none;">Check Availability</button></a>
                   </div>
                </div>
              </div>

              <!-- Third Stack Container -->
               <div id="thirdStackContainer" class="portrait:!flex-col portrait:md:!flex-row portrait:lg:!flex-row" style="display: flex; justify-content: space-between; gap: 1rem;">

                <!-- Left Container -->
                <div id="leftContainer" class="portrait:!w-full portrait:md:!w-3/4 portrait:lg:!w-3/4 portrait:!pt-4 portrait:md:!pt-0 portrait:lg:!pt-0" style="">
                  <h2 class="portrait:lg:!text-base portrait:md:!text-sm portrait:sm:!text-xs text-xs font-semibold" style="z-index: 80; overflow: hidden; text-overflow: ellipsis;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in tortor in sapien dapibus semper. Sed eget purus ex. Ut odio ligula, facilisis non felis tempus, mollis molestie purus. Sed lacinia euismod blandit. Nullam vitae fermentum neque. Sed sed tortor vitae lorem varius luctus. Vestibulum pulvinar sollicitudin leo id condimentum. Nunc vitae fermentum ligula. Suspendisse eget mauris ullamcorper, iaculis velit tincidunt, efficitur est. Aenean et arcu non massa pretium laoreet ut sit amet lorem. Integer pretium maximus est at venenatis.</h2>
                </div>

                <!-- Right Container -->
                <div id="rightContainer" style="flex: 1; display: flex; flex-direction: column; gap: 0.5rem;">

                  <!-- Additional Amenities Label -->
                  <h2 class="text-sm font-semibold" style="z-index: 80; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Other Amenities Available: </h2>

                  <!-- Additional Amenities Available Container -->
                  <div id="additionalAmenitiesContainer" style=" width: 100%; background-color: black; display: grid; grid-template-columns: repeat(4, 1fr); gap: 0.5rem; padding: 1rem; box-sizing: border-box;">

                    <!-- Wifi -->
                    <img src="{{ asset('assets/wifiIcon.svg') }}" alt="" style="height: 2rem;">

                    <!-- Wifi -->
                    <img src="{{ asset('assets/garageIcon.svg') }}" alt="" style="height: 2rem;">

                    <!-- Wifi -->
                    <img src="{{ asset('assets/poolIcon.svg') }}" alt="" style="height: 2rem;">

                    <!-- Wifi -->
                    <img src="{{ asset('assets/airconIcon.svg') }}" alt="" style="height: 2rem;">
                    
                    <!-- Wifi -->
                    <img src="{{ asset('assets/kitchenIcon.svg') }}" alt="" style="height: 2rem;">
                  </div>
                </div>
               </div>

              <!-- Fourth Stack -->
             <div id="fourthStack" style="height:fit-content; padding-top: 0.5rem; padding-bottom: 0.5rem; box-sizing: border-box; display: flex; flex-direction: column;">

              <!-- Comments Container -->
              <div id="reviewsSummaryContainer" style="height: 20%; display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">

                <!-- Reviews Number Label -->
                <h2 class="text-lg font-semibold" style="z-index: 80; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">12 reviews </h2>
                
                <!-- Star Icons -->
                <div style="display: flex;">
                  <img src="{{ asset('assets/starIcon.svg') }}" alt="" style="height: 1.5rem;">
                  <img src="{{ asset('assets/starIcon.svg') }}" alt="" style="height: 1.5rem;">
                  <img src="{{ asset('assets/starIcon.svg') }}" alt="" style="height: 1.5rem;">
                  <img src="{{ asset('assets/starIcon.svg') }}" alt="" style="height: 1.5rem;">
                  <img src="{{ asset('assets/starIcon.svg') }}" alt="" style="height: 1.5rem;">
                </div>
              </div>

                <!-- User Reviews Container -->
                <div id="userReviewsContainer" style="flex: 1; display: flex; justify-content: space-between;">

                  <!-- Back Button -->
                  <a href="#" class="text-2xl/6 font-semibold text-gray-900"><button id="loginButton" style="background-color: black; color: white; padding: 4px 9px 4px 9px; box-sizing: border-box; border-radius: 5px; border: none; height: 100%;"><</button></a>

                  <!-- Comment Container -->
                  <div class="bg-stone-100" id="commentContainer" style="display: flex; width: 80%; border-radius: 0.5rem; box-shadow: 6px 6px 0 0 rgb(0,0,0,0.2); padding: 0.5rem; box-sizing: border-box; flex-direction: column;">
                    
                    <!-- Top Container -->
                    <div id="topContainer" style="display: flex;">

                      <!-- Left Container -->
                      <div id="leftContainer" style="display: flex; gap: 0.5rem; width: 80%;">

                        <!-- Profile Picture -->
                          <img src="{{ asset('assets/profilePicIcon.svg') }}" alt="" style="height: 2rem; border-radius: 50%;"/>

                          <div id="usernameDateTime" style="display: flex; flex-direction: column;">
                            <h2 class="text-sm portrait:!text-base font-semibold" style="z-index: 80;">Username</h2>
                            <p class="text-gray-500 portrait:!text-xs" style="z-index: 80; font-size: 0.5rem;">December 28, 2024 at 10:00 AM</p>
                          </div>
                      </div>
                      
                      <!-- Right Container -->
                      <div id="rightContainer" style="display: flex; width: 20%; justify-content: flex-end">
                        <img src="{{ asset('assets/starIcon.svg') }}" alt="" style="height: 1rem;">
                        <img src="{{ asset('assets/starIcon.svg') }}" alt="" style="height: 1rem;">
                        <img src="{{ asset('assets/starIcon.svg') }}" alt="" style="height: 1rem;">
                        <img src="{{ asset('assets/starIcon.svg') }}" alt="" style="height: 1rem;">
                        <img src="{{ asset('assets/starIcon.svg') }}" alt="" style="height: 1rem;">
                      </div>
                    </div>

                    <!-- Bottom Container -->
                    <div id="bottomContainer" style="height: 100%;">
                      <h2 class="font-semibold portrait:lg:!text-sm portrait:md:!text-xs portrait:sm:!text-xs" style="font-size: 0.5rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in tortor in sapien dapibus semper. Sed eget purus ex. Ut odio ligula, facilisis non felis tempus, mollis molestie purus. Sed lacinia euismod blandit. Nullam vitae fermentum neque. Sed sed tortor vitae lorem varius luctus. Vestibulum pulvinar sollicitudin leo id condimentum. Nunc vitae fermentum ligula. Suspendisse eget mauris ullamcorper, iaculis velit tincidunt, efficitur est. Aenean et arcu non massa pretium laoreet ut sit amet lorem. Integer pretium maximus est at venenatis./h2>
                    </div>
                  </div>

                  <!-- Forward Button -->
                  <a href="#" class="text-2xl/6 font-semibold text-gray-900"><button id="loginButton" style="background-color: black; color: white; padding: 4px 9px 4px 9px; box-sizing: border-box; border-radius: 5px; border: none; height: 100%;">></button></a>
                </div>
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