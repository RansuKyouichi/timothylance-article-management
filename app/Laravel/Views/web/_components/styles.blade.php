
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap');

    :root {
        --primary-color: #202020;
        --accent-color: #C8754D;
        --background-color: #FAF9F6;
        --surface-color: #FFFFFF;
        --text-color: #333333;
        --muted-color: #777777;
        --border-color: #EAE7E1;
    }
    * {
        box-sizing: border-box;
    }
    body {
        font-family: 'DM Sans', sans-serif;
        background-color: var(--background-color);
        color: var(--text-color);
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    a {
        text-decoration: none;
    }
    .editorial-heading {
        font-family: 'Playfair Display', serif;
    }
    .text-accent {
        color: var(--accent-color);
    }
    .section-padding {
        padding-top: 80px;
        padding-bottom: 80px;
    }
    .section-label {
        color: var(--accent-color);
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
    }
    .site-navbar {
        background-color: var(--background-color);
        border-bottom: 1px solid var(--border-color);
        padding: 18px 0;
        z-index: 1030;
    }
    .site-brand {
        color: var(--primary-color);
        font-size: 1.35rem;
        font-weight: 800;
        letter-spacing: -1px;
    }
    .site-brand span,
    .footer-brand span {
        color: var(--accent-color);
    }
    .site-brand:hover {
        color: var(--primary-color);
    }
    .site-navbar .nav-link {
        color: var(--muted-color);
        font-size: 0.9rem;
        font-weight: 600;
        transition: color 0.2s ease;
    }
    .site-navbar .nav-link:hover,
    .site-navbar .nav-link.active {
        color: var(--accent-color);
    }
    .nav-cta {
        font-size: 0.85rem;
        padding: 10px 18px;
        border-radius: 5px;
    }

    .btn-dark {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }
    .btn-dark:hover {
        background-color: var(--accent-color);
        border-color: var(--accent-color);
    }
    .btn-accent {
        background-color: var(--accent-color);
        border: 1px solid var(--accent-color);
        color: #FFFFFF;
    }
    .btn-accent:hover {
        background-color: #A95E3A;
        border-color: #A95E3A;
        color: #FFFFFF;
    }

    .site-footer {
        background-color: #202020;
        color: #FFFFFF;
        padding: 65px 0 25px;
        margin-top: auto;
    }
    .footer-brand {
        color: #FFFFFF;
        font-size: 1.4rem;
        font-weight: 800;
        letter-spacing: -1px;
    }
    .footer-brand:hover {
        color: #FFFFFF;
    }
    .footer-heading {
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        margin-bottom: 20px;
    }
    .footer-description {
        color: #AAAAAA;
        font-size: 0.9rem;
        line-height: 1.8;
        max-width: 380px;
    }
    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .footer-links li {
        margin-bottom: 12px;
    }
    .footer-links a {
        color: #AAAAAA;
        font-size: 0.9rem;
        transition: color 0.2s ease;
    }
    .footer-links a:hover {
        color: var(--accent-color);
    }
    .footer-divider {
        border-color: #444444;
        margin: 40px 0 20px;
    }
    .copyright {
        color: #888888;
        font-size: 0.8rem;
    }

    @media (max-width: 991.98px) {
        .site-navbar .navbar-collapse {
            padding-top: 20px;
        }
        .site-navbar .nav-link {
            padding: 10px 0;
        }
        .nav-cta {
            margin-top: 10px;
        }
    }


    @media (max-width: 575.98px) {
        .section-padding {
            padding-top: 55px;
            padding-bottom: 55px;
        }
        .site-brand {
            font-size: 1.15rem;
        }
        .site-footer {
            padding-top: 45px;
        }
    }

</style>
