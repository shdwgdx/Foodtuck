<div class="w-[312px] flex justify-center border border-solid border-[#F2F2F2] rounded-md">
    <div class="w-[248px] flex flex-col" x-data="{ textSearch: '' }">
        <div class=" mt-6 mb-6 w-[248px] relative">
            <input type="text" placeholder="Search product" class=" bg-[rgba(255_159_13_/0.1)] border-0  w-[248px]"
                x-model="textSearch" @keydown.enter="$wire.search(textSearch); textSearch = '';">
            <button
                class="bg-[#FF9F0D]
                w-[40px] h-[40px] absolute top-0 right-0 z-50 flex justify-center items-center"
                @click="$wire.search(textSearch); textSearch = '';">
                <img src="{{ asset('images/MagnifyingGlass.svg') }}" alt="">
            </button>
        </div>
        <div class="mb-6">
            <h2 class="text-xl font-['Helvetica'] text-[#333333] font-bold mb-6">Category</h2>
            <div class="flex flex-col" x-data="{ checked: [] }">
                @foreach ($categories as $category)
                    <div class="flex items-center mb-4">
                        <input type="checkbox" id="{{ $category->title }}" value="{{ $category->id }}" class="mr-2"
                            x-model="checked" @change="$wire.check(checked)">
                        <label for="{{ $category->title }}">{{ $category->title }}</label>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="mb-6">
            <h2 class="text-xl font-['Helvetica'] text-[#333333] font-bold mb-4">Filter By Price</h2>
            <div class="flex items-center justify-center ">
                <div x-data="range()" x-init="mintrigger();
                maxtrigger()" class="relative w-full max-w-xl">
                    <div class="mb-2">
                        <input type="range" step="100" x-bind:min="min" x-bind:max="max"
                            x-on:input="mintrigger" x-model="minprice"
                            class="absolute z-20 w-full h-2 opacity-0 appearance-none cursor-pointer pointer-events-none">

                        <input type="range" step="100" x-bind:min="min" x-bind:max="max"
                            x-on:input="maxtrigger" x-model="maxprice"
                            class="absolute z-20 w-full h-2 opacity-0 appearance-none cursor-pointer pointer-events-none">

                        <div class="relative z-10 h-[5px]">

                            <div class="absolute top-0 bottom-0 left-0 right-0 z-10 bg-gray-200 rounded-md"></div>

                            <div class="absolute top-0 bottom-0 z-20 bg-[#FF9F0D] shadow-[0_4px_4px_rgba(0,0,0,0.25)] rounded-md"
                                x-bind:style="'right:' + maxthumb + '%; left:' + minthumb + '%'"></div>

                            <div class="absolute top-1 left-0 z-30 w-[11px] h-[12px] -mt-2 -ml-1 bg-white flex items-center justify-center rounded-full"
                                x-bind:style="'left: ' + minthumb + '%'">
                                <div class="w-[6px] h-[6px] bg-[#FF9F0D] rounded-full"></div>
                            </div>

                            <div class="absolute top-1 right-0 z-30 w-[11px] h-[12px] -mt-2 -mr-1 bg-white flex items-center justify-center rounded-full"
                                x-bind:style="'right: ' + maxthumb + '%'">
                                <div class="w-[6px] h-[6px] bg-[#FF9F0D] rounded-full"></div>
                            </div>

                        </div>

                    </div>
                    <div class="flex justify-between">
                        <p class="text-base font-['Inter'] text-[#1E1E1E] font-[300]">From <span
                                x-text="minprice"></span>₽ to <span x-text="maxprice"></span>₽</p>
                        <p class="text-base font-['Inter'] text-[#0D0D0D] font-[300]">Filter</p>
                    </div>

                </div>
            </div>

        </div>
        <div>
            <h2 class="text-xl font-['Helvetica'] text-[#333333] font-bold mb-6">Latest Products</h2>
            <div class="flex flex-col w-[252px]">
                <div class="flex mb-[18px]">
                    <img src="{{ asset('images/latestitem1.png') }}" alt="" class="mr-4 w-[70px] h-[65px]">
                    <div class="flex flex-col mb-[18px]">
                        <h3 class="text-base font-['Helvetica'] text-[#4F4F4F] mb-2">Pizza</h3>
                        <img src="" alt="" class="mb-1">
                        <p class="text-sm font-['Helvetica'] text-[#4F4F4F]">$35.00</p>
                    </div>
                </div>
                <div class="flex mb-[18px]">
                    <img src="{{ asset('images/latestitem1.png') }}" alt="" class="mr-4 w-[70px] h-[65px]">
                    <div class="flex flex-col">
                        <h3 class="text-base font-['Helvetica'] text-[#4F4F4F] mb-2">Pizza</h3>
                        <img src="" alt="" class="mb-1">
                        <p class="text-sm font-['Helvetica'] text-[#4F4F4F]">$35.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    input[type=range]::-webkit-slider-thumb {
        pointer-events: all;
        width: 24px;
        height: 24px;
        -webkit-appearance: none;
        /* @apply w-6 h-6 appearance-none pointer-events-auto; */
    }
</style>
<script>
    function range() {
        return {
            minprice: 0,
            maxprice: 8000,
            min: 0,
            max: 8000,
            minthumb: 0,
            maxthumb: 0,

            mintrigger() {
                this.minprice = Math.min(this.minprice, this.maxprice - 500);
                this.minthumb = ((this.minprice - this.min) / (this.max - this.min)) * 100;
            },

            maxtrigger() {
                this.maxprice = Math.max(this.maxprice, this.minprice + 500);
                this.maxthumb = 100 - (((this.maxprice - this.min) / (this.max - this.min)) * 100);
            },
        }
    }
</script>
