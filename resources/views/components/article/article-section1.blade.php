<style>
    .imageClass {
        background-image: url('images/article/1.png');
        max-width: 1240px;
        /* max-height: 550px; */
        width: 100%;
        height: 550px;
        object-fit: cover;
        background-repeat: no-repeat;
    }
</style>

<div class="bg-white w-full grid place-items-center">
    <section class="px-6 md:px-[100px] pt-[50px] md:pt-[100px] pb-[100px] md:pb-[180px] max-w-[1440px]">
        <!-- Header -->
        <div class="flex flex-col items-center text-center">
            <span class="font-bold text-[1.65rem] md:text-[4rem] text-[#151411] leading-[1.3]">Article</span>
            <span
                class="font-black text-[0.88rem] md:text-[1.125rem] mt-[20px] text-[#AFADB5] leading-[1.8] max-w-[327px] md:max-w-[619px]">
                We display products based on the latest products we have, if you want
                to see our old products please enter the name of the item
            </span>
        </div>

        {{-- <div class="relative grid place-items-center">
            <img class="max-w-[327px] sm:max-w-full w-full" src="{{ asset('images/article/1.png') }}" alt="">
        </div> --}}
        <div class="bg-gray-200 shadow-lg flex items-center justify-center mt-20 w-full h-[550px]">
            <div class="bg-red-200 relative flex justify-center items-center max-w-[1240px]">
                <img class="" src="{{ asset('images/services/1.png')}}" alt="">
                {{-- Controls --}}
                <div class="bg-transparent z-50 absolute flex w-full justify-between px-5">
                    {{-- Left Arrow --}}
                    <svg class="hidden md:flex rounded-full bg-[#151411]/60 py-[8px] px-[8px] w-[1.9rem] h-[1.9rem]"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                        role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                        <path fill="currentColor" d="m14 5l-5 5l5 5l-1 2l-7-7l7-7z" />
                    </svg>
                    <svg class="hidden md:flex rounded-full bg-[#151411]/60 py-[8px] px-[8px] w-[1.9rem] h-[1.9rem]"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                        role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                        <path fill="currentColor" d="m6 15l5-5l-5-5l1-2l7 7l-7 7z" />
                    </svg>
                </div>
                {{-- Index Indicator --}}
                <div class="bg-transparent flex absolute bottom-16 md:bottom-32 left-1/2 -translate-x-1/2 space-x-3">
                    <button class="w-2 h-2 md:w-3 md:h-3 rounded-full bg-white dark:bg-gray-400" type="button"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button class="w-2 h-2 md:w-3 md:h-3 rounded-full bg-white" type="button" aria-current="true"
                        aria-label="Slide 2"></button>
                    <button class="w-2 h-2 md:w-3 md:h-3 rounded-full bg-white dark:bg-gray-400" type="button"
                        aria-current="true" aria-label="Slide 3"></button>
                    <button class="w-2 h-2 md:w-3 md:h-3 rounded-full bg-white dark:bg-gray-400" type="button"
                        aria-current="true" aria-label="Slide 4"></button>
                </div>
                {{-- Info at the bottom --}}
                <div
                    class="bg-white flex flex-col -bottom-14 md:-bottom-28 mt-4 absolute py-3 md:py-12 px-3 md:px-10 max-w-[1080px] max-h-[248px] mx-3 md:mx-20">
                    <p class="font-black text-sm md:text-lg text-[#AFADB5]">Tips and Trick</p>
                    <h2 class="font-bold mt-2 text-sm md:text-2xl">This 400-Square-Foot New York Apartment Is Maximized
                        With
                        Custom Millwork</h2>
                    <div class="flex">
                        <p>By Morgan Goldberg</p>
                        <p>Tuesday 17 May 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>