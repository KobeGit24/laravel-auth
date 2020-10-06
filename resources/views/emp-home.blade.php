@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Employees</div>

                  <div class="card-body">
                    <ul>
                      @foreach ($emp as $e)
                        <li>
                          <a href="{{ route('emp.show', $e -> id)}}">
                            {{ $e -> name }}
                            {{ $e -> lastname }}
                          </a>
                        </li>
                        <hr>
                      @endforeach
                    </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
