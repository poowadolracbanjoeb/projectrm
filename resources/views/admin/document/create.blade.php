<!DocTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <form action="/files" method="POST" enctype="multipart/form-data" >
            <tr><div align="center">
            {{csrf_field()}}
            <input type="text" name="title" placeholder="title">
            <input type="text" name="description" placeholder="description">
            <input type="file" name="file">
            <input type="submit" value="Submit">
            </tr>
        </form>
    </body>
</html>