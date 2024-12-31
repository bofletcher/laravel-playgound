<x-layout>
    <x-slot:title>Home</x-slot:title>
    @foreach ($jobs as $job)
        <li>{{ $job['title'] }} Pays: {{ $job['salary'] }} per year.</li>
    @endforeach
</x-layout>
