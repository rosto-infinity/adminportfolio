@extends('layouts.admin.layout-admin')
@section('content')
  <div class="p-5">
      <main>

        <div class="card">
            <h2>Social media</h2>
             <!-- Message de confirmation -->
                        @if(session('delete-success'))
                            <div class="bg-red-300  text-red-500 p-2 rounded-md ">
                                {{ session('delete-success') }}
                            </div>
                        @endif
                <!-- Messages flash -->
                    @if(session('success'))
                        <div class="bg-green-200 text-green-700 p-2 rounded-md">
                            {{ session('success') }}
                        </div>
                    @endif
            <div class="social_table-heading">
                <p>Link</p>
                <p>Icon</p>
                <p></p>
            </div>
            <!-- item 1 -->
            @foreach ($medias as $media)
 
            <div class="social_table-items">
                <p>{{ $media ->link}}</p>
                <button class="service_table-icon">
                    <i class="{{ $media->icon }}"></i>
                </button>
                <!-- Formulaire de suppression -->
                                <form action="{{ route('destroy-medias', $media->id) }}" method="POST" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce média ?')">
                                        Delete
                                    </button>
                                </form>
            </div>
              @endforeach 
            <br>
            
           @include('admin.medias.form-medias') 
        </div>
    
  </div>
@endsection
