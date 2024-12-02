
<?php 
   $auth_user = auth()->user();
   $user_address =$auth_user->user_address;

  
?>
 

<!doctype html>
<html lang="en">
   <span style="display: none" id="user_dash_address" value = "{{$user_address}}"></span>
   <span style="display: none" id="is_login" value = "1"></span>
   <body>

      <noscript>You need to enable JavaScript to run this app.</noscript>
      <div id="root"></div>
   </body>
   <head>
      <meta charset="utf-8" />
      <link rel="icon" href="../../favicon.ico" />
      <meta meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" />
      <meta name="theme-color" content="#000000" />
      <meta name="description" content="Web site created using create-react-app" />
      <link rel="manifest" href="/manifest.json" />
      <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png" />
      <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png" />
      <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png" />
      <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png" />
      <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png" />
      <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png" />
      <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png" />
      <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png" />
      <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png" />
      <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png" />
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
      <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png" />
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
      <link rel="manifest" href="/manifest.json" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.8.0.min.js"
      integrity="sha256-jFdOCgY5bfpwZLi0YODkqNXQdIxKpm6y5O/fy0baSzE=" crossorigin="anonymous"></script>
      <!-- SweetAlert2 CSS -->
      <link rel="stylesheet" href="{{asset('assets/Treant/Treant.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
    <script src="{{asset('assets/Treant/Treant.js')}}"></script>
    
      <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
      <!-- SweetAlert2 JS -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <meta name="msapplication-TileColor" content="#ffffff" />
      <meta name="msapplication-TileImage" content="/ms-icon-144x144.png" />
      <title>Bio BitCoin</title>
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-NRMJKSE7GB"></script>
      <link href="{{asset('assets/css/main.843d695d.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/coustom.css')}}" rel="stylesheet">
      <script src="{{asset('assets/js/index.js')}}" type="module"></script>
  <script src="{{asset('assets/js/web3.min.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   </head>
   <body>


      <style>
         /* Default hidden sidebar */
.Sidebar_sidebar__5T17T {
  transform: translateX(-100%);
  transition: transform 0.3s ease;
}

/* Visible sidebar */
.Sidebar_sidebar__5T17T.visible {
  margin-left: 260px;
  background-color: #12266f;
}
</style>
<style>
   .hide {
      display: none;
   }
   .btn {
      
   }
