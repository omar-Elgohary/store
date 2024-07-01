@extends('site.layouts.master')

@section('content')

<div class="relative  h-[90vh] md:h-[100vh] text-white overflow-hidden">
<div class="absolute inset-0 w-full h-[90vh] md:h-[100vh]">
    <img src="{{asset('assets/image/bg-cover.png')}}" alt="Background Image"
    class="object-cover w-full object-center h-[90vh] md:h-[166vh]" />
    <div class="absolute inset-0 bg-black opacity-50"></div>
</div>

<div class="absolute bottom-4 sm:top-0 z-10  m-0 pt-24 px-4 md:px-8">
    <h1
    class="text-[#FFFFFF] font-Bebas text-[90px] leading-[75px] sm:text-[150px] sm:leading-[126px] flex-1 font-normalf tracking-[1px] ">
    xhype
    season<br> summer24</h1>
    <a href="#"
    class="bg-[#FDC031] text-[#09080B] hover:bg-yellow-300 py-2 px-6  text-lg font-semibold transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">Get
    Started</a>
</div>
<div class="absolute hidden sm:flex justify-between w-full items-center text-[#FFFFFF] sm:bottom-4 text-[20px] leading-[25x] sm:text-[25px] sm:leading-[30.5px] font-medium opacity-80 font-Manrope z-10  m-0 pt-24 px-4 md:px-8">
    <div>
        <span class="mb-1">__</span>
        <h3>At the forefront of <br> modern styles and trends</h3>
    </div>

    <div class="flex gap-4">
    <a href="#" class="">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60"
        zoomAndPan="magnify" viewBox="0 0 45 44.999999" height="60" preserveAspectRatio="xMidYMid meet" version="1.0">
        <defs>
            <clipPath id="ebc5c26926">
            <path
                d="M 1.800781 1.800781 L 43.050781 1.800781 L 43.050781 43.050781 L 1.800781 43.050781 Z M 1.800781 1.800781 "
                clip-rule="nonzero" />
            </clipPath>
            <clipPath id="6ad4af221e">
            <path
                d="M 1.050781 22.5 C 1.050781 28.1875 3.308594 33.644531 7.332031 37.667969 C 11.355469 41.691406 16.8125 43.949219 22.5 43.949219 C 28.1875 43.949219 33.644531 41.691406 37.667969 37.667969 C 41.691406 33.644531 43.949219 28.1875 43.949219 22.5 C 43.949219 16.8125 41.691406 11.355469 37.667969 7.332031 C 33.644531 3.308594 28.1875 1.050781 22.5 1.050781 C 16.8125 1.050781 11.355469 3.308594 7.332031 7.332031 C 3.308594 11.355469 1.050781 16.8125 1.050781 22.5 Z M 1.050781 22.5 "
                clip-rule="nonzero" />
            </clipPath>
            <clipPath id="a18be88f5d">
            <path
                d="M 22.5 1.949219 C 27.949219 1.949219 33.175781 4.113281 37.03125 7.96875 C 40.886719 11.824219 43.050781 17.050781 43.050781 22.5 C 43.050781 27.949219 40.886719 33.175781 37.03125 37.03125 C 33.175781 40.886719 27.949219 43.050781 22.5 43.050781 C 11.152344 43.050781 1.949219 33.847656 1.949219 22.5 C 1.949219 11.152344 11.152344 1.949219 22.5 1.949219 Z M 22.5 1.949219 "
                clip-rule="nonzero" />
            </clipPath>
            <clipPath id="df2229efd8">
            <path
                d="M 1.050781 1.050781 L 43.800781 1.050781 L 43.800781 43.800781 L 1.050781 43.800781 Z M 1.050781 1.050781 "
                clip-rule="nonzero" />
            </clipPath>
            <clipPath id="c8efd7e4e3">
            <path
                d="M 1.050781 22.5 C 1.050781 28.1875 3.308594 33.644531 7.332031 37.667969 C 11.355469 41.691406 16.8125 43.949219 22.5 43.949219 C 28.1875 43.949219 33.644531 41.691406 37.667969 37.667969 C 41.691406 33.644531 43.949219 28.1875 43.949219 22.5 C 43.949219 16.8125 41.691406 11.355469 37.667969 7.332031 C 33.644531 3.308594 28.1875 1.050781 22.5 1.050781 C 16.8125 1.050781 11.355469 3.308594 7.332031 7.332031 C 3.308594 11.355469 1.050781 16.8125 1.050781 22.5 Z M 1.050781 22.5 "
                clip-rule="nonzero" />
            </clipPath>
            <clipPath id="8e2bee24dd">
            <path
                d="M 1.050781 22.496094 C 1.050781 28.183594 3.308594 33.636719 7.332031 37.660156 C 11.351562 41.679688 16.808594 43.941406 22.496094 43.941406 C 28.183594 43.941406 33.636719 41.679688 37.660156 37.660156 C 41.679688 33.636719 43.941406 28.183594 43.941406 22.496094 C 43.941406 16.808594 41.679688 11.351562 37.660156 7.332031 C 33.636719 3.308594 28.183594 1.050781 22.496094 1.050781 C 16.808594 1.050781 11.351562 3.308594 7.332031 7.332031 C 3.308594 11.351562 1.050781 16.808594 1.050781 22.496094 Z M 1.050781 22.496094 "
                clip-rule="nonzero" />
            </clipPath>
            <clipPath id="45bacabce5">
            <path
                d="M 12.753906 13.675781 L 32.253906 13.675781 L 32.253906 31.675781 L 12.753906 31.675781 Z M 12.753906 13.675781 "
                clip-rule="nonzero" />
            </clipPath>
        </defs>
        <g clip-path="url(#ebc5c26926)">
            <g clip-path="url(#6ad4af221e)">
            <g clip-path="url(#a18be88f5d)">
                <path fill="#ffffff"
                d="M 22.496094 1.050781 C 10.664062 1.050781 1.050781 10.664062 1.050781 22.496094 C 1.050781 34.328125 10.664062 43.941406 22.496094 43.941406 C 34.328125 43.941406 43.941406 34.328125 43.941406 22.496094 C 43.941406 10.664062 34.328125 1.050781 22.496094 1.050781 Z M 22.496094 1.980469 C 33.835938 1.980469 43.007812 11.15625 43.007812 22.496094 C 43.007812 33.835938 33.835938 43.007812 22.496094 43.007812 C 11.15625 43.007812 1.980469 33.835938 1.980469 22.496094 C 1.980469 11.15625 11.15625 1.980469 22.496094 1.980469 Z M 22.496094 1.980469 "
                fill-opacity="1" fill-rule="nonzero" />
            </g>
            </g>
        </g>
        <g clip-path="url(#df2229efd8)">
            <g clip-path="url(#c8efd7e4e3)">
            <g clip-path="url(#8e2bee24dd)">
                <path stroke-linecap="butt" transform="matrix(0.75, 0, 0, 0.75, 1.05, 1.05)" fill="none"
                stroke-linejoin="miter"
                d="M 0.00104125 28.594794 C 0.00104125 36.178128 3.011458 43.448961 8.376042 48.813545 C 13.735417 54.17292 21.011459 57.188546 28.594793 57.188546 C 36.178127 57.188546 43.448961 54.17292 48.813544 48.813545 C 54.17292 43.448961 57.188545 36.178128 57.188545 28.594794 C 57.188545 21.01146 54.17292 13.735418 48.813544 8.376042 C 43.448961 3.011459 36.178127 0.00104192 28.594793 0.00104192 C 21.011459 0.00104192 13.735417 3.011459 8.376042 8.376042 C 3.011458 13.735418 0.00104125 21.01146 0.00104125 28.594794 Z M 0.00104125 28.594794 "
                stroke="#ffffff" stroke-width="2" stroke-opacity="1" stroke-miterlimit="4" />
            </g>
            </g>
        </g>
        <g clip-path="url(#45bacabce5)">
            <path fill="#ffffff"
            d="M 31.585938 13.722656 L 13.027344 22.078125 C 12.832031 22.164062 12.742188 22.316406 12.753906 22.53125 C 12.769531 22.746094 12.878906 22.882812 13.085938 22.945312 L 19.367188 24.828125 L 21.125 30.980469 C 21.175781 31.160156 21.292969 31.265625 21.472656 31.304688 C 21.503906 31.3125 21.539062 31.316406 21.570312 31.316406 C 21.714844 31.316406 21.832031 31.261719 21.925781 31.148438 L 25.421875 26.953125 L 31.605469 29.425781 C 31.660156 29.449219 31.71875 29.460938 31.777344 29.460938 C 31.90625 29.460938 32.015625 29.414062 32.105469 29.324219 C 32.195312 29.234375 32.242188 29.125 32.242188 28.996094 L 32.242188 14.148438 C 32.242188 14.070312 32.222656 13.996094 32.1875 13.925781 C 32.148438 13.855469 32.097656 13.800781 32.03125 13.757812 C 31.964844 13.714844 31.890625 13.691406 31.8125 13.683594 C 31.734375 13.679688 31.660156 13.691406 31.585938 13.722656 Z M 14.542969 22.414062 L 28.886719 15.957031 L 19.523438 23.90625 Z M 21.773438 29.882812 L 20.242188 24.515625 L 28.027344 17.902344 L 22.140625 24.988281 C 22.09375 25.042969 22.0625 25.109375 22.046875 25.179688 C 22.027344 25.253906 22.03125 25.324219 22.046875 25.398438 C 22.066406 25.46875 22.101562 25.535156 22.148438 25.589844 C 22.199219 25.644531 22.257812 25.6875 22.324219 25.714844 L 24.515625 26.589844 Z M 31.3125 28.308594 L 23.261719 25.089844 L 31.3125 15.402344 Z M 31.3125 28.308594 "
            fill-opacity="1" fill-rule="nonzero" />
        </g>
        </svg>
    </a>
    <a href="#" class="">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60"
        zoomAndPan="magnify" viewBox="0 0 45 44.999999" height="60" preserveAspectRatio="xMidYMid meet"
        version="1.0">
        <defs>
            <clipPath id="427feb0e7c">
            <path
                d="M 1.800781 1.800781 L 43.050781 1.800781 L 43.050781 43.050781 L 1.800781 43.050781 Z M 1.800781 1.800781 "
                clip-rule="nonzero" />
            </clipPath>
            <clipPath id="ff01b969ad">
            <path
                d="M 1.050781 22.5 C 1.050781 28.1875 3.308594 33.644531 7.332031 37.667969 C 11.355469 41.691406 16.8125 43.949219 22.5 43.949219 C 28.1875 43.949219 33.644531 41.691406 37.667969 37.667969 C 41.691406 33.644531 43.949219 28.1875 43.949219 22.5 C 43.949219 16.8125 41.691406 11.355469 37.667969 7.332031 C 33.644531 3.308594 28.1875 1.050781 22.5 1.050781 C 16.8125 1.050781 11.355469 3.308594 7.332031 7.332031 C 3.308594 11.355469 1.050781 16.8125 1.050781 22.5 Z M 1.050781 22.5 "
                clip-rule="nonzero" />
            </clipPath>
            <clipPath id="acc8125574">
            <path
                d="M 22.5 1.949219 C 27.949219 1.949219 33.175781 4.113281 37.03125 7.96875 C 40.886719 11.824219 43.050781 17.050781 43.050781 22.5 C 43.050781 27.949219 40.886719 33.175781 37.03125 37.03125 C 33.175781 40.886719 27.949219 43.050781 22.5 43.050781 C 11.152344 43.050781 1.949219 33.847656 1.949219 22.5 C 1.949219 11.152344 11.152344 1.949219 22.5 1.949219 Z M 22.5 1.949219 "
                clip-rule="nonzero" />
            </clipPath>
            <clipPath id="0235dc92f9">
            <path
                d="M 1.050781 1.050781 L 43.800781 1.050781 L 43.800781 43.800781 L 1.050781 43.800781 Z M 1.050781 1.050781 "
                clip-rule="nonzero" />
            </clipPath>
            <clipPath id="d4d222d9fa">
            <path
                d="M 1.050781 22.5 C 1.050781 28.1875 3.308594 33.644531 7.332031 37.667969 C 11.355469 41.691406 16.8125 43.949219 22.5 43.949219 C 28.1875 43.949219 33.644531 41.691406 37.667969 37.667969 C 41.691406 33.644531 43.949219 28.1875 43.949219 22.5 C 43.949219 16.8125 41.691406 11.355469 37.667969 7.332031 C 33.644531 3.308594 28.1875 1.050781 22.5 1.050781 C 16.8125 1.050781 11.355469 3.308594 7.332031 7.332031 C 3.308594 11.355469 1.050781 16.8125 1.050781 22.5 Z M 1.050781 22.5 "
                clip-rule="nonzero" />
            </clipPath>
            <clipPath id="e7e35bcc87">
            <path
                d="M 1.050781 22.496094 C 1.050781 28.183594 3.308594 33.636719 7.332031 37.660156 C 11.351562 41.679688 16.808594 43.941406 22.496094 43.941406 C 28.183594 43.941406 33.636719 41.679688 37.660156 37.660156 C 41.679688 33.636719 43.941406 28.183594 43.941406 22.496094 C 43.941406 16.808594 41.679688 11.351562 37.660156 7.332031 C 33.636719 3.308594 28.183594 1.050781 22.496094 1.050781 C 16.808594 1.050781 11.351562 3.308594 7.332031 7.332031 C 3.308594 11.351562 1.050781 16.808594 1.050781 22.496094 Z M 1.050781 22.496094 "
                clip-rule="nonzero" />
            </clipPath>
            <clipPath id="5408da1bae">
            <path
                d="M 12.753906 12.753906 L 32.253906 12.753906 L 32.253906 32.253906 L 12.753906 32.253906 Z M 12.753906 12.753906 "
                clip-rule="nonzero" />
            </clipPath>
        </defs>
        <g clip-path="url(#427feb0e7c)">
            <g clip-path="url(#ff01b969ad)">
            <g clip-path="url(#acc8125574)">
                <path fill="#ffffff"
                d="M 22.496094 1.050781 C 10.664062 1.050781 1.050781 10.664062 1.050781 22.496094 C 1.050781 34.328125 10.664062 43.941406 22.496094 43.941406 C 34.328125 43.941406 43.941406 34.328125 43.941406 22.496094 C 43.941406 10.664062 34.328125 1.050781 22.496094 1.050781 Z M 22.496094 1.980469 C 33.835938 1.980469 43.007812 11.15625 43.007812 22.496094 C 43.007812 33.835938 33.835938 43.007812 22.496094 43.007812 C 11.15625 43.007812 1.980469 33.835938 1.980469 22.496094 C 1.980469 11.15625 11.15625 1.980469 22.496094 1.980469 Z M 22.496094 1.980469 "
                fill-opacity="1" fill-rule="nonzero" />
            </g>
            </g>
        </g>
        <g clip-path="url(#0235dc92f9)">
            <g clip-path="url(#d4d222d9fa)">
            <g clip-path="url(#e7e35bcc87)">
                <path stroke-linecap="butt" transform="matrix(0.75, 0, 0, 0.75, 1.05, 1.05)" fill="none"
                stroke-linejoin="miter"
                d="M 0.00104125 28.594794 C 0.00104125 36.178128 3.011458 43.448961 8.376042 48.813545 C 13.735417 54.17292 21.011459 57.188546 28.594793 57.188546 C 36.178127 57.188546 43.448961 54.17292 48.813544 48.813545 C 54.17292 43.448961 57.188545 36.178128 57.188545 28.594794 C 57.188545 21.01146 54.17292 13.735418 48.813544 8.376042 C 43.448961 3.011459 36.178127 0.00104192 28.594793 0.00104192 C 21.011459 0.00104192 13.735417 3.011459 8.376042 8.376042 C 3.011458 13.735418 0.00104125 21.01146 0.00104125 28.594794 Z M 0.00104125 28.594794 "
                stroke="#ffffff" stroke-width="2" stroke-opacity="1" stroke-miterlimit="4" />
            </g>
            </g>
        </g>
        <g clip-path="url(#5408da1bae)">
            <path fill="#ffffff"
            d="M 32.242188 15.710938 C 32.242188 14.078125 30.917969 12.753906 29.28125 12.753906 L 15.714844 12.753906 C 14.078125 12.753906 12.753906 14.078125 12.753906 15.710938 L 12.753906 29.28125 C 12.753906 30.914062 14.078125 32.242188 15.714844 32.242188 L 29.28125 32.242188 C 30.917969 32.242188 32.242188 30.914062 32.242188 29.28125 Z M 31.230469 15.710938 L 31.230469 29.28125 C 31.230469 30.359375 30.359375 31.230469 29.28125 31.230469 L 15.714844 31.230469 C 14.636719 31.230469 13.765625 30.359375 13.765625 29.28125 L 13.765625 15.710938 C 13.765625 14.636719 14.636719 13.761719 15.714844 13.761719 L 29.28125 13.761719 C 30.359375 13.761719 31.230469 14.636719 31.230469 15.710938 Z M 22.496094 17.371094 C 19.667969 17.371094 17.375 19.667969 17.375 22.496094 C 17.375 25.324219 19.667969 27.621094 22.496094 27.621094 C 25.328125 27.621094 27.621094 25.324219 27.621094 22.496094 C 27.621094 19.667969 25.328125 17.371094 22.496094 17.371094 Z M 22.496094 18.382812 C 24.769531 18.382812 26.613281 20.226562 26.613281 22.496094 C 26.613281 24.765625 24.769531 26.609375 22.496094 26.609375 C 20.226562 26.609375 18.382812 24.765625 18.382812 22.496094 C 18.382812 20.226562 20.226562 18.382812 22.496094 18.382812 Z M 28.273438 15.566406 C 28.910156 15.566406 29.425781 16.085938 29.425781 16.722656 C 29.425781 17.359375 28.910156 17.878906 28.273438 17.878906 C 27.636719 17.878906 27.117188 17.359375 27.117188 16.722656 C 27.117188 16.085938 27.636719 15.566406 28.273438 15.566406 Z M 28.273438 15.566406 "
            fill-opacity="1" fill-rule="evenodd" />
        </g>
        </svg>
    </a>
    </div>
