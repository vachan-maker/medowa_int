<div>
    <h2 class="text-2xl font-semibold tracking-tight text-[#1d1d1f] sm:text-3xl">
        Loud and clear. <span class="font-normal text-gray-500">Unparalleled choices for rich, high-quality
            sound.</span>
    </h2>

    <div class="mt-6 flex snap-x gap-5 overflow-x-auto px-3 pt-3 pb-8 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
        @foreach ($sounds as $sound)
            <article
                class="group flex h-100 w-full max-w-84 shrink-0 snap-start flex-col overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-black/5 transition duration-300 ease-out hover:-translate-y-0.5 hover:shadow-xl">
                <div class="min-h-0 flex-1 overflow-hidden">
                    <img src="{{ Storage::disk('public')->url($sound->image_url) }}" alt="{{ $sound->name }}" loading="lazy"
                        class="h-full w-full object-contain">
                </div>

                <div class="flex flex-col gap-1.5 p-5">
                    <span class="text-amber-500">New</span>
                    <h3 class="line-clamp-2 text-base font-semibold leading-snug" style="color: {{ $sound->string_color }}">
                        {{ $sound->name }}
                    </h3>
                </div>
            </article>
        @endforeach
    </div>
</div>