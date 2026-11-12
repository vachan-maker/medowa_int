<div class="flex flex-row gap-4">
    @foreach ($categories as $category)
        <div class="flex flex-col items-center justify-end gap-4 font-bold cursor-pointer">
            <img src="{{ asset($category->image_url) }}" alt="{{ $category->name }}" class="hover:scale-105 ease-in-out transition duration-300 w-50 h-auto" width="200" height="130">
            <p class="font-semibold text-sm text-gray-700">{{ $category->name }}</p>
        </div>
    @endforeach
</div>
