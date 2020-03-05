<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> >
    <header>
			<div class="menu-icon">
				<span class="menu-icon__line menu-icon__line-left"></span>
				<span class="menu-icon__line"></span>
				<span class="menu-icon__line menu-icon__line-right"></span>
			</div>

			<div class="nav">
					<?php
					 	wp_nav_menu( array( 'theme_location' => 'header-menu',
						'container_class' => 'nav__content',
						'menu_class' => 'nav__list')
					); ?>
			</div>

    </header>
		<div class="main">

<script>
console.clear();

const app = (() => {
	let body;
	let menu;
	let menuItems;

	const init = () => {
		body = document.querySelector('body');
		menu = document.querySelector('.menu-icon');
		menuItems = document.querySelectorAll('.nav__list-item');

		applyListeners();
	}

	const applyListeners = () => {
		menu.addEventListener('click', () => toggleClass(body, 'nav-active'));
	}

	const toggleClass = (element, stringClass) => {
		if(element.classList.contains(stringClass))
			element.classList.remove(stringClass);
		else
			element.classList.add(stringClass);
	}

	init();
})();

</script>
