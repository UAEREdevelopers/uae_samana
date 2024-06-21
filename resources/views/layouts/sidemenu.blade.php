<li class="nav-item mt-auto">
  <a href="{{ route('property.index') }}" class="nav-link {{ (request()->is('admin/property')) ? 'active': '' }}">
    <i class="nav-icon fas fa-tags"></i>
    <p>
      Property
    </p>
  </a>                    
</li>

<li class="nav-item mt-auto">
  <a href="{{ route('gallery.index') }}" class="nav-link {{ (request()->is('admin/gallery')) ? 'active': '' }}">
    <i class="nav-icon fas fa-tags"></i>
    <p>
      Gallery
    </p>
  </a>                    
</li>

<li class="nav-item mt-auto">
  <a href="{{ route('amenity.index') }}" class="nav-link {{ (request()->is('admin/amenity')) ? 'active': '' }}">
    <i class="nav-icon fas fa-tags"></i>
    <p>
      Amenity
    </p>
  </a>                    
</li>

<li class="nav-item mt-auto">
  <a href="{{ route('enquiry.index') }}" class="nav-link {{ (request()->is('admin/enquiry')) ? 'active': '' }}">
    <i class="nav-icon fas fa-tags"></i>
    <p>
      Enquiry
    </p>
  </a>                    
</li>