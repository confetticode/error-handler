<section
    class="@container flex flex-col p-6 sm:p-12 bg-white dark:bg-gray-900/80 text-gray-900 dark:text-gray-100 rounded-lg default:col-span-full default:lg:col-span-6 default:row-span-1 dark:ring-1 dark:ring-gray-800 shadow-xl mt-6 overflow-x-auto">
    <div>
        <span class="text-xl font-bold lg:text-2xl">Application</span>
    </div>

    <div class="mt-4">
        <span class="font-semibold text-gray-900 dark:text-white"> Routing </span>
    </div>

    <dl class="mt-1 grid grid-cols-1 rounded border dark:border-gray-800">
        <div class="flex items-center gap-2  dark:border-gray-800">
                        <span data-tippy-content="controller"
                              class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">controller</span>
            <span class="min-w-0 flex-grow" style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    ">
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code
                            class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">Closure</code></pre>
                </span>
        </div>
        <div class="flex items-center gap-2 border-t dark:border-gray-800">
                        <span data-tippy-content="middleware"
                              class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">middleware</span>
            <span class="min-w-0 flex-grow" style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    ">
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code
                            class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">web</code></pre>
                </span>
        </div>
    </dl>


    <div class="mt-4">
        <span class="font-semibold text-gray-900 dark:text-white"> Database Queries </span>
        <span class="text-xs text-gray-500 dark:text-gray-400">
                    </span>
    </div>

    <dl class="mt-1 grid grid-cols-1 rounded border dark:border-gray-800">
        <div class="flex items-center gap-2  dark:border-gray-800">
            <div class="lg:text-md w-[8rem] flex-none truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">
                <span>sqlite</span>
                <span class="hidden text-xs text-gray-500 lg:inline-block">(0.25 ms)</span>
            </div>
            <span class="min-w-0 flex-grow" style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    ">
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code
                            class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">select * from "sessions" where "id" = '6ZLkcAHoiUofea7Az72LqpRidpNr78NwYhnw2FT9' limit 1</code></pre>
                </span>
        </div>
    </dl>
</section>
