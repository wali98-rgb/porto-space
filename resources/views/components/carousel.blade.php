<div id="carouselExampleIndicators" class="carousel slide bg-secondary" data-bs-ride="carousel">
    <div class="carousel-ttl">
        <div class="carousel-ttl-main">
            <h1>{{ $slot }}</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga placeat corporis eveniet rem facilis
                iure,
                numquam ratione laborum possimus nostrum nemo libero necessitatibus magni culpa accusamus architecto
                similique natus porro!</p>
        </div>
    </div>
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1522199755839-a2bacb67c546?q=80&w=872&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="d-block" style="width: 100%; height: 100vh; object-fit: cover" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1480506132288-68f7705954bd?q=80&w=920&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="d-block" style="width: 100%; height: 100vh; object-fit: cover" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?q=80&w=869&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="d-block" style="width: 100%; height: 100vh; object-fit: cover" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<script src="{{ mix('js/app.js') }}"></script>
