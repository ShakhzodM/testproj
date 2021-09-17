<div class="wrapper container-fluid">
	{!! Form::open(['url'=>route('add'), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Имя пользователя', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите имя']) !!}
				
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('phone_number', 'Номер телефона', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('phone_number', old('phone_number'), ['class'=>'form-control', 'placeholder'=>'Введите номер телефона']) !!}
				
			</div>
		</div>


		<div class="form-group">
			{!! Form::label('company', 'Название компании', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('company', old('company'), ['class'=>'form-control', 'placeholder'=>'Введите название компании']) !!}
				
			</div>
		</div>


		<div class="form-group">
			{!! Form::label('message', 'Введите текст', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
				
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('files', 'Файл', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::file('files', ['class'=>'filestyle','data-buttonText'=>'Выберите файл', 'data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файла нет']) !!}
				
			</div>
		</div>

		<div class="form-group">
			<div class="col-xs-offset-2 col-xs-10">
				{!! Form::button('Отправить', ['class'=>'btn btn-primary','type'=>'submit']) !!}
				
			</div>
		</div>
	{!! Form::close() !!}

</div>