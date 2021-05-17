<nav class="container mx-auto py-12">
    <ul class="flex items-center justify-center space-x-6 uppercase">
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