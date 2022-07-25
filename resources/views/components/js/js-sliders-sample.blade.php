<div class="bg-gray-200 min-h-screen flex items-center justify-center">
    <style>
        .swiper-button-prev {
            color: black;
        }

        .swiper-button-next {
            color: #000;
            color: black;
            /* background-image: url('{{ asset('images/about/free.png') }}'); */
        }
    </style>
    <div class="bg-gray-200 min-h-screen flex items-center justify-center px-[100px] w-full max-w-[1440px]">
        <div class="swiper mySwiper flex items-center justify-center w-full">
            <div class="swiper-wrapper w-full">
                <div class="swiper-slide w-[1440px]">
                    <img src="{{ asset('images/about/1.png')  }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/article/1.png')  }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/detail/1.png')  }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/detail/1.png')  }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/detail/1.png')  }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/detail/1.png')  }}" alt="">
                </div>
            </div>
            {{-- <img src="{{ asset('images/about/free.png') }}" alt=""> --}}
            <div class="swiper-button-next">
            </div>
            <div class="swiper-button-prev">
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
{{-- Popup button when input text is focused --}}
<div class="mt-12 w-full flex justify-center items-center">
    <div class="search-container flex flex-col w-[200pxs]">
        <input class="bg-gray-300 py-12" type="text" placeholder="Search for something">
        <button class="p-6 border-4 border-red-400 bg-red-400">Search</button>
    </div>
    <style>
        button {
            display: none
        }

        input:not(:placeholder-shown)+button {
            display: block
        }
    </style>
</div>