@extends('layouts.master')

@section('content')
        <div>
        <style>
            .navbar {
                background-color: #333;
                overflow: hidden;
                position: fixed;
                bottom: 0;
                width: 100%;
            }

            /* Style the links inside the navigation bar */
            .navbar a {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }

            /* Change the color of links on hover */
            .navbar a:hover {
                background-color: #ddd;
                color: black;
            }

            /* Add a color to the active/current link */
            .navbar a.active {
                background-color: #4CAF50;
                color: white;
            }
        </style>        

        <div>
            <h1>Documents</h1>
            <div class="row">
                <div class="col-md-6">
                    <h1>Document</h1>
                </div>
                <div>
                    content
                </div>
                <div class="navbar">
                    <a href="#" class="active">Parse</a>
                    <a href="#" style="float:right;">Save</a>
                    <a href="#" style="float:right;">Leave</a>
                    <a href="#" style="float:right;">Download</a>
                </div>
            </div>
        </div>
        </div>
@endsection