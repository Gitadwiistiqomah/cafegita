@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Update Buku</h3>
        <a href="{{ route('admin.items.index')}}" class="btn btn-sm btn-primary mb-2">Kembali</a>

        <form action="{{route('admin.items.update', $items->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group mb-2">
                <label for="name" class="form-lable"> Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" value="{{ ( $items->name) }}" class="form-control @error('name') is-invalid  @enderror" />
            </div>
            
            <div class="form-group mb-2">
                <label for="price" class="form-lable"> Harga <span class="text-danger">*</span></label>
                <input type="number" name="price" id="price" value="{{ ( $items->price) }}" class="form-control @error('price') is-invalid  @enderror"/>
            </div>
        
            <div class="form-group mb-2">
                <label for="image" class="form-lable"> Foto <span class="text-danger">*</span></label>
                <input type="file" name="image" id="image" value="{{($items->image) }}" class="form-control  @error('image') is-invalid  @enderror"/>
                <img src="{{ asset('storage/uploads/items/'. $items->image) }}" alt="" width="100" height="100">
                
                @error('image') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
        

            <button type="submit" class="btn btn-primary"> Simpan </button>

            <a href="{{ route('admin.items.index') }}" class="btn btn-secondary">Batal</a>

        </form>
    </div>

@endsection