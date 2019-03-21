<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
        <ul class="nav menu">
			<li class="parent"><a href="<?=base_url('admin/dashoard')?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-calculator">&nbsp;</em> Nilai Siswa <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
					<li><a class="" href="<?=base_url('admin/nilaisiswaipa')?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Jurusan Ipa
					</a></li>
					<li><a class="" href="<?=base_url('admin/nilaisiswaips')?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Jurusan Ips
					</a></li>
				</ul>
			</li>
			<li><a href="<?=base_url('admin/statusspp')?>"><em class="fa fa-money">&nbsp;</em> Status Pembayaran Spp</a></li>
            <li><a href=""><em class="fa fa-exclamation">&nbsp;</em>Pengumuman</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-calculator">&nbsp;</em> Tambah data <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-2">
					<li><a class="" href="<?=base_url('admin/tambahguru')?>">
						<span class="fa fa-arrow-right">&nbsp;</span>Tambah Data Guru
					</a></li>
					<li><a class="" href="<?=base_url('admin/tambahsiswa')?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Tambah Data Siswa
					</a></li>
				</ul>
			</li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        </ul>
        </div><!--/.sidebar-->
		