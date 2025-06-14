@extends('layouts.app')

@section('content')
<section class="hero" id="home">
    <div class="hero-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
    </div>
    
    <!-- Floating 3D Cube -->
    <div class="floating-cube">
        <div class="cube-face front"><i class="fas fa-code"></i></div>
        <div class="cube-face back"><i class="fas fa-laptop-code"></i></div>
        <div class="cube-face right"><i class="fas fa-paint-brush"></i></div>
        <div class="cube-face left"><i class="fas fa-mobile-alt"></i></div>
        <div class="cube-face top"><i class="fas fa-lightbulb"></i></div>
        <div class="cube-face bottom"><i class="fas fa-rocket"></i></div>
    </div>
    
    <div class="container">
        <div class="hero-content">
            <p class="hero-subtitle fade-in">Hello, I'm</p>
            <h1 class="hero-title fade-in delay-1">Tessa Mananeke</h1>
            <h2 class="hero-title fade-in delay-1" style="font-size: 48px; color: var(--text-secondary);">Informatics Student</h2>
            <p class="hero-description fade-in delay-2">I combine technology and creativity to create websites that are simple, interactive and easy to use.</p>
            <a href="projects" class="cta-button fade-in delay-3">
                <span>Explore My Work</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
@endsection