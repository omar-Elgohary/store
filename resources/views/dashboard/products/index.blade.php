@extends('dashboard.layouts.master')

@section('content')
    <div class="flex">
    @include('dashboard.layouts.sidebar')

      <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Navbar -->
        <div class="bg-white shadow">
          <div class="container mx-auto">
            <div class="flex justify-between items-center py-4 px-2">
              <img src="{{ asset('assets/image/logoblack.svg')}}" alt="" class="w-40">

              <button class="block md:hidden text-gray-500 hover:text-gray-600" id="hamburger">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                  </path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <!-- Content Body -->
        <div class="flex-1 overflow-hidden p-4 mt-5">
          <!--  -->

          <!-- Popup -->
          <div class="popup-overlay fixed inset-0 bg-black bg-opacity-50 z-50 hidden" id="popup-overlay"></div>
          <div class="popup fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50 hidden max-w-7xl mx-3 sm:mx-auto  bg-white shadow-lg rounded-lg overflow-hidden w-full m-0" id="popup">
            <div class="flex  items-center mb-4">
              <div class="w-full">
                <div class="text-2xl py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">
                  Add a product
                </div>

                <form action="{{route('store.product')}}" method="POST" class="py-4 px-6 text-lg h-[85vh] overflow-y-auto" enctype="multipart/form-data">
                    @csrf
                    <!-- Image upload section -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Upload Images</label>
                        <div class="drop-zone border-dashed border-gray-300 border-2 p-4 cursor-pointer text-center">
                            <p>Only 4 photos can be uploaded</p>
                            <input type="file" id="file-input" name="images[]" multiple accept="image/*" class="hidden" />
                        </div>
                        <div class="image-preview flex flex-wrap mt-4" id="image-preview"></div>
                        @error('images')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        @error('images.*')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                            Name Product (en)
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" name="name_en" type="text" placeholder="Name Product (en)" value="{{ old('name_en') }}">
                        @error('name_en')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4 ar">
                        <label class="block  text-gray-700 font-bold mb-2" for="name">
                            اسم المنتج (ar)
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" name="name_ar" type="text" placeholder="اسم المنتج بالعربى" value="{{ old('name_ar') }}">
                        @error('name_ar')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block  text-gray-700 font-bold mb-2" for="price">
                            Product price
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="price" name="price" type="number" placeholder="" value="{{ old('price') }}">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="category_id" class="block text-gray-700 font-medium mb-2">Category</label>
                        <select id="category_id" name="category_id" class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-[#FDC031]" required>
                            <option value="" selected disabled>Select Category</option>
                            @foreach(\App\Models\Category::get() as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2">Available Colors</label>
                        <div class="flex flex-wrap -mx-2">
                            @foreach (\App\Models\Color::get() as $color)
                                <div class="px-2 w-[15.66%]">
                                    <label for="color-{{ $color->id }}" class="flex items-center text-gray-700 font-medium mb-2">
                                        <input type="checkbox" id="color-{{ $color->id }}" name="colors[]" value="{{ $color->id }}" class="mr-2 p-1 w-6 h-6">
                                        <p aria-label="{{ $color->color }}" class="p-1 sm:w-6 w-[18px] h-[17px] sm:h-6 border cursor-pointer" style="background-color: {{ $color->color }};">
                                        </p>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2">Available Sizes</label>
                        <div class="flex flex-wrap -mx-2 uppercase font-Bebas leading-[18px] text-center">
                            @foreach (\App\Models\Size::get() as $size)
                                <div class="px-2 w-[15.66%]">
                                    <label for="size-{{ $size->id }}" class="flex items-center text-gray-700 font-medium mb-2">
                                        <input type="checkbox" id="size-{{ $size->id }}" name="sizes[]" value="{{ $size->id }}" class="mr-2 p-1 w-6 h-6">
                                        <div class="border-[#474749] text-white border flex mr-2">
                                            <p class="p-1 w-6 h-6 bg-[#09080B]">{{ $size->size }}</p>
                                        </div>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="Details">Details</label>
                        <textarea name="details_ar" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Details" rows="1" placeholder="Enter any information Details"></textarea>
                    </div>

                    <div class="mb-4 ar">
                        <label class="block text-gray-700 font-bold mb-2" for="DetailsAr">تفاصيل (ar)</label>
                        <textarea name="details_en" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="DetailsAr" rows="1" placeholder="أدخل أي تفاصيل المعلومات"></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="sizeAndFit">size and fit (en)</label>
                        <textarea name="size_and_fit_ar" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="sizeAndFit" rows="1" placeholder="Enter information about suitability"></textarea>
                    </div>

                    <div class="mb-4 ar">
                        <label class="block text-gray-700 font-bold mb-2" for="sizeAndFitAr">الحجم والملاءمة (ar)</label>
                        <textarea name="size_and_fit_en" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="sizeAndFitAr" rows="1" placeholder="أدخل المعلومات عن ملاءمتها"></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="shippingAndReturns">shipping and returns (en)</label>
                        <textarea name="shipping_and_returns_ar" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="shippingAndReturns" rows="1" placeholder="Enter information  shipping and returns"></textarea>
                    </div>

                    <div class="mb-4 ar">
                        <label class="block text-gray-700 font-bold mb-2" for="shippingAndReturnsAr">الشحن والإرجاع (ar)</label>
                        <textarea name="shipping_and_returns_en" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="shippingAndReturnsAr" rows="1" placeholder="أدخل معلومات الشحن والإرجاع"></textarea>
                    </div>

                    <div class="flex items-center gap-3 justify-center mb-4">
                        <button class="bg-[#FDC031] text-[#09080B] py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            ADD A PRODUCT
                        </button>
                        <button id="close-popup" class="bg-red-600 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">close</button>
                    </div>
                </form>
            </div>
            </div>
        </div>

        <div class="px-5 font-Manrope grid justify-center gap-6 sm:grid-cols-2 md:max-w-[64rem] md:grid-cols-3 lg:max-w-full lg:grid-cols-4 xl:grid-cols-5 mt-8 ">
            <button id="open-popup" class="fixed bottom-5 right-16">
                <!-- <img src="image/plus.svg" alt="plus" class=""> -->
                <img src="{{ asset('assets/image/pulss.svg')}}" alt="plus" class="">
            </button>

            @foreach($rows as $row)
                <div class=" bg-white rounded-lg shadow-lg overflow-hidden ">
                    <div class=" h-72">
                    <img src="{{ asset('assets/image/shirt.png')}}" class="object-cover h-full w-full border-b border-gray-200" alt="Converse sneakers" />
                    </div>

                    <div class="flex flex-col gap-1 mt-4 px-4 text-lg">
                    <h2 class="text-xl font-semibold  text-gray-800 0">{{$row->name_ar}} - {{$row->name_en}}</h2>
                    <span class="font-normal text-gray-600 h-14 overflow-hidden">{{$row->details_ar}} - {{$row->details_en}}</span>
                    <div class="flex justify-between items-center mt-2">
                        <span class="font-semibold text-gray-800 uppercase">{{$row->price}} nis</span>
                        <div>
                        <span
                            class="font-semibold mt-1 text-white py-1 text-[16px] bg-green-300 px-3 rounded-full uppercase">activ</span>
                        </div>
                    </div>
                    </div>

                    <div class="flex gap-4 mt-4 px-4">
                    <span class="sr-only">Colors available</span>

                    <button aria-label="Yellow" class="p-1 w-6 h-6 border   cursor-pointer bg-yellow-500 "></button>

                    <button aria-label="Red" class="p-1 w-6 h-6 border   cursor-pointer bg-red-500 "></button>

                    <button aria-label="Blue" class="p-1 w-6 h-6 border   cursor-pointer bg-blue-500 "></button>

                    <button aria-label="Black" class="p-1 w-6 h-6 border   cursor-pointer bg-gray-800 "></button>
                    </div>

                    <div class="mt-4 flex border-t border-gray-200 ">
                    <button
                        class="w-2/4 bg-[#FDC031]  p-4 justify-between items-center font-bold cursor-pointer hover:underline text-[#09080B]  ">
                        <span class="text-base">Edit on product</span>

                    </button>
                    <a href="{{route('delete.product', $row->id)}}" type="button" class="w-2/4 bg-red-600  p-4 justify-between items-center font-bold cursor-pointer hover:underline text-white ">
                        delete
                    </a>
                    </div>
                </div>
            @endforeach
            {{-- table content --}}
            {{-- no data found div --}}
            @if ($rows->count() == 0)
                <div class="d-flex flex-column w-100 align-center align-items-center mt-4">
                    <img src="{{asset('/storage/images/no_data.png')}}" width="200px" alt="">
                    <h1 class="mt-2 text-danger" style="font-family: cairo ;margin-right: 35px">There Are No Data</h1>
                </div>
            @endif
            {{-- no data found div --}}
        </div>

            {{-- pagination  links div --}}
            @if ($rows->count() > 0 && $rows instanceof \Illuminate\Pagination\AbstractPaginator )
                <div class="d-flex justify-content-center mt-3">
                    {{$rows->links()}}
                </div>
            @endif
            {{-- pagination  links div --}}
        </div>

          {{-- <ol class="flex justify-center text-xl mt-6 font-medium space-x-1">
            <li>
              <a href=""
                class="inline-flex items-center bg-white justify-center w-9 h-9 border border-gray-100 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>

            <li class="block w-9 h-9 text-center text-[#FDC031] bg-[#09080B]  rounded leading-9">1</li>

            <li class="block w-9 h-9 text-center border bg-white border-gray-100 rounded leading-8">2</li>

            <li>
              <a href="" class="block w-9 h-9 text-center border bg-white border-gray-100 rounded leading-8"> 3 </a>
            </li>

            <li>
              <a href="" class="block w-9 h-9 text-center border bg-white border-gray-100 rounded leading-8"> 4 </a>
            </li>

            <li>
              <a href=""
                class="inline-flex items-center bg-white justify-center w-9 h-9 border border-gray-100 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
          </ol> --}}
          <div class="popup-overlay-img fixed inset-0 bg-black bg-opacity-50 z-50 hidden" id="popup-overlay-img"></div>
          <div class="popup-img fixed rounded-[8px] top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 border border-gray-300 p-5 bg-white shadow-lg z-[1000] hidden" id="popup-img">
            <div class="flex flex-col justify-center items-center">
              <i class="fas fa-exclamation-circle text-red-500 text-3xl mb-5"></i>
              <div class="flex items-center mb-4 ">

                <p class="text-xl">You can only upload up to 4 photos.</p>
              </div>
              <button id="close-popup-img"
                class="bg-yellow-400 text-xl text-gray-900 py-2 px-4 rounded focus:outline-none focus:shadow-outline">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
