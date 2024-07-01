@extends('dashboard.layouts.master')

@section('content')
<div class="flex">
@include('dashboard.layouts.sidebar')

    <!-- Content Body -->
    <div class="flex-1 overflow-hidden p-4 mt-5">
        <div class="mx-6 mb-4">
        <div class="flex flex-wrap -mx-6">
            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
            <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
                <svg class="h-8 w-8 text-white" viewBox="0 0 28 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                    d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z"
                    fill="currentColor"></path>
                    <path
                    d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z"
                    fill="currentColor"></path>
                    <path
                    d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z"
                    fill="currentColor"></path>
                    <path
                    d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z"
                    fill="currentColor"></path>
                    <path
                    d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z"
                    fill="currentColor"></path>
                    <path
                    d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z"
                    fill="currentColor"></path>
                </svg>
                </div>

                <div class="mx-5">
                <h4 class="text-2xl font-semibold text-gray-700">{{\App\Models\ContactUs::count()}}</h4>
                <div class="text-gray-500">New submit</div>
                </div>
            </div>
            </div>

            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
            <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">
                <svg class="h-8 w-8 text-white" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                    d="M4.19999 1.4C3.4268 1.4 2.79999 2.02681 2.79999 2.8C2.79999 3.57319 3.4268 4.2 4.19999 4.2H5.9069L6.33468 5.91114C6.33917 5.93092 6.34409 5.95055 6.34941 5.97001L8.24953 13.5705L6.99992 14.8201C5.23602 16.584 6.48528 19.6 8.97981 19.6H21C21.7731 19.6 22.4 18.9732 22.4 18.2C22.4 17.4268 21.7731 16.8 21 16.8H8.97983L10.3798 15.4H19.6C20.1303 15.4 20.615 15.1004 20.8521 14.6261L25.0521 6.22609C25.2691 5.79212 25.246 5.27673 24.991 4.86398C24.7357 4.45123 24.2852 4.2 23.8 4.2H8.79308L8.35818 2.46044C8.20238 1.83722 7.64241 1.4 6.99999 1.4H4.19999Z"
                    fill="currentColor"></path>
                    <path
                    d="M22.4 23.1C22.4 24.2598 21.4598 25.2 20.3 25.2C19.1403 25.2 18.2 24.2598 18.2 23.1C18.2 21.9402 19.1403 21 20.3 21C21.4598 21 22.4 21.9402 22.4 23.1Z"
                    fill="currentColor"></path>
                    <path
                    d="M9.1 25.2C10.2598 25.2 11.2 24.2598 11.2 23.1C11.2 21.9402 10.2598 21 9.1 21C7.9402 21 7 21.9402 7 23.1C7 24.2598 7.9402 25.2 9.1 25.2Z"
                    fill="currentColor"></path>
                </svg>
                </div>

                <div class="mx-5">
                <h4 class="text-2xl font-semibold text-gray-700">{{\App\Models\Order::count()}}</h4>
                <div class="text-gray-500">Total Orders</div>
                </div>
            </div>
            </div>

            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
            <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                <div class="p-3 rounded-full bg-pink-600 bg-opacity-75">
                <svg class="h-8 w-8 text-white" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.99998 11.2H21L22.4 23.8H5.59998L6.99998 11.2Z" fill="currentColor"
                    stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path>
                    <path
                    d="M9.79999 8.4C9.79999 6.08041 11.6804 4.2 14 4.2C16.3196 4.2 18.2 6.08041 18.2 8.4V12.6C18.2 14.9197 16.3196 16.8 14 16.8C11.6804 16.8 9.79999 14.9197 9.79999 12.6V8.4Z"
                    stroke="currentColor" stroke-width="2"></path>
                </svg>
                </div>

                <div class="mx-5">
                <h4 class="text-2xl font-semibold text-gray-700">{{\App\Models\Product::count()}}</h4>
                <div class="text-gray-500">Available Products</div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <h1 class="text-4xl uppercase font-Bebas font-semibold tracking-[1px] mb-4">Incoming orders</h1>
        <div class="shadow-lg rounded-lg  overflow-x-auto w-[100%] md:w-auto d:mx-10">

        <table class="w-full table-fixed">
            <thead class="font-Bebas text-[25px] md:text-[30px] tracking-[1px] ">
            <tr class="bg-[#09080B] ">
                <th class=" w-6 md:w-[5%] py-4 px-6 text-left text-[#FDC031]  uppercase">#</th>
                <th class="w-64 md:w-1/4 py-4 px-6 text-left text-[#FDC031] uppercase">Name</th>
                <th class="w-72 md:w-1/4 py-4 px-6 text-left text-[#FDC031] uppercase">ciry</th>
                <th class="w-72 md:w-1/4 py-4 px-6 text-left text-[#FDC031] uppercase">number</th>
                <th class="w-72 md:w-[30%] py-4 px-6 text-left text-[#FDC031] uppercase">shipping type</th>
                <th class="w-72 md:w-1/4 py-4 px-6 text-left text-[#FDC031] uppercase">The price</th>
                <th class="w-72 md:w-1/4 py-4 px-6 text-left text-[#FDC031] uppercase">Order status</th>

                <th class="w-64 md:w-[40%]  py-4 px-6  text-left text-[#FDC031]  uppercase">Status</th>
            </tr>
            </thead>

            <tbody class="bg-white font-Manrope font-medium normal-case text-[20px] ">

            <tr>
                <td class="py-4 px-6 border-b border-gray-200 relative">
                <span class=" relative">1</span>
                <div class="absolute top-[14px] left-[16px] rounded-full w-4 h-4 bg-red-500"></div>
                </td>
                <td class="py-4 px-6 border-b border-gray-200 capitalize">John Doe</td>
                <td class="py-4 px-6 border-b border-gray-200 truncate">cairo</td>
                <td class="py-4 px-6 border-b border-gray-200 truncate">+972 53 420 3499</td>

                <td class="py-4 px-6 border-b border-gray-200 truncate">fast charging</td>
                <td class="py-4 px-6 border-b border-gray-200 truncate">200 INS</td>
                <td class="py-4 px-6 border-b border-gray-200 truncate">new</td>
                <td class="py-4 px-6 border-b border-gray-200">
                <span
                    class="bg-red-500 text-white py-1 px-3 rounded-full text-[18px] capitalize cursor-pointer td-delete"
                    onclick="confirmDelete(this)">delete</span>
                <span
                    class="popup-trigger bg-[#FDC031] text-[#09080B] py-1 px-3 rounded-full text-[18px] capitalize cursor-pointer">view</span>
                </td>
            </tr>

        </tbody>
        </table>
        </div>


        <!-- Popup vieo -->
        <div
        class="popup hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white z-[100000000] overflow-hidden mx-2 rounded-lg w-full  sm:w-[80%]">
            <div class="flex  items-center mb-4">
            <div class="w-full">
                <div class="text-2xl py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">
                Order details
                </div>

                <div class="py-4 px-6  h-[85vh] overflow-y-auto" action="" method="POST">
                <div class="mb-4 ">
                    <div
                    class="grid  gap-5 grid-cols-1 w-full md:max-w-[64rem] md:grid-cols-2 lg:max-w-full lg:grid-cols-2 ">
                    <div class="flex gap-6">
                        <img src="image/shirt.png" alt="shirt" class="w-[70px] h-[70px]">
                        <div class="font-Bebas w-[85%] text-[#09080B]" style="width: 80%;">
                        <h3 class="text-[25px] leading-[22.5px]">Short-sleeved shirt with A PRINT</h3>
                        <div class="
                        grid  gap-2 grid-cols-2 max-w-sm  md:grid-cols-2  lg:grid-cols-3
                            justify-between text-[25px] w-[85%] items-center">
                            <h5>
                            <p class="p-1  sm:w-6 w-[18px] h-[17px] sm:h-6 border cursor-pointer bg-black ">
                            </p>
                            </h5>
                            <div class="flex gap-1 items-center">
                            <h5>size: </h5>
                            <p class="text-[#474749]"> M</p>
                            </div>
                            <div class="flex gap-1 items-center">
                            <h5> qty: </h5>
                            <p class="text-[#474749]">1</p>
                            </div>

                        </div>
                        </div>
                        <h5 class="  font-Bebas text-[#09080B] text-[25px] leading-[22.5px] mr-3 text-right">200
                        nis</h5>
                    </div>
                    <div class="flex gap-6">
                        <img src="image/shirt.png" alt="shirt" class="w-[70px] h-[70px]">
                        <div class="font-Bebas w-[85%] text-[#09080B]" style="width: 80%;">
                        <h3 class="text-[25px] leading-[22.5px]">Short-sleeved shirt with A PRINT</h3>
                        <div class="
                        grid  gap-2 grid-cols-2 max-w-sm  md:grid-cols-2  lg:grid-cols-3
                            justify-between text-[25px] w-[85%] items-center">
                            <h5>
                            <p class="p-1  sm:w-6 w-[18px] h-[17px] sm:h-6 border cursor-pointer bg-black ">
                            </p>
                            </h5>
                            <div class="flex gap-1 items-center">
                            <h5>size: </h5>
                            <p class="text-[#474749]"> M</p>
                            </div>
                            <div class="flex gap-1 items-center">
                            <h5> qty: </h5>
                            <p class="text-[#474749]">1</p>
                            </div>

                        </div>
                        </div>
                        <h5 class="  font-Bebas text-[#09080B] text-[25px] leading-[22.5px] mr-3 text-right">200
                        nis</h5>
                    </div>
                    <div class="flex gap-6">
                        <img src="image/shirt.png" alt="shirt" class="w-[70px] h-[70px]">
                        <div class="font-Bebas w-[85%] text-[#09080B]" style="width: 80%;">
                        <h3 class="text-[25px] leading-[22.5px]">Short-sleeved shirt with A PRINT</h3>
                        <div class="
                        grid  gap-2 grid-cols-2 max-w-sm  md:grid-cols-2  lg:grid-cols-3
                            justify-between text-[25px] w-[85%] items-center">
                            <h5>
                            <p class="p-1  sm:w-6 w-[18px] h-[17px] sm:h-6 border cursor-pointer bg-black ">
                            </p>
                            </h5>
                            <div class="flex gap-1 items-center">
                            <h5>size: </h5>
                            <p class="text-[#474749]"> M</p>
                            </div>
                            <div class="flex gap-1 items-center">
                            <h5> qty: </h5>
                            <p class="text-[#474749]">1</p>
                            </div>

                        </div>
                        </div>
                        <h5 class="  font-Bebas text-[#09080B] text-[25px] leading-[22.5px] mr-3 text-right">200
                        nis</h5>
                    </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="sm:flex gap-4 items-center">
                    <div class="w-full ">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                        Order status
                        </label>
                        <div class="">
                        <select id="gender" name="gender" class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-[#FDC031]
                            shadow appearance-none  py-2 px-3 text-gray-700 leading-tight" required>
                            <option value="">New order</option>
                            <option value="">Under implementation</option>
                            <option value="">Charging</option>
                            <option value="">Sent delivered</option>
                        </select>
                        </div>

                    </div>

                    </div>
                </div>
                <div class="mb-4">
                    <div class="sm:flex gap-4 items-center">
                    <div class="w-full sm:w-2/4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                        Gmail
                        </label>
                        <div
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
                        mallpet9@gmail.com</div>

                    </div>
                    <div class="w-full sm:w-2/4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                        Number
                        </label>
                        <div
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
                        +972 53 420 3499</div>

                    </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="sm:flex gap-4 items-center">
                    <div class="w-full sm:w-2/4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                        First Name
                        </label>
                        <div
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
                        kaheld</div>

                    </div>
                    <div class="w-full sm:w-2/4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                        Last Name
                        </label>
                        <div
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
                        Mohamed</div>

                    </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex gap-4 items-center">
                    <div class="w-full">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                        the address
                        </label>
                        <div
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
                        Derech HaAtsma'ut 41, Haifa, apt4</div>

                    </div>

                    </div>
                </div>
                <div class="mb-4">
                    <div class="sm:flex gap-4 items-center">
                    <div class="w-full sm:w-2/4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                        Country
                        </label>
                        <div
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
                        Egypt</div>

                    </div>
                    <div class="w-full sm:w-2/4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                        City
                        </label>
                        <div
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
                        Cairo</div>

                    </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="sm:flex gap-4 items-center">
                    <div class="w-full sm:w-2/4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                        City
                        </label>
                        <div
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
                        Cairo</div>

                    </div>
                    <div class="w-full sm:w-2/4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                        Postal code
                        </label>
                        <div
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
                        33380</div>

                    </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex gap-4 items-center">
                    <div class="w-full">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                        shipping method
                        </label>
                        <div
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
                        Standard (6-10 business days) - 00 NIS</div>

                    </div>

                    </div>
                </div>
                <div class="mb-2">
                    <div class="flex gap-4 items-center">
                    <div class="w-full flex justify-between text-3xl font-Bebas ">
                        <label class="block tracking-[10px] text-gray-700 font-bold " for="name">
                        the price
                        </label>


                    </div>

                    </div>
                </div>
                <div class="">
                    <div class="flex gap-4 items-center">
                    <div class="w-full flex justify-between text-2xl font-Bebas ">
                        <label class="block tracking-[10px] text-gray-700 font-bold " for="name">
                        total cost
                        </label>
                        <div class="">
                        600 iNS</div>

                    </div>

                    </div>
                </div>
                <div class="">
                    <div class="flex gap-4 items-center">
                    <div class="w-full flex justify-between text-2xl font-Bebas ">
                        <label class="block tracking-[10px] text-gray-700 font-bold" for="name">
                        Discounts
                        </label>
                        <div class="">
                        50</div>

                    </div>

                    </div>
                </div>
                <div class="">
                    <div class="flex gap-4 items-center">
                    <div class="w-full flex justify-between text-2xl font-Bebas ">
                        <label class="block tracking-[10px] text-gray-700 font-bold" for="name">
                        The final price
                        </label>
                        <div class="">
                        550</div>

                    </div>

                    </div>
                </div>
                <div class="flex items-center gap-3 justify-center mt-5 ">
                    <button
                    class="bg-[#FDC031] text-[#09080B] py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    ADD A PRODUCT
                    </button>
                    <button class="close-popup  px-4 py-2 bg-red-500 text-white rounded-md">Close</button>
                </div>
                </div>


            </div>

            </div>

        </div>
        </div>

        <!-- النافذة المنبثقة للتأكيد -->
        <div id="overlay-delete"
        class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
        </div>
        <div id="popup-delete"
        class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 rounded-lg shadow-lg hidden z-50">
        <p class="mb-4">Do you want to clear the request?</p>
        <div class="flex justify-center gap-3">
            <button onclick="deleteRow()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            yes
            </button>
            <button onclick="closePopup()" class="bg-[#FDC031] text-white font-bold py-2 px-4 rounded">
            No
            </button>
        </div>
        </div>
    </div>
    </div>
</div>
</div>

@endsection
