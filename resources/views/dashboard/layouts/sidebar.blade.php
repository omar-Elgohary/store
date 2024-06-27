<div class=" absolute md:relative bg-[#09080B] toggle text-white w-56 min-h-screen hidden md:block " id="">
    <!-- Your Sidebar Content -->
    <div class="p-4 font-Bebas ">
      <h1 class=" text-[30px] md:text-[40px] font-Bebas ">Dashboard</h1>
        <ul class="mt-6 text-[20px] md:text-[25px] tracking-[1px]">
        <li class="mb-3"><a href="{{route('dashboard')}}" class=" flex items-center gap-2 hover:text-[#FDC031]">
            <i class="fa-solid fa-shop"></i>
            Home
          </a></li>
        <li class="mb-3"><a href="{{route('products')}}" class="flex items-center gap-2  hover:text-[#FDC031]">
            <i class="fa-solid fa-basket-shopping"></i>
            Products</a></li>
        <li class="mb-3"><a href="OrderDash.html" class=" flex items-center gap-2 hover:text-[#FDC031]">
            <i class="fa-regular fa-bell"></i>
            The Order</a></li>
        <li class="mb-3"><a href="{{ route('backgrounds')}}" class=" hover:text-[#FDC031] flex items-center gap-2">
            <i class="fa-solid fa-images"></i>
            theme</a></li>
        <li class="mb-3"><a href="{{route('coupons')}}" class=" hover:text-[#FDC031] flex items-center gap-2">
          <i class="fa-solid fa-ticket"></i>
            coupon</a></li>
        <li class="mb-3"><a href="{{route('contactMessages')}}" class="flex items-center gap-2 hover:text-[#FDC031]">
            <i class="fa-solid fa-user"></i>
            submit</a></li>
        <li class="mb-3"><a href="{{route('resetPasswordPage')}}" class="flex items-center gap-2 hover:text-[#FDC031]">
            <i class="fa-solid fa-unlock-keyhole"></i>
            Reset Password</a></li>
      </ul>

      <h2 class="mt-20">
        <a href="{{route('logout')}}" class="flex items-center gap-2  text-[25px] hover:text-[#FDC031]">
          <i class="fa-solid fa-arrow-right-from-bracket"></i>
          Log out
        </a>
      </h2>
    </div>
  </div>
