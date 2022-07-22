<div class="bg-white w-full grid place-items-center">
    <section class="px-6 md:px-[100px] max-w-[1440px] mb-[100px] md:mb-[148px]">
        <div class="flex flex-col text-center">
            <span class="font-bold text-[0.88rem] md:text-[1.125rem] text-[#FFB23F] leading-[1.3]">Similar Topics</span>
            <span class="font-bold text-[1.38rem] md:text-[2.75rem] text-[#151411] mt-[8px] md:mt-[14px] leading-[1.3]">Maybe you're interested</span>
        </div>
        <!-- 3 Pics -->
        <div class="grid md:grid-cols-3 gap-[20px] md:gap-[29px] mt-[30px] md:mt-[50px]">
            <!--Item 1  -->
            <div class="flex flex-col bg-white max-w-[394px] ">
                <img class="" src="{{ asset('images/detail/4.png') }}" alt="img">
                <a class="mt-[14px] lg:mt-[26px]" href="{{ route('product-detail') }}">
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] leading-[1.8]">Tips and Trick</span>
                </a>
                <span class="font-bold text-sm lg:text-[1.55rem] text-[#151411] mt-[6px] lg:mt-[14px]">Create a non-monotonous and..</span>
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[4px] lg:mt-[6px] leading-[1.8] whitespace-nowrap overflow-hidden text-ellipsis">Quoted from The Healthy Home Economist, a study in 1932 stated that color doesn't..</span>
                <div class="flex flex-row mt-[12px] md:mt-[16px]">
                    <img src="{{ asset('images/detail/7.png') }}" alt="">
                    <span class="font-bold text-[#151411] ml-[8px] md:ml-[10px] text-[0.75rem] md:text-[0.88rem]">By Jenny</span>
                    <span class="font-black text-[0.75rem] md:text-[0.88rem] ml-[15px] md:ml-[24px] text-[#AFADB5]">Tuesday, 17 May 2022</span>
                </div>
            </div>
            <!--Item 2  -->
            <div class="flex flex-col bg-white max-w-[394px] ">
                <img class="" src="{{ asset('images/detail/5.png') }}" alt="img">
                <a class="mt-[14px] lg:mt-[26px]" href="{{ route('product-detail') }}">
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] leading-[1.8]">Chair</span>
                </a>
                <span class="font-bold text-sm lg:text-[1.55rem] text-[#151411] mt-[6px] lg:mt-[14px]">White Aesthetic Chair</span>
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[4px] lg:mt-[6px] leading-[1.8] whitespace-nowrap overflow-hidden text-ellipsis">Combination of wood and wool </span>
                <div class="flex flex-row mt-[12px] md:mt-[16px]">
                    <img src="{{ asset('images/detail/8.png') }}" alt="">
                    <span class="font-bold text-[#151411] ml-[8px] md:ml-[10px] text-[0.75rem] md:text-[0.88rem]">By Filipus Pendi</span>
                    <span class="font-black text-[0.75rem] md:text-[0.88rem] ml-[15px] md:ml-[24px] text-[#AFADB5]">Saturday, 29 February 2022</span>
                </div>
            </div>
            <!--Item 3  -->
            <div class="flex flex-col bg-white max-w-[394px] ">
                <img class="" src="{{ asset('images/detail/6.png') }}" alt="img">
                <a class="mt-[14px] lg:mt-[26px]" href="{{ route('product-detail') }}">
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] leading-[1.8]">Design Tips</span>
                </a>
                <span class="font-bold text-sm lg:text-[1.55rem] text-[#151411] mt-[6px] lg:mt-[14px]">Modern Minimalist Home..</span>
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[4px] lg:mt-[6px] leading-[1.8] whitespace-nowrap overflow-hidden text-ellipsis">Home terrace decorations are part of every decoration or overall home design..</span>
                <div class="flex flex-row mt-[12px] md:mt-[16px]">
                    <img src="{{ asset('images/detail/9.png') }}" alt="">
                    <span class="font-bold text-[#151411] ml-[8px] md:ml-[10px] text-[0.75rem] md:text-[0.88rem]">By Rizal Ahmad</span>
                    <span class="font-black text-[0.75rem] md:text-[0.88rem] ml-[15px] md:ml-[24px] text-[#AFADB5]">Wednesday, 17 March 2022</span>
                </div>
            </div>
        </div>

        <div class="place-items-left max-w-[327px] sm:max-w-full flex flex-col md:flex-row md:justify-between w-full mt-[100px] md:mt-[180px]">
            <span class="font-bold text-[1.5rem] md:text-[2.2rem] lg:text-[2.8rem] text-[#151411] leading-[1.3]">Subscribe our newsletter</span>
            <button class="flex max-h-[53px] justify-center items-center bg-[#518581] text-white max-w-[180px]  md:max-w-[201px] mt-[22px] md:mt-0 py-[15px] px-[35px] md:px-[30px] whitespace-nowrap">
                <span>Let's Talk</span>
                <svg class="md:ml-[18px] ml-[10px] w-6 md:w-6 h-6 md:h-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"  preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m22 6l8 10l-8 10m8-10H2"/>
                </svg>
            </button>
        </div>
    </section>
</div>