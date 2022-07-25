<div class="bg-white w-full sticky top-0 z-50">
    <!-- 1. NAGIVATION BAR -->
    <nav x-data="{ open: false }"
        class="bg-white border-b-2 sticky top-0 border-[#F3F3F3] lg:flex justify-between mx-auto text-[#151B33]  max-w-[375px] sm:max-w-[1440px] py-[21px] lg:py-11 px-6 md:px-[100px]">
        <!-- Mobile View -->
        <div class="flex justify-between items-center ">
            <!-- Left Side -->
            <div class="flex gap-2 items-center">
                <!-- Logo -->
                <div class="flex flex-col">
                    <a href="{{route('home')}}">
                        <img src="{{ asset('images/landingImages/logo1-1.png') }}" alt="img">
                        <img src="{{ asset('images/landingImages/logo1-2.png') }}" alt="img">
                        <img src="{{ asset('images/landingImages/logol-3.png') }}" alt="img">
                    </a>
                </div>
                <a href="{{route('home')}}">
                    <img class="pl-2.5 w-[57px] h-[14px]" src="{{ asset('images/landingImages/logo-name.png') }}"
                        alt="img">
                </a>
            </div>
            <!-- Mobile Menu Button -->
            <div class="flex lg:hidden">
                <button type="button" aria-label="toggle menu" @click='open = !open'
                    class="cursor-pointer focus:outline-none">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <rect width="18" height="2" x="3" y="11" fill="currentColor" rx=".95" ry=".95" />
                        <rect width="18" height="2" x="3" y="16" fill="currentColor" rx=".95" ry=".95" />
                        <rect width="18" height="2" x="3" y="6" fill="currentColor" rx=".95" ry=".95" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- Desktop View -->
        <!-- Middle -->
        <div :class="{'flex': open, 'hidden': !open}" class="hidden lg:flex items-center">
            <ul class="lg:flex items-center font-black text-lg gap-14">
                <li><a class="{{ Request::is('products') ? 'lg:py-11 lg:border-b-4 lg:border-[#518581] text-[#518581]' : 'lg:py-11 hover:lg:border-b-4 hover:text-[#518581] hover:lg:border-[#518581] transition-all ease-linear duration-150' }} "
                        href="{{route('products')}}">Product</a></li>
                <li><a class="{{ Request::is('services') ? 'lg:py-11 lg:border-b-4 lg:border-[#518581] text-[#518581]' : 'lg:py-11 hover:lg:border-b-4 hover:text-[#518581] hover:lg:border-[#518581] transition-all ease-linear duration-150' }} "
                        href="{{ route('services-landing-page') }}">Services</a></li>
                <li><a class="{{ Request::is('article') ? 'lg:py-11 lg:border-b-4 lg:border-[#518581] text-[#518581]' : 'lg:py-11 hover:lg:border-b-4 hover:text-[#518581] hover:lg:border-[#518581] transition-all ease-linear duration-150' }} "
                        href="{{ route('article-landing-page') }}">Article</a></li>
                <li><a class="{{ Request::is('about') ? 'lg:py-11 lg:border-b-4 lg:border-[#518581] text-[#518581]' : 'lg:py-11 hover:lg:border-b-4 hover:text-[#518581] hover:lg:border-[#518581] transition-all ease-linear duration-150' }} "
                        href="{{ route('about-landing-page') }}">About Us </a></li>
            </ul>
        </div>
        <!-- Riight  -->
        <div :class="{'flex': open, 'hidden': !open }" class="hidden lg:flex items-center ">
            <div class="flex flex-col gap-0 lg:gap-6 lg:flex-row">
                <a class="{{ Request::is('detail') ? 'text-[#518581]' : 'hover:text-[#518581]' }}"
                    href="{{ route('edit-section1') }}">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32"
                            d="M80 176a16 16 0 0 0-16 16v216c0 30.24 25.76 56 56 56h272c30.24 0 56-24.51 56-54.75V192a16 16 0 0 0-16-16Zm80 0v-32a96 96 0 0 1 96-96h0a96 96 0 0 1 96 96v32" />
                    </svg>
                </a>
                <a class="{{ Request::is('detail') ? 'text-[#518581]' : 'hover:text-[#518581]' }}"
                    href="{{ route('detail-landing-page') }}">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 2a5 5 0 1 0 5 5a5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3a3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z" />
                    </svg>
                </a>
                </svg>
            </div>
        </div>
    </nav>
</div>