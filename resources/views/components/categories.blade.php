<div
    class="flex snap-x flex-row gap-4 overflow-x-auto py-2 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
    @foreach ($categories as $category)
        <div class="flex shrink-0 snap-start flex-col items-center justify-end gap-4 font-bold cursor-pointer">
            <img src="{{ asset($category->image_url) }}" alt="{{ $category->name }}"
                class="hover:scale-105 ease-in-out transition duration-300 w-32 h-auto sm:w-42" width="200"
                height="130">
            <p class="font-semibold text-sm text-gray-700">{{ $category->name }}</p>
        </div>
    @endforeach
</div>
