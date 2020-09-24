@extends('layouts.app')

@section('content')
<form class="post-page-wrapper" action="{{ route('posts.store') }}" method="post">
  @csrf
  <input type="text" class="form-control m-1" id="title-input" placeholder="タイトル" name="title">
  <input type="text" class="form-control m-1" placeholder="プログラミング技術に関するタグを入力" name="tags">
  <div class="row">
    <div class="col-6 m-1">
      <textarea name="body" id="markdown_editor_textarea" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="col-6 m-1">
      <div id="markdown_preview"></div>
    </div>
  </div>
  <div class="post-page-footer">
    <button type='submit' class="post-button m-1" tabindex="41">
      <i class="fa fa-upload"></i>
      Qiita に投稿
    </button>
  </div>
</form>
@endsection