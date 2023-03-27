@extends('layouts.master')

@section('main')
  <cart-page :basket-list="{{ $baskets }}"></cart-page>
@endsection
