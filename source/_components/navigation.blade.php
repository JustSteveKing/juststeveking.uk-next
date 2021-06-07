<header class="max-w-8xl py-6 md:py-12 px-6 md:px-24 lg:px-32">
    <div class="w-full md:flex md:items-center md:justify-start space-x-0 md:space-x-6 md:space-x-12">
        <a href="/" title="Return to the home page">
            <x-avatar class="h-14 w-14 md:h-20 md:w-20 lg:h-24 lg:w-24 cursor-pointer" />
        </a>
        <div class="space-y-1 md:space-y-5">
            <a href="/" title="Return to the home page">
                <h1 class="text-xl md:text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white cursor-pointer">
                    Steve McDougall
                </h1>
            </a>
            <nav class="overflow-x-scroll">
                <ul class="flex items-center justify-start space-x-3 md:space-x-6 uppercase">
                    @foreach ($page->navigation as $item)
                        <li>
                            <x-link
                                :title="$item->title"
                                :href="$item->link"
                            >
                                {{ $item->text }}
                            </x-link>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header>