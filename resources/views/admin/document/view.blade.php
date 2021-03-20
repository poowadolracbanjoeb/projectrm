<!DocTYPE html>
<html>
    <head>
        <title>view</title>
    </head>
    <body>
        <table border="1">
            <tr><div align="center">
                <th>S1</th>
                <th>Title</th>
                <th>Description</th>
                <th>View</th>
                <th>Download</th>
            </tr>
            @foreach($file as $key=>$data)
            <tr><div align="center">
                <td>{{++$key}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->description}}</td>
                <td><a href="/files/{{$data->id}}">view</a></td>
                <td><a href="/file/download/{{$data->file}}">Download</a></td>
            </tr>
            <tr>
            
            </tr>
            @endforeach
        </table>
    </body>
</html>