<!-- navbar -->
<div class="navigation w-100">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"> <i class="fas fa-home"></i> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item  dropdown" id="profile">
                        <a class="nav-link  dropdown-toggle" href="#" id="menu_sejarah" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">TENTANG LANAL BANYUWANGI
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('sejarah') }}" id="sejarah">Sejarah Lanal Banyuwangi</a></li>
                            <li>
                            
                            </li>
                            <li><a class="dropdown-item" href="{{ route('visi_misi') }}">Visi Misi Lanal Banyuwangi</a></li>
                            <li>
                               
                            </li>
                        </ul>
                    </li>
                    

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">BERITA
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            
                            <li>
                                <a class="dropdown-item" href="{{ route('berita') }}">Artikel</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">DOKUMENTASI KEGIATAN
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('alumni') }}">Galeri</a></li>
                        </ul>
                    </li>
                    

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">PENDAFTARAN</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('info_pendaftaran') }}">Informasi
                                    Pendaftaran</a>
                            </li>
                            
                        </ul>
                    </li>

                   
                </ul>
            </div>
        </div>
    </nav>
</div>
{{-- navbar --}}
