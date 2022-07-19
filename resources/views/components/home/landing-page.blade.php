<div class="bg-white w-full">
    <!-- 1. NAGIVATION BAR -->
    <nav x-data="{ open: false }"
        class="border-b-2 border-[#F3F3F3] lg:flex justify-between mx-auto text-[#151B33]  max-w-[375px] md:max-w-[1440px] py-[21px] lg:py-11 px-6 md:px-[100px]">
    <!-- Mobile View -->
        <div class="flex justify-between items-center ">
            <!-- Left Side -->
            <div class="flex gap-2 items-center">
                <!-- Logo -->
                <div class="flex flex-col">
                    <img src="{{ asset('images/landingImages/logo1-1.png') }}" alt="img">
                    <img src="{{ asset('images/landingImages/logo1-2.png') }}" alt="img">
                    <img src="{{ asset('images/landingImages/logol-3.png') }}" alt="img">
                </div>
                <img class="pl-2.5 w-[57px] h-[14px]" src="{{ asset('images/landingImages/logo-name.png') }}" alt="img">
            </div>
            <!-- Mobile Menu Button -->
            <div class="flex lg:hidden">
                <button
                    type="button"
                    aria-label="toggle menu"
                    @click='open = !open'
                    class="cursor-pointer focus:outline-none">
                    <svg class="w-8 h-8"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"  preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><rect width="18" height="2" x="3" y="11" fill="currentColor" rx=".95" ry=".95"/><rect width="18" height="2" x="3" y="16" fill="currentColor" rx=".95" ry=".95"/><rect width="18" height="2" x="3" y="6" fill="currentColor" rx=".95" ry=".95"/>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Desktop View -->
        <!-- Middle -->
        <div :class="{'flex': open, 'hidden': !open}" class="hidden lg:flex items-center">
                <ul class="lg:flex items-center font-black text-lg gap-14">
                    <li><a href="">Product</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Article</a></li>
                    <li><a href="">About Us </a></li>
                </ul>
        </div>
        <!-- Riight  -->
        <div :class="{'flex': open, 'hidden': !open }"  class="hidden lg:flex items-center ">
            <div class="flex flex-col gap-0 lg:gap-6 lg:flex-row">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M80 176a16 16 0 0 0-16 16v216c0 30.24 25.76 56 56 56h272c30.24 0 56-24.51 56-54.75V192a16 16 0 0 0-16-16Zm80 0v-32a96 96 0 0 1 96-96h0a96 96 0 0 1 96 96v32"/>
                </svg>
            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2a5 5 0 1 0 5 5a5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3a3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"/>
            </svg>
            </div>
        </div>
    </nav>

    <!-- 2. DISCOVER -->

</div>