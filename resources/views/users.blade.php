<h3>Users:</h3>


<table border=1>
  <tr>
    <td>Id</td>
    <td>Name</td>
    <td>Email</td>
    <td>Image</td>
  </tr>
@foreach ($users_data as $data)
<tr>
    <td>{{$data['id']}}</td>
    <td>{{$data['first_name']}} {{$data['last_name']}} </td>
    <td>{{$data['email']}}</td>
    <td> <img src={{ $data['avatar'] }} /> </td>
  </tr>
@endforeach
</table>