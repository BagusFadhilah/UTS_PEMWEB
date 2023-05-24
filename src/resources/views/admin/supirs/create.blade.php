@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.supir.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.supirs.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="nama">{{ trans('cruds.supir.fields.nama') }}</label>
                <input class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" type="text" name="nama" id="nama" value="{{ old('nama', '') }}" required>
                @if($errors->has('nama'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.supir.fields.nama_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="author">{{ trans('cruds.supir.fields.mobil') }}</label>
                <input class="form-control {{ $errors->has('mobil') ? 'is-invalid' : '' }}" type="text" name="mobil" id="mobil" value="{{ old('mobil', '') }}" required>
                @if($errors->has('mobil'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobil') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.supir.fields.author_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection