<h3>Users:</h3>
<ul>
@foreach($users_data as $data)
  <li>
      <br/>
      <span>name:  {{ $data->name }}</span>
      <br/>
      <span>Address:  {{ $data->address }}</span>
      <br/>
      <span>Email:  {{ $data->email }}</span>
    </li>
    <br/>
    <br/>
@endforeach
</ul>