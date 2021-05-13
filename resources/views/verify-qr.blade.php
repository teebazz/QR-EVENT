@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('verify-attendant') }}">
                        @csrf
                        @if($exist_flag == 'yes')
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Enter Email</label>
                                <div class="col-md-6">
                                    <input type="hidden" name="qr_code" value="{{!empty($qr_code) ? $qr_code : ''}}">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to confirm ?')">
                                        Verify Attendant
                                    </button>
                                </div>
                            </div>
                        @else
                            <div class="alert alert-danger">
                                Invalid QR Code
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
