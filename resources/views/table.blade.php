<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<table style="width:100%">
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{$item->customer_id}}</td>
        <td>{{$item->first_name}}</td>
        <td>{{$item->last_name}}</td>
    </tr>
    @endforeach
</table>