<table>
    <thead>
    <tr>
        <td><h1>{{ $phone->vendor }}</h1></td>
        <td><h1><i> {{ $phone->vendor }} </i> </h1></td>
    </tr>
    </thead>
    <tbody>
    @foreach ($phone->components as $component)
        <tr>
            <td>
                <h1>{{ $component->name() }}</h1>
            </td>
            <td>
                <h1>{{ $component }}</h1>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>