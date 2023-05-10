<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMHMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <h1>Add your reaason</h1>
    <div class="col-xs-6 col-sm-6">
        <div class="card">
            <div class="card-header">
                <strong>Add Reason for Cancellation</strong>
            </div>
            @if(session('success'))
            <span>{{ session('success') }}</span>
            @elseif (session('failed'))
                <span>{{ session('failed') }}</span>
            @endif
            <form action="{{url('user/cancel-visit')}}" method="POST">
                @csrf
                <div class="card-body card-block">
                    <div class="form-group">
                        {{-- <label class=" form-control-label">Date input</label>? --}}
                        <div class="input-group">
                            {{-- <div class="input-group-addon"></div> --}}
                            <textarea class="form-control" name="cancel_reason" @error('cancel_reason') is-invalid  @enderror id="cancel_reason" value="{{ old('cancel_reason') }}" id="cancel_reason">
                                @error('cancel_reason')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </textarea>
                        </div>
                        <br>
                <button type="submit" class="btn btn-danger">Confirm Cancel</button>

                        {{-- <small class="form-text text-muted">ex. 99/99/9999</small> --}}
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
     <!-- Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
