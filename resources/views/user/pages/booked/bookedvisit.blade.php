<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMHMS</title>
</head>
<body>
<h1>booked visit table</h1>

@php
   $gender = session()->get('User.gender');
@endphp

@foreach ($visit as $visits)
<div class="post">
    @if ($gender == 'female')
        <p>Hi, Ms. {{ $visits->visits_lname }}, {{ $visits->visits_fname }} {{ $visits->visits_mname }}.</p>
        <p>This is your Reservation for Visitation</p>
        <p>You are from {{ $visits->visits_street }}, {{ $visits->visits_brgy }}, {{ $visits->visits_municipality }}, {{ $visits->visits_province }}, {{ $visits->visits_country }}, with the zipcode {{ $visits->visits_zipcode }}.</p>
        <p>Your selected date is {{ date('F d, Y', strtotime($visits->visits_intended_date)) }} at {{ $visits->visits_time }}.</p>
        <p>This is the number where we can contact you: {{ $visits->visits_contactno }}</p>
        <p>You are from {{ $visits->visits_name_of_institution }} Institution and you're with your {{ $visits->visits_no_of_visitors }} member/members including:</p>
        <p>blablabla</p>
        @if ($visits->visits_status == 'PENDING')
            <p>Status: <span style="color: red">{{ $visits->visits_status }}</span></p>
        @else
            <p>Status: <span style="color: green">{{ $visits->visits_status }}</span></p>
        @endif
    @else
        <p>Hi, Mr. {{ $visits->visits_lname }}, {{ $visits->visits_fname }} {{ $visits->visits_mname }}.</p>
        <p>This is your Reservation for Visitation</p>
        <p>You are from {{ $visits->visits_street }}, {{ $visits->visits_brgy }}, {{ $visits->visits_municipality }}, {{ $visits->visits_province }}, {{ $visits->visits_country }}, with the zipcode {{ $visits->visits_zipcode }}.</p>
        <p>Your selected date is {{ date('F d, Y', strtotime($visits->visits_intended_date)) }} at {{ $visits->visits_time }}.</p>
        <p>This is the number where we can contact you: {{ $visits->visits_contactno }}</p>
        <p>You are from {{ $visits->visits_name_of_institution }} Institution and you're with your {{ $visits->visits_no_of_visitors }} member/members including:</p>
        <p>blablabla</p>
        @if ($visits->visits_status == 'PENDING')
            <p>Status: <span style="color: red">{{ $visits->visits_status }}</span></p>
        @else
            <p>Status: <span style="color: green">{{ $visits->visits_status }}</span></p>
        @endif
    @endif
</div>
@endforeach


    <p>If you have a clarification with your booking information, please contact us at our contact number or email account</p>
    <p>Contact Number: 09151949345</p>
    <p>Email: omhms@gmail.com</p>

</body>
</html>
