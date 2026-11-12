@php
    $links = ['Store', 'Mac', 'iPad', 'iPhone', 'Watch', 'Vision', 'AirPods', 'TV & Home', 'Entertainment', 'Accessories', 'Support'];
@endphp

<header class="sticky top-0 z-50 border-b border-black/5 bg-[#fbfbfd]/80 backdrop-blur-md">
    <nav aria-label="Global" class="mx-auto flex h-11 max-w-[1024px] items-center justify-between px-5 sm:px-8">
        <a href="{{ url('/') }}" aria-label="Apple" class="text-[#1d1d1f] opacity-80 transition hover:opacity-100">
            <svg viewBox="0 0 16 16" class="h-4 w-4 fill-current" aria-hidden="true">
                <path
                    d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333-.015-1.977.207C2.55 4.699 1.5 6.148 1.5 8.25c0 .641.12 1.302.36 2.076.32 1.029.91 2.077 1.638 2.735.728.658 1.487.666 1.487.666.65-.016 1.28-.526 1.644-.545.364-.019 1.077.36 1.705.383.628.022 1.317-.146 1.997-.598.68-.452 1.226-1.155 1.606-1.87.11-.209.13-.312.13-.312s-.32-.138-.632-.324c-.54-.322-1.4-1.13-1.4-2.488 0-1.14.51-1.928 1.36-2.475.238-.153.51-.28.79-.376-.048-.07-.1-.14-.15-.21Z" />
            </svg>
        </a>

        <ul class="mx-8 hidden flex-1 items-center justify-between text-xs text-[#1d1d1f] lg:flex">
            @foreach ($links as $link)
                <li>
                    <a href="#" class="opacity-80 transition hover:opacity-100">{{ $link }}</a>
                </li>
            @endforeach
        </ul>

        <div class="hidden items-center gap-5 text-[#1d1d1f] lg:flex">
            <a href="#" aria-label="Search" class="opacity-80 transition hover:opacity-100">
                <svg viewBox="0 0 16 16" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" aria-hidden="true">
                    <circle cx="7" cy="7" r="4.5" />
                    <path d="m10.5 10.5 3 3" />
                </svg>
            </a>
            <a href="#" aria-label="Shopping Bag" class="opacity-80 transition hover:opacity-100">
                <svg viewBox="0 0 16 16" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.5"
                    stroke-linejoin="round" aria-hidden="true">
                    <path d="M3 5.5h10l-.8 8H3.8L3 5.5Z" />
                    <path d="M6 5.5V4a2 2 0 0 1 4 0v1.5" />
                </svg>
            </a>
        </div>

        <div class="flex items-center gap-5 text-[#1d1d1f] lg:hidden">
            <a href="#" aria-label="Shopping Bag" class="opacity-80 transition hover:opacity-100">
                <svg viewBox="0 0 16 16" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.5"
                    stroke-linejoin="round" aria-hidden="true">
                    <path d="M3 5.5h10l-.8 8H3.8L3 5.5Z" />
                    <path d="M6 5.5V4a2 2 0 0 1 4 0v1.5" />
                </svg>
            </a>
            <details>
                <summary aria-label="Menu"
                    class="flex h-11 w-6 cursor-pointer list-none items-center justify-center opacity-80 transition hover:opacity-100 [&::-webkit-details-marker]:hidden">
                    <svg viewBox="0 0 18 18" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" aria-hidden="true">
                        <path d="M2 6h14M2 12h14" />
                    </svg>
                </summary>
                <div class="absolute inset-x-0 top-full border-t border-black/5 bg-[#fbfbfd] pb-6 shadow-sm">
                    <ul class="mx-auto max-w-[1024px] px-5 pt-1 sm:px-8">
                        @foreach ($links as $link)
                            <li>
                                <a href="#"
                                    class="block border-b border-black/5 py-3 text-[17px] font-semibold text-[#1d1d1f] last:border-0">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </details>
        </div>
    </nav>
</header>
