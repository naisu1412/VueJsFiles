@extends('Templating.Templating')

@section('title' , 'Home')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8  ">


            <!--Practicing Panel-->
            <div class="col-md-6 well">
            
            @include('Templating.Pages.panel')

            
{{--
            @component('Templating.Pages.panel')
                @slot('title')
                    My First Slot : {{ $someValue }} 
                @endslot


                @slot('description')
                
                Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also called placeholder (or filler) text. It's a convenient tool for mock-ups. It helps to outline the visual elements of a document or presentation, eg typography, font, or layout. Lorem ipsum is mostly a part of a Latin text by the classical author and philosopher Cicero. Its words and letters have been changed by addition or removal, so to deliberately render its content nonsensical; it's not genuine, correct, or comprehensible Latin anymore. While lorem ipsum's still resembles classical Latin, it actually has no meaning whatsoever. As Cicero's text doesn't contain the letters K, W, or Z, alien to latin, these, and others are often inserted randomly to mimic the typographic appearence of European languages, as are digraphs not to be found in the original.

                @endslot
            @endcomponent
--}}
            <!--End of practicing panel-->

            <!-- Content starts here -->
       
            <!--
            <div class="alert alert-success">
                {{ $slot }} &nbsp; 
            </div>
            -->

            <!-- Content ends here -->
        </div> 

        <div class="col-md-4">
    
           
            @section('sidebar')
                 <p class='well'>
                
                    This will be a side bar

                </p>
            
            @show

        </div>  
    </div>
</div>
        

@endsection