</style>
      <div id="root">
      <main class="Authlayout_layout__payvr">
      <div class="Sidebar_overlay__MLLgF  d-xl-none"></div>
      <div class="Sidebar_sidebar_bg__eA69l" style="width: 0px; border-radius: 0px 100% 100% 0px;"></div>
      <aside class="Sidebar_sidebar__5T17T " id="sidebar" style="transform: translateX(-100%);">
         <div class="Sidebar_sidebar_head__FYKhL">
            <img
            src="{{asset('assets/media/logo.png')}}" alt="logo"
            class="Sidebar_logo__iTxQa">
            <div class="d-flex justify-content-center align-items-center">
               <div
                  class="WalletAddress_wallet_add__7aYu3 d-md-none Sidebar_sidebar_address__iILNk WalletAddress_wallet_add__inner__VV9I7">
                  <div class="wallet-icon WalletAddress_wallet_add__icon__VYr5+"><img
                     src="data:image/png;base64,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"
                     alt="wallet-icon"></div>
                  <a
                     href="#"
                     target="_blank">
                     <div>
                        <h6>Wallet Address<strong>0x30A6Ef...0c214736</strong></h6>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         
         <div class="Sidebar_sidebar_links__qOrMB">
            <ul>
               <li>
                  <a aria-current="page" class="active" href="{{route('dashboard')}}">
                     <span>
                        <svg
                           xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29"
                           fill="none">
                           <rect x="0.0253906" y="0.442383" width="28" height="28" rx="8" fill="#13307D">
                           </rect>
                           <path
                              d="M16.1691 8.01128C16.3315 8.01128 16.4873 7.94676 16.6022 7.83189C16.717 7.71703 16.7816 7.56124 16.7816 7.3988C16.7816 7.23636 16.717 7.08057 16.6022 6.96571C16.4873 6.85085 16.3315 6.78632 16.1691 6.78632H13.6824C12.1822 6.78632 11.0071 6.78632 10.0736 6.88758C9.12223 6.99048 8.3505 7.20444 7.69229 7.68299C7.29367 7.97261 6.94313 8.32315 6.65351 8.72177C6.17496 9.3808 5.961 10.1509 5.8581 11.1031C5.75684 12.0365 5.75684 13.2117 5.75684 14.7119V14.7854C5.75684 16.2855 5.75684 17.4607 5.8581 18.3933C5.961 19.3455 6.17496 20.1164 6.65351 20.7755C6.94313 21.1741 7.29367 21.5246 7.69229 21.8142C8.35132 22.2928 9.12142 22.5067 10.0736 22.6096C11.0071 22.7109 12.1822 22.7109 13.6824 22.7109H13.7559C15.2561 22.7109 16.4312 22.7109 17.3646 22.6096C18.316 22.5067 19.0878 22.2928 19.746 21.8142C20.1446 21.5246 20.4951 21.1741 20.7848 20.7755C21.2633 20.1164 21.4773 19.3463 21.5802 18.3941C21.6814 17.4607 21.6814 16.2855 21.6814 14.7854V12.2987C21.6814 12.1362 21.6169 11.9804 21.502 11.8656C21.3872 11.7507 21.2314 11.6862 21.0689 11.6862C20.9065 11.6862 20.7507 11.7507 20.6359 11.8656C20.521 11.9804 20.4565 12.1362 20.4565 12.2987V14.7486C20.4565 16.2937 20.4556 17.4027 20.3625 18.2618C20.2703 19.1095 20.0947 19.6403 19.7933 20.0552C19.5794 20.3492 19.3197 20.6089 19.0257 20.8228C18.6108 21.125 18.08 21.3006 17.2323 21.392C16.3732 21.4851 15.2642 21.4859 13.7191 21.4859C12.174 21.4859 11.065 21.4851 10.2059 21.392C9.35824 21.2997 8.82742 21.1242 8.41257 20.8228C8.118 20.6088 7.85895 20.3497 7.64492 20.0552C7.34276 19.6403 7.16718 19.1095 7.07572 18.2618C6.98262 17.4027 6.9818 16.2937 6.9818 14.7486C6.9818 13.2035 6.98262 12.0945 7.07572 11.2354C7.16718 10.3877 7.34358 9.8569 7.64492 9.44205C7.85888 9.14806 8.11858 8.88836 8.41257 8.6744C8.82742 8.37224 9.35824 8.19666 10.2059 8.1052C11.065 8.0121 12.174 8.01128 13.7191 8.01128H16.1691Z"
                              fill="currentColor"></path>
                           <path
                              d="M9.08628 16.8123C9.02134 16.9572 9.01521 17.1216 9.06917 17.2709C9.12314 17.4203 9.23298 17.5428 9.37555 17.6127C9.51811 17.6826 9.68224 17.6944 9.83335 17.6456C9.98445 17.5969 10.1107 17.4913 10.1855 17.3513L11.3778 14.9201C11.7477 14.1672 12.8347 14.2039 13.1524 14.9805C13.8702 16.7355 16.3242 16.818 17.1596 15.1161L18.3519 12.6849C18.4169 12.5401 18.423 12.3756 18.3691 12.2263C18.3151 12.077 18.2052 11.9544 18.0627 11.8845C17.9201 11.8146 17.756 11.8028 17.6049 11.8516C17.4538 11.9003 17.3275 12.0059 17.2527 12.146L16.0604 14.5771C15.6905 15.3301 14.6035 15.2933 14.2859 14.5167C13.568 12.7617 11.114 12.6792 10.2786 14.3811L9.08628 16.8123Z"
                              fill="currentColor"></path>
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M18.2109 8.21544C18.2109 8.75691 18.426 9.27621 18.8089 9.65908C19.1918 10.042 19.7111 10.2571 20.2526 10.2571C20.794 10.2571 21.3133 10.042 21.6962 9.65908C22.0791 9.27621 22.2942 8.75691 22.2942 8.21544C22.2942 7.67397 22.0791 7.15468 21.6962 6.7718C21.3133 6.38893 20.794 6.17383 20.2526 6.17383C19.7111 6.17383 19.1918 6.38893 18.8089 6.7718C18.426 7.15468 18.2109 7.67397 18.2109 8.21544ZM19.4359 8.21544C19.4359 8.43203 19.5219 8.63975 19.6751 8.7929C19.8282 8.94605 20.036 9.03209 20.2526 9.03209C20.4691 9.03209 20.6769 8.94605 20.83 8.7929C20.9832 8.63975 21.0692 8.43203 21.0692 8.21544C21.0692 7.99885 20.9832 7.79114 20.83 7.63799C20.6769 7.48484 20.4691 7.3988 20.2526 7.3988C20.036 7.3988 19.8282 7.48484 19.6751 7.63799C19.5219 7.79114 19.4359 7.99885 19.4359 8.21544Z"
                              fill="currentColor"></path>
                        </svg>
                     </span>
                     Dashboard
                  </a>
               </li>
               <li class="dropdown">
                  <a onclick="toggleDropdown('dropdownMenu3')" href="javascript:void(0);"> 
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                           width="29" height="29" viewBox="0 0 29 29" fill="none">
                           <rect x="0.0253906" y="0.0506592" width="28" height="28" rx="8" fill="#13307D"
                              style="text-align: center; display: flex; justify-content: center; align-items: center;">
                           </rect>
                           <path
                              d="M8.54248 10.7484L10.0768 11.677C10.2248 11.7712 10.3729 11.7679 10.5209 11.6669C10.669 11.566 10.7228 11.428 10.6824 11.2531L10.2787 9.49672L11.6514 8.30562C11.786 8.18449 11.8264 8.03981 11.7726 7.87157C11.7187 7.70334 11.5976 7.61249 11.4092 7.59903L9.61245 7.45772L8.90587 5.80229C8.83857 5.64079 8.71744 5.56004 8.54248 5.56004C8.36752 5.56004 8.24639 5.64079 8.17909 5.80229L7.47251 7.45772L5.67577 7.59903C5.48735 7.61249 5.36622 7.70334 5.31238 7.87157C5.25855 8.03981 5.29893 8.18449 5.43351 8.30562L6.8063 9.49672L6.40254 11.2531C6.36217 11.428 6.416 11.566 6.56405 11.6669C6.71209 11.7679 6.86014 11.7712 7.00819 11.677L8.54248 10.7484ZM5.83727 15.2099H3.69734C3.2532 15.2099 2.87299 15.0518 2.55671 14.7355C2.24043 14.4192 2.08229 14.039 2.08229 13.5949V11.455L0.527803 9.88029C0.379757 9.71879 0.265358 9.54046 0.184605 9.34531C0.103853 9.15015 0.0634766 8.95164 0.0634766 8.74976C0.0634766 8.54788 0.103853 8.34936 0.184605 8.15421C0.265358 7.95906 0.379757 7.78073 0.527803 7.61922L2.08229 6.04455V3.90461C2.08229 3.46047 2.24043 3.08026 2.55671 2.76398C2.87299 2.4477 3.2532 2.28956 3.69734 2.28956H5.83727L7.41195 0.735078C7.57345 0.587032 7.75178 0.472633 7.94693 0.391881C8.14208 0.311128 8.3406 0.270752 8.54248 0.270752C8.74436 0.270752 8.94288 0.311128 9.13803 0.391881C9.33318 0.472633 9.51151 0.587032 9.67302 0.735078L11.2477 2.28956H13.3876C13.8318 2.28956 14.212 2.4477 14.5283 2.76398C14.8445 3.08026 15.0027 3.46047 15.0027 3.90461V6.04455L16.5572 7.61922C16.7052 7.78073 16.8196 7.95906 16.9004 8.15421C16.9811 8.34936 17.0215 8.54788 17.0215 8.74976C17.0215 8.95164 16.9811 9.15015 16.9004 9.34531C16.8196 9.54046 16.7052 9.71879 16.5572 9.88029L15.0027 11.455V13.5949C15.0027 14.039 14.8445 14.4192 14.5283 14.7355C14.212 15.0518 13.8318 15.2099 13.3876 15.2099H11.2477L9.67302 16.7644C9.51151 16.9125 9.33318 17.0269 9.13803 17.1076C8.94288 17.1884 8.74436 17.2288 8.54248 17.2288C8.3406 17.2288 8.14208 17.1884 7.94693 17.1076C7.75178 17.0269 7.57345 16.9125 7.41195 16.7644L5.83727 15.2099ZM6.52367 13.5949L8.54248 15.6137L10.5613 13.5949H13.3876V10.7686L15.4064 8.74976L13.3876 6.73095V3.90461H10.5613L8.54248 1.8858L6.52367 3.90461H3.69734V6.73095L1.67852 8.74976L3.69734 10.7686V13.5949H6.52367Z"
                              fill="#D0D6E5" style="transform: translate(5px, 5px);"></path>
                        </svg>
                     </span>
                    Staking
                    &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fas fa-angle-right show" style="color: #fff;"></i>
                    <i class="fas fa-angle-down hide" style="color: #fff;"></i>
                  </a>
                  <ul id="dropdownMenu3" style="display: none;">
                     <li ><a href="{{route('funds')}}">Invest Now</a></li>
                    <li ><a  href="{{route('staking')}}">Invest Report</a></li>
                    
                  </ul>
                </li>
               
              
               <li class="dropdown">
                  <a  onclick="toggleDropdown('dropdownMenu1')" href="javascript:void(0);"> 
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                           width="29" height="29" viewBox="0 0 29 29" fill="none">
                           <rect x="0.0253906" y="0.0506592" width="28" height="28" rx="8" fill="#13307D"
                              style="text-align: center; display: flex; justify-content: center; align-items: center;">
                           </rect>
                           <path
                              d="M8.54248 10.7484L10.0768 11.677C10.2248 11.7712 10.3729 11.7679 10.5209 11.6669C10.669 11.566 10.7228 11.428 10.6824 11.2531L10.2787 9.49672L11.6514 8.30562C11.786 8.18449 11.8264 8.03981 11.7726 7.87157C11.7187 7.70334 11.5976 7.61249 11.4092 7.59903L9.61245 7.45772L8.90587 5.80229C8.83857 5.64079 8.71744 5.56004 8.54248 5.56004C8.36752 5.56004 8.24639 5.64079 8.17909 5.80229L7.47251 7.45772L5.67577 7.59903C5.48735 7.61249 5.36622 7.70334 5.31238 7.87157C5.25855 8.03981 5.29893 8.18449 5.43351 8.30562L6.8063 9.49672L6.40254 11.2531C6.36217 11.428 6.416 11.566 6.56405 11.6669C6.71209 11.7679 6.86014 11.7712 7.00819 11.677L8.54248 10.7484ZM5.83727 15.2099H3.69734C3.2532 15.2099 2.87299 15.0518 2.55671 14.7355C2.24043 14.4192 2.08229 14.039 2.08229 13.5949V11.455L0.527803 9.88029C0.379757 9.71879 0.265358 9.54046 0.184605 9.34531C0.103853 9.15015 0.0634766 8.95164 0.0634766 8.74976C0.0634766 8.54788 0.103853 8.34936 0.184605 8.15421C0.265358 7.95906 0.379757 7.78073 0.527803 7.61922L2.08229 6.04455V3.90461C2.08229 3.46047 2.24043 3.08026 2.55671 2.76398C2.87299 2.4477 3.2532 2.28956 3.69734 2.28956H5.83727L7.41195 0.735078C7.57345 0.587032 7.75178 0.472633 7.94693 0.391881C8.14208 0.311128 8.3406 0.270752 8.54248 0.270752C8.74436 0.270752 8.94288 0.311128 9.13803 0.391881C9.33318 0.472633 9.51151 0.587032 9.67302 0.735078L11.2477 2.28956H13.3876C13.8318 2.28956 14.212 2.4477 14.5283 2.76398C14.8445 3.08026 15.0027 3.46047 15.0027 3.90461V6.04455L16.5572 7.61922C16.7052 7.78073 16.8196 7.95906 16.9004 8.15421C16.9811 8.34936 17.0215 8.54788 17.0215 8.74976C17.0215 8.95164 16.9811 9.15015 16.9004 9.34531C16.8196 9.54046 16.7052 9.71879 16.5572 9.88029L15.0027 11.455V13.5949C15.0027 14.039 14.8445 14.4192 14.5283 14.7355C14.212 15.0518 13.8318 15.2099 13.3876 15.2099H11.2477L9.67302 16.7644C9.51151 16.9125 9.33318 17.0269 9.13803 17.1076C8.94288 17.1884 8.74436 17.2288 8.54248 17.2288C8.3406 17.2288 8.14208 17.1884 7.94693 17.1076C7.75178 17.0269 7.57345 16.9125 7.41195 16.7644L5.83727 15.2099ZM6.52367 13.5949L8.54248 15.6137L10.5613 13.5949H13.3876V10.7686L15.4064 8.74976L13.3876 6.73095V3.90461H10.5613L8.54248 1.8858L6.52367 3.90461H3.69734V6.73095L1.67852 8.74976L3.69734 10.7686V13.5949H6.52367Z"
                              fill="#D0D6E5" style="transform: translate(5px, 5px);"></path>
                        </svg>
                     </span>
                    My Networks
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <i class="fas fa-angle-right show" style="color: #fff;"></i>
                    <i class="fas fa-angle-down hide" style="color: #fff;"></i>
                  </a>
                  
                  <ul id="dropdownMenu1" style="display: none;">
                     <li ><a href="{{ route('tree', ['sponsorId' => auth()->id()]) }}">Binary Tree</a></li>
                    <li ><a  href="{{route('my_direct')}}">Referral Team</a></li>
                    <li ><a  href="{{route('my_Level')}}">Level Income</a></li>
                    
                  </ul>
               </li>
               
               <li class="dropdown">
                  <a onclick="toggleDropdown('dropdownMenu2')" href="javascript:void(0);"> 
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                           width="29" height="29" viewBox="0 0 29 29" fill="none">
                           <rect x="0.0253906" y="0.0506592" width="28" height="28" rx="8" fill="#13307D"
                              style="text-align: center; display: flex; justify-content: center; align-items: center;">
                           </rect>
                           <path
                              d="M8.54248 10.7484L10.0768 11.677C10.2248 11.7712 10.3729 11.7679 10.5209 11.6669C10.669 11.566 10.7228 11.428 10.6824 11.2531L10.2787 9.49672L11.6514 8.30562C11.786 8.18449 11.8264 8.03981 11.7726 7.87157C11.7187 7.70334 11.5976 7.61249 11.4092 7.59903L9.61245 7.45772L8.90587 5.80229C8.83857 5.64079 8.71744 5.56004 8.54248 5.56004C8.36752 5.56004 8.24639 5.64079 8.17909 5.80229L7.47251 7.45772L5.67577 7.59903C5.48735 7.61249 5.36622 7.70334 5.31238 7.87157C5.25855 8.03981 5.29893 8.18449 5.43351 8.30562L6.8063 9.49672L6.40254 11.2531C6.36217 11.428 6.416 11.566 6.56405 11.6669C6.71209 11.7679 6.86014 11.7712 7.00819 11.677L8.54248 10.7484ZM5.83727 15.2099H3.69734C3.2532 15.2099 2.87299 15.0518 2.55671 14.7355C2.24043 14.4192 2.08229 14.039 2.08229 13.5949V11.455L0.527803 9.88029C0.379757 9.71879 0.265358 9.54046 0.184605 9.34531C0.103853 9.15015 0.0634766 8.95164 0.0634766 8.74976C0.0634766 8.54788 0.103853 8.34936 0.184605 8.15421C0.265358 7.95906 0.379757 7.78073 0.527803 7.61922L2.08229 6.04455V3.90461C2.08229 3.46047 2.24043 3.08026 2.55671 2.76398C2.87299 2.4477 3.2532 2.28956 3.69734 2.28956H5.83727L7.41195 0.735078C7.57345 0.587032 7.75178 0.472633 7.94693 0.391881C8.14208 0.311128 8.3406 0.270752 8.54248 0.270752C8.74436 0.270752 8.94288 0.311128 9.13803 0.391881C9.33318 0.472633 9.51151 0.587032 9.67302 0.735078L11.2477 2.28956H13.3876C13.8318 2.28956 14.212 2.4477 14.5283 2.76398C14.8445 3.08026 15.0027 3.46047 15.0027 3.90461V6.04455L16.5572 7.61922C16.7052 7.78073 16.8196 7.95906 16.9004 8.15421C16.9811 8.34936 17.0215 8.54788 17.0215 8.74976C17.0215 8.95164 16.9811 9.15015 16.9004 9.34531C16.8196 9.54046 16.7052 9.71879 16.5572 9.88029L15.0027 11.455V13.5949C15.0027 14.039 14.8445 14.4192 14.5283 14.7355C14.212 15.0518 13.8318 15.2099 13.3876 15.2099H11.2477L9.67302 16.7644C9.51151 16.9125 9.33318 17.0269 9.13803 17.1076C8.94288 17.1884 8.74436 17.2288 8.54248 17.2288C8.3406 17.2288 8.14208 17.1884 7.94693 17.1076C7.75178 17.0269 7.57345 16.9125 7.41195 16.7644L5.83727 15.2099ZM6.52367 13.5949L8.54248 15.6137L10.5613 13.5949H13.3876V10.7686L15.4064 8.74976L13.3876 6.73095V3.90461H10.5613L8.54248 1.8858L6.52367 3.90461H3.69734V6.73095L1.67852 8.74976L3.69734 10.7686V13.5949H6.52367Z"
                              fill="#D0D6E5" style="transform: translate(5px, 5px);"></path>
                        </svg>
                       
                     </span>

                     Income Reports
                     &nbsp;
                     &nbsp;
                     &nbsp;
                     <i class="fas fa-angle-right show" style="color: #fff;"></i>
                     <i class="fas fa-angle-down hide" style="color: #fff;"></i>
                    </a>
                  <ul id="dropdownMenu2" style="display: none;">
                     <li ><a href="{{route('staking_income')}}">Staking Income</a></li>
                    <li ><a  href="{{route('binary_income')}}">Binary Income</a></li>
                    <li ><a  href="{{route('refferal_income')}}">Refferal Income</a></li>
                    <li ><a  href="{{route('level_income')}}">Level Income</a></li>
                    
                  </ul>
                </li>
              
              
               <li>
                  <a class="" href="{{route('reward')}}">
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                           width="29" height="29" viewBox="0 0 29 29" fill="none">
                           <rect x="0.0253906" y="0.0506592" width="28" height="28" rx="8" fill="#13307D"
                              style="text-align: center; display: flex; justify-content: center; align-items: center;">
                           </rect>
                           <path
                              d="M8.54248 10.7484L10.0768 11.677C10.2248 11.7712 10.3729 11.7679 10.5209 11.6669C10.669 11.566 10.7228 11.428 10.6824 11.2531L10.2787 9.49672L11.6514 8.30562C11.786 8.18449 11.8264 8.03981 11.7726 7.87157C11.7187 7.70334 11.5976 7.61249 11.4092 7.59903L9.61245 7.45772L8.90587 5.80229C8.83857 5.64079 8.71744 5.56004 8.54248 5.56004C8.36752 5.56004 8.24639 5.64079 8.17909 5.80229L7.47251 7.45772L5.67577 7.59903C5.48735 7.61249 5.36622 7.70334 5.31238 7.87157C5.25855 8.03981 5.29893 8.18449 5.43351 8.30562L6.8063 9.49672L6.40254 11.2531C6.36217 11.428 6.416 11.566 6.56405 11.6669C6.71209 11.7679 6.86014 11.7712 7.00819 11.677L8.54248 10.7484ZM5.83727 15.2099H3.69734C3.2532 15.2099 2.87299 15.0518 2.55671 14.7355C2.24043 14.4192 2.08229 14.039 2.08229 13.5949V11.455L0.527803 9.88029C0.379757 9.71879 0.265358 9.54046 0.184605 9.34531C0.103853 9.15015 0.0634766 8.95164 0.0634766 8.74976C0.0634766 8.54788 0.103853 8.34936 0.184605 8.15421C0.265358 7.95906 0.379757 7.78073 0.527803 7.61922L2.08229 6.04455V3.90461C2.08229 3.46047 2.24043 3.08026 2.55671 2.76398C2.87299 2.4477 3.2532 2.28956 3.69734 2.28956H5.83727L7.41195 0.735078C7.57345 0.587032 7.75178 0.472633 7.94693 0.391881C8.14208 0.311128 8.3406 0.270752 8.54248 0.270752C8.74436 0.270752 8.94288 0.311128 9.13803 0.391881C9.33318 0.472633 9.51151 0.587032 9.67302 0.735078L11.2477 2.28956H13.3876C13.8318 2.28956 14.212 2.4477 14.5283 2.76398C14.8445 3.08026 15.0027 3.46047 15.0027 3.90461V6.04455L16.5572 7.61922C16.7052 7.78073 16.8196 7.95906 16.9004 8.15421C16.9811 8.34936 17.0215 8.54788 17.0215 8.74976C17.0215 8.95164 16.9811 9.15015 16.9004 9.34531C16.8196 9.54046 16.7052 9.71879 16.5572 9.88029L15.0027 11.455V13.5949C15.0027 14.039 14.8445 14.4192 14.5283 14.7355C14.212 15.0518 13.8318 15.2099 13.3876 15.2099H11.2477L9.67302 16.7644C9.51151 16.9125 9.33318 17.0269 9.13803 17.1076C8.94288 17.1884 8.74436 17.2288 8.54248 17.2288C8.3406 17.2288 8.14208 17.1884 7.94693 17.1076C7.75178 17.0269 7.57345 16.9125 7.41195 16.7644L5.83727 15.2099ZM6.52367 13.5949L8.54248 15.6137L10.5613 13.5949H13.3876V10.7686L15.4064 8.74976L13.3876 6.73095V3.90461H10.5613L8.54248 1.8858L6.52367 3.90461H3.69734V6.73095L1.67852 8.74976L3.69734 10.7686V13.5949H6.52367Z"
                              fill="#D0D6E5" style="transform: translate(5px, 5px);"></path>
                        </svg>
                     </span>
                     Rewards Income
                     
                 
                 
                  </a>
               </li>
               <li>
                  <a class="" href="{{route('transaction')}}">
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                           width="29" height="29" viewBox="0 0 29 29" fill="none">
                           <rect x="0.0253906" y="0.658691" width="28" height="28" rx="8" fill="#13307D">
                           </rect>
                           <path
                              d="M14.0255 23.6294C18.972 23.6294 22.9961 19.6053 22.9961 14.6588C22.9961 9.71228 18.972 5.68809 14.0255 5.68809C11.7647 5.68809 9.65864 6.52326 8.02687 8.00396V6.3425C8.02687 6.25656 8.00995 6.17147 7.97706 6.09207C7.94417 6.01267 7.89597 5.94053 7.8352 5.87976C7.77443 5.81899 7.70229 5.77079 7.62289 5.7379C7.54349 5.70501 7.45839 5.68809 7.37246 5.68809C7.28652 5.68809 7.20142 5.70501 7.12202 5.7379C7.04262 5.77079 6.97048 5.81899 6.90971 5.87976C6.84894 5.94053 6.80074 6.01267 6.76785 6.09207C6.73496 6.17147 6.71804 6.25656 6.71804 6.3425V9.66901C6.71804 9.84257 6.78699 10.009 6.90971 10.1318C7.03244 10.2545 7.19889 10.3234 7.37246 10.3234H10.699C10.8725 10.3234 11.039 10.2545 11.1617 10.1318C11.2844 10.009 11.3534 9.84257 11.3534 9.66901C11.3534 9.49545 11.2844 9.32899 11.1617 9.20627C11.039 9.08354 10.8725 9.01459 10.699 9.01459H8.85665C10.2565 7.72378 12.0741 6.99692 14.0255 6.99692C18.2502 6.99692 21.6873 10.4341 21.6873 14.6588C21.6873 18.8835 18.2502 22.3206 14.0255 22.3206C9.80078 22.3206 6.36362 18.8835 6.36362 14.6588C6.36362 14.4852 6.29467 14.3188 6.17195 14.196C6.04922 14.0733 5.88277 14.0043 5.7092 14.0043C5.53564 14.0043 5.36919 14.0733 5.24646 14.196C5.12373 14.3188 5.05479 14.4852 5.05479 14.6588C5.05479 19.6053 9.07898 23.6294 14.0255 23.6294ZM13.471 14.0043C13.2204 14.0043 13.0166 13.8004 13.0166 13.5499C13.0166 13.2995 13.2204 13.0955 13.471 13.0955H15.6887C15.8623 13.0955 16.0287 13.0266 16.1515 12.9038C16.2742 12.7811 16.3431 12.6147 16.3431 12.4411C16.3431 12.2675 16.2742 12.1011 16.1515 11.9784C16.0287 11.8556 15.8623 11.7867 15.6887 11.7867H14.6799V11.3323C14.6799 11.2463 14.663 11.1612 14.6301 11.0818C14.5972 11.0024 14.549 10.9303 14.4882 10.8695C14.4274 10.8088 14.3553 10.7605 14.2759 10.7277C14.1965 10.6948 14.1114 10.6778 14.0255 10.6778C13.9395 10.6778 13.8544 10.6948 13.775 10.7277C13.6956 10.7605 13.6235 10.8088 13.5627 10.8695C13.502 10.9303 13.4538 11.0024 13.4209 11.0818C13.388 11.1612 13.371 11.2463 13.371 11.3323V11.7895C12.445 11.8415 11.7078 12.6111 11.7078 13.5499C11.7078 14.5224 12.4986 15.3132 13.471 15.3132H14.5799C14.8305 15.3132 15.0343 15.5171 15.0343 15.7676C15.0343 16.0181 14.8305 16.222 14.5799 16.222H12.3622C12.1887 16.222 12.0222 16.291 11.8995 16.4137C11.7767 16.5364 11.7078 16.7029 11.7078 16.8764C11.7078 17.05 11.7767 17.2165 11.8995 17.3392C12.0222 17.4619 12.1887 17.5309 12.3622 17.5309H13.371V17.9853C13.371 18.0712 13.388 18.1563 13.4209 18.2357C13.4538 18.3151 13.502 18.3872 13.5627 18.448C13.6235 18.5088 13.6956 18.557 13.775 18.5899C13.8544 18.6228 13.9395 18.6397 14.0255 18.6397C14.1114 18.6397 14.1965 18.6228 14.2759 18.5899C14.3553 18.557 14.4274 18.5088 14.4882 18.448C14.549 18.3872 14.5972 18.3151 14.6301 18.2357C14.663 18.1563 14.6799 18.0712 14.6799 17.9853V17.5281C15.6059 17.4761 16.3431 16.7065 16.3431 15.7676C16.3431 14.7952 15.5523 14.0043 14.5799 14.0043H13.471Z"
                              fill="currentColor" stroke="currentColor" stroke-width="0.2"></path>
                        </svg>
                     </span>
                     Transaction History
                  </a>
               </li>
              
               <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  {{--         
                  <x-dropdown-link :href="route('logout')"
                     onclick="event.preventDefault();
                     this.closest('form').submit();">
                     {{ __('Log Out') }}
                  </x-dropdown-link>
                  --}}
                  <a class="d-sm-none logout_btn" href="route('logout')"
                     onclick="event.preventDefault();
                     this.closest('form').submit();">
                     <span>
                        <svg
                           xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16"
                           fill="none">
                           <path
                              d="M10.2023 8.66642C9.8338 8.66642 9.53592 8.96504 9.53592 9.33283V11.9987C9.53592 12.3659 9.2373 12.6651 8.86939 12.6651H6.87004V2.66836C6.87004 2.0992 6.5075 1.59071 5.96236 1.40142L5.76505 1.33541H8.86939C9.2373 1.33541 9.53592 1.63463 9.53592 2.00195V4.0013C9.53592 4.36909 9.8338 4.66771 10.2023 4.66771C10.5709 4.66771 10.8687 4.36909 10.8687 4.0013V2.00195C10.8687 0.899648 9.97169 0.00259472 8.86939 0.00259472H1.70508C1.67971 0.00259472 1.65847 0.0139348 1.63382 0.0172462C1.60171 0.0145596 1.57109 0.00256348 1.53851 0.00256348C0.803404 0.00259472 0.205566 0.600339 0.205566 1.33544V13.3316C0.205566 13.9007 0.568105 14.4092 1.11324 14.5985L5.12398 15.9354C5.25993 15.9774 5.39514 15.9974 5.53719 15.9974C6.27229 15.9974 6.87 15.3996 6.87 14.6645V13.9981H8.86936C9.97166 13.9981 10.8687 13.101 10.8687 11.9987V9.33283C10.8687 8.96504 10.5708 8.66642 10.2023 8.66642H10.2023Z"
                              fill="#F5DA76"></path>
                           <path
                              d="M16.0054 6.19583L13.3395 3.53007C13.2463 3.4368 13.1276 3.37327 12.9983 3.3475C12.869 3.32174 12.735 3.33491 12.6132 3.38534C12.3646 3.48871 12.2019 3.73191 12.2019 4.00123V6.00059H9.53616C9.16825 6.00059 8.86963 6.29908 8.86963 6.667C8.86963 7.03491 9.16825 7.3334 9.53616 7.3334H12.2019V9.33276C12.2019 9.60208 12.3646 9.84528 12.6132 9.94865C12.735 9.99907 12.869 10.0122 12.9983 9.9865C13.1276 9.96075 13.2463 9.89725 13.3395 9.80401L16.0054 7.13816C16.2659 6.87761 16.2659 6.45638 16.0054 6.19583Z"
                              fill="#F5DA76"></path>
                        </svg>
                        Logout
                     </span>
                  </a>
               </form>
            </ul>
            <hr>
         </div>
         <div class="Sidebar_social_links__M6FEk"></div>
      </aside>
      <header class="Header_header__aT8IF " style="transform: translateY(0px) translateZ(0px);">
         <div class="Header_header_in__IiDI4">
            <div class="Header_header_links__exsMP ">
               <div class="d-xl-none me-sm-4 Header_header_logo__NiLy3 "><img class="d-lg-block"
                  src="{{asset('assets/media/logo.png')}}" alt="logo"></div>
               <div class="WalletAddress_wallet_add__7aYu3 d-md-flex WalletAddress_wallet_add__inner__VV9I7">
                 

                  
                     <div>
                        <w3m-core-button class="btntop desktop" balance="show"
                           icon="show"></w3m-core-button> 

                         
                        
                        </div>
                  
               </div>
            </div>
            {{-- <form method="POST" action="{{ route('logout') }}">
               @csrf
               <x-dropdown-link :href="route('logout')"
                  onclick="event.preventDefault();
                  this.closest('form').submit();">
                  {{ __('Log Out') }}
               </x-dropdown-link>
            </form> --}}
            
            <div class=" Header_header_in_right__zWSLA">
               <form method="POST" action="{{ route('logout') }}">
                  @csrf
               <a class="d-md-block" href="route('logout')"
               onclick="event.preventDefault();
               this.closest('form').submit();">
                  <span>
                     <svg
                        xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16"
                        fill="none">
                        <path
                           d="M10.2023 8.66642C9.8338 8.66642 9.53592 8.96504 9.53592 9.33283V11.9987C9.53592 12.3659 9.2373 12.6651 8.86939 12.6651H6.87004V2.66836C6.87004 2.0992 6.5075 1.59071 5.96236 1.40142L5.76505 1.33541H8.86939C9.2373 1.33541 9.53592 1.63463 9.53592 2.00195V4.0013C9.53592 4.36909 9.8338 4.66771 10.2023 4.66771C10.5709 4.66771 10.8687 4.36909 10.8687 4.0013V2.00195C10.8687 0.899648 9.97169 0.00259472 8.86939 0.00259472H1.70508C1.67971 0.00259472 1.65847 0.0139348 1.63382 0.0172462C1.60171 0.0145596 1.57109 0.00256348 1.53851 0.00256348C0.803404 0.00259472 0.205566 0.600339 0.205566 1.33544V13.3316C0.205566 13.9007 0.568105 14.4092 1.11324 14.5985L5.12398 15.9354C5.25993 15.9774 5.39514 15.9974 5.53719 15.9974C6.27229 15.9974 6.87 15.3996 6.87 14.6645V13.9981H8.86936C9.97166 13.9981 10.8687 13.101 10.8687 11.9987V9.33283C10.8687 8.96504 10.5708 8.66642 10.2023 8.66642H10.2023Z"
                           fill="#F5DA76"></path>
                        <path
                           d="M16.0054 6.19583L13.3395 3.53007C13.2463 3.4368 13.1276 3.37327 12.9983 3.3475C12.869 3.32174 12.735 3.33491 12.6132 3.38534C12.3646 3.48871 12.2019 3.73191 12.2019 4.00123V6.00059H9.53616C9.16825 6.00059 8.86963 6.29908 8.86963 6.667C8.86963 7.03491 9.16825 7.3334 9.53616 7.3334H12.2019V9.33276C12.2019 9.60208 12.3646 9.84528 12.6132 9.94865C12.735 9.99907 12.869 10.0122 12.9983 9.9865C13.1276 9.96075 13.2463 9.89725 13.3395 9.80401L16.0054 7.13816C16.2659 6.87761 16.2659 6.45638 16.0054 6.19583Z"
                           fill="#F5DA76"></path>
                     </svg>
                     Logout
                  </span>
               </a>
            </form>
               <button
                  class="Header_toggler__cHONB  d-xl-none ms-3" id="toggleButton"><span></span><span></span><span></span></button>
            </div>
           
         </div>
      </header>
      @if (session('success'))
    <script>
        Swal.fire({
                   title: 'Success',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    timer: 5000, // Set timer for 2 seconds
                    timerProgressBar: true,
                    showConfirmButton: false 
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'error',
            text: '{{ session('error') }}',
            timer: 5000, 
            timerProgressBar: true,
            showConfirmButton: false 
        });
    </script>
