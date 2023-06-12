<nav x-data="{ open: false}" class="bg-gray-300 top-0 border-gray-200 px-2 sm:px-4 py-2">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/"><span class="self-center text-xl font-semibold whitespace-nowrap">Student System</span></a>
        <button @click="open = !open" class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M120-240v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg>
        </button>
        <div class="w-full md:block md:w-auto" x-show="open"><x-menu /></div> <!--x-component_name-->
        <div class="hidden w-full md:block md:w-auto"><x-menu /></div>
    </div>
</nav>
