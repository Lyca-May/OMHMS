<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Announcement</title>
</head>
<body>
    <h1>Post an Announcement</h1>


    <form action="{{url("/create-announcement")}}" method="post">
        @csrf
        <label for="">Announcer</label>
        <input type="text" name="announcer" id="" value="{{old('announcer')}}" @error('announcer') is-invalid @enderror autocomplete="on">
        @error('announcer')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br>
        <label for="">Content</label>
        <input type="text" name="announcement_content" id="" value="{{old('announcement_content')}}" @error('announcement_content') is-invalid @enderror autocomplete="on">
        @error('announcement_content')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br>


        <button type="submit">Add Post</button>
    </form>
</body>
</html>
