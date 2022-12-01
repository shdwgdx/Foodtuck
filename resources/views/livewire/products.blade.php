<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    @foreach ($products as $product)
        <div class="relative mb-6 mr-6">
            <div class="absolute top-[45%] left-[35%] text-white flex">
                <h1 class="mr-3">Hello</h1>
                <h1>olleH</h1>
            </div>
            <img src="{{ asset("storage/$product->image") }}" alt="" class="w-[312px] h-[267px] mb-2">
            <h2 class="mb-1 text-lg font-bold font-['Inter'] text-[#333333]">{{ $product->title }}
            </h2>
            <p class="text-base font-['Inter'] text-[#FF9F0D]">
                {{ $product->price - ($product->price * $product->discount) / 100 }}₽<span
                    class="pl-2 text-base font-['Inter'] text-[#828282] line-through">
                    @if ($product->discount > 0)
                        {{ $product->price }}₽
                    @else
                    @endif
                </span>
            </p>
        </div>
    @endforeach
</div>
