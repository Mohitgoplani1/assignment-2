<x-guest-layout>
    <x-slot name="header">
        {{ __('Our Articles') }}
    </x-slot>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @if($post)
        <section class="prose p-6" style="width: 2282px">
            <header>
                <h2 style="font-size: 45px;color:#b0976d">{{ $post->title }}</h2>
            </header>
            <main>

                <a href="">
                    <img loading="lazy" decoding="async" src="/public/Images/3_47ad27a4-db92-4c31-a3ca-d98e645f6ab4.webp" alt="White Sauce Pasta Recipe">
                  </a>

                {!! $post->content !!}
            </main>
        </section>
        @endif
    </div>
</x-guest-layout>
