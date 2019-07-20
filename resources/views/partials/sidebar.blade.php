<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-user"></i></a>				
            </div>
            <div class="pull-left info">
				<p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
			<li class="active treeview menu-open">
				<ul class="treeview-menu">
					<li class="{{ $jabatan == 'admin' ? '' : 'hidden' }}">
                        <a href="{{ route('user_home') }}"><i class="fa fa-users"></i> USER </a>
                    </li>
					<li class="{{ $jabatan == 'admin' ? '' : 'hidden' }}">
                        <a href="{{ route('lokasi_home') }}"><i class="fa fa-street-view"></i> LOKASI </a>
                    </li>
                    <li class="{{ $jabatan == 'admin' ? '' : 'hidden' }}">
                        <a href="{{ route('barang_home') }}"><i class="fa fa-archive"></i> BARANG </a>
                    </li>
					<li class="{{ $jabatan == 'admin' ? '' : 'hidden' }}">
                        <a href="{{route('pemasaran_home') }}"><i class="fa fa-map"></i> PEMASARAN </a>
                    </li>
					<li class="{{ $jabatan == 'sales' ? '' : 'hidden' }}">
                        <a href="{{route('laporan_home')}}"><i class="fa fa-file-text"></i> LAPORAN </a>
                    </li>
                    <li class="{{ $jabatan == 'sales' ? '' : 'hidden' }}">
                        <a href="{{route('pemesanan_home')}}"><i class="fa fa-file-text"></i> PEMESANAN </a>
                    </li>
                    <li class="{{ $jabatan == 'admin' ? '' : 'hidden' }}">
                        <a href="{{route('lapar_home')}}"><i class="fa fa-file"></i> LAPORAN PEMASARAN</a>
                    </li>
                    <li class="{{ $jabatan == 'admin' ? '' : 'hidden' }}">
                        <a href="{{route('lapem_home')}}"><i class="fa fa-file-text"></i> LAPORAN PEMESANAN</a>
                    </li>
                    <li class="{{ $jabatan == 'kurir' ? '' : 'hidden' }}">
                        <a href="{{route('lapkur_home')}}"><i class="fa fa-file-text"></i> LAPORAN KURIR</a>
                    </li>
				</ul>
            </li>
        </ul>
    </section>
<!-- /.sidebar -->
</aside>