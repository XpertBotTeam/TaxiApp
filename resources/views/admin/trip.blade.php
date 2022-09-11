@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align:center">Client trip</h4>
                </div>
                <div class="panel-body">
                    <table class="table">
                        @foreach ($trip_Case as $trip)
                            <tr>
                                <td> Trip ID </td>
                                <td> {{ $trip->id }}</td>
                            </tr>
                            <tr>
                                <td> Name</td>
                                <td> {{ $trip->driver_name }}</td>
                            </tr>
                            <tr>
                                <td> Phone Number</td>
                                <td><a href="https://api.whatsapp.com/send/?phone={{ $trip->phone }}"> {{ $trip->phone }}
                                </td>
                            </tr>
                            <tr>
                                <td> Car Model</td>
                                <td> {{ $trip->car_model }}</td>
                            </tr>
                            <tr>
                                <td> Car Color </td>
                                <td>{{ $trip->color }} </td>
                            </tr>
                            <tr>
                                <td> Location </td>
                                <td> {{ $trip->location }} </td>
                            </tr>
                            <tr>

                                <td>
                                </td>
                                <td>
                                    <button onclick="myFunction()" try it value="" type="submit"
                                        class="btn btn-primary btn-lg">Take Driver

                                    </button>

                                    <script>
                                        function myFunction() {
                                            alert("Hello , thank you for choosing me");
                                        }
                                    </script>
                                </td>
                            </tr>

                            </tbody>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection

@section('scripts')
@endsection
