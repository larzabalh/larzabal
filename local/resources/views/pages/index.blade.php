@include('layouts.heads')

@include('layouts.navbar')

<!-- Banner -->
<section id="banner" class="major">
    <div class="inner">
        <header class="major">
            <h1>Nuestro Compromiso, es la innovación</h1>
        </header>
        <div class="content">
            <p>Una empresa distribuidora de equipos de computación y todo en hardware.</p>
            <ul class="actions">
                <li><a href="#one" class="button next scrolly">Conocer más</a></li>
            </ul>
        </div>
    </div>
</section>

<!-- Main -->
<div id="main">

    <!-- One -->
    <section id="one" class="tiles">
        <article>
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
            <header class="major">
                <h3>Equipos de última generación</h3>
                <p>Proveemos computadoras, y equipos con características actualizadas de gran capacidad.</p>
            </header>
        </article>
        <article>
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
            <header class="major">
                <h3>¿Como Trabajamos?</h3>
                <p>Operamos eficazmente a diario con particulares y organizaciones que
                requieren actualizar e innovar sus equipos computacionales.</p>
            </header>
        </article>
        <article>
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
            <header class="major">
                <h3>Experiencia</h3>
                <p>Sabemos lo que tu trabajo necesita, según tu actividad, te indicamos los equipos más
                adecuados a tus necesidades.</p>
            </header>
        </article>
        <article>
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
            <header class="major">
                <h3>Competitividad</h3>
                <p>Entrega sin Cargo. Ofertas, descuentos y promociones.
                    Apertura de Cuentas Corrientes acorde a su negocio.</p>
            </header>
        </article>
        <article>
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
            <header class="major">
                <h3>Asesoría</h3>
                <p>¿Tu empresa necesita hardware y no sabes cual escoger?
                Te damos toda la asesoría para que inviertas justo lo que necesitas.</p>
            </header>
        </article>
        <article>
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
            <header class="major">
                <h3>Adaptables</h3>
                <p>Nos adaptamos a tus requerimientos y necesidades, buscando ofrecerte los
                productos más acordes a tu actividad económica.</p>
            </header>
        </article>
    </section>

    <!-- Two -->
    <section id="two">
        <div class="inner">
            <header class="major">
                <h2>Parte de nuestros productos</h2>
            </header>
            <p>Ofrecemos productos de calidad, a un excelente precio, adaptados a tu prespuesto y disponibilidad.</p>

        </div>
    </section>

</div>
<div id="main">
<!-- One -->
<section id="one" class="tiles">

<article>
									<span class="image">
										<img src="images/pic07.jpg" alt="" />
									</span>
    <header class="major">
        <h3>Laptops y Notebooks
            </h3>

    </header>
</article>
<article>
									<span class="image">
										<img src="images/pic08.jpg" alt="" />
									</span>
    <header class="major">
        <h3>Periféricos Ergonómicos</h3>

    </header>
</article>
    <article>
									<span class="image">
										<img src="images/pic09.jpg" alt="" />
									</span>
        <header class="major">
            <h3>Monitores de Alta resolución</h3>

        </header>
    </article>
    <article>
									<span class="image">
										<img src="images/pic10.jpg" alt="" />
									</span>
        <header class="major">
            <h3>Equipos de Mesa - Desktops</h3>

        </header>
    </article>
</section>
</div>
<!-- Contact -->
<section id="contact">
    <div class="inner">
        <section>
            <form method="post" action="#">
                <div class="field half first">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" />
                </div>
                <div class="field half">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" />
                </div>
                <div class="field">
                    <label for="message">Mensaje</label>
                    <textarea name="message" id="message" rows="6"></textarea>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Enviar Mensaje" class="special" /></li>
                    <li><input type="reset" value="Limpiar" /></li>
                </ul>
            </form>
        </section>
        <section class="split">
            <section>
                <div class="contact-method">
                    <span class="icon alt fa-envelope"></span>
                    <h3>Correo</h3>
                    <a href="#">omar@larzabal.com.ar</a>
                </div>
            </section>
            <section>
                <div class="contact-method">
                    <span class="icon alt fa-phone"></span>
                    <h3>Teléfono</h3>
                    <span>+54011 4643-9144</span>
                </div>
            </section>
            <section>
                <div class="contact-method">
                    <span class="icon alt fa-home"></span>
                    <h3>Dirección</h3>
                    <span>Larraya 1740 1º D<br />
					Ciudad autónoma de Buenos Aires - Argentina<br />
					</span>
                </div>
            </section>
        </section>
    </div>
</section>

@include('layouts.footer')
</html>