</div>
<div
    class="absolute block sm:hidden sm:bottom-4 text-[20px] leading-[24x] sm:text-[25px] sm:leading-[30.5px] font-medium opacity-80 font-Manrope z-10  m-0 pt-20 px-4 md:px-8">
    <span class="mb-1">__</span>
    <h3>At the forefront of <br> modern styles and trends</h3>
</div>
</div>

<!-- <section style="background-image: url('image/bg-cover.png')" class=" bg-center h-[100vh] bg-no-repeat bg-gray-700
bg-blend-multiply">
<div class="relative top-[0]  m-0 pt-24">
    <h1 class="text-[#FFFFFF] font-Bebas text-[150px] leading-[126px] flex-1 font-normalf tracking-[1px] ">xhype
    season<br> summer24</h1>


    <div class="flex flex-col px-4 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
    <a href="about.html"
        class="inline-flex  justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 ">
        Explore

    </a>

    </div>
</div>
</section> -->

<!-- start new arrivals -->
<section class="bg-[#09080B] py-5">
<div class=" px-4 md:px-8">
    <div class="flex justify-between items-center ">
        <h2 class="font-Bebas text-[50px] text-[#474749] leading-[42px] mb-4">new arrivals</h2>
        <div>
            <h3 class="font-Manrope text-[20px] sm:text-[25px] text-[#FFFFFF] leading-[30.5px opacity-[.80%]]">See all <i
                class="fa-solid fa-arrow-right ml-2"></i> </h3>
        </div>
    </div>

    <div>
        <div class="grid justify-center gap-5 grid-cols-2 max-w-sm md:max-w-[64rem] md:grid-cols-3 lg:max-w-[130rem] lg:grid-cols-4">
            @foreach (App\Models\Product::where('active', '1')->latest()->get() as $product)
                <div class="">
                    <a href="#">
                        <div>
                            <img src="{{ asset('assets/image/shirt.png')}}" alt="shirt" class="w-[172px] h-[172px] md:w-full md:h-auto">
                        </div>
                        <div class="md:flex text-[#FFFFFF] justify-between py-2 font-bold text-[14px] md:text-[18px] font-Manrope">
                            <h2>{{$product->name_en}}</h2>
                            <h2>{{$product->price}} NIS</h2>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</div>
</section>
<!-- end new arrivals -->

<!-- strt catalog -->
<section class="py-5">
<div class="md:px-8 px-2 sm:px-8">
    <h2 class="font-Bebas text-[50px] text-[#474749] leading-[42px] mb-4">catalog</h2>
    <div>

    <div>
        <div class="flex flex-col mx-auto sm:grid justify-center gap-5 grid-cols-2 max-w-sm md:max-w-[64rem]  lg:max-w-[135rem] lg:grid-cols-2">
            @foreach(\App\Models\Category::get() as $category)
                <div class="h-[80%] order-2 sm:order-1">
                    <div class="">
                        <a href="#">
                            <div class="">
                                <img src="image/shirtone.png" alt="shirt" class="w-full h-[351px] md:w-full md:h-full ">
                            </div>
                            <div class="md:flex justify-between py-2 font-bold text-[14px] md:text-[18px] font-Manrope">
                                <h2>{{$category->name}}</h2>
                                <h2>200 NIS</h2>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </div>

    </div>
    </div>
</section>
<!-- end catalog -->

<!-- start bg shop now -->
<div class="bg-[#FDC031] mb-7">
<div class="container mx-auto  text-center pt-5 pb-5 sm:pt-8 sm:pb-8  lg:pt-11 lg:pb-11 ">
    <h1
    class="font-Manrope text-[60px] sm:text-[120px] lg:text-[180px] font-semibold leading-[73px] lg:leading-[90px] tracking-[-2%]">
    SHOP NOW</h1>
