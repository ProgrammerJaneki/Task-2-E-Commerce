<div class="bg-white w-full sticky top-0 z-50">
    <nav x-data="{open:false}"
        class="bg-green-400 border-b-2 sticky top-0 border-[#F3F3F3] lg:flex justify-between mx-auto text-[#151B33]  max-w-[375px] sm:max-w-[1440px] py-[21px] lg:py-11 px-6 md:px-[100px]">
        {{-- Mobile View | Left --}}
        <div class="flex justify-between items-center ">
            {{-- Left Side --}}
            <a class="flex items-center" href="{{ route('home') }}">
                <div class="flex  items-center space-x-3">
                    {{-- Logo --}}
                    <div class="flex flex-col space-x-3 items-center">
                        <img src="{{ asset('images/landingImages/logo1-1.png') }}" alt="img">
                        <img src="{{ asset('images/landingImages/logo1-2.png') }}" alt="img">
                        <img src="{{ asset('images/landingImages/logol-3.png') }}" alt="img">
                    </div>
                    <span>Lalasia</span>
                </div>
            </a>
            {{-- Mobile View Menu Bar --}}
            <div class="flex lg:hidden">
                <button class="cursor-pointer focus:outline-none" type="button" @click='open =!open'
                    aria-label="toggle-menu">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
                        viewBox="0 0 24 24">
                        <path fill="currentColor" d="M21 18h-9v-2h9v2Zm0-5H3v-2h18v2Zm0-5H3V6h18v2Z" />
                    </svg>
                </button>
            </div>
        </div>
        {{-- Middle --}}
        <div :class="{'flex': open, 'hidden': !open}" class="hidden lg:flex items-center">
            <ul class="flex items-center space-x-[3.75rem]">
                <li><a href="{{ route('products') }}">Product</a></li>
                <li><a href="{{ route('services-landing-page') }}">Services</a></li>
                <li><a href="{{ route('article-landing-page')  }}">Article</a></li>
                <li><a href="{{ route('about-landing-page')  }}">About Us</a></li>
            </ul>
        </div>
        {{-- Right --}}
        <div :class="{'flex': open, 'hidden': !open}" class="hidden lg:flex items-center space-x-6">
            <a href="{{ route('edit-section1') }}">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="32"
                        d="M80 176a16 16 0 0 0-16 16v216c0 30.24 25.76 56 56 56h272c30.24 0 56-24.51 56-54.75V192a16 16 0 0 0-16-16Zm80 0v-32a96 96 0 0 1 96-96h0a96 96 0 0 1 96 96v32" />
                </svg>
            </a>
            <a href="{{ route('detail-landing-page') }}">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M12 2a5 5 0 1 0 5 5a5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3a3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z" />
                </svg>
            </a>
        </div>
    </nav>
</div>