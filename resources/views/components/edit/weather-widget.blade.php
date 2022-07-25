<div class="relative flex min-h-screen flex-col items-center justify-center overflow-hidden py-6 sm:py-12 bg-gray-100">
    {{-- <div class="-top-7 -z-10 flex h-10 w-80 flex-col items-center rounded-t-3xl bg-blue-600 p-6">dblue </div> --}}
    <div class="bg-blue-400 relative flex w-72 flex-col items-center overflow-hidden rounded-3xl p-6">
        {{-- Dark Blue Circle Inside --}}
        <div class="bg-blue-500 absolute z-10 h-96 -bottom-20 rounded-full w-[430px]"></div>
        <div class="z-10 w-full ">
            {{-- Top Part of Widget --}}
            <div class="flex w-full justify-between text-sm text-blue-50">
                <div class="">Day</div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 transform duration-200 hover:scale-110 cursor-pointer" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                    </svg>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 transform duration-200 hover:scale-110 cursor-pointer" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                </div>
            </div>
            {{-- Image at the middle --}}
            <div class="flex w-full justify-center ">
                <img class="transform my-6 w-32 duration-200 hover:scale-105"
                    src="https://cdn4.iconfinder.com/data/icons/the-weather-is-nice-today/64/weather_19-512.png" alt="">
            </div>
            {{-- Text in Center --}}
            <div class="flex flex-col w-full items-center">
                <h2 class="text-7xl font-extrabold text-white">32<sup class="text-5xl font-medium">o</sup></h2>
                <p class="text-white">Miami</p>
            </div>
            {{-- Bottom Part of Widget --}}
            <div class="mt-10 flex w-full justify-between text-sm text-blue-50">
                {{-- Left --}}
                <div class="flex flex-col items-center justify-center ">
                    <p class="text-xs">Wind Now</p>
                    <p><span class="text-xl font-bold">30</span>km</p>
                </div>
                {{-- Middle --}}
                <div class="flex flex-col items-center justify-center ">
                    <p class="text-xs">Huminity</p>
                    <p><span class="text-xl font-bold">30</span>%</p>
                </div>
                {{-- Right --}}
                <div class="flex flex-col items-center justify-center ">
                    <p class="text-xs">Precipitation</p>
                    <p><span class="text-xl font-bold">81</span>%</p>
                </div>
            </div>
        </div>
    </div>
</div>