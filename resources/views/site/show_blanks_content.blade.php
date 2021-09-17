<div class="wrapper container-fluid">

<div class="container"><div class="row">
		@foreach($blanks as $blank)
 <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
 <div class="email-signature">
 <div class="signature-icon">
 <i class="fas fa-user-tie"></i>
 </div>
 <div class="signature-detail">
 <h2 class="title">{{ $blank->name }}</h2>
 <span class="post"> {{ $blank->phone_number }}</span>



 </div>
 <ul class="signature-content">
 <li><span>Компания:</span>{{ $blank->company }}</li>
 <li><span>Текст:</span>{{ $blank->message }}</li>
 <li><span>Файл:</span>{{ $blank->files }}</li>
  <li><span>Добавлено:</span>{{ $blank->created_at }}</li>
 </ul>
 </div>
 </div>
@endforeach
</div></div>
</div>