</div>
</div>
<!-- end bg shop now -->

<!-- start About -->
<section class="py-5">
<div class="px-2 sm:px-8">
    <div class="flex  flex-col md:flex-row">
    <h2 class="w-[24%] font-Bebas text-[50px] text-[#474749] leading-[42px]">About</h2>
    <div class="  ">
        <p
        class=" hidden md:block sm:indent-[40%] text-[#09080B] font-Bebas text-[55px] md:text-[92px] leading-[80px] flex-1 font-normalf tracking-[1px] ">
        After years<br class="">of expertise and passion for <br> the industry, we has seen a variety <br> of trends
        and
        styles, <br> and
        as a result, <br> XHYPE was established.</p>

        <p
        class=" block  md:hidden  indent-[70%] text-[#09080B] font-Bebas text-[55px]  leading-[47px] flex-1 font-normalf tracking-[1px] ">
        After years of expertise and &nbsp; passion &nbsp; for the &nbsp; industry, &nbsp; we has seen a variety of
        &nbsp; &nbsp; trends &nbsp;
        and styles,&nbsp; and &nbsp;
        as &nbsp; a result,&nbsp;XHYPE was established.</p>
        <p
        class=" text-[#09080B] font-Manrope w-[95%] md:w-[70%] lg:w-[47%] text-[18px] font-medium leading-[22px] opacity-95 ">
        Bringing the trends to customers so they may express their individuality and enter the gateway to current
        fashion, which can be a part of anyone's personality.
        </p>
        <div class="flex  font-Manrope text-[25px] font-medium leading-[30px] my-4 hover:underline          ">
        <a href="{{route('aboutUs')}}">Discover more<i class="fa-solid fa-arrow-right ml-2"></i></a>
        </div>
    </div>
    </div>
