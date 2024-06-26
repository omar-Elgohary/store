@extends('dashboard.layouts.master')

@section('content')
    <div class="flex">
    @include('dashboard.layouts.sidebar')

        <!-- Content Body -->
        <div class="flex-1 overflow-hidden p-4 mt-5">

          <section class="">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto  lg:py-0">
              <a href="#" class="flex items-center text-2xl font-semibold text-gray-900 ">
                <img class="w-40 h-20 mr-2" src="{{asset('assets/image/logoblack.svg')}}" alt="logo">
              </a>
              <div class="w-[100%] sm:w-[80%] md:w-[50%] p-6 bg-white rounded-lg shadow  sm:p-8">
                <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">Change Password</h2>

                <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" action="{{ route('resetPassword') }}" method="POST">
                  @csrf

                  <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                      placeholder="name@company.com" required="">
                  </div>

                  <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">NewPassword</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                      required="">
                  </div>
                  <div>
                    <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 ">Confirm password</label>
                    <input type="confirm-password" name="confirm_password" id="confirm_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                      required="">
                  </div>

                  <button type="submit" class="w-full text-black bg-[#FDC031] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Reset passwod</button>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>

@endsection
