@extends('layouts.admin');
@section('content')
<h2>Edit Post</h2>
<form method="post" action="{{route('admin.posts.update',['id'=>$post->id] ) }}">
    
<input type="hidden" name="_method" value="PUT">
{{csrf_field()}}
<div class="form-group">
    <label class="control-label">Tiltle </label>
    <div>
        <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
    </div>
</div>
<div class="form-group">
    <label class="control-label">Content </label>
    <div>
<textarea name="content" id="content" cols="30" rows="6" class="form-control" >{{$post->content}}</textarea> 
   </div>
   <button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
@endsection