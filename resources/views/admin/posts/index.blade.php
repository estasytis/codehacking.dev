@extends('layouts.admin')

@section('content')
<h1>Posts</h1>
<table class='table'>
    <thead>
        <tr>
            <td>ID</td>  
            <td>Owner</td>
            <td>Category</td>
            <td>Post</td>
            <td>Title</td>
            <td>Body</td>
            <td>Created</td>
            <td>Updated</td>
        </tr>
    </thead>
    <tbody>
        @if ($posts)
       
         @foreach ($posts as $post) 
         <tr>
             <td>
                {{$post->id}}  
             </td>   
             <td>
                {{$post->user->name}}  
             </td> 
             <td>
                {{$post->category? $post->category->name: 'Uncategorized'}}  
             </td>  
               <td>
                   <img src="{{$post->photo? $post->photo->file:'http://placehold.it/50x50'}}" width="50">
                {{$post->post_id}}  
             </td> 
               <td>
                {{$post->title}}  
             </td>  
              <td>
                {{$post->body}}  
             </td>  
              <td>
                {{$post->created_at->diffForhumans()}}  
             </td>  
              <td>
                {{$post->updated_at->diffForhumans()}}  
             </td>  
            
        </tr>  
        @endforeach     
        @endif
    </tbody>
    
    
</table>

@stop