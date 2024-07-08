<?php /** @var ConfettiCode\ErrorHandler\Decorator $decorator */ ?>
<section
        class="@container flex flex-col p-6 sm:p-12 bg-white dark:bg-gray-900/80 text-gray-900 dark:text-gray-100 rounded-lg default:col-span-full default:lg:col-span-6 default:row-span-1 dark:ring-1 dark:ring-gray-800 shadow-xl mt-6 overflow-x-auto">
    <div x-data="{
            includeVendorFrames: false,
            index: 0,
        }">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3" x-clock="">
            <div class="hidden overflow-x-auto sm:col-span-1 lg:block">
                <div class="h-[35.5rem] scrollbar-hidden trace text-sm text-gray-400 dark:text-gray-300">
                    <div class="mb-2 inline-block rounded-full bg-red-500/20 px-3 py-2 dark:bg-red-500/20 sm:col-span-1">
                        <button @click="includeVendorFrames = !includeVendorFrames"
                                class="inline-flex items-center font-bold leading-5 text-red-500">
                            <span x-show="includeVendorFrames" style="display: none;">Collapse</span>
                            <span x-show="!includeVendorFrames">Expand</span>
                            <span class="ml-1">vendor frames</span>

                            <div class="flex flex-col ml-1 -mt-2" x-show="includeVendorFrames" style="display: none;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     class="w-4 h-4" style="margin-bottom: -8px;">
                                    <path fill-rule="evenodd"
                                          d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     class="w-4 h-4" style="margin-bottom: -8px;">
                                    <path fill-rule="evenodd"
                                          d="M9.47 6.47a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 1 1-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 0 1-1.06-1.06l4.25-4.25Z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </div>

                            <div class="flex flex-col ml-1 -mt-2" x-show="! includeVendorFrames">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     class="w-4 h-4" style="margin-bottom: -8px;">
                                    <path fill-rule="evenodd"
                                          d="M9.47 6.47a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 1 1-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 0 1-1.06-1.06l4.25-4.25Z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     class="w-4 h-4" style="margin-bottom: -8px;">
                                    <path fill-rule="evenodd"
                                          d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </button>
                    </div>

                    <div class="mb-12 space-y-2">

                        <?php foreach ($decorator->getStackTrace() as $index => $trace): ?>
                            <div x-show="! includeVendorFrames">
                            </div>

                            <button class="w-full text-left dark:border-gray-900" x-show="true"  x-on:click="index = <?php echo $index; ?>">
                                <div x-bind:class="
                            index === <?php echo $index; ?>
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        ">
                                    <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                                        <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300"><?php echo $trace->getFile(); ?></span>
                                    <span class="font-mono text-xs">:<?php echo $trace->getLine(); ?></span>
                                </span>
                                        </div>
                                        <div class="text-gray-500 dark:text-gray-400">
                                            <?php echo $trace->getAction(); ?>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <?php foreach ($decorator->getStackTrace() as $index => $trace): ?>
                <div class="sm:col-span-2" x-show="index === <?php echo $index; ?>">
                    <div class="mb-3">
                        <div class="text-md text-gray-500 dark:text-gray-400">
                            <div class="mb-2">

                                <span class="wrap text-gray-900 dark:text-gray-300"><?php echo $trace->getFile(); ?></span>

                                <span class="font-mono text-xs">:<?php echo $trace->getLine(); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
                <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                                style="display: none;" id="frame-<?php echo $index; ?>"
                                class="language-php highlightable-code  default-highlightable-code  scrollbar-hidden overflow-y-hidden"
                                data-line-number="<?php echo $trace->getLine(); ?>" data-ln-start-from="<?php echo max($trace->getLine() - 5, 1); ?>"><?php echo $trace->getCodeSnippet()?></code></template></pre>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
