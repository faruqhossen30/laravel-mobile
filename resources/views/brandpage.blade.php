@php
    use App\Models\Brand;
    $brands = Brand::get();
@endphp

<section class="bg-slate-200 py-4">
    <div class="container mx-auto bg-white">
        <div class="flex justify-between items-center border-b p-3 bg-white rounded-lg">
            <h2 class="text-lg font-bold">CHOOSE YOUR BRAND</h2>

        </div>

        <div id="brandslider" class="owl-carousel owl-theme grid grid-cols-12 gap-2 py-2">
            @foreach ($brands as $brand)
                <div class="col-span-1 border group hover:shadow-xl   ">
                    <a href="#" class=" bg-white inline-block rounded px-3 py-1">
                        <div class="flex items-center bg-slate-100 rounded-md overflow-hidden h-20">
                            <img src="{{ asset('storage/'.$brand->thumbnail) }}" class="" alt="">
                        </div>
                        <p class="text-center text-xs font-medium py-2 capitalize">{{$brand->name}}</p>

                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
