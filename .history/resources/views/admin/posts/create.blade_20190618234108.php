@extends('layouts.admin');
@section('content')
<h2>New Post</h2>
 
<form method="post" action="{{ route('admin.posts.store') }}">
{{csrf_field()}}
<div class="form-group">
    <label class="control-label">Tiltle </label>
        <input type="text" name="title" id="title" value="{{ old('title')}}" class="form-control ">
        <!-- @error('title')
        <p class="text-danger">{{$message}}</p>
        @enderror -->
    </div>
</div>
<div class="form-group">
    <label class="control-label">Content </label>
    <div>
<textarea name="content" id="content" cols="30" rows="6" class="form-control"  value="{{ old('content')}}"></textarea> 
 
 </div>
   <button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
@endsection