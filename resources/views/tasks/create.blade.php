@extends('layouts.app')
    <style>
            .form-container {
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                max-width: 400px;
                margin: 0 auto;
                padding: 20px;
                text-align: left; /* Reset text-align for content */
            }

            h1{
                color:#333;
            }

            label{
                display:block;
                text-align:left;
                margin-top: 10px;
            }

            input,textarea{
                width: 80%;
                padding: 10px;
                margin: 5px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            button {
                background-color: #007BFF;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            button:hover {
                background-color: #0056b3;
            }

            a {
                text-decoration: none;
                color: #007BFF;
                margin-bottom: 10px;
            }
    </style>

    @section('content')
    <div class="form-container">
        <h1>Create Task</h1>
        <a href="{{ route('tasks.index') }}">Back to Task List</a>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
            <br>
            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="3" required></textarea>
            <br>
            <button type="submit">Create Task</button>
        </form>
    </div>
    @endsection