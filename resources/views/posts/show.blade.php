@extends('main')

@section('title', '| View Post')

@section('content')

<!--pwede mo maaccess mga file sa variable na pinasa mo-->
<div class="row">

    <div class="col-md-8">
        <h1>{{ $post->title }}</h1>
        <p class='lead'>{{ $post->body }}</p>
    </div>


    <div class="col-md-4">
        <div class="well">
            
            <!--html5 naglabas na ng dt dl-->

            <dl class="dl-horizontal">
                <dt>Create At:</dt>
                <dd>{{date('M j, Y h:i',strtotime($post->created_at))}}</dd>
            </dl>

            
            <dl class="dl-horizontal">
                <dt>last Updated:</dt>
                <dd>{{date('M j, Y h:i',strtotime($post->updated_a))}}</dd>
            </dl>

            <hr>

            <div class="row">
                
                <div class="col-sm-6">

                <form method="PUT" action="{{route('posts.edit',$post->id)}}">
                <input type="submit" value="Edit" class="btn btn-primary btn-block">
                <input type="hidden" name="_token" value="{{Session::token()}}">
                
                </form>
                </div>

                <div class="col-sm-6">

                <form method="POST" action="{{route('posts.destroy',$post->id)}}">
                <input type="submit" value="Delete" class="btn btn-danger btn-block">
                <input type="hidden" name="_token" value="{{Session::token()}}">
                {{ method_field('DELETE') }}
                
                </form>
                </div>

                 
                
            </div>

            <div class="row">
                    <div class="col-sm-12"> 
                        <a href="/posts" class='btn btn-default'> See All Posts </a>
                    </div>
            </div>
        </div>
    </div>
    
</div>
@endsection