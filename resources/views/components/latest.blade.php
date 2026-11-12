<div>
    <h2>The Latest. <span>Take a look at what's new</span></h2>
    <div class="mt-6 flex gap-4 overflow-x-auto pb-2">
        @foreach ($latestProducts as $latest)
            <div
                class="h-80 w-64 shrink-0 rounded-xl bg-cover bg-center"
                style="background-image: url('{{ Storage::disk('public')->url($latest->image_url) }}')"
            ></div>
        @endforeach
    </div>
</div>
