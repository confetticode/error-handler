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
                            <span x-show="includeVendorFrames">Collapse</span>
                            <span x-show="!includeVendorFrames" style="display: none;">Expand</span>
                            <span class="ml-1">vendor frames</span>

                            <div class="flex flex-col ml-1 -mt-2" x-show="includeVendorFrames">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                     fill="currentColor" class="w-4 h-4" style="margin-bottom: -8px;">
                                    <path fill-rule="evenodd"
                                          d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                     fill="currentColor" class="w-4 h-4" style="margin-bottom: -8px;">
                                    <path fill-rule="evenodd"
                                          d="M9.47 6.47a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 1 1-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 0 1-1.06-1.06l4.25-4.25Z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </div>

                            <div class="flex flex-col ml-1 -mt-2" x-show="! includeVendorFrames"
                                 style="display: none;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                     fill="currentColor" class="w-4 h-4" style="margin-bottom: -8px;">
                                    <path fill-rule="evenodd"
                                          d="M9.47 6.47a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 1 1-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 0 1-1.06-1.06l4.25-4.25Z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                     fill="currentColor" class="w-4 h-4" style="margin-bottom: -8px;">
                                    <path fill-rule="evenodd"
                                          d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </button>
                    </div>

                    <div class="mb-12 space-y-2">

                        <div x-show="! includeVendorFrames" style="display: none;">
                        </div>

                        <button class="w-full text-left dark:border-gray-900" x-show="true"
                                @click="index = 0">
                            <div x-bind:class="
                            index === 0
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                                 class="rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500">
                                <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                                    <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">C:\Users\QuynhNX\Code\laravel11-demo\routes\web.php</span>
                                    <span class="font-mono text-xs">:10</span>
                                </span>
                                    </div>
                                    <div class="text-gray-500 dark:text-gray-400">
                                        {closure}
                                    </div>
                                </div>
                            </div>
                        </button>


                        <div x-show="! includeVendorFrames" style="display: none;">
                        </div>

                        <button class="w-full text-left dark:border-gray-900" x-show="true"
                                @click="index = 1">
                            <div x-bind:class="
                            index === 1
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        " class="hover:bg-gray-100/75 dark:hover:bg-gray-800/75">
                                <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                                    <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Routing\CallableDispatcher</span>
                                    <span class="font-mono text-xs">:40</span>
                                </span>
                                    </div>
                                    <div class="text-gray-500 dark:text-gray-400">
                                        dispatch
                                    </div>
                                </div>
                            </div>
                        </button>


                        <div x-show="! includeVendorFrames" style="display: none;">
                        </div>

                        <button class="w-full text-left dark:border-gray-900" x-show="true"
                                @click="index = 2">
                            <div x-bind:class="
                            index === 2
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        " class="hover:bg-gray-100/75 dark:hover:bg-gray-800/75">
                                <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                                    <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Routing\Route</span>
                                    <span class="font-mono text-xs">:238</span>
                                </span>
                                    </div>
                                    <div class="text-gray-500 dark:text-gray-400">
                                        runCallable
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="sm:col-span-2" x-show="index === 0">
                <div class="mb-3">
                    <div class="text-md text-gray-500 dark:text-gray-400">
                        <div class="mb-2">

                            <span class="wrap text-gray-900 dark:text-gray-300">C:\Users\QuynhNX\Code\laravel11-demo\routes\web.php</span>

                            <span class="font-mono text-xs">:10</span>
                        </div>
                    </div>
                </div>
                <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                        style="display: none;" id="frame-0"
                        class="language-php highlightable-code  default-highlightable-code  scrollbar-hidden overflow-y-hidden"
                        data-line-number="10" data-ln-start-from="5">Route::get('/', function () {
    return view('welcome');
});

Route::get('/error', function () {
    throw new Exception('Something went wrong!');
});

Route::get('/foobar', fn() =&gt; 'foobar');

Route::get('/users/{user}', function () {
    throw new Exception('Something went wrong!');
});

