@props(['departmentCsv'])

@php
$depts = explode(',', $departmentCsv);
@endphp

<ul class="flex">
    @foreach($depts as $dept)
    <li class="flex items-center justify-center bg-info text-white rounded-xl py-1 px-3 mr-2 text-xs">
        <a href="/Events/?Department={{$dept}}">{{$dept}}</a>
    </li>
    @endforeach
</ul>
