<form method="POST" action="/form">
    {{csrf_field()}}
    <div class="form-group">
        <label for="name">{{$name or 'Name:'}}</label>
        <input type="text" name="name" class="form-control" id="name">
    </div>
    <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea class="form-control" id="comment" name="comment"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>