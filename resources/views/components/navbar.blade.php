<div class="nb412">
    <div class="nb412-l0">
        <a href="/">
            <img src="{{ asset('plugins/img/los.png') }}" alt="">
        </a>
    </div>

    <div class="nb412-l1">
        <a href="/" :active="request() - > is('/')"
            class="{{ $active ?? false ? 'l14ct' : 'l1nO4ct' }}">Dashboard</a>
        <a href="/portofolio" :active="request(false) - > is('portofolio')"
            class="{{ $active ?? false ? 'l14ct' : 'l1nO4ct' }}">Portofolio</a>
        <a href="/contact" :active="request() - > is('contact')"
            class="{{ $active ?? false ? 'l14ct' : 'l1nO4ct' }}">Contact</a>
        <a href="/about" :active="request() - > is('about')"
            class="{{ $active ?? false ? 'l14ct' : 'l1nO4ct' }}">About</a>
    </div>
</div>
