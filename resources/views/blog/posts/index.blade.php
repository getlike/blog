<table>
    @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->tcreated_at }}</td>
        </tr>
    @endforeach
</table>