@endif
<script>
   // Get the button and sidebar elements
const toggleButton = document.getElementById('toggleButton');
const sidebar = document.getElementById('sidebar');

// Add click event listener
toggleButton.addEventListener('click', () => {
  // Toggle the 'visible' class
  sidebar.classList.toggle('visible');
});
</script>
<script>
function toggleDropdown(id) {
  const dropdown = document.getElementById(id);
  if (dropdown.style.display === "block") {
    dropdown.style.display = "none";
  } else {
    dropdown.style.display = "block";
  }
  const btn = event.currentTarget;
         const angleRight = btn.querySelector('.fa-angle-right');
         const angleDown = btn.querySelector('.fa-angle-down');

         // Toggle visibility of icons
         angleRight.classList.toggle('hide');
         angleDown.classList.toggle('hide');

         // Optionally toggle dropdown menu (if implemented)
         if (dropdown) {
            dropdown.classList.toggle('show');
         }
}

function toggle(id) {
  const dropdown = document.getElementById(id);
  if (dropdown.style.display === "block") {
    dropdown.style.display = "none";
  } else {
    dropdown.style.display = "block";
  }
}

</script>
<script>
   // Get the span element by its ID
   var spanElement = document.getElementById('user_dash_address');
   var is_login = document.getElementById('is_login');
   
   // Get the value attribute of the span
   var user_dash_address = spanElement.getAttribute('value');
   var is_login = is_login.getAttribute('value');
   
   // Log the value to the console
   console.log('is_login',is_login);  
   console.log('user_dash_address',user_dash_address);  
</script>