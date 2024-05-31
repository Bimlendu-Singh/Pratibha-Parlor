<!-- resources/views/frontend/contact.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container fade-in">
    <h1>Contact Us</h1>
    <form action="#" method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit">Send</button>
    </form>
</div>
@endsection
