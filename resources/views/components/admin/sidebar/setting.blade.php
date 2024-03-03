@props(['heading','adminsidebar'])
<div class="flex">
<aside class="w-48 flex-shrink-0 w-25 p-20">
    <h4 class="font-semibold mb-4">Links</h4>
    <ul>

        @foreach($adminsidebar as $sidebar)
            <li>

                <a href="{{$sidebar->link}}" class="{{request()->is() ? 'text-blue-500' : ''}}">{{$sidebar->name}}</a>
            </li>
        @endforeach

{{--        <li>--}}

{{--            <a href="/admin/category/create" class="{{request()->is('admin/category/create') ? 'text-blue-500' : ''}}">New Category</a>--}}
{{--        </li>--}}
    </ul>
</aside>
<section class="py-8 max-w-4xl w-50">
    <h1 class="text-lg font-bold pb-2 mb-8 border-b">
        {{$heading}}
    </h1>


<div class="flex">

    <main class="flex-1">
        <x-admin.sidebar.panel>
            {{$slot}}
        </x-admin.sidebar.panel>
    </main>
</div>
</section>
</div>
