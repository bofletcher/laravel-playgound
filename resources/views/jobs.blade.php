<x-layout>
    <x-slot:title>Job Listings</x-slot:title>
    <h1>Jobs</h1>
    @foreach ($jobs as $job)
        <li>
            <a href="jobs/"><strong>{{ $job['title'] }}:</strong> Pays: {{ $job['salary'] }} per year.</a>
        </li>
    @endforeach
</x-layout>
