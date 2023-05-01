<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>Book Visit</h1>
    @if(session('success'))
    <span style="color: green">{{session('success')}}</span>
    @elseif (session('failed'))
    <span style="color: red">{{session('failed')}}</span>
    @endif
    <form action="{{url('user/book')}}" method="POST">
        @csrf
       <input type="hidden" name="userid" value="{{ old('userid') }}"> <br>
        <input type="text" placeholder="First Name" @error('visits_fname') is-invalid @enderror id="visits_fname" name="visits_fname" value={{ session('User')['user_fname'] }} >
        @error('visits_fname')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br>
        <input type="text" placeholder="Middle Name" name="visits_mname"  @error('visits_mname') is-invalid  @enderror id="visits_mname" value={{ session('User')['user_mname'] }} >
        @error('visits_mname')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br>
        <input type="text" placeholder="Last Name" name="visits_lname"  @error('visits_lname') is-invalid  @enderror id="visits_lname" value={{ session('User')['user_lname'] }} >
        @error('visits_lname')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br>
        <input type="email" placeholder="Email" name="visits_email"  @error('visits_email') is-invalid  @enderror id="visits_email" value={{ session('User')['user_email'] }} >
        @error('visits_email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br>
        <input type="text" placeholder="Country" name="visits_country"  @error('visits_country') is-invalid  @enderror id="visits_country" value="{{ old('visits_country') }}" >
        @error('visits_country')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br>
        <input type="text" placeholder="Province" name="visits_province"  @error('visits_province') is-invalid  @enderror id="visits_province" value="{{ old('visits_province') }}" >
        @error('visits_province')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br>
        <input type="text" placeholder="Municipality" name="visits_municipality"  @error('visits_municipality') is-invalid  @enderror id="visits_municipality" value="{{ old('visits_municipality') }}" >
        @error('visits_municipality')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br>
        <input type="text" placeholder="Barangay" name="visits_brgy"  @error('visits_brgy') is-invalid  @enderror id="visits_brgy" value="{{ old('visits_brgy') }}" >
        @error('visits_brgy')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br>
        <input type="text" placeholder="Street" name="visits_street" @error('visits_street') is-invalid  @enderror id="visits_street" value="{{ old('visits_street') }}" >
        @error('visits_street')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br>
        <input type="text" placeholder="Zipxode" name="visits_zipcode" @error('visits_zipcode') is-invalid  @enderror id="visits_zipcode" value="{{ old('visits_zipcode') }}" >
        @error('visits_zipcode')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br>
        <input type="text" placeholder="Contact Number" name="visits_contactno" @error('visits_contactno') is-invalid  @enderror id="visits_contactno" value="{{ old('visits_contactno') }}" >
        @error('visits_contactno')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br>
        {{-- <input type="date" placeholder="Birthdate" name="visits_birthdate" @error('visits_birthdate') is-invalid  @enderror id="visits_birthdate" value="{{ old('visits_birthdate') }}" >
        @error('visits_birthdate')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br> --}}
        <input type="date" placeholder="Intended Date" name="visits_intended_date" @error('visits_intended_date') is-invalid  @enderror id="visits_intended_date" value="{{ old('visits_intended_date') }}" >
        @error('visits_intended_date')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br>
        <input type="time" placeholder="Time" name="visits_time" @error('visits_time') is-invalid  @enderror id="visits_time" value="{{ old('visits_time') }}" >
        @error('visits_time')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br>
        <input type ="text" placeholder="Number of Visitors" name="visits_no_of_visitors" @error('visits_no_of_visitors') is-invalid  @enderror id="visits_no_of_visitors" value="{{ old('visits_no_of_visitors') }}" >
        @error('visits_no_of_visitors')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br>
        <input type="text" placeholder="Name of Institution(Optional)" name="visits_name_of_institution" @error('visits_name_of_institution') is-invalid  @enderror id="visits_name_of_institution" value="{{ old('visits_name_of_institution') }}" >
        @error('visits_name_of_institution')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror <br>
        <button type="submit">Book</button>
    </form>
</body>
</html>
