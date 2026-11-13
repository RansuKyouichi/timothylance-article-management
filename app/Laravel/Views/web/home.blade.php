
@extends('web._layouts.main')

@section('content')
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <span class="section-label">
                    WELCOME TO AMS - Article and Media Site
                </span>

                <h1 class="hero-title editorial-heading mt-3">
                    Lorem
                    <span class="text-accent">Ipsum.</span>
                </h1>

                <p class="hero-description mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, nisl eget ultricies tincidunt, nunc nisl aliquam nisl, eget ultricies nunc nisl eget nunc.
                </p>

                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="{{ route('web.articles') }}"
                       class="btn btn-dark btn-lg">
                        Explore Articles
                        <span class="ms-2">&rarr;</span>
                    </a>

                    <a href="{{ route('web.about') }}"
                       class="btn btn-outline-dark btn-lg">
                        About Us
                    </a>
                </div>

                <div class="hero-note mt-5">
                    <span class="hero-note-line"></span>
                    <span>READ. LEARN. GROW.</span>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-image-wrapper">

                    <img
                        src="{{ $articles[0]['image'] }}"
                        alt="Featured article"
                        class="img-fluid hero-image"
                    >

                    <div class="hero-image-caption">
                        <span>FEATURED STORY</span>
                        <h5>
                            {{ $articles[0]['title'] }}
                        </h5>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="featured-section section-padding">
    <div class="container">

        <div class="section-header mb-4">
            <div>
                <span class="section-label">EDITOR'S PICK</span>
                <h2 class="editorial-heading section-title mt-2">
                    Featured Story
                </h2>
            </div>
        </div>

        <div class="featured-card">
            <div class="row g-0 align-items-center">

                <div class="col-lg-6">
                    <img
                        src="{{ $articles[0]['image'] }}"
                        alt="{{ $articles[0]['title'] }}"
                        class="featured-card-image"
                    >
                </div>

                <div class="col-lg-6">
                    <div class="featured-card-content">

                        <span class="article-category">
                            {{ $articles[0]['category'] }}
                        </span>

                        <h3 class="editorial-heading featured-title mt-3">
                            {{ $articles[0]['title'] }}
                        </h3>

                        <p class="article-excerpt mt-3">
                            {{ $articles[0]['excerpt'] }}
                        </p>

                        <div class="article-meta mt-4">
                            By {{ $articles[0]['author'] }}
                            <span class="mx-2">·</span>
                            {{ $articles[0]['date'] }}
                        </div>

                        <a href="{{ route('web.article', ['id' => $articles[0]['id']]) }}"
                           class="read-more-link mt-4 d-inline-block">
                            Read Full Story &rarr;
                        </a>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<section class="latest-section section-padding">
    <div class="container">

        <div class="d-flex flex-column flex-md-row
                    justify-content-between align-items-md-end mb-5">

            <div>
                <span class="section-label">FRESH FROM THE BLOG</span>

                <h2 class="editorial-heading section-title mt-2">
                    Latest Stories
                </h2>

                <p class="section-description mb-0">
                    Explore our latest articles and discoveries.
                </p>
            </div>

            <a href="{{ route('web.articles') }}"
               class="view-all-link mt-3 mt-md-0">
                View All Articles &rarr;
            </a>

        </div>

        <div class="row g-4">

            @foreach(array_slice($articles, 1, 3) as $article) 

                <div class="col-md-6 col-lg-4">

                    <article class="article-card h-100">

                        <a href="{{ route('web.article', ['id' => $article['id']]) }}">
                            <div class="article-image-wrapper">
                                <img
                                    src="{{ $article['image'] }}"
                                    alt="{{ $article['title'] }}"
                                    class="article-image"
                                    loading="lazy"
                                >
                                <span class="image-overlay">
                                    <i class="bi bi-arrow-up-right"></i>
                                </span>
                            </div>
                        </a>

                        <div class="article-card-body">

                            <span class="article-category">
                                {{ $article['category'] }}
                            </span>

                            <h3 class="article-card-title mt-2">
                                <a href="{{ route('web.article', ['id' => $article['id']]) }}">
                                    {{ $article['title'] }}
                                </a>
                            </h3>

                            <p class="article-excerpt mt-2">
                                {{ $article['excerpt'] }}
                            </p>

                            <div class="article-card-footer">
                                <a href="{{ route('web.article', ['id' => $article['id']]) }}"class="article-read-more">
                                     Read Article
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>

                        </div>

                    </article>

                </div>

            @endforeach

        </div>

    </div>
</section>

