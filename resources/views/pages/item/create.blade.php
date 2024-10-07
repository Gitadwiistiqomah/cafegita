@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-building"></span>
            Create - Items
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.items.store') }}" method="POST">
                    @csrf
                <div class="form-group mb-2">
                    <label for="name" class="form-lable"> Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid  @enderror" />
    
                    @error('name') 
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="price" class="form-lable"> Harga <span class="text-danger">*</span></label>
                    <input type="number" name="price" id="price" value="{{ old('price') }}" class="form-control @error('price') is-invalid  @enderror" />
    
                    @error('price') 
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="image" class="form-lable"> Foto  <span class="text-danger">*</span></label>
                    <input type="file" name="image" id="image" value="{{ old('image') }}" class="form-control @error('image') is-invalid  @enderror" />
    
                    @error('image') 
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary"> Simpan </button>
                <a href="{{ route('admin.items.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>  
    </section>

</div>
@endsection