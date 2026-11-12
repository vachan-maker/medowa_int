<div>
    <h2 class="text-2xl font-semibold tracking-tight text-[#1d1d1f] sm:text-3xl">
        Accessories. <span class="font-normal text-gray-500">Essentials that pair perfectly with your favourite products.</span>
    </h2>

    <div class="mt-6 flex snap-x gap-5 overflow-x-auto p-3 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
        @foreach ($accessories as $accessory)
            <article
                class="group flex h-100 w-full max-w-84 shrink-0 snap-start flex-col overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-black/5 transition duration-300 ease-out hover:-translate-y-0.5 hover:shadow-xl"
            >
                <div class="min-h-0 flex-1 overflow-hidden">
                    <img
                        src="{{ Storage::disk('public')->url($accessory->image_url) }}"
                        alt="{{ $accessory->name }}"
                        loading="lazy"
                        class="h-full w-full object-contain"
                    >
                </div>

                <div class="flex flex-col gap-1.5 p-5">
                    <span class="inline-flex w-fit rounded-full bg-amber-100 px-2.5 py-0.5 text-[11px] font-semibold uppercase tracking-wide text-amber-700">
                        New
                    </span>
                    <h3 class="line-clamp-2 text-base font-semibold leading-snug" style="color: {{ $accessory->string_color }}">
                        {{ $accessory->name }}
                    </h3>
                </div>
            </article>
        @endforeach
    </div>
</div>
