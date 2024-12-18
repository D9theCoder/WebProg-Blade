<x-layout>
    <x-navbar />
    <div class="min-h-full" x-data="{ isOpen: false }">
        <div class="mandatory-scroll-snapping -mt-24"> <!-- Scroll Animation -->
            <x-main />
            <x-information />
            <x-tips />
            <x-about />
            <x-support />
          </div>
    </div>
</x-layout>