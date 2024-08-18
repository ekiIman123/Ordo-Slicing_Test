<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">


    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- CSS -->
    @vite([
    "resources/css/app.css",
    "resources/sass/app.scss",
    "resources/js/app.js",
    ])


</head>

<body>
    <nav>
        <div class="nav-brand">
            <img src="{{ asset('images/nav-brand.png') }}" alt="nav-logo">
        </div>
        <div class="nav-menu">
            <ul>
                <li>
                    <a href="#">
                        <span>About Green Haven</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span>Event Detail</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span>Our Sponsors</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span>Leaderboard</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="nav-cta">
            <button>
                <span>
                    Plant a Mangrove
                </span>
            </button>
        </div>
    </nav>

    <main id="home">
        <div class="content-wrapper">
            <div class="leaderboard-bg">
                <img src="{{ asset('images/leaderboard-bg.svg') }}" alt="">
            </div>
            <section class="left-content">
                <div class="left-top-content">
                    <div class="lt-section-title">
                        <div class="submenu">
                            <span>
                                Green Haven Project - Mangrove
                            </span>
                        </div>
                        <div class="title">
                            <span>
                                Green Horizons Await, Join Us in Planting 10,000 Mangroves!
                            </span>
                        </div>
                    </div>
                    <div class="lt-section-progress">
                        <div class="body-progress">
                            <div class="progress">
                                <div class="progress-top">
                                    <div class="progress-desc">
                                        <img src="{{ asset('images/progress-desc.png') }}" alt="">
                                        <div class="progress-text">5,690<span>/10,000 Pohon</span></div>
                                    </div>
                                    <div class="progress-cta">
                                        <button>
                                            <span>Support Our Mission</span><img src="{{ asset('images/arrow-right.svg') }}" alt="">
                                        </button>
                                    </div>
                                </div>
                                <div class="progress-bottom">
                                    <div class="progress-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left-bottom-content">
                    <img src="{{ asset('images/right-bottom-content-2.png') }}" alt="">
                </div>
            </section>
            <div class="vertical-line"></div>
            <section class="right-content">
                <div class="right-top-content">
                    <div class="rt-title"><span>Leaderboard</span></div>
                    <div class="rt-filter">
                        <button><span>Most Donation</span></button>
                        <button><span>Most Recent</span></button>
                    </div>
                </div>
                <div class="right-bottom-content">
                    <ul>
                        <li class="donatur-line">
                            <div class="line">
                                <hr>
                            </div>
                        </li>
                        <li class="donatur-list">
                            <div class="left-donatur-list">
                                <div class="num-donatur-list"><span>01</span></div>
                                <div class="desc-donatur-list">
                                    <div class="logo-donatur">
                                        <img src="{{ asset('images/donatur-logo-1.png') }}" alt="logo donatur">
                                    </div>
                                    <div class="text-donatur">
                                        <span>Mangrove Haven</span><span>Budi Hartanto</span>
                                    </div>
                                </div>
                            </div>
                            <div class="right-donatur-list">
                                <div class="image-contribute-donatur"><img src="{{ asset('images/contribute-donatur.png') }}" alt="logo contribute donatur"></div>
                                <div class="text-contribute-donatur"><span>350</span><span> Pohon</span></div>
                            </div>
                        </li>
                        <li class="donatur-line">
                            <div class="line">
                                <hr>
                            </div>
                        </li>
                        <li class="donatur-list">
                            <div class="left-donatur-list">
                                <div class="num-donatur-list"><span>02</span></div>
                                <div class="desc-donatur-list">
                                    <div class="logo-donatur">
                                        <img src="{{ asset('images/donatur-logo-1.png') }}" alt="logo donatur">
                                    </div>
                                    <div class="text-donatur">
                                        <span>Mangrove Haven</span><span>Dewi Sartika</span>
                                    </div>
                                </div>
                            </div>
                            <div class="right-donatur-list">
                                <div class="image-contribute-donatur"><img src="{{ asset('images/contribute-donatur.png') }}" alt="logo contribute donatur"></div>
                                <div class="text-contribute-donatur"><span>330</span><span> Pohon</span></div>
                            </div>
                        </li>
                        <li class="donatur-line">
                            <div class="line">
                                <hr>
                            </div>
                        </li>
                        <li class="donatur-list">
                            <div class="left-donatur-list">
                                <div class="num-donatur-list"><span>03</span></div>
                                <div class="desc-donatur-list">
                                    <div class="logo-donatur">
                                        <img src="{{ asset('images/donatur-logo-1.png') }}" alt="logo donatur">
                                    </div>
                                    <div class="text-donatur">
                                        <span>Mangrove Haven</span><span>Eko Wahyudi</span>
                                    </div>
                                </div>
                            </div>
                            <div class="right-donatur-list">
                                <div class="image-contribute-donatur"><img src="{{ asset('images/contribute-donatur.png') }}" alt="logo contribute donatur"></div>
                                <div class="text-contribute-donatur"><span>200</span><span> Pohon</span></div>
                            </div>
                        </li>
                        <li class="donatur-line">
                            <div class="line">
                                <hr>
                            </div>
                        </li>
                        <li class="donatur-list">
                            <div class="left-donatur-list">
                                <div class="num-donatur-list"><span>04</span></div>
                                <div class="desc-donatur-list">
                                    <div class="logo-donatur">
                                        <img src="{{ asset('images/donatur-logo-2.png') }}" alt="logo donatur">
                                    </div>
                                    <div class="text-donatur">
                                        <span>Guardian of the Grove</span><span>Rina Kartika</span>
                                    </div>
                                </div>
                            </div>
                            <div class="right-donatur-list">
                                <div class="image-contribute-donatur"><img src="{{ asset('images/contribute-donatur.png') }}" alt="logo contribute donatur"></div>
                                <div class="text-contribute-donatur"><span>190</span><span> Pohon</span></div>
                            </div>
                        </li>
                        <li class="donatur-line">
                            <div class="line">
                                <hr>
                            </div>
                        </li>
                        <li class="donatur-list">
                            <div class="left-donatur-list">
                                <div class="num-donatur-list"><span>05</span></div>
                                <div class="desc-donatur-list">
                                    <div class="logo-donatur">
                                        <img src="{{ asset('images/donatur-logo-2.png') }}" alt="logo donatur">
                                    </div>
                                    <div class="text-donatur">
                                        <span>Guardian of the Grove</span><span>Agus Prasetyo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="right-donatur-list">
                                <div class="image-contribute-donatur"><img src="{{ asset('images/contribute-donatur.png') }}" alt="logo contribute donatur"></div>
                                <div class="text-contribute-donatur"><span>140</span><span> Pohon</span></div>
                            </div>
                        </li>
                        <li class="donatur-line">
                            <div class="line">
                                <hr>
                            </div>
                        </li>
                        <li class="donatur-list">
                            <div class="left-donatur-list">
                                <div class="num-donatur-list"><span>06</span></div>
                                <div class="desc-donatur-list">
                                    <div class="logo-donatur">
                                        <img src="{{ asset('images/donatur-logo-3.png') }}" alt="logo donatur">
                                    </div>
                                    <div class="text-donatur">
                                        <span>Mangrove Master</span><span>Irfan Setiawan</span>
                                    </div>
                                </div>
                            </div>
                            <div class="right-donatur-list">
                                <div class="image-contribute-donatur"><img src="{{ asset('images/contribute-donatur.png') }}" alt="logo contribute donatur"></div>
                                <div class="text-contribute-donatur"><span>80</span><span> Pohon</span></div>
                            </div>
                        </li>
                        <li class="donatur-line">
                            <div class="line">
                                <hr>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="footer-logos">
            <ul>
                <li><img src="{{ asset('images/footer-main-jala.png') }}" alt="footer-logo"></li>
                <li><img src="{{ asset('images/footer-main-efishery.png') }}" alt="footer-logo"></li>
                <li><img src="{{ asset('images/footer-main-azarine.png') }}" alt="footer-logo"></li>
                <li><img src="{{ asset('images/footer-main-kompas.png') }}" alt="footer-logo"></li>
                <li><img src="{{ asset('images/footer-main-tribun.png') }}" alt="footer-logo"></li>
                <li><img src="{{ asset('images/footer-main-jawa-pos.png') }}" alt="footer-logo"></li>
            </ul>
        </div>
    </main>

    <div id="about" class="about">
        <div class="about-wrapper">
            <div class="about-content-top">
                <div class="about-title-logo">
                    <div class="about-logo">
                        <div class="about-logo-left">
                            <img src="{{ asset('images/about-logo2.png') }}" alt="">
                            <img src="{{ asset('images/polygon2.svg') }}" alt="">
                        </div>
                        <div class="about-logo-right">
                            <img src="{{ asset('images/about-logo.png') }}" alt="">
                            <img src="{{ asset('images/polygon.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="about-title">
                        <div class="about-title-top">About Green Project</div>
                        <div class="about-title-bottom">The Green Haven Project - Mangrove aims to restore coastal ecosystems and raise awareness by planting mangroves and educating participants about the importance of these areas. This six-hour event will involve JCI members, local farmers, and students, focusing on combating beach erosion and promoting ESG values.</div>
                    </div>
                </div>
            </div>
            <div class="about-content-bottom">
                <div class="about-image-left">
                    <div class="about-image">
                        <img src="{{ asset('images/about-image-left.jpeg') }}" alt="">
                    </div>
                    <div class="about-desc">
                        <span>Before mangroves were planted</span>
                    </div>
                </div>
                <div class="about-image-right">
                    <div class="about-image">
                        <img src="{{ asset('images/about-image-right.png') }}" alt="">
                    </div>
                    <div class="about-desc">
                        <span>After mangroves were planted</span>
                    </div>

                </div>
                <div class="tranformation-div">
                    <div class="about-transformation-image">
                        <img src="{{asset('images/transformation-about.png')}}" alt="">
                    </div>
                    <div class="about-transformation-text">
                        <span>TRANSFORMATION</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="event" class="details">
        <div class="details-wrapper">
            <div class="details-content-top">
                <div class="details-title">
                    <span>Event Summary</span>
                </div>
                <div class="details-desc">
                    <span>We give you a brief overview of the event to give you a glimpse of what we're doing
                        in the Green Haven Project, download the detailed PDF to see how you can get involved</span>
                </div>
            </div>
            <div class="details-content-bottom">
                <div class="details-event">
                    <div class="details-event-left">
                        <div class="details-title">
                            <div class="details-date"><span>26/04/2024</span></div>
                            <div class="details-time"><span>08:00 - 11:00 WIB</span></div>
                        </div>
                        <div class="details-desc">
                            <div class="details-desc-text"><span>Join the impactful journey of planting mangroves,
                                    where you'll learn, collaborate with locals, earn recognition,
                                    and share your story through media coverage</span></div>
                            <div class="details-desc-line">
                                <hr>
                            </div>
                            <div class="details-desc-cta">
                                <button><img src="{{asset('images/event-cta.svg')}}" alt=""><span>View Event Details</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="details-event-right">
                        <div class="event-image">
                            <img src="{{asset('images/event-img.png')}}" alt="event-img">
                        </div>
                        <div class="event-nav">
                            <button>
                                <img src="{{asset('images/event-arrow-left.svg')}}" alt="">
                            </button>
                            <button>
                                <img src="{{asset('images/event-arrow-left.svg')}}" alt="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="details-timeline">
                    <ul>
                        <li>
                            <div class="event-timeline-line">
                                <hr>
                            </div>
                            <div class="event-timeline-text">
                                <div class="event-timeline-title"><span>01</span></div>
                                <div class="event-timeline-desc"><span>Introducing the beauty
                                        of mangroves on a journey to the planting site.</span></div>
                            </div>
                        </li>
                        <li>
                            <div class="event-timeline-line">
                                <hr>
                            </div>
                            <div class="event-timeline-text">
                                <div class="event-timeline-title"><span>02</span></div>
                                <div class="event-timeline-desc"><span>Working together with
                                        local farmers while
                                        planting each mangrove</span></div>
                            </div>
                        </li>
                        <li>
                            <div class="event-timeline-line">
                                <hr>
                            </div>
                            <div class="event-timeline-text">
                                <div class="event-timeline-title"><span>03</span></div>
                                <div class="event-timeline-desc"><span>Exploring the wonders of mangrove ecotourism, an educational adventure.</span></div>
                            </div>
                        </li>
                        <li>
                            <div class="event-timeline-line">
                                <hr>
                            </div>
                            <div class="event-timeline-text">
                                <div class="event-timeline-title"><span>04</span></div>
                                <div class="event-timeline-desc"><span>Receive a plaque & badge,
                                        a mark of honor for every tree you plant.</span></div>
                            </div>
                        </li>
                        <li>
                            <div class="event-timeline-line">
                                <hr>
                            </div>
                            <div class="event-timeline-text">
                                <div class="event-timeline-title"><span>05</span></div>
                                <div class="event-timeline-desc"><span>Coverage & documentation by news media, share your story of change!</span></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="sponsors" class="sponsors">
        <div class="sponsors-text">
            <div class="sponsors-title"><span>Sponsor Packages</span></div>
            <div class="sponsors-desc"><span>Our sponsorship package offers branding, promotional opportunities, and visibility at our event, ideal for enhancing company presence and community engagement.</span></div>
        </div>
        <div class="sponsors-table-personal">
            <div class="sponsors-table-personal-title"><span>Personal Sponsorship Package</span></div>
            <table>
                <thead>
                    <tr>
                        <th class="colom-1"><span>Membership Tier</span></th>
                        <th class="colom-2"><span>Min. Seeds</span></th>
                        <th class="colom-3"><span>Min. Buy</span></th>
                        <th class="colom-4"><span>Benefits</span></th>
                        <th class="colom-5"><span>Donors</span></th>
                        <th class="colom-6"><span>Action</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="colom-1">
                                <img src="{{asset('images/donatur-logo-1.png')}}" alt="logo-sponsor"><span>Sedling Scout</span>
                            </div>
                        </td>
                        <td class="colom-2"><span>5 Seeds</span></td>
                        <td class="colom-3"><span>IDR 75K</span></td>
                        <td class="colom-4"><span>Badge</span></td>
                        <td class="colom-5"><span>4,900 Donors</span></td>
                        <td class="colom-6">
                            <button><span>Support Our Mission</span><img src="{{asset('images/event-arrow-left.svg')}}" alt="icon-cta-sopnsor"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="colom-1">
                                <img src="{{asset('images/donatur-logo-3.png')}}" alt="logo-sponsor"><span>Sapling Savior</span>
                            </div>
                        </td>
                        <td class="colom-2"><span>10 Seeds</span></td>
                        <td class="colom-3"><span>IDR 150K</span></td>
                        <td class="colom-4"><span>Badge + Pin</span></td>
                        <td class="colom-5"><span>4,300 Donors</span></td>
                        <td class="colom-6">
                            <button><span>Support Our Mission</span><img src="{{asset('images/event-arrow-left.svg')}}" alt="icon-cta-sopnsor"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="colom-1">
                                <img src="{{asset('images/donatur-logo-1.png')}}" alt="logo-sponsor"><span>Tree Titan</span>
                            </div>
                        </td>
                        <td class="colom-2"><span>20 Seeds</span></td>
                        <td class="colom-3"><span>IDR 300K</span></td>
                        <td class="colom-4"><span>Badge + Pin</span></td>
                        <td class="colom-5"><span>15,000 Donors</span></td>
                        <td class="colom-6">
                            <button><span>Support Our Mission</span><img src="{{asset('images/event-arrow-left.svg')}}" alt="icon-cta-sopnsor"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="colom-1">
                                <img src="{{asset('images/donatur-logo-1.png')}}" alt="logo-sponsor"><span>Mangrove Master</span>
                            </div>
                        </td>
                        <td class="colom-2"><span>50 Seeds</span></td>
                        <td class="colom-3"><span>IDR 750K</span></td>
                        <td class="colom-4"><span>Badge + Pin + Bag</span></td>
                        <td class="colom-5"><span>5,000 Donors</span></td>
                        <td class="colom-6">
                            <button><span>Support Our Mission</span><img src="{{asset('images/event-arrow-left.svg')}}" alt="icon-cta-sopnsor"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="colom-1">
                                <img src="{{asset('images/donatur-logo-2.png')}}" alt="logo-sponsor"><span>Guardian Of The Mangrove</span>
                            </div>
                        </td>
                        <td class="colom-2"><span>100 Seeds</span></td>
                        <td class="colom-3"><span>IDR 1,500K</span></td>
                        <td class="colom-4"><span>Badge + Pin + Bag</span></td>
                        <td class="colom-5"><span>300 Donors</span></td>
                        <td class="colom-6">
                            <button><span>Support Our Mission</span><img src="{{asset('images/event-arrow-left.svg')}}" alt="icon-cta-sopnsor"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="colom-1">
                                <img src="{{asset('images/donatur-logo-1.png')}}" alt="logo-sponsor"><span>Mangrove Maven</span>
                            </div>
                        </td>
                        <td class="colom-2"><span>200 Seeds</span></td>
                        <td class="colom-3"><span>IDR 3,000K</span></td>
                        <td class="colom-4"><span>Badge + Pin + Bag</span></td>
                        <td class="colom-5"><span>10 Donors</span></td>
                        <td class="colom-6">
                            <button><span>Support Our Mission</span><img src="{{asset('images/event-arrow-left.svg')}}" alt="icon-cta-sopnsor"></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="sponsors-separator-line">
            <hr>
        </div>
        <div class="sponsors-table-corporate">
            <div class="sponsors-table-corporate-title"><span>Corporate Sponsorship Package</span></div>
            <table>
                <thead>
                    <tr>
                        <th class="colom-1"><span>Benefits</span></th>
                        <th class="colom-2"><span>Eco Trailblazers</span></th>
                        <th class="colom-3"><span>Green Innovators</span></th>
                        <th class="colom-4"><span>Eco Vanguard</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="colom-1"><span>Price</span></td>
                        <td class="colom-2"><span>15 Milion IDR</span></td>
                        <td class="colom-3"><span>30 Milion IDR</span></td>
                        <td class="colom-4"><span>45 Milion IDR</span></td>
                        </td>
                    </tr>
                    <tr>
                        <td class="colom-1"><span>CO<sub>2</sub> Sequestration</span></td>
                        <td class="colom-2"><span>22,5 ton/year</span></td>
                        <td class="colom-3"><span>45 ton/year</span></td>
                        <td class="colom-4"><span>67,5 ton/year</span></td>
                        </td>
                    </tr>
                    <tr>
                        <td class="colom-1"><span>Number of Tress</span></td>
                        <td class="colom-2"><span>1000</span></td>
                        <td class="colom-3"><span>2000</span></td>
                        <td class="colom-4"><span>3000</span></td>
                        </td>
                    </tr>
                    <tr>
                        <td class="colom-1"><span>Logo on JCI Banner</span></td>
                        <td class="colom-2"><span><img src="{{asset('images/corporate-sponsorship-ceklist.svg')}}" alt="ceklist-corporate-sponsor"></span></td>
                        <td class="colom-3"><span><img src="{{asset('images/corporate-sponsorship-ceklist.svg')}}" alt="ceklist-corporate-sponsor"></span></td>
                        <td class="colom-4"><span><img src="{{asset('images/corporate-sponsorship-ceklist.svg')}}" alt="ceklist-corporate-sponsor"></span></td>
                        </td>
                    </tr>
                    <tr>
                        <td class="colom-1"><span>Logo on Communal Stainless Plate</span></td>
                        <td class="colom-2"><span><img src="{{asset('images/corporate-sponsorship-ceklist.svg')}}" alt="ceklist-corporate-sponsor"></span></td>
                        <td class="colom-3"><span><img src="{{asset('images/corporate-sponsorship-ceklist.svg')}}" alt="ceklist-corporate-sponsor"></span></td>
                        <td class="colom-4"><span><img src="{{asset('images/corporate-sponsorship-ceklist.svg')}}" alt="ceklist-corporate-sponsor"></span></td>
                        </td>
                    </tr>
                    <tr>
                        <td class="colom-1"><span>Considered as Main Sponsor</span></td>
                        <td class="colom-2"><span><img src="{{asset('images/corporate-sponsorship-ceklist.svg')}}" alt="ceklist-corporate-sponsor"></span></td>
                        <td class="colom-3"><span><img src="{{asset('images/corporate-sponsorship-ceklist.svg')}}" alt="ceklist-corporate-sponsor"></span></td>
                        <td class="colom-4"><span><img src="{{asset('images/corporate-sponsorship-ceklist.svg')}}" alt="ceklist-corporate-sponsor"></span></td>
                        </td>
                    </tr>
                    <tr>
                        <td class="colom-1"><span>Dedicated Stainless Plate</span></td>
                        <td class="colom-2"><span></span></td>
                        <td class="colom-3"><span><img src="{{asset('images/corporate-sponsorship-ceklist.svg')}}" alt="ceklist-corporate-sponsor"></span></td>
                        <td class="colom-4"><span><img src="{{asset('images/corporate-sponsorship-ceklist.svg')}}" alt="ceklist-corporate-sponsor"></span></td>
                        </td>
                    </tr>
                    <tr>
                        <td class="colom-1"><span>Report Update on Planted Trees</span></td>
                        <td class="colom-2"><span></span></td>
                        <td class="colom-3"><span><img src="{{asset('images/corporate-sponsorship-ceklist.svg')}}" alt="ceklist-corporate-sponsor"></span></td>
                        <td class="colom-4"><span><img src="{{asset('images/corporate-sponsorship-ceklist.svg')}}" alt="ceklist-corporate-sponsor"></span></td>
                        </td>
                    </tr>
                    <tr>
                        <td class="colom-1"><span>Logo on Event Clothings</span></td>
                        <td class="colom-2"><span></span></td>
                        <td class="colom-3"><span></span></td>
                        <td class="colom-4"><span><img src="{{asset('images/corporate-sponsorship-ceklist.svg')}}" alt="ceklist-corporate-sponsor"></span></td>
                        </td>
                    </tr>
                    <tr>
                        <td class="colom-1"><span>Make A Donation</span></td>
                        <td class="colom-2">
                            <div class="corporate-sponsor-cta-table">
                                <button><span>Support Our Mission</span><img src="{{asset('images/event-arrow-sponsor.svg')}}" alt="icon-cta-sponsor"></button>
                            </div>
                        </td>
                        <td class="colom-3">
                            <div class="corporate-sponsor-cta-table">
                                <button><span>Support Our Mission</span><img src="{{asset('images/event-arrow-sponsor.svg')}}" alt="icon-cta-sponsor"></button>
                            </div>
                        </td>
                        <td class="colom-4">
                            <div class="corporate-sponsor-cta-table">
                                <button><span>Support Our Mission</span><img src="{{asset('images/event-arrow-sponsor.svg')}}" alt="icon-cta-sponsor"></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div id="donate" class="donate">
        <div class="donate-content-top">
            <div class="donate-title">
                <span>Donate today and be a Guardian of the Green Belt</span>
            </div>
            <div class="donate-desc">
                <span>Join us in our mission to rejuvenate and protect our shorelines
                    by donating to our mangrove planting project.</span>
            </div>
            <div class="donate-cta">
                <button>
                    <span>Support Our Mission</span><img src="{{ asset('images/event-arrow-left.svg') }}" alt="cta donate">
                </button>
            </div>
        </div>
        <div class="donate-content-bottom">
            <div class="donate-images-1">
                <img src="{{asset('images/donate-images.png')}}" alt="donate-image">
            </div>
            <div class="donate-images-2">
                <img src="{{asset('images/donate-images-2.png')}}" alt="donate-image">
            </div>
            <div class="donate-images-3">
                <img src="{{asset('images/donate-images-3.png')}}" alt="donate-image">
            </div>
            <div class="donate-images-4">
                <img src="{{asset('images/donate-images-4.png')}}" alt="donate-image">
            </div>
            <div class="donate-images-5">
                <img src="{{asset('images/donate-images-5.png')}}" alt="donate-image">
            </div>
        </div>
    </div>

    <div class="footer-identity">
        <span>Nama yang Mengerjakan Test: Eki Iman Jordiansyah</span>
    </div>
</body>

</html>