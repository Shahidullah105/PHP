<?php

function get_header(){
  require('includes/header.php');
}

function get_navbar(){
  require('includes/navbar.php');
}
function get_sidebar(){
  require('includes/sidebar.php');
}
function get_dash(){
  require('includes/dash.php');
}

function get_category_content(){
  require('includes/category-content.php');
}

function get_post_content(){
  require('includes/post-content.php');
}
function get_manage_post_content(){
  require('includes/manage-post-content.php');
}

function get_edit_post_content(){
  require('includes/edit-post-content.php');
}

function get_footer(){
  require('includes/footer.php');
}
?>