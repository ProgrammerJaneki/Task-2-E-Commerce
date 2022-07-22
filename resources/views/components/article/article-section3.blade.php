<div class="bg-white w-full xl:grid 2xl:place-items-center">
    <section class="px-6 md:px-[100px] max-w-[1440px] grid place-items-center pb-[46px] md:pb-[86px]">
        <!-- Header -->
        <div class="flex flex-col sm:w-full ">
            <span class="font-bold text-[0.88rem] md:text-[1.125rem] text-[#FFB23F] leading-[1.3]">Trending topics</span>
            <span class="font-bold text-[1.5rem] md:text-[2.75rem] text-[#151411] mt-[8px] md:mt-[14px] leading-[1.3]">Popular last week</span>
        </div>
        <!-- Filter -->
        <div class="flex justify-between w-full sm:max-w-[1440px] overflow-hidden items-center mt-[28px] md:mt-[30px] max-w-[327px] ">
            <!-- Left  -->
            <div class="flex flex-row font-bold text-[0.88rem] overflow-hidden w-full md:text-[1.125rem] leading-[1.3]">
                <span class="bg-[#F9F9F9] whitespace-nowrap text-[#151411] py-[11px] md:py-[16px] px-[14px] md:px-[20px]">All</span>
                <span class="text-[#AFADB5] whitespace-nowrap ml-[15px] md:ml-[30px] py-[11px] md:py-[16px] px-[14px] md:px-[20px]">Tips and Trick</span>
                <span class="text-[#AFADB5] whitespace-nowrap ml-[15px] md:ml-[30px] py-[11px] md:py-[16px] px-[14px] md:px-[20px]">Interior Design</span>
                <span class=" text-[#AFADB5] whitespace-nowrap ml-[15px] md:ml-[30px] py-[11px] md:py-[16px] px-[14px] md:px-[20px]">Design Inspiration</span>
                <span class="text-[#AFADB5] whitespace-nowrap ml-[15px] md:ml-[30px] py-[11px] md:py-[16px] px-[14px] md:px-[20px]">Color Guide</span>
            </div>
            <!-- Right -->
            <button class="hidden md:flex flex-row text-[#151411] py-[11px] md:py-[16px] px-[14px] md:px-[20px]">
                <svg class="w-6 md:w-8 h-6 md:h-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M6 8a1 1 0 0 1 1-1h10a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Zm2 4a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm3 3a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2h-2Z"/>
                </svg>
                <span class="text-[0.88rem] md:text-[1.125rem]">Filter</span>
            </button>
        </div>
        <!-- 3 rows Desktop and Mobile View -->
        <div class="grid grid-rows-3 place-items-center w-full mt-[20px] md:mt-[50px] gap-[20px] md:gap-[30px]">
            <!-- Item 1 -->
            <div class="flex row ml-[14px] max-w-[327px] sm:max-w-full">
                <img class="max-w-[110px] md:max-w-[210px] max-h-[110px] md:max-h-[210px]" src="{{ asset('images/article/Tips.png') }}" alt="img">
                <div class="flex flex-col ml-[14px] md:ml-[26px]">
                    <span class="font-black text-[0.88rem] lg:text-[1.125rem] text-[#AFADB5] leading-[1.8]">Tips and Trick</span>
                    <span class="font-bold text-[1rem] lg:text-[1.65rem] text-[#151411] leading-[1.3] mt-[4px] md:mt-[10px]">Beautiful and Functional Home Terrace Decoration</span>
                    <span class="hidden sm:block font-black overflow-hidden text-[0.88rem] lg:text-[1.125rem] mt-[14px] text-[#AFADB5] leading-[1.8] ">
                        Home terrace decorations are part of every decoration or overall home design. Interiordesign.id – If by chance your
                        house has enough space or space.
                    </span>
                    <div class="flex flex-row items-center mt-[10px] md:mt-[21px]">
                        <img class="w-[20px] md:w-[28px] h-[20px] md:h-[28px]" src="{{ asset('images/article/morgan.png') }}" alt="img">
                        <span class="font-bold text-[0.75rem] md:text-[0.88rem] text-[#151411] leading-[1.3] ml-[8px] md:ml-[10px] mr-[24px] md:mr-[15px]">By Morgan Goldberg</span>
                        <span class="hidden sm:block font-black text-[0.75rem] md:text-[0.88rem] text-[#AFADB5] leading-[1.8]">Wednesday, 22 January 2022</span>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="flex row ml-[14px] max-w-[327px] sm:max-w-full">
                <img class="max-w-[110px] md:max-w-[210px] max-h-[110px] md:max-h-[210px]" src="{{ asset('images/article/design.png') }}" alt="img">
                <div class="flex flex-col ml-[14px] md:ml-[26px]">
                    <span class="font-black text-[0.88rem] lg:text-[1.125rem] text-[#AFADB5] leading-[1.8]">Design Inspration</span>
                    <span class="font-bold text-[1rem] lg:text-[1.65rem] text-[#151411] leading-[1.3] mt-[4px] md:mt-[10px]">Beautiful and Functional Home Terrace Decoration</span>
                    <span class="hidden sm:block font-black text-[0.88rem] lg:text-[1.125rem] mt-[14px] text-[#AFADB5] leading-[1.8] ">
                        Home terrace decorations are part of every decoration or overall home design. Interiordesign.id – If by chance your
                        house has enough space or space.
                    </span>
                    <div class="flex flex-row items-center mt-[10px] md:mt-[21px]">
                        <img class="w-[20px] md:w-[28px] h-[20px] md:h-[28px]" src="{{ asset('images/article/rizal.png') }}" alt="img">
                        <span class="font-bold text-[0.75rem] md:text-[0.88rem] text-[#151411] leading-[1.3] ml-[8px] md:ml-[10px] mr-[24px] md:mr-[15px]">By Rizal Ahmad</span>
                        <span class="hidden sm:block font-black text-[0.75rem] md:text-[0.88rem] text-[#AFADB5] leading-[1.8]">Wednesday, 22 January 2022</span>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="flex row ml-[14px] max-w-[327px] sm:max-w-full">
                <img class="max-w-[110px] md:max-w-[210px] max-h-[110px] md:max-h-[210px]" src="{{ asset('images/article/color.png') }}" alt="img">
                <div class="flex flex-col ml-[14px] md:ml-[26px]">
                    <span class="font-black text-[0.88rem] md:text-[1.125rem] text-[#AFADB5] leading-[1.8]">Color Guide</span>
                    <span class="font-bold text-[1rem] md:text-[1.65rem] text-[#151411] leading-[1.3] mt-[4px] md:mt-[10px]">Beautiful and Functional Home Terrace Decoration</span>
                    <span class="hidden sm:block font-black text-[0.88rem] md:text-[1.125rem] mt-[14px] text-[#AFADB5] leading-[1.8] ">
                        Home terrace decorations are part of every decoration or overall home design. Interiordesign.id – If by chance your
                        house has enough space or space.
                    </span>
                    <div class="flex flex-row items-center mt-[10px] md:mt-[21px]">
                        <img class="w-[20px] md:w-[28px] h-[20px] md:h-[28px]" src="{{ asset('images/article/filipus.png') }}" alt="img">
                        <span class="font-bold text-[0.75rem] md:text-[0.88rem] text-[#151411] leading-[1.3] ml-[8px] md:ml-[10px] mr-[24px] md:mr-[15px]">By Filipus Pendi</span>
                        <span class="hidden sm:block font-black text-[0.75rem] md:text-[0.88rem] text-[#AFADB5] leading-[1.8]">Wednesday, 22 January 2022</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Load More -->
        <button class="mt-[30px] md:mt-[50px] py-[15px] px-[40px]">
            <span class="font-bold text-[1rem] md:text-[1.125rem] text-[#151411] leading-[1.3]">Load More</span>
        </button>
        <!-- Subscribe -->
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