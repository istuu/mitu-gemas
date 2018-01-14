<section class="bg-style4"  id="form">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-pink text-center text-uppercase">Ikuti Program</h2>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Nama</label>
                            <input type="email" class="form-control"  placeholder="Nama">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Alamat Email</label>
                            <input type="email" class="form-control"  placeholder="Alamat Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Nomer HP</label>
                            <input type="email" class="form-control"  placeholder="Nomer HP">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Nomer Identitas</label>
                            <input type="email" class="form-control"  placeholder="Nomer (Identitas KTP/SIM/Paspor)">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Provinsi</label>
                            <select onchange="selectRegency(this.value)" class="form-control">
                                <option value="">-- Pilihan --</option>
                                @foreach($provinces as $prov)
                                    <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Kota</label>
                            <select id="regencies" class="form-control input-lg">
                                <option value="">-- Pilihan --</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select class="form-control input-lg">
                                <option>Pria</option>
                                <option>Wanita</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Kode Verifikasi</label>
                            <input type="email" class="form-control"  placeholder="Masukan Kode Verifikasi">
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Ya saya telah membaca, dan menyetujui <a href="#" target="_blank">Syarat & Ketentuan</a> berlaku
                            </label>
                        </div>
                    </div>
                    <div class="text-center">
                        {!! app('captcha')->render($lang = 'id'); !!}
                        <button type="submit" class="btn btn-pink btn-lg">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@push('view-script')
<script>
    function selectRegency(id){
        $.ajax({
            type: "POST",
            url : '{{ url()->current() }}',
            data: {
                id: id,
                type: 'selectRegency',
                _token: "{{ csrf_token() }}"
            },
            success: function(result){
                $("#regencies").html(result);
            }
        });
    }
</script>
@endpush
