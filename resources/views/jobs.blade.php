<x-layout>
    <x-slot:title>Job Listings</x-slot:title>
    <h1>Jobs</h1>
    @foreach ($jobs as $job)
        <li><strong>{{ $job['title'] }}:</strong> Pays: {{ $job['salary'] }} per year.</li>
    @endforeach
</x-layout>
