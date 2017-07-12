@extends('main')

@section('title', '| Edit Blog Post')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <form method="POST" action="{{ route('posts.update', $post->id) }}">
                {{ csrf_field() }}
               {{ method_field('PATCH') }}
             <div class="form-group">
                    <label for="title">Title:</label>
                    <textarea type="text" class="form-control input-lg text" id="title" name="title" rows="1" style="resize:none;">{{ $post->title }}</textarea>
                </div>
                <div class="form-group">
                    <label for="body" class="">Body:</label>
                    <textarea type="textarea" class="form-control input-lg " id="body" name="body" rows="10" style="resize:none;">{{ $post->body }}</textarea>
                </div>
            
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd class="text-muted">{{ date('M j, Y H:ia ', strtotime($post->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd class="text-muted">{{ date('M j, Y h:ia ', strtotime($post->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-danger btn-block">Back</a>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-success btn-block">Save</button>
                    </div>
    </form>
                </div> <!-- /row -->
            </div> <!-- /well -->
        </div> <!-- /col-md-4 -->
    </div> <!-- /row -->
@endsection
