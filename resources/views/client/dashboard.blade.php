<x-layout>
    {{-- Title Bar --}}
    <x-slot name='ttl'>{{ $ttl_web }}</x-slot>

    {{-- Header Section --}}
    <x-slot name='ttl_head'>{{ $title }}</x-slot>

    <x-slot name='head_carousel'>{{ $title }}</x-slot>

    @section('css_plus')
        <link rel="stylesheet" href="{{ asset('plugins/css/dashboard.css') }}">
    @endsection

    {{-- Content Section --}}
    @section('ctn')
        {{-- Reason Session --}}
        <div class="c0T3n-12seN">
            {{-- Card Content --}}
            <div class="c0T3n-12seN-c4rD">
                <i class="bi bi-award"></i>
                <h3>Pengalaman</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum animi fugit quae quod deleniti modi
                    sapiente repellendus nihil a iste!</p>
            </div>

            {{-- Card Content --}}
            <div class="c0T3n-12seN-c4rD">
                <i class="bi bi-trophy"></i>
                <h3>Keunggulan</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, consequuntur!</p>
            </div>

            {{-- Card Content --}}
            <div class="c0T3n-12seN-c4rD">
                <i class="bi bi-rocket"></i>
                <h3>Pengalaman</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat consectetur iusto reiciendis sint
                    mollitia, sit, asperiores nesciunt ab maxime, eos molestiae. Beatae, est. Similique, provident.</p>
            </div>
        </div>

        {{-- Excess Session --}}
        <div class="eXc35">
            {{-- Image Excess --}}
            <div class="eXc35-1mg">
                <img src="{{ asset('plugins/img/about.jpg') }}" alt="Foto Tentang Kami">
            </div>

            {{-- Description Excess --}}
            <div class="eXc35-m4iN">
                <span><i class="bi bi-asterisk"></i> Tentang Kami</span>
                <h3>PortoSpace menampilkan berbagai portofolio.</h3>
                <p>PortoSpace merupakan perangkat lunak penampil portofolio yang tengah dikerjakan maupun telah usai dan
                    beberapa aplikasi terkait dunia teknologi.</p> {{-- Terdapat berbagai aplikasi yang bisa dijadikan acuan
                        untuk mengembangkan diri dalam bidang teknologi. --}}

                {{-- List Excess --}}
                <div class="Li5t">
                    <div class="Li5t-l0">
                        <ul>
                            <li><i class="bi bi-check-lg"></i> Blog</li>
                            <li><i class="bi bi-check-lg"></i> Travel</li>
                            <li><i class="bi bi-check-lg"></i> Konstruksi</li>
                            <li><i class="bi bi-check-lg"></i> Perpustakaan</li>
                        </ul>
                    </div>
                    <div class="Li5t-l1">
                        <ul>
                            <li><i class="bi bi-check-lg"></i> Penjualan</li>
                            <li><i class="bi bi-check-lg"></i> Pemesanan Hotel</li>
                            <li><i class="bi bi-check-lg"></i> Film</li>
                        </ul>
                    </div>
                </div>
                <a href="#"><i class="bi bi-whatsapp"></i> Kontak Kami</a>
            </div>
        </div>

        {{-- Portofolio Session --}}
        <div class="p0rtOx">
            <div class="p0rtOx-m4iN">
                {{-- Title --}}
                <div class="Mp0rtOxTT1">
                    <h2>PORTOFOLIO KAMI</h2>
                </div>

                {{-- Content Portofolio Card --}}
                <div class="Mp0rtOxC0nt">
                    <a class="C4rA" href="#">
                        <div class="Mp0rC4rd">
                            <div class="C4rd1m9">
                                <img src="{{ asset('plugins/img/ss1.png') }}" alt="">
                            </div>
                            <div class="C4rd4Esc">
                                <p>Bahasa : Laravel, PHP, JavaScript</p>
                                <h3>Nama Project</h3>
                            </div>
                        </div>
                    </a>

                    <a class="C4rA" href="#">
                        <div class="Mp0rC4rd">
                            <div class="C4rd1m9">
                                <img src="{{ asset('plugins/img/ss1.png') }}" alt="">
                            </div>
                            <div class="C4rd4Esc">
                                <p>Bahasa : Laravel, PHP, JavaScript</p>
                                <h3>Nama jaijfa ejfaue fhaiefj aoefh Project</h3>
                            </div>
                        </div>
                    </a>

                    <a class="C4rA" href="#">
                        <div class="Mp0rC4rd">
                            <div class="C4rd1m9">
                                <img src="{{ asset('plugins/img/ss1.png') }}" alt="">
                            </div>
                            <div class="C4rd4Esc">
                                <p>Bahasa : Laravel, PHP, JavaScript</p>
                                <h3>Nama Project</h3>
                            </div>
                        </div>
                    </a>

                    <a class="C4rA" href="#">
                        <div class="Mp0rC4rd">
                            <div class="C4rd1m9">
                                <img src="{{ asset('plugins/img/ss1.png') }}" alt="">
                            </div>
                            <div class="C4rd4Esc">
                                <p>Bahasa : Laravel, PHP, JavaScript</p>
                                <h3>Nama caioeufnaeufn aifej Project</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        {{-- Services Session --}}
        <div class="ser51s3">
            <div class="row serwrap">
                <div class="col-12 col-md-6 col-lg-4">
                    <a style="text-decoration: none; color: var(--fclr3)" href="">
                        <div class="sercard">
                            <div class="text-center">
                                <i class="bi bi-globe"></i>
                                <h1>Web Developer</h1>
                            </div>
                            <div class="sercard-body">
                                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ipsum
                                    voluptas nobis.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <a style="text-decoration: none; color: var(--fclr3)" href="">
                        <div class="sercard">
                            <div class="text-center">
                                <i class="bi bi-globe"></i>
                                <h1>Web Developer</h1>
                            </div>
                            <div class="sercard-body">
                                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ipsum
                                    voluptas nobis.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <a style="text-decoration: none; color: var(--fclr3)" href="">
                        <div class="sercard">
                            <div class="text-center">
                                <i class="bi bi-globe"></i>
                                <h1>Web Developer</h1>
                            </div>
                            <div class="sercard-body">
                                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ipsum
                                    voluptas nobis.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @endsection
</x-layout>
