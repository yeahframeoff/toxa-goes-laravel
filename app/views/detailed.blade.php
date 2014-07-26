<h1>{{ $phone->vendor }} <i> {{ $phone->name }} </i> </h1>
@foreach ($phone->components as $component)
    <h1>{{ $component->name() }}: {{ $component }}</h1>
@endforeach