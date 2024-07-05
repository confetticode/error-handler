<section
    class="@container flex flex-col p-6 sm:p-12 bg-white dark:bg-gray-900/80 text-gray-900 dark:text-gray-100 rounded-lg default:col-span-full default:lg:col-span-6 default:row-span-1 dark:ring-1 dark:ring-gray-800 shadow-xl mt-6 overflow-x-auto">
    <div x-data="{
            includeVendorFrames: false,
            index: 0,
        }">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3" x-clock="">
            <div class="hidden overflow-x-auto sm:col-span-1 lg:block">
                <div class="h-[35.5rem] scrollbar-hidden trace text-sm text-gray-400 dark:text-gray-300">
                    <div class="mb-12 space-y-2">
                        <?php foreach ($frames as $index => $frame): ?>
                        <button class="w-full text-left dark:border-gray-900" x-show="true"  x-on:click="index = <?php echo $index; ?>">
                            <div x-bind:class="
                            index === <?php echo $index; ?>
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        ">
                                <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                                    <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300"><?php echo $frame['file']; ?></span>
                                    <span class="font-mono text-xs">:<?php echo $frame['line']; ?></span>
                                </span>
                                    </div>
                                    <div class="text-gray-500 dark:text-gray-400">
                                        <?php echo $frame['action']; ?>
                                    </div>
                                </div>
                            </div>
                        </button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php foreach ($frames as $index => $frame): ?>
                <div class="sm:col-span-2" x-show="index === <?php echo $index; ?>">
                    <div class="mb-3">
                        <div class="text-md text-gray-500 dark:text-gray-400">
                            <div class="mb-2">

                                <span class="wrap text-gray-900 dark:text-gray-300"><?php echo $frame['file']; ?></span>

                                <span class="font-mono text-xs">:<?php echo $frame['line']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
                <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                            style="display: none;" id="frame-0"
                            class="language-php highlightable-code  default-highlightable-code  scrollbar-hidden overflow-y-hidden"
                            data-line-number="10" data-ln-start-from="5"><?php echo $frame['code']?></code></template></pre>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
