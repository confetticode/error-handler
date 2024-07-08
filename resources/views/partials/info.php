<?php /** @var ConfettiCode\ErrorHandler\Decorator $decorator */ ?>
<section
        class="@container flex flex-col p-6 sm:p-12 bg-white dark:bg-gray-900/80 text-gray-900 dark:text-gray-100 rounded-lg default:col-span-full default:lg:col-span-6 default:row-span-1 dark:ring-1 dark:ring-gray-800 shadow-xl">
    <div class="md:flex md:items-center md:justify-between md:gap-2">
        <div class="min-w-0">
            <div class="inline-block rounded-full bg-red-500/20 px-3 py-2 max-w-full text-sm font-bold leading-5 text-red-500 truncate lg:text-base dark:bg-red-500/20">
                <span class="hidden md:inline">
                    <?php echo $decorator->getClassFullName(); ?>
                </span>
                <span class="md:hidden">
                    <?php echo $decorator->getClassShortName(); ?>
                </span>
            </div>
            <div class="mt-4 text-lg font-semibold text-gray-900 break-words dark:text-white lg:text-2xl">
                <?php echo $decorator->getMessage(); ?>
            </div>
        </div>

        <div class="hidden text-right shrink-0 md:block md:min-w-64 md:max-w-80">
            <div>
                <span class="inline-block rounded-full bg-gray-200 px-3 py-2 text-sm leading-5 text-gray-900 max-w-full truncate dark:bg-gray-800 dark:text-white">
                    <?php echo $decorator->getRequestLine(); ?>
                </span>
            </div>
            <div class="px-4">
                <span class="text-sm text-gray-500 dark:text-gray-400">
                    <?php echo $decorator->getRuntimeLine(); ?>
                </span>
            </div>
        </div>
    </div>
</section>
