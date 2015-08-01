<?php

use Symfony\Component\HttpFoundation\Response;

/**
 * 
 * @return Response
 */
function list_action()
{
	 $posts = get_all_posts();
	 $html = render_template('templates/list.php', array('posts' => $posts));
         
         return new Response($html);
}

/**
 * 
 * @param type $id
 * @return Response
 */
function show_action($id)
{
	$post = get_post_by_id($id);
	$html = render_template('templates/show.php', array('post' => $post));

        return new Response($html);
}

/**
 * 
 * @param type $path
 * @param array $args
 * @return type
 */
function render_template($path, array $args)
{
    extract($args);
    ob_start();
    require $path;
    $html = ob_get_clean();
    
    return $html;
}