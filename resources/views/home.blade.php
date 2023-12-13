@extends('layouts.main')
       
    @section('container')   
    <main>
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/gambarraiden.jpg" class="d-block w-100" style="height: 300px" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/gambarraiden.jpg" class="d-block w-100" style="height: 300px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/gambarraiden.jpg" class="d-block w-100" style="height: 300px" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <div class="container py-4 ">
        <div class="p-5 mb-4 bg-dark text-white rounded-3">
          <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Ini halaman home</h1>
            <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
            <button class="btn btn-outline-light btn-lg" type="button">Example button</button>
          </div>
        </div>
      </div>
    </main>
    @endsection

