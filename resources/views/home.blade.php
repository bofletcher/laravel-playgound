<x-layout>
    <x-slot:title>Home</x-slot:title>
    @foreach ($jobs as $job)
        <li><strong>{{ $job['title'] }}:</strong> Pays: {{ $job['salary'] }} per year.</li>
    @endforeach
</x-layout>
