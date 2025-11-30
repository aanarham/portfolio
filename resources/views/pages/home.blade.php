@extends('layouts.app')

@section('title', 'Beranda - Arham Nugraha')

@section('content')
<div class="home-content">
    <div class="home-text">
        <h2 class="main-heading">Saya adalah Supervisor</h2>
        <p class="sub-text">100% Portfolio Website | Dibuat oleh Arham Nugraha</p>
        <a href="{{ route('work') }}" class="btn-portfolio">LIHAT PORTOFOLIO <span>→</span></a>
    </div>
    <div class="home-image">
        <img src="{{ asset('images/main-image.jpg') }}" alt="Arham Nugraha - Supervisor PT Valor Inspiration Pesona" onerror="this.src='https://via.placeholder.com/450x600?text=Arham+Nugraha'">
    </div>
    <div class="pagination-dots">
        <span class="dot active"></span>
        <span class="dot"></span>
    </div>
</div>
@endsection

