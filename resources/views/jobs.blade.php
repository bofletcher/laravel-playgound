<x-layout>
    <x-slot:title>Job Listings</x-slot:title>
    <h1>Jobs</h1>
    @foreach ($jobs as $job)
        <li>
            <a class="text-blue-900 hover:underline" href="job/{{ $job['id'] }}"><strong>{{ $job['title'] }}:</strong>
                Pays: {{ $job['salary'] }} per
                year.</a>
        </li>
    @endforeach
</x-layout>
