<h1>Daily Summary of Your Remaining Goals</h1>

<h2>Goals</h2>
<ul>
    @foreach ($goals as $goal)
        <li>{{ $goal->title }} - {{ $goal->status }}</li>
    @endforeach
</ul>
