@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Tipe
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('tipe.update',$tipe->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
                    <div class="form-group {{ $errors->has('namatipe') ? ' has-error' : '' }}">
			  			<label class="control-label">namatipe</label>	
			  			<input type="text" value="{{ $tipe->namatipe }}" name="namatipe" class="form-control"  required>
			  			@if ($errors->has('namatipe'))
                            <span class="help-block">
                                <strong>{{ $errors->first('namatipe') }}</strong>
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