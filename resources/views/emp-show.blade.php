@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">
                    <strong>Employee : </strong>
                    {{ $emp -> name }}
                    {{ $emp -> lastname }}
                  </div>
                  <div class="card-body">
                    <p>
                      DATE OF BIRTH : {{ $emp -> date_of_birth }} <br>
                      LOCATION_ID : {{ $emp -> location -> name }} ({{ $emp -> location -> city }})
                    </p>
                    @auth
                      <div>
                        <a  class="btn btn-danger"
                            href="{{ route('emp.delete', $emp -> id )}}">
                            DELETE
                        </a>
                      </div>
                    @else
                      <p style="color:red;">
                        PLEASE LOGIN IF YOU WANT <em><strong>DELETE</strong></em> EMPLOYEE.
                      </p>
                    @endauth
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
