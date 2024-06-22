<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('assets/src/output.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <!-- font Bebas Neue  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <!-- Manrope -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Manrope:wght@200..800&display=swap" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    @include('flash')
  <div class="flex w-screen flex-wrap text-slate-800">
    <div class="flex w-full flex-col md:w-1/2">
      <div class="flex justify-center pt-12 md:justify-start md:pl-12">
        <a href="#" class="text-3xl font-bold text-[#FDC031] font-Bebas">
          <img src="{{ asset('assets/image/logoblack.svg') }}" alt="" class="w-36">
        </a>
      </div>
      <div class="my-auto font-Manrope mx-auto flex flex-col justify-center px-6 pt-8 md:justify-start lg:w-[28rem]">
        <p class="text-center text-3xl font-bold md:leading-tight md:text-left md:text-5xl font-Manrope">
          Welcome back <br />
          to <span class="text-[#FDC031]">XHYPE</span>
        </p>
        <p class="mt-6 text-center font-medium md:text-left">Sign in to your account below.</p>

        <form action="{{ route('login') }}" method="POST" class="flex flex-col items-stretch pt-3 md:pt-8">
            @csrf
          <div class="flex flex-col pt-4">
            <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-[#FDC031]">
              <input type="email" name="email" id="login-email"
                class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none"
                placeholder="Email" />
            </div>
          </div>
          <div class="mb-4 flex flex-col pt-4">
            <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border[#FDC031]">
              <input type="password" name="password" id="login-password"
                class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none"
                placeholder="Password" />
            </div>
          </div>
          <!-- <a href="forgot.html" class="mb-6 text-center text-sm font-medium text-gray-600 md:text-left">Forgot
            password?</a> -->
          <button type="submit" class="rounded-lg bg-[#FDC031] px-4 py-2 text-center text-base font-semibold text-white shadow-md outline-none ring-blue-500 ring-offset-2 transition hover:bg-blue-700 focus:ring-2 md:w-32">Sign in</button>
        </form>

      </div>
    </div>
    <div class="relative hidden h-screen select-none bg-[#09080B] bg-gradient-to-br md:block md:w-1/2">
      <div class="py-16 px-8 text-white xl:w-[40rem]">
        <span class="rounded-full bg-white px-3 py-1 font-medium text-[#FDC031]">Fashion and clothing</span>
        <p class="my-6 text-3xl font-normal leading-10 font-Bebas tracking-[1px]">Never shop through a <span
            class="abg-white whitespace-nowrap py-2 text-[#FDC031]">store XHYPE</span>.</p>
        <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt necessitatibus nostrum
          repellendus ab totam.</p>
        <a href="#" class="font-semibold tracking-wide text-white underline underline-offset-4">Learn More</a>
      </div>
      <img class="ml-8 w-11/12 max-w-lg rounded-lg object-cover" src="{{ asset('assets/image/shirt.png') }}" />
    </div>
  </div>

</body>

</html>
