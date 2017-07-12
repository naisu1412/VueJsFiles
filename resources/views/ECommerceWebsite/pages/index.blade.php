@extends('ECommerceWebsite.main')

@section('title','Homepage')

@section('content')

<br>
  <div class="container">
    <div class="row">
       
        
        <div class="col-lg-8 well templateColorChange">
        <h1> Our Services </h1>
        <hr>
            <div class="">
                {{-- Main Content Starts here --}}
                <div class="row">
                    @for ($i = 0; $i < 9; $i++)
                        <div class="col-lg-4 newContent">
                            @component('ECommerceWebsite.partials._images')
                                @slot('thumbnailLabel') Hello There {{ $i }} @endslot
                                @slot('description') Just Product Description for the audience to see.  Lore dasd sasadasd @endslot
                            @endcomponent
                        </div>
                    @endfor
                </div>
              </div>
        </div>

        
        <div class="col-sm-4 visible-lg visible-md ">
            <div class="well">
               @include ('ECommerceWebsite.partials._profileWidget')
            </div>
        </div>

    </div><!-- End of Row here -->
  </div> <!-- Container here -->

@endsection