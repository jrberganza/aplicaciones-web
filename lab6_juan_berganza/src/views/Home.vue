<template>
  <div class="home">
    <aside>
      <h1>Otros temas de interes</h1>
      <ul class="otros-temas">
        <li><a href="https://es.m.wikipedia.org/wiki/M%C3%BAsica">Música (Wikipedia)</a></li>
        <li><a href="https://www.youtube.com/c/theneedledrop">Canal de theneedledrop</a></li>
        <li><a href="https://www.youtube.com/channel/UCG39iIqfeD8d8YBgMqdYauw">Canal de Professor Skye's Record
            Review</a></li>
        <li><a href="https://www.last.fm/home">last.fm - Para compartir y registrar tus gustos de música</a>
        </li>
      </ul>
    </aside>
    <section>
      <article>
        <h1 id="intro">Introducción</h1>
        <p>
          Bienvenidos a Music Portal. Aquí vas a encontrar información sobre la música más aclamada por
          críticos
          globales y en línea.
        </p>
        <blockquote>
          La música (del griego: μουσική [τέχνη] - mousikē [téchnē], «el arte de las musas») es, según la
          definición tradicional del término, el arte de crear y organizar sonidos y silencios respetando los
          principios fundamentales de la melodía, la armonía y el ritmo, mediante la intervención de complejos
          procesos psicoanímicos.
          <cite><a href="https://es.m.wikipedia.org/wiki/M%C3%BAsica">Música (Wikipedia)</a></cite>
        </blockquote>
      </article>
      <article>
        <h1 id="grammys">Premios GRAMMYs 2022</h1>
        <ul>
          <li><strong>Grabación del año:</strong> Leave the Door Open - Silk Sonic</li>
          <li><strong>Album del año:</strong> We Are - Jon Batiste</li>
          <li><strong>Canción del año:</strong> Leave the Door Open - Silk Sonic</li>
          <li><strong>Mejor artista nuevo:</strong> Olivia Rodrigo</li>
          <li><strong>Mejor álbum vocal de pop:</strong> Sour - Olivia Rodrigo</li>
          <li><strong>Mejor álbum vocal de pop tradicional:</strong> Love for Sale - Tony Bennett y Lady Gaga
          </li>
          <li><strong>Mejor interpretación de dúo o grupo pop:</strong> Kiss Me More - Doja Cat con SZA</li>
          <li><strong>Mejor interpretación vocal pop solista:</strong> Drivers License - Olivia Rodrigo</li>
          <li><strong>Mejor álbum dance o electrónica:</strong> Subconsciously - Black Coffee</li>
          <li><strong>Mejor grabación dance:</strong> Alive - Rüfüs Du Sol</li>
          <li><strong>Mejor interpretación de R&B:</strong> Leave the Door Open - Silk Sonic</li>
          <li><strong>Mejor interpretación R&B tradicional:</strong> Fight for You - H.E.R.</li>
          <li><strong>Mejor canción de R&B:</strong> Leave the Door Open - Silk Sonic</li>
        </ul>
      </article>
      <article>
        <h1 id="fantano">Mejores albumes del 2021 según Anthony Fantano</h1>
        <ol>
          <li><strong>The Turning Wheel</strong> - Spellling</li>
          <li><strong>Sinner Get Ready</strong> - Lingua Ignota</li>
          <li><strong>KicK iii</strong> - Arca</li>
          <li><strong>Promises</strong> - Floating Points / Pharoah Sanders / London Symphony Orchestra</li>
          <li><strong>Daddy's Home</strong> - St. Vincent</li>
          <li><strong>LP!</strong> - JPEGMAFIA</li>
          <li><strong>Henki</strong> - Richard Dawson & Circle</li>
          <li><strong>Sometimes I Might Be Introvert</strong> - Little Simz</li>
          <li><strong>Nurture</strong> - Porter Robinson</li>
          <li><strong>Ska Dream</strong> - Jeff Rosenstock</li>
        </ol>
      </article>
    </section>
  </div>
</template>

<style>
.home {
  display: grid;
  grid-template-columns: 25% auto;
  min-height: calc(100vh - 200px - 100px);
}

aside {
  padding: 10px 0px;
}

aside h1 {
  margin: 0;
  padding: 10px 10px;

  text-transform: uppercase;
  text-align: center;

  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: inherit;
  color: #333;
}

aside .otros-temas {
  list-style-type: none;

  padding: 0;
  margin: 0;

  border-right: #eee 1px solid;

  color: #222;
}

aside .otros-temas li {
  text-decoration: none;
  color: inherit;
}

aside .otros-temas li a {
  display: block;
  height: 100%;
  padding: 10px 20px;

  text-decoration: none;
  color: inherit;
}

aside .otros-temas li a:hover {
  background-color: rgba(0, 0, 0, 0.05);
  color: black;
}

.home section {
  padding: 20px;
}

article {
  padding-top: 10px;
  padding-bottom: 20px;
  border-bottom: 1px solid #eee;
}

h1 {
  margin-top: 10px;
  margin-bottom: 10px;

  font-family: Calibri;
  font-size: 28px;
}

blockquote {
  position: relative;

  max-width: 500px;
  margin: 0.25em 0;
  padding: 0.35em 40px;

  font-style: italic;
  color: #222;
}

blockquote::before {
  content: "\201C";

  display: block;

  position: absolute;
  left: -15px;
  top: -8px;

  padding-left: 10px;

  font-family: Georgia, 'Times New Roman', Times, serif;
  font-size: 80px;
  color: #7a7a7a;
}

blockquote cite {
  display: block;
  margin-top: 5px;

  color: #999999;
  font-size: 14px;
}

blockquote cite:before {
  content: "\2014 \2009";
}

@media only screen and (max-width: 800px) {
  .home {
    display: block;
  }

  .otros-temas {
    border-right: none;
    border-bottom: #eee 1px solid;
  }
}
</style>

<script>
export default {
  name: 'Home',
  components: {
  }
}
</script>