Route::get('/route1', function () {
    return 'route1';
});
</code></template></pre>
                </div>
            </div>
            <div class="sm:col-span-2" x-show="index === 1" style="display: none;">
                <div class="mb-3">
                    <div class="text-md text-gray-500 dark:text-gray-400">
                        <div class="mb-2">

                            <span class="wrap text-gray-900 dark:text-gray-300">C:\Users\QuynhNX\Code\laravel11-demo\vendor\laravel\framework\src\Illuminate\Routing\CallableDispatcher.php</span>

                            <span class="font-mono text-xs">:40</span>
                        </div>
                    </div>
                </div>
                <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                        style="display: none;" id="frame-1"
                        class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                        data-line-number="40" data-ln-start-from="35">     * @param  callable  $callable
     * @return mixed
     */
    public function dispatch(Route $route, $callable)
    {
        return $callable(...array_values($this-&gt;resolveParameters($route, $callable)));
    }

    /**
     * Resolve the parameters for the callable.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @param  callable  $callable
     * @return array
     */
    protected function resolveParameters(Route $route, $callable)
    {
</code></template><code style="display: block;" id="frame-1"
                        class="language-php highlightable-code scrollbar-hidden overflow-y-hidden hljs"
                        data-line-number="40" data-ln-start-from="35" data-highlighted="yes"><table class="hljs-ln"><tbody><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="35"><div class="hljs-ln-n"
                                                                                                data-line-number="35"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="35">     * @param  <span
                                    class="hljs-keyword">callable</span>  <span
                                    class="hljs-variable">$callable</span></td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="36"><div class="hljs-ln-n"
                                                                                                data-line-number="36"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="36">     * @<span
                                    class="hljs-keyword">return</span> <span class="hljs-keyword">mixed</span></td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="37"><div class="hljs-ln-n"
                                                                                                data-line-number="37"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="37">     */</td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="38"><div class="hljs-ln-n"
                                                                                                data-line-number="38"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="38">    <span
                                    class="hljs-keyword">public</span> <span class="hljs-function"><span
                                        class="hljs-keyword">function</span> <span
                                        class="hljs-title">dispatch</span>(<span class="hljs-params">Route <span
                                            class="hljs-variable">$route</span>, <span class="hljs-variable">$callable</span></span>)</span></td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="39"><div class="hljs-ln-n"
                                                                                                data-line-number="39"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="39">    {</td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="40"><div class="hljs-ln-n"
                                                                                                data-line-number="40"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="40">        <span
                                    class="hljs-keyword">return</span> <span class="hljs-variable">$callable</span>(...<span
                                    class="hljs-title function_ invoke__">array_values</span>(<span
                                    class="hljs-variable">$this</span>-&gt;<span
                                    class="hljs-title function_ invoke__">resolveParameters</span>(<span
                                    class="hljs-variable">$route</span>, <span
                                    class="hljs-variable">$callable</span>)));</td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="41"><div class="hljs-ln-n"
                                                                                                data-line-number="41"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="41">    }</td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="42"><div class="hljs-ln-n"
                                                                                                data-line-number="42"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="42"> </td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="43"><div class="hljs-ln-n"
                                                                                                data-line-number="43"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="43">    <span
                                    class="hljs-comment"><span class="hljs-comment">/**</span></span></td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="44"><div class="hljs-ln-n"
                                                                                                data-line-number="44"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="44"><span class="hljs-comment">     * Resolve the parameters for the callable.</span></td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="45"><div class="hljs-ln-n"
                                                                                                data-line-number="45"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="45"><span class="hljs-comment">     *</span></td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="46"><div class="hljs-ln-n"
                                                                                                data-line-number="46"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="46"><span class="hljs-comment">     * <span
                                        class="hljs-doctag">@param</span>  \Illuminate\Routing\Route  $route</span></td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="47"><div class="hljs-ln-n"
                                                                                                data-line-number="47"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="47"><span class="hljs-comment">     * <span
                                        class="hljs-doctag">@param</span>  callable  $callable</span></td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="48"><div class="hljs-ln-n"
                                                                                                data-line-number="48"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="48"><span class="hljs-comment">     * <span
                                        class="hljs-doctag">@return</span> array</span></td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="49"><div class="hljs-ln-n"
                                                                                                data-line-number="49"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="49"><span class="hljs-comment">     */</span></td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="50"><div class="hljs-ln-n"
                                                                                                data-line-number="50"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="50">    <span
                                    class="hljs-keyword">protected</span> <span class="hljs-function"><span
                                        class="hljs-keyword">function</span> <span class="hljs-title">resolveParameters</span>(<span
                                        class="hljs-params">Route <span class="hljs-variable">$route</span>, <span
                                            class="hljs-variable">$callable</span></span>)</span></td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="51"><div class="hljs-ln-n"
                                                                                                data-line-number="51"></div></td><td
                                class="hljs-ln-line hljs-ln-code"
                                data-line-number="51">    {</td></tr></tbody></table></code></pre>
                </div>
            </div>
            <div class="sm:col-span-2" x-show="index === 2" style="display: none;">
                <div class="mb-3">
                    <div class="text-md text-gray-500 dark:text-gray-400">
                        <div class="mb-2">

                            <span class="wrap text-gray-900 dark:text-gray-300">C:\Users\QuynhNX\Code\laravel11-demo\vendor\laravel\framework\src\Illuminate\Routing\Route.php</span>

                            <span class="font-mono text-xs">:238</span>
                        </div>
                    </div>
                </div>
                <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                        style="display: none;" id="frame-2"
                        class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                        data-line-number="238" data-ln-start-from="233">
        if ($this-&gt;isSerializedClosure()) {
            $callable = unserialize($this-&gt;action['uses'])-&gt;getClosure();
        }

        return $this-&gt;container[CallableDispatcher::class]-&gt;dispatch($this, $callable);
    }

    /**
     * Determine if the route action is a serialized Closure.
     *
     * @return bool
     */
    protected function isSerializedClosure()
    {
        return RouteAction::containsSerializedClosure($this-&gt;action);
    }
</code></template><code style="display: block;" id="frame-2"
                        class="language-php highlightable-code scrollbar-hidden overflow-y-hidden hljs"
                        data-line-number="238" data-ln-start-from="233" data-highlighted="yes"><table class="hljs-ln"><tbody><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="233"><div class="hljs-ln-n"
                                                                                                 data-line-number="233"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="233"> </td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="234"><div class="hljs-ln-n"
                                                                                                 data-line-number="234"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="234">        <span
                                    class="hljs-keyword">if</span> (<span
                                    class="hljs-variable language_">$this</span>-&gt;<span
                                    class="hljs-title function_ invoke__">isSerializedClosure</span>()) {</td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="235"><div class="hljs-ln-n"
                                                                                                 data-line-number="235"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="235">            <span
                                    class="hljs-variable">$callable</span> = <span
                                    class="hljs-title function_ invoke__">unserialize</span>(<span
                                    class="hljs-variable">$this</span>-&gt;action[<span
                                    class="hljs-string">'uses'</span>])-&gt;<span
                                    class="hljs-title function_ invoke__">getClosure</span>();</td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="236"><div class="hljs-ln-n"
                                                                                                 data-line-number="236"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="236">        }</td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="237"><div class="hljs-ln-n"
                                                                                                 data-line-number="237"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="237"> </td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="238"><div class="hljs-ln-n"
                                                                                                 data-line-number="238"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="238">        <span
                                    class="hljs-keyword">return</span> <span
                                    class="hljs-variable language_">$this</span>-&gt;container[<span
                                    class="hljs-title class_">CallableDispatcher</span>::<span
                                    class="hljs-variable language_">class</span>]-&gt;<span
                                    class="hljs-title function_ invoke__">dispatch</span>(<span
                                    class="hljs-variable">$this</span>, <span class="hljs-variable">$callable</span>);</td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="239"><div class="hljs-ln-n"
                                                                                                 data-line-number="239"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="239">    }</td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="240"><div class="hljs-ln-n"
                                                                                                 data-line-number="240"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="240"> </td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="241"><div class="hljs-ln-n"
                                                                                                 data-line-number="241"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="241">    <span
                                    class="hljs-comment"><span class="hljs-comment">/**</span></span></td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="242"><div class="hljs-ln-n"
                                                                                                 data-line-number="242"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="242"><span class="hljs-comment">     * Determine if the route action is a serialized Closure.</span></td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="243"><div class="hljs-ln-n"
                                                                                                 data-line-number="243"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="243"><span class="hljs-comment">     *</span></td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="244"><div class="hljs-ln-n"
                                                                                                 data-line-number="244"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="244"><span class="hljs-comment">     * <span
                                        class="hljs-doctag">@return</span> bool</span></td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="245"><div class="hljs-ln-n"
                                                                                                 data-line-number="245"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="245"><span class="hljs-comment">     */</span></td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="246"><div class="hljs-ln-n"
                                                                                                 data-line-number="246"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="246">    <span
                                    class="hljs-keyword">protected</span> <span class="hljs-function"><span
                                        class="hljs-keyword">function</span> <span class="hljs-title">isSerializedClosure</span>(<span
                                        class="hljs-params"></span>)</span></td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="247"><div class="hljs-ln-n"
                                                                                                 data-line-number="247"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="247">    {</td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="248"><div class="hljs-ln-n"
                                                                                                 data-line-number="248"></div></td><td
                                class="hljs-ln-line hljs-ln-code" data-line-number="248">        <span
                                    class="hljs-keyword">return</span> <span
                                    class="hljs-title class_">RouteAction</span>::<span
                                    class="hljs-title function_ invoke__">containsSerializedClosure</span>(<span
                                    class="hljs-variable">$this</span>-&gt;action);</td></tr><tr><td
                                class="hljs-ln-line hljs-ln-numbers" data-line-number="249"><div class="hljs-ln-n"
                                                                                                 data-line-number="249"></div></td><td
                                class="hljs-ln-line hljs-ln-code"
                                data-line-number="249">    }</td></tr></tbody></table></code></pre>
                </div>
            </div>
        </div>
    </div>
</section>
