@extends('layouts.master')

@section('content')
<h1 class="text-3xl font-bold underline text-center my-5 dark:text-white">
    Read Data Page
</h1>
<table class="min-w-full table-auto border-collapse border border-gray-400 dark:text-white">
    <thead>
        <tr>
            <th class="border border-gray-300 px-4 py-2">ID</th>
            <th class="border border-gray-300 px-4 py-2">Email</th>
            <th class="border border-gray-300 px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($samples as $sample)
        <tr>
            <td class="border border-gray-300 px-4 py-2">{{ $sample->id }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $sample->email }}</td>
            <td class="border border-gray-300 px-4 py-2">
                <a href="/edit/{{ $sample->id }}" class="text-blue-500 hover:underline mr-2">Edit</a>
                <a href="/delete/{{ $sample->id }}" class="text-red-500 hover:underline">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
