
<?php
$code = isset($_GET['code']) ? htmlspecialchars($_GET['code']) : '';
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
?><!DOCTYPE html>
<html class="no-js" lang="en-us">
  <head>
    <meta charset="utf-8"><!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge'><![endif]-->
    <title>Lorenzo Wood Music — Official Site</title>
    <meta name="description" content="Lorenzo Wood is a musician, singer-songwriter, and producer from Alameda, California USA. He sings and plays guitar, keys, drums, bass, and has fun on mandolin and banjo.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="supported-color-schemes" content="light dark">
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="stylesheet" href="/css/main.122219.css">
    <link rel="prefetch" href="//code.jquery.com">
    <link rel="prefetch" href="//w.soundcloud.com">
    <link rel="prefetch" href="//img.youtube.com">
  </head>
  <body class="Home"><!--[if lt IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please
      <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p><![endif]-->
    <header id="main-header">
      <h1 class="ir">Lorenzo Wood Music</h1>
      <div class="logo"><a class="active" href="/"><svg viewBox="0 0 846 73" aria-label="Lorenzo Wood Music" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M.1 71V3.6h12.3v57.1h27.7V71H.1zm69.8-49.8c14.5 0 24.2 10.2 24.2 25 0 17.9-12.6 25.9-25 25.9-13.8 0-24.4-9.5-24.4-25.1 0-16 10.5-25.8 25.2-25.8zm-.3 9c-8.7 0-12.2 8.4-12.2 16.5 0 9.4 4.6 16.5 12.1 16.5 7 0 11.9-6.9 11.9-16.7 0-7.6-3.4-16.3-11.8-16.3zM104.2 71V38c0-6.6-.1-11.3-.4-15.7h10.7l.4 9.3h.4c2.4-6.9 8.1-10.4 13.3-10.4 1.2 0 1.9.1 2.9.3v11.6c-1-.2-2.1-.4-3.6-.4-5.9 0-9.9 3.8-11 9.3-.2 1.1-.4 2.4-.4 3.8V71h-12.3zm76-20.9h-32.6c.3 8.8 7.2 12.6 15 12.6 5.7 0 9.8-.8 13.5-2.2l1.8 8.5c-4.2 1.7-10 3-17 3-15.8 0-25.1-9.7-25.1-24.6 0-13.5 8.2-26.2 23.8-26.2 15.8 0 21 13 21 23.7 0 2.3-.2 4.1-.4 5.2zm-32.6-8.6H169c.1-4.5-1.9-11.9-10.1-11.9-7.6 0-10.8 6.9-11.3 11.9zM190.5 71V36.8c0-5.6-.1-10.3-.4-14.5h10.8l.6 7.3h.3c2.1-3.8 7.4-8.4 15.5-8.4 8.5 0 17.3 5.5 17.3 20.9V71h-12.3V43.5c0-7-2.6-12.3-9.3-12.3-4.9 0-8.3 3.5-9.6 7.2-.4 1.1-.5 2.6-.5 4V71h-12.4zm52.6 0v-7.1l18.3-23.4c2.5-3 4.6-5.4 7.2-8.2v-.2h-23.7v-9.8h38.7v7.5l-17.9 22.9c-2.4 2.9-4.7 5.7-7.2 8.3v.2h25.7V71h-41.1zm71-49.8c14.5 0 24.2 10.2 24.2 25 0 17.9-12.6 25.9-25 25.9-13.8 0-24.4-9.5-24.4-25.1 0-16 10.5-25.8 25.2-25.8zm-.3 9c-8.7 0-12.2 8.4-12.2 16.5 0 9.4 4.6 16.5 12.1 16.5 7 0 11.9-6.9 11.9-16.7 0-7.6-3.4-16.3-11.8-16.3zM373.1 71h-13.3L343.3 3.6h13.1l6.4 30.6c1.7 8.2 3.3 16.8 4.4 23.5h.2c1.1-7.1 3-15.1 4.9-23.6l7.3-30.5h12.9l6.7 31c1.7 8 3.1 15.5 4.1 22.8h.2c1.2-7.4 2.8-15.1 4.6-23.3l7-30.5h12.5L409.5 71h-13.2l-7-31.7c-1.7-7.7-2.9-14.1-3.7-21.4h-.2c-1.2 7.2-2.5 13.7-4.5 21.4L373.1 71zm80.5-49.8c14.5 0 24.2 10.2 24.2 25 0 17.9-12.6 25.9-25 25.9-13.8 0-24.4-9.5-24.4-25.1 0-16 10.5-25.8 25.2-25.8zm-.3 9c-8.7 0-12.2 8.4-12.2 16.5 0 9.4 4.6 16.5 12.1 16.5 7 0 11.9-6.9 11.9-16.7 0-7.6-3.4-16.3-11.8-16.3zm56.7-9c14.5 0 24.2 10.2 24.2 25 0 17.9-12.6 25.9-25 25.9-13.8 0-24.4-9.5-24.4-25.1 0-16 10.5-25.8 25.2-25.8zm-.3 9c-8.7 0-12.2 8.4-12.2 16.5 0 9.4 4.6 16.5 12.1 16.5 7 0 11.9-6.9 11.9-16.7 0-7.6-3.4-16.3-11.8-16.3zM576.9 0h12.3v57.3c0 5 .2 10.4.4 13.7h-11l-.5-7.7h-.2c-2.9 5.4-8.8 8.8-15.9 8.8-11.6 0-20.8-9.9-20.8-24.9-.1-16.3 10.1-26 21.8-26 6.7 0 11.5 2.8 13.7 6.4h.2V0zm0 49.9v-7.3c0-1-.1-2.2-.3-3.2-1.1-4.8-5-8.7-10.6-8.7-7.9 0-12.3 7-12.3 16.1 0 8.9 4.4 15.4 12.2 15.4 5 0 9.4-3.4 10.6-8.7.3-1.1.4-2.3.4-3.6z" fill="#FFF"/><path d="M661.3 71L660 43.5c-.4-8.7-.9-19.2-.8-28.3h-.3c-2.2 8.2-5 17.3-8 25.8l-9.8 29.2h-9.5l-9-28.8c-2.6-8.6-5-17.8-6.8-26.2h-.2c-.3 8.8-.7 19.5-1.2 28.7L612.9 71h-11.5l4.5-67.4h16.2l8.8 27.1c2.4 7.9 4.5 15.9 6.2 23.4h.3c1.8-7.3 4.1-15.6 6.7-23.5l9.3-27h16l3.9 67.4h-12zm67.6-48.7v34.1c0 5.8.2 10.6.4 14.6h-10.8l-.6-7.4h-.2c-2.1 3.5-6.9 8.5-15.6 8.5-8.9 0-17-5.3-17-21.2V22.3h12.3v26.5c0 8.1 2.6 13.3 9.1 13.3 4.9 0 8.1-3.5 9.4-6.6.4-1.1.7-2.4.7-3.8V22.3h12.3zm10.3 46.3l2.4-8.9c2.8 1.7 8.1 3.5 12.5 3.5 5.4 0 7.8-2.2 7.8-5.4 0-3.3-2-5-8-7.1-9.5-3.3-13.5-8.5-13.4-14.2 0-8.6 7.1-15.3 18.4-15.3 5.4 0 10.1 1.4 12.9 2.9l-2.4 8.7c-2.1-1.2-6-2.8-10.3-2.8-4.4 0-6.8 2.1-6.8 5.1 0 3.1 2.3 4.6 8.5 6.8 8.8 3.2 12.9 7.7 13 14.9 0 8.8-6.9 15.2-19.8 15.2-5.9 0-11.2-1.4-14.8-3.4zm57.1 2.4h-12.4V22.3h12.4V71zm-6.2-69c4.2 0 6.8 2.9 6.9 6.7 0 3.7-2.7 6.6-7 6.6-4.1 0-6.8-2.9-6.8-6.6 0-3.8 2.8-6.7 6.9-6.7zm53.5 58.4l1.7 9.1c-2.6 1.2-7.7 2.5-13.8 2.5-15.2 0-25.1-9.7-25.1-24.8 0-14.6 10-26 27.1-26 4.5 0 9.1 1 11.9 2.3l-2.2 9.2c-2-.9-4.9-1.9-9.3-1.9-9.4 0-15 6.9-14.9 15.8 0 10 6.5 15.7 14.9 15.7 4.3 0 7.3-.9 9.7-1.9z" fill="#62B1DE"/></g></svg></a>
        <input id="navigation" type="checkbox">
        <label class="hamburger" for="navigation">
          <div class="spinner diagonal part-1"></div>
          <div class="spinner horizontal"></div>
          <div class="spinner diagonal part-2"></div>
        </label>
        <nav class="page-menu">
          <ul>
                    <li><a class="active" href="/">Home</a></li>
                    <li><a href="/photos/">Photos</a></li>
                    <li><a href="/videos/">Videos</a></li>
                    <li><a href="/booking/">Booking</a></li>
          </ul>
        </nav>
      </div>
      <div class="hero">
        <div class="quick-stream clearfix safe-area-only">
          <p><a target="_blank" href="/link/jacket"><img style="display:inline-block; width:2em; height:auto; margin:-1em 1em -1em 0; padding:0" src="album_art_384/jacket-ep.jpg" alt="Jacket EP cover image"></a><span>
              New 4-track EP “Jacket (I'm Sensitive)” —&nbsp;</span><b><a style="text-decoration:underline" href="/link/jacket">Watch, download or stream now!</a></b></p>
        </div>
        <picture>
          <source srcset="img/beach.webp 1920w" type="image/webp">
          <source srcset="img/beach.jpg 1920w, img/beach50.jpg 960w, img/beach33.jpg 640w"><img class="hero-image" src="img/beach.jpg" loading="eager" alt="Lorenzo Wood">
        </picture>
      </div>
      <div class="icons popular safe-area-only"><a data-title="Instagram" href="https://instagram.com/LorenzoWoodMusic"><svg aria-label="Instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Instagram</desc><path fill="#e95950" d="M12 2.16c3.2 0 3.58.01 4.85.07 3.25.15 4.77 1.7 4.92 4.92.06 1.27.07 1.65.07 4.85 0 3.2-.01 3.58-.07 4.85-.15 3.23-1.66 4.77-4.92 4.92-1.27.06-1.64.07-4.85.07a83 83 0 0 1-4.85-.07c-3.26-.15-4.77-1.7-4.92-4.92A82.98 82.98 0 0 1 2.16 12a84 84 0 0 1 .07-4.85c.15-3.23 1.67-4.77 4.92-4.92A84.4 84.4 0 0 1 12 2.16zM12 0C8.74 0 8.33.01 7.05.07 2.7.27.27 2.7.07 7.05A84.29 84.29 0 0 0 0 12c0 3.26.01 3.67.07 4.95.2 4.36 2.62 6.78 6.98 6.98 1.28.06 1.7.07 4.95.07 3.26 0 3.67-.01 4.95-.07 4.35-.2 6.78-2.62 6.98-6.98.06-1.28.07-1.7.07-4.95 0-3.26-.01-3.67-.07-4.95C23.73 2.7 21.3.27 16.95.07A84.33 84.33 0 0 0 12 0zm0 5.84a6.16 6.16 0 1 0 0 12.32 6.16 6.16 0 0 0 0-12.32zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.4-11.85a1.44 1.44 0 1 0 0 2.89 1.44 1.44 0 0 0 0-2.89z"/></svg></a><a data-title="Facebook" href="https://facebook.com/LorenzoWoodMusic"><svg aria-label="Facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Facebook</desc><path fill="#3b5998" d="M22.68 0H1.32C.6 0 0 .6 0 1.32v21.36C0 23.4.6 24 1.32 24h11.5v-9.3H9.69v-3.62h3.13V8.41c0-3.1 1.9-4.79 4.66-4.79 1.32 0 2.46.1 2.8.15V7h-1.92c-1.5 0-1.8.71-1.8 1.76v2.32h3.59l-.47 3.62h-3.12V24h6.12c.73 0 1.32-.6 1.32-1.32V1.32C24 .6 23.4 0 22.68 0z"/></svg></a><a data-title="YouTube" href="https://www.youtube.com/lorenzowoodmusic"><svg aria-label="YouTube" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on YouTube</desc><path fill="#b00" d="M4.65 0H6.1l.99 3.7L8 0h1.45L7.79 5.5v3.76H6.35V5.51L4.65 0zm6.6 2.37c-1.12 0-1.86.74-1.86 1.84v3.35c0 1.2.62 1.83 1.86 1.83 1.02 0 1.82-.69 1.82-1.83V4.2c0-1.07-.8-1.84-1.82-1.84zm.53 5.13c0 .37-.2.65-.53.65-.36 0-.56-.3-.56-.65V4.32c0-.37.17-.65.53-.65.39 0 .56.27.56.65V7.5zm4.73-5.07v5.19c-.16.19-.5.5-.75.5-.27 0-.34-.18-.34-.45V2.43h-1.27v5.71c0 .68.2 1.22.89 1.22.38 0 .92-.2 1.47-.85v.75h1.27V2.43H16.5zm2.2 13.86c-.45 0-.54.31-.54.76v.66h1.07v-.66c0-.44-.1-.76-.53-.76zm-4.7.04a.93.93 0 0 0-.25.2v4.05c.1.1.19.18.28.23.2.1.49.1.62-.07.07-.09.1-.24.1-.45v-3.36a.82.82 0 0 0-.12-.5c-.15-.19-.42-.2-.63-.1zm4.82-5.2a183 183 0 0 0-13.66 0c-2.82.2-3.15 1.9-3.17 6.37.02 4.47.35 6.17 3.17 6.37a183 183 0 0 0 13.66 0c2.82-.2 3.15-1.9 3.17-6.37-.02-4.47-.35-6.17-3.17-6.37zM6.51 21.82H5.15v-7.54H3.74V13h4.18v1.28H6.5v7.54zm4.84 0h-1.2v-.72c-.23.27-.46.47-.7.6-.65.38-1.55.37-1.55-.95v-5.44h1.21v5c0 .25.06.43.32.43.24 0 .57-.3.71-.49v-4.94h1.21v6.5zm4.66-1.35c0 .8-.3 1.43-1.1 1.43-.45 0-.82-.16-1.15-.58v.5h-1.22V13h1.22v2.84c.27-.33.64-.6 1.07-.6.89 0 1.18.74 1.18 1.62v3.61zm4.47-1.75h-2.31v1.23c0 .49.04.9.53.9.5 0 .54-.34.54-.9v-.45h1.24v.48c0 1.26-.53 2.02-1.81 2.02-1.16 0-1.75-.85-1.75-2.02v-2.92c0-1.13.75-1.91 1.84-1.91 1.16 0 1.72.74 1.72 1.91v1.66z"/></svg></a><a data-title="Bands in Town" href="https://www.bandsintown.com/a/14965242"><svg aria-label="Bands in Town" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Bands in Town</desc><path fill="#00AEA8" d="M0 0h24v24H0z"/><path fill="#FFF" d="M12.5 7.5h4v5h-4zm4.5-5h4v10h-4z"/><path d="M3.5 3v18.5H21V13H8v4h9v.5H7.5V3h-4z" fill="#FFF"/><path fill="#FFF" d="M8 7.5h4v5H8z"/></svg></a></div>
    </header>
    <main>
      <section class="mailing-section">
        <div class="centered">
          <form class="validate taller" action="https://lorenzowoodmusic.us16.list-manage.com/subscribe/post?u=3fb2f947fceaaa94b99d40919&amp;amp;id=1c68d63e9a" method="post" name="mc-embedded-subscribe-form" target="_blank"><input type="email" id="mce-EMAIL" name="EMAIL" placeholder="Email address" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required>
            <input id="mce-FNAME" type="text" name="FNAME" placeholder="First Name">
            <input id="mce-LNAME" type="text" name="LNAME" placeholder="Last Name"><span class="ir" aria-hidden="true">
              <input class="ir" type="text" name="b_3fb2f947fceaaa94b99d40919_1c68d63e9a" tabindex="-1"></span>
            <input class="button" type="submit" value="Subscribe to Announcement Email List" name="subscribe">
          </form>
        </div>
      </section>
      <section class="bio">
        <header class="ir" aria-hidden="true">
          <h2>Bio</h2>
        </header>
        <article class="textual">
          <p>Lorenzo Wood is a musician, singer-songwriter, and producer from Alameda, California USA. He sings and plays guitar, keys, drums, bass, and has fun on mandolin and banjo.</p>
          <p>Lorenzo performs solo or with a band in concert and at street fairs and private events. In addition to playing live, Lorenzo runs a recording studio in Alameda producing local artists as well as his own music.</p>
          <p>
            Lorenzo’s single, <a href="href="/link/jacket">Jacket (I’m Sensitive)</a> won Song of the Year in Redwood City and Song of the Month in Palo Alto for West Coast Songwriters.
            
          </p>
          <blockquote>“His voice is like ear candy”
            <footer>Wheeler Cole, West Coast Songwriters</footer>
          </blockquote>
          <p>He also runs live sound, and is knowledgeable and experienced with most audio and musical equipment.</p>
          <p>
            Lorenzo lists Maroon 5, Shawn Mendes, Julia Michaels, John Mayer, The Beatles, U2, Fleetwood Mac, Niall Horan and Train as his musical influences.
            
          </p>
          <aside class="epk download"><a href="EPK.zip">Electronic Press Kit</a></aside><?php include 'CACHE/bandsintown.html'; ?>
        </article>
      </section>
      <section class="instagram-section requires-js maximize-mobile">
        <header>
          <h2>Instagram</h2>
        </header>
        <article>
          <div id="lightweight_widget"></div>
        </article>
        <footer>
          <h3 class="righthand"><a href="https://instagram.com/LorenzoWoodMusic">More from Instagram</a></h3>
        </footer>
      </section>
      <section class="soundcloud-section balance-footer requires-js maximize-mobile">
        <header class="ir" aria-hidden="true">
          <h2>SoundCloud</h2>
        </header>
        <article class="clearfix">
          <div class="soundcloud-column">
            <div class="soundcloud-proxy" data-code="417471444"></div>
          </div>
          <div class="soundcloud-column">
            <div class="soundcloud-proxy" data-code="423059013"></div>
          </div>
          <div class="soundcloud-column">
            <div class="soundcloud-proxy" data-code="386311568"></div>
          </div>
        </article>
        <footer>
          <h3 class="righthand"><a href="https://soundcloud.com/LorenzoWoodMusic">More from SoundCloud</a></h3>
        </footer>
      </section>
      <section class="youtube-section balance-footer requires-js maximize-mobile">
        <header class="ir" aria-hidden="true">
          <h2>YouTube</h2>
        </header>
        <article class="clearfix">
          <div class="youtube-column-2">
            <div class="youtube" data-embed="PfjIqix5ZZw:Heartless (Diplo &amp; Morgan Wallen) Cover by 2AM In The Basement"></div>
          </div>
          <div class="youtube-column-2">
            <div class="youtube" data-embed="iVHF1RM7a9I:Lorenzo Wood - Jacket (I'm Sensitive)"></div>
          </div>
        </article>
        <footer>
          <h3 class="righthand"><a href="https://www.youtube.com/lorenzowoodmusic">More from YouTube</a></h3>
        </footer>
      </section>
      <section class="download-section">
        <article class="textual clearfix">
          <div class="side-photo"><img class="shadowed" src="album_art_384/now-in-control.jpg" alt="EP thumbnail"></div>
          <div class="next-to-side-photo">
            <div class="next-to-side-photo-padded">
              <div><a class="buy-button" data-title="Buy at Bandcamp.com" href="https://lorenzowoodmusic.bandcamp.com/album/now-in-control">Buy “Now In Control” EP</a></div>
              <div><a data-title="Buy on iTunes" href="https://geo.itunes.apple.com/us/album/now-in-control-ep/1382944981?app=itunes&amp;at=1000lKSp"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 124.22 26.16"><path d="M30.95 12.31a1.08 1.08 0 0 1 2.16 0c0 .59-.48 1.06-1.09 1.06-.6 0-1.08-.47-1.08-1.06zm.14 2.4h1.86v9.06H31.1V14.7zm6.82 9.06V13H34.1v-1.66h9.54V13h-3.8v10.78h-1.93zm13.51 0h-1.78v-1.56h-.05c-.51 1.09-1.42 1.66-2.8 1.66-1.98 0-3.19-1.27-3.19-3.35V14.7h1.86v5.46c0 1.38.66 2.11 1.94 2.11 1.35 0 2.16-.93 2.16-2.34V14.7h1.86v9.07zm1.83-9.07h1.78v1.55h.04c.54-1.1 1.46-1.65 2.86-1.65 2 0 3.14 1.28 3.14 3.36v5.81H59.2v-5.45c0-1.36-.63-2.12-1.94-2.12-1.33 0-2.14.95-2.14 2.35v5.22h-1.87V14.7zm17.39 6.4c-.25 1.65-1.86 2.78-3.9 2.78-2.65 0-4.28-1.76-4.28-4.6 0-2.85 1.64-4.69 4.2-4.69 2.5 0 4.08 1.72 4.08 4.47v.64h-6.4v.12c0 1.55.97 2.56 2.43 2.56 1.04 0 1.85-.49 2.1-1.27h1.77zm-6.3-2.7h4.54c-.04-1.39-.93-2.3-2.23-2.3-1.28 0-2.21.93-2.3 2.3zm11.22-3.8c2.01 0 3.45 1.11 3.5 2.71H77.3c-.07-.8-.75-1.29-1.79-1.29-1 0-1.68.47-1.68 1.17 0 .55.45.9 1.39 1.14l1.52.36c1.83.43 2.52 1.1 2.52 2.44 0 1.63-1.55 2.75-3.77 2.75-2.13 0-3.57-1.1-3.71-2.75h1.84c.13.88.83 1.34 1.96 1.34 1.11 0 1.81-.46 1.81-1.18 0-.56-.34-.86-1.3-1.1l-1.61-.4c-1.64-.4-2.47-1.23-2.47-2.5 0-1.6 1.44-2.7 3.55-2.7zm10.3 5.7c.14 1.24 1.34 2.05 2.98 2.05 1.56 0 2.7-.81 2.7-1.92 0-.97-.69-1.55-2.3-1.94l-1.61-.4c-2.29-.54-3.35-1.61-3.35-3.34 0-2.15 1.87-3.63 4.53-3.63 2.63 0 4.43 1.48 4.49 3.63h-1.88c-.11-1.25-1.14-2-2.64-2s-2.52.76-2.52 1.87c0 .87.65 1.4 2.25 1.79l1.38.33c2.55.6 3.6 1.63 3.6 3.45 0 2.33-1.85 3.79-4.8 3.79-2.75 0-4.62-1.43-4.74-3.68h1.91zm11.56-7.75v2.15h1.72v1.48h-1.72v5c0 .77.34 1.13 1.1 1.13.19 0 .49-.02.61-.04v1.47c-.2.05-.62.08-1.03.08-1.84 0-2.56-.69-2.56-2.45v-5.2h-1.32V14.7h1.32v-2.15h1.88zm2.48 6.69c0-2.86 1.69-4.65 4.3-4.65 2.64 0 4.3 1.8 4.3 4.65 0 2.86-1.66 4.64-4.3 4.64-2.63 0-4.3-1.78-4.3-4.64zm6.71 0c0-1.96-.9-3.12-2.4-3.12s-2.4 1.17-2.4 3.12c0 1.96.89 3.1 2.4 3.1s2.4-1.14 2.4-3.1zm3.33-4.54h1.78v1.55h.04a2.16 2.16 0 0 1 2.18-1.64c.27 0 .5.03.64.07v1.74a2.62 2.62 0 0 0-.83-.12c-1.2 0-1.94.82-1.94 2.1v5.37h-1.87V14.7zm13.18 6.4c-.25 1.65-1.85 2.78-3.9 2.78-2.64 0-4.28-1.76-4.28-4.6 0-2.85 1.65-4.69 4.2-4.69 2.5 0 4.08 1.72 4.08 4.47v.64h-6.4v.12c0 1.55.97 2.56 2.44 2.56 1.03 0 1.84-.49 2.1-1.27h1.76zm-6.3-2.7h4.54c-.04-1.39-.93-2.3-2.22-2.3s-2.22.93-2.31 2.3z"/><defs><path id="a" d="M0 0h25.16v25.16H0z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><g clip-path="url(#b)"><defs><path id="c" d="M7.72 0h-.75l-.76.01c-.55.02-1.1.05-1.65.15a5.6 5.6 0 0 0-2.91 1.49 5.3 5.3 0 0 0-1.5 2.9C.07 5.1.04 5.66.02 6.22v.76L0 7.69v9.78a87.12 87.12 0 0 0 .01 1.48c.02.55.05 1.1.15 1.65a5.56 5.56 0 0 0 1.49 2.91 5.27 5.27 0 0 0 2.9 1.5c.55.1 1.1.13 1.66.14a32.02 32.02 0 0 0 1.5.01H18.2l.76-.01a11.5 11.5 0 0 0 1.66-.14 5.57 5.57 0 0 0 2.9-1.5 5.27 5.27 0 0 0 1.5-2.9c.1-.55.13-1.1.14-1.66a32.02 32.02 0 0 0 .01-1.48V6.97l-.01-.76c-.01-.55-.05-1.1-.14-1.65a5.56 5.56 0 0 0-1.5-2.91 5.27 5.27 0 0 0-2.9-1.5c-.55-.09-1.1-.12-1.66-.14h-.76L17.44 0H7.72z"/></defs><clipPath id="d"><use xlink:href="#c" overflow="visible"/></clipPath><linearGradient id="e" gradientUnits="userSpaceOnUse" x1="-1245.58" y1="-853.43" x2="-1245.55" y2="-853.43" gradientTransform="matrix(0 961.0199 961.0199 0 820180.19 1197022.63)"><stop offset="0" stop-color="#ef4db7"/><stop offset="1" stop-color="#c643fd"/></linearGradient><path clip-path="url(#d)" fill="url(#e)" d="M0 0h25.16v25.16H0z"/></g><g clip-path="url(#b)"><defs><path id="f" d="M12.43 3.2a.52.52 0 0 0-.14.13l-.02.03c-.06.08-.1.17-.14.26l-.29.81-1.68 5.18h4.83l-1.68-5.18c-.09-.27-.18-.54-.29-.81-.03-.1-.08-.18-.13-.26l-.02-.03a.5.5 0 0 0-.14-.13.29.29 0 0 0-.15-.05.3.3 0 0 0-.15.05"/></defs><clipPath id="g"><use xlink:href="#f" overflow="visible"/></clipPath><radialGradient id="h" cx="-1245.76" cy="-855.89" r=".03" gradientTransform="matrix(717.8253 0 0 -717.8253 894237.31 -614363.31)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fbe3f8"/><stop offset=".74" stop-color="#fbe3f8"/><stop offset=".81" stop-color="#fadef6"/><stop offset=".88" stop-color="#f9d1f0"/><stop offset=".96" stop-color="#f6bae7"/><stop offset=".98" stop-color="#f5b1e3"/><stop offset="1" stop-color="#f5b1e3"/></radialGradient><path clip-path="url(#g)" fill="url(#h)" d="M10.16 3.15H15v6.46h-4.84z"/></g><g clip-path="url(#b)"><defs><path id="i" d="M12.58 17.05l4.4 3.2.71.49c.09.05.17.1.27.13l.03.01.19.03a.4.4 0 0 0 .15-.06.29.29 0 0 0 .1-.12.53.53 0 0 0 .03-.19v-.04c0-.1-.02-.2-.04-.29a15.8 15.8 0 0 0-.25-.83l-1.68-5.17-3.91 2.84z"/></defs><clipPath id="j"><use xlink:href="#i" overflow="visible"/></clipPath><radialGradient id="k" cx="-1245.76" cy="-855.89" r=".03" gradientTransform="matrix(717.8253 0 0 -717.8253 894237.31 -614363.31)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f9e3fb"/><stop offset=".75" stop-color="#f9e3fb"/><stop offset=".81" stop-color="#f8defb"/><stop offset=".88" stop-color="#f3d0fa"/><stop offset=".96" stop-color="#ecbaf9"/><stop offset=".98" stop-color="#eab2f9"/><stop offset="1" stop-color="#eab2f9"/></radialGradient><path clip-path="url(#j)" fill="url(#k)" d="M12.58 14.21h5.88v6.7h-5.88z"/></g><g clip-path="url(#b)"><defs><path id="l" d="M4.72 9.6c-.3 0-.58.02-.87.03-.1 0-.2.02-.29.05l-.03.01a.5.5 0 0 0-.17.1.28.28 0 0 0-.09.12.3.3 0 0 0 0 .16c.01.06.04.11.08.17l.02.03c.06.08.13.15.2.21l.7.53 4.4 3.2 1.49-4.6H4.72z"/></defs><clipPath id="m"><use xlink:href="#l" overflow="visible"/></clipPath><radialGradient id="n" cx="-1245.86" cy="-856.1" r=".03" gradientTransform="matrix(978.9961 0 0 -978.9961 1219679.13 -838118)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fae1f8"/><stop offset=".6" stop-color="#fae1f8"/><stop offset=".85" stop-color="#f7d6f7"/><stop offset="1" stop-color="#f7d6f7"/></radialGradient><path clip-path="url(#m)" fill="url(#n)" d="M3.25 9.61h6.9v4.6h-6.9z"/></g><g clip-path="url(#b)"><defs><path id="o" d="M6.98 19.38a12.95 12.95 0 0 0-.29 1.13v.03c0 .07.02.13.04.19.02.05.05.1.1.12.04.03.09.05.14.05a.5.5 0 0 0 .2-.02l.03-.01c.09-.03.18-.08.26-.13.24-.16.48-.32.71-.5l4.4-3.2-2.48-1.8-1.43-1.03-1.68 5.17z"/></defs><clipPath id="p"><use xlink:href="#o" overflow="visible"/></clipPath><radialGradient id="q" cx="-1246.74" cy="-855.42" r=".03" gradientTransform="matrix(696.9604 0 0 -696.9604 868944.88 -596170.19)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fae9fc"/><stop offset=".67" stop-color="#fae9fc"/><stop offset=".81" stop-color="#f8defa"/><stop offset=".91" stop-color="#f6d4f8"/><stop offset="1" stop-color="#f6d4f8"/></radialGradient><path clip-path="url(#p)" fill="url(#q)" d="M6.7 14.21h5.88v6.7H6.7z"/></g><g clip-path="url(#b)"><defs><path id="r" d="M15 9.6l1.49 4.6 4.4-3.2c.23-.16.46-.34.69-.52a.95.95 0 0 0 .2-.2l.02-.04a.5.5 0 0 0 .09-.17.3.3 0 0 0 0-.16.28.28 0 0 0-.1-.13.5.5 0 0 0-.16-.09h-.04a1 1 0 0 0-.29-.06l-.86-.02h-5.45z"/></defs><clipPath id="s"><use xlink:href="#r" overflow="visible"/></clipPath><radialGradient id="t" cx="-1246.74" cy="-855.42" r=".03" gradientTransform="matrix(696.9604 0 0 -696.9604 868944.88 -596170.19)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fae9fb"/><stop offset=".68" stop-color="#fae9fb"/><stop offset=".81" stop-color="#f8def8"/><stop offset=".98" stop-color="#f5caf2"/><stop offset="1" stop-color="#f5caf2"/></radialGradient><path clip-path="url(#s)" fill="url(#t)" d="M14.99 9.61h6.91v4.6h-6.91z"/></g><path clip-path="url(#b)" fill="#FFF" d="M10.16 9.6l-1.5 4.6 1.43 1.05 2.49 1.8 3.9-2.84L15 9.6z"/><path d="M30.9 7.54V1.48h2.42c1.14 0 1.83.58 1.83 1.51 0 .64-.47 1.2-1.07 1.3v.07c.82.09 1.37.67 1.37 1.46 0 1.07-.78 1.72-2.07 1.72h-2.49zm.93-3.5h1.12c.83 0 1.26-.3 1.26-.88 0-.55-.4-.88-1.1-.88h-1.28v1.77zm1.36 2.7c.85 0 1.3-.35 1.3-.99 0-.63-.47-.96-1.35-.96h-1.3v1.95h1.35zm7.33.8h-.87V6.8h-.07c-.22.52-.69.81-1.38.81-1.01 0-1.57-.61-1.57-1.69V2.97h.9V5.7c0 .74.3 1.09.96 1.09.73 0 1.13-.43 1.13-1.15V2.97h.9v4.57zm1.51 1.63V8.4l.3.01c.42 0 .66-.17.82-.63l.06-.23-1.65-4.58h.98L43.7 6.6h.07l1.14-3.63h.96l-1.7 4.76c-.4 1.1-.83 1.46-1.76 1.46-.07 0-.29 0-.37-.02zm7.12-3.92c0-1.47.82-2.37 2.16-2.37 1.33 0 2.15.9 2.15 2.37 0 1.48-.82 2.37-2.15 2.37-1.34 0-2.16-.89-2.16-2.37zm3.38 0c0-1-.44-1.57-1.22-1.57-.79 0-1.23.58-1.23 1.57 0 1 .44 1.57 1.23 1.57.78 0 1.22-.58 1.22-1.57zm2.13-2.28h.87v.72h.07c.22-.5.68-.81 1.36-.81 1.02 0 1.59.61 1.59 1.7v2.96h-.9V4.8c0-.73-.32-1.1-1-1.1-.66 0-1.08.45-1.08 1.16v2.68h-.9V2.97z"/></svg></a></div>
              <div><a data-title="Stream on Google Play" href="https://play.google.com/store/music/artist/Lorenzo_Wood?id=An7ymzwbymdsefsxsdls3ffz56u"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 561.8 129.2"><path d="M89.2 84.5c15.3-8.4 27-14.8 28-15.3 3.2-1.7 6.5-6.2 0-9.7-2.1-1.1-13.4-7.3-28-15.3L69.1 64.4l20.1 20.1z" fill="#ffd400"/><path d="M69.1 64.4L4.9 129.1c1.5.2 3.2-.2 5.2-1.3 4.2-2.3 48.8-26.7 79.1-43.3L69.1 64.4z" fill="#f33"/><path d="M69.1 64.4l20.1-20.2S14.6 3.5 10.1 1.1C8.4.1 6.5-.2 4.8.1l64.3 64.3z" fill="#48ff48"/><path d="M69.1 64.4L4.8.1C2.2.7 0 3 0 7.7v113.8c0 4.3 1.7 7.4 4.9 7.7l64.2-64.8z" fill="#3bccff"/><path d="M278.2 51.6c-11.5 0-21 8.9-21 21.1 0 12.1 9.4 21.1 21 21.1s21-8.9 21-21.1c0-12.2-9.4-21.1-21-21.1zm0 33.9c-6.3 0-11.8-5.3-11.8-12.8 0-7.6 5.5-12.8 11.8-12.8 6.3 0 11.8 5.2 11.8 12.8 0 7.5-5.5 12.8-11.8 12.8zm-45.8-33.9c-11.6 0-21 8.9-21 21.1 0 12.1 9.4 21.1 21 21.1s21-8.9 21-21.1c0-12.2-9.4-21.1-21-21.1zm0 33.9c-6.3 0-11.8-5.3-11.8-12.8 0-7.6 5.5-12.8 11.8-12.8 6.3 0 11.8 5.2 11.8 12.8 0 7.5-5.4 12.8-11.8 12.8zM178 58.1V67h21.2c-.6 5-2.3 8.7-4.8 11.2-3.1 3.1-7.9 6.5-16.4 6.5-13.1 0-23.3-10.6-23.3-23.8s10.2-23.8 23.3-23.8c7.1 0 12.2 2.8 16 6.4l6.3-6.3c-5.3-5.1-12.4-9-22.3-9-17.9 0-33 14.7-33 32.7s15 32.7 33 32.7c9.7 0 16.9-3.2 22.7-9.2 5.9-5.9 7.7-14.2 7.7-20.9 0-2.1-.2-4-.5-5.6l-29.9.2zM400.7 65c-1.7-4.7-7.1-13.4-17.9-13.4-10.8 0-19.7 8.5-19.7 21.1 0 11.8 8.9 21.1 20.7 21.1 9.6 0 15.1-5.9 17.4-9.3l-7.1-4.8c-2.4 3.5-5.6 5.8-10.3 5.8-4.7 0-8-2.1-10.1-6.4l28-11.7-1-2.4zm-28.5 7.1c-.2-8.1 6.3-12.3 10.9-12.3 3.7 0 6.7 1.8 7.8 4.5l-18.7 7.8zm-22.7 20.4h9.2V30.6h-9.2v61.9zm-15.1-36.2h-.3c-2.1-2.5-6-4.7-11-4.7-10.5 0-20 9.3-20 21.1s9.6 21 20 21c5 0 8.9-2.2 11-4.8h.3v3c0 8.1-4.3 12.4-11.2 12.4-5.6 0-9.1-4.1-10.5-7.5l-8 3.4c2.3 5.6 8.4 12.5 18.5 12.5 10.8 0 19.9-6.4 19.9-21.9V52.9h-8.7v3.4zm-10.5 29.2c-6.3 0-11.6-5.3-11.6-12.7 0-7.4 5.3-12.8 11.6-12.8 6.2 0 11.2 5.4 11.2 12.8 0 7.3-5 12.7-11.2 12.7zm119.8-54.9h-22v61.9h9.2V69h12.8c10.2 0 20.2-7.4 20.2-19.2 0-11.8-10-19.2-20.2-19.2zm.3 29.8h-13.1V39.2H444c6.8 0 10.8 5.7 10.8 10.6-.1 4.8-4 10.6-10.8 10.6zm56.7-8.9c-6.6 0-13.5 2.9-16.3 9.5l8.1 3.4c1.8-3.4 5-4.5 8.4-4.5 4.8 0 9.6 2.9 9.7 8v.6c-1.7-1-5.2-2.4-9.6-2.4-8.8 0-17.7 4.9-17.7 13.9 0 8.3 7.2 13.6 15.2 13.6 6.2 0 9.6-2.8 11.7-6.1h.3v4.8h8.9V68.6c-.1-10.9-8.2-17.1-18.7-17.1zm-1.1 33.9c-3 0-7.2-1.5-7.2-5.2 0-4.8 5.2-6.6 9.7-6.6 4 0 5.9.9 8.4 2.1-.7 5.7-5.6 9.7-10.9 9.7zm52-32.5l-10.5 26.8h-.3l-10.9-26.8H520l16.4 37.5-9.3 20.9h9.6l25.2-58.4h-10.3zM469 92.5h9.2V30.6H469v61.9z" fill="#808285"/></svg></a></div>
              <div><a data-title="Stream on Apple Music" href="https://geo.itunes.apple.com/us/album/now-in-control-ep/1382944981?mt=1&amp;app=music&amp;at=1000lKSp"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 105.53 22.77"><defs><clipPath id="y" transform="translate(-334.25 -290.7)"><path d="M349.38 293.98l-.56.1-6.36 1.28a.89.89 0 0 0-.4.18.65.65 0 0 0-.22.41 1.4 1.4 0 0 0-.01.22v7.95a.78.78 0 0 1-.14.53.72.72 0 0 1-.46.23l-.42.09a7.26 7.26 0 0 0-1.18.3 1.85 1.85 0 0 0-.7.44 1.7 1.7 0 0 0 .1 2.4 1.6 1.6 0 0 0 .77.39 2.84 2.84 0 0 0 1.14-.06 2.34 2.34 0 0 0 .75-.27 1.87 1.87 0 0 0 .58-.55 1.98 1.98 0 0 0 .31-.73 3.64 3.64 0 0 0 .07-.78v-6.91c0-.37.1-.47.4-.54l5.54-1.12c.34-.06.5.04.5.4v4.71a.78.78 0 0 1-.12.53.72.72 0 0 1-.47.24l-.41.08a7.26 7.26 0 0 0-1.18.3 1.85 1.85 0 0 0-.7.44 1.66 1.66 0 0 0 .1 2.4 1.6 1.6 0 0 0 .76.39 2.84 2.84 0 0 0 1.15-.06 2.33 2.33 0 0 0 .74-.27 1.87 1.87 0 0 0 .59-.54 1.98 1.98 0 0 0 .31-.74 3.66 3.66 0 0 0 .06-.78v-10.1c0-.37-.2-.6-.54-.56z" fill="none"/></clipPath><filter id="x" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feColorMatrix values="-1 0 0 0 1 0 -1 0 0 1 0 0 -1 0 1 0 0 0 1 0"/></filter><mask id="z" x="2.24" y="1.27" width="15.48" height="18.6" maskUnits="userSpaceOnUse"><image width="258" height="310" transform="matrix(.06 0 0 .06 2.24 1.27)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEQAAABQCAMAAACXiiMNAAAAGFBMVEUCAgI2NjZhYWGMjIy+vr7s7Oz////g4OAoXNwcAAABBUlEQVR42u3X0WrFMAwD0FqS7f//4zEGNeQuI3G3wUb0VqgOTZOS9Do5+cnY0z4oic/6Hu9J6/fvuLX7LcRAKqs6IDv9NoIaQB9RxGPE8iB/D/EUAXaQ6ttHV9tI9e9wFak+UY1txKvfRlj3tRHVVR/hQQ5ykIP8AqJvQOBPEQM9niBGKSOigZTge3uxvyDQ7oaOGBHL2EX0gij2EINiRODriBmojHhBGGtIvf8FJGcIMyIWEc2MiDmCYTSYfhAjMp9hLZ7m+cVzyhaPehxH6/dYyhgRHxB8+vfiKeKaxRZWkwGwnZOrrk60MId7519nQxgWSqJH1M+jJ+16EIAE7Do5+cd5A6FqF0cqgijOAAAAAElFTkSuQmCC" filter="url(#x)"/></mask></defs><g><path d="M15.51 0H5.88A9.31 9.31 0 0 0 3.3.27 4.53 4.53 0 0 0 .42 2.85 8.39 8.39 0 0 0 0 5.88v9.63a8.39 8.39 0 0 0 .42 3.04 4.53 4.53 0 0 0 2.88 2.58 9.32 9.32 0 0 0 2.58.27h9.63a9.32 9.32 0 0 0 2.59-.27 4.53 4.53 0 0 0 2.88-2.58 8.39 8.39 0 0 0 .42-3.04V5.88a8.39 8.39 0 0 0-.42-3.03A4.53 4.53 0 0 0 18.1.27 9.31 9.31 0 0 0 15.51 0z"/><path d="M15.51.3a8.92 8.92 0 0 1 2.5.26 4.15 4.15 0 0 1 1.41.73 4.23 4.23 0 0 1 1.28 1.67 8.15 8.15 0 0 1 .4 2.92v9.63a8.15 8.15 0 0 1-.4 2.93 4.23 4.23 0 0 1-1.28 1.67 4.15 4.15 0 0 1-1.4.73 8.92 8.92 0 0 1-2.5.26H5.87a8.92 8.92 0 0 1-2.5-.26 4.16 4.16 0 0 1-1.4-.73A4.23 4.23 0 0 1 .7 18.44a8.15 8.15 0 0 1-.4-2.93V5.88a8.15 8.15 0 0 1 .4-2.92A4.23 4.23 0 0 1 1.97 1.3 4.15 4.15 0 0 1 3.38.56 8.92 8.92 0 0 1 5.88.3h9.63" fill="#fff"/><g><g clip-path="url(#y)"><image width="237" height="284" transform="matrix(.06 0 0 .06 2.87 2.04)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAYCAIAAAB1KUohAAACTUlEQVR4AWLc7ugjxwOoik60k8diGADbspO2MPv2/m85JHfxSJfA9C+qDtuHbk5uf3/mz3tsAOBmjKmLj1jJaTk8Bxtb943P2fnP59fv+/4VkQYvGLNkEasxKZ/MlSW3jhzI/H2/f2FPN1+sBp95CVIyQTDVr0HIq4nvcU8LL5tmdPLPZVfmhZd5Y7zwJ+5wq7IhfP3TTwOXh6ODJiRfZiWEgTtXJ7Ux37HkdDTX5TVKZbF44apb+XSbtTC7iJ1SeAQaQQg3mWzCMYQjZ92sZmFOF56ME1sHBtADZ2rqpF+YkmwAwr2+uFQ1dXQQ1zqtdwd9A86IlnEqku2JHfR52peVHtMnp4fbWFfbYs0qS244NmInHsLOzoPH1l8N+qLUgTv8vM6MY2fnsTt9S3QwMYm1zGObF3HZdOHT0F1Ym4GD2Z7xlt5TjMuT+PBbEZN5DV2qkTUsjODyI/xInGEPzm7ew+gnsXn+a/fpKC+CAetYOJybCvwIf8CJz/AGEwZnTfjht2kYbs28X8tkLibPNkZYUhkMrJzLfhsWHORyh3NTAKv5nEEd+rT4pKPIOmXUcC7bbd1Pa4GWOt5l0g+9rHXgIm6SY7jwRE1YPrA3BPHJWVxYHqZ9MdOm8BweGn/j0/MMrJ9/nZk+ja19WLtknfBBue4L8YBknPA3PmDMklf3cF0UnF44bPUTA8IwZT15e6atdGF1D41PNb1nc29grMVKKpdRL6ZDqbvM5XtU9vD3rfs/ofSVkauvaF9yXTPeC/3Kj/I7Wz31pPQE9h+kufjoytQBowAAAABJRU5ErkJggg=="/><g><g style="mix-blend-mode:multiply"><path d="M15.13 3.27l-.56.1L8.2 4.65a.89.89 0 0 0-.4.18.65.65 0 0 0-.22.42 1.4 1.4 0 0 0-.01.21v7.96a.78.78 0 0 1-.14.52.72.72 0 0 1-.47.24l-.41.08a7.26 7.26 0 0 0-1.18.3 1.85 1.85 0 0 0-.7.45 1.7 1.7 0 0 0 .1 2.39 1.6 1.6 0 0 0 .76.4 2.84 2.84 0 0 0 1.15-.06 2.34 2.34 0 0 0 .75-.28 1.87 1.87 0 0 0 .58-.54 1.98 1.98 0 0 0 .31-.73 3.64 3.64 0 0 0 .07-.79V8.5c0-.38.1-.47.4-.55l5.54-1.11c.34-.07.5.03.5.4v4.7a.78.78 0 0 1-.12.54.72.72 0 0 1-.47.23l-.41.09a7.26 7.26 0 0 0-1.18.3 1.85 1.85 0 0 0-.7.44 1.66 1.66 0 0 0 .09 2.39 1.6 1.6 0 0 0 .77.4 2.84 2.84 0 0 0 1.15-.07 2.33 2.33 0 0 0 .74-.27 1.87 1.87 0 0 0 .59-.54 1.98 1.98 0 0 0 .31-.73 3.66 3.66 0 0 0 .06-.79V3.83c0-.36-.2-.59-.54-.56z" fill="#fff"/><g mask="url(#z)"><path d="M15.13 3.27l-.56.1L8.2 4.65a.89.89 0 0 0-.4.18.65.65 0 0 0-.22.42 1.4 1.4 0 0 0-.01.21v7.96a.78.78 0 0 1-.14.52.72.72 0 0 1-.47.24l-.41.08a7.26 7.26 0 0 0-1.18.3 1.85 1.85 0 0 0-.7.45 1.7 1.7 0 0 0 .1 2.39 1.6 1.6 0 0 0 .76.4 2.84 2.84 0 0 0 1.15-.06 2.34 2.34 0 0 0 .75-.28 1.87 1.87 0 0 0 .58-.54 1.98 1.98 0 0 0 .31-.73 3.64 3.64 0 0 0 .07-.79V8.5c0-.38.1-.47.4-.55l5.54-1.11c.34-.07.5.03.5.4v4.7a.78.78 0 0 1-.12.54.72.72 0 0 1-.47.23l-.41.09a7.26 7.26 0 0 0-1.18.3 1.85 1.85 0 0 0-.7.44 1.66 1.66 0 0 0 .09 2.39 1.6 1.6 0 0 0 .77.4 2.84 2.84 0 0 0 1.15-.07 2.33 2.33 0 0 0 .74-.27 1.87 1.87 0 0 0 .59-.54 1.98 1.98 0 0 0 .31-.73 3.66 3.66 0 0 0 .06-.79V3.83c0-.36-.2-.59-.54-.56z" style="mix-blend-mode:multiply" opacity=".1"/></g></g><path d="M15.13 3.27l-.56.1L8.2 4.65a.89.89 0 0 0-.4.18.65.65 0 0 0-.22.42 1.4 1.4 0 0 0-.01.21v7.96a.78.78 0 0 1-.14.52.72.72 0 0 1-.47.24l-.41.08a7.26 7.26 0 0 0-1.18.3 1.85 1.85 0 0 0-.7.45 1.7 1.7 0 0 0 .1 2.39 1.6 1.6 0 0 0 .76.4 2.84 2.84 0 0 0 1.15-.06 2.34 2.34 0 0 0 .75-.28 1.87 1.87 0 0 0 .58-.54 1.98 1.98 0 0 0 .31-.73 3.64 3.64 0 0 0 .07-.79V8.5c0-.38.1-.47.4-.55l5.54-1.11c.34-.07.5.03.5.4v4.7a.78.78 0 0 1-.12.54.72.72 0 0 1-.47.23l-.41.09a7.26 7.26 0 0 0-1.18.3 1.85 1.85 0 0 0-.7.44 1.66 1.66 0 0 0 .09 2.39 1.6 1.6 0 0 0 .77.4 2.84 2.84 0 0 0 1.15-.07 2.33 2.33 0 0 0 .74-.27 1.87 1.87 0 0 0 .59-.54 1.98 1.98 0 0 0 .31-.73 3.66 3.66 0 0 0 .06-.79V3.83c0-.36-.2-.59-.54-.56z" fill="none"/></g></g></g><g><g><path d="M29.47 6.4h-3.21V1.27h.8v4.41h2.41zm.93-5.03a.5.5 0 1 1 .49.47.47.47 0 0 1-.5-.47zm.1 1.15h.77v3.89h-.76zm3.43-.08c.87 0 1.44.41 1.52 1.1h-.74c-.07-.29-.35-.47-.78-.47-.43 0-.76.2-.76.5 0 .24.2.39.62.48l.65.15c.74.17 1.08.5 1.08 1.06 0 .73-.68 1.22-1.6 1.22-.93 0-1.54-.41-1.6-1.1h.76a.79.79 0 0 0 .85.48c.48 0 .82-.21.82-.52 0-.24-.18-.38-.57-.48l-.68-.15c-.74-.18-1.08-.51-1.08-1.1 0-.68.63-1.17 1.5-1.17zm3.63-.89v.99h.84v.64h-.84v2c0 .41.17.59.55.59a2.52 2.52 0 0 0 .3-.02v.64a2.47 2.47 0 0 1-.42.04c-.86 0-1.2-.3-1.2-1.05v-2.2h-.61v-.64h.61v-.99zm5.1 3.81a1.58 1.58 0 0 1-1.69 1.12 1.77 1.77 0 0 1-1.8-2 1.8 1.8 0 0 1 1.8-2.04c1.08 0 1.73.74 1.73 1.97v.26h-2.74v.05a1.03 1.03 0 0 0 1.03 1.1.93.93 0 0 0 .93-.46zm-2.7-1.26h1.96a.94.94 0 0 0-.96-1 1 1 0 0 0-1 1zm3.77-1.58h.74v.62h.05a1.16 1.16 0 0 1 1.16-.7 1.27 1.27 0 0 1 1.35 1.45v2.52h-.77V4.08c0-.62-.27-.93-.84-.93a.9.9 0 0 0-.93.98v2.28h-.76zm6.39 1.94a2.65 2.65 0 0 1 .13-.84 1.83 1.83 0 0 1 3.41 0 2.65 2.65 0 0 1 .13.84 1.84 1.84 0 1 1-3.67 0zm2.88 0c0-.84-.38-1.33-1.04-1.33-.67 0-1.04.49-1.04 1.33 0 .85.37 1.34 1.04 1.34.66 0 1.04-.5 1.04-1.34zm1.81-1.94h.74v.62h.06a1.16 1.16 0 0 1 1.16-.7 1.27 1.27 0 0 1 1.35 1.45v2.52h-.77V4.08c0-.62-.27-.93-.84-.93a.9.9 0 0 0-.93.98v2.28h-.77z"/></g><g><path d="M32.46 17.37h-4.03l-.97 2.85h-1.7l3.81-10.57h1.77l3.82 10.57h-1.74zm-3.61-1.32h3.19l-1.58-4.64h-.04zm14.55.32c0 2.4-1.29 3.93-3.22 3.93a2.61 2.61 0 0 1-2.43-1.34h-.03v3.81h-1.59V12.52h1.53v1.28h.03a2.73 2.73 0 0 1 2.46-1.36c1.95 0 3.24 1.54 3.24 3.93zm-1.63 0c0-1.56-.81-2.59-2.04-2.59-1.2 0-2.02 1.05-2.02 2.59 0 1.55.81 2.6 2.02 2.6 1.23 0 2.04-1.03 2.04-2.6zm10.1 0c0 2.4-1.29 3.93-3.22 3.93a2.61 2.61 0 0 1-2.42-1.34h-.04v3.81h-1.58V12.52h1.53v1.28h.03a2.73 2.73 0 0 1 2.45-1.36c1.96 0 3.25 1.54 3.25 3.93zm-1.63 0c0-1.56-.8-2.59-2.04-2.59-1.2 0-2.02 1.05-2.02 2.59 0 1.55.82 2.6 2.02 2.6 1.23 0 2.04-1.03 2.04-2.6zm2.9-6.72h1.58v10.57h-1.58zm9.81 8.31a3.1 3.1 0 0 1-3.31 2.36c-2.24 0-3.64-1.5-3.64-3.91 0-2.42 1.4-3.99 3.57-3.99 2.13 0 3.47 1.47 3.47 3.8v.54H57.6v.1a2 2 0 0 0 2.07 2.18 1.74 1.74 0 0 0 1.78-1.08zm-5.34-2.3h3.85a1.85 1.85 0 0 0-1.89-1.96 1.95 1.95 0 0 0-1.96 1.96zm19.08 4.56v-7.78h-.05l-3.19 7.7h-1.22l-3.19-7.7H69v7.78h-1.5V9.65h1.9L72.81 18h.06l3.42-8.35h1.9v10.57zm9.92 0H85.1V18.9h-.04a2.4 2.4 0 0 1-2.39 1.41 2.57 2.57 0 0 1-2.7-2.85v-4.94h1.58v4.63c0 1.18.56 1.8 1.65 1.8a1.78 1.78 0 0 0 1.83-2v-4.43h1.58zm4.5-7.79c1.7 0 2.93.94 2.97 2.3h-1.49c-.06-.68-.64-1.1-1.52-1.1-.86 0-1.43.4-1.43 1 0 .47.38.77 1.18.97l1.3.3c1.55.37 2.13.95 2.13 2.07 0 1.4-1.31 2.35-3.2 2.35-1.81 0-3.04-.93-3.15-2.34h1.56c.11.74.7 1.14 1.67 1.14.94 0 1.53-.4 1.53-1 0-.48-.29-.74-1.1-.94l-1.37-.34c-1.4-.34-2.1-1.05-2.1-2.12 0-1.36 1.23-2.3 3.02-2.3zm4.38-1.94a.92.92 0 1 1 .91.9.9.9 0 0 1-.91-.9zm.12 2.03h1.58v7.7h-1.58zm8.39 2.65a1.7 1.7 0 0 0-1.81-1.42c-1.22 0-2.02 1.02-2.02 2.62 0 1.64.81 2.63 2.03 2.63a1.66 1.66 0 0 0 1.8-1.39h1.53a3.08 3.08 0 0 1-3.34 2.7c-2.2 0-3.63-1.5-3.63-3.94 0-2.4 1.43-3.95 3.62-3.95a3.1 3.1 0 0 1 3.34 2.75z"/></g></g></g></svg></a></div>
              <div><a data-title="Stream on Spotify" href="https://open.spotify.com/album/1SbBCWfrhKUrgp8AqDvESa?si=BmIlypbURYms7AmVbjOpMw"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 559 168"><path fill="#1ED760" d="M84 .28a83.74 83.74 0 1 0 0 167.48A83.74 83.74 0 0 0 84 .28zm38.4 120.78a5.22 5.22 0 0 1-7.18 1.73c-19.66-12.01-44.41-14.73-73.56-8.07a5.22 5.22 0 0 1-2.33-10.18c31.9-7.3 59.27-4.15 81.34 9.34a5.22 5.22 0 0 1 1.73 7.18zm10.25-22.8a6.53 6.53 0 0 1-8.98 2.15c-22.51-13.84-56.82-17.85-83.45-9.76a6.54 6.54 0 0 1-3.8-12.5c30.42-9.22 68.23-4.75 94.08 11.13a6.53 6.53 0 0 1 2.15 8.98zm.88-23.75c-26.99-16.03-71.52-17.5-97.29-9.68a7.83 7.83 0 1 1-4.55-15c29.58-8.97 78.76-7.24 109.83 11.2a7.82 7.82 0 1 1-7.99 13.48zm94.56 3.07c-14.46-3.44-17.03-5.87-17.03-10.95 0-4.8 4.52-8.04 11.25-8.04 6.52 0 12.98 2.46 19.76 7.51.2.16.46.22.71.18a.93.93 0 0 0 .63-.39l7.06-9.95a.95.95 0 0 0-.18-1.29c-8.07-6.47-17.15-9.62-27.77-9.62-15.61 0-26.52 9.37-26.52 22.77 0 14.38 9.41 19.47 25.67 23.4 13.83 3.19 16.17 5.86 16.17 10.63 0 5.29-4.72 8.58-12.32 8.58-8.44 0-15.33-2.85-23.03-9.51a.94.94 0 0 0-1.34.1l-7.92 9.42c-.33.4-.29.98.09 1.32a47.19 47.19 0 0 0 31.88 12.22c16.82 0 27.69-9.2 27.69-23.42.03-12.01-7.16-18.66-24.77-22.94l-.03-.02zm62.86-14.26c-7.29 0-13.27 2.88-18.21 8.76v-6.62a.94.94 0 0 0-.94-.95h-12.95a.94.94 0 0 0-.94.95v73.6c0 .52.42.95.94.95h12.95c.52 0 .94-.43.94-.95v-23.23c4.94 5.53 10.92 8.24 18.21 8.24 13.55 0 27.27-10.43 27.27-30.37.02-19.94-13.7-30.38-27.26-30.38h-.01zm12.21 30.38c0 10.15-6.25 17.24-15.21 17.24-8.85 0-15.53-7.41-15.53-17.24 0-9.83 6.68-17.24 15.53-17.24 8.81 0 15.21 7.25 15.21 17.24zm50.21-30.38c-17.45 0-31.12 13.44-31.12 30.6 0 16.97 13.58 30.26 30.91 30.26 17.51 0 31.22-13.4 31.22-30.48 0-17.03-13.62-30.37-31.01-30.37zm0 47.72c-9.28 0-16.28-7.46-16.28-17.35 0-9.93 6.76-17.13 16.07-17.13 9.34 0 16.38 7.46 16.38 17.35 0 9.93-6.8 17.13-16.17 17.13zm68.27-46.53h-14.25V49.94a.94.94 0 0 0-.94-.95H393.5a.95.95 0 0 0-.95.95v14.57h-6.22a.94.94 0 0 0-.94.95v11.12c0 .53.42.95.94.95h6.22v28.8c0 11.63 5.79 17.53 17.22 17.53 4.64 0 8.49-.96 12.12-3.02.3-.16.48-.48.48-.82v-10.6a.94.94 0 0 0-.45-.8.92.92 0 0 0-.92-.04 16.35 16.35 0 0 1-7.6 1.83c-4.15 0-6.01-1.9-6.01-6.11V77.54h14.25c.52 0 .94-.43.94-.95V65.46a.92.92 0 0 0-.93-.95h-.01zm49.64.05v-1.78c0-5.27 2.02-7.61 6.54-7.61 2.7 0 4.87.53 7.3 1.34a.94.94 0 0 0 1.24-.9V44.7a.94.94 0 0 0-.67-.91 35.47 35.47 0 0 0-10.76-1.55c-11.95 0-18.28 6.74-18.28 19.47v2.74h-6.22a.95.95 0 0 0-.95.95v11.18c0 .53.43.95.95.95h6.22v44.4c0 .54.43.96.95.96h12.94c.53 0 .95-.42.95-.95v-44.4h12.09l18.52 44.4c-2.1 4.66-4.17 5.59-6.99 5.59-2.28 0-4.69-.68-7.14-2.03a1.03 1.03 0 0 0-.75-.07.94.94 0 0 0-.56.5l-4.39 9.64a.95.95 0 0 0 .41 1.23 27.25 27.25 0 0 0 13.82 3.54c9.56 0 14.85-4.46 19.5-16.44l22.46-58.04a.92.92 0 0 0-.1-.88.92.92 0 0 0-.77-.41h-13.48a.95.95 0 0 0-.9.63l-13.81 39.44-15.12-39.46a.94.94 0 0 0-.88-.61h-22.12zm-28.78-.05h-12.95a.95.95 0 0 0-.95.95v56.48c0 .53.43.95.95.95h12.95c.52 0 .95-.42.95-.95V65.46a.95.95 0 0 0-.95-.95zm-6.4-25.72a9.28 9.28 0 1 0-.01 18.57 9.28 9.28 0 0 0 .01-18.57zm113.42 43.88c-5.12 0-9.11-4.12-9.11-9.11s4.04-9.16 9.16-9.16 9.11 4.11 9.11 9.1c0 5-4.04 9.17-9.16 9.17zm.05-17.37a8.15 8.15 0 0 0-8.2 8.26c0 4.54 3.51 8.2 8.15 8.2 4.67 0 8.2-3.71 8.2-8.26 0-4.54-3.51-8.2-8.15-8.2zm2.02 9.14l2.58 3.6h-2.18l-2.32-3.3h-1.99v3.3h-1.82V68.5h4.26c2.23 0 3.69 1.13 3.69 3.05.01 1.56-.9 2.52-2.21 2.9h-.01zm-1.54-4.31h-2.37v3.02h2.37c1.18 0 1.89-.58 1.89-1.51 0-.99-.71-1.51-1.89-1.51z"/></svg></a></div>
              <div>
                <form id="redeem-form">
                  <input id="redeem-input" type="text" name="code" placeholder="Enter Download Code" pattern="[A-Za-z0-9- ]+{6,12}$" value="<?php echo htmlspecialchars($code); ?>">
                  <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
                  <input id="form-album" type="hidden" name="album" value="3948">
                  <input id="redeem-submit" type="submit" value="" name="submit">
                </form>
              </div>
            </div>
          </div>
        </article>
      </section>
      <section class="contact-section">
        <article class="textual clearfix">
          <div class="side-photo">
            <picture>
              <source srcset="img/southshore.webp 990w" type="image/webp">
              <source srcset="img/southshore.jpg 990w, img/southshore50.jpg 495w"><img src="img/southshore.jpg" loading="lazy" alt="Lorenzo Wood singing, at South Shore Center, viewed from the side">
            </picture>
          </div>
          <div class="next-to-side-photo">
            <div class="next-to-side-photo-padded">
              <header>
                <h2>Contact Lorenzo Wood Music</h2>
              </header>
              <p>Book a gig, suggest a collaboration or song, or just say hi!</p>
              <div class="input-form">
                <form id="contact-form" action="mailme.php" method="post">
                  <div><input type="email" name="e" id="e_fm" placeholder="Your Email Address" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required></div>
                  <div>
                    <input type="text" id="e_na" name="n" placeholder="Your Name" value="">
                  </div>
                  <div>
                    <textarea type="text" id="e_ms" name="m" rows="10" cols="40" required="required" placeholder="Message"></textarea>
                  </div>
                  <div>
                    <input class="ir" type="text" name="subject" value="">
                    <input class="ir" type="text" name="message" value="">
                    <input type="hidden" name="f" value="This message was sent from the LorenzoWoodMusic.com website.">
                    <input type="hidden" name="s" value="Message sent from LorenzoWoodMusic.com">
                    <input type="hidden" name="r" value="/">
                    <input type="hidden" name="h" value="contact-form">
                    <input class="button" type="submit" value="Contact us">
                  </div><?php if (isset($_GET['msg'])) { echo '<h2>' . htmlspecialchars($_GET['msg']) . '</h2>'; } ?>
<?php if (isset($_GET['e'])) { echo '<h2 style="color:#C00">' . htmlspecialchars($_GET['e']) . '</h2>'; } ?>
                </form>
              </div>
            </div>
          </div>
        </article>
      </section>
    </main>
    <footer>
      <div class="icons exhaustive safe-area-only"><a data-title="Instagram" href="https://instagram.com/LorenzoWoodMusic"><svg aria-label="Instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Instagram</desc><path fill="#e95950" d="M12 2.16c3.2 0 3.58.01 4.85.07 3.25.15 4.77 1.7 4.92 4.92.06 1.27.07 1.65.07 4.85 0 3.2-.01 3.58-.07 4.85-.15 3.23-1.66 4.77-4.92 4.92-1.27.06-1.64.07-4.85.07a83 83 0 0 1-4.85-.07c-3.26-.15-4.77-1.7-4.92-4.92A82.98 82.98 0 0 1 2.16 12a84 84 0 0 1 .07-4.85c.15-3.23 1.67-4.77 4.92-4.92A84.4 84.4 0 0 1 12 2.16zM12 0C8.74 0 8.33.01 7.05.07 2.7.27.27 2.7.07 7.05A84.29 84.29 0 0 0 0 12c0 3.26.01 3.67.07 4.95.2 4.36 2.62 6.78 6.98 6.98 1.28.06 1.7.07 4.95.07 3.26 0 3.67-.01 4.95-.07 4.35-.2 6.78-2.62 6.98-6.98.06-1.28.07-1.7.07-4.95 0-3.26-.01-3.67-.07-4.95C23.73 2.7 21.3.27 16.95.07A84.33 84.33 0 0 0 12 0zm0 5.84a6.16 6.16 0 1 0 0 12.32 6.16 6.16 0 0 0 0-12.32zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.4-11.85a1.44 1.44 0 1 0 0 2.89 1.44 1.44 0 0 0 0-2.89z"/></svg></a><a data-title="Facebook" href="https://facebook.com/LorenzoWoodMusic"><svg aria-label="Facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Facebook</desc><path fill="#3b5998" d="M22.68 0H1.32C.6 0 0 .6 0 1.32v21.36C0 23.4.6 24 1.32 24h11.5v-9.3H9.69v-3.62h3.13V8.41c0-3.1 1.9-4.79 4.66-4.79 1.32 0 2.46.1 2.8.15V7h-1.92c-1.5 0-1.8.71-1.8 1.76v2.32h3.59l-.47 3.62h-3.12V24h6.12c.73 0 1.32-.6 1.32-1.32V1.32C24 .6 23.4 0 22.68 0z"/></svg></a><a data-title="YouTube" href="https://www.youtube.com/lorenzowoodmusic"><svg aria-label="YouTube" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on YouTube</desc><path fill="#b00" d="M4.65 0H6.1l.99 3.7L8 0h1.45L7.79 5.5v3.76H6.35V5.51L4.65 0zm6.6 2.37c-1.12 0-1.86.74-1.86 1.84v3.35c0 1.2.62 1.83 1.86 1.83 1.02 0 1.82-.69 1.82-1.83V4.2c0-1.07-.8-1.84-1.82-1.84zm.53 5.13c0 .37-.2.65-.53.65-.36 0-.56-.3-.56-.65V4.32c0-.37.17-.65.53-.65.39 0 .56.27.56.65V7.5zm4.73-5.07v5.19c-.16.19-.5.5-.75.5-.27 0-.34-.18-.34-.45V2.43h-1.27v5.71c0 .68.2 1.22.89 1.22.38 0 .92-.2 1.47-.85v.75h1.27V2.43H16.5zm2.2 13.86c-.45 0-.54.31-.54.76v.66h1.07v-.66c0-.44-.1-.76-.53-.76zm-4.7.04a.93.93 0 0 0-.25.2v4.05c.1.1.19.18.28.23.2.1.49.1.62-.07.07-.09.1-.24.1-.45v-3.36a.82.82 0 0 0-.12-.5c-.15-.19-.42-.2-.63-.1zm4.82-5.2a183 183 0 0 0-13.66 0c-2.82.2-3.15 1.9-3.17 6.37.02 4.47.35 6.17 3.17 6.37a183 183 0 0 0 13.66 0c2.82-.2 3.15-1.9 3.17-6.37-.02-4.47-.35-6.17-3.17-6.37zM6.51 21.82H5.15v-7.54H3.74V13h4.18v1.28H6.5v7.54zm4.84 0h-1.2v-.72c-.23.27-.46.47-.7.6-.65.38-1.55.37-1.55-.95v-5.44h1.21v5c0 .25.06.43.32.43.24 0 .57-.3.71-.49v-4.94h1.21v6.5zm4.66-1.35c0 .8-.3 1.43-1.1 1.43-.45 0-.82-.16-1.15-.58v.5h-1.22V13h1.22v2.84c.27-.33.64-.6 1.07-.6.89 0 1.18.74 1.18 1.62v3.61zm4.47-1.75h-2.31v1.23c0 .49.04.9.53.9.5 0 .54-.34.54-.9v-.45h1.24v.48c0 1.26-.53 2.02-1.81 2.02-1.16 0-1.75-.85-1.75-2.02v-2.92c0-1.13.75-1.91 1.84-1.91 1.16 0 1.72.74 1.72 1.91v1.66z"/></svg></a><a data-title="Bands in Town" href="https://www.bandsintown.com/a/14965242"><svg aria-label="Bands in Town" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Bands in Town</desc><path fill="#00AEA8" d="M0 0h24v24H0z"/><path fill="#FFF" d="M12.5 7.5h4v5h-4zm4.5-5h4v10h-4z"/><path d="M3.5 3v18.5H21V13H8v4h9v.5H7.5V3h-4z" fill="#FFF"/><path fill="#FFF" d="M8 7.5h4v5H8z"/></svg></a></div>
      <p><b>Copyright © 2017-2020 Lorenzo Wood</b><span class="dimmer">&nbsp; Photo credits: Lucy Gigli, David Weintraub</span>
      </p>
      <p class="js-warning">
        JavaScript is disabled in your browser; please enable it to see missing content.
        
      </p>
    </footer>
    <div id="cover" style="display:none"></div>
    <div id="redeemer" style="display:none"></div>
    <div id="close-redeem" style="display:none">&#215;</div>
    <div class="scrolldown bounce" id="scroll-arrow" style="display:none"><a class="down-arrow" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M1 6l11 10L23 6" stroke="#fff" stroke-width="2" stroke-linecap="square" fill="none"/></svg></a></div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\\/script>')</script>
    <script>
      
// REQUIREMENT: JQUERY

$('.down-arrow').click(function(event) {
	event.preventDefault();
	$('html, body').animate({
		scrollTop: $('.down-arrow').offset().top
	}, 1000);
	return false;
});

// Hide the arrow after a bit
setTimeout(function(){
	$( "#scroll-arrow" ).fadeOut( "slow", function() {
		$('#scroll-arrow').remove();
	});
}, 2000);

// Bands in Town - display past events. Not showing anything if no javascript.
$('#recent-performances').html('<a id="recent-link" href="#">& Recent</a>');

// If we click to show recent performances too, this gets revealed. A one-way street BTW.
$('#recent-link').click(function() {
	$('.bit-header').text('Recent & Upcoming Performances');
	$('.bit-past').show();
	return false;
});


// MANUALLY BRING IN: http://lightwidget.com/widgets/lightwidget.js
window.lightwidget||(window.lightwidget=function(){"use strict";var e=[],t=0,i=!1,n=!1,o=["lightwidget.com","instansive.com","dev.lightwidget.com"],d=function(e){return n=e},s=function(e,t){e.contentWindow&&e.contentWindow.postMessage("sizing:"+t,window.location.protocol+"//lightwidget.com")},c=function(t){var i=t.origin.replace(/^https?\:\/\//i,"");if(-1!==o.indexOf(i)){var n=t.data.split(":");try{"sizing"==n[0]&&void 0!=e[parseInt(n[2])]&&(e[parseInt(n[2])].style.height=n[1]+"px")}catch(e){}}},r=function(e){n&&console.log(e);var t=e.origin.replace(/^https?\:\/\//i,"");if(-1!==o.indexOf(t)){var i=e.data.split(":");n&&console.log(i);try{if("sizing_iid"==i[0]){var d=i[2],s=d.replace("instansive_","").replace("lightwidget_");void 0!==document.querySelectorAll('iframe[src*="lightwidget.com/widgets/'+s+'"]')[0]?(n&&console.log("iframesrc"),document.querySelectorAll('iframe[src*="lightwidget.com/widgets/'+s+'"]')[0].style.height=i[1]+"px"):void 0!=document.getElementById(d)?document.getElementById(d).style.height=i[1]+"px":(d=d.replace("instansive","lightwidget"),void 0!=document.getElementById(d)&&(document.getElementById(d).style.height=i[1]+"px"))}}catch(e){n&&console.log(e)}}},g=function(e){n&&console.log("json",e);var t=e.origin.replace(/^https?\:\/\//i,"");if(-1!==o.indexOf(t))try{var i=JSON.parse(e.data);"lightwidget_widget_size"===i.type&&i.size>0&&(void 0!==document.querySelectorAll('iframe[src*="lightwidget.com/widgets/'+i.widgetId+'"]')[0]?document.querySelectorAll('iframe[src*="lightwidget.com/widgets/'+i.widgetId+'"]')[0].style.height=i.size+"px":void 0!==document.querySelectorAll('iframe[src*="instansive.com/widgets/'+i.widgetId+'"]')[0]&&(document.querySelectorAll('iframe[src*="instansive.com/widgets/'+i.widgetId+'"]')[0].style.height=i.size+"px"))}catch(t){n&&console.log(t,e.data)}},l=function(){window.addEventListener?(window.addEventListener("message",c,!1),window.addEventListener("message",r,!1),window.addEventListener("message",g,!1)):(window.attachEvent("onmessage",c),window.attachEvent("onmessage",r),window.attachEvent("onmessage",g))};return l(),{refresh:function(){if(i)for(var n=0;n<t;n++)s(e[n],n)},reload:function(){l()},debug:function(e){return d(e)}}}()),window.lightwidget.refresh();

// LightWidget for Instagram: 6x2, @900=4x2, @600=2x4. Zoom in, padding 5, preloader
//
// Insert this widget HTML into the DOM after everything has loaded so that the page won't block waiting for this to load in.

$('#lightweight_widget').html('<iframe src="https://lightwidget.com/widgets/9b560c45f4e75b9f93dd8bcca23a28a3.html" scrolling="no" allowtransparency="true" class="lightwidget-widget"></iframe>');



// Form Submission

$('#contact-form').submit(function( event ) {
	$.ajax({
		type: 'POST',
		url: 'https://www.lorenzowoodmusic.com/mailme.php',
		data: $("#contact-form").serialize(),

		success: function(data, textStatus, jqXHR ) {
			if (data !== '') {
				$('#e_fm').val('');
				$('#e_ms').val('');
				$('#e_na').val('');
				setTimeout(function(){ window.alert("Your message was sent. You should hear back from us soon!"); },0);
			} else {
				window.alert('Sorry, but the contact form submission did not work as expected.');
			}
		},
		error: function(jqXHR, textStatus, errorThrown ) {
			window.alert('ERROR. ' + errorThrown + ' ' + textStatus);
		},
		complete: function(jqXHR, textStatus ) {

		}
	});
	event.preventDefault();
});


$('#redeem-form').submit(function( event ) {
	if ($('#redeem-input').val().length > 0) {
		$.ajax({
			type: 'POST',
			url: '/redeem.php',
			data: $("#redeem-form").serialize(),

			success: function(data, textStatus, jqXHR ) {
				if (data !== '') {
					$('#cover').show();
					$('#redeemer').show();
					$('#close-redeem').show();
					$('#redeemer').html(data);		// We’re done; let the content here do the rest.
				} else {
					window.alert('Sorry, but the code you entered has already been redeemed or was entered incorrectly.');
					$('#redeem-input').focus();
				}
			},
			error: function(jqXHR, textStatus, errorThrown ) {
				window.alert(errorThrown + ' ' + textStatus);
			},
			complete: function(jqXHR, textStatus ) {

			}
		});
	}
	event.preventDefault();
});
$('#close-redeem').click(function() {
	$('#cover').fadeOut('slow');
	$('#close-redeem').fadeOut('slow');
	$('#redeemer').fadeOut('fast');
});


// Replace all soundcloud proxies with a real embed.

$('.soundcloud-proxy').each(function() {
	var code = $(this).data('code');
	var iframeCode = '<iframe class="soundcloud" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/'+ code + '&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=false&amp;show_artwork=false&amp;show_reposts=false" />';
		$(this).replaceWith(iframeCode);
});


// Responsively resize the hero image. In sweet spot of screen aspect ratio, hero is full screen.
function fullscreen(event){
	var width = $(window).width();
	var height= $(window).height();
	var fullSizeHero = false;
	if (width/height < 0.575) height = Math.round(width/0.575); // fill iphone x/xr/xs
	else if (width/height > 1.618) height = Math.round(width/1.618);
	else fullSizeHero = true;

	// Show scroll arrow if first time here and we are showing full-screen hero
	if (fullSizeHero && !event) {
		$('#scroll-arrow').css('display', 'block');
	} else {
		$('#scroll-arrow').remove();
	}

	jQuery('#main-header,img.hero-image').css({
		width: width,
		height: height
	});
	//$( ".info" ).text( width + ' x ' + height + ' … ' + width/height );
}

fullscreen(null);

// Do something clever: when we scroll past the hero image, turn off the grayscale filter to make it color

var targetOffset = $("main").offset().top;

var $w = $(window).scroll(function(){
	$('#scroll-arrow').remove();
	if ( $w.scrollTop() > targetOffset ) {
		$('img.hero-image').css({filter:"grayscale(0%)",opacity:"1.0"});
	}
});


// Run the function in case of window resize
$(window).resize(function(event) {
	fullscreen(event);
});



      for(var iOS=/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream,youtube=document.querySelectorAll(".youtube"),i=0;i<youtube.length;i++){var embed=youtube[i].dataset.embed.split(":"),code=embed[0],title=embed[1],caption=embed[2];if(iOS){var iframe=document.createElement("iframe");iframe.setAttribute("allowfullscreen",""),iframe.setAttribute("src","https://www.youtube.com/embed/"+code),youtube[i].appendChild(iframe)}else{var source="https://img.youtube.com/vi/"+code+"/sddefault.jpg",image=new Image;image.src=source,image.id="video-"+code,image.alt="YouTube thumbnail",image.addEventListener("load",void youtube[i].appendChild(image)),youtube[i].addEventListener("click",function(){var e,t=this.dataset.embed.split(":")[0],i=document.createElement("iframe");i.setAttribute("frameborder","0"),i.setAttribute("allowfullscreen",""),i.setAttribute("src","https://www.youtube.com/embed/"+t+"?rel=0&showinfo=0&autoplay=1"),this.innerHTML="",this.appendChild(i)});var play=document.createElement("div");play.setAttribute("class","play-button"),youtube[i].appendChild(play);var t=document.createElement("div");t.setAttribute("class","title"),t.innerText=title,youtube[i].appendChild(t)}if(caption){var captionDiv=document.createElement("p");captionDiv.innerText=caption,youtube[i].insertAdjacentElement("afterend",captionDiv)}}if (iOS) $('#form-album').val(window.DeviceMotionEvent ? '2938' : '8603');
      document.documentElement.className = document.documentElement.className.replace("no-js","js");
    </script><?php if ($code) { ?><script>$('#redeem-form').submit();</script><?php } ?>
<script type="application/ld+json">{"@context":"http://schema.org","@type":"Person","name":"Lorenzo Wood","url":"https://www.lorenzowoodmusic.com/","sameAs":["https://www.facebook.com/lorenzowoodmusic/","https://twitter.com/lorenzowmusic","https://www.instagram.com/LorenzoWoodMusic/","https://www.youtube.com/lorenzowoodmusic","https://soundcloud.com/LorenzoWoodMusic","https://geo.itunes.apple.com/us/artist/lorenzo-wood/1262743720?at=1000lKSp","https://open.spotify.com/artist/1rEOrX1GSkT1SJAsG1fBYA?si=kAr7Wf29R7WkScnbG9d2dg"]}</script>
  </body>
</html>