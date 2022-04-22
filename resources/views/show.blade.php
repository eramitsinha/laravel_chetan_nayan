<h1>Showing Users</h1>
<table border="2" cellpadding="10">
    <tr>
        <Th>Name</Th>
        <th>Email</th>
        <th>Mobile</th>
    </tr>
    @foreach ($obj as $z)
        <tr>
            <td>
                {{$z->name}}
            </td>
            <td>
                {{$z->email}}
            </td>
            <td>
                {{$z->mobile}}
            </td>
        </tr>
    @endforeach
</table>
