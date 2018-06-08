@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Member
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('member.update',$member->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
                    <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">nama</label>	
			  			<input type="text" value="{{ $member->nama }}" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('telepon') ? ' has-error' : '' }}">
			  			<label class="control-label">telepon</label>	
			  			<input type="text" value="{{ $member->telepon }}" name="telepon" class="form-control"  required>
			  			@if ($errors->has('telepon'))
                            <span class="help-block">
                                <strong>{{ $errors->first('telepon') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
								<label class="control-label">email </label>
								<input type="date" name="email" class="form-control" value="{{$member->email}}" required>
								@if ($errors->has('email'))
									<span class="help-blocks">
										<strong>{{$errors->first('email')}}</strong>
									</span>
								@endif
							</div>

                    <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
								<label class="control-label">password </label>
								<input type="date" name="password" class="form-control" value="{{$member->password}}" required>
								@if ($errors->has('password'))
									<span class="help-blocks">
										<strong>{{$errors->first('password')}}</strong>
									</span>
								@endif
							</div>

			  		<div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
								<label class="control-label">alamat </label>
								<input type="date" name="alamat" class="form-control" value="{{$member->alamat}}" required>
								@if ($errors->has('alamat'))
									<span class="help-blocks">
										<strong>{{$errors->first('alamat')}}</strong>
									</span>
								@endif
							</div>

                    <div class="form-group {{$errors->has('mobil_id') ? 'has-error' : ''}}">
								<label class="control-label">mobil_id </label>
								<input type="date" name="mobil_id" class="form-control" value="{{$member->mobil_id}}" required>
								@if ($errors->has('mobil_id'))
									<span class="help-blocks">
										<strong>{{$errors->first('mobil_id')}}</strong>
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