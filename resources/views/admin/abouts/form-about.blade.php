<div class="flex items-center  gap-5 mb-2 justify-between px-6">
    <h1 class="text-xl font-bold">About Me</h1>
    <button class="secondary px-4 py-2 text-sm">
        {{ $FormMode === 'edit' ? 'Update' : ''}}   
    </button>
</div>

<div class="card-wrapper grid md:grid-cols-2 gap-4 max-w-4xl mx-auto">
   
    <!-- Colonne gauche -->
    <div class="space-y-4">
        <div class="card p-4">
            <div class="space-y-3">
                <div>
                    <label for="name" class="block text-sm font-medium">Full Name</label>
                    @error('name')<span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                    <input type="text" id="name" class="w-full p-2 border rounded text-sm"
                           value="{{ $about->name ?? '' }}" name="name">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium">Email</label>
                    @error('email')<span class="text-red-500 text-xs">{{ $message}}</span>@enderror
                    <input type="email" id="email" class="w-full p-2 border rounded text-sm"
                           value="{{ $about->email ?? '' }}" name="email">
                </div>

                <div>
                    <label for="address" class="block text-sm font-medium">Address</label>
                    @error('address')<span class="text-red-500 text-xs">{{ $message}}</span>@enderror
                    <input type="text" id="address" class="w-full p-2 border rounded text-sm"
                           value="{{ $about->address ?? '' }}" name="address">
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium">Phone</label>
                    @error('phone')<span class="text-red-500 text-xs">{{ $message}}</span>@enderror
                    <input type="text" id="phone" class="w-full p-2 border rounded text-sm"
                           value="{{ $about->phone ?? '' }}" name="phone">
                </div>

                <div>
                    <label for="tagline" class="block text-sm font-medium">Tagline</label>
                    @error('tagline')<span class="text-red-500 text-xs">{{ $message}}</span>@enderror
                    <input type="text" id="tagline" class="w-full p-2 border rounded text-sm"
                           value="{{ $about->tagline ?? '' }}" name="tagline">
                </div>
            </div>
        </div>

        <div class="card p-4">
            <label for="description" class="block text-sm font-medium">Description</label>
            @error('description')<span class="text-red-500 text-xs">{{ $message}}</span>@enderror
            <textarea id="description" rows="3" name="description" 
                      class="w-full p-2 border rounded text-sm">{{ $about->description ?? '' }}</textarea>
        </div>

        <!-- Champ Summary ajouté ici -->
        <div class="card p-4">
            <label for="summary" class="block text-sm font-medium">Summary</label>
            @error('summary')<span class="text-red-500 text-xs">{{ $message}}</span>@enderror
            <textarea id="summary" rows="3" name="summary" 
                      class="w-full p-2 border rounded text-sm">{{ $about->summary ?? '' }}</textarea>
        </div>
    </div>

    <!-- Colonne droite -->
    <div class="space-y-4">
        <div class="card p-4">
            <label for="home_image" class="block text-sm font-medium text-white bg-green-500 p-2 rounded">
                Home Image
            </label>
           @error('home_image')
               <span class= "text-red-600 "> {{ $message}}</span>
           @enderror
            <img 
            id="HomeImage-preview" 
            class="w-32 h-32 mx-auto rounded-full object-cover my-2"
                 src="{{ isset($about->home_image) ? asset('storage/images/'.$about->home_image) : asset('storage/images/avatar.jpg') }}"
                 >
           
                 <input 
                 type="file" 
                 id="home_image" 
                 onchange="showHomeImageFile(event)"
                 name="home_image"
                   class="w-full text-xs border rounded cursor-pointer p-1">
        </div>

        <div class="card p-4">
            <label for="banner_image" class="block text-sm font-medium text-white bg-green-500 p-2 rounded">
                Banner Image
            </label>
            <img id="BannerImage-preview" class="w-full h-24 object-cover my-2 rounded"
                 src="{{ isset($about->banner_image) ? asset('storage/images/'.$about->banner_image) : asset('storage/images/avatar.jpg') }}">
            <input 
            type="file" 
            id="banner_image" 
            name="banner_image"
            onchange="showBannerImageFile(event)"
                   class="w-full text-xs border rounded cursor-pointer p-1">
        </div>

        <div class="card p-4">
            <label for="cv" class="block text-sm font-medium">CV</label>
            <input type="file" id="cv" class="w-full text-xs border rounded cursor-pointer p-1">    
        </div>
    </div>

    
</div>

<script>
    function showHomeImageFile(event){
        const input = event.target
        const reader = new FileReader()
        reader.onload = () => document.getElementById('HomeImage-preview').src = reader.result
        reader.readAsDataURL(input.files[0])
    }

    function showBannerImageFile(event){
        const input = event.target
        const reader = new FileReader()
        reader.onload = () => document.getElementById('BannerImage-preview').src = reader.result
        reader.readAsDataURL(input.files[0])
    }
</script>
