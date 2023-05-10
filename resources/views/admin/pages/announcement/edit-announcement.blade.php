<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMHMS</title>
</head>
<body>
    <h1>Edit Announcement</h1>
    <form method="POST" action="{{ url('update-announcement', $announcement->announcement_id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Announcer</label>
            <input type="text" class="form-control" id="title" name="announcer" value="{{ $announcement->announcer }}">
        </div>
        <div class="form-group">
            <label for="description">Content</label>
            <textarea class="form-control" id="description" name="announcement_content">{{ $announcement->announcement_content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Announcement</button>
    </form>

</body>
</html>
