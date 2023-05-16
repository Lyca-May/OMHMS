{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMHMS</title>
</head>
<body>
    <h1>Rent the Functional Hall</h1>
    {{-- @if(session('success'))
    <span style="color: green">{{session('success')}}</span>
    @elseif (session('failed'))
    <span style="color: red">{{session('failed')}}</span>
    @endif --}}
    {{-- <form action="{{url('user/rent-submit')}}" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Firstname</label>
                <input type="text" name="functional_fname" id="" value="{{session('User') ['user_fname']}}" @error('functional_fname') is-invalid  @enderror>
                @error('functional_name')
                    <div class="invalid-feedback" style="color: red">{{ $message }}</div>
                @enderror <br>
            </div> <br>
            <div class="col">
                <label for="">Middlename</label>
                <input type="text" name="functional_mname" id="" value="{{session('User') ['user_mname']}}" @error('functional_mname') is-invalid  @enderror>
                @error('functional_mname')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror <br>
            </div> <br>
            <div class="col">
                <label for="">Lastname</label>
                <input type="text" name="functional_lname" id="" value="{{session('User') ['user_lname']}}" @error('functional_lname') is-invalid  @enderror>
                @error('functional_lname')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror <br>
            </div> <br>
        </div> <br>
        <div class="row">
            <div class="col">
                <label for="">Gender</label>
                <input type="text" name="functional_gender" id="" value="{{session('User') ['gender']}}" @error('functional_gender') is-invalid  @enderror>
                @error('functional_gender')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror <br>
            </div> <br>
            <div class="col">
                <label for="">Email</label>
                <input type="email" name="functional_email" id="" value="{{session('User') ['user_email']}}" @error('functional_email') is-invalid  @enderror>
                @error('functional_email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror <br>
            </div> <br>
            <div class="col">
                <label for="">Contact Number</label>
                <input type="text" name="functional_contactno" id="" value="{{session('User') ['user_phonenum']}}" @error('functional_contactno') is-invalid  @enderror>
                @error('functional_contactno')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror <br>
            </div> <br>
            <div class="col">
                <label for="">Country</label>
                <input type="text" name="functional_country" id="" value="{{session('User') ['user_country']}}" @error('functional_country') is-invalid  @enderror>
                @error('functional_country')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror <br>
            </div> <br>
            <div class="col">
                <label for="">province</label>
                <input type="text" name="functional_province" id="" value="{{session('User') ['user_province']}}" @error('functional_province') is-invalid  @enderror>
                @error('functional_province')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror <br>
            </div> <br>
            <div class="col">
                <label for="">municipality</label>
                <input type="text" name="functional_municipality" id="" value="{{session('User') ['user_municipality']}}" @error('functional_municipality') is-invalid  @enderror>
                @error('functional_municipality')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror <br>
            </div> <br>
            <div class="col">
                <label for="">brgy</label>
                <input type="text" name="functional_brgy" id="" value="{{session('User') ['user_barangay']}}" @error('functional_brgy') is-invalid  @enderror>
                @error('functional_brgy')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror <br>
            </div> <br>
            <div class="col">
                <label for="">street</label>
                <input type="text" name="functional_street" id="" value="{{session('User') ['user_street']}}" @error('functional_street') is-invalid  @enderror>
                @error('functional_street')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror <br>
            </div> <br>
            <div class="col">
                <label for="">zipcode</label>
                <input type="text" name="functional_zipcode" id="" value="{{session('User') ['user_zipcode']}}" @error('functional_zipcode') is-invalid  @enderror>
                @error('functional_zipcode')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror <br>
            </div>
        </div> <br>

        <div class="col">
            <label for="">Intended Date</label>
            <input type="date" name="functional_intended_date" id="" value="{{old('functional_intended_date')}}" @error('functional_intended_date') is-invalid  @enderror> <br>
            @error('functional_intended_date')
            <div class="invalid-feedback"  style="color: red">{{ $message }}</div>
        @enderror <br>
            <label for="">Intended Time</label>
            <input type="time" name="functional_time" id="" value="{{old('functional_time')}}" @error('functional_time') is-invalid  @enderror> <br>
            @error('functional_time')
            <div class="invalid-feedback"  style="color: red">{{ $message }}</div>
        @enderror <br>
            <label for="">Number of Participants</label>
            <input type="text" name="functional_no_of_participants" id="" value="{{old('functional_no_of_participants')}}" @error('functional_no_of_participants') is-invalid  @enderror> <br>
            @error('functional_no_of_participants')
            <div class="invalid-feedback"  style="color: red">{{ $message }}</div>
        @enderror <br>
            <label for="">Event Name</label>
            <input type="text" name="functional_event_name" id="" value="{{old('functional_event_name')}}" @error('functional_event_name') is-invalid  @enderror> <br>
            @error('functional_event_name')
            <div class="invalid-feedback"  style="color: red">{{ $message }}</div>
        @enderror <br>
            <br>
            <label for="">Name of Institution</label>
            <input type="text" name="functional_name_of_institution" id="" value="{{old('functional_name_of_institution')}}" @error('functional_name_of_institution') is-invalid  @enderror> <br>
            @error('functional_name_of_institution')
            <div class="invalid-feedback"  style="color: red">{{ $message }}</div>
        @enderror <br>
        <br>
            <label for="">Reference</label> <span>Gcash Number: 09151949345</span>
            <input type="text" name="reference" id="" value="{{old('reference')}}" @error('reference') is-invalid  @enderror>
            @error('reference')
            <div class="invalid-feedback"  style="color: red">{{ $message }}</div>
        @enderror <br>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body> --}}

{{--
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 --}}


<!-- Your HTML code here -->
{{-- @if ($errors->any())
    <script>
        swal({
            icon: 'error',
            title: 'Validation Error',
            text: '{{ $errors->first() }}',
            timer: 3000,
            buttons: false,
        });
    </script>
@endif
@if(Session::has('failed'))
    <script>
        swal({
            title: "Error!",
            text: "{{ Session::get('failed') }}",
            type: "error",
            timer: 3000,
            showConfirmButton: false
        });
    </script>
@endif
</html> --}}

<!DOCTYPE html>
<html>
<head>
	<title>OMHMS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Rent a Function Hall</h1>
		<table>
			<thead>
				<tr>
					<th>Item Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Event Type: </td>
					<td colspan="3"><select id="eventType">
						<option value="wedding">Wedding</option>
						<option value="seminar">Seminar</option>
					</select></td>
				</tr>
				<tr>
					<td>Preparation/Setup Time:</td>
					<td colspan="3"><input type="time" id="prepTime"></td>
				</tr>
				<tr>
					<td>Date of Setup:</td>
					<td colspan="3"><input type="date" id="setupDate"></td>
				</tr>
				<tr>
					<td>Number of Tables and Chairs:</td>
					<td colspan="3"><input type="number" id="numTablesChairs"></td>
				</tr>
				<tr>
					<td>Other Requests:</td>
					<td colspan="3"><textarea id="otherRequests"></textarea></td>
				</tr>
				<tr>
					<td>Add-Ons/Other Services:</td>
					<td>PHP 3,000.00</td>
					<td><input type="number" id="addOnsQuantity" value="0"></td>
					<td id="addOnsTotal">PHP 0.00</td>
				</tr>
				<tr>
					<td>Sound System:</td>
					<td colspan="2">
						<input type="radio" id="speaker" name="soundSystem" value="speaker">
  						<label for="speaker">Speaker</label>
  						<input type="radio" id="otherSound" name="soundSystem" value="otherSound">
  						<label for="otherSound">Other</label>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>Number of Microphones:</td>
					<td colspan="2"><input type="number" id="numMicrophones"></td>
					<td></td>
				</tr>
				<tr>
					<td>LED TV:</td>
					<td colspan="2"><input type="checkbox" id="ledTv"></td>
					<td></td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="3">Total:</td>
					<td id="cartTotal">PHP 0.00</td>
				</tr>
			</tfoot>
		</table>
	</div>
	<script src="script.js"></script>
</body>
</html>
