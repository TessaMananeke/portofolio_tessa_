@extends('layouts.app')

@section('content')
<section class="about" id="about">
    <div class="container">
        <div class="section-title fade-in">
            <h2>About Me</h2>
        </div>
        
        <div class="about-content">
            <div class="about-text fade-in">
                <p>I am a 4th semester Informatics student who is focusing on developing my skills in web development and interface design. I enjoy creating websites that are neat, lightweight, and easy to use.</p>
                <p>I believe that appearance and user experience are important parts of a website. Therefore, I always try to balance function and aesthetics in every project.</p>
                <p>Outside of coding, I love designing in Figma, looking at UI/UX references, and trying new technologies to broaden my horizons.</p>
                
                <p>My Skills : </p>
                <ul class="skills-list">
                    <li>HTML & CSS</li>
                    <li>JavaScript</li>
                    <li>PHP & MySQL</li>
                    <li>Figma</li>
                    <li>Visual Studio Code</li>
                </ul>
            </div>
            
            <div class="about-image fade-in delay-1">
                <img src="{{ secure_asset('images/aboutme.jpg')}}" alt="Profile Photo">
            </div>
        </div>
    </div>
</section>
@endsection