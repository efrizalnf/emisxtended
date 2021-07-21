{{-- @dd($data) --}}
@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>

    <div class="section-body">
      <h1>{{ $data['results']['user']['name'] }}</h1>
      <h1>{{ $data['results']['user']['email'] }}</h1>
    </div>
  </section>
@endsection
