<div class="bg-gray-200 flex items-center justify-center mt-20 w-full h-[1550px]">
    <div class="bg-red-200 relative flex justify-center items-center w-[1240px]">
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
            <h2 class="font-bold mt-2 text-sm md:text-2xl">This 400-Square-Foot New York Apartment Is Maximized With
                Custom Millwork</h2>
            <div class="flex">
                <p>By Morgan Goldberg</p>
                <p>Tuesday 17 May 2022</p>
            </div>
        </div>
    </div>
</div>