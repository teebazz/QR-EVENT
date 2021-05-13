@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrant Info</div>

                <div class="card-body">
                    @if ($details->status == 'registered')
                        <div class="alert alert-success">
                            <h5>Attendant Regsitered Successfully</h5>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('register-attendant',$details->id) }}">
                        @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-2">
                                    @if(!empty($qr_code))
                                        <input type="hidden"  name="qr_code" value="{{$qr_code}}" >
                                    @endif
                                    <input type="text" class="form-control" readonly  name="title" value="{{ $details['title'] }}" >
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" readonly  name="first_name" value="{{ $details['first_name'] }}" >
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" readonly  name="last_name" value="{{ $details['last_name'] }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Preferred Nick Name</label>
                                <div class="col-md-8">
                                    <input id="preferred_nickname" type="text" class="form-control" readonly  name="preferred_nickname" value="{{ $details['preferred_nickname'] }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Gender</label>
                                <div class="col-md-8">
                                    <input id="gender" type="text" class="form-control" readonly  name="gender" value="{{ $details['gender'] }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control" readonly  name="email" value="{{ $details['email'] }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" readonly  name="phone" value="{{ $details['contact_number'] }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Alternate Number Phone Number</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" readonly  name="phone" value="{{ $details['altternate_number'] }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">T-Shtirt</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" readonly  name="t_shirt" value="{{ $details['t_shirt'] }}" >
                                </div>
                            </div>
                            @if (empty($details->status))
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register Attendant
                                        </button>
                                    </div>
                                </div>
                            @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
