<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <aside class="w-48 flex-shrink-0 w-25 p-20">
        <h4 class="font-semibold mb-4">Links</h4>
        <ul>

            @foreach($adminside as $sidebar)

                <li>

                    <a href="{{$sidebar->link}}" class="{{request()->is() ? 'text-blue-500' : ''}}">{{\App\Helpers\Helpers::translate($sidebar->name)}}</a>
                </li>
            @endforeach

            {{--        <li>--}}

            {{--            <a href="/admin/category/create" class="{{request()->is('admin/category/create') ? 'text-blue-500' : ''}}">New Category</a>--}}
            {{--        </li>--}}
        </ul>
    </aside>


</x-app-layout>
