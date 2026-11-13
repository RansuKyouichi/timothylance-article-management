
@extends('web._layouts.main')

@section('content')

<section class="article-hero">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="article-eyebrow">
                    <span class="eyebrow-line"></span>
                    OUR JOURNAL
                </span>

                <h1 class="article-hero-title">
                    Explore Our <span class="text-accent">Articles.</span>
                </h1>

                <p class="article-hero-description">
                    Discover a world of knowledge and insights through
                    our curated collection of articles. Explore ideas,
                    learn something new, and find inspiration along the way.
                </p>
            </div>

            <div class="col-lg-5">
                <div class="search-container">
                    <i class="bi bi-search search-icon"></i>

                    <input
                        type="search"
                        class="form-control article-search"
                        placeholder="Search articles..."
                        id="article-search-input"
                        aria-label="Search articles"
                    >
                </div>

                <small class="search-hint">
                    <i class="bi bi-lightbulb"></i>
                    Search by article title
                </small>
            </div>
        </div>
    </div>
</section>

<section class="article-section">
    <div class="container">

        <div class="article-section-header">
            <div>
                <span class="section-label">LATEST CONTENT</span>
                <h2 class="section-title">All Articles</h2>
            </div>

            <span class="article-count">
                {{ count($articles) }} Articles
            </span>
        </div>

        <div class="row g-4" id="article-list">

            @forelse ($articles as $article)

                <div class="col-12 col-md-6 col-lg-4 article-item"
                    data-search="{{ strtolower($article['title'] . ' ') }}">

                    <div class="article-card">

                        <a href="{{ route('web.article', ['id' => $article['id']]) }}"
                           class="article-image-link">

                            <div class="article-image-wrapper">
                                <img
                                    src="{{ asset('storage/' . $article['image']) }}"
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
                                <i class="bi bi-journal-text"></i>
                                {{ $article['category'] }}
                            </span>

                            <h5 class="article-card-title">
                                <a href="{{ route('web.article', ['id' => $article['id']]) }}">
                                    {{ $article['title'] }}
                                </a>
                            </h5>

                            <p class="article-card-description">
                                {{ Str::limit($article['excerpt'], 110) }}
                            </p>

                            <div class="article-meta mb-3">
                                {{ $article['author'] }}
                                <span class="mx-2">·</span>
                                {{ $article['date'] }}
                            </div>

                            <div class="article-card-footer">
                                <a href="{{ route('web.article', ['id' => $article['id']]) }}"
                                   class="article-read-more">
                                    Read Article
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

            @empty

                <div class="col-12">
                    <div class="article-empty-state">
                        <i class="bi bi-journal-x"></i>
                        <h4>No Articles Available</h4>
                        <p>There are currently no articles to display. Please check back later.</p>
                    </div>
                </div>

            @endforelse

            <div class="col-12 d-none" id="no-search-results">
                <div class="article-empty-state">
                    <i class="bi bi-search"></i>
                    <h4>No Matching Articles</h4>
                    <p>Try searching with a different keyword.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const searchInput = document.getElementById('article-search-input');
        const articleItems = document.querySelectorAll('.article-item');
        const noResults = document.getElementById('no-search-results');

        searchInput.addEventListener('input', function () {

            const searchValue = this.value.toLowerCase().trim();
            let visibleArticles = 0;

            articleItems.forEach(function (item) {

                const articleData = item.dataset.search;

                const matches = articleData.includes(searchValue);

                item.classList.toggle('d-none', !matches);

                if (matches) {
                    visibleArticles++;
                }

            });

            noResults.classList.toggle(
                'd-none',
                visibleArticles > 0 || articleItems.length === 0
            );

        });

    });
</script>

@endsection


@section('page-styles')
<style>
.article-hero {
    padding: 100px 0 75px;
    background: linear-gradient(
        135deg,
        #f8f9fb 0%,
        #ffffff 100%
    );
    border-bottom: 1px solid var(--border-color);
}

.article-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 20px;
    color: var(--accent-color);
    font-size: 0.8rem;
    font-weight: 700;
    letter-spacing: 2px;
}

.eyebrow-line {
    width: 30px;
    height: 2px;
    background: var(--accent-color);
}

.article-hero-title {
    margin-bottom: 20px;
    color: var(--primary-color);
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -2px;
}

.text-accent {
    color: var(--accent-color);
}

.article-hero-description {
    max-width: 600px;
    margin: 0;
    color: var(--muted-color);
    font-size: 1.05rem;
    line-height: 1.8;
}

.search-container {
    position: relative;
}

.article-search {
    width: 100%;
    padding: 18px 50px 18px 22px;
    border: 1px solid var(--border-color);
    border-radius: 50px;
    background: #ffffff;
    font-size: 0.95rem;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.04);
    transition: all 0.3s ease;
}

.article-search:focus {
    border-color: var(--accent-color);
    box-shadow: 0 0 0 4px rgba(255, 193, 7, 0.15);
}

.search-icon {
    position: absolute;
    top: 50%;
    right: 22px;
    transform: translateY(-50%);
    color: var(--muted-color);
    font-size: 1.1rem;
    pointer-events: none;
}

.search-hint {
    display: block;
    margin: 12px 0 0 18px;
    color: var(--muted-color);
    font-size: 0.8rem;
}

.article-section {
    padding: 80px 0 100px;
    background: #ffffff;
}

.article-section-header {
    display: flex;
    justify-content: space-between;
    align-items: end;
    margin-bottom: 35px;
}

.section-label {
    color: var(--accent-color);
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 2px;
}

.section-title {
    margin: 8px 0 0;
    color: var(--primary-color);
    font-size: 2rem;
    font-weight: 750;
}

.article-count {
    padding: 8px 16px;
    border: 1px solid var(--border-color);
    border-radius: 50px;
    color: var(--muted-color);
    font-size: 0.85rem;
    font-weight: 600;
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
    color: var(--muted-color);
    font-size: 0.9rem;
    line-height: 1.7;
}

.article-meta{
    color: var(--muted-color);
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

.article-empty-state {
    padding: 65px 20px;
    text-align: center;
    border: 1px dashed var(--border-color);
    border-radius: 14px;
    background: #fafafa;
}

.article-empty-state > i {
    color: var(--accent-color);
    font-size: 3rem;
}

.article-empty-state h4 {
    margin: 20px 0 10px;
    color: var(--primary-color);
    font-weight: 700;
}

.article-empty-state p {
    margin: 0;
    color: var(--muted-color);
}


@media (max-width: 991px) {

    .article-hero {
        padding: 75px 0 60px;
    }

    .article-section {
        padding: 65px 0 80px;
    }

}

@media (max-width: 575px) {

    .article-hero {
        padding: 60px 0 45px;
    }

    .article-hero-title {
        letter-spacing: -1px;
    }

    .article-hero-description {
        font-size: 0.95rem;
    }

    .article-section {
        padding: 50px 0 65px;
    }

    .article-section-header {
        align-items: center;
    }

    .section-title {
        font-size: 1.6rem;
    }

    .article-count {
        padding: 7px 11px;
        font-size: 0.75rem;
    }

    .article-card-body {
        padding: 20px;
    }

}

</style>
@endsection
