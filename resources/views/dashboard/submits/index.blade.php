@extends('dashboard.layouts.master')

@section('content')
    <div class="flex">
    @include('dashboard.layouts.sidebar')

        <!-- Content Body -->
        <div class="flex-1 overflow-hidden p-4 mt-5">
          <div class="shadow-lg rounded-lg overflow-x-auto w-[100%] md:w-auto d:mx-10">
            <table class="w-full table-fixed">
              <thead class="font-Bebas text-[25px] md:text-[30px] tracking-[1px] ">
                <tr class="bg-[#09080B] ">
                  <th class=" w-6 md:w-1/4 py-4 px-6 text-left text-[#FDC031]  uppercase">#</th>
                  <th class="w-64 md:w-1/4 py-4 px-6 text-left text-[#FDC031] uppercase">Name</th>
                  <th class="w-72 md:w-1/4 py-4 px-6 text-left text-[#FDC031] uppercase">Email</th>
                  <th class="w-64 md:w-1/4  py-4 px-6  text-left text-[#FDC031]  uppercase">Status</th>
                </tr>
              </thead>

                @forelse($submits as $key => $submit)
                    <tbody class="bg-white font-Manrope font-medium normal-case text-[20px]">
                        <tr>
                            <td class="py-4 px-6 border-b border-gray-200">{{ $key+1 }}</td>
                            <td class="py-4 px-6 border-b border-gray-200 capitalize">{{ $submit->name }}</td>
                            <td class="py-4 px-6 border-b border-gray-200 truncate">{{ $submit->email }}</td>
                            <td class="py-4 px-6 border-b border-gray-200">
                                <span class="bg-red-500 text-white py-1 px-3 rounded-full  text-[18px] capitalize">delete</span>
                            </td>
                        </tr>
                    </tbody>
                @empty
                <tbody class="bg-white font-Manrope font-medium normal-case text-[20px] ">
                    <tr>
                        <td class="py-4 px-6 border-b border-gray-200 text-center" colspan="4">
                            There Are No Data
                        </td>
                    </tr>
                </tbody>
                @endforelse
            </table>
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

    </div>
    </div>
</div>
</div>

@endsection
