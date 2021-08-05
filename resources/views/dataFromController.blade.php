<br/>
<h2>User Info from Controller</h2>

@foreach ($data as $item )
    {{ $item }}
    @endforeach


    <br/>
    <br/>
    <br/>
    <br/>

    <a href='/'>Back</a> <br/>

    <script>
        var user=@json($data);
        console.warn(user);
        console.warn(user.name);
        console.warn(user.age);   
    </script>