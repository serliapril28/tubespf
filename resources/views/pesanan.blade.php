@extends('layouts.app')

@section('content')
<section class="contact-section" style="margin-top: -70px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title text-center">Pesan</h2>
            </div>
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{ route('pesan-store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <p>Nama</p>
                            <div class="form-group">
                                <input class="form-control valid" name="nama" id="nama" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="col-12" style="margin-bottom: 30px;">
                            <p>Treatment</p>
                            <div class="form-group">
                                <select class="form-control" name="treatment" id="treatment" required>
                                    <option value="" disabled selected style="width: 300px">Select your treatment</option>
                                    <option value="regular" style="width: 300px">Regular</option>
                                    <option value="express" style="width: 300px">Express</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <p>Total Perfume</p>
                            <div class="form-group">
                                <input class="form-control valid" name="jumlahParfum" id="jumlahParfum" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your total shoes'" placeholder="Enter your total shoes" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3 text-center">
                        <button type="submit" class="button button-contactForm boxed-btn">Add Pesanan</button>
                    </div>
                </form>
                @if(session('error'))
                    <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            html: '{!! addslashes(session('error')) !!}',
                        });
                    </script>
                @endif
                @if(session('success'))
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: '{{ session('success') }}',
                        });
                    </script>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection