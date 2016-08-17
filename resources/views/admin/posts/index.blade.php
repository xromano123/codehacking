@extends('layouts.admin')

@section('content')


    <h1>Posts</h1>

    <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>User</th>
            <th>Catergory</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
          </tr>
        </thead>

        <tbody>
        @if($posts)
           @foreach($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td><img height="50" src="{{($post->photo) ? $post->photo->file : 'https://placehold.it/600x400'}}" ></td>

            {{--@if($post->photo)--}}
                {{--<td><img height=50px width=70px src="{{$post->photo->file}}" alt="my_image"</td>--}}
            {{--@else--}}
            {{--<td><img height=50px src="https://placehold.it/140x100" alt="color"></td>--}}
            {{--@endif--}}

            <td>{{$post->user->name}}</td>
            <td>{{$post->category_id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at->diffForhumans()}}</td>
            <td>{{$post->updated_at->diffForhumans()}}</td>
          </tr>
           @endforeach
         @endif
        </tbody>
      </table>

@stop
