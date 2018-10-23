// import external dependencies
import 'jquery';
// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import slick from 'slick-carousel';
import googlemaps from './libs/google-maps';
import pjax from 'jquery-pjax';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  slick,
  googlemaps,
  pjax,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

