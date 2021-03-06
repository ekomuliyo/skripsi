<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">PT BUNGA LINTAS CARGO</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="{{ route('cabang')}}">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Dashboard</span>
            </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Posts">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-car"></i>
            <span class="nav-link-text">Pengiriman</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMulti">
            @if(Auth::user()->email == 'cabangjakarta@mail.com')
            <li>
                <a href="{{ route('cabang.pengiriman.index') }}">Pengiriman Barang</a>
            </li>
            @endif
            <li>
                <a href="{{ route('cabang.surat.index') }}">Surat Pengiriman</a>
            </li>
            </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Posts">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMultiCabang" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-cogs"></i>
            <span class="nav-link-text">Kelola</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMultiCabang">
            <li>
                <a href="{{ route('cabang.ongkir.index') }}">Data Ongkir</a>
            </li>
            <li>
                <a href="{{ route('cabang.kurir.index') }}">Data Kurir</a>
            </li>
            </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="{{ route('cabang.pelanggan.index') }}">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Data Pelanggan</span>
            </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Posts">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMultiPembayaran" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-money"></i>
            <span class="nav-link-text">Pembayaran</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMultiPembayaran">
            <li>
                <a href="{{ route('cabang.pembayaran.index') }}">Pelanggan</a>
            </li>
            </ul>
        </li>

        </ul>
        <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
            </a>
        </li>
        </ul>

        <ul class="navbar-nav ml-auto" id="profilId">
        <li class="dropdown user user-menu">
            <a href="#" class="nav-link" data-toggle="dropdown">
              <img src="{{ Auth::user()->foto }}" class="rounded-circle" width="25"  hegiht="25" >
              <span class="hidden-xs">{{ Auth::user()->nama }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                  <center>
                      <img src="{{ Auth::user()->foto }}" class="rounded-circle" width="60" height="60">
                    </center>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ route('cabang.profil', Auth::user()->id) }}" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
              </li>
            </ul>
          </li>
    </div>
</nav>