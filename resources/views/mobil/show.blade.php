@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Member
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="title" class="form-control" value="{{ $members->Kategori->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Telepon</label>
						<input type="text" name="title" class="form-control" value="{{ $members->telepon }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Email</label>
						<input type="text" name="title" class="form-control" value="{{ $members->email }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Password</label>
						<input type="text" name="title" class="form-control" value="{{ $members->password }}"  readonly>
			  		</div>
                    <div class="form-group">
			  			<label class="control-label">Alamat</label>
						<input type="text" name="title" class="form-control" value="{{ $members->alamat }}"  readonly>
			  		</div>

			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection