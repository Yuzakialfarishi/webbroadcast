@extends('layouts.app')


@section('title','Login - Broadcast Admin')


@section('content')
<div style="max-width:420px;margin:20px auto">
<div class="card" style="padding:20px">
<h3 style="margin-bottom:12px">Login Admin</h3>


<form method="POST" action="{{ route('login') }}">
@csrf


<div style="margin-bottom:10px">
<label for="email">Email</label>
<input id="email" type="email" name="email" required autofocus>
</div>


<div style="margin-bottom:12px">
<label for="password">Password</label>
<input id="password" type="password" name="password" required>
</div>


<div style="display:flex;justify-content:space-between;align-items:center">
<button class="btn" type="submit">Login</button>
<a href="#" style="color:var(--muted);font-size:14px">Lupa password?</a>
</div>
</form>
</div>
</div>


@endsection