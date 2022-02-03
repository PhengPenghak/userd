@extends('layout.app')

@section('title','Register')

@section('content')

    <div class="block mx-auto my-12 p-8 ng-wihte w-1/3 broder broder-gray-200 rounded -lg shadow-lg">
    <h1 class="text-5xl text-centept-24">Register<h1>
      <form class="mt-4" method="POST" action="">
        @csrf
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Name" id="name" name=name">
      </form>
      <form class="mt-4" method="POST" action="">
        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email">
      </form>
      <form class="mt-4" method="POST" action="">
        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password">
      </form>
      <form class="mt-4" method="POST" action="">
        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password confirmation" id="password_confirmation" name="password_confirmation">
      </form>

      <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">Send</button>
  </div>



@endsection
