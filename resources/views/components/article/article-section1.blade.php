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
            <span class="font-black text-[0.88rem] md:text-[1.125rem] mt-[20px] text-[#AFADB5] leading-[1.8] max-w-[327px] md:max-w-[619px]">
                We display products based on the latest products we have, if you want
                to see our old products please enter the name of the item
            </span>
        </div>

        <div class="relative grid place-items-center">
            <img class="max-w-[327px] sm:max-w-full w-full" src="{{ asset('images/article/1.png') }}" alt="">
                <!-- <div class="absolute flex flex-row justify-between top-64">
                <svg class="flex rounded-full bg-[#151411]/60 py-[8px] px-[8px] w-[1.9rem] h-[1.9rem]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="m14 5l-5 5l5 5l-1 2l-7-7l7-7z"/>
                </svg>
                <svg class="hidden md:flex rounded-full bg-[#151411]/60 py-[8px] px-[8px] w-[1.9rem] h-[1.9rem]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="m6 15l5-5l-5-5l1-2l7 7l-7 7z"/>
                </svg>
                </div> -->
                <!-- <svg class="absolute z-50 left-5 top-64 flex rounded-full bg-[#151411]/60 py-[8px] px-[8px] w-[1.9rem] h-[1.9rem]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="m14 5l-5 5l5 5l-1 2l-7-7l7-7z"/>
                </svg>
                <svg class="absolute z-50 right-5 top-64 flex rounded-full bg-[#151411]/60 py-[8px] px-[8px] w-[1.9rem] h-[1.9rem]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="m6 15l5-5l-5-5l1-2l7 7l-7 7z"/>
                </svg> -->
            <!-- <div class="w-full bg-green-200 flex justify-center "> -->
     <!-- <div class="bg-red-200 absolute left-12 bottom-0 flex flex-col pt-[12px] md:pt-[20px] pb-[11px] md:pb-[47px] pl-[11px] md:pl-[40px] w-[1080px] shadow-lg">
            <div class="flex flex-col ">
                <span class="font-black text-[0.65rem] md:text-[1.15rem] text-[#AFADB5] text-[1.8]">Tips and Trick</span>
                <span class="font-bold text-[0.88rem] md:text-[1.65rem] mt-[4px] md:mt-[10px] max-w-[773px] text-[#151411] leading-[1.3]">
                    This 400-Square-Foot New York Apartment Is Maximized With
                    Custom Millwork
                </span>
            </div>
            <div class="flex flex-row items-center mt-[10px] md:mt-[16px]">
                <img class="max-w-[20px] md:max-w-[28px] max-h-[20px] md:max-h-[28px]" src="{{ asset('images/article/2.png') }}" alt="img">
                <span class="font-bold text-[0.75rem] md:text-[0.88rem] ml-[8px] md:ml-[10px] text-[#151411] leading-[1.8]">By Morgan Goldberg</span>
                <span class="font-black text-[0.75rem] md:text-[0.88rem] ml-[15px] md:ml-[24px] text-[#AFADB5] leading-[1.8]">Tuesday, 17 May 2022</span>
            </div>
        </div> -->

</div>














        <!-- Image Slider -->
        <!-- <div class="imageClass relative bg-red-200 bg-contain w-full grid place-items-center max-h-[550px]">
            <svg class="block z-50 absolute left-5 top-64 md:flex rounded-full bg-[#151411]/60 py-[8px] px-[8px] w-[1.9rem] h-[1.9rem]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="m14 5l-5 5l5 5l-1 2l-7-7l7-7z"/>
            </svg>
            <svg class="z-50 absolute right-5 top-64 rounded-full bg-[#151411]/60 py-[8px] px-[8px] w-[1.9rem] h-[1.9rem]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="m6 15l5-5l-5-5l1-2l7 7l-7 7z"/>
            </svg>
            <div class="bg-transparent absolute z-50 flex justify-center top-64 items-center w-full  h-10  gap-2">
                <div class="w-2 h-2 rounded-full bg-black"></div>
                <div class="w-2 h-2 rounded-full bg-white"></div>
                <div class="w-2 h-2 rounded-full bg-black"></div>
                <div class="w-2 h-2 rounded-full bg-black"></div>
            </div>
        </div>
        <div class="bg-white absolute  bottom-8 flex flex-col pt-[12px] md:pt-[20px] pb-[11px] md:pb-[47px] pl-[11px] md:pl-[40px] max-w-[1080px] shadow-lg">
            <div class="flex flex-col">
                <span class="font-black text-[0.65rem] md:text-[1.15rem] text-[#AFADB5] text-[1.8]">Tips and Trick</span>
                <span class="font-bold text-[0.88rem] md:text-[1.65rem] mt-[4px] md:mt-[10px] max-w-[773px] text-[#151411] leading-[1.3]">
                    This 400-Square-Foot New York Apartment Is Maximized With
                    Custom Millwork
                </span>
            </div>
            <div class="flex flex-row items-center mt-[10px] md:mt-[16px]">
                <img class="max-w-[20px] md:max-w-[28px] max-h-[20px] md:max-h-[28px]" src="{{ asset('images/article/2.png') }}" alt="img">
                <span class="font-bold text-[0.75rem] md:text-[0.88rem] ml-[8px] md:ml-[10px] text-[#151411] leading-[1.8]">By Morgan Goldberg</span>
                <span class="font-black text-[0.75rem] md:text-[0.88rem] ml-[15px] md:ml-[24px] text-[#AFADB5] leading-[1.8]">Tuesday, 17 May 2022</span>
            </div>
        </div> -->


    </section>
</div>