<div class="bg-white w-full xl:w-auto xl:grid xl:place-items-center ">
    <!-- 2. DISCOVER -->
    <section class="px-6 sm:px-[100px] pb-[100px]  sm:pb-[180px] max-w-[1440px]">
        <!-- Row 1 -->
        <div class="flex justify-center pt-12 lg:pt-28">
            <!-- <img class="absolute right-0" src="{{ asset('images/landingImages/diamond.png') }}" alt=""> -->
            <div class="relative max-w-[295px] md:max-w-[711px] text-center">
                <!-- Small Curly Line -->
                <img class="block md:hidden absolute left-[-1.4rem] top-[1.5rem]"
                    src="{{ asset('images/landingImages/curly-line.png') }}" alt="img">
                <!-- Big Curly Line -->
                <img class="hidden md:block absolute sm:left-[-15rem] lg:left-[-18rem] sm:top-[2.2rem] lg:top-[4.2rem]"
                    src="{{ asset('images/landingImages/big-curly-line.png') }}" alt="img">
                <span
                    class="font-bold text-[#151411] text-[1.5rem] sm:text-[1.5rem] md:text-[3rem] lg:text-[4rem] text-center leading-snug max-w-[295px] sm:max-w-[711px]">
                    Discover Furniture With <br> High Quality Wood
                </span>
                <!-- Small Diamon -->
                <img class="block md:hidden absolute top-[1.8rem] md:top-0 right-[.1rem]"
                    src="{{ asset('images/landingImages/diamond.png') }}" alt="">
                <!-- Big Diamond -->
                <img class="hidden md:block absolute md:top-[3.6rem]  lg:top-[5.3rem]  md:right-[.1rem] lg:right-[.5rem]"
                    src="{{ asset('images/landingImages/big-diamond.png') }}" alt="">
            </div>
        </div>
        <!-- Row 2 -->
        <div class="w-full flex justify-center text-center ">
            <span
                class="font-black text-[#AFADB5] text-sm md:text-lg leading-[1.8] mt-5 md:mt-8 max-w-[327px] md:max-w-[600px] lg:max-w-[796px]">
                Pellentesque etiam blandit in tincidunt at
                donec. Eget ipsum dignissim placerat nisi,
                adipiscing mauris non. Purus parturient viverra
                nunc, tortor sit laoreet. Quam tincidunt aliquam
                adipiscing tempor.
            </span>
        </div>
        <!-- Row 3 -->
        <div
            class="sm:bg-green-200 h-auto mb-[0] sm:mb-[200px] md:mb-[250px] lg:mb-[350px] xl:mb-[500px] 2xl:mb-[500px] flex max-w-[1440px]">

            <div class="relative w-[1440px]">
                <!-- Search Bar -->
                <div class="bg-transparent relative sm:absolute flex justify-center w-full  mt-8 sm:mt-12 z-40">
                    <div
                        class="bg-white flex justify-between items-center shadow-xl sm:mt-2 md:mt-2 py-2 px-2 w-full md:w-3/5 max-w-[327px] md:max-w-[450px] lg:max-w-[640px] xl:max-w-[810px]">
                        <!-- Left Side -->
                        <div class="flex gap-3 items-start">
                            <svg class="text-[#AFADB5] w-6 lg:w-8 h-6 lg:h-8" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                                <path fill="currentColor"
                                    d="m795.904 750.72l124.992 124.928a32 32 0 0 1-45.248 45.248L750.656 795.904a416 416 0 1 1 45.248-45.248zM480 832a352 352 0 1 0 0-704a352 352 0 0 0 0 704z" />
                            </svg>
                            <input class="font-black text-[#AFADB5] w-full text-sm lg:text-lg focus:outline-none"
                                type="text" placeholder="Search property">
                        </div>
                        <!-- Right Side -->
                        <button class="bg-[#518581] py-2.5 px-7 md:px-11 ml-8 md:max-w-[810px]">
                            <span class="font-bold text-sm lg:text-lg text-white">Search</span>
                        </button>
                    </div>
                </div>
                <!-- Sofa Image -->
                <div class="relative sm:absolute z-30 flex justify-center mt-8 sm:mt-24 w-full">
                    <img class="max-w-[327px] sm:max-w-[900px] w-full lg:max-w-[1240px] max-h-[160px] sm:max-h-[280px] lg:max-h-[480px]"
                        src="{{ asset('images/landingImages/section2-sofa.png') }}" alt="img">
                </div>
            </div>
        </div>
    </section>
</div>