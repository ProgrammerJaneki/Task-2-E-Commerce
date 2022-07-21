<div class="bg-white w-full grid place-items-center">
    <section class="px-6 md:px-[100px] max-w-[1440px] pb-[100px]">
        <!-- Search Bar with Filter -->
        <div class="flex items-center w-full">
            <!-- Search Box -->
            <div class="flex justify-between p-[8px]  md:p-[15px] items-center w-full shadow-lg">
                <!-- Left -->
                <div class="flex ">
                    <svg class="text-[#AFADB5] w-6 lg:w-8 h-6 lg:h-8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"  preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path fill="currentColor" d="m795.904 750.72l124.992 124.928a32 32 0 0 1-45.248 45.248L750.656 795.904a416 416 0 1 1 45.248-45.248zM480 832a352 352 0 1 0 0-704a352 352 0 0 0 0 704z"/>
                    </svg>
                    <input class="font-black text-[0.75rem] md:text-[1.15rem] ml-[0.75rem] md:ml-[1.15rem] w-full md:w-[10rem] lg:w-[25rem] text-[#AFADB5] focus:border-none focus:outline-none leading-[1.8] type="text" placeholder="Search Property">
                    <!-- <input class="font-black text-[0.75rem] md:text-[1.15rem] ml-[0.75rem] md:ml-[1.15rem] text-[#AFADB5] leading-[1.8]" type="text">Search Property</input> -->
                </div>
                <!-- Right -->
                <button class="bg-[#518581] flex item-center py-[10px] md:py-[15px] px-[27px] md:px-[29px]">
                    <span class="font-bold text-[0.88rem] md:text-[1.15rem] text-white leading-[1.3]">Find Now</span>
                </button>
            </div>
            <!-- Filter Button -->
            <button class="hidden md:flex justify-between items-center md:py-[26px] ml-[20px] md:px-[50px] shadow-lg">
                <svg class="w-6 md:w-8 h-6 md:h-8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" d="M18 4H6c-1.105 0-2.026.91-1.753 1.98a8.018 8.018 0 0 0 4.298 5.238c.823.394 1.455 1.168 1.455 2.08v6.084a1 1 0 0 0 1.447.894l2-1a1 1 0 0 0 .553-.894v-5.084c0-.912.632-1.686 1.454-2.08a8.017 8.017 0 0 0 4.3-5.238C20.025 4.91 19.103 4 18 4z"/>
                </svg>
                <span class="font-black text-lg text-[#151411] leading-[1.8]">Filter</span>
            </button>
        </div>
        <!-- Header and Sort for Item Boxes -->
        <div class="bg-white flex justify-between mt-[30px] md:mt-[50px] mb-[21px] md:mb-[50px] items-center w-full ">
            <!-- Left -->
            <div class="flex items-center">
                <span class="font-bold text-[1.125rem] md:text-[2.75rem] text-[#151411] leading-[1.3]">Total Product</span>
                <!-- <div class="bg-[#F9F9F9] rounded-[20px] py-[5px] md:py-[2px] px-[6px] md:px-[10px]">
                    <span class="font-bold text-[0.75rem] md:text-[1rem] text-[#518581] leading-[1.3]">184</span>
                </div> -->
                <span class="bg-[#F9F9F9] rounded-[20px] font-bold py-[5px] md:py-[2px] px-[6px] md:px-[10px]] ml-[8px] md:ml-[10px] text-[#518581] leading-[1.3]">184</span>
            </div>
            <!-- Right -->
            <button class="hidden md:flex items-center py-[9px] px-[20px] shadow-lg">
                <svg class="w-6 md:w-8 h-6 md:h-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M6 8a1 1 0 0 1 1-1h10a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Zm2 4a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm3 3a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2h-2Z"/>
                </svg>
                <span class="font-black text-lg leading-[1.8]">Sort By</span>
            </but>
        </div>
        <!-- Container -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-rows-3 gap-[15px] lg:gap-[29px]">
            <!-- Item 1 -->
            <div class="flex flex-col bg-white max-w-[394px] ">
                <img class="max-w-[156px] max-h-[130px] md:max-w-[394px] lg:max-h-[360px]" src="{{ asset('images/products/1.png') }}" alt="img">
                <a class="mt-[14px] lg:mt-[26px]" href="{{ route('product-detail') }}">
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] leading-[1.8]">Chair</span>
                </a>
                <span class="font-bold text-sm lg:text-[1.55rem] text-[#151411] mt-[6px] lg:mt-[14px]">White Aesthetic Chair</span>
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[4px] lg:mt-[6px] leading-[1.8] whitespace-nowrap overflow-hidden text-ellipsis">Combination of wood and wool </span>
                <span class="font-bold text-sm md:text-2xl text-[#151411] mt-[12px] lg:mt-[18px] leading-[1.3]">$63.47</span>
            </div>
            <!-- Item 2 -->
            <div class="flex flex-col bg-white max-w-[394px] ">
                <img class="max-w-[156px] max-h-[130px] md:max-w-[394px] lg:max-h-[360px]" src="{{ asset('images/products/2.png') }}" alt="img">
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[14px] lg:mt-[26px] leading-[1.8]">Cupboard</span>
                <span class="font-bold text-sm lg:text-[1.55rem] text-[#151411] mt-[6px] lg:mt-[14px]">Wooden Cupboard 3 Row</span>
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[4px] lg:mt-[6px] leading-[1.8] whitespace-nowrap overflow-hidden text-ellipsis">Combination of wood and wool </span>
                <span class="font-bold text-sm md:text-2xl text-[#151411] mt-[12px] lg:mt-[18px] leading-[1.3]">$79.88</span>
            </div>
            <!-- Item 3 -->
            <div class="flex flex-col bg-white max-w-[394px] ">
                <img class="max-w-[156px] max-h-[130px] md:max-w-[394px] lg:max-h-[360px]" src="{{ asset('images/products/3.png') }}" alt="img">
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[14px] lg:mt-[26px] leading-[1.8]">Chair</span>
                <span class="font-bold text-sm lg:text-[1.55rem] text-[#151411] mt-[6px] lg:mt-[14px]">Minimalist Lounge Chair</span>
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[4px] lg:mt-[6px] leading-[1.8] whitespace-nowrap overflow-hidden text-ellipsis">Combination of wood and wool </span>
                <span class="font-bold text-sm md:text-2xl text-[#151411] mt-[12px] lg:mt-[18px] leading-[1.3]">$14.74</span>
            </div>
            <!-- Item 4 -->
            <div class="flex flex-col bg-white max-w-[394px] ">
                <img class="max-w-[156px] max-h-[130px] md:max-w-[394px] lg:max-h-[360px]" src="{{ asset('images/products/4.png') }}" alt="img">
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[14px] lg:mt-[26px] leading-[1.8]">Table</span>
                <span class="font-bold text-sm lg:text-[1.55rem] text-[#151411] mt-[6px] lg:mt-[14px]">Working Desk Setup</span>
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[4px] lg:mt-[6px] leading-[1.8] whitespace-nowrap overflow-hidden text-ellipsis">Combination of wood and wool </span>
                <span class="font-bold text-sm md:text-2xl text-[#151411] mt-[12px] lg:mt-[18px] leading-[1.3]">$47.90</span>
            </div>
            <!-- Item 5 -->
            <div class="flex flex-col bg-white max-w-[394px] ">
                <img class="max-w-[156px] max-h-[130px] md:max-w-[394px] lg:max-h-[360px]" src="{{ asset('images/products/5.png') }}" alt="img">
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[14px] lg:mt-[26px] leading-[1.8]">Cupboard</span>
                <span class="font-bold text-sm lg:text-[1.55rem] text-[#151411] mt-[6px] lg:mt-[14px]">Minimalist White Cupboard</span>
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[4px] lg:mt-[6px] leading-[1.8] whitespace-nowrap overflow-hidden text-ellipsis">Combination of wood and wool </span>
                <span class="font-bold text-sm md:text-2xl text-[#151411] mt-[12px] lg:mt-[18px] leading-[1.3]">$16.50</span>
            </div>
            <!-- Item 6 -->
            <div class="flex flex-col bg-white max-w-[394px] ">
                <img class="max-w-[156px] max-h-[130px] md:max-w-[394px] lg:max-h-[360px]" src="{{ asset('images/products/6.png') }}" alt="img">
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[14px] lg:mt-[26px] leading-[1.8]">Table</span>
                <span class="font-bold text-sm lg:text-[1.55rem] text-[#151411] mt-[6px] lg:mt-[14px]">Wooden Dining Table</span>
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[4px] lg:mt-[6px] leading-[1.8] whitespace-nowrap overflow-hidden text-ellipsis">Combination of wood and wool </span>
                <span class="font-bold text-sm md:text-2xl text-[#151411] mt-[12px] lg:mt-[18px] leading-[1.3]">$16.50</span>
            </div>
            <!-- Item 7 -->
            <div class="flex flex-col bg-white max-w-[394px] ">
                <img class="max-w-[156px] max-h-[130px] md:max-w-[394px] lg:max-h-[360px]" src="{{ asset('images/products/7.png') }}" alt="img">
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[14px] lg:mt-[26px] leading-[1.8]">Decoration</span>
                <span class="font-bold text-sm lg:text-[1.55rem] text-[#151411] mt-[6px] lg:mt-[14px]">White Minimalist Vase</span>
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[4px] lg:mt-[6px] leading-[1.8] whitespace-nowrap overflow-hidden text-ellipsis">Combination of wood and wool </span>
                <span class="font-bold text-sm md:text-2xl text-[#151411] mt-[12px] lg:mt-[18px] leading-[1.3]">$58.39</span>
            </div>
            <!-- Item 8 -->
            <div class="flex flex-col bg-white max-w-[394px] ">
                <img class="max-w-[156px] max-h-[130px] md:max-w-[394px] lg:max-h-[360px]" src="{{ asset('images/products/8.png') }}" alt="img">
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[14px] lg:mt-[26px] leading-[1.8]">Decoration</span>
                <span class="font-bold text-sm lg:text-[1.55rem] text-[#151411] mt-[6px] lg:mt-[14px]">Plant With Clay Stand</span>
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[4px] lg:mt-[6px] leading-[1.8] whitespace-nowrap overflow-hidden text-ellipsis">Combination of wood and wool </span>
                <span class="font-bold text-sm md:text-2xl text-[#151411] mt-[12px] lg:mt-[18px] leading-[1.3]">$61.49</span>
            </div>
            <!-- Item 9 -->
            <div class="flex flex-col bg-white max-w-[394px] ">
                <img class="max-w-[156px] max-h-[130px] md:max-w-[394px] lg:max-h-[360px]" src="{{ asset('images/products/9.png') }}" alt="img">
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[14px] lg:mt-[26px] leading-[1.8]">Decoration</span>
                <span class="font-bold text-sm lg:text-[1.55rem] text-[#151411] mt-[6px] lg:mt-[14px]">Oval Gold Mirro</span>
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[4px] lg:mt-[6px] leading-[1.8] whitespace-nowrap overflow-hidden text-ellipsis">Combination of wood and wool </span>
                <span class="font-bold text-sm md:text-2xl text-[#151411] mt-[12px] lg:mt-[18px] leading-[1.3]">$32.43</span>
            </div>
            <!-- Item 10 (Only visible in mobile) -->
            <div class="flex md:hidden flex-col bg-white max-w-[394px] ">
                <img class="max-w-[156px] max-h-[130px] md:max-w-[394px] lg:max-h-[360px]" src="{{ asset('images/products/10.png') }}" alt="img">
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[14px] lg:mt-[26px] leading-[1.8]">Decoration</span>
                <span class="font-bold text-sm lg:text-[1.55rem] text-[#151411] mt-[6px] lg:mt-[14px]">Wooden Mirro</span>
                <span class="font-black text-xs lg:text-lg text-[#AFADB5] mt-[4px] lg:mt-[6px] leading-[1.8] whitespace-nowrap overflow-hidden text-ellipsis">Combination of wood and wool </span>
                <span class="font-bold text-sm md:text-2xl text-[#151411] mt-[12px] lg:mt-[18px] leading-[1.3]">$63.47</span>
            </div>
        </div>
        <!-- Item Slider -->
        <div class="flex justify-center mt-[30px] lg:mt-[80px]">
            <div class="flex flex-row items-center font-black text-sm md:text-lg text-[#151411]">
                <svg class="w-6 md:w-8 h-6 md:h-8 text-[#AFADB5]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path fill="currentColor" d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.592 30.592 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.592 30.592 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0z"/>
                </svg>
                <span class="bg-[#518581] text-white ml-[15px] py-[7px] md:py-[5px] px-[11.5px] md:px-[13.5px]">1</span>
                <span class=" py-[7px] md:py-[5px] px-[11.5px] md:px-[13.5px]">2</span>
                <span class=" py-[7px] md:py-[5px] px-[11.5px] md:px-[13.5px]">3</span>
                <span class=" py-[7px] md:py-[5px] px-[11.5px] md:px-[13.5px]">...</span>
                <span class=" py-[7px] md:py-[5px] px-[11.5px] md:px-[13.5px]">10</span>
                <svg class="w-6 md:w-8 h-6 md:h-8 mr-[15px]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path fill="currentColor" d="M340.864 149.312a30.592 30.592 0 0 0 0 42.752L652.736 512L340.864 831.872a30.592 30.592 0 0 0 0 42.752a29.12 29.12 0 0 0 41.728 0L714.24 534.336a32 32 0 0 0 0-44.672L382.592 149.376a29.12 29.12 0 0 0-41.728 0z"/>
                </svg>
            </div>
        </div>
    </section>
</div>