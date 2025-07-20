 <style>
     .form-flex {
         display: flex;
         justify-content: space-between;
     }

     .main-section {
         width: 85%;
     }
 </style>


 <div class="container-fluid">
     <div class="form-flex">
         <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
             <div class="app-brand demo">
                 <a href="index.html" class="app-brand-link">
                     <span class="app-brand-logo demo">
                         <span class="text-primary">
                             <img src="{{ asset('assets/images/logo.jpg') }}" alt="" class="imageLogo">
                         </span>
                     </span>
                 </a>
                 <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                     <i class="bx bx-chevron-left d-block d-xl-none align-middle"></i>
                 </a>
             </div>
             <div class="menu-divider mt-0"></div>
             <div class="menu-inner-shadow"></div>
             <ul class="menu-inner py-1">
                 <!-- Layouts -->
                 <li class="menu-item">
                     <a href="javascript:void(0);" class="menu-link menu-toggle">
                         <i class="menu-icon tf-icons bx bx-layout"></i>
                         <div class="text-truncate" data-i18n="Layouts">Баннер</div>
                     </a>

                     <ul class="menu-sub">
                         <li class="menu-item">
                             <a href="{{ route('banners.create') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank">Добавить </div>
                             </a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('banners.index') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank">Просматривать </div>
                             </a>
                         </li>

                     </ul>
                 </li>
                 <li class="menu-item">
                     <a href="javascript:void(0);" class="menu-link menu-toggle">
                         <i class="menu-icon tf-icons bx bx-layout"></i>
                         <div class="text-truncate" data-i18n="Layouts">Шиппинг</div>
                     </a>

                     <ul class="menu-sub">
                         <li class="menu-item">
                             <a href="{{ route('shipings.create') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank"> Добавить</div>
                             </a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('shipings.index') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank"> Просматривать</div>
                             </a>
                         </li>

                     </ul>
                 </li>
                 <li class="menu-item">
                     <a href="javascript:void(0);" class="menu-link menu-toggle">
                         <i class="menu-icon tf-icons bx bx-layout"></i>
                         <div class="text-truncate" data-i18n="Layouts">Предложение</div>
                     </a>

                     <ul class="menu-sub">
                         <li class="menu-item">
                             <a href="{{ route('offers.create') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank">Добавить </div>
                             </a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('offers.index') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank">Просматривать </div>
                             </a>
                         </li>

                     </ul>
                 </li>
                 <li class="menu-item">
                     <a href="javascript:void(0);" class="menu-link menu-toggle">
                         <i class="menu-icon tf-icons bx bx-layout"></i>
                         <div class="text-truncate" data-i18n="Layouts">продукти</div>
                     </a>

                     <ul class="menu-sub">
                         <li class="menu-item">
                             <a href="{{ route('products.create') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank">Добавить </div>
                             </a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('products.index') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank">Просматривать </div>
                             </a>
                         </li>

                     </ul>
                 </li>
                 <li class="menu-item">
                     <a href="javascript:void(0);" class="menu-link menu-toggle">
                         <i class="menu-icon tf-icons bx bx-layout"></i>
                         <div class="text-truncate" data-i18n="Layouts">Блог</div>
                     </a>

                     <ul class="menu-sub">
                         <li class="menu-item">
                             <a href="{{ route('blog.create') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank">Добавить </div>
                             </a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('blog.index') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank">Просматривать </div>
                             </a>
                         </li>

                     </ul>
                 </li>

                 <li class="menu-item">
                     <a href="javascript:void(0);" class="menu-link menu-toggle">
                         <i class="menu-icon tf-icons bx bx-layout"></i>
                         <div class="text-truncate" data-i18n="Layouts">Экраны под ванну</div>
                     </a>

                     <ul class="menu-sub">
                         <li class="menu-item">
                             <a href="{{ route('bath.create') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank">Добавить </div>
                             </a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('bath.index') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank">Просматривать </div>
                             </a>
                         </li>

                     </ul>
                 </li>
                 <li class="menu-item">
                     <a href="javascript:void(0);" class="menu-link menu-toggle">
                         <i class="menu-icon tf-icons bx bx-layout"></i>
                         <div class="text-truncate" data-i18n="Layouts">Пенал</div>
                     </a>

                     <ul class="menu-sub">
                         <li class="menu-item">
                             <a href="{{ route('pencil.create') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank">Добавить </div>
                             </a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('pencil.index') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank">Просматривать </div>
                             </a>
                         </li>

                     </ul>
                 </li>
                 <li class="menu-item">
                     <a href="javascript:void(0);" class="menu-link menu-toggle">
                         <i class="menu-icon tf-icons bx bx-layout"></i>
                         <div class="text-truncate" data-i18n="Layouts">Шкаф </div>
                     </a>

                     <ul class="menu-sub">
                         <li class="menu-item">
                             <a href="{{ route('locker.create') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank">Добавить </div>
                             </a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('locker.index') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank">Просматривать </div>
                             </a>
                         </li>

                     </ul>
                 </li>
                 <li class="menu-item">
                     <a href="javascript:void(0);" class="menu-link menu-toggle">
                         <i class="menu-icon tf-icons bx bx-layout"></i>
                         <div class="text-truncate" data-i18n="Layouts">Тумбы с раковинами </div>
                     </a>

                     <ul class="menu-sub">
                         <li class="menu-item">
                             <a href="{{ route('skins.create') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank">Добавить </div>
                             </a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('skins.index') }}" class="menu-link">
                                 <div class="skins-truncate" data-i18n="Blank">Просматривать </div>
                             </a>
                         </li>

                     </ul>
                 </li>
                 <li class="menu-item">
                     <a href="javascript:void(0);" class="menu-link menu-toggle">
                         <i class="menu-icon tf-icons bx bx-layout"></i>
                         <div class="text-truncate" data-i18n="Layouts">Зеркала </div>
                     </a>

                     <ul class="menu-sub">
                         <li class="menu-item">
                             <a href="{{ route('mirror.create') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank">Добавить </div>
                             </a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('mirror.index') }}" class="menu-link">
                                 <div class="skins-truncate" data-i18n="Blank">Просматривать </div>
                             </a>
                         </li>

                     </ul>
                 </li>
                  <li class="menu-item">
                     <a href="javascript:void(0);" class="menu-link menu-toggle">
                         <i class="menu-icon tf-icons bx bx-layout"></i>
                         <div class="text-truncate" data-i18n="Layouts">Наша команда  </div>
                     </a>

                     <ul class="menu-sub">
                         <li class="menu-item">
                             <a href="{{ route('team.create') }}" class="menu-link">
                                 <div class="text-truncate" data-i18n="Blank">Добавить </div>
                             </a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('team.index') }}" class="menu-link">
                                 <div class="skins-truncate" data-i18n="Blank">Просматривать </div>
                             </a>
                         </li>

                     </ul>
                 </li>
             </ul>
         </aside>
         <div class="main-section">

         </div>
     </div>

 </div>
