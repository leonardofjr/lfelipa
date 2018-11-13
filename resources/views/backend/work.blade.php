@extends('layouts.admin')
@section('content')
<div class="row">
          <div class="offset-11">
           <a class="btn-primary btn" href="/admin/work/add">Add Work</a>
          </div>
          <div class="col-12">
          
              @foreach($data as $item)
                <h2>{{$item->title}}</h2>
                <p>{{$item->description}}</p>
                <p><strong>Technologies:</strong>
                    @foreach(json_decode($item->technologies) as $technoloogy)
                        {{$technoloogy}}
                    @endforeach
                </p>
                <div class="offset-11">
                <a href="work/edit/{{$item->id}}">Edit</a>
                <form id="deleteWorkForm" action="work/delete/{{$item->id}}" method="DELETE">
                      {{ csrf_field() }}
                     <input type="hidden" name="_method" value="DELETE">
                      <button type="submit">Delete</button>
                </form>
                   
                </div>
              @endforeach
          </div>

</div>
@endsection

@section('after-body-scripts')
<script src="../../../dist/scripts/scripts.js"></script>
@endsection