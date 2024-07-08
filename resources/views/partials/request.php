<?php /** @var ConfettiCode\ErrorHandler\Decorator $decorator */ ?>
<section
    class="@container flex flex-col p-6 sm:p-12 bg-white dark:bg-gray-900/80 text-gray-900 dark:text-gray-100 rounded-lg default:col-span-full default:lg:col-span-6 default:row-span-1 dark:ring-1 dark:ring-gray-800 shadow-xl mt-6 overflow-x-auto">
    <div>
        <span class="text-xl font-bold lg:text-2xl">Request</span>
    </div>

    <div class="mt-2">
        <span>GET</span>
        <span class="text-gray-500">/sample.php</span>
    </div>

    <div class="mt-4">
        <span class="font-semibold text-gray-900 dark:text-white">Headers</span>
    </div>

    <dl class="mt-1 grid grid-cols-1 rounded border dark:border-gray-800">
        <div class="flex items-center gap-2  dark:border-gray-800">
                <span data-tippy-content="host"
                      class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">
                    host
                </span>
            <span class="min-w-0 flex-grow" style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    ">
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code
                            class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">localhost:8080</code></pre>
                </span>
        </div>
        <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span data-tippy-content="user-agent"
                      class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">
                    user-agent
                </span>
            <span class="min-w-0 flex-grow" style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    ">
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code
                            class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:127.0) Gecko/20100101 Firefox/127.0</code></pre>
                </span>
        </div>
        <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span data-tippy-content="accept"
                      class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">
                    accept
                </span>
            <span class="min-w-0 flex-grow" style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    ">
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code
                            class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8</code></pre>
                </span>
        </div>
        <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span data-tippy-content="accept-language"
                      class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">
                    accept-language
                </span>
            <span class="min-w-0 flex-grow" style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    ">
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code
                            class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">en-US,en;q=0.5</code></pre>
                </span>
        </div>
        <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span data-tippy-content="accept-encoding"
                      class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">
                    accept-encoding
                </span>
            <span class="min-w-0 flex-grow" style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    ">
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code
                            class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">gzip, deflate, br, zstd</code></pre>
                </span>
        </div>
        <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span data-tippy-content="connection"
                      class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">
                    connection
                </span>
            <span class="min-w-0 flex-grow" style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    ">
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code
                            class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">keep-alive</code></pre>
                </span>
        </div>
        <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span data-tippy-content="cookie"
                      class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">
                    cookie
                </span>
            <span class="min-w-0 flex-grow" style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    ">
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code
                            class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">_ga_5FR39ZP45B=GS1.1.1710407301.1.0.1710407301.60.0.0; _ga=GA1.1.654712288.1710407301; triplabot_session_1899=dXNlcl9fMjQ3NzBkYTAtYTIxOS00MTQzLWJlOTYtNWY3OWM2OTYzZTk4; _ga_57GFG9HB11=GS1.1.1714989595.12.0.1714989595.60.0.0; _ga_T5VV45EQKZ=GS1.1.1715735419.1.1.1715738579.60.0.0; _fbp=fb.0.1715735420664.1054842527; _ga_11BRH7DRLM=GS1.1.1715835606.2.1.1715835607.59.0.0; _ga_7WC856RG65=GS1.1.1716361739.1.1.1716361961.60.0.0; _ga_9M7B2L3K19=GS1.1.1717556488.2.0.1717556488.60.0.0; PHPSESSID=qtja8accrvnldj7h6hms6di4fl; XSRF-TOKEN=eyJpdiI6IkoxdFZxVXFDbjNhZUlXMEdpVmhxZGc9PSIsInZhbHVlIjoiN3FtL2dydkZqVXVIRHNCRXY2VkpsMVFmUE9RQWxMZ2hYTkNwc2VKWUtvY2UxWGJBYVdTN0lyVUhuOU5CWEJmVzM3aDFoOEc0Sndza3hTM1NiK1Q4YkRaOGFmblh4bUFvSlowVVEwMDNZY09KUGZiaWtQMjNCZ0xIRUk3SWZqSFMiLCJtYWMiOiJkOGZhODRmYzcxNTNlYTViYzQyMjY4MmI3OWEwYmFjZTFlNGY2MDIwYWUzODY1YmFmYWZkYjY0Yzk4ZDJhNTYyIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6Ii9zaWc5cGFLN2hTU0lNU2dFWFlpNlE9PSIsInZhbHVlIjoiYVFPalJvcW94VG94NmZheWJOZXNoQkUxZXN2SmVPeDE1eHBad2pwYk02UW1PMFUrbHlGUHpzYXJCaEtiUEc2N1VPSkptczZHTlUwaW15eEhueFhYcEVRZmxqR0p1Z283VGVEK3VDZktVYUM0L3lJUGJDcWoxbUprSnlsM2krSEciLCJtYWMiOiJjYzE0YzIxM2RjMjQyMDA2YzFiM2RjZWE1MTQ3MTc2ZDI5NjhhMzFiN2E0ZGQwOTY0YzFlM2ViYzlhMDgzZWRhIiwidGFnIjoiIn0%3D</code></pre>
                </span>
        </div>
        <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span data-tippy-content="upgrade-insecure-requests"
                      class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">
                    upgrade-insecure-requests
                </span>
            <span class="min-w-0 flex-grow" style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    ">
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code
                            class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">1</code></pre>
                </span>
        </div>
        <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span data-tippy-content="sec-fetch-dest"
                      class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">
                    sec-fetch-dest
                </span>
            <span class="min-w-0 flex-grow" style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    ">
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code
                            class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">document</code></pre>
                </span>
        </div>
        <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span data-tippy-content="sec-fetch-mode"
                      class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">
                    sec-fetch-mode
                </span>
            <span class="min-w-0 flex-grow" style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    ">
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code
                            class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">navigate</code></pre>
                </span>
        </div>
        <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span data-tippy-content="sec-fetch-site"
                      class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">
                    sec-fetch-site
                </span>
            <span class="min-w-0 flex-grow" style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    ">
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code
                            class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">none</code></pre>
                </span>
        </div>
        <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span data-tippy-content="sec-fetch-user"
                      class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">
                    sec-fetch-user
                </span>
            <span class="min-w-0 flex-grow" style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    ">
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code
                            class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">?1</code></pre>
                </span>
        </div>
        <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span data-tippy-content="priority"
                      class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">
                    priority
                </span>
            <span class="min-w-0 flex-grow" style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    ">
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code
                            class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">u=1</code></pre>
                </span>
        </div>
    </dl>

    <div class="mt-4">
        <span class="font-semibold text-gray-900 dark:text-white">Body</span>
    </div>

    <div class="mt-1 rounded border dark:border-gray-800">
        <div class="flex items-center">
            <span class="min-w-0 flex-grow"
                  style="-webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem))">
                <pre class="scrollbar-hidden mx-5 my-3 overflow-y-hidden text-xs lg:text-sm"><code
                        class="overflow-y-hidden scrollbar-hidden overflow-x-scroll scrollbar-hidden-x">No body data</code></pre>
            </span>
        </div>
    </div>
</section>
