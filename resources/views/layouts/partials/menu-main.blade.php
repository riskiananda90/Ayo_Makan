@foreach ($menu as $makanan)
    <div class="col-4">
        <div class="card mt-4">
            <form class="add-to-cart-form" data-menu-id="{{ $makanan->id }}" data-harga-menu="{{ $makanan->harga_menu }}">
                @csrf
                <div class="card-body p-0">
                    <img src="{{ url('storage/' . $makanan->image) }}" alt="{{ $makanan->nama_menu }}" class="img-fluid">
                    <h5 class="card-text fs-6 fw-bold m-2">{{ $makanan->nama_menu }}</h5>
                    <p class="card-text fs-6 fw-semibold m-2">{{ $makanan->harga_menu }}</p>
                    <div class="d-flex justify-content-center my-3">
                        <div class="input-group mx-5 justify-content-center">
                            <button type="button" class="btn btn-outline-danger btn-minus">-</button>
                            <input type="text" class="jumlah-menu text-center border-1" value="1"
                                style="width: 50px">
                            <button type="button" class="btn btn-outline-danger btn-plus">+</button>
                            <input type="button" class="btn btn-outline-danger add-to-cart-btn" value="Add">
                        </div>
                    </div>
                    <div class="text-center m-3">
                        <a href="{{ route('showPemesanan', ['id' => $restoran->id, 'id_menu' => $makanan->id]) }}">
                            Pesan
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endforeach
