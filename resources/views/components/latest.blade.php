<div>
    <h2>The Latest. <span>Take a look at what's new</span></h2>

    <div class="mt-6 flex snap-x gap-4 overflow-x-auto p-3">
        @foreach ($latestProducts as $latest)
            <div
                class="relative h-100 w-full max-w-84 shrink-0 snap-start overflow-hidden rounded-xl bg-cover bg-center shadow-2xl transition duration-200 ease-in-out hover:z-10 hover:scale-105"
                style="background-image: url('{{ Storage::disk('public')->url($latest->image_url) }}')"
            >

                <div class="absolute top-0 left-0 p-4 text-white">
                    <span class="text-amber-500">New</span>
                    <h3 class="text-xl font-bold">
                        {{ $latest->name }}
                    </h3>
                </div>
            </div>
        @endforeach
    </div>
</div>