<div class="form-group">
    <input name="title" type="text" class="form-control" required value="{{$post->title ?? ''}}">
</div>
<div class="form-group">
    <textarea name="description" type="text" rows="10" class="form-control" required>{{ $post->description ?? '' }}</textarea>
</div>
<div class="form-group">
    <input name="img" type="file">
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script>
    $('textarea').ckeditor();
    // $('.textarea').ckeditor(); // if class is prefered.
</script>