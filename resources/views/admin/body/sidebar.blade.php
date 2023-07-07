<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('adminbackend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

            <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Tableau de bord</div>
            </a>
        </li>

@if(Auth::user()->can('menu.marque'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-category'></i>
                </div>
                <div class="menu-title">Gestion Marque</div>
            </a>
            <ul>
                @if(Auth::user()->can('liste.marque'))
                <li> <a href="{{ route('all.brand') }}"><i class="bx bx-right-arrow-alt"></i>Toutes les  Marques</a>
                </li>
                @endif
                @if(Auth::user()->can('ajout.marque'))
                <li> <a href="{{ route('add.brand') }}"><i class="bx bx-right-arrow-alt"></i>Ajout Marque </a>
                </li>
                @endif

            </ul>
        </li>
@endif

@if(Auth::user()->can('menu.catégorie'))

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Gestion Catégorie</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.category') }}"><i class="bx bx-right-arrow-alt"></i> Toutes les Catégories</a>
                </li>
                <li> <a href="{{ route('add.category') }}"><i class="bx bx-right-arrow-alt"></i>Ajout Catégorie</a>
                </li>

            </ul>
        </li>
@endif


@if(Auth::user()->can('menu.souscatégorie'))

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Gestion S/Catégorie</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.subcategory') }}"><i class="bx bx-right-arrow-alt"></i> Les SousCatégories</a>
                </li>
                <li> <a href="{{ route('add.subcategory') }}"><i class="bx bx-right-arrow-alt"></i>Ajout SousCatégorie</a>
                </li>

            </ul>
        </li>
@endif


@if(Auth::user()->can('menu.article'))

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Gestion Article</div>
            </a>
            <ul>
                @if(Auth::user()->can('liste.article'))
                <li> <a href="{{ route('all.product') }}"><i class="bx bx-right-arrow-alt"></i>Tous les Articles</a>
                </li>
                @endif
                @if(Auth::user()->can('ajout.article'))
                <li> <a href="{{ route('add.product') }}"><i class="bx bx-right-arrow-alt"></i>Ajout <Article></Article></a>
                </li>
                @endif

            </ul>
        </li>
@endif

@if(Auth::user()->can('menu.glissiere'))

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Gestion Glissière</div>
            </a>
            <ul>
@if(Auth::user()->can('liste.glissiere'))
                <li> <a href="{{ route('all.slider') }}"><i class="bx bx-right-arrow-alt"></i>Toutes les Glissières</a>
                </li>
                @endif

@if(Auth::user()->can('ajout.glissiere'))
                <li> <a href="{{ route('add.slider') }}"><i class="bx bx-right-arrow-alt"></i>Ajout Glissière</a>
                </li>
                @endif

            </ul>
        </li>
@endif

@if(Auth::user()->can('menu.pubs'))

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Gestion Publicité </div>
            </a>
            <ul>
                <li> <a href="{{ route('all.banner') }}"><i class="bx bx-right-arrow-alt"></i>Toutes les Pubs</a>
                </li>
                <li> <a href="{{ route('add.banner') }}"><i class="bx bx-right-arrow-alt"></i>Ajout Pub</a>
                </li>

            </ul>
        </li>
@endif

@if(Auth::user()->can('menu.coupon'))


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Gestion Coupons </div>
            </a>
            <ul>
                <li> <a href="{{ route('all.coupon') }}"><i class="bx bx-right-arrow-alt"></i>Coupons</a>
                </li>
                <li> <a href="{{ route('add.coupon') }}"><i class="bx bx-right-arrow-alt"></i>Ajout Coupon</a>
                </li>

            </ul>
        </li>
@endif

@if(Auth::user()->can('menu.destination'))

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Gestion Destinations </div>
            </a>
            <ul>
                <li> <a href="{{ route('all.region') }}"><i class="bx bx-right-arrow-alt"></i>Regions</a>
                </li>
                <li> <a href="{{ route('all.ville') }}"><i class="bx bx-right-arrow-alt"></i>Villes</a>
                </li>
                <li> <a href="{{ route('all.quartier') }}"><i class="bx bx-right-arrow-alt"></i>Quartiers</a>
                </li>

            </ul>
        </li>
@endif

@if(Auth::user()->can('menu.vendeur'))

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-category'></i>
                </div>
                <div class="menu-title">Gestion Vendeurs </div>
            </a>
            <ul>
                <li> <a href="{{ route('inactive.vendor') }}"><i class="bx bx-right-arrow-alt"></i>Vendeurs inactifs</a>
                </li>
                <li> <a href="{{ route('active.vendor') }}"><i class="bx bx-right-arrow-alt"></i>Vendeur actifs</a>
                </li>

            </ul>
        </li>
@endif

@if(Auth::user()->can('menu.commande'))

        <li class="menu-label">Commandes</li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-category'></i>
                </div>
                <div class="menu-title">Gestion Commandes </div>
            </a>
            <ul>
                <li> <a href="{{ route('pending.order') }}"><i class="bx bx-right-arrow-alt"></i>En attente</a>
                </li>

                <li> <a href="{{ route('admin.confirmed.order') }}"><i class="bx bx-right-arrow-alt"></i>Confirmées </a>
                </li>

                <li> <a href="{{ route('admin.processing.order') }}"><i class="bx bx-right-arrow-alt"></i>En Process</a>
                </li>
                <li> <a href="{{ route('admin.delivered.order') }}"><i class="bx bx-right-arrow-alt"></i>Lvrées</a>
                </li>

            </ul>
        </li>
@endif

@if(Auth::user()->can('menu.renvoi'))

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-category'></i>
                </div>
                <div class="menu-title">Gestion Renvois </div>
            </a>
            <ul>
                <li> <a href="{{ route('return.request') }}"><i class="bx bx-right-arrow-alt"></i>Requêtes</a>
                </li>
                <li> <a href="{{ route('complete.return.request') }}"><i class="bx bx-right-arrow-alt"></i>Appouvées</a>
                </li>
            </ul>
        </li>
@endif

@if(Auth::user()->can('menu.rapport'))

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-category'></i>
                </div>
                <div class="menu-title"> Rapport Activité </div>
            </a>
            <ul>
                <li> <a href="{{ route('report.view') }}"><i class="bx bx-right-arrow-alt"></i>Revue</a>
                </li>

                <li> <a href="{{ route('order.by.user') }}"><i class="bx bx-right-arrow-alt"></i> Par Utilisateur</a>
                </li>

            </ul>
        </li>
@endif

@if(Auth::user()->can('menu.utilisateur'))


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Gestion Utilisateurs</div>
            </a>
            <ul>
                <li> <a href="{{ route('all-user') }}"><i class="bx bx-right-arrow-alt"></i>Clients</a>
                </li>

                    <li> <a href="{{ route('all-vendor') }}"><i class="bx bx-right-arrow-alt"></i>Vendeurs</a>
                </li>


            </ul>
        </li>
@endif

@if(Auth::user()->can('menu.blog'))


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>

                <div class="menu-title">Gestion Blogs</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.blog.category') }}"><i class="bx bx-right-arrow-alt"></i>Catégories</a>
                </li>

                    <li> <a href="{{ route('admin.blog.post') }}"><i class="bx bx-right-arrow-alt"></i>Posts</a>
                </li>


            </ul>
        </li>
@endif

@if(Auth::user()->can('menu.avis'))

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>

                <div class="menu-title">Gestion des Avis</div>
            </a>
            <ul>
                <li> <a href="{{ route('pending.review') }}"><i class="bx bx-right-arrow-alt"></i>En attente </a>
                </li>

                    <li> <a href="{{ route('publish.review') }}"><i class="bx bx-right-arrow-alt"></i>Publiés</a>
                </li>


            </ul>
        </li>
@endif

@if(Auth::user()->can('menu.paramètre'))

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>

                <div class="menu-title">Paramètres</div>
            </a>
            <ul>
                <li> <a href="{{ route('site.setting') }}"><i class="bx bx-right-arrow-alt"></i>Du Site </a>
                </li>

                <li> <a href="{{ route('seo.setting') }}"><i class="bx bx-right-arrow-alt"></i>SEO</a>
                </li>


            </ul>
        </li>
@endif


@if(Auth::user()->can('menu.stock'))

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>

                <div class="menu-title">Gestion du Stock</div>
            </a>
            <ul>
                <li> <a href="{{ route('product.stock') }}"><i class="bx bx-right-arrow-alt"></i>Articles en Stock </a>
                </li>

            </ul>
        </li>
@endif

@if(Auth::user()->can('menu.permission.role'))


        <li class="menu-label">Gestion Accès</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Rôles & Accès</div>
					</a>
					<ul>
						<li> <a href="{{ route('all.permission') }}"><i class="bx bx-right-arrow-alt"></i> Les Permissions</a>
						</li>
						<li> <a href="{{ route('all.roles') }}"><i class="bx bx-right-arrow-alt"></i>Les Rôles</a>
						</li>
                        <li> <a href="{{ route('add.roles.permission') }}"><i class="bx bx-right-arrow-alt"></i>Attributions</a>
						</li>

						<li> <a href="{{ route('all.roles.permission') }}"><i class="bx bx-right-arrow-alt"></i>Les Accès</a>
						</li>

					</ul>
				</li>
@endif


@if(Auth::user()->can('menu.admin.utilisateur'))

                <li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-line-chart"></i>
						</div>
						<div class="menu-title">Gestion des Admins  </div>
					</a>
					<ul>
						<li> <a href="{{ route('all.admin') }}"><i class="bx bx-right-arrow-alt"></i> Admins</a>
						</li>
						<li> <a href="{{ route('add.admin') }}"><i class="bx bx-right-arrow-alt"></i>Ajout Admin</a>
						</li>


					</ul>
				</li>

@endif







        <li>
            <a href=" " target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
