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

  <div class="relative isolate px-6 pt-16 sm:pt-8 lg:px-8 landscape:h-screen" style="box-sizing: border-box;">
    
      <!-- Second Row Containers -->
  <div class="fixed sm: h-10" id="secondRowContainer" style="left: 0; width: 100%; padding: 0.5rem 2rem 0.5rem 2rem; box-sizing: border-box; display: flex; justify-content: space-between; background-color: white; z-index: 100;">
      <!-- Dynamic Text container -->
      <h2 class="text-sm font-semibold sm:!text-xs md:!text-base lg:!text-lg" style="z-index: 80;">About Us</h2>

      <!-- Searchbar -->
      <div id="searchBarContainer" style="width:50%; display: flex; gap: 1rem; z-index: 80;">
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="propertySearch" type="text" placeholder="Search for any property">

        <a href="#" class="text-sm/6 font-semibold text-gray-900 sm:text-xs"><button id="loginButton" style="background-color: black; color: white; padding: 4px 9px 4px 9px; box-sizing: border-box; border-radius: 5px; border: none;">Search</button></a>
      </div>
   </div>

      <div class="mx-auto portrait:!pb-44 portrait:md:!pb-0 portrait:lg:!pb-0" style= "height: 100%; display: flex; flex-direction: column; padding-top: 3rem; padding-bottom: 7rem; box-sizing: border-box;">

        <!-- First Content Stack -->
        <div id="mainContainer" class="portrait:flex-col" style="height: 100%; width: 100%; display: flex; box-sizing: border-box; gap: 2rem; align-items: center;">
            
            <!-- Left Container -->
            <div id="leftContainer" class="flex-1 portrait:!flex-row portrait:!h-1/5 w-1/4 portrait:w-full" style="height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <img src="{{ asset('assets/logoIcon.svg') }}" class="w-36" alt="" style=""/>

                <div id="nameAndTagline">
                    <span class="text-xl md:!text-2xl lg:!text-2xl font-semibold whitespace-nowrap dark:text-black" style="">ShelterMe</span>
                    <div id="taglineContainer">
                    <p class="text-base sm:!text-sm md:!text-lg lg:!text-lg text-gray-600 dark:text-gray-400">Endless options at affordable prices.</p>
                    </div>
                </div>
            </div>

            <div class="portrait:!flex-col pb-24 portrait:lg:!pb-36 portrait:md:!pb-36 w-11/12 portrait:lg:!w-3/4 portrait:md:!w-3/4 landscape:!w-3/4" id="rightContainer" style="display: flex; gap: 1rem; height: 100%; align-content: center; padding-top: 2rem; box-sizing: border-box;">
              <section id="contact" class="flex justify-center items-center portrait:w-full landscape:w-50 portrait:h-2/5">
              <div class="container mx-auto portrait:md:!px-4 portrait:lg:!px-4 landscape:!px-4 w-full md:w-2/3 lg:w-1/2 portrait:h-3/5" style="height: 100%; border: none; align-content: center;">
                  <div class="bg-black shadow-md rounded border-2 border-solid border-green-600 p-3 w-full h-full flex flex-col" style="height:fit-content; border: none;">
                      <h3 class="text-xl justify-center text-center mb-4" style="color: aliceblue;">Contact Form</h3>
                        <form id="contactForm" action="#" method="POST"
                            class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-start" style="height: 100%; grid-template-rows: auto auto 1fr auto;">
                            <div class="sm:col-span-2">
                      <input type="text" id="name" name="name" placeholder="Your name"
                          class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                      <div id="nameValidation" class="hidden text-red-600 text-sm">Please enter your name.</div>
                    </div>
                    <div>
                    <input type="email" id="email" name="email" placeholder="Your email"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    <div id="emailValidation" class="hidden text-red-600 text-sm">Please enter a valid email address.</div>
                </div>
                <div>
                    <input type="phoneNumber" id="phoneNumber" name="phoneNumber" placeholder="Your phone number"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    <div id="phoneNumberValidation" class="hidden text-red-600 text-sm">Please enter a valid phone number.</div>
                </div>
                <div class="sm:col-span-2 flex" style="height: 100%;">
                    <textarea id="message" name="message" placeholder="Your message" rows="5"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500 resize-none" style="flex: 1;"></textarea>
                    <div id="messageValidation" class="hidden text-red-600 text-sm">Please enter your message.</div>
                </div>
                <div class="sm:col-span-2 flex justify-center">
                    <button type="submit"
                        class="w-full bg-white text-black font-semibold py-2 px-4 rounded-md hover:bg-green-600 transition duration-300" style="width: 8rem;">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>



                <!-- Additional Contact Info Container -->
                <div id="additionalContactInfo" style="display: flex; flex-direction: column; justify-content: center;">

                    <!-- Top Container -->
                    <div id="topContainer" style="width: 100%;">

                        <!-- Additional Contact Info Label -->
                        <h2 class="text-base font-semibold portrait:lg:!text-3xl portrait:md:!text-xl" style="z-index: 80;">Additional Contact Information</h2>

                        <!-- Inner Container of List -->
                        <div id="innerContainer" style="height:8rem;">
                            <ul style="display: flex; flex-direction: column; gap: 1rem; margin-top: 1rem;">

                                <!-- Phone Icon -->
                                <li class="flex" style="align-items: center; gap: 0.5rem;">
                                    <!-- Phone Icon -->
                                    <img src="{{ asset('assets/phoneBlackIcon.svg') }}" alt="" style="height: 1.5rem;">
                                    <a href="#" class="hover:underline text-xs portrait:lg:!text-xl portrait:md:!text-lg">+639123456789 | +639987654321</a>
                                </li>

                                <!-- WhatsApp Icon -->
                                <li class="flex" style="align-items: center; gap: 0.5rem;">
                                    <!-- Phone Icon -->
                                    <img src="{{ asset('assets/whatsappBlackIcon.svg') }}" alt="" style="height: 1.5rem;">
                                    <a href="#" class="hover:underline text-xs portrait:lg:!text-xl portrait:md:!text-lg">+639987654321</a>
                                </li>

                                <!-- Viber Icon -->
                                <li class="flex" style="align-items: center; gap: 0.5rem;">
                                    <!-- Phone Icon -->
                                    <img src="{{ asset('assets/viberBlackIcon.svg') }}" alt="" style="height: 1.5rem;">
                                    <a href="#" class="hover:underline text-xs portrait:lg:!text-xl portrait:md:!text-lg">+639987654321</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Divider Line -->
                    <hr id="dividerLine" style="height: 3px; background-color: black;">

                    <!-- Bottom Container -->
                    <div id="bottomContainer" style="width: 100%; display: flex; flex-direction: column;">

                        <!-- Our Social Media Presence Label -->
                        <h2 class="text-base font-semibold" style="z-index: 80;">Find Us Here</h2>

                        <!-- Inner Container of List -->
                        <div id="innerContainer">
                            <ul style="display: flex; flex-direction: column; gap: 1rem; margin-top: 1rem;">

                                <!-- Facebook Icon -->
                                <li class="flex" style="align-items: center; gap: 0.5rem;">
                                    <!-- Facebook Icon -->
                                    <img src="{{ asset('assets/facebookBlackIcon.svg') }}" alt="" style="height: 1.5rem;">
                                    <a href="#" class="hover:underline text-xs portrait:lg:!text-xl portrait:md:!text-lg">https://facebook.com/shelterMe</a>
                                </li>

                                <!-- Instagram Icon -->
                                <li class="flex" style="align-items: center; gap: 0.5rem;">
                                    <!-- Instagram Icon -->
                                    <img src="{{ asset('assets/instagramBlackIcon.svg') }}" alt="" style="height: 1.5rem;">
                                    <a href="#" class="hover:underline text-xs portrait:lg:!text-xl portrait:md:!text-lg">https://instagram.com/shelterMe</a>
                                </li>

                                <!-- Pinterest Icon -->
                                <li class="flex" style="align-items: center; gap: 0.5rem;">
                                    <!-- Pinterest Icon -->
                                    <img src="{{ asset('assets/pinterestBlackIcon.svg') }}" alt="" style="height: 1.5rem;">
                                    <a href="#" class="hover:underline text-xs portrait:lg:!text-xl portrait:md:!text-lg">https://pinterest.com/shelterMe</a>
                                </li>

                                <!-- Tiktok Icon -->
                                <li class="flex" style="align-items: center; gap: 0.5rem;">
                                    <!-- Tiktok Icon -->
                                    <img src="{{ asset('assets/tiktokBlackIcon.svg') }}" alt="" style="height: 1.5rem;">
                                    <a href="#" class="hover:underline text-xs portrait:lg:!text-xl portrait:md:!text-lg">https://tiktok.com/shelterMe</a>
                                </li>

                                <!-- X Platform Icon -->
                                <li class="flex" style="align-items: center; gap: 0.5rem;">
                                    <!-- X Platform Icon -->
                                    <img src="{{ asset('assets/xPlatformBlackIcon.svg') }}" alt="" style="height: 1.5rem;">
                                    <a href="#" class="hover:underline text-xs portrait:lg:!text-xl portrait:md:!text-lg">https://x.com/shelterMe</a>
                                </li>
                            </ul>
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