<section class="newsletter-section">
    <div class="container">

        <div class="newsletter-content text-center">

            <span class="section-label">
                STAY CONNECTED
            </span>

            <h2 class="editorial-heading mt-3">
                A Little Inspiration,
                <span class="text-accent">Delivered.</span>
            </h2>

            <p class="newsletter-description mt-3">
                Discover fresh perspectives and meaningful
                stories whenever you visit.
            </p>

            <a href="{{ route('web.articles') }}"
               class="btn btn-dark mt-3">
                Start Reading &rarr;
            </a>

        </div>

    </div>
</section>

@endsection

@section('page-styles')
<style>
    .hero-image-wrapper {
    position: relative !important;
    width: 100%;
    height: 480px;
    overflow: hidden;
    border-radius: 8px;
    }

    .hero-image-wrapper img.hero-image {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .hero-image-caption {
        position: absolute !important;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 2;
        padding: 35px 25px 25px;
        color: #FFFFFF;
        background: linear-gradient(
            to bottom,
            transparent,
            rgba(0, 0, 0, 0.85)
        );
    }

    .hero-image-caption h5 {
        color: #FFFFFF;
        margin-bottom: 0;
    }

    .featured-card {
    width: 100%;
    overflow: hidden;
    background-color: #FFFFFF;
    border: 1px solid var(--border-color);
    border-radius: 8px;
    }

    .featured-card .row {
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
    }

    .featured-card .row > .col-lg-6 {
        flex: 0 0 50%;
        width: 50%;
        max-width: 50%;
    }

    .featured-card-image {
        display: block;
        width: 100%;
        height: 100%;
        min-height: 430px;
        max-height: 430px;
        object-fit: cover;
        object-position: center;
    }

    .featured-card-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
        min-height: 430px;
        padding: 40px;
        background-color: #FFFFFF;
    }

    .featured-title {
        color: var(--primary-color);
    }

    .featured-card-content .article-excerpt {
        max-width: 450px;
    }

    .latest-section .row {
    align-items: stretch;
    }

    .latest-section .row > [class*="col-"] {
        display: flex;
        min-width: 0;
    }

    .article-card {
        display: flex;
        flex-direction: column;
        height: 100%;
        overflow: hidden;
        border: 1px solid var(--border-color);
        border-radius: 14px;
        background: #ffffff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .article-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.09);
    }

    .article-image-link {
        display: block;
        overflow: hidden;
        text-decoration: none;
    }

    .article-image-wrapper {
        position: relative;
        width: 100%;
        height: 240px;
        overflow: hidden;
        background: #f1f2f4;
    }

    .article-image {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        transition: transform 0.5s ease;
    }

    .article-card:hover .article-image {
        transform: scale(1.07);
    }

    .image-overlay {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, 0.25);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .image-overlay i {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: #ffffff;
        color: var(--primary-color);
        font-size: 1.2rem;
    }

    .article-card:hover .image-overlay {
        opacity: 1;
    }

    .article-card-body {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        padding: 25px;
    }

    .article-category {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        margin-bottom: 13px;
        color: var(--accent-color);
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .article-card-title {
        margin-bottom: 12px;
        font-size: 1.2rem;
        font-weight: 700;
        line-height: 1.4;
    }

    .article-card-title a {
        color: var(--primary-color);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .article-card-title a:hover {
        color: var(--accent-color);
    }

    .article-card-description {
        flex-grow: 1;
        margin-bottom: 25px;
        color: var(--muted-color);
        font-size: 0.9rem;
        line-height: 1.7;
    }

    .article-card-footer {
        padding-top: 18px;
        border-top: 1px solid var(--border-color);
    }

    .article-read-more {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        color: var(--primary-color);
        font-size: 0.9rem;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .article-read-more:hover {
        gap: 15px;
        color: var(--accent-color);
    }

    @media (max-width: 768px) {
        .hero-image-wrapper {
            height: 350px;
        }

        .featured-card .row > .col-lg-6 {
            flex: 0 0 100%;
            width: 100%;
            max-width: 100%;
        }

        .featured-card-image {
            height: 300px;
            min-height: 300px;
            max-height: 300px;
        }

        .featured-card-content {
            min-height: auto;
            padding: 30px 25px;
        }

    }

    @media (min-width: 768px) and (max-width: 992px) {

        .hero-image-wrapper {
            height: 400px;
        }

        .featured-card-image {
            min-height: 400px;
            max-height: 400px;
        }

        .featured-card-content {
            min-height: 400px;
            padding: 25px;
        }

        @media (max-width: 576px) {
        .article-image-wrapper,
        .article-card img.article-image {
            height: 210px;
        }
    }
}

    </style>
@endsection