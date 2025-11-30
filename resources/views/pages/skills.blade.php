@extends('layouts.app')

@section('title', 'Keahlian - Arham Nugraha')

@section('content')
<div class="page-content">
    <h1 class="page-title">Keahlian</h1>
    
    <div class="skills-content">
        <div class="skill-category">
            <h3>Keahlian Profesional</h3>
            <ul class="skills-list">
                <li>
                    <span class="skill-name">Supervisi & Manajemen</span>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 90%"></div>
                    </div>
                </li>
                <li>
                    <span class="skill-name">Sales & Marketing</span>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 85%"></div>
                    </div>
                </li>
                <li>
                    <span class="skill-name">Komunikasi</span>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 88%"></div>
                    </div>
                </li>
                <li>
                    <span class="skill-name">Manajemen Tim</span>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 87%"></div>
                    </div>
                </li>
            </ul>
        </div>
        
        <div class="skill-category">
            <h3>Hobby saya</h3>
            <ul class="skills-list">
                <li>
                    <span class="skill-name">Bermusik</span>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 80%"></div>
                    </div>
                </li>
                <li>
                    <span class="skill-name">Bernyanyi</span>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 82%"></div>
                    </div>
                </li>
                <li>
                    <span class="skill-name">Futsal</span>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 75%"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

