@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Merk
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('merk.update',$merk->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
                    <div class="form-group {{ $errors->has('namamerk') ? ' has-error' : '' }}">
			  			<label class="control-label">namamerk</label>	
			  			<input type="text" value="{{ $merk->namamerk }}" name="namamerk" class="form-control"  required>
			  			@if ($errors->has('namamerk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('namamerk') }}</strong>
                            </span>
                        @endif
			  		</div>
				  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection