extends('layouts.admin');
@section('content')
<table class="table">
    <thead >
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Created At</th>
        <th>Action</th>
    </tr>
    </thead>
        <tbody>
            @foreach($posts as $post)
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>  
        @end 
    </tbody>
</table>
@endsection