</div>
</section>
<!-- end About -->
<!-- start Email -->
<section>
<div class="px-2 sm:px-8 py-5">
    <div class="flex  flex-col sm:flex-row mt-8">
    <div
        class="text-[#09080B] hidden sm:block  font-Bebas text-[55px] leading-[47px] lg:text-[150px] lg:leading-[126px] flex-1 font-normalf tracking-[1px] mb-24 ">
        become a member of <br>the xhype club
    </div>
    <p
        class=" block  sm:hidden  indent-[60%] text-[#09080B] font-Bebas text-[55px]  leading-[47px] flex-1 font-normalf tracking-[1px] ">
        become a &nbsp; &nbsp; &nbsp; member&nbsp; &nbsp;&nbsp;&nbsp; of the &nbsp;&nbsp; xhype &nbsp; &nbsp; club</p>
    <div class="sm:w-[40%] lg:mt-9 flex sm:block items-end sm:items-top">
        <div class="flex gap-2 sm:gap-5  justify-end  sm:mb-14 order-3 sm:order-1">
        <a href="#" class="">
            <svg class=" w-[50px] h-[50px] sm:w-[60px] sm:h-[60px]" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" width="60" zoomAndPan="magnify" viewBox="0 0 45 44.999999"
            height="60" preserveAspectRatio="xMidYMid meet" version="1.0">
            <defs>
                <clipPath id="b3d4497878">
                <path
                    d="M 1.800781 1.800781 L 43.050781 1.800781 L 43.050781 43.050781 L 1.800781 43.050781 Z M 1.800781 1.800781 "
                    clip-rule="nonzero" />
                </clipPath>
                <clipPath id="41094158f7">
                <path
                    d="M 1.050781 22.5 C 1.050781 28.1875 3.308594 33.644531 7.332031 37.667969 C 11.355469 41.691406 16.8125 43.949219 22.5 43.949219 C 28.1875 43.949219 33.644531 41.691406 37.667969 37.667969 C 41.691406 33.644531 43.949219 28.1875 43.949219 22.5 C 43.949219 16.8125 41.691406 11.355469 37.667969 7.332031 C 33.644531 3.308594 28.1875 1.050781 22.5 1.050781 C 16.8125 1.050781 11.355469 3.308594 7.332031 7.332031 C 3.308594 11.355469 1.050781 16.8125 1.050781 22.5 Z M 1.050781 22.5 "
                    clip-rule="nonzero" />
                </clipPath>
                <clipPath id="cc388d1a07">
                <path
                    d="M 22.5 1.949219 C 27.949219 1.949219 33.175781 4.113281 37.03125 7.96875 C 40.886719 11.824219 43.050781 17.050781 43.050781 22.5 C 43.050781 27.949219 40.886719 33.175781 37.03125 37.03125 C 33.175781 40.886719 27.949219 43.050781 22.5 43.050781 C 11.152344 43.050781 1.949219 33.847656 1.949219 22.5 C 1.949219 11.152344 11.152344 1.949219 22.5 1.949219 Z M 22.5 1.949219 "
                    clip-rule="nonzero" />
                </clipPath>
                <clipPath id="510d326fbd">
                <path
                    d="M 1.050781 1.050781 L 43.800781 1.050781 L 43.800781 43.800781 L 1.050781 43.800781 Z M 1.050781 1.050781 "
                    clip-rule="nonzero" />
                </clipPath>
                <clipPath id="9a389ff9b3">
                <path
                    d="M 1.050781 22.5 C 1.050781 28.1875 3.308594 33.644531 7.332031 37.667969 C 11.355469 41.691406 16.8125 43.949219 22.5 43.949219 C 28.1875 43.949219 33.644531 41.691406 37.667969 37.667969 C 41.691406 33.644531 43.949219 28.1875 43.949219 22.5 C 43.949219 16.8125 41.691406 11.355469 37.667969 7.332031 C 33.644531 3.308594 28.1875 1.050781 22.5 1.050781 C 16.8125 1.050781 11.355469 3.308594 7.332031 7.332031 C 3.308594 11.355469 1.050781 16.8125 1.050781 22.5 Z M 1.050781 22.5 "
                    clip-rule="nonzero" />
                </clipPath>
                <clipPath id="9c0fec5056">
                <path
                    d="M 1.050781 22.496094 C 1.050781 28.183594 3.308594 33.636719 7.332031 37.660156 C 11.351562 41.679688 16.808594 43.941406 22.496094 43.941406 C 28.183594 43.941406 33.636719 41.679688 37.660156 37.660156 C 41.679688 33.636719 43.941406 28.183594 43.941406 22.496094 C 43.941406 16.808594 41.679688 11.351562 37.660156 7.332031 C 33.636719 3.308594 28.183594 1.050781 22.496094 1.050781 C 16.808594 1.050781 11.351562 3.308594 7.332031 7.332031 C 3.308594 11.351562 1.050781 16.808594 1.050781 22.496094 Z M 1.050781 22.496094 "
                    clip-rule="nonzero" />
                </clipPath>
                <clipPath id="67bed81881">
                <path
                    d="M 12.753906 13.675781 L 32.253906 13.675781 L 32.253906 31.675781 L 12.753906 31.675781 Z M 12.753906 13.675781 "
                    clip-rule="nonzero" />
                </clipPath>
            </defs>
            <g clip-path="url(#b3d4497878)">
                <g clip-path="url(#41094158f7)">
                <g clip-path="url(#cc388d1a07)">
                    <path fill="#000000"
                    d="M 22.421875 1.046875 C 10.628906 1.046875 1.046875 10.628906 1.046875 22.421875 C 1.046875 34.214844 10.628906 43.796875 22.421875 43.796875 C 34.214844 43.796875 43.796875 34.214844 43.796875 22.421875 C 43.796875 10.628906 34.214844 1.046875 22.421875 1.046875 Z M 22.421875 1.976562 C 33.726562 1.976562 42.867188 11.117188 42.867188 22.421875 C 42.867188 33.726562 33.726562 42.867188 22.421875 42.867188 C 11.117188 42.867188 1.976562 33.726562 1.976562 22.421875 C 1.976562 11.117188 11.117188 1.976562 22.421875 1.976562 Z M 22.421875 1.976562 "
                    fill-opacity="1" fill-rule="nonzero" />
                </g>
                </g>
            </g>
            <g clip-path="url(#510d326fbd)">
                <g clip-path="url(#9a389ff9b3)">
                <g clip-path="url(#9c0fec5056)">
                    <path stroke-linecap="butt" transform="matrix(0.75, 0, 0, 0.75, 1.05, 1.05)" fill="none"
                    stroke-linejoin="miter"
                    d="M 0.00104125 28.594794 C 0.00104125 36.178128 3.011458 43.448961 8.376042 48.813545 C 13.735417 54.17292 21.011459 57.188546 28.594793 57.188546 C 36.178127 57.188546 43.448961 54.17292 48.813544 48.813545 C 54.17292 43.448961 57.188545 36.178128 57.188545 28.594794 C 57.188545 21.01146 54.17292 13.735418 48.813544 8.376042 C 43.448961 3.011459 36.178127 0.00104192 28.594793 0.00104192 C 21.011459 0.00104192 13.735417 3.011459 8.376042 8.376042 C 3.011458 13.735418 0.00104125 21.01146 0.00104125 28.594794 Z M 0.00104125 28.594794 "
                    stroke="#000000" stroke-width="2" stroke-opacity="1" stroke-miterlimit="4" />
                </g>
                </g>
            </g>
            <g clip-path="url(#67bed81881)">
                <path fill="#000000"
                d="M 31.597656 13.726562 L 13.027344 22.242188 C 12.832031 22.332031 12.742188 22.488281 12.753906 22.707031 C 12.769531 22.925781 12.878906 23.066406 13.085938 23.128906 L 19.371094 25.050781 L 21.128906 31.324219 C 21.179688 31.507812 21.296875 31.617188 21.480469 31.65625 C 21.511719 31.664062 21.542969 31.667969 21.574219 31.667969 C 21.71875 31.667969 21.839844 31.609375 21.933594 31.496094 L 25.429688 27.21875 L 31.617188 29.738281 C 31.671875 29.761719 31.730469 29.773438 31.789062 29.773438 C 31.917969 29.773438 32.027344 29.726562 32.117188 29.636719 C 32.207031 29.542969 32.253906 29.429688 32.253906 29.300781 L 32.253906 14.15625 C 32.253906 14.078125 32.234375 14 32.199219 13.929688 C 32.160156 13.859375 32.109375 13.804688 32.042969 13.757812 C 31.976562 13.714844 31.902344 13.691406 31.824219 13.683594 C 31.746094 13.679688 31.671875 13.691406 31.597656 13.726562 Z M 14.542969 22.585938 L 28.898438 16.003906 L 19.527344 24.109375 Z M 21.78125 30.203125 L 20.246094 24.730469 L 28.035156 17.988281 L 22.148438 25.210938 C 22.097656 25.269531 22.066406 25.335938 22.050781 25.410156 C 22.035156 25.484375 22.035156 25.558594 22.054688 25.632812 C 22.070312 25.703125 22.105469 25.769531 22.15625 25.828125 C 22.203125 25.882812 22.261719 25.925781 22.332031 25.953125 L 24.523438 26.847656 Z M 31.324219 28.601562 L 23.269531 25.316406 L 31.324219 15.4375 Z M 31.324219 28.601562 "
                fill-opacity="1" fill-rule="nonzero" />
            </g>
            </svg>
        </a>
        <a href="#">
            <svg class=" w-[50px] h-[50px] sm:w-[60px] sm:h-[60px]" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" width="60" zoomAndPan="magnify" viewBox="0 0 45 44.999999"
            height="60" preserveAspectRatio="xMidYMid meet" version="1.0">
            <defs>
                <clipPath id="4ee39445af">
                <path
                    d="M 1.800781 1.800781 L 43.050781 1.800781 L 43.050781 43.050781 L 1.800781 43.050781 Z M 1.800781 1.800781 "
                    clip-rule="nonzero" />
                </clipPath>
                <clipPath id="ecc29827f5">
                <path
                    d="M 1.050781 22.5 C 1.050781 28.1875 3.308594 33.644531 7.332031 37.667969 C 11.355469 41.691406 16.8125 43.949219 22.5 43.949219 C 28.1875 43.949219 33.644531 41.691406 37.667969 37.667969 C 41.691406 33.644531 43.949219 28.1875 43.949219 22.5 C 43.949219 16.8125 41.691406 11.355469 37.667969 7.332031 C 33.644531 3.308594 28.1875 1.050781 22.5 1.050781 C 16.8125 1.050781 11.355469 3.308594 7.332031 7.332031 C 3.308594 11.355469 1.050781 16.8125 1.050781 22.5 Z M 1.050781 22.5 "
                    clip-rule="nonzero" />
                </clipPath>
                <clipPath id="1a78b1289a">
                <path
                    d="M 22.5 1.949219 C 27.949219 1.949219 33.175781 4.113281 37.03125 7.96875 C 40.886719 11.824219 43.050781 17.050781 43.050781 22.5 C 43.050781 27.949219 40.886719 33.175781 37.03125 37.03125 C 33.175781 40.886719 27.949219 43.050781 22.5 43.050781 C 11.152344 43.050781 1.949219 33.847656 1.949219 22.5 C 1.949219 11.152344 11.152344 1.949219 22.5 1.949219 Z M 22.5 1.949219 "
                    clip-rule="nonzero" />
                </clipPath>
                <clipPath id="dbb861510c">
                <path
                    d="M 1.050781 1.050781 L 43.800781 1.050781 L 43.800781 43.800781 L 1.050781 43.800781 Z M 1.050781 1.050781 "
                    clip-rule="nonzero" />
                </clipPath>
                <clipPath id="66c62406e1">
                <path
                    d="M 1.050781 22.5 C 1.050781 28.1875 3.308594 33.644531 7.332031 37.667969 C 11.355469 41.691406 16.8125 43.949219 22.5 43.949219 C 28.1875 43.949219 33.644531 41.691406 37.667969 37.667969 C 41.691406 33.644531 43.949219 28.1875 43.949219 22.5 C 43.949219 16.8125 41.691406 11.355469 37.667969 7.332031 C 33.644531 3.308594 28.1875 1.050781 22.5 1.050781 C 16.8125 1.050781 11.355469 3.308594 7.332031 7.332031 C 3.308594 11.355469 1.050781 16.8125 1.050781 22.5 Z M 1.050781 22.5 "
                    clip-rule="nonzero" />
                </clipPath>
                <clipPath id="39167035f6">
                <path
                    d="M 1.050781 22.496094 C 1.050781 28.183594 3.308594 33.636719 7.332031 37.660156 C 11.351562 41.679688 16.808594 43.941406 22.496094 43.941406 C 28.183594 43.941406 33.636719 41.679688 37.660156 37.660156 C 41.679688 33.636719 43.941406 28.183594 43.941406 22.496094 C 43.941406 16.808594 41.679688 11.351562 37.660156 7.332031 C 33.636719 3.308594 28.183594 1.050781 22.496094 1.050781 C 16.808594 1.050781 11.351562 3.308594 7.332031 7.332031 C 3.308594 11.351562 1.050781 16.808594 1.050781 22.496094 Z M 1.050781 22.496094 "
                    clip-rule="nonzero" />
                </clipPath>
                <clipPath id="5e2ab107c3">
                <path
                    d="M 12.753906 12.753906 L 32.253906 12.753906 L 32.253906 32.253906 L 12.753906 32.253906 Z M 12.753906 12.753906 "
                    clip-rule="nonzero" />
                </clipPath>
            </defs>
            <g clip-path="url(#4ee39445af)">
                <g clip-path="url(#ecc29827f5)">
                <g clip-path="url(#1a78b1289a)">
                    <path fill="#000000"
                    d="M 22.421875 1.046875 C 10.628906 1.046875 1.046875 10.628906 1.046875 22.421875 C 1.046875 34.214844 10.628906 43.796875 22.421875 43.796875 C 34.214844 43.796875 43.796875 34.214844 43.796875 22.421875 C 43.796875 10.628906 34.214844 1.046875 22.421875 1.046875 Z M 22.421875 1.976562 C 33.726562 1.976562 42.867188 11.117188 42.867188 22.421875 C 42.867188 33.726562 33.726562 42.867188 22.421875 42.867188 C 11.117188 42.867188 1.976562 33.726562 1.976562 22.421875 C 1.976562 11.117188 11.117188 1.976562 22.421875 1.976562 Z M 22.421875 1.976562 "
                    fill-opacity="1" fill-rule="nonzero" />
                </g>
                </g>
            </g>
            <g clip-path="url(#dbb861510c)">
                <g clip-path="url(#66c62406e1)">
                <g clip-path="url(#39167035f6)">
                    <path stroke-linecap="butt" transform="matrix(0.75, 0, 0, 0.75, 1.05, 1.05)" fill="none"
                    stroke-linejoin="miter"
                    d="M 0.00104125 28.594794 C 0.00104125 36.178128 3.011458 43.448961 8.376042 48.813545 C 13.735417 54.17292 21.011459 57.188546 28.594793 57.188546 C 36.178127 57.188546 43.448961 54.17292 48.813544 48.813545 C 54.17292 43.448961 57.188545 36.178128 57.188545 28.594794 C 57.188545 21.01146 54.17292 13.735418 48.813544 8.376042 C 43.448961 3.011459 36.178127 0.00104192 28.594793 0.00104192 C 21.011459 0.00104192 13.735417 3.011459 8.376042 8.376042 C 3.011458 13.735418 0.00104125 21.01146 0.00104125 28.594794 Z M 0.00104125 28.594794 "
                    stroke="#000000" stroke-width="2" stroke-opacity="1" stroke-miterlimit="4" />
                </g>
                </g>
            </g>
            <g clip-path="url(#5e2ab107c3)">
                <path fill="#000000"
                d="M 32.242188 15.710938 C 32.242188 14.078125 30.917969 12.753906 29.28125 12.753906 L 15.714844 12.753906 C 14.078125 12.753906 12.753906 14.078125 12.753906 15.710938 L 12.753906 29.28125 C 12.753906 30.914062 14.078125 32.242188 15.714844 32.242188 L 29.28125 32.242188 C 30.917969 32.242188 32.242188 30.914062 32.242188 29.28125 Z M 31.230469 15.710938 L 31.230469 29.28125 C 31.230469 30.359375 30.359375 31.230469 29.28125 31.230469 L 15.714844 31.230469 C 14.636719 31.230469 13.765625 30.359375 13.765625 29.28125 L 13.765625 15.710938 C 13.765625 14.636719 14.636719 13.761719 15.714844 13.761719 L 29.28125 13.761719 C 30.359375 13.761719 31.230469 14.636719 31.230469 15.710938 Z M 22.496094 17.371094 C 19.667969 17.371094 17.375 19.667969 17.375 22.496094 C 17.375 25.324219 19.667969 27.621094 22.496094 27.621094 C 25.328125 27.621094 27.621094 25.324219 27.621094 22.496094 C 27.621094 19.667969 25.328125 17.371094 22.496094 17.371094 Z M 22.496094 18.382812 C 24.769531 18.382812 26.613281 20.226562 26.613281 22.496094 C 26.613281 24.765625 24.769531 26.609375 22.496094 26.609375 C 20.226562 26.609375 18.382812 24.765625 18.382812 22.496094 C 18.382812 20.226562 20.226562 18.382812 22.496094 18.382812 Z M 28.273438 15.566406 C 28.910156 15.566406 29.425781 16.085938 29.425781 16.722656 C 29.425781 17.359375 28.910156 17.878906 28.273438 17.878906 C 27.636719 17.878906 27.117188 17.359375 27.117188 16.722656 C 27.117188 16.085938 27.636719 15.566406 28.273438 15.566406 Z M 28.273438 15.566406 "
                fill-opacity="1" fill-rule="evenodd" />
            </g>
            </svg>
        </a>

        </div>
        <div class="flex-1 sm:order-3">
        <h2 class="text-[#FDC031] sm:text-end font-Bebas text-[50px] leading-[42px] ">
            something begins,<br>catch it </h2>

        </div>
    </div>
    </div>
    <div class="container mx-auto mt-8 sm:mt-0 md:w-[80%] lg:w-[50%] font-Manrope ">
    <p class="text-left text-[20px]  font-medium  leading-[22px] opacity-95 mb-6 ">
        Stay up to date with the latest news, sweepstakes and discounts and also get access to classified information
        only for club members.
    </p>

    <form action="{{route('sendSubmit')}}" method="POST">
        @csrf
        <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">

        </div>
        <input type="text" name="name" id="email-address-icon"
            class="p-2 sm:p-6 md:p-4 border border-[#FDC031] text-[#474749] text-[25px] block w-full sm:ps-10  mb-4  "
            placeholder=" Name:">
        </div>
        <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">

        </div>
        <input type="text" name="email" id="email-address-icon"
            class="p-2 sm:p-6  md:p-4 border border-black  text-[#474749] text-[25px] block w-full  sm:ps-10  mb-4   "
            placeholder=" Email:">
        </div>
        <div class="opacity-40">
        <button
            class="hover:shadow-form w-full p-2 sm:p-6 md:p-4 bg-[#474749] text-center text-[20px] sm:text-[25px] font-semibold text-[#FFFFFF] outline-none">
            SUBMIT
        </button>
        </div>
    </form>

    </div>
</div>
</section>
<!-- end Email -->


@endsection
