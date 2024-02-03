<h1>Hello</h1>

@unless(count($listings) == 0)

@foreach ($listings as $listing)
<h1>{{$listing['name']}}</h1>

@endforeach

@else

<h2>Test</h2>

@endunless
