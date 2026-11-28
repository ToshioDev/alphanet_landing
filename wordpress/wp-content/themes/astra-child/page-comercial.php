<?php
/**
 * Template Name: Comercial
 * Description: Plantilla personalizada para página comercial con sección hero y dos cajas de texto responsivas.
 *
 * @package Astra Child
 */

get_header(); ?>

<div class="hero-section" style="padding: 2rem; background-color: #f5f5f5;">
    <h1 class="hero-title" style="font-size: 2.5rem; margin-bottom: 1rem;">Bienvenido a Nuestra Página Comercial</h1>
    <p class="hero-subtitle" style="font-size: 1.25rem; max-width: 600px;">Aquí puedes destacar tu mensaje principal con un diseño atractivo y responsivo.</p>
</div>

<div class="content-boxes" style="display: flex; flex-wrap: wrap; gap: 1rem; padding: 2rem;">
    <div class="box box-left" style="flex: 1 1 300px; background-color: #e0e0e0; padding: 1rem;">
        <h2 class="box-title">Caja Izquierda</h2>
        <p class="box-text">Contenido de la caja izquierda. Puedes añadir texto, imágenes o cualquier otro elemento.</p>
    </div>
    <div class="box box-right" style="flex: 1 1 300px; background-color: #d0d0d0; padding: 1rem;">
        <h2 class="box-title">Caja Derecha</h2>
        <p class="box-text">Contenido de la caja derecha. Se adapta responsivamente para verse bien en todos los dispositivos.</p>
    </div>
</div>

<!-- Aquí puedes añadir código personalizado para esta plantilla -->

<?php get_footer(); ?>
