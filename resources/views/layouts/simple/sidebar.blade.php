<header class="main-nav">
   <nav>
      <div class="main-navbar">
         <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
         <div id="mainnav">
            <ul class="nav-menu custom-scrollbar">
               <li class="back-btn">
                  <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
               </li>
               <li class="dropdown">
                  <a class="nav-link menu-title {{request()->route()->getPrefix() == '/dashboard' ? 'active' : '' }}" href="#"><i data-feather="home"></i><span>Dashboard</span>
                     <div class="according-menu"><i class="fa fa-angle-double-{{request()->route()->getPrefix() == '/dashboard' ? 'down' : 'right' }}"></i></div>
                  </a>
                  <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == 'd' ? 'block;' : 'none' }}">
                     <li><a href="{{route('index')}}" class="{{ Route::currentRouteName()=='index' ? 'active' : '' }}">Business</a></li>
                     <li><a href="{{route('dashboard-02')}}" class="{{ Route::currentRouteName()=='dashboard-02' ? 'active' : '' }}">Helpdesk</a></li>
                     <li><a href="{{route('dashboard-03')}}" class="{{ Route::currentRouteName()=='dashboard-03' ? 'active' : '' }}">Social</a></li>
                     <li><a href="{{route('dashboard-04')}}" class="{{ Route::currentRouteName()=='dashboard-04' ? 'active' : '' }}">Enterprise</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a class="nav-link menu-title {{request()->route()->getPrefix() == '/dashboard' ? 'active' : '' }}" href="#"><i data-feather="users"></i></i><span>Staff</span>
                     <div class="according-menu"><i class="fa fa-angle-double-{{request()->route()->getPrefix() == '/dashboard' ? 'down' : 'right' }}"></i></div>
                  </a>
                  <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == 's' ? 'block;' : 'none' }}">
                     <li>
                        <a href="{{route('all-staff')}}" class="{{ Route::currentRouteName()=='all-staff' ?'active' : '' }}">All Staff</a>
                     </li>
                     <li>
                        <a href="{{route('add-staff')}}" class="{{ Route::currentRouteName()=='add-staff' ? 'active' : '' }}">Add Staff</a>
                     </li>
                     <li>
                        {{-- <a href="{{route('edit-profile')}}" class="{{ Route::currentRouteName()=='edit-profile' ? 'active' : '' }}">Users Edit</a> --}}
                     </li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a class="nav-link menu-title {{request()->route()->getPrefix() == '/widgets' ? 'active' : '' }}" href="#"><i data-feather="airplay"></i><span>Widgets</span>
                     <div class="according-menu"><i class="fa fa-angle-double-{{request()->route()->getPrefix() == '/widgets' ? 'down' : 'right' }}"></i></div>
                  </a>
                  <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/widgets' ? 'block;' : 'none' }}">
                     <li><a href="{{route('general-widget')}}" class="{{ Route::currentRouteName()=='general-widget' ? 'active' : '' }}">General</a></li>
                     <li><a href="{{route('chart-widget')}}" class="{{ Route::currentRouteName()=='chart-widget' ? 'active' : '' }}">Chart</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a class="nav-link menu-title {{request()->route()->getPrefix() == '/ui-kits' ? 'active' : '' }}" href="#"><i data-feather="box"></i><span>Ui Kits</span>
                     <div class="according-menu"><i class="fa fa-angle-double-{{request()->route()->getPrefix() == '/ui-kits' ? 'down' : 'right' }}"></i></div>
                  </a>
                  <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/ui-kits' ? 'block;' : 'none' }}">
                     <li><a href="{{route('state-color')}}" class="{{ Route::currentRouteName()=='state-color' ? 'active' : '' }}">State color</a></li>
                     <li><a href="{{route('typography')}}" class="{{ Route::currentRouteName()=='typography' ? 'active' : '' }}">Typography</a></li>
                     <li><a href="{{route('avatars')}}" class="{{ Route::currentRouteName()=='avatars' ? 'active' : '' }}">Avatars</a></li>
                     <li><a href="{{route('helper-classes')}}" class="{{ Route::currentRouteName()=='helper-classes' ? 'active' : '' }}">helper classes</a></li>
                     <li><a href="{{route('grid')}}" class="{{ Route::currentRouteName()=='grid' ? 'active' : '' }}">Grid</a></li>
                     <li><a href="{{route('tag-pills')}}" class="{{ Route::currentRouteName()=='tag-pills' ? 'active' : '' }}">Tag & pills</a></li>
                     <li><a href="{{route('progress-bar')}}" class="{{ Route::currentRouteName()=='progress-bar' ? 'active' : '' }}">Progress</a></li>
                     <li><a href="{{route('modal')}}" class="{{ Route::currentRouteName()=='modal' ? 'active' : '' }}">Modal</a></li>
                     <li><a href="{{route('alert')}}" class="{{ Route::currentRouteName()=='alert' ? 'active' : '' }}">Alert</a></li>
                     <li><a href="{{route('popover')}}" class="{{ Route::currentRouteName()=='popover' ? 'active' : '' }}">Popover</a></li>
                     <li><a href="{{route('tooltip')}}" class="{{ Route::currentRouteName()=='tooltip' ? 'active' : '' }}">Tooltip</a></li>
                     <li><a href="{{route('loader')}}" class="{{ Route::currentRouteName()=='loader' ? 'active' : '' }}">Spinners</a></li>
                     <li><a href="{{route('dropdown')}}" class="{{ Route::currentRouteName()=='dropdown' ? 'active' : '' }}">Dropdown</a></li>
                     <li><a href="{{route('accordion')}}" class="{{ Route::currentRouteName()=='accordion' ? 'active' : '' }}">Accordion</a></li>
                     <li>
                        <a class="submenu-title {{ in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : '' }}" href="#">Tabs<div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'down' : 'right' }}"></i></div></a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none' }};">
                           <li><a href="{{route('tab-bootstrap')}}" class="{{ Route::currentRouteName()=='tab-bootstrap' ? 'active' : '' }}">Bootstrap Tabs</a></li>
                           <li><a href="{{route('tab-material')}}" class="{{ Route::currentRouteName()=='tab-material' ? 'active' : '' }}">Line Tabs</a></li>
                        </ul>
                     </li>
                     <li><a href="{{route('navs')}}" class="{{ Route::currentRouteName()=='navs' ? 'active' : '' }}">Navs</a></li>
                     <li><a href="{{route('box-shadow')}}" class="{{ Route::currentRouteName()=='box-shadow' ? 'active' : '' }}">Shadow</a></li>
                     <li><a href="{{route('list')}}" class="{{ Route::currentRouteName()=='list' ? 'active' : '' }}">Lists</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a class="nav-link menu-title {{request()->route()->getPrefix() == '/bonus-ui' ? 'active' : '' }}" href="#"><i data-feather="folder-plus"></i><span>Bonus Ui</span><span class="badge badge-success">Hot</span><div class="according-menu"><i class="fa fa-angle-double-{{request()->route()->getPrefix() == '/bonus-ui' ? 'down' : 'right' }}"></i></div></a>
                  <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/bonus-ui' ? 'block;' : 'none' }}">
                     <li><a href="{{route('scrollable')}}" class="{{ Route::currentRouteName()=='scrollable' ? 'active' : '' }}">Scrollable</a></li>
                     <li><a href="{{route('tree')}}" class="{{ Route::currentRouteName()=='tree' ? 'active' : '' }}">Tree view</a></li>
                     <li><a href="{{route('bootstrap-notify')}}" class="{{ Route::currentRouteName()=='bootstrap-notify' ? 'active' : '' }}">Bootstrap Notify</a></li>
                     <li><a href="{{route('rating')}}" class="{{ Route::currentRouteName()=='rating' ? 'active' : '' }}">Rating</a></li>
                     <li><a href="{{route('dropzone')}}" class="{{ Route::currentRouteName()=='dropzone' ? 'active' : '' }}">dropzone</a></li>
                     <li><a href="{{route('tour')}}" class="{{ Route::currentRouteName()=='tour' ? 'active' : '' }}">Tour</a></li>
                     <li><a href="{{route('sweet-alert2')}}" class="{{ Route::currentRouteName()=='sweet-alert2' ? 'active' : '' }}">SweetAlert2</a></li>
                     <li><a href="{{route('modal-animated')}}" class="{{ Route::currentRouteName()=='modal-animated' ? 'active' : '' }}">Animated Modal</a></li>
                     <li><a href="{{route('owl-carousel')}}" class="{{ Route::currentRouteName()=='owl-carousel' ? 'active' : '' }}">Owl Carousel</a></li>
                     <li><a href="{{route('ribbons')}}" class="{{ Route::currentRouteName()=='ribbons' ? 'active' : '' }}">Ribbons</a></li>
                     <li><a href="{{route('pagination')}}" class="{{ Route::currentRouteName()=='pagination' ? 'active' : '' }}">Pagination</a></li>
                     <li><a href="{{route('steps')}}" class="{{ Route::currentRouteName()=='steps' ? 'active' : '' }}">Steps</a></li>
                     <li><a href="{{route('breadcrumb')}}" class="{{ Route::currentRouteName()=='breadcrumb' ? 'active' : '' }}">Breadcrumb</a></li>
                     <li><a href="{{route('range-slider')}}" class="{{ Route::currentRouteName()=='range-slider' ? 'active' : '' }}">Range Slider</a></li> 
                     <li><a href="{{route('image-cropper')}}" class="{{ Route::currentRouteName()=='image-cropper' ? 'active' : '' }}">Image cropper</a></li>
                     <li><a href="{{route('sticky')}}" class="{{ Route::currentRouteName()=='sticky' ? 'active' : '' }}">Sticky</a></li>
                     <li><a href="{{route('basic-card')}}" class="{{ Route::currentRouteName()=='basic-card' ? 'active' : '' }}">Basic Card</a></li>
                     <li><a href="{{route('creative-card')}}" class="{{ Route::currentRouteName()=='creative-card' ? 'active' : '' }}">Creative Card</a></li>
                     <li><a href="{{route('tabbed-card')}}" class="{{ Route::currentRouteName()=='tabbed-card' ? 'active' : '' }}">Tabbed Card</a></li>
                     <li><a href="{{route('dragable-card')}}" class="{{ Route::currentRouteName()=='dragable-card' ? 'active' : '' }}">Draggable Card</a></li>
                     <li>
                        <a class="submenu-title {{ in_array(Route::currentRouteName(), ['timeline-v-1','timeline-v-2', 'timeline-small']) ? 'active' : '' }}" href="#">Timeline<div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['timeline-v-1','timeline-v-2', 'timeline-small']) ? 'down' : 'right' }}"></i></div></a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['timeline-v-1','timeline-v-2', 'timeline-small']) ? 'block' : 'none' }};">
                           <li><a href="{{route('timeline-v-1')}}" class="{{ Route::currentRouteName()=='timeline-v-1' ? 'active' : '' }}">Timeline 1</a></li>
                           <li><a href="{{route('timeline-v-2')}}" class="{{ Route::currentRouteName()=='timeline-v-2' ? 'active' : '' }}">Timeline 2</a></li>
                           <li><a href="{{route('timeline-small')}}" class="{{ Route::currentRouteName()=='timeline-small' ? 'active' : '' }}">Timeline 3</a></li>
                        </ul>
                     </li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a class="nav-link menu-title {{request()->route()->getPrefix() == '/page-layout' ? 'active' : '' }}" href="#"><i data-feather="airplay"></i><span>Page layout</span>
                     <div class="according-menu"><i class="fa fa-angle-double-{{request()->route()->getPrefix() == '/page-layout' ? 'down' : 'right' }}"></i></div>
                  </a>
                  <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/page-layout' ? 'block;' : 'none' }}">
                     <li><a href="{{route('pages-layout-light')}}" class="{{ Route::currentRouteName()=='pages-layout-light' ? 'active' : '' }}">Light Layout</a></li>
                     <li><a href="{{route('pages-layout-dark')}}" class="{{ Route::currentRouteName()=='pages-layout-dark' ? 'active' : '' }}">Dark Layout</a></li>
                     <li><a href="{{route('pages-layout-box')}}" class="{{ Route::currentRouteName()=='pages-layout-box' ? 'active' : '' }}">Box Layout</a></li>
                     <li><a href="{{route('pages-layout-rtl')}}" class="{{ Route::currentRouteName()=='pages-layout-rtl' ? 'active' : '' }}">RTL Layout</a></li>
                     <li><a href="{{route('pages-compact-layout')}}" class="{{ Route::currentRouteName()=='pages-compact-layout' ? 'active' : '' }}">Compact Layout</a></li>
                     <li><a href="{{route('pages-vertical-layout')}}" class="{{ Route::currentRouteName()=='pages-vertical-layout' ? 'active' : '' }}">Vertical Layout</a></li>
                     <li><a href="{{route('pages-dark-rtl-layout')}}" class="{{ Route::currentRouteName()=='pages-dark-rtl-layout' ? 'active' : '' }}">Dark & RTL Layout</a></li>
                     <li><a href="{{route('pages-vertical-rtl-layout')}}" class="{{ Route::currentRouteName()=='pages-vertical-rtl-layout' ? 'active' : '' }}">Vertical & RTL Layout</a></li>
                     <li><a href="{{route('pages-compact-rtl-layout')}}" class="{{ Route::currentRouteName()=='pages-compact-rtl-layout' ? 'active' : '' }}">Compact & RTL Layout</a></li>
                     <li><a href="{{route('pages-dark-box-layout')}}" class="{{ Route::currentRouteName()=='pages-dark-box-layout' ? 'active' : '' }}">Dark & box Layout</a></li>
                     <li><a href="{{route('pages-vertical-box-layout')}}" class="{{ Route::currentRouteName()=='pages-vertical-box-layout' ? 'active' : '' }}">Vetical Box Layout</a></li>
                     <li><a href="{{route('pages-compact-dark-layout')}}" class="{{ Route::currentRouteName()=='pages-compact-dark-layout' ? 'active' : '' }}">Compact Dark Layout</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a class="nav-link menu-title {{request()->route()->getPrefix() == '/builders' ? 'active' : '' }}" href="#"><i data-feather="edit-3"></i><span>Builders</span>
                      <div class="according-menu"><i class="fa fa-angle-double-{{request()->route()->getPrefix() == '/builders' ? 'down' : 'right' }}"></i></div>
                  </a>
                  <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/builders' ? 'block;' : 'none' }}">
                     <li><a href="{{route('form-builder-1')}}" class="{{ Route::currentRouteName()=='form-builder-1' ? 'active' : '' }}"> Form Builder 1</a></li>
                     <li><a href="{{route('form-builder-2')}}" class="{{ Route::currentRouteName()=='form-builder-2' ? 'active' : '' }}"> Form Builder 2</a></li>
                     <li><a href="{{route('pagebuild')}}" class="{{ Route::currentRouteName()=='pagebuild' ? 'active' : '' }}">Page Builder</a></li>
                     <li><a href="{{route('button-builder')}}" class="{{ Route::currentRouteName()=='button-builder' ? 'active' : '' }}">Button Builder</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a class="nav-link menu-title {{request()->route()->getPrefix() == '/animation' ? 'active' : '' }}" href="#">  <i data-feather="cloud-drizzle"></i><span>Animation</span>
                     <div class="according-menu"><i class="fa fa-angle-double-{{request()->route()->getPrefix() == '/animation' ? 'down' : 'right' }}"></i></div>
                  </a>
                  <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/animation' ? 'block;' : 'none' }}">
                     <li><a href="{{route('animate')}}" class="{{ Route::currentRouteName()=='animate' ? 'active' : '' }}">Animate</a></li>
                     <li><a href="{{route('scroll-reval')}}" class="{{ Route::currentRouteName()=='scroll-reval' ? 'active' : '' }}">Scroll Reveal</a></li>
                     <li><a href="{{route('aos')}}" class="{{ Route::currentRouteName()=='aos' ? 'active' : '' }}">AOS animation</a></li>
                     <li><a href="{{route('tilt')}}" class="{{ Route::currentRouteName()=='tilt' ? 'active' : '' }}">Tilt Animation</a></li>
                     <li><a href="{{route('wow')}}" class="{{ Route::currentRouteName()=='wow' ? 'active' : '' }}">Wow Animation</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a class="nav-link menu-title {{request()->route()->getPrefix() == '/icons' ? 'active' : '' }}" href="#">
                        <i data-feather="command"></i><span>Icons</span>
                        <div class="according-menu"><i class="fa fa-angle-double-{{request()->route()->getPrefix() == '/icons' ? 'down' : 'right' }}"></i></div>
                  </a>
                  <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/icons' ? 'block;' : 'none' }}">
                     <li><a href="{{route('flag-icon')}}" class="{{ Route::currentRouteName()=='flag-icon' ? 'active' : '' }}">Flag icon</a></li>
                     <li><a href="{{route('font-awesome')}}" class="{{ Route::currentRouteName()=='font-awesome' ? 'active' : '' }}">Fontawesome Icon</a></li>
                     <li><a href="{{route('ico-icon')}}" class="{{ Route::currentRouteName()=='ico-icon' ? 'active' : '' }}">Ico Icon</a></li>
                     <li><a href="{{route('themify-icon')}}" class="{{ Route::currentRouteName()=='themify-icon' ? 'active' : '' }}">Thimify Icon</a></li>
                     <li><a href="{{route('feather-icon')}}" class="{{ Route::currentRouteName()=='feather-icon' ? 'active' : '' }}">Feather icon</a></li>
                     <li><a href="{{route('whether-icon')}}" class="{{ Route::currentRouteName()=='whether-icon' ? 'active' : '' }}">Whether Icon</a></li>
                     <li><a href="{{route('simple-line-icon')}}" class="{{ Route::currentRouteName()=='simple-line-icon' ? 'active' : '' }}">Simple line Icon</a></li>
                     <li><a href="{{route('material-design-icon')}}" class="{{ Route::currentRouteName()=='material-design-icon' ? 'active' : '' }}">Material Design Icon</a></li>
                     <li><a href="{{route('pe7-icon')}}" class="{{ Route::currentRouteName()=='pe7-icon' ? 'active' : '' }}">pe7 icon</a></li>
                     <li><a href="{{route('typicons-icon')}}" class="{{ Route::currentRouteName()=='typicons-icon' ? 'active' : '' }}">Typicons icon</a></li>
                     <li><a href="{{route('ionic-icon')}}" class="{{ Route::currentRouteName()=='ionic-icon' ? 'active' : '' }}">Ionic icon</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a class="nav-link menu-title {{request()->route()->getPrefix() == '/buttons' ? 'active' : '' }}" href="#"><i data-feather="cloud"></i><span>Buttons</span>
                        <div class="according-menu"><i class="fa fa-angle-double-{{request()->route()->getPrefix() == '/buttons' ? 'down' : 'right' }}"></i></div>
                  </a>
                  <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/buttons' ? 'block;' : 'none' }}">
                     <li><a href="{{route('buttons')}}" class="{{ Route::currentRouteName()=='buttons' ? 'active' : '' }}">Default Style</a></li>
                     <li><a href="{{route('buttons-flat')}}" class="{{ Route::currentRouteName()=='buttons-flat' ? 'active' : '' }}">Flat Style</a></li>
                     <li><a href="{{route('buttons-edge')}}" class="{{ Route::currentRouteName()=='buttons-edge' ? 'active' : '' }}">Edge Style</a></li>
                     <li><a href="{{route('raised-button')}}" class="{{ Route::currentRouteName()=='raised-button' ? 'active' : '' }}">Raised Style</a></li>
                     <li><a href="{{route('button-group')}}" class="{{ Route::currentRouteName()=='button-group' ? 'active' : '' }}">Button Group</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a class="nav-link menu-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="#"><i data-feather="file-text"></i><span>Forms</span>
                     <div class="according-menu"><i class="fa fa-angle-double-{{request()->route()->getPrefix() == '/forms' ? 'down' : 'right' }}"></i></div>
                  </a>
                  <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none' }}">
                     <li>
                        <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation','base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="#">Form Controls
                           <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['form-validation','base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['form-validation','base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'block' : 'none' }};">
                           <li><a href="{{route('form-validation')}}" class="{{ Route::currentRouteName()=='form-validation' ? 'active' : '' }}">Form Validation</a></li>
                           <li><a href="{{route('base-input')}}" class="{{ Route::currentRouteName()=='base-input' ? 'active' : '' }}">Base Inputs</a></li>
                           <li><a href="{{route('radio-checkbox-control')}}" class="{{ Route::currentRouteName()=='radio-checkbox-control' ? 'active' : '' }}">Checkbox & Radio</a></li>
                           <li><a href="{{route('input-group')}}" class="{{ Route::currentRouteName()=='input-group' ? 'active' : '' }}">Input Groups</a></li>
                           <li><a href="{{route('megaoptions')}}" class="{{ Route::currentRouteName()=='megaoptions' ? 'active' : '' }}">Mega Options</a></li>
                        </ul>
                     </li>
                     <li>
                        <a class="submenu-title {{ in_array(Route::currentRouteName(), ['datepicker', 'time-picker', 'datetimepicker', 'daterangepicker', 'touchspin', 'select2', 'switch', 'switch', 'typeahead', 'clipboard']) ? 'active' : '' }}" href="#">Form Widgets
                              <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['datepicker', 'time-picker', 'datetimepicker', 'daterangepicker', 'touchspin', 'select2', 'switch', 'switch', 'typeahead', 'clipboard']) ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['datepicker', 'time-picker', 'datetimepicker', 'daterangepicker', 'touchspin', 'select2', 'switch', 'switch', 'typeahead', 'clipboard']) ? 'block' : 'none' }};">
                           <li><a href="{{route('datepicker')}}" class="{{ Route::currentRouteName()=='datepicker' ? 'active' : '' }}">Datepicker</a></li>
                           <li><a href="{{route('time-picker')}}" class="{{ Route::currentRouteName()=='time-picker' ? 'active' : '' }}">Timepicker</a></li>
                           <li><a href="{{route('datetimepicker')}}" class="{{ Route::currentRouteName()=='datetimepicker' ? 'active' : '' }}">Datetimepicker</a></li>
                           <li><a href="{{route('touchspin')}}" class="{{ Route::currentRouteName()=='touchspin' ? 'active' : '' }}">Touchspin</a></li>
                           <li><a href="{{route('select2')}}" class="{{ Route::currentRouteName()=='select2' ? 'active' : '' }}">Select2</a></li>
                           <li><a href="{{route('switch')}}" class="{{ Route::currentRouteName()=='switch' ? 'active' : '' }}">Switch</a></li>
                           <li><a href="{{route('typeahead')}}" class="{{ Route::currentRouteName()=='typeahead' ? 'active' : '' }}">Typeahead</a></li>
                           <li><a href="{{route('clipboard')}}" class="{{ Route::currentRouteName()=='clipboard' ? 'active' : '' }}">Clipboard</a></li>
                        </ul>
                     </li>
                     <li>
                        <a class="submenu-title {{ in_array(Route::currentRouteName(), ['default-form', 'form-wizard', 'form-wizard-two', 'form-wizard-three', 'form-wizard-four']) ? 'active' : '' }}" href="#">Form layout
                              <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['default-form', 'form-wizard', 'form-wizard-two', 'form-wizard-three', 'form-wizard-four']) ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['default-form', 'form-wizard', 'form-wizard-two', 'form-wizard-three', 'form-wizard-four']) ? 'block' : 'none' }};">
                           <li><a href="{{route('default-form')}}" class="{{ Route::currentRouteName()=='default-form' ? 'active' : '' }}">Default Forms</a></li>
                           <li><a href="{{route('form-wizard')}}" class="{{ Route::currentRouteName()=='form-wizard' ? 'active' : '' }}">Form Wizard 1</a></li>
                           <li><a href="{{route('form-wizard-two')}}" class="{{ Route::currentRouteName()=='form-wizard-two' ? 'active' : '' }}">Form Wizard 2</a></li>
                           <li><a href="{{route('form-wizard-three')}}" class="{{ Route::currentRouteName()=='form-wizard-three' ? 'active' : '' }}">Form Wizard 3</a></li>
                           <li><a href="{{route('form-wizard-four')}}" class="{{ Route::currentRouteName()=='form-wizard-four' ? 'active' : '' }}">Form Wizard 4</a></li>
                        </ul>
                     </li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a class="nav-link menu-title {{request()->route()->getPrefix() == '/tables' ? 'active' : '' }}" href="#"><i data-feather="server"></i><span>Tables</span>
                     <div class="according-menu"><i class="fa fa-angle-double-{{request()->route()->getPrefix() == '/tables' ? 'down' : 'right' }}"></i></div>
                  </a>
                  <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/tables' ? 'block;' : 'none' }}">
                     <li>
                        <a class="submenu-title {{ in_array(Route::currentRouteName(), ['bootstrap-basic-table', 'bootstrap-sizing-table', 'bootstrap-border-table', 'bootstrap-styling-table', 'table-components']) ? 'active' : '' }}" href="#">Bootstrap Tables
                           <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['bootstrap-basic-table', 'bootstrap-sizing-table', 'bootstrap-border-table', 'bootstrap-styling-table', 'table-components']) ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['bootstrap-basic-table', 'bootstrap-sizing-table', 'bootstrap-border-table', 'bootstrap-styling-table', 'table-components']) ? 'block' : 'none' }};">
                           <li><a href="{{route('bootstrap-basic-table')}}" class="{{ Route::currentRouteName()=='bootstrap-basic-table' ? 'active' : '' }}">Basic Tables</a></li>
                           <li><a href="{{route('bootstrap-sizing-table')}}" class="{{ Route::currentRouteName()=='bootstrap-sizing-table' ? 'active' : '' }}">Sizing Tables</a></li>
                           <li><a href="{{route('bootstrap-border-table')}}" class="{{ Route::currentRouteName()=='bootstrap-border-table' ? 'active' : '' }}">Border Tables</a></li>
                           <li><a href="{{route('bootstrap-styling-table')}}" class="{{ Route::currentRouteName()=='bootstrap-styling-table' ? 'active' : '' }}">Styling Tables</a></li>
                           <li><a href="{{route('table-components')}}" class="{{ Route::currentRouteName()=='table-components' ? 'active' : '' }}">Table components</a></li>
                        </ul>
                     </li>
                     <li>
                        <a class="submenu-title {{ in_array(Route::currentRouteName(), ['datatable-basic-init', 'datatable-advance', 'datatable-styling', 'datatable-ajax', 'datatable-server-side', 'datatable-plugin', 'datatable-api', 'datatable-data-source']) ? 'active' : '' }}" href="#">Data Tables
                              <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['datatable-basic-init', 'datatable-advance', 'datatable-styling', 'datatable-ajax', 'datatable-server-side', 'datatable-plugin', 'datatable-api', 'datatable-data-source']) ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['datatable-basic-init', 'datatable-advance', 'datatable-styling', 'datatable-ajax', 'datatable-server-side', 'datatable-plugin', 'datatable-api', 'datatable-data-source']) ? 'block' : 'none' }};">
                           <li><a href="{{route('datatable-basic-init')}}" class="{{ Route::currentRouteName()=='datatable-basic-init' ? 'active' : '' }}">Basic Init</a></li>
                           <li><a href="{{route('datatable-advance')}}" class="{{ Route::currentRouteName()=='datatable-advance' ? 'active' : '' }}">Advance Init</a></li>
                           <li><a href="{{route('datatable-styling')}}" class="{{ Route::currentRouteName()=='datatable-styling' ? 'active' : '' }}">Styling</a></li>
                           <li><a href="{{route('datatable-ajax')}}" class="{{ Route::currentRouteName()=='datatable-ajax' ? 'active' : '' }}">AJAX</a></li>
                           <li><a href="{{route('datatable-server-side')}}" class="{{ Route::currentRouteName()=='datatable-server-side' ? 'active' : '' }}">Server Side</a></li>
                           <li><a href="{{route('datatable-plugin')}}" class="{{ Route::currentRouteName()=='datatable-plugin' ? 'active' : '' }}">Plug-in</a></li>
                           <li><a href="{{route('datatable-api')}}" class="{{ Route::currentRouteName()=='datatable-api' ? 'active' : '' }}">API</a></li>
                           <li><a href="{{route('datatable-data-source')}}" class="{{ Route::currentRouteName()=='datatable-data-source' ? 'active' : '' }}">Data Sources</a></li>
                        </ul>
                     </li>
                     <li>
                        <a class="submenu-title {{ in_array(Route::currentRouteName(), ['datatable-ext-autofill', 'datatable-ext-basic-button', 'datatable-ext-basic-button', 'datatable-ext-col-reorder', 'datatable-ext-fixed-header', 'datatable-ext-html-5-data-export', 'datatable-ext-key-table', 'datatable-ext-key-table', 'datatable-ext-responsive', 'datatable-ext-row-reorder', 'datatable-ext-scroller']) ? 'active' : '' }}" href="#">Ex. Data Tables
                              <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['datatable-ext-autofill', 'datatable-ext-basic-button', 'datatable-ext-basic-button', 'datatable-ext-col-reorder', 'datatable-ext-fixed-header', 'datatable-ext-html-5-data-export', 'datatable-ext-key-table', 'datatable-ext-key-table', 'datatable-ext-responsive', 'datatable-ext-row-reorder', 'datatable-ext-scroller']) ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['datatable-ext-autofill', 'datatable-ext-basic-button', 'datatable-ext-basic-button', 'datatable-ext-col-reorder', 'datatable-ext-fixed-header', 'datatable-ext-html-5-data-export', 'datatable-ext-key-table', 'datatable-ext-key-table', 'datatable-ext-responsive', 'datatable-ext-row-reorder', 'datatable-ext-scroller']) ? 'block' : 'none' }};">
                           <li><a href="{{route('datatable-ext-autofill')}}" class="{{ Route::currentRouteName()=='datatable-ext-autofill' ? 'active' : '' }}">Auto Fill</a></li>
                           <li><a href="{{route('datatable-ext-basic-button')}}" class="{{ Route::currentRouteName()=='datatable-ext-basic-button' ? 'active' : '' }}">Basic Button</a></li>
                           <li><a href="{{route('datatable-ext-col-reorder')}}" class="{{ Route::currentRouteName()=='datatable-ext-col-reorder' ? 'active' : '' }}">Column Reorder</a></li>
                           <li><a href="{{route('datatable-ext-fixed-header')}}" class="{{ Route::currentRouteName()=='datatable-ext-fixed-header' ? 'active' : '' }}">Fixed Header</a></li>
                           <li><a href="{{route('datatable-ext-html-5-data-export')}}" class="{{ Route::currentRouteName()=='datatable-ext-html-5-data-export' ? 'active' : '' }}">HTML 5 Export</a></li>
                           <li><a href="{{route('datatable-ext-key-table')}}" class="{{ Route::currentRouteName()=='datatable-ext-key-table' ? 'active' : '' }}">Key Table</a></li>
                           <li><a href="{{route('datatable-ext-responsive')}}" class="{{ Route::currentRouteName()=='datatable-ext-responsive' ? 'active' : '' }}">Responsive</a></li>
                           <li><a href="{{route('datatable-ext-row-reorder')}}" class="{{ Route::currentRouteName()=='datatable-ext-row-reorder' ? 'active' : '' }}">Row Reorder</a></li>
                           <li><a href="{{route('datatable-ext-scroller')}}" class="{{ Route::currentRouteName()=='datatable-ext-scroller' ? 'active' : '' }}">Scroller</a></li>
                        </ul>
                     </li>
                     <li><a href="{{route('jsgrid-table')}}" class="{{ Route::currentRouteName()=='jsgrid-table' ? 'active' : '' }}">Js Grid Table</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a class="nav-link menu-title {{request()->route()->getPrefix() == '/charts' ? 'active' : '' }}" href="#"><i data-feather="bar-chart"></i><span>Charts</span>
                     <div class="according-menu"><i class="fa fa-angle-double-{{request()->route()->getPrefix() == '/charts' ? 'down' : 'right' }}"></i></div>
                  </a>
                  <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/charts' ? 'block;' : 'none' }}">
                     <li><a href="{{route('chart-apex')}}" class="{{ Route::currentRouteName()=='chart-apex' ? 'active' : '' }}">Apex Chart</a></li>
                     <li><a href="{{route('chart-google')}}" class="{{ Route::currentRouteName()=='chart-google' ? 'active' : '' }}">Google Chart</a></li>
                     <li><a href="{{route('chart-sparkline')}}" class="{{ Route::currentRouteName()=='chart-sparkline' ? 'active' : '' }}">Sparkline chart</a></li>
                     <li><a href="{{route('chart-flot')}}" class="{{ Route::currentRouteName()=='chart-flot' ? 'active' : '' }}">Flot Chart</a></li>
                     <li><a href="{{route('chart-knob')}}" class="{{ Route::currentRouteName()=='chart-knob' ? 'active' : '' }}">Knob Chart</a></li>
                     <li><a href="{{route('chart-morris')}}" class="{{ Route::currentRouteName()=='chart-morris' ? 'active' : '' }}">Morris Chart</a></li>
                     <li><a href="{{route('chartjs')}}" class="{{ Route::currentRouteName()=='chartjs' ? 'active' : '' }}">Chatjs Chart</a></li>
                     <li><a href="{{route('chartist')}}" class="{{ Route::currentRouteName()=='chartist' ? 'active' : '' }}">Chartist Chart</a></li>
                     <li><a href="{{route('chart-peity')}}" class="{{ Route::currentRouteName()=='chart-peity' ? 'active' : '' }}">Peity Chart        </a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a class="nav-link menu-title {{request()->route()->getPrefix() == '/pages' ? 'active' : '' }}" href="#"><i data-feather="grid"> </i><span>Pages</span><span class="badge badge-danger">New</span>
                     <div class="according-menu"><i class="fa fa-angle-double-{{request()->route()->getPrefix() == '/pages' ? 'down' : 'right' }}"></i></div>
                  </a>
                  <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/pages' ? 'block;' : 'none' }}">
                     <li><a target="_blank" href="{{route('landing-page')}}" class="{{ Route::currentRouteName()=='landing-page' ? 'active' : '' }}">Landing page</a></li>
                     <li><a href="{{route('sample-page')}}" class="{{ Route::currentRouteName()=='sample-page' ? 'active' : '' }}">Sample page</a></li>
                     <li><a href="{{route('internationalization')}}" class="{{ Route::currentRouteName()=='internationalization' ? 'active' : '' }}">Internationalization</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                     <a class="nav-link menu-title {{request()->route()->getPrefix() == '/apps' ? 'active' : '' }}" href="#"><i data-feather="users"> </i><span>Apps</span>
                        <div class="according-menu"><i class="fa fa-angle-double-{{request()->route()->getPrefix() == '/apps' ? 'down' : 'right' }}"></i></div>
                     </a>
                     <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/apps' ? 'block;' : 'none' }}">
                        <li><a href="{{route('bookmark')}}" class="{{ Route::currentRouteName()=='bookmark' ? 'active' : '' }}">Bookmarks</a></li>
                        <li><a href="{{route('contacts')}}" class="{{ Route::currentRouteName()=='contacts' ? 'active' : '' }}">Contacts</a></li>
                        <li><a href="{{route('task')}}" class="{{ Route::currentRouteName()=='task' ? 'active' : '' }}">Tasks</a></li>
                        <li>
                           <a class="submenu-title {{ in_array(Route::currentRouteName(), ['map-js', 'vector-map']) ? 'active' : '' }}" href="#">Maps
                              <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['map-js', 'vector-map']) ? 'down' : 'right' }}"></i></div>
                           </a>
                           <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['map-js', 'vector-map']) ? 'block' : 'none' }};">
                              <li><a href="{{route('map-js')}}" class="{{ Route::currentRouteName()=='map-js' ? 'active' : '' }}">Maps JS</a></li>
                              <li><a href="{{route('vector-map')}}" class="{{ Route::currentRouteName()=='vector-map' ? 'active' : '' }}">Vector Maps     </a></li>
                           </ul>
                        </li>
                        <li>
                           <a class="submenu-title {{ in_array(Route::currentRouteName(), ['email-application', 'email-compose']) ? 'active' : '' }}" href="#">Email
                                 <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['email-application', 'email-compose']) ? 'down' : 'right' }}"></i></div>
                           </a>
                           <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['email-application', 'email-compose']) ? 'block' : 'none' }};">
                              <li><a href="{{route('email-application')}}" class="{{ Route::currentRouteName()=='email-application' ? 'active' : '' }}">Email App</a></li>
                              <li><a href="{{route('email-compose')}}" class="{{ Route::currentRouteName()=='email-compose' ? 'active' : '' }}">Email Compose</a></li>
                           </ul>
                        </li>
                        <li>
                           <a class="submenu-title {{ in_array(Route::currentRouteName(), ['product', 'product-page', 'list-products', 'payment-details', 'order-history', 'invoice-template', 'cart', 'list-wish', 'checkout', 'pricing']) ? 'active' : '' }}" href="#">Ecommerce
                                 <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['product', 'product-page', 'list-products', 'payment-details', 'order-history', 'invoice-template', 'cart', 'list-wish', 'checkout', 'pricing']) ? 'down' : 'right' }}"></i></div>
                           </a>
                           <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['product', 'product-page', 'list-products', 'payment-details', 'order-history', 'invoice-template', 'cart', 'list-wish', 'checkout', 'pricing']) ? 'block' : 'none' }};">
                              <li><a href="{{route('product')}}" class="{{ Route::currentRouteName()=='product' ? 'active' : '' }}">Product</a></li>
                              <li><a href="{{route('product-page')}}" class="{{ Route::currentRouteName()=='product-page' ? 'active' : '' }}">Product page</a></li>
                              <li><a href="{{route('list-products')}}" class="{{ Route::currentRouteName()=='list-products' ? 'active' : '' }}">Product list</a></li>
                              <li><a href="{{route('payment-details')}}" class="{{ Route::currentRouteName()=='payment-details' ? 'active' : '' }}">Payment Details</a></li>
                              <li><a href="{{route('order-history')}}" class="{{ Route::currentRouteName()=='order-history' ? 'active' : '' }}">Order History</a></li>
                              <li><a href="{{route('invoice-template')}}" class="{{ Route::currentRouteName()=='invoice-template' ? 'active' : '' }}">Invoice</a></li>
                              <li><a href="{{route('cart')}}" class="{{ Route::currentRouteName()=='cart' ? 'active' : '' }}">Cart</a></li>
                              <li><a href="{{route('list-wish')}}" class="{{ Route::currentRouteName()=='list-wish' ? 'active' : '' }}">Wishlist</a></li>
                              <li><a href="{{route('checkout')}}" class="{{ Route::currentRouteName()=='checkout' ? 'active' : '' }}">Checkout</a></li>
                              <li><a href="{{route('pricing')}}" class="{{ Route::currentRouteName()=='pricing' ? 'active' : '' }}">Pricing</a></li>
                           </ul>
                        </li>
                        <li>
                           <a class="submenu-title {{ in_array(Route::currentRouteName(), ['gallery', 'gallery-with-description', 'gallery-masonry', 'masonry-gallery-with-disc', 'gallery-hover']) ? 'active' : '' }}" href="#">Gallery
                                 <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['gallery', 'gallery-with-description', 'gallery-masonry', 'masonry-gallery-with-disc', 'gallery-hover']) ? 'down' : 'right' }}"></i></div>
                           </a>
                           <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['gallery', 'gallery-with-description', 'gallery-masonry', 'masonry-gallery-with-disc', 'gallery-hover']) ? 'block' : 'none' }};">
                              <li><a href="{{route('gallery')}}" class="{{ Route::currentRouteName()=='gallery' ? 'active' : '' }}">Gallery Grid</a></li>
                              <li><a href="{{route('gallery-with-description')}}" class="{{ Route::currentRouteName()=='gallery-with-description' ? 'active' : '' }}">Gallery Grid Desc</a></li>
                              <li><a href="{{route('gallery-masonry')}}" class="{{ Route::currentRouteName()=='gallery-masonry' ? 'active' : '' }}">Masonry Gallery</a></li>
                              <li><a href="{{route('masonry-gallery-with-disc')}}" class="{{ Route::currentRouteName()=='masonry-gallery-with-disc' ? 'active' : '' }}">Masonry with Desc</a></li>
                              <li><a href="{{route('gallery-hover')}}" class="{{ Route::currentRouteName()=='gallery-hover' ? 'active' : '' }}">Hover Effects</a></li>
                           </ul>
                        </li>
                        <li>
                           <a class="submenu-title {{ in_array(Route::currentRouteName(), ['blog', 'blog-single', 'add-post']) ? 'active' : '' }}" href="#">Blog
                                 <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['blog', 'blog-single', 'add-post']) ? 'down' : 'right' }}"></i></div>
                           </a>
                           <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['blog', 'blog-single', 'add-post']) ? 'block' : 'none' }};">
                              <li><a href="{{route('blog')}}" class="{{ Route::currentRouteName()=='blog' ? 'active' : '' }}">Blog Details</a></li>
                              <li><a href="{{route('blog-single')}}" class="{{ Route::currentRouteName()=='blog-single' ? 'active' : '' }}">Blog Single</a></li>
                              <li><a href="{{route('add-post')}}" class="{{ Route::currentRouteName()=='add-post' ? 'active' : '' }}">Add Post</a></li>
                           </ul>
                        </li>
                        <li>
                           <a class="submenu-title {{ in_array(Route::currentRouteName(), ['job-cards-view', 'job-list-view', 'job-details', 'job-apply']) ? 'active' : '' }}" href="#">Job Search
                                 <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['job-cards-view', 'job-list-view', 'job-details', 'job-apply']) ? 'down' : 'right' }}"></i></div>
                           </a>
                           <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['job-cards-view', 'job-list-view', 'job-details', 'job-apply']) ? 'block' : 'none' }};">
                              <li><a href="{{route('job-cards-view')}}" class="{{ Route::currentRouteName()=='job-cards-view' ? 'active' : '' }}">Cards view</a></li>
                              <li><a href="{{route('job-list-view')}}" class="{{ Route::currentRouteName()=='job-list-view' ? 'active' : '' }}">List View</a></li>
                              <li><a href="{{route('job-details')}}" class="{{ Route::currentRouteName()=='job-details' ? 'active' : '' }}">Job Details</a></li>
                              <li><a href="{{route('job-apply')}}" class="{{ Route::currentRouteName()=='job-apply' ? 'active' : '' }}">Apply</a></li>
                           </ul>
                        </li>
                        <li>
                           <a class="submenu-title {{ in_array(Route::currentRouteName(), ['learning-list-view', 'learning-detailed']) ? 'active' : '' }}" href="#">Learning
                                 <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['learning-list-view', 'learning-detailed']) ? 'down' : 'right' }}"></i></div>
                           </a>
                           <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['learning-list-view', 'learning-detailed']) ? 'block' : 'none' }};">
                              <li><a href="{{route('learning-list-view')}}" class="{{ Route::currentRouteName()=='learning-list-view' ? 'active' : '' }}">Learning List</a></li>
                              <li><a href="{{route('learning-detailed')}}" class="{{ Route::currentRouteName()=='learning-detailed' ? 'active' : '' }}">Detailed Course</a></li>
                           </ul>
                        </li>
                        <li>
                           <a class="submenu-title {{ in_array(Route::currentRouteName(), ['chat', 'chat-video']) ? 'active' : '' }}" href="#">Chat
                                 <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['chat', 'chat-video']) ? 'down' : 'right' }}"></i></div>
                           </a>
                           <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['chat', 'chat-video']) ? 'block' : 'none' }};">
                              <li><a href="{{route('chat')}}" class="{{ Route::currentRouteName()=='chat' ? 'active' : '' }}">Chat App</a></li>
                              <li><a href="{{route('chat-video')}}" class="{{ Route::currentRouteName()=='chat-video' ? 'active' : '' }}">Video chat</a></li>
                           </ul>
                        </li>
                        <li>
                           <a class="submenu-title {{ in_array(Route::currentRouteName(), ['calendar-basic']) ? 'active' : '' }}" href="#">Calender
                                 <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['calendar-basic']) ? 'down' : 'right' }}"></i></div>
                           </a>
                           <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['calendar-basic']) ? 'block' : 'none' }};">
                              <li><a href="{{route('calendar-basic')}}" class="{{ Route::currentRouteName()=='calendar-basic' ? 'active' : '' }}">Calender Basic</a></li>
                           </ul>
                        </li>
                        <li>
                           <a class="submenu-title {{ in_array(Route::currentRouteName(), ['user-profile', 'edit-profile', 'user-cards']) ? 'active' : '' }}" href="#">Users
                                 <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['user-profile', 'edit-profile', 'user-cards']) ? 'down' : 'right' }}"></i></div>
                           </a>
                           <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['user-profile', 'edit-profile', 'user-cards']) ? 'block' : 'none' }};">
                              <li><a href="{{route('user-profile')}}" class="{{ Route::currentRouteName()=='user-profile' ? 'active' : '' }}">Users Profile</a></li>
                              <li><a href="{{route('edit-profile')}}" class="{{ Route::currentRouteName()=='edit-profile' ? 'active' : '' }}">Users Edit</a></li>
                              <li><a href="{{route('user-cards')}}" class="{{ Route::currentRouteName()=='user-cards' ? 'active' : '' }}">Users Cards</a></li>
                           </ul>
                        </li>
                        <li>
                           <a class="submenu-title {{ in_array(Route::currentRouteName(), ['summernote', 'ckeditor', 'simple-mde', 'ace-code-editor']) ? 'active' : '' }}" href="#">Editors
                              <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['summernote', 'ckeditor', 'simple-mde', 'ace-code-editor']) ? 'down' : 'right' }}"></i></div>
                           </a>
                           <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['summernote', 'ckeditor', 'simple-mde', 'ace-code-editor']) ? 'block' : 'none' }};">
                              <li><a href="{{route('summernote')}}" class="{{ Route::currentRouteName()=='summernote' ? 'active' : '' }}">Summer Note</a></li>
                              <li><a href="{{route('ckeditor')}}" class="{{ Route::currentRouteName()=='ckeditor' ? 'active' : '' }}">CK editor</a></li>
                              <li><a href="{{route('simple-mde')}}" class="{{ Route::currentRouteName()=='simple-mde' ? 'active' : '' }}">MDE editor</a></li>
                              <li><a href="{{route('ace-code-editor')}}" class="{{ Route::currentRouteName()=='ace-code-editor' ? 'active' : '' }}">ACE code editor</a></li>
                           </ul>
                        </li>
                        <li><a href="{{route('social-app')}}" class="{{ Route::currentRouteName()=='social-app' ? 'active' : '' }}">Social App</a></li>
                        <li><a href="{{route('to-do')}}" class="{{ Route::currentRouteName()=='to-do' ? 'active' : '' }}">To-Do</a></li>
                        <li><a href="{{route('faq')}}" class="{{ Route::currentRouteName()=='faq' ? 'active' : '' }}">FAQ</a></li>
                        <li><a href="{{route('knowledgebase')}}" class="{{ Route::currentRouteName()=='knowledgebase' ? 'active' : '' }}">Knowledgebase</a></li>
                        <li><a href="{{route('support-ticket')}}" class="{{ Route::currentRouteName()=='support-ticket' ? 'active' : '' }}">Support Ticket</a></li>
                     </ul>
               </li>
               <li class="dropdown">
                  <a class="nav-link menu-title default-view" target="_blank" href="{{route('layout-light')}}"><i data-feather="anchor"></i><span>Starter Kit</span>
                     <div class="according-menu"><i class="fa fa-angle-double-right"></i></div>
                  </a>
               </li>
               <li class="mega-menu">
                  <a class="nav-link menu-title {{request()->route()->getPrefix() == '/others' ? 'active' : '' }}" href="#"><i data-feather="layers"></i><span>Others</span>
                     <div class="according-menu other"><i class="fa fa-angle-double-{{request()->route()->getPrefix() == '/others' ? 'down' : 'right' }}"></i></div>
                  </a>
                  <div class="mega-menu-container menu-content" style="display: {{ request()->route()->getPrefix() == '/others' ? 'block;' : 'none' }}">
                     <div class="container">
                        <div class="row">
                           <div class="col mega-box">
                              <div class="link-section">
                                 <div class="submenu-title {{ in_array(Route::currentRouteName(), ['search', 'search-images', 'search-video']) ? 'active' : '' }}">
                                    <h5>Search Pages</h5>
                                    <div class="according-menu"><i class="fa fa-angle-double-{{ in_array(Route::currentRouteName(), ['search', 'search-images', 'search-video']) ? 'down' : 'right' }}"></i></div>
                                 </div>
                                 <ul class="submenu-content opensubmegamenu" style="display: {{ in_array(Route::currentRouteName(), ['search', 'search-images', 'search-video']) ? 'block' : 'none' }};">
                                    <li><a href="{{route('search')}}" class="{{ Route::currentRouteName()=='search' ? 'active' : '' }}">Search Website</a></li>
                                    <li><a href="{{route('search-images')}}" class="{{ Route::currentRouteName()=='search-images' ? 'active' : '' }}">Search Images</a></li>
                                    <li><a href="{{route('search-video')}}" class="{{ Route::currentRouteName()=='search-video' ? 'active' : '' }}">Search Video</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col mega-box">
                              <div class="link-section">
                                 <div class="submenu-title ">
                                    <h5>Error Page</h5>
                                 </div>
                                 <ul class="submenu-content opensubmegamenu" style="display: {{ in_array(Route::currentRouteName(), ['error-400', 'error-401', 'error-403', 'error-404', 'error-500', 'error-503']) ? 'block' : 'none' }};">
                                    <li><a href="{{route('error-400')}}">Error 400</a></li>
                                    <li><a href="{{route('error-401')}}">Error 401</a></li>
                                    <li><a href="{{route('error-403')}}">Error 403</a></li>
                                    <li><a href="{{route('error-404')}}">Error 404</a></li>
                                    <li><a href="{{route('error-500')}}">Error 500</a></li>
                                    <li><a href="{{route('error-503')}}">Error 503</a></li>
                                 </ul>
                              </div>
                           </div>
                           {{-- <div class="col mega-box">
                              <div class="link-section">
                                 <div class="submenu-title">
                                    <h5> Authentication</h5>
                                 </div>
                                 <ul class="submenu-content opensubmegamenu" style="display: {{ in_array(Route::currentRouteName(), ['login', 'login-image', 'login-video', 'signup', 'signup-image', 'signup-video', 'signup-video', 'unlock', 'forget-password', 'reset-password', 'maintenance']) ? 'block' : 'none' }};">
                                    <li><a href="{{route('login')}}">Login Simple</a></li>
                                    <li><a href="{{route('login-image')}}">Login with Bg Image</a></li>
                                    <li><a href="{{route('login-video')}}">Login with Bg video</a></li>
                                    <li><a href="{{route('signup')}}">Register Simple</a></li>
                                    <li><a href="{{route('signup-image')}}">Register with Bg Image</a></li>
                                    <li><a href="{{route('signup-video')}}">Register with Bg video</a></li>
                                    <li><a href="{{route('unlock')}}">Unlock User</a></li>
                                    <li><a href="{{route('forget-password')}}">Forget Password</a></li>
                                    <li><a href="{{route('reset-password')}}">Reset Password</a></li>
                                    <li><a href="{{route('maintenance')}}">Maintenance</a></li>
                                 </ul>
                              </div>
                           </div> --}}
                           <div class="col mega-box">
                              <div class="link-section">
                                 <div class="submenu-title">
                                    <h5>Coming Soon</h5>
                                 </div>
                                 <ul class="submenu-content opensubmegamenu" style="display: {{ in_array(Route::currentRouteName(), ['comingsoon', 'comingsoon-bg-video', 'comingsoon-bg-img']) ? 'block' : 'none' }};">
                                    <li><a href="{{route('comingsoon')}}">Coming Simple</a></li>
                                    <li><a href="{{route('comingsoon-bg-video')}}">Coming with Bg video</a></li>
                                    <li><a href="{{route('comingsoon-bg-img')}}">Coming with Bg Image</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col mega-box">
                              <div class="link-section">
                                 <div class="submenu-title">
                                    <h5>Email templates</h5>
                                 </div>
                                 <ul class="submenu-content opensubmegamenu" style="display: {{ in_array(Route::currentRouteName(), ['basic-template', 'email-header', 'template-email', 'template-email-2', 'ecommerce-templates', 'email-order-success']) ? 'block' : 'none' }};">
                                    <li><a href="{{route('basic-template')}}">Basic Email</a></li>
                                    <li><a href="{{route('email-header')}}">Basic With Header</a></li>
                                    <li><a href="{{route('template-email')}}">Ecomerce Template</a></li>
                                    <li><a href="{{route('template-email-2')}}">Email Template 2</a></li>
                                    <li><a href="{{route('ecommerce-templates')}}">Ecommerce Email</a></li>
                                    <li><a href="{{route('email-order-success')}}">Order Success</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
         <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </div>
   </nav>
</header>