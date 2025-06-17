@extends('layouts.admin.layout-admin')

@section('content')
    <main class="px-4">
            <!--==================== ABOUT ====================-->
            <section class="about" id="about">
             
                 

                <form action="{{ route('update-about', $about->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        @include('admin.abouts.form-about', ['FormMode' => 'edit'])
                </form>   
           
            </section>
        
    </main>
@endsection