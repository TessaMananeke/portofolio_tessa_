@extends('layouts.app')

@section('content')
<section class="projects" id="projects">
    <div class="container">
        <div class="section-title fade-in">
            <h2>My Projects</h2>
        </div>
        
        <div class="projects-grid" id="projects-container">
            <!-- Project 1 -->
            <div class="project-card fade-in">
                <div class="project-image">
                    <img src="{{ asset('images/project1.png')}}" alt="Simple-Web">
                </div>
                <div class="project-info">
                    <h3 class="project-title">Simple Web</h3>
                    <p class="project-description">
                        A website with a simple yet neat look, featuring a main page, information about, and contact.
                    </p>
                    <div class="project-tech">
                        <span>HTML</span>
                        <span>CSS</span>
                    </div>
                    <div class="project-links">
                        <a href="https://tessamananeke.github.io/Web-Sederhana/" title="Live Demo"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                        <a href="https://github.com/TessaMananeke/Web-Sederhana.git" title="View Code"><i class="fab fa-github"></i> View Code</a>
                    </div>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="project-card fade-in">
                <div class="project-image">
                    <img src="{{ asset('images/project2.jpg')}}" alt="Recipe Website">
                </div>
                <div class="project-info">
                    <h3 class="project-title">MasakAsYik - Recipe Website</h3>
                    <p class="project-description">
                          Cookery recipe website with login, add recipe, and recipe list display features.
                    </p>
                    <div class="project-tech">
                        <span>HTML</span>
                        <span>CSS</span>
                    </div>
                    <div class="project-links">
                        <a href="https://tessamananeke.github.io/Web-Resep/" title="Live Demo"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                        <a href="https://github.com/TessaMananeke/Web-Resep.git" title="View Code"><i class="fab fa-github"></i> View Code</a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card fade-in">
                <div class="project-image">
                    <img src="{{ asset('images/project3.png')}}" alt="Fruit Game">
                </div>
                <div class="project-info">
                    <h3 class="project-title">Agile Fruit Game</h3>
                    <p class="project-description">
                          A simple JavaScript-based game where players need to catch fruits quickly. Made to train basic logic and user interaction.
                    </p>
                    <div class="project-tech">
                        <span>JavaScript</span>
                        <span>HTML Canvas</span>
                        <span>Game Logic</span>
                    </div>
                    <div class="project-links">
                        <a href="https://tessamananeke.github.io/GameBuah_Gesit/" title="Live Demo"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                        <a href="https://github.com/TessaMananeke/GameBuah_Gesit.git" title="View Code"><i class="fab fa-github"></i> View Code</a>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="project-card fade-in">
                <div class="project-image">
                    <img src="{{ asset('images/project4.png')}}" alt="Static Website">
                </div>
                <div class="project-info">
                    <h3 class="project-title">News Portal - Static Website</h3>
                    <p class="project-description">
                               Static news portal-style website with responsive display and modern layout. Content is displayed in the form of article cards.
                    </p>
                    <div class="project-tech">
                        <span>HTML</span>
                        <span>CSS</span>
                    </div>
                    <div class="project-links">
                        <a href="https://tessamananeke.github.io/Web-Berita/" title="Live Demo"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                        <a href="https://github.com/TessaMananeke/Web-Berita.git" title="View Code"><i class="fab fa-github"></i> View Code</a>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="project-card fade-in">
                <div class="project-image">
                    <img src="{{ asset('images/project5.png')}}" alt="Dynamic Web">
                </div>
                <div class="project-info">
                    <h3 class="project-title">To-Do List - Dynamic Web</h3>
                    <p class="project-description">
                              A simple to-do list application that allows users to add, edit and delete to-do lists. Stored using a local database.
                    </p>
                    <div class="project-tech">
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>CRUD</span>
                    </div>
                    <div class="project-links">
                        <a href="#" title="Live Demo"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                        <a href="#" title="https://github.com/TessaMananeke/Web-Todo_List.git"><i class="fab fa-github"></i> View Code</a>
                    </div>
   </div>
    </div>
</section>
@endsection