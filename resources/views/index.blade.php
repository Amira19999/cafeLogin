@extends('layouts.main')

@section('content')
  <!-- Drink Menu Page -->
  @include('includes.Menu')
            <!-- end Drink Menu Page -->
          

          <!-- About Us Page -->
          @include('includes.About')
          <!-- end About Us Page -->

          <!-- Special Items Page -->
          @include('includes.Items')
          <!-- end Special Items Page -->

          <!-- Contact Page -->
          @include('includes.Contact')
          <!-- end Contact Page -->
@endsection