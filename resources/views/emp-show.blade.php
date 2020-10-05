@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">
                    Employee:
                    {{$emp -> firstname}}
                    {{$emp -> lastname}}
                  </div>

                  <div class="card-body">
                    <ul>
                      <li>
                        FIRSTNAME: {{ $emp -> firstname}}
                      </li>
                      <li>
                        LASTNAME: {{ $emp -> lastname}}
                      </li>
                      <li>
                        USERNAME: {{ $emp -> username}}
                      </li>
                      <li>
                        BIRTHDAY: {{ $emp -> birthday}}
                      </li>
                      <li>
                        BIO: {{ $emp -> bio}}
                      </li>
                      <li>
                        SALARY: {{ $emp -> salary}}
                      </li>
                      <li>
                        RATING: {{ $emp -> rating}}
                      </li>
                      <li>
                        FIRED: {{ $emp -> fired}}
                      </li>
                      <li>
                        LOCATION: {{ $emp -> location -> name}}
                                  ({{ $emp -> location -> city}})
                      </li>
                    </ul>
                    <br><br>
                    <a class="btn btn-primary" href="#">EDIT</a>
                    <a class="btn btn-danger" href="{{route('emp-delete', $emp -> id)}}">DELETE</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
