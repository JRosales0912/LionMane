@extends('layouts.master')

@section('content')    

        <div>
            <h1>Documents</h1>
            <div class="row">
                <div class="col-md-6">
                    <table>
                        <tr>
                            <th>                            
                                <h5>Author</h5>
                                <select>
                                    <option value="Author">John</option>
                                </select>   
                            </th>
                            <th>
                                <h5>Tag</h5>
                                <select>
                                    <option value="Tags">test</option>
                                </select>
                            </th>
                            <th>
                                <h5>Creation Date</h5>
                                <input id="date" type="date">
                            </th>
                            <th>
                                <h5>Modification Date</h5>
                                <input id="date" type="date">
                            </th>
                            <th>
                                <a type="button" href="#" style="float:right;">New Document</a>
                            </th>
                        </tr>
                    </table>
                </div>
                <div>
                    <!-- Documents-->
                    <table>
                        <th>
                            <tr>
                                Title
                            </tr>
                            <tr>
                                Author
                            </tr>
                            <tr>
                                Creation Date
                            </tr>
                        </th>
                        @foreach($doc as $docs)
                        <th>
                            <tr>
                                {{ $doc -> title }}
                            </tr>
                            <tr>
                                {{ $doc -> author }}
                            </tr>
                            <tr>
                                {{ $doc -> created_at}}
                            </tr>
                        </th>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
@endsection