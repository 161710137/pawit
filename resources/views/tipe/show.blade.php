@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tipe
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Tipe</label>	
			  			<input type="text" name="title" class="form-control" value="{{ $tipes->Kategori->nama }}"  readonly>
			  		</div>

		  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection