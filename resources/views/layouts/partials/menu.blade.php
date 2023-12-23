<style>
    .img-container {
        width: 300px; 
        height: 300px;
        overflow: hidden;
    }

    .img-container img {
        width: 100%;
        height: auto; 
        max-height: 100%; 
        object-fit: cover;
    }
</style>


@foreach ($menu as $makanan)
    <div class="col-4">
        <div class="card mt-4">
            <form class="add-to-cart-form" data-menu-id="{{ $makanan->id }}" data-harga-menu="{{ $makanan->harga_menu }}">
                @csrf
                <div class="card">
                    <div class="img-container">
                        <img src="{{ asset('storage/' . $makanan->image) }}" alt="{{ $makanan->nama_menu }}" class="card-img-top img-fluid">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $makanan->nama_menu }}</h5>
                        <p class="card-text fs-6 fw-semibold">Harga: {{ $makanan->harga_menu }}</p>
                        <div class="input-group mb-3">
                            <button type="button" class="btn btn-outline-danger btn-minus">-</button>
                            <input type="text" class="form-control jumlah-menu text-center" value="1">
                            <button type="button" class="btn btn-outline-danger btn-plus">+</button>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-outline-danger add-to-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endforeach
