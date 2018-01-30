<section class="bg-style4"  id="form">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-pink text-center text-uppercase">Ikuti Program</h2>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <form action="{{ url()->current() }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nama</label>
                            <input type="text" class="form-control" value="{{ old('name') }}" placeholder="Nama" name="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Alamat Email</label>
                            <input type="email" class="form-control" value="{{ old('email') }}" placeholder="Alamat Email" name="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Nomer HP</label>
                            <input type="text" class="form-control" value="{{ old('phone') }}" placeholder="Nomer HP" name="phone" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Nomer Identitas</label>
                            <input type="text" class="form-control" value="{{ old('id_card') }}" placeholder="Nomer (Identitas KTP/SIM/Paspor)" name="id_card" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Provinsi</label>
                            <select onchange="selectRegency(this.value)" class="form-control" name="province_id" required>
                                <option value="">-- Pilihan --</option>
                                @foreach($provinces as $prov)
                                    <option value="{{ $prov->id }}" {{ old('province_id') == $prov->id ? 'selected':null }}>{{ $prov->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Kota</label>
                            <select id="regencies" class="form-control input-lg" name="regency_id" required>
                                <option value="">-- Pilihan --</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select class="form-control input-lg" name="gender" required>
                                <option value="male" {{ old('gender') == 'male' ? 'selected':null }}>Pria</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected':null }}>Wanita</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Kode Verifikasi</label>
                            <input type="text" class="form-control" value="{{ old('unique_code') }}" placeholder="Masukan Kode Verifikasi" name="unique_code" required>
                        </div>
                        <div class="form-group col-md-6">
                            {!! NoCaptcha::renderJs('id') !!}
                            {!! NoCaptcha::display() !!}
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="form-check">
                            <input class="form-check-input" name="agreement" value="check" type="checkbox" id="gridCheck" required>
                            <label class="form-check-label" for="gridCheck">
                              Ya saya telah membaca, dan menyetujui <a class="page-scroll" style="color: #ef59a1;" href="#syarat">Syarat & Ketentuan</a> berlaku
                            </label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-pink btn-lg">SUBMIT</button>
                    </div>
                    <input type="hidden" name="type" value="form">
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
