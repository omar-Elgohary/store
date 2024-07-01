@extends('site.layouts.master')

@section('title', 'Cart Page')

@section('content')

<section class="">
<div>
    <div class="lg:flex relative">
    <div class="lg:w-[65%]  lg:h-[100vh] lg:py-2 lg:overflow-y-auto">
        <div class="mt-[80px] lg:mt-[100px] md:mt-24 px-4 md:px-5 lg:px-8">
            <div class="flex justify-between  font-Bebas font-normalf tracking-[1px] items-end ">
                <h3 class="text-[#09080B] text-[90px] lg:text-[150px] leading-[75.6px] lg:leading-[127px] flex-1">cart</h3>
                <div>
                    <h3 class="text-[56px] block lg:hidden leading-[47.04px]">3 items</h3>
                </div>
            </div>
        <div>

            <hr class="h-px mt-4 mb-4 block lg:hidden border-0 bg-[#474749]">
            <div class="w-[100%]  h-[40vh] sm:h-[60vh] lg:h-[100vh]  overflow-y-auto lg:overflow-y-hidden">

            <div class="gap-5 mb-4 sm:mb-5 flex flex-col">
                <div class="flex gap-3 sm:gap-5 ">
                <img src="{{asset('assets/image/shirt.png')}}" alt="" class="w-24 h-24 sm:w-56 sm:h-56 lg:w-[335px] lg:h-[335px]">
                <div class="text-[#09080B] sm:text-[#474749] text-[20px] leading-[18px] sm:text-[40px] lg:text-[50px] flex justify-between flex-col font-Bebas font-normal sm:leading-[35px] lg:leading-[42px] w-full">
                    <div class="flex justify-between">
                        <h3 class="w-[75%] sm:w-[70%]">Short-sleeved shirt with A PRINT</h3>
                        <p class="text-[#09080B] md:ml-5 lg:ml-7">200nis</p>
                    </div>

                    <div class="text-[14px] capitalize font-Manrope sm:font-Bebas leading-[17px] flex gap-3 sm:block sm:text-[25px] sm:leading-[30px]">
                    <div class="flex items-center gap-1 sm:gap-3">
                        <h3>Color:</h3>
                        <button class="w-3 h-3 m-[2px] bg-[#09080B]"></button>
                    </div>
                    <div class="flex items-center gap-1 sm:gap-3">
                        <h3>Size:</h3>
                        <p class="text-[#09080B]">m</p>
                    </div>
                    <div class=" hidden sm:flex items-center gap-3">
                        <h3>quantity:</h3>
                        <p class="text-[#09080B]">1</p>
                    </div>
                    </div>
                    <button class="text-left flex gap-4 sm:text-center sm:block capitalize font-Manrope text-[14px] leading-[17px] sm:w-full sm:bg-[#474749] sm:text-white sm:text-[25px] sm:leading-[30px] font-semibold sm:uppercase sm:py-3 sm:px-4 ">remove
                    <p class="block sm:hidden"><i class="fa-solid fa-xmark "></i></p>
                    </button>
                </div>
                </div>

            </div>

            </div>
            <hr class="h-px mt-4 mb-4 block lg:hidden border-0 bg-[#474749]">
        </div>

        </div>
    </div>

    <div class="lg:bg-[#09080B] lg:h-[100vh] lg:pb-[100px] lg:w-[35%] px-4 lg:text-white lg:text-[50px] font-Bebas font-normal leading-[42px]">
        <div class="lg:mt-64  justify-between hidden lg:flex mb-5">
        <h3>Order summary</h3>
        <p>3 items</p>
        </div>
        <div class="flex justify-between gap-2">
        <input type="text"
            class=" sm:w-[80%] lg:w-[70%] lg:opacity-[40%] text-[#474749] text-[20px] lg:text-2xl leading-[30px] border border-[#474749] font-Manrope font-medium lg:py-4 px-3"
            style="background: none;" placeholder="Discount code">
        <button
            class="bg-[#474749] flex-1 lg:text-white text-[20px] lg:text-2xl leading-[30px] opacity-[40%] font-Manrope font-medium lg:py-4 lg:px-5  py-3 px-3 ">APPLY</button>
        </div>
        <div class="mt-4 font-Bebas lg:text-[#FFFFFF] text-[20px] leading-[25px] lg:text-[25px] lg:leading-[30px]">
        <div class=" flex justify-between ">
            <h5>Discount:</h5>
            <h5>-40 nis</h5>
        </div>

        <div class=" flex justify-between ">
            <h5>tax:</h5>
            <h5>20 NIS</h5>
        </div>
        <div class=" flex justify-between ">
            <h5>Shipping:</h5>
            <h5>00 NIS</h5>
        </div>
        <div
            class=" flex justify-between mt-2 text-[#09080B] leading-[47px] text-[56px] lg:text-[#FDC031]  lg:leading-[42px]">
            <h5>Total:</h5>
            <h5>620 NIS</h5>
        </div>
        <button
            class="font-Manrope mt-2 font-semibold text-[#09080B] uppercase leading-[30.5px] bg-[#FDC031] w-full py-4 p-3">
            checkout
        </button>
        </div>
    </div>
    </div>

</div>
</section>

@endsection
