<?php
    $path = basename(Request::url());
?>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard 
                </a>
                <div class="sb-sidenav-menu-heading">Menu</div>
                <a class="nav-link {{ $path == 'home' ? 'text-white' : ''}}" href="{{url('/admin/home')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-home {{ $path == 'home' ? 'text-white' : ''}}"></i></div>
                    Home
                </a>
                <a class="nav-link {{ $path == 'blog' ? 'text-white' : ''}}" href="{{url('/admin/blog')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-blog {{ $path == 'blog' ? 'text-white' : ''}}"></i></div>
                    Blog
                </a>
                <a class="nav-link {{ $path == 'about' ? 'text-white' : ''}}" href="{{url('/admin/about')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-person {{ $path == 'about' ? 'text-white' : ''}}"></i></div>
                    About
                </a>
                <a class="nav-link {{ $path == 'certificate' ? 'text-white' : ''}}" href="{{url('/admin/certificate')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-certificate {{ $path == 'certificate' ? 'text-white' : ''}}"></i></div>
                    Certificates
                </a>
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-shield"></i></div>
                    Projects
                </a>
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-address-book"></i></div>
                    Contact
                </a>
                <a class="nav-link {{ $path == 'social' ? 'text-white' : ''}}" href="{{url('/admin/social')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-share-nodes {{ $path == 'social' ? 'text-white' : ''}}"></i></div>
                    Social
                </a>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small text-center">2024</div>
            Created By Sohanur
        </div>
    </nav>
</div>