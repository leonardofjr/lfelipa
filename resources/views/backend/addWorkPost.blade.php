@extends('layouts.admin')
@section('content')
            <section class="container"> 
            <h2>Add Work</h2>
            <form id="addWorkForm" method="POST" action="add-new-work-post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" >
                    <div class="flash-message-title d-none">
                        <span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="type">Type:</label>
                        <select class="form-control" id="type" name="type" >
                            @foreach($type_dropdown as $type)
                                    <option value="{{strtolower($type)}}">{{$type}}</option>
                      
                            @endforeach
                        </select>
                    <div class="flash-message-type d-none">
                        <span></span>
                    </div>
                </div>

                                
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea type="text" class="form-control" id="description" name="description" ></textarea>
                        <div class="flash-message-description d-none">
                        <span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="technologies_used">Technologies used:</label>
                    <!-- Looping through $languages passed by controller -->
                    @foreach($programming_languages as $language)
                        <div class="form-check">
                                <input type="checkbox" class="form-check-input" id= "{{strtolower($language)}}" name="{{strtolower($language)}}" value= "{{strtolower($language)}}">
                                 <label class="form-check-label" for={{strtolower($language)}}>{{$language}}</label>
                        </div>
                     @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </section>
@endsection

@section('after-body-scripts')
<script src="../../../dist/scripts/scripts.js"></script>
@endsection