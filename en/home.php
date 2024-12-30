<!doctype html>
<html>
<?php include 'header.php' ?>

<body align="center" class="bg-repeat-y bg-[url('https://bumikadaka.com/resources/img/bg/background.svg')] bg-cover bg-center work-sans">

  <?php include 'nav.php' ?>
  <div class="container-kadaka">
    <div class="content-kadaka home">

      <!-- SLIDER -->
      <div class="flex w-full flex-col">
        <div id="default-carousel"
          data-carousel="slide"
          class="relative w-full xl:mt-[-33px]">
          <!-- <div class="relative h-[598px] overflow-hidden rounded-lg"> -->
          <div class="relative overflow-hidden rounded-lg 
                      h-[202px] min-[461px]:h-[243px] min-[557px]:h-[320px] min-[925px]:h-[460px] 
                      min-[1125px]:h-[517px] min-[1293px]:h-[598px]">
            <div class="hidden duration-1000 ease-in-out" data-carousel-item>
              <img src="https://bumikadaka.com/resources/img/slider/slider-1a.png"
                class="absolute hidden w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2
                        lg:w-[100%] min-[925px]:block">
              <img src="https://bumikadaka.com/resources/img/slider/slider-mobile-1a.png"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2
                        lg:w-[100%] min-[925px]:hidden">
            </div>
            <div class="hidden duration-1000 ease-in-out" data-carousel-item>
              <img src="https://bumikadaka.com/resources/img/slider/slider-2.png" class="absolute hidden w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2
                        lg:w-[100%] min-[925px]:block">
              <img src="https://bumikadaka.com/resources/img/slider/slider-mobile-2a.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2
                        lg:w-[100%] min-[925px]:hidden">
            </div>
          </div>
          <div class="absolute top-0 end-0 z-30 flex items-end justify-end h-full cursor-pointer mt-[-12px] mr-[40px] hidden">
            <button type="button" class="group focus:outline-none" data-carousel-next>
              <span class="inline-flex items-center justify-center w-[43px] h-[34px] bg-white/30 dark:bg-[#F1AE93] group-hover:bg-white/50 dark:group-hover:bg-[#F1AE93] group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
              </span>

              <span class="inline-flex items-center justify-center w-[43px] h-[34px] bg-white/30 dark:bg-[#F1AE93] group-hover:bg-white/50 dark:group-hover:bg-[#F1AE93] group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
              </span>
            </button>
          </div>
        </div>
      </div>

      <!-- MOBILE // di hidden dulu -->
      <div class="flex w-full flex-col hidden">
        <div class="relative">
          <img src="https://bumikadaka.com/resources/img/slider/slider-image-1.png"
            class="w-full h-[200px] min-[768px]:h-[300px] object-cover">

          <div class="relative w-full bottom-0
                        bg-[#F1AE93] h-[92px] text-justify">
            <div class="grid">
              <div class="w-full" style="padding: 1em 1em 0 1em">
                <span class="text-white text-[14px] font-bold">Sadesa Restaurant</span>
              </div>
              <div class="w-full" style="padding: 0 1em">
                <p class="text-white text-[9px] w-full">Sadesa is a restaurant at Forest Hills Hotel Ciwidey. Located on the 2nd floor of the Hotel, you can enjoy breakfast, lunch, dinner or a romantic dinner with views of beautiful mountains, rice fields and flowing rivers.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- END MOBILE -->
      <!-- END SLIDER -->

      <!-- DE LIGHT -->
      <div class="flex w-full flex-col hidden
                    lg:block 
                    xl:block">
        <div class="mt-[20px] px-2">
          <span class="text-[24px] de-light">“ DELIGHT IN THE GLORIOUS OF NATURE COMFORTABLY ”</span>
        </div>
      </div>

      <!-- MOBILE -->
      <div class="flex w-full flex-col 
                    lg:hidden 
                    xl:hidden 
                    w-full m-0">
        <div class="mt-[10px] px-2">
          <span class="text-[11px] de-light">“ DELIGHT IN THE GLORIOUS OF NATURE COMFORTABLY ”</span>
        </div>
      </div>
      <!-- END MOBILE -->
      <!-- END DE LIGHT -->

      <!-- ABOUT US -->
      <div class="flex w-full flex-col mt-8 hidden lg:block">
        <div class="mx-[50px]">
          <div class="items-center">
            <div class="flex items-center">
              <img class="w-[735px] h-[571px] hover:scale-105 ease-in-out duration-300
                          lg:w-[500px] lg:h-[auto]
                          xl:w-[650px] xl:h-[auto]"
                src="https://bumikadaka.com/resources/img/home/about-us-home.png" alt="">

              <div class="pl-[50px] mt-[60px] w-full lg:mt-[0px;]">
                <div class="text-left 
                          lg:mt-[30px]
                          xl:mt-[70px]">
                  <span class="text-[51px] font-bold leading-normal text-[#2F2E2E]
                            lg:text-[32px]
                            xl:text-[42px]">About Us</span>
                </div>
                <br>
                <p class="text-[#2F2E2E] text-[24px] text-justify non-italic font-normal
                        lg:text-[15px]
                        xl:text-[20px]">
                  Founded in 2013 in Bandung, Indonesia, PT Bumi Kadaka is designed to specialize in hotel, resort, culinary, and tourism services. Our approach harmonizes local uniqueness and natural beauty with technology and sustainable practices. Committed to redefining hospitality, we focus on crafting memorable experiences rooted in Indonesian.
                </p>

                <br>
                <div class="text-[#2F2E2E] text-[24px] non-italic font-bold text-left
                          lg:text-[14px]
                          xl:text-[20px]">
                  <a href="https://bumikadaka.com/en/about-us/history.php" class="hover:text-[#EFAE93]">Read More . . .</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- MOBILE -->
      <div class="flex w-full flex-col 
                    lg:hidden xl:hidden 
                    min-[412px]:block
                    min-[390px]:block
                    min-[320px]:block">
        <div class="mt-[20px]">
          <img src="https://bumikadaka.com/resources/img/home/about-us-home.png"
            class="w-full h-[200px] min-[768px]:h-[300px] object-cover">
        </div>
        <div class="h-[92px] text-justify">
          <div class="w-full" style="padding: 1em 1em 0 1em;">
            <span class="text-[16px] font-bold">About Us</span>
          </div>
          <div class="w-full" style="padding: 0 1em;">
            <p class="text-[9px]">Sadesa is a restaurant at Forest Hills Hotel Ciwidey. Located on the 2nd floor of the Hotel, you can enjoy breakfast, lunch, dinner or a romantic dinner with views of beautiful mountains, rice fields and flowing rivers.</p>
          </div>
          <div class="w-full" style="padding: 0 1em;">
            <span class="text-[9px] font-bold">Read More ...</span>
          </div>
        </div>
      </div>
      <!-- END MOBILE -->
      <!-- END ABOUT US -->

      <!-- DOCUMENTARY -->
      <div class="flex w-full flex-col hidden
                  lg:block 
                  xl:block">
        <div class="mt-[80px] h-[245px] bg-[url('https://bumikadaka.com/resources/img/bg/documentary.png')] 
                      lg:h-[185px]
                      xl:h-[200px]">
          <div class="text-center font-medium non-italic w-auto
                      lg:text-[14px]
                      xl:text-[20px]">
            <br>
            <span class="text-white font-[500]">Our approach harmonizes local uniqueness and natural beauty with </span>
            <br>
            <span class="text-white font-[500]"> technology and sustainable practices. </span>
          </div>

          <br><br>
          <div align="center">
            <a href="#">
              <button class="w-[343px] h-[48px] rounded-[10px] bg-[#F1AE93] shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)] text-white
                lg:text-[14px] lg:w-[223px] lg:h-[38px] hover:bg-[#eea182]"
                align="center">
                Watch Our Documentary
              </button>
            </a>
          </div>
        </div>
      </div>

      <!-- MOBILE -->
      <div class="flex w-full flex-col 
                    lg:hidden 
                    xl:hidden 
                    min-[412px]:block
                    min-[390px]:block
                    min-[320px]:block">
        <div class="mt-[40px] h-[160px] bg-no-repeat bg-cover bg-[url('https://bumikadaka.com/resources/img/mobile/documentary-mobile.png')]">
          <div class="text-center font-medium non-italic w-auto">
            <br>
            <span class=" text-white font-[500] 
                            min-[412px]:text-[10px]
                            min-[390px]:text-[10px]
                            min-[320px]:text-[10px]">
              Our approach harmonizes local uniqueness and natural </span>
          </div>
          <div>
            <span class=" text-white font-[500] 
                            min-[412px]:text-[10px]
                            min-[390px]:text-[10px]
                            min-[320px]:text-[10px]">
              beauty with technology and sustainable practices. </span>
          </div>
          <br>
          <div align="center">
            <a href="#">
              <button align="center"
                class="w-[200px] h-[28px] rounded-[10px] bg-[#F1AE93] shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)] text-white text-[12px]">
                Watch Our Documentary
              </button>
            </a>
          </div>
        </div>
      </div>
      <!-- END MOBILE -->
      <!-- END DOCUMENTARY -->

      <!-- MOVING IMAGE -->
      <div class="flex w-full flex-col hidden
                  sm:block">
        <div class="mt-[90px]">
          <div class="w-full grid grid-cols-2">
            <a href="#">
              <img class="w-full hover:brightness-50 hover:duration-400" src="https://bumikadaka.com/resources/img/home/doc-image-real.png" alt="forest hills hotel ciwidey" />
            </a>
            <a href="#">
              <img class="w-full hover:brightness-50 hover:duration-400" src="https://bumikadaka.com/resources/img/home/doc-image-real-1.png" alt="sadesa restaurant" />
            </a>
          </div>
        </div>
      </div>


      <!-- MOBILE -->
      <div class="flex w-full flex-col mt-[1em]
                    sm:hidden 
                    min-[320px]:block">
        <img class="w-full" src="https://bumikadaka.com/resources/img/mobile/moving-image-top.png" alt="moving top" />
        <img class="w-full" src="https://bumikadaka.com/resources/img/mobile/moving-image-bottom.png" alt="moving bottom" />
      </div>
      <!-- END MOBILE -->
      <!-- END MOVING IMAGE -->

      <!-- ANNUAL REPORT -->
      <div class="flex w-full flex-col hidden
                  lg:block 
                  xl:block">
        <div class="mt-[80px]">
          <div class="flex items-center justify-center">
            <div class="pr-[50px] mt-[60px] w-[40%] 
                        lg:w-[45%] lg:mt-[0px]
                        xl:w-[40%] xl:mt-[30px]">
              <div class="text-left">
                <span class="text-[51px] font-bold leading-normal text-[#2F2E2E]
                              lg:text-[32px]
                              xl:text-[42px]">Annual Report</span>
              </div>
              <br><br>
              <p class="text-[#2F2E2E] text-[24px] text-justify non-italic font-normal
                        lg:text-[14px]
                        xl:text-[20px]">
                Our purpose is to provide True Hospitality for Good. It brings our brands to life, shapes our culture and represents a commitment to make a difference to our people, guests and communities, and to protect the world around us. With strong stakeholder engagement, together we work towards common goals that help create shared value for all.
              </p>

              <br><br>
              <div class="text-[#2F2E2E] text-[24px] non-italic font-bold text-left
                          lg:text-[14px]
                          xl:text-[20px] hover:text-[#eea182]">
                <a href="">Download Annual Report</a>
              </div>
            </div>
            <div class="m-0">
              <img class="w-[500px] h-auto hover:scale-105 ease-in-out duration-300" src="https://bumikadaka.com/resources/img/home/annual-report.png" alt="">
            </div>
          </div>
        </div>
      </div>

      <!-- MOBILE -->
      <div class="flex w-full flex-col block
                    lg:hidden 
                    xl:hidden">
        <div class="mt-[20px]">
          <img src="https://bumikadaka.com/resources/img/mobile/annual-report-mobile.png" class="w-full">
        </div>
        <div class="h-[92px] text-justify">
          <div class="w-full" style="padding: 1em 1em 0 1em">
            <span class="text-[16px] font-bold">Annual Report</span>
          </div>
          <div class="w-full" style="padding: 0 1em">
            <p class="text-[9px]">Our purpose is to provide True Hospitality for Good. It brings our brands to life, shapes our culture and represents a commitment to make a difference to our people, guests and communities, and to protect the world around us. With strong stakeholder engagement, together we work towards common goals that help create shared value for all.</p>
          </div>
          <div class="w-full" style="padding: 0 1em">
            <span class="text-[9px] font-bold">Download Annual Report</span>
          </div>
        </div>
      </div>
      <!-- END MOBILE -->
      <!-- END ANNUAL REPORT -->

      <!-- FEATURED -->
      <div class="flex w-full flex-col">
        <div class="mt-[30px]">
          <div class="mt-[90px] bg-[#EFAE93] w-full">
            <div class="p-12">

              <div>
                <div class="w-[100%] text-left mt-[20px]">
                  <span class="text-white text-[51px] font-[700]
                              lg:text-[34px]">Featured</span>
                </div>

                <div class="gap-8 flex overflow-auto h-[500px] lg:h-auto">
                  <div class="w-full grid justify-center">
                    <a href="#">
                      <div class="w-[100%] text-left mt-[40px]">
                        <div class="w-[200px] sm:w-[400px] h-[298px]">
                          <img src="https://bumikadaka.com/resources/img/home/feature-1a.jpg" alt=""
                            class="h-[190px] w-full object-cover object-bottom hover:scale-105 ease-in-out duration-300">

                          <div class="mt-[20px] text-white text-[18px] sm:text-[28px] font-[700] lg:text-[12px]">
                            Bumi Kadaka at Demo Day KreatIPO 2024
                          </div>
                          <div class="mt-[20px] text-white text-[12px] sm:text-[17px]  font-normal text-justify lg:text-[12px] lg:mt-[10px]">
                            Bumi Kadaka had the honor of participating in the Bursa Efek Indonesia Pitching Day, an event aimed at showcasing promising companies to potential investors and stakeholders. This event ...
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="w-full grid justify-center">
                    <a href="#">
                      <div class="w-[100%] text-left mt-[40px]">
                        <div class="w-[200px] sm:w-[400px] h-[298px]">
                          <img src="https://bumikadaka.com/resources/img/home/feature-2.png" alt=""
                            class="h-[190px] w-full object-cover object-bottom hover:scale-105 ease-in-out duration-300">

                          <div class="mt-[20px] text-white text-[18px] sm:text-[28px] font-[700] lg:text-[12px]">
                            Lobby Lounge
                          </div>
                          <div class="mt-[20px] text-white text-[12px] sm:text-[17px]  font-normal text-justify lg:text-[12px] lg:mt-[10px]">
                            An elegant setting to savor delicious pastries, coffee or tea in the morning and also popular spot in the evening to enjoy creative mocktail
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="w-full grid justify-center">
                    <a href="#">
                      <div class="w-[100%] text-left mt-[40px]">
                        <div class="w-[200px] sm:w-[400px] h-[298px]">
                          <img src="https://bumikadaka.com/resources/img/home/feature-3.png" alt=""
                            class="h-[190px] w-full object-cover object-bottom hover:scale-105 ease-in-out duration-300">

                          <div class="mt-[20px] text-white text-[18px] sm:text-[28px] font-[700] lg:text-[12px]">
                            Playground
                          </div>
                          <div class="mt-[20px] text-white text-[12px] sm:text-[17px]  font-normal text-justify lg:text-[12px] lg:mt-[10px]">
                            Have a good time! in an outdoor playground with beautiful views. Our outdoor playground is equipped with slides, trampolines, climbing
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END FEATURED -->

      <?php include 'footer.php' ?>

    </div>
  </div>
</body>

</html>