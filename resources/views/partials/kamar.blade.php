<section id="kamar" class="py-5">
    <div class="container-lg">
      <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="section-title text-center">
                <h2 class="fw-bold mt-4">KAMAR</h2>
            </div>
        </div>
    </div>
      <div class="row justify-content-center">
        @foreach ($kamar as $kamar)
        <div class="col-md-3 col-6">
            <div class="card">
              <img src="img/{{ $kamar['gambar_kamar'] }}" class="card-img-top" alt="{{ $kamar["nama_kamar"] }}" title="{{ $kamar["nama_kamar"] }}">
              <div class="card-body">
                <div class="{{ ($kamar["status_kamar"]==="Terisi") ? 'kamar-status-terisi': 'kamar-status' }}">{{ $kamar["status_kamar"] }} &#8226; IDR{{ $kamar["harga_kamar"] }}K</div>
                <h5 class="card-title">{{ $kamar["nama_kamar"] }}</h5>
                <p class="card-text">{{ $kamar["deskripsi_kamar"] }}</p>
                <a href="https://wa.me/089657232951?text=Apakah%20{{ $kamar["nama_kamar"] }}%20kosong?" class="btn {{ ($kamar["status_kamar"]==="Terisi") ? 'disabled':'' }}" style="background-color: #FF7999;" target="_blank" title="Pesan melalui Whatsapp">Pesan</a>
              </div>
            </div>
        </div>
        @endforeach
    </div>
  </section>