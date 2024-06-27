@extends('dashboard.layouts.master')

@section('content')
<div class="flex">
@include('dashboard.layouts.sidebar')

    <!-- Content Body -->
    <div class="flex-1 overflow-hidden p-4 mt-5">
        <h1 class="text-3xl font-Bebas font-bold ml-10">theme</h1>

        <!-- Popup -->
        <div class="">
            <div class="relative popup-trigger max-w-7xl mx-auto mt-20" data-type="home">
                <img class="h-64 w-full object-cover rounded-md" src="https://images.unsplash.com/photo-1680725779155-456faadefa26" alt="Random image">
                <div class="absolute inset-0 bg-gray-700 opacity-60 rounded-md"></div>
                <div class="absolute top-2 left-2 flex items-center justify-center">
                    <h2 class="text-white text-3xl font-Bebas tracking-[6px] font-bold">HOME</h2>
                </div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <h2 class="text-white text-3xl font-bold">Get Lost in Mountains</h2>
                </div>
            </div>

            <div class="relative popup-trigger max-w-7xl mx-auto mt-20" data-type="about">
                <img class="h-64 w-full object-cover rounded-md" src="https://images.unsplash.com/photo-1680725779155-456faadefa26" alt="Random image">
                <div class="absolute inset-0 bg-gray-700 opacity-60 rounded-md"></div>
                <div class="absolute top-2 left-2 flex items-center justify-center">
                    <h2 class="text-white text-3xl font-Bebas tracking-[6px] font-bold">About</h2>
                </div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <h2 class="text-white text-3xl font-bold">Get Lost in Mountains</h2>
                </div>
            </div>
        </div>

        <!-- Popup -->
        <div class="popup hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white overflow-hidden rounded-lg">
            <div class="flex  items-center mb-4">
            <div class="w-full">
                <div class="text-2xl py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">content Changed</div>

                <form class="py-4 px-6 text-lg overflow-y-auto" action="{{route('changeBackground')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <input type="hidden" name="type" id="section-type">
                        <label class="block text-gray-700 font-bold mb-2">Upload Images</label>
                        <div class="drop-zone border-dashed border-gray-300 border-2 p-4 cursor-pointer text-center">
                        <p>Upload photos</p>
                        <input type="file" name="image" id="file-input" multiple accept="image/*" class="hidden" />
                        </div>
                        <div class="image-preview flex flex-wrap mt-4" id="image-preview"></div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">Enter Text</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" name="title" type="text" placeholder="Name Product (en)">
                    </div>

                    <div class="flex items-center gap-3 justify-center mb-4 ">
                        <button class="bg-[#FDC031] text-[#09080B] py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            ADD Image
                        </button>
                        <button class="close-popup  px-4 py-2 bg-red-500 text-white rounded-md">Close</button>
                    </div>
                </form>

        </div>
    </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>

@push('scripts')
<script>
    document.querySelectorAll('.popup-trigger').forEach(function(trigger) {
        trigger.addEventListener('click', function() {
            const type = this.getAttribute('data-type');
            document.getElementById('section-type').value = type;
            document.querySelector('.popup').classList.remove('hidden');
        });
    });

    document.querySelector('.close-popup').addEventListener('click', function() {
        document.querySelector('.popup').classList.add('hidden');
    });
</script>
@endpush

@endsection
