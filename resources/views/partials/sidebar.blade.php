@inject('request', 'Illuminate\Http\Request')

<div class="sidebar" data-color="blue">
	<!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"  -->
	<div class="sidebar-wrapper" id="sidebar-wrapper">
		<ul class="nav">
			<li>
				<router-link :to="{ name: 'home' }">
					<i class="now-ui-icons ui-2_settings-90"></i>
					<span>@lang('quickadmin.qa_dashboard')</span>
				</router-link>
			</li>
			<li v-if="$can('gestion_des_admin_access')">
				<a>
					<i class="now-ui-icons loader_gear"></i>
					<span>@lang('quickadmin.gestion-des-admins.title')</span>
				</a>
				<ul class="nav mt-1 ml-3">
					<li v-if="$can('permission_access')">
						<router-link :to="{ name: 'permissions.index' }">
							<i class="now-ui-icons ui-2_settings-90"></i>
							<span>@lang('quickadmin.permissions.title')</span>
						</router-link>
					</li>
					<li v-if="$can('role_access')">
						<router-link :to="{ name: 'roles.index' }">
							<i class="now-ui-icons users_circle-08"></i>
							<span>@lang('quickadmin.roles.title')</span>
						</router-link>
					</li>
					<li v-if="$can('user_access')">
						<router-link :to="{ name: 'users.index' }">
							<i class="now-ui-icons users_single-02"></i>
							<span>@lang('quickadmin.users.title')</span>
						</router-link>
					</li>
				</ul>
			</li>
			<li v-if="$can('client_access')">
				<router-link :to="{ name: 'clients.index' }">
					<i class="now-ui-icons business_badge"></i>
					<span>@lang('quickadmin.client.title')</span>
				</router-link>
			</li>
			<li v-if="$can('rendezvous_access')">
				<router-link :to="{ name: 'rendezvouses.index' }">
					<i class="now-ui-icons ui-2_time-alarm"></i>
					<span>@lang('quickadmin.rendezvous.title')</span>
				</router-link>
			</li>

			<li>
				<router-link :to="{ name: 'auth.change_password' }">
					<i class="now-ui-icons objects_key-25"></i>
					<span>@lang('quickadmin.qa_change_password')</span>
				</router-link>
			</li>

			<li>
				<a href="#logout" onclick="$('#logout').submit();">
					<i class="now-ui-icons arrows-1_minimal-left"></i>
					<span>@lang('quickadmin.qa_logout')</span>
				</a>
			</li>
		</ul>
	</div>
</div>

<!-- Left side column. contains the sidebar -->
{{-- <aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<ul class="sidebar-menu">
			<li>
				<a href="{{ url('/') }}">
<i class="now-ui-icons loader_gear"></i>
<span>@lang('quickadmin.qa_dashboard')</span>
</a>
</li>

<li class="treeview" v-if="$can('gestion_des_admin_access')">
	<a href="#">
		<i class="now-ui-icons loader_gear"></i>
		<span>@lang('quickadmin.gestion-des-admins.title')</span>
		<span class="pull-right-container">
			<i class="now-ui-icons loader_gear-left pull-right"></i>
		</span>
	</a>
	<ul class="treeview-menu">
		<li v-if="$can('permission_access')">
			<router-link :to="{ name: 'permissions.index' }">
				<i class="now-ui-icons loader_gear"></i>
				<span>@lang('quickadmin.permissions.title')</span>
			</router-link>
		</li>
		<li v-if="$can('role_access')">
			<router-link :to="{ name: 'roles.index' }">
				<i class="now-ui-icons loader_gear"></i>
				<span>@lang('quickadmin.roles.title')</span>
			</router-link>
		</li>
		<li v-if="$can('user_access')">
			<router-link :to="{ name: 'users.index' }">
				<i class="now-ui-icons loader_gear"></i>
				<span>@lang('quickadmin.users.title')</span>
			</router-link>
		</li>
	</ul>
</li>
<li v-if="$can('client_access')">
	<router-link :to="{ name: 'clients.index' }">
		<i class="now-ui-icons loader_gear-plus"></i>
		<span>@lang('quickadmin.client.title')</span>
	</router-link>
</li>
<li v-if="$can('rendezvous_access')">
	<router-link :to="{ name: 'rendezvouses.index' }">
		<i class="now-ui-icons loader_gear"></i>
		<span>@lang('quickadmin.rendezvous.title')</span>
	</router-link>
</li>

<li>
	<router-link :to="{ name: 'auth.change_password' }">
		<i class="now-ui-icons loader_gear"></i>
		<span>@lang('quickadmin.qa_change_password')</span>
	</router-link>
</li>

<li>
	<a href="#logout" onclick="$('#logout').submit();">
		<i class="now-ui-icons loader_gear-left"></i>
		<span>@lang('quickadmin.qa_logout')</span>
	</a>
</li>
</ul>
</section>
</aside> --}}