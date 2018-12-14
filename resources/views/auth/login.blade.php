@extends('layout')

@section('title', 'Login')

@section('content')
    <div class="container">
        <div class="auth-pages">
            <div class="auth-left">
                @if (session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
                @endif @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h2>შესვლა</h2>
                <div class="spacer"></div>

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required
                           autofocus>
                    <input type="password" id="password" name="password" value="{{ old('password') }}"
                           placeholder="Password" required>

                    <div class="login-container">
                        <button type="submit" class="auth-button">შესვლა</button>
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>

                    <div class="spacer"></div>

                    <a href="{{ route('password.request') }}">
                        პაროლის აღდგენა
                    </a>

                </form>
            </div>

            <div class="auth-right">
                <h2>ახალი მომხმარებელი</h2>
                <div class="spacer"></div>
                <p><strong>დაზოგე დრო</strong></p>

                <div class="spacer"></div>
                <a href="{{ route('guestCheckout.index') }}" class="auth-button-hollow">გააგრძელე როგორც სტუმარი</a>
                <div class="spacer"></div>
                &nbsp;
                <div class="spacer"></div>
                <p><strong>დარეგისტრირი</strong></p>
                <p>შექმენი პროფილი
                    <br>
                    რათა გქონდეს სწრაფი წვდომა შენს კალათასთან და შეძლო ყიდვა საიტიდან</p>
                <div class="spacer"></div>
                <a href="{{ route('register') }}" class="auth-button-hollow">რეგისტრაცია</a>

            </div>
        </div>
    </div>
@endsection
