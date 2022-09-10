@extends('layouts.admin')
@yield('content')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="text-align:center">
                <div class="card-header">
                    <h4 class="card-title" style="text-align:center">Welcome to Client Registration Page</h4>
                </div>
                <div class="card-header">
                    <h4 class="card-title" style="text-align:center">Please Fill the Following Form</h4>
                </div>
                <div class="card-body">
                    @if (Session::get('success'))
                        <div class="alret alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if (Session::get('fail'))
                        <div class="alret alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif

                    <form action="storeC" method="POST">
                        @csrf

                        <div class="form-group" style="text-align:center">
                            <input type="string" style="text-align:center" name="client_name" class="form-control"
                                placeholder="Enter Your Full Name">
                            <span style="color:red">
                                @error('client_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group" style="text-align:center">
                            <input type="string" style="text-align:center" name="phone" class="form-control"
                                placeholder="Enter Your Phone number ">
                            <span style="color:red">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="destination">Choose you Destination</label>
                            <select id="destination" name="destination">
                                <option value=""></option>
                                <option value="Saida">Saida</option>
                                <option value="Beirut">Beirut</option>
                                <option value="Tripoli">Tripoli</option>
                                <option value="Tyre">Tyre</option>
                                <option value="Jounieh">Jounieh</option>
                                <option value="Byblos">Byblos</option>
                                <option value="Aley">Aley</option>
                                <option value="Nabatieh">Nabatieh</option>
                                <option value="Baalbek">Baalbek</option>
                                <option value="Batroun">Batroun</option>
                                <option value="Zgharta-Ehden">Zgharta-Ehden</option>

                            </select>
                            <span style="color:red">
                                @error('location')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="location">Choose you Location</label>
                            <select id="location" name="location">
                                <option value=""></option>
                                <option value="Saida">Saida</option>
                                <option value="Beirut">Beirut</option>
                                <option value="Tripoli">Tripoli</option>
                                <option value="Tyre">Tyre</option>
                                <option value="Jounieh">Jounieh</option>
                                <option value="Byblos">Byblos</option>
                                <option value="Aley">Aley</option>
                                <option value="Nabatieh">Nabatieh</option>
                                <option value="Baalbek">Baalbek</option>
                                <option value="Batroun">Batroun</option>
                                <option value="Zgharta-Ehden">Zgharta-Ehden</option>

                            </select>
                            <span style="color:red">
                                @error('destination')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>







                        <div class="form-group">
                            <label for="gender">Your Gender:</label>
                            <select id="gender" name="gender">
                                <option value=""></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <span style="color:red">
                                @error('gender')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>




















                        <input type="hidden" name="receiver" value="">

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
@section('scripts')
@endsection
