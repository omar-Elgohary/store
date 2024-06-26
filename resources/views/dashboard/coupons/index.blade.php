@extends('dashboard.layouts.master')

@section('content')
    <div class="flex">
    @include('dashboard.layouts.sidebar')

      <!-- Content Body -->
      <div class="flex-1 overflow-hidden p-4 mt-5">
        <button id="popup-trigger" class="fixed bottom-5 right-16">
          <img src="{{ asset('assets/image/pulss.svg')}}" alt="plus" class="popup-trigger">
        </button>

        <div class="shadow-lg rounded-lg overflow-x-auto w-[100%] md:w-auto d:mx-10">
          <table class="w-full table-fixed">
            <thead class="font-Bebas text-[25px] md:text-[30px] tracking-[1px] ">
              <tr class="bg-[#09080B] ">
                <th class=" w-6 md:w-[5%] py-4 px-6 text-left text-[#FDC031]  uppercase">#</th>
                <th class="w-64 md:w-1/4 py-4 px-6 text-left text-[#FDC031] uppercase">Name</th>
                <th class="w-64 md:w-1/4 py-4 px-6 text-left text-[#FDC031] uppercase">Type</th>
                <th class="w-72 md:w-1/4 py-4 px-6 text-left text-[#FDC031] uppercase">Discount</th>
                <th class="w-72 md:w-[30%] py-4 px-6 text-left text-[#FDC031] uppercase">Start date</th>
                <th class="w-72 md:w-[30%] py-4 px-6 text-left text-[#FDC031] uppercase">Expiry date</th>
                <th class="w-64 md:w-[40%]  py-4 px-6  text-left text-[#FDC031]  uppercase">Status</th>
                <th class="w-64 md:w-[40%]  py-4 px-6  text-left text-[#FDC031]  uppercase">Control</th>
              </tr>
            </thead>

            <tbody class="bg-white font-Manrope font-medium normal-case text-[20px]">
              @foreach($coupons as $key => $coupon)
                  <tr>
                    <td class="py-4 px-6 border-b border-gray-200 relative"><span class=" relative">{{ $key+1 }}</span></td>
                    <td class="py-4 px-6 border-b border-gray-200 capitalize">{{$coupon->name}}</td>
                    <td class="py-4 px-6 border-b border-gray-200 truncate">{{$coupon->type}}</td>

                    <td class="py-4 px-6 border-b border-gray-200 truncate">
                      @if($coupon->type == 'ratio')
                        {{$coupon->discount}} %
                      @else
                        {{$coupon->discount}} LE
                      @endif
                    </td>

                    <td class="py-4 px-6 border-b border-gray-200 truncate">{{\Carbon\Carbon::parse($coupon->start_date)->format('Y-m-d')}}</td>
                    <td class="py-4 px-6 border-b border-gray-200 truncate">{{\Carbon\Carbon::parse($coupon->expire_date)->format('Y-m-d')}}</td>
                    <td class="py-4 px-6 border-b border-gray-200 truncate">{{$coupon->status}}</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                      <span class="bg-red-500 text-white py-1 px-3 rounded-full text-[18px] capitalize cursor-pointer td-delete" onclick="confirmDelete({{ $coupon->id }})">delete</span>
                    </td>
                  </tr>
                      
                  <!-- النافذة المنبثقة للتأكيد -->
                  <div id="overlay-delete" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden"></div>
                    <div id="popup-delete-{{ $coupon->id }}"
                      class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 rounded-lg shadow-lg hidden z-50">
                      <p class="mb-4">Do you want to delete this coupon?</p>
                      <div class="flex justify-center gap-3">
                          <form id="delete-form-{{ $coupon->id }}" action="{{ route('delete.coupon', $coupon->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Yes</button>
                          </form>
                          <button onclick="closePopup({{ $coupon->id }})" class="bg-[#FDC031] text-white font-bold py-2 px-4 rounded">No</button>
                      </div>
                    </div>

                @endforeach
              
            </tbody> 
          </table>
        </div>

        <!-- Popup vieo -->
        <div class="popup hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center">
          <div class="bg-white z-[100000000] overflow-hidden mx-2 rounded-lg w-full  sm:w-[80%]">
            <div class="flex  items-center mb-4">
              <div class="w-full">
                <div class="text-2xl py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">
                  Add Coupon
                </div>

                <form class="py-4 px-6 overflow-y-auto" action="{{route('store.coupon')}}" method="POST">
                  @csrf

                  <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="name">coupon</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                      id="name" name="name" type="text" placeholder="New coupon">
                  </div>

                  <div class="mb-4">
                    <div class="sm:flex gap-4 items-center">
                      <div class="w-full ">
                        <label class="block text-gray-700 font-bold mb-2" for="name">Discount type</label>
                        <div class="flex gap-3">
                          <div class="">
                            <select id="gender" name="type" class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-[#FDC031] shadow appearance-none  py-2 px-3 text-gray-700 leading-tight" required>
                              <option value="ratio">ratio</option>
                              <option value="number">number</option>
                            </select>
                          </div>

                          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" name="discount" type="text" placeholder="Enter Discount Value">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="mb-4 flex gap-3 w-full items-center">
                    <div class="w-2/4">
                      <label class="block  text-gray-700 font-bold mb-2" for="name">Start Date</label>
                      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" name="start_date" type="date" placeholder="">
                    </div>
                    <span class="text-[#FDC031] text-2xl">to</span>

                    <div class="w-2/4">
                      <label class="block  text-gray-700 font-bold mb-2" for="name">Expiry date</label>
                      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" name="expire_date" type="date" placeholder="">
                    </div>
                  </div>

                  <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="name">minimum</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                      id="name" name="minimum" type="number" placeholder=" minimum">
                  </div>
                  <div class="mb-4">

                  <label class="block text-gray-700 font-bold mb-2" for="name">maximum</label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" name="maximum" type="number" placeholder=" maximum">
                </div>

                  <div class="flex items-center gap-3 justify-center mt-5 ">
                    <button class="bg-[#FDC031] text-[#09080B] py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                      ADD A coupon
                    </button>
                    <button class="close-popup  px-4 py-2 bg-red-500 text-white rounded-md">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

@push('scripts')
<script>
  function confirmDelete(couponId) {
      var overlay = document.getElementById('overlay-delete');
      var popup = document.getElementById('popup-delete-' + couponId);
      overlay.classList.remove('hidden');
      popup.classList.remove('hidden');
  }

  function closePopup(couponId) {
      var overlay = document.getElementById('overlay-delete');
      var popup = document.getElementById('popup-delete-' + couponId);
      overlay.classList.add('hidden');
      popup.classList.add('hidden');
  }
</script>

@endpush

  @endsection
