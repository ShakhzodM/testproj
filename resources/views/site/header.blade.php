<div class="container">
    <div class="header_box">
      <!--<div class="logo"><a href="#"><img src="{{ asset('assets/img/logo.jpg') }}" alt="logo"></a></div> -->
	
  		 <nav class="navbar navbar-inverse" role="navigation">
	       	 <div id="main-nav" class="collapse navbar-collapse navStyle">
	       	 	<ul class="nav navbar-nav" id="mainNav">
	       	 			<li><a href="{{ route('index') }}">Главная</a></li>
	       	 			<li><a href="{{ route('home') }}">Профиль</a></li>
	        			<li><a href="{{ route('show')}}">Заявки</a></li>
						<li><a href="{{ route('add') }}">Отправить</a></li>
	        	</ul>
	       	   </div>
		 </nav>
    </div>
</div>


@if(count($errors) > 0)
	<ul>
	@foreach($errors->all() as $error)
		<li class="alert alert-danger">{{ $error }}</li>
	@endforeach
	</ul>
@endif

@if(session('status'))
	<div class="alert alert-success">{{ session('status') }}</div>
@endif