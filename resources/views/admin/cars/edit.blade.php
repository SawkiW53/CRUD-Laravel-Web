@extends('layouts.app')

@section('content')

<!-- Main content -->
<section class="content pt-4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Data</h3>
            <a href="{{ route('admin.cars.index')}}" class="btn btn-success shadow-sm float-right">
              <i class="fa fa-arrow-left"></i> Kembali
            </a>
          </div>

          <div class="card-body">
            <form method="post" action="{{ route('admin.cars.update', $car) }}" enctype="multipart/form-data">
              @csrf
              @method('put')

              <div class="form-group row border-bottom pb-4">
                <label for="nama_mobil" class="col-sm-2 col-form-label">Nama Mobil</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama_mobil" value="{{ old('nama_mobil', $car->nama_mobil) }}" id="nama_mobil">
                </div>
              </div>

              <div class="form-group row border-bottom pb-4">
                <label for="type_id" class="col-sm-2 col-form-label">Tipe Mobil</label>
                <div class="col-sm-10">
                  <select class="form-control" name="type_id" id="type_id">
                    @foreach($types as $type)
                      <option {{ old('type_id', $car->type->id) == $type->id ? 'selected' : '' }} value="{{ $type->id }}">{{ $type->nama }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row border-bottom pb-4">
                <label for="price" class="col-sm-2 col-form-label">Harga Sewa</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="price" value="{{ old('price', $car->price) }}" id="price">
                </div>
              </div>

              <div class="form-group row border-bottom pb-4">
                <label for="pintu" class="col-sm-2 col-form-label">Jumlah Pintu</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="pintu" value="{{ old('pintu', $car->pintu) }}" id="pintu">
                </div>
              </div>

              <div class="form-group row border-bottom pb-4">
                <label for="penumpang" class="col-sm-2 col-form-label">Jumlah Penumpang</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="penumpang" value="{{ old('penumpang', $car->penumpang) }}" id="penumpang">
                </div>
              </div>

              <div class="form-group row border-bottom pb-4">
                <label for="image" class="col-sm-2 col-form-label">Gambar Mobil</label>
                <div class="col-sm-10">
                  <input type="file" name="image" class="form-control">

                  @if ($car->image)
                    <div class="mt-2">
                      <p>Gambar saat ini:</p>
                      <img src="{{ asset('storage/' . $car->image) }}" alt="Gambar Mobil" width="200">
                    </div>
                  @endif
                </div>
              </div>

              <div class="form-group row border-bottom pb-4">
                <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="description" id="description" cols="30" rows="6">{{ old('description', $car->description) }}</textarea>
                </div>
              </div>

              <div class="form-group row border-bottom pb-4">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                  <select class="form-control" name="status" id="status">
                    @foreach($statuses as $no => $status)
                      <option {{ old('status', $car->status) == $no ? 'selected' : '' }} value="{{ $no }}">{{ $status }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <button type="submit" class="btn btn-success">Simpan</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

@endsection
