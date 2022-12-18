@extends('components.frontend.layout')
@section('content')

<div class="mad-content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6">
          <div class="content-element-7 align-center">
            <h1 class="mad-404-title">404</h1>
            <h6>We're sorry, but we can't find the page you were looking for.</h6>
          </div>
          <p class="align-center">It's probably some thing we've done wrong but now we know about it and <br>
          we'll try to fix it. Go <a href="#" class="mad-link color-2">Home</a> or try to search:</p>
          <form class="one-line type-2 sm-button-down">
            <input type="email" placeholder="Search">
            <button type="submit" class="btn btn-style-3 btn-small"><i class="material-icons">search</i><span>Search</span></button>
          </form>
        </div>
      </div>
    </div>
  </div>

  @extends('errors::minimal')

  @section('title', __('Not Found'))
  @section('code', '404')
  @section('message', __('Not Found'))



  @stop
