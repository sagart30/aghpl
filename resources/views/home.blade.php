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
<a href="event/add" class="btn btn-primary float-right">Add new events</a>
</br>
<!-- Nav tabs -->
<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Event Types</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Scheduled Events</a>
    </li>
</ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      
	  <div class="card-columns">
	  
	@if($eventtypes)
		@foreach ($eventtypes as $key => $val)
		<div class="card" style="width:350px">
			<div class="card-body">
			  <h4 class="card-title"><?= $val->eventname ?></h4>
			  <p class="card-text"><?= $val->eventduration ?> min</p>
			  <a href="event/edit/<?= $val->id ?>" class="btn btn-primary stretched-link">Edit</a>
			</div>
	    </div>
	  
		@endforeach  
	@else
		No data found
	@endif
	  
	  
</div>
	  
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>



</div>




            </div>
        </div>
    </div>
</div>
@endsection