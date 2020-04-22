@extends('layouts.app')
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>



<div class="container">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
<a href="{{ Request::root() }}/home" class="btn btn-primary float-right">Home</a>
</br>

<form action="{{url('event/save')}}" method="post" id="frmupdate" name="frmupdate">
  <div class="form-group">
    <label for="eventname">Event name:</label>
    <input type="eventname" class="form-control" placeholder="Enter eventname" id="eventname" name="eventname">
  </div>
  <div class="form-group">
    <div class="form-check-inline">
	  <label class="form-check-label">
		<input type="radio" class="form-check-input" name="optradio" value="15">15 Min
	  </label>
	</div>
    <div class="form-check-inline">
	  <label class="form-check-label">
		<input type="radio" class="form-check-input" name="optradio" value="30">30 Min
	  </label>
	</div>
    <div class="form-check-inline">
	  <label class="form-check-label">
		<input type="radio" class="form-check-input" name="optradio" value="45">45 Min
	  </label>
	</div>
    <div class="form-check-inline">
	  <label class="form-check-label">
		<input type="radio" class="form-check-input" name="optradio" value="60">60 Min
	  </label>
	</div>

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


	  
    </div>

  </div>



</div>




            </div>

</div>
@endsection