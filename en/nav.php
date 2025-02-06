<!-- NAV BAR -->
<header class="navbar fixed inset-x-0 top-0 m-0 z-50 shadow-[0px_1px_4px_rgba(0,0,0,0.25)] bg-white
            min-[412px]:w-[100%] min-[412px]:block
            min-[390px]:w-[100%] min-[390px]:block
            min-[320px]:w-[100%] min-[320px]:block">
    <div class="relative inset-x-0 top-0 z-50 h-[28px] bg-[#307060] w-full h-auto
                min-[412px]:w-[100%] min-[412px]:block
                min-[390px]:w-[100%] min-[390px]:block
                min-[320px]:w-[100%] min-[320px]:block">
        <div class="text-[#FFF] text-center text-[14px] font-normal font-[400] leading-normal">
            <div class="w-full flex justify-end pr-8 lg:pr-14">
                <!-- <div class="">IN | EN</div> -->
            </div>
        </div>
    </div>

    <!-- WEB -->
    <nav aria-label="Global"
        class="flex items-center p-6 w-full m-auto max-[1023px]:hidden">
        <div class="w-full flex justify-between">
            <div class="w-full flex items-center">
                <a href="https://bumikadaka.com/index.php">
                    <img class="h-8 h-[40.117px]" src="https://bumikadaka.com/resources/img/logo/logo-bumi-kadaka.svg" alt="">
                </a>
            </div>
            <div class="w-full">
                <ul class="flex flex-nowrap items-center justify-end font-medium text-sm">
                    <li class="p-4 
                   lg:px-8">
                        <a class="text-slate-800 font-normal text-[15px] hover:text-[#EFAE93]" href="https://bumikadaka.com/index.php">Home</a>
                    </li>
                    <li class="p-4 
                    lg:px-8
                    relative flex items-center space-x-1"
                        x-data="{ open: false }"
                        @mouseenter="open = true"
                        @mouseleave="open = false" style="margin-right: -20px;">
                        <a class="text-slate-800 font-normal text-[15px] cursor-default hover:text-[#EFAE93]"
                            href="#0"
                            :aria-expanded="open">About Us</a>

                        <button class="shrink-0 p-1"
                            :aria-expanded="open"
                            @click.prevent="open = !open">
                        </button>
                        <ul style="margin-left: 80px;"
                            class="origin-top-right absolute top-full left-1/2 -translate-x-1/2 min-w-[240px] bg-white border border-slate-200 p-2 rounded-lg shadow-xl mt-[25px] [&[x-cloak]]:hidden"
                            x-show="open"
                            x-transition:enter="transition ease-out duration-200 transform"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-out duration-200"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            x-cloak
                            @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
                            <li>
                                <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="https://bumikadaka.com/en/about-us/history.php">
                                    <span class="whitespace-nowrap">History</span>
                                </a>
                            </li>
                            <li>
                                <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="https://bumikadaka.com/en/about-us/vision-mission.php">
                                    <span class="whitespace-nowrap">Vision Mission</span>
                                </a>
                            </li>
                            <li>
                                <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="https://bumikadaka.com/en/about-us/history.php/#milestone">
                                    <span class="whitespace-nowrap">Milestone</span>
                                </a>
                            </li>
                            <li>
                                <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="https://bumikadaka.com/en/about-us/awards.php">
                                    <span class="whitespace-nowrap">Awards</span>
                                </a>
                            </li>
                            <li>
                                <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="https://bumikadaka.com/en/about-us/structure-organization.php">
                                    <span class="whitespace-nowrap">Structure Organization</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="p-4 
                    lg:px-8
                    relative flex items-center space-x-1"
                        x-data="{ open: false }"
                        @mouseenter="open = true"
                        @mouseleave="open = false" style="margin-right: -20px;">

                        <a class="text-slate-800 font-normal text-[15px] cursor-default hover:text-[#EFAE93]"
                            href="#0"
                            :aria-expanded="open">Our Brands</a>

                        <button class="shrink-0 p-1"
                            :aria-expanded="open"
                            @click.prevent="open = !open">
                        </button>

                        <ul style="margin-left: 75px;"
                            class="origin-top-right absolute top-full left-1/2 -translate-x-1/2 min-w-[240px] bg-white border border-slate-200 p-2 rounded-lg shadow-xl mt-[25px] [&[x-cloak]]:hidden"
                            x-show="open"
                            x-transition:enter="transition ease-out duration-200 transform"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-out duration-200"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            x-cloak
                            @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
                            <li>
                                <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="https://bumikadaka.com/en/our-brands/hotels.php">
                                    <span class="whitespace-nowrap">Hotels</span>
                                </a>
                            </li>
                            <li>
                                <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="https://bumikadaka.com/en/our-brands/restaurants.php">
                                    <span class="whitespace-nowrap">Restaurant</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="p-4 
                    lg:px-8">
                        <a class="text-slate-800 font-normal hover:text-[#EFAE93]" href="https://bumikadaka.com/en/contact-us.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END WEB -->

    <!-- MOBILE -->
    <?php include 'nav-mobile.php' ?>
    <!-- END MOBILE -->

</header>
<!-- END NAV BAR -->