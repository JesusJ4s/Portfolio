<?php
// index.php

// Incluir la cabecera
include 'partials/header.php';

// Cargar los datos de proyectos
include 'data/projects.php';
?>

<section class="hero-section" id="about">
    <div class="hero-image">
        <img src="img/profile.jpg" alt="Foto de perfil de Jesús Castillo">
    </div>
    <div class="hero-text">
        <h1>Hola, soy Jesús Castillo</h1>
        <p>
            Desarrollador de software apasionado con experiencia en PHP, JavaScript y Python. Me especializo en crear aplicaciones web eficientes y escalables.
            Aquí puedes poner un texto breve sobre ti, tus intereses y lo que buscas.
        </p>
        
        <div class="social-links">
            <a href="[Tu Link]" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
            <a href="[Tu Link]" target="_blank" aria-label="GitHub"><i class="fab fa-github"></i></a>
            <a href="[Tu Link]" target="_blank" aria-label="Twitter/X"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</section>

<section class="projects-section" id="projects">
    <h2>Mis Proyectos</h2>
    <div class="project-grid">
        
        <?php
        // Iteramos sobre el array de proyectos
        foreach ($projects as $project):
        ?>
            
            <div class="project-card">
                <a href="<?php echo htmlspecialchars($project['link']); ?>" target="_blank">
                    <div class="card-image">
                        <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="Portada del proyecto <?php echo htmlspecialchars($project['title']); ?>">
                    </div>
                    <div class="card-content">
                        <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                        <p><?php echo htmlspecialchars($project['description']); ?></p>
                    </div>
                </a>
            </div>

        <?php
        endforeach;
        ?>

    </div> </section>

<?php
// Incluir el pie de página
include 'partials/footer.php';
?>