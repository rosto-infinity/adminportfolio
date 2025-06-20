@extends('layouts.admin.layout-admin')
@section('content')
  <main>
      
 <!--==================== SERVICES ====================-->
        <section class="services" id="services">
            <div class="titlebar">
                <h1>Services</h1>
                <button class="open-modal">New Service</button>
            </div>
           
            <div class="table">
                <div class="table-filter">
                    <div>
                        <ul class="table-filter-list">
                            <li>
                                <p class="table-filter-link link-active">All</p>
                            </li>
                        </ul>
                    </div>

                </div>
               
            <form method="get" action="{{ route('index-service') }}">
                 <div class="table-search">
                    <div>
                        <select class="search-select " name="" id="">
                            <option value="">Filter Service</option>
                        </select>
                    </div>
                    <div class="flex gap-5 ml-2 relative">

                        <input class="" type="text" name="name" placeholder="Rechercher le titre de service..."
                            value="{{ Request::get('name') }}" />
                        <button class="min-w-30 h-12 ">Recherche</button>
                        <a  class="min-w-30 px-2 h-12 bg-blue-600 text-white flex items-center justify-center rounded-md"
                        href="{{ url('admin/services') }}">
                            Réinitialiser
                        </a>
                    </div>
                </div>
                
                <div class="service_table-heading">
                    <p>Title</p>
                    <p>Icon</p>
                    <p>Description</p>
                    <p>Actions</p>
                </div>
            </form> 

                @foreach ($services as $service )
                    
              
                <div class="service_table-items">
                    <p>{{$service->name }}</p>
                    <button class="service_table-icon">
                        <i class="{{$service->icon }}"></i>
                    </button>
                    <p>
                        {{$service->description }}
                    </p>
                    <div>
                        <button class="btn-icon success">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        <button class="btn-icon danger">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </div>
                
                @endforeach

            </div>

            <!-------------- SERVICES MODAL --------------->
            <div class="modal">
                <div class="modal-content">
                    <h2>Create Service</h2>
                    <span class="close-modal">×</span>
                    <hr>
                    <div>
                        <label>Service Name</label>
                        <input type="text" />

                        <label>Icon Class <span style="color:#006fbb;">(Find your suitable icon: Font
                                Awesome)</span></label>

                        <input type="text" />

                        <label>Description</label>
                        <textarea cols="10" rows="5"></textarea>
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <button class="close-modal">
                            Cancel
                        </button>
                        <button class="secondary close-modal">
                            <span><i class="fa fa-spinner fa-spin"></i></span>
                            Save
                        </button>
                    </div>

                </div>
            </div>

          
            
        </section>

    
  </main>
@endsection
