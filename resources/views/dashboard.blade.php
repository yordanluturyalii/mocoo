<x-app-layout>
    <main x-data="{isModalOpenForm: false}">
        {{--  Card  --}}
        <div class="w-3/4 h-auto mx-auto bg-neutral-700/50 text-neutral-300 py-8 rounded-lg mt-20">
            <div class="flex justify-between items-center pb-8 border-b border-gray-500">
                <input type="text" name="file" placeholder="Cari document anda"
                       class="w-64 outline-gray-500 border-gray-500 rounded bg-neutral-700 text-neutral-300 focus:outline-none focus:ring-gray-500 mx-10">
                <input type="button" value="Upload PDF"
                       class="bg-neutral-700 px-5 py-2 rounded border border-gray-500 cursor-pointer mx-10" x-on:click="isModalOpenForm = true">
            </div>
        </div>
        {{--  End Card  --}}

        {{--  Upload PDF  --}}
        <div x-cloak x-show="isModalOpenForm" x-transition.opacity.duration.200ms x-trap.inert.noscroll="isModalOpenForm"
             @keydown.esc.window="modalIsOpen = false" @click.self="modalIsOpen = false"
             class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8"
             role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
            <div x-show="isModalOpenForm"
                 x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
                 x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
                 class="flex max-w-lg flex-col gap-4 overflow-hidden rounded-md border border-neutral-300 bg-white text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                <div
                    class="flex items-center justify-between p-4 border border-neutral-700 bg-neutral-950/20">
                    <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-neutral-900 dark:text-white">
                        Upload Pdf</h3>
                    <button @click="isModalOpenForm = false" aria-label="close modal">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                             stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <div class="px-4 py-8">
                    <input type="file" class="p-2 border border-gray-500 rounded bg-neutral-700/50 focus:outline-none">
                </div>
                <div
                    class="flex flex-col-reverse justify-between gap-2 border-t p-4 border-neutral-700 bg-neutral-950/20 sm:flex-row sm:items-center md:justify-end">
                    <button @click="isModalOpenForm = false" type="button"
                            class="cursor-pointer whitespace-nowrap rounded-md bg-white px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-700 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0">
                        Submit
                    </button>
                </div>
            </div>
        </div>
        {{--  End Upload PDF  --}}
    </main>
</x-app-layout>
