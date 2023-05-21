<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
    .avatar-image {
    width: 100px; /* adjust this to your desired size */
    height: 100px;
    object-fit: cover; /* crop the image to fit the circle shape */
    border: 2px solid #ddd; /* add a border around the image */
}

    </style>
</head>
<body>
    <h1>My Profile Details</h1>

    <form action="admin-update-profile" method="post" enctype="multipart/form-data">
        @csrf


        <input type="text" name="user_fname" value="{{session('Admin') ['user_fname']}}" placeholder="First Name">
        <input type="text" name="user_mname" value="{{session('Admin') ['user_mname']}}" placeholder="First Name">
        <input type="text" name="user_lname" value="{{session('Admin') ['user_lname']}}" placeholder="First Name">
        <input type="email" name="user_email" value="{{session('Admin') ['user_email']}}" placeholder="First Name">
         <input type="password" name="user_password" value="{{session('Admin') ['user_password']}}" placeholder="First Name">
        <input type="text" name="user_phonenum" value="{{session('Admin') ['user_phonenum']}}" placeholder="First Name">
        <input type="date" name="birthdate" value="{{session('Admin') ['birthdate']}}" placeholder="First Name">
        <input type="text" name="gender" value="{{session('Admin') ['gender']}}" placeholder="First Name">
        <input type="text" name="user_country" value="{{session('Admin') ['user_country']}}" placeholder="First Name">
        <input type="text" name="user_province" value="{{session('Admin') ['user_province']}}" placeholder="First Name">
        <input type="text" name="user_municipality" value="{{session('Admin') ['user_municipality']}}" placeholder="First Name">
        <input type="text" name="user_barangay" value="{{session('Admin') ['user_barangay']}}" placeholder="First Name">
        <input type="text" name="user_street" value="{{session('Admin') ['user_street']}}" placeholder="First Name">
        <input type="text" name="user_zipcode" value="{{session('Admin') ['user_zipcode']}}" placeholder="First Name">
        <!-- Add other fields here... -->
        <input type="file" name="avatar">
        <button type="submit">Save Changes</button>
      </form>

      @foreach ($users as $user)
      <h1>{{ $user->user_fname }} {{ $user->user_lname }}</h1>
      <p>Email: {{ $user->user_email }}</p>
      <p>Phone: {{ $user->user_phonenum }}</p>
      <p>Address: {{ $user->user_street }}, {{ $user->user_barangay }}, {{ $user->user_municipality }}, {{ $user->user_province }}, {{ $user->user_zipcode }}</p>
      <p>Gender: {{ $user->gender }}</p>
      <p>Birthday: {{ $user->birthdate }}</p>
      @if ($user->avatar)
      <img src="{{ asset('avatars/' .$user->avatar) }}" alt="{{$user->user_fname}}"
      class="rounded-circle me-2" style="width:38px; height:38px; object-fit:cover" />
      @endif
      @endforeach




</body>